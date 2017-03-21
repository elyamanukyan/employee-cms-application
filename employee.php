<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/21/2017
 * Time: 4:27 PM
 */
class employee {
    public function getJsonFile(){
        $str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/employees.json');
        $json = json_decode($str, true); // decode the JSON into an associative array
        echo '<pre>' . print_r($json, true) . '</pre>';
    }

}