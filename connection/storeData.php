<?php
    if (!file_exists("connection/koneksi.php")) {
        include "../connection/koneksi.php";
    }else{
        include "connection/koneksi.php";
    }

    function clean($string) {
        return preg_replace('[^A-Za-z0-9\-]', '', $string); // Removes special chars.
     }

    $params = isset($_POST)?$_POST:'';

    if(!empty($params)){
        if($params["action"] == "store_expectation"){
            $email = clean($params["email"]);
            $expect = clean($params["expect"]);

            $get_data = mysqli_query($konek, "
                INSERT INTO o_suggestion(email, ekspektasi) VALUES('$email','$expect');
            ");

            echo "Ok";
        }
    }
?>