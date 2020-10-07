<?php
    date_default_timezone_set('Asia/Jakarta'); // set timezone
	$konek = mysqli_connect("localhost", "root", "", "ml", "3399");
    if (!$konek){
        die("Error!" . mysqli_connect_error($konek));
    }
?>