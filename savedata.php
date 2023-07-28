<?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $fp_all = fopen("information.txt", "a");
        $write_str = $_POST['name'] . "\t" . $_POST['email'] . "\t" . $_POST['player'] . "\t" . $_POST['vehicle'] . "\t" . date("Y/m/d H:i:s") . "\n"; //add something later
        fwrite($fp_all, $write_str);