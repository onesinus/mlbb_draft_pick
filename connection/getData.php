<?php
    if (!file_exists("connection/koneksi.php")) {
        include "../connection/koneksi.php";
    }else{
        include "connection/koneksi.php";
    }

    $params = isset($_GET)?$_GET:'';

    function get_data($table, $type = ''){
        GLOBAL $konek;
        if($type == ''){
            $get_data = mysqli_query($konek, "SELECT * FROM m_heroes");
        }else{
            $get_data = mysqli_query($konek, "SELECT * FROM m_heroes WHERE type like '%$type%' ");
        }

        
        return $get_data;
    }

    if(!empty($params)){
        if($params["action"] == "get_core_item"){
            $hero = $params["hero"];

            $get_data = mysqli_query($konek, "
                SELECT core_item_1, core_item_2, core_item_3 FROM m_heroes
                WHERE name = '$hero'
            ");

            $core_item = mysqli_fetch_assoc($get_data);

            $image_path         = "img/items/";
            $add_extention      = ".png";

            $item_1             = $image_path . str_replace(" ", "-", strtolower($core_item['core_item_1'])) . $add_extention;
            $item_2             = $image_path . str_replace(" ", "-", strtolower($core_item['core_item_2'])) . $add_extention;
            $item_3             = $image_path . str_replace(" ", "-", strtolower($core_item['core_item_3'])) . $add_extention;
            
            $core_items = '
                <img src="'.$item_1.'" width="20" title="'.$core_item['core_item_1'].'" /> 
                <img src="'.$item_2.'" width="20" title="'.$core_item['core_item_2'].'" /> 
                <img src="'.$item_3.'" width="20" title="'.$core_item['core_item_3'].'" /> 
            ';

            echo $core_items;
        }

        if($params["action"] == "get_counter_hero"){
            $hero = $params["hero"];

            $get_data = mysqli_query($konek, "
                SELECT counter_hero_1, counter_hero_2, counter_hero_3 FROM m_heroes
                WHERE name = '$hero'
            ");

            $counter_hero       = mysqli_fetch_assoc($get_data);

            $image_path         = "img/heroes/";

            $hero_1             = $image_path . $counter_hero['counter_hero_1'];
            $hero_2             = $image_path . $counter_hero['counter_hero_2'];
            $hero_3             = $image_path . $counter_hero['counter_hero_3'];
            
            $counter_heroes = '
                <img src="'.$hero_1.'" width="20" title="'.str_replace('.png', '', $counter_hero['counter_hero_1']).'" /> 
                <img src="'.$hero_2.'" width="20" title="'.str_replace('.png', '', $counter_hero['counter_hero_2']).'" /> 
                <img src="'.$hero_3.'" width="20" title="'.str_replace('.png', '', $counter_hero['counter_hero_3']).'" /> 
            ';

            echo $counter_heroes;
        }

        if($params["action"] == "get_counter_item"){
            $hero = $params["hero"];

            $get_data = mysqli_query($konek, "
                SELECT counter_item_1, counter_item_2, counter_item_3 FROM m_heroes
                WHERE name = '$hero'
            ");

            $counter_item       = mysqli_fetch_assoc($get_data);
            $image_path         = "img/items/";
            $add_extention      = ".png";

            $counter_item_1             = $image_path . str_replace(" ", "-", strtolower($counter_item['counter_item_1'])) . $add_extention;
            $counter_item_2             = $image_path . str_replace(" ", "-", strtolower($counter_item['counter_item_2'])) . $add_extention;
            $counter_item_3             = $image_path . str_replace(" ", "-", strtolower($counter_item['counter_item_3'])) . $add_extention;
            
            $counter_items = '
                <img src="'.$counter_item_1.'" width="20" title="'.$counter_item['counter_item_1'].'" /> 
                <img src="'.$counter_item_2.'" width="20" title="'.$counter_item['counter_item_2'].'" /> 
                <!-- <img src="'.$counter_item_3.'" width="20" /> -->
            ';

            echo $counter_items;
        }

    }


?>