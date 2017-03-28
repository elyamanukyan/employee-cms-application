
<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/28/2017
 * Time: 6:41 PM
 */
include("elements/db.php");
$id = $_POST['id'];
$eId = $_POST['emp_id'];
//inserting data
$sql = "UPDATE phones SET
            phone = :phone
            WHERE id = :id";
//var_dump($sql);die;
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header("Location: employee.php?id=$eId");
?>