<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\API\ECS\ReportRepository;
use App\Helpers\Helper;
use Validator;

class ReportController extends Controller
{
    private $reportRepo;

    public function __construct(ReportRepository $reportRepo)
    {
        $this->reportRepo = $reportRepo;
    }

    public function transaction(Request $request)
    {
        if ($request->all()) {
            $rules = [
                'year' => 'required|numeric',
                'month' => 'required|numeric'
            ];
            $messages = [
                'year.required' => '請選擇年份',
                'year.numeric' => '請選擇正確的年份',
                'month.required' => '請選擇月份',
                'month.numeric' => '請選擇正確的月份',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $q = $request->all();
        } else {
            $q['year'] = date('Y', strtotime(date('Y-m')." -1 month"));
            $q['month'] = date('m', strtotime(date('Y-m')." -1 month"));
        }

        $rtn = $this->reportRepo->getTransactionData($q);
        return view('ECS.report.transaction', ['q' => $q, 'rtn' => $rtn]);
    }

    public function activityIncome(Request $request)
    {
        if ($request->all()) {
            $rules = [
                'year' => 'required|numeric',
                'month' => 'required|numeric'
            ];
            $messages = [
                'year.required' => '請選擇年份',
                'year.numeric' => '請選擇正確的年份',
                'month.required' => '請選擇月份',
                'month.numeric' => '請選擇正確的月份',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $q = $request->all();
        } else {
            $q['year'] = date('Y', strtotime(date('Y-m')." -1 month"));
            $q['month'] = date('m', strtotime(date('Y-m')." -1 month"));
        }

        $rtn = $this->reportRepo->getTransactionData($q);

        $activity_incomes = [];
        foreach($rtn['data'] as $d) {
            /*
            if (!array_key_exists($d['activity_name'], $activity_incomes)) {
                $activity_incomes[$d['activity_name']] = [
                    'activity_code' => $d['activity_code'],
                    'income' => ($d['income_refund'] == 'income' ? $d['fee'] : 0),
                    'refund' => ($d['income_refund'] == 'refund' ? $d['fee'] : 0),
                ];
            } else {
                $activity_incomes[$d['activity_name']]['income'] += ($d['income_refund'] == 'income' ? $d['fee'] : 0);
                $activity_incomes[$d['activity_name']]['refund'] += ($d['income_refund'] == 'refund' ? $d['fee'] : 0);
            }
            */

            $k = $d['activity_code'].'|'.$d['activity_name'];
            if (!array_key_exists($k, $activity_incomes)) {
                $activity_incomes[$k] = [
                    'income' => ($d['income_refund'] == 'income' ? $d['fee'] : 0),
                    'refund' => ($d['income_refund'] == 'refund' ? $d['fee'] : 0),
                ];
            } else {
                $activity_incomes[$k]['income'] += ($d['income_refund'] == 'income' ? $d['fee'] : 0);
                $activity_incomes[$k]['refund'] += ($d['income_refund'] == 'refund' ? $d['fee'] : 0);
            }
            /*
            if (!array_key_exists($d['activity_code'], $activity_incomes)) {
                $activity_incomes[$d['activity_code']][$d['activity_name']] = [
                    'income' => ($d['income_refund'] == 'income' ? $d['fee'] : 0),
                    'refund' => ($d['income_refund'] == 'refund' ? $d['fee'] : 0),
                ];
            } else {
                if (!array_key_exists($d['activity_name'], $activity_incomes[$d['activity_code']])) {
                    $activity_incomes[$d['activity_code']][$d['activity_name']] = [
                        'income' => ($d['income_refund'] == 'income' ? $d['fee'] : 0),
                        'refund' => ($d['income_refund'] == 'refund' ? $d['fee'] : 0),
                    ];
                } else {
                    $activity_incomes[$d['activity_code']][$d['activity_name']]['income'] += ($d['income_refund'] == 'income' ? $d['fee'] : 0);
                    $activity_incomes[$d['activity_code']][$d['activity_name']]['refund'] += ($d['income_refund'] == 'refund' ? $d['fee'] : 0);
                }
            }
            */
        }
        ksort($activity_incomes);

        $total_income = $total_refund = $net = 0;
        foreach($activity_incomes as $ai) {
            $total_income += $ai['income'];
            $total_refund += $ai['refund'];
        }

        return view('ECS.report.activity_income', compact('q', 'activity_incomes', 'total_income', 'total_refund'));
    }

    public function invoice(Request $request)
    {
        if ($request->all()) {
            $rules = [
                'year' => 'required|numeric',
                'month' => 'required|numeric'
            ];
            $messages = [
                'year.required' => '請選擇年份',
                'year.numeric' => '請選擇正確的年份',
                'month.required' => '請選擇月份',
                'month.numeric' => '請選擇正確的月份',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $q = $request->all();
            $q['is_received'] = $validator->getData()['is_received'];
        } else {
            $q['year'] = date('Y', strtotime(date('Y-m')." -1 month"));
            $q['month'] = date('m', strtotime(date('Y-m')." -1 month"));
            $q['is_received'] = null;
        }

        $rtn = $this->reportRepo->getInvoiceData($q);
        $data = [];
        $total = 0;
        foreach($rtn['data'] as $d) {
            $fee = $d['invoice_status'] != 'void' ? $d['fee'] : 'CANCELLED';
            $total += $d['fee'];
            if (!array_key_exists($d['invoice_number'], $data)) {
                $data[$d['invoice_number']] = ['old_invoice_number' => $d['old_invoice_number'], 'name' => $d['member_chi_name'], 'fee' => $fee];
            }
        }
        return view('ECS.report.invoice', ['q' => $q, 'data' => $data, 'total' => $total]);
    }

    public function dailyIncome(Request $request)
    {
        if ($request->all()) {
            $rules = [
                'year' => 'required|numeric',
                'month' => 'required|numeric'
            ];
            $messages = [
                'year.required' => '請選擇年份',
                'year.numeric' => '請選擇正確的年份',
                'month.required' => '請選擇月份',
                'month.numeric' => '請選擇正確的月份',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $q = $request->all();
        } else {
            $q['year'] = date('Y', strtotime(date('Y-m')." -1 month"));
            $q['month'] = date('m', strtotime(date('Y-m')." -1 month"));
        }

        $rtn = $this->reportRepo->getDailyIncomeData($q);

        /*
        $full_data = [];
        for ($i = 1 ; $i <= date('t') ; $i++) {
            $full_data[] = [
                'date' => $q['year'].'-'.$q['month'].'-'.str_pad($i, 2, "0", STR_PAD_LEFT),
                'income' => 0
            ];
        }
        */

        $total = 0;
        foreach($rtn['data'] as $d) {
            if ($d['income']) {
                $total += $d['income'];
            }
        }
        $rtn['total'] = $total;

        return view('ECS.report.daily_income', ['q' => $q, 'rtn' => $rtn]);
    }
}
