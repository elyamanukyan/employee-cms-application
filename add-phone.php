<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/24/2017
 * Time: 1:52 AM
 */
include("elements/db.php");

$data = $_POST;

$query = "INSERT INTO phones (emp_id, phone) VALUES (:emp_id, :phone)";
$res = $pdo->prepare($query);
$params = array(
    ':emp_id' => $data['emp_id'],
    ':phone' => $data['phone'],
);

if ($res->execute($params)) {
    header('Location: employee.php?id='.$data['emp_id']);
}
?>
