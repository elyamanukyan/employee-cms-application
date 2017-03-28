<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 9:09 PM
 */
include "elements/db.php";
$id = $_GET['id'];
$eId = $_GET['eId'];

$stmt = $pdo->prepare("DELETE FROM phones WHERE id =  :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header("Location: employee.php?id=$eId");