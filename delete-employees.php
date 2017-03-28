<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/29/2017
 * Time: 2:58 AM
 */
include "elements/db.php";
foreach($_POST as $emp){
    $stmt = $pdo->prepare("DELETE FROM employees WHERE id =  :id");
    $stmt->bindParam(':id', $emp, PDO::PARAM_INT);
    $stmt->execute();
}
header('Location: index.php');