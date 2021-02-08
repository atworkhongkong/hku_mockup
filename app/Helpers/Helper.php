<?php

namespace App\Helpers;

use DateTime;

class Helper
{
    public static function formatMoney($m, $dollar_sign = false)
    {
        if (isset($m)) {
            return ($dollar_sign ? '$' : '') . number_format($m, 1);
        } else {
            return $m;
        }
    }

    public static function getMonthDayNumber($year, $month)
    {
        $d = new DateTime($year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01');
        return $d->format('t');
    }
}
