<?php
if (!function_exists('terbilang')) {
  function terbilang(int $number)
  {
    // $number = str_replace('.', '', $number);
    // if ( ! is_numeric($number)) throw new Exception("Please input number.");
    
    $base    = array('nol', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan');
    $numeric = array('1000000000000000', '1000000000000', '1000000000000', 1000000000, 1000000, 1000, 100, 10, 1);
    $unit    = array('kuadriliun', 'triliun', 'biliun', 'milyar', 'juta', 'ribu', 'ratus', 'puluh', '');
    $str     = null;
    $i = 0;
    if ($number == 0) {
      $str = 'nol';
    } else {
      while ($number != 0) {
        $count = (int)($number / $numeric[$i]);
        if ($count >= 10) {
          $str .= terbilang($count) . ' ' . $unit[$i] . ' ';
        } elseif ($count > 0 && $count < 10) {
          $str .= $base[$count] . ' ' . $unit[$i] . ' ';
        }
        $number -= $numeric[$i] * $count;
        $i++;
      }
      $str = preg_replace('/satu puluh (\w+)/i', '\1 belas', $str);
      $str = preg_replace('/satu (ribu|ratus|puluh|belas)/', 'se\1', $str);
      $str = preg_replace('/\s{2,}/', ' ', trim($str));
    }
    return $str;
  }
}

if (!function_exists('formUserGroup')) {
  function formUserGroup(string $date)
  {
    return false;
  }
}

if (!function_exists('to_date')) {
  function to_date(string $date)
  {
    return date('Y-m-d', strtotime($date));
  }
}

if (!function_exists('group_by')) {
  function group_by($key, $data) {
    $result = array();

    foreach($data as $val) {
      if(array_key_exists($key, $val)){
        $result[$val[$key]][] = $val;
      }else{
        $result[""][] = $val;
      }
    }

    return $result;
  }
}