<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 12:16 AM
 */

include("elements/db.php");

$data = $_POST;

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
        header('Location: index.php');
    }
//}

?>


