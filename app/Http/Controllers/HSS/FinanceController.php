<?php

namespace App\Http\Controllers\HSS;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\API\HSS\FinanceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FinanceController extends Controller
{
    const LAUNDRY_FEES = ['L' => '大', 'M' => '中', 'S' => '小', 'service' => '服務費'];

    private $financeRepo;

    public function __construct(FinanceRepository $financeRepo)
    {
        $this->financeRepo = $financeRepo;
    }

    public function fee()
    {
        $data = $this->financeRepo->getFeeData();
        return view('HSS.finance.fee', ['data' => $data, 'LAUNDRY_FEES' => self::LAUNDRY_FEES]);
    }

    public function income(Request $request)
    {
        $q['year'] = date('Y', strtotime(date('Y-m')." -1 month"));
        $q['month'] = date('m', strtotime(date('Y-m')." -1 month"));

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
//                foreach ($validator->messages()->getMessages() as $field_name => $messages) {
//                    print_r($messages);
//                }
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $q = $request->all();
        }

        $rtn = $this->financeRepo->getIncomeData($q);

        $break_down = [];
        foreach($rtn['gross_break_down'] as $d) {
            $break_down[$d['type']] = $d['total'];
        }
        $data['invoice_numbers'] = implode(", ", $rtn['invoice_numbers']);
        $data['all_services_total'] = $break_down['meal_ingredient_fee'] +
            $break_down['laundry_fee'] + $break_down['meal_service_fee'] +
            $break_down['laundry_service_fee'] + $break_down['service_fee'];
        $data['gross_non_receive'] = $rtn['gross_non_receive'];
        $data['gross_late_receive'] = $rtn['gross_late_receive'];
        $data['balance'] = $rtn['balance'];
        $data['gross_received'] = $data['all_services_total'] - $data['gross_non_receive'];
        $data['car_rental'] = $break_down['car_rental'];
        $data['transportation'] = $break_down['transportation'];
        $data['invoices_total'] = $data['gross_received'] + $data['gross_non_receive'] + $data['car_rental'] + $data['transportation'];

        return view('HSS.finance.income', ['q' => $q, 'break_down' => $break_down, 'data' => $data]);
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

        $rtn = $this->financeRepo->getInvoiceData($q);
        $data = $rtn['data'];
        foreach($data as $k => $d) {
            if (in_array('car_rental', $d['type'])) {
                $data[$k]['remark'] = '租借會車';
            } else if (in_array('transportation', $d['type'])) {
                $data[$k]['remark'] = '交通費';
            } else {
                $data[$k]['remark'] = '服務費';
            }
            if (empty($d['payment_date'])) {
                if (empty($d['fee'])) {
                    $data[$k]['remark'] = 'Cancelled';
                } else {
                    $data[$k]['remark'] = '應收未收';
                }
            }
        }
        $rtn['data'] = $data;

        return view('HSS.finance.invoice', ['q' => $q, 'rtn' => $rtn]);
    }

    public function meal(Request $request)
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

        $rtn = $this->financeRepo->getMealData($q);

        $number_of_day = Helper::getMonthDayNumber($rtn['year'], $rtn['month']);

        return view('HSS.finance.meal', ['q' => $q, 'rtn' => $rtn, 'number_of_day' => $number_of_day]);
    }

    public function service(Request $request)
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


        $fees = $this->getNormalizedFees();
        $rtn = $this->financeRepo->getServiceData($q);

        // normalize service's data
        foreach($rtn['data'] as &$d) {
            $new_data = [];
            foreach($d['service']['data'] as $v) {
                $new_data[$v['type']] = $v;
            }
            $d['service']['data'] = $new_data;
        }

        // calculate sum
        $sum = [
            'meal' => ['meal_count' => 0, 'ingredient_fee' => 0, 'service_fee' => 0],
            'laundry' => ['laundry_count' => 0, 'laundry_fee' => 0, 'service_fee' => 0],
            'service' => ['service_fee' => 0],
            'total_fee' => 0,
        ];
        foreach($rtn['data'] as $d) {
            $sum['meal']['meal_count'] += $d['meal']['meal_count'];
            $sum['meal']['ingredient_fee'] += $d['meal']['ingredient_fee'];
            $sum['meal']['service_fee'] += $d['meal']['service_fee'];

            $sum['laundry']['laundry_count'] += $d['laundry']['laundry_count'];
            $sum['laundry']['laundry_fee'] += $d['laundry']['laundry_fee'];
            $sum['laundry']['service_fee'] += $d['laundry']['service_fee'];

            $sum['service']['service_fee'] += $d['service']['service_fee'];

            $sum['total_fee'] += $d['total_fee'];
        }

        return view('HSS.finance.service', ['q' => $q, 'rtn' => $rtn, 'fees' => $fees, 'sum' => $sum]);
    }

    private function getNormalizedFees(): array
    {
        $fees = [];
        $rtn = $this->financeRepo->getFeeData();
        foreach($rtn as $name => $details) {
            foreach($details as $k => $v) {
                if ($name == 'meal') {
                    $fees[$name][$v['grade']] = ['ingredient' => $v['ingredient'], 'fee' => $v['fee']];
                } else if ($name == 'laundry') {
                    $fees[$name][$v['type']] = $v['fee'];
                } else if ($name == 'service') {
                    $fees[$name][$v['grade']] = $v['fee'];
                }
            }
        }
        return $fees;
    }
}
