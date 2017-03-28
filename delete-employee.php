<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 9:09 PM
 */
include "elements/db.php";
$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM employees WHERE id =  :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header('Location: index.php');
?>