<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/28/2017
 * Time: 6:42 PM
 */
include("elements/db.php");
$id = $_POST['id'];
$eId = $_POST['emp_id'];
//inserting data
$sql = "UPDATE addresses SET
            address = :address
            WHERE id = :id";
//var_dump($sql);die;
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header("Location: employee.php?id=$eId");
?>