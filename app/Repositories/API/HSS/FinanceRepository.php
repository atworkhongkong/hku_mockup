<?php


namespace App\Repositories\API\HSS;


class FinanceRepository
{
    private $json_path;

    public function __construct()
    {
        $this->json_path = 'data/HSS';
    }

    public function getFeeData()
    {
        return $this->loadJson('fees.json');
    }

    public function getIncomeData($q)
    {
        return $this->loadJson('incomes.json');
    }

    public function getInvoiceData($q)
    {
        $rtn = $this->loadJson('invoices.json');

        if (isset($q['is_received']) && in_array($q['is_received'], [1, 0, -1])) {
            $filter_data = array_filter($rtn['data'], function($d) use ($q) {
                if ($q['is_received'] == 1) {
                    return isset($d['payment_date']);
                } else if ($q['is_received'] == 0) {
                    return !isset($d['payment_date']) && isset($d['fee']);
                } else if ($q['is_received'] == -1) {
                    return !isset($d['fee']);
                }
            });
            $rtn['data'] = $filter_data;
        }
        return $rtn;
    }

    public function getMealData($q)
    {
        return $this->loadJson('meals.json');
    }

    public function getServiceData($q)
    {
        return $this->loadJson('services.json');
    }

    private function loadJson($file_name)
    {
        $full_path = $this->json_path . '/'. $file_name;
        $json = file_get_contents($full_path);
        return json_decode($json, true);
    }
}
