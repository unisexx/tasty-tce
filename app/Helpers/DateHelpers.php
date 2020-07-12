<?php
if (!function_exists('DB2Date')) {
    function DB2Date($Dt)
    {
        if (($Dt != null) && ($Dt != '0000-00-00')) {
            @list($date, $time) = explode(" ", $Dt);
            list($y, $m, $d) = explode("-", $date);
            return $d . "/" . $m . "/" . ($y + 543);
        } else {
            $Dt = "";
            return $Dt;
        }
    }
}

if (!function_exists('Date2DB')) {
    function Date2DB($Dt, $showTime = false)
    {
        if (($Dt != "") && ($Dt != '0000-00-00')) {
            @list($date, $time) = explode(" ", $Dt);
            list($d, $m, $y) = explode("/", $date);

            if ($showTime == false) {
                return ($y - 543) . "-" . $m . "-" . $d;
            } else {
                return ($y - 543) . "-" . $m . "-" . $d . ' ' . $time;
            }
        } else {
            return $Dt;
        }
    }
}

if (!function_exists('DBToDate')) {
    function DBToDate($date = null, $is_date_thai = true, $showTime = false)
    {
        if (
            !$date ||
            $date == '0000-00-00' ||
            $date == '0000-00-00 00:00:00'
        ) {
            return null;
        }
        //year tyep (buddha or christ).
        $year = ($is_date_thai) ? (date('Y', strtotime($date)) + 543) : date('Y', strtotime($date));
        return ($showTime) ? date('d/m/', strtotime($date)) . $year . ' ' . date('H:i:s', strtotime($date)) : date('d/m/', strtotime($date)) . $year;
    }
}

if (!function_exists('thMonth')) {
    function thMonth($month)
    {
        $thai_month_arr = array(
            "0"  => "",
            "1"  => "มกราคม",
            "2"  => "กุมภาพันธ์",
            "3"  => "มีนาคม",
            "4"  => "เมษายน",
            "5"  => "พฤษภาคม",
            "6"  => "มิถุนายน",
            "7"  => "กรกฎาคม",
            "8"  => "สิงหาคม",
            "9"  => "กันยายน",
            "10" => "ตุลาคม",
            "11" => "พฤศจิกายน",
            "12" => "ธันวาคม",
        );
        return $thai_month_arr[ltrim($month, '0')];
    }
}

if (!function_exists('get_month')) {
    function get_month()
    {
        return array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฏาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
    }
}

if (!function_exists('DBToDateThai')) {
    function DBToDateThai($date = null, $is_date_thai = true, $showTime = false, $format = 'S')
    {
        if (
            !$date ||
            $date == '0000-00-00' ||
            $date == '0000-00-00 00:00:00'
        ) {
            return null;
        }

        if ($format == 'F') {
            $month_th = array('01' => 'มกราคม', '02' => 'กุมภาพันธ์', '03' => 'มีนาคม', '04' => 'เมษายน', '05' => 'พฤษภาคม', '06' => 'มิถุนายน', '07' => 'กรกฏาคม', '08' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
        } else {
            $month_th = array('01' => 'ม.ค.', '02' => 'ก.พ.', '03' => 'มี.ค.', '04' => 'เม.ย', '05' => 'พ.ค.', '06' => 'มิ.ย', '07' => 'ก.ค.', '08' => 'ส.ค.', '09' => 'ก.ย.', '10' => 'ต.ค.', '11' => 'พ.ย.', '12' => 'ธ.ค.');
        }

        //year tyep (buddha or christ).
        $year = ($is_date_thai) ? (date('Y', strtotime($date)) + 543) : date('Y', strtotime($date));
        return ($showTime) ? date('d', strtotime($date)) . ' ' . $month_th[date('m', strtotime($date))] . ' ' . $year . ' ' . date('H:i:s', strtotime($date)) : date('d', strtotime($date)) . ' ' . $month_th[date('m', strtotime($date))] . ' ' . $year;
    }
}
