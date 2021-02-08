<?php


namespace App\Repositories\API\ECS;


class ReportRepository
{
    private $json_path;

    public function __construct()
    {
        $this->json_path = storage_path('app/data/ECS');
    }

    public function getTransactionData($q)
    {
        return $this->loadJson('transactions.json');
    }

    public function getInvoiceData($q)
    {
        $rtn = $this->loadJson('transactions.json');

        if (isset($q['is_received']) && in_array($q['is_received'], [1, 0, -1])) {
            $filter_data = array_filter($rtn['data'], function($d) use ($q) {
                if ($q['is_received'] == 1) {
                    return isset($d['fee']) && $d['invoice_status'] == 'paid';
                } else if ($q['is_received'] == 0) {
                    return !isset($d['fee']);
                } else if ($q['is_received'] == -1) {
                    return $d['invoice_status'] == 'void';
                }
            });
            $rtn['data'] = $filter_data;
        }
        return $rtn;
    }

    public function getDailyIncomeData($q)
    {
        return $this->loadJson('daily_incomes.json');
    }

    private function loadJson($file_name)
    {
        $full_path = $this->json_path . '/'. $file_name;
        $json = file_get_contents($full_path);
        return json_decode($json, true);
    }
}
