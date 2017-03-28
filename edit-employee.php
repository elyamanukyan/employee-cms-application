<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 12:15 AM
 */
include("elements/db.php");
$id = $_POST['id'];
//inserting data
$sql = "UPDATE employees SET
            firstName = :firstName,
            lastName = :lastName,
            age = :age,
            city = :city,
            email = :email,
            country = :country,
            bankAccountNumber = :bankAccountNumber,
            creditCardNumber = :creditCardNumber
            WHERE id = :id";
//var_dump($sql);die;
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':firstName', $_POST['firstName'], PDO::PARAM_STR);
$stmt->bindParam(':lastName',  $_POST['firstName'], PDO::PARAM_STR);
$stmt->bindParam(':age',  $_POST['age'], PDO::PARAM_STR);
$stmt->bindParam(':city',  $_POST['city'], PDO::PARAM_STR);
$stmt->bindParam(':email',  $_POST['email'], PDO::PARAM_STR);
$stmt->bindParam(':country',  $_POST['country'], PDO::PARAM_STR);
$stmt->bindParam(':bankAccountNumber',  $_POST['bankAccountNumber'], PDO::PARAM_STR);
$stmt->bindParam(':creditCardNumber',  $_POST['creditCardNumber'], PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: index.php');
?>