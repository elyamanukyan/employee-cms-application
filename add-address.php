<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/24/2017
 * Time: 7:17 PM
 */
include("elements/db.php");

$data = $_POST;

$query = "INSERT INTO addresses (emp_id, address) VALUES (:emp_id, :address)";
$res = $pdo->prepare($query);
$params = array(
    ':emp_id' => $data['emp_id'],
    ':address' => $data['address'],
);

if ($res->execute($params)) {
    header('Location: employee.php?id='.$data['emp_id']);
}
?>
