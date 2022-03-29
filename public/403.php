<?php

$result = array('error' => true, 'msg' => 'Anda Terlalu Banyak Melakukan Refresh Halaman, Harap Ulangi 5 Detik Lagi.');

//return the json response :
header('Content-Type: application/json');  // <-- header declaration
echo json_encode($result, true);    // <--- encode
exit();