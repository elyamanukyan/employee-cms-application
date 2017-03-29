<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/21/2017
 * Time: 5:54 PM
 */
include("elements/db.php");
$data = file_get_contents(__DIR__ . "/public/data/employees.json");

$dataArray = json_decode($data,true);

foreach($dataArray as $data) {
    $query = "INSERT INTO employees (firstName, lastName, age, city, email, country, bankAccountNumber, creditCardNumber, created, modified) VALUES (:firstName, :lastName, :age, :city, :email, :country, :bankAccountNumber, :creditCardNumber, :created, :modified)";
    $res = $pdo->prepare($query);
    $params = array(
        ':firstName' => $data['firstName'],
        ':lastName' => $data['lastName'],
        ':age' => $data['age'],
        ':city' => $data['city'],
        ':email' => $data['email'],
        ':country' => $data['country'],
        ':bankAccountNumber' => $data['bankAccountNumber'],
        ':creditCardNumber' => $data['creditCardNumber'],
        ':created' => date("Y-m-d H:i:s"),
        ':modified' => date("Y-m-d H:i:s"),
    );

    if ($res->execute($params)) {
        echo 'Employee Included ';
        $last_id = $pdo->lastInsertId();
        foreach ($data['phones'] as $phone) {
            $queryPhone = "INSERT INTO phones (emp_id, phone) VALUES (:emp_id, :phone)";
            $resPhone = $pdo->prepare($queryPhone);
            $paramsPhone = array(
                ':emp_id' => $last_id,
                ':phone' => $phone
            );
            $resPhone->execute($paramsPhone);
            echo 'Phones Included ';
        }
        foreach ($data['addresses'] as $address) {
            $queryAddr = "INSERT INTO addresses (emp_id, address) VALUES (:emp_id, :address)";
            $resAddr = $pdo->prepare($queryAddr);
            $paramsAddr = array(
                ':emp_id' => $last_id,
                ':address' => $address
            );
            $resAddr->execute($paramsAddr);
            echo 'Addresses Included ';
        }
        header('Location: index.php');
    } else {
        echo 'Import Failed';
    }
}
