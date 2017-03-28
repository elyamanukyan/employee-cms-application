<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 12:15 AM
 */
include("elements/header.php");
include("elements/db.php");
$sel  = $pdo->prepare("SELECT * FROM employees WHERE id=?");
$sel->execute(array($_GET['id']));
$employee = $sel->fetch();
?>
<form id="employee-form" class="label-placeholder" action="edit-employee.php" method="POST">
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-firstName" type="text" name="firstName" class="input-control" value="<?php echo $employee['firstName']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-lastName" type="text" name="lastName" class="input-control" value="<?php echo $employee['lastName']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-age" type="text" name="age" class="input-control" value="<?php echo $employee['age']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-city" type="text" name="city" class="input-control" value="<?php echo $employee['city']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-email" type="text" name="email" class="input-control" value="<?php echo $employee['email']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-country" type="text" name="country" class="input-control" value="<?php echo $employee['country']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-bankAccountNumber" type="text" name="bankAccountNumber" class="input-control" value="<?php echo $employee['bankAccountNumber']; ?>">
        </div>
    </div>
    <div class="row clearfix">
        <div class="form-group">
            <input id="employee-creditCardNumber" type="text" name="creditCardNumber" class="input-control" value="<?php echo $employee['creditCardNumber']; ?>">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
    <div class="form-group">
        <input type="submit" class="btn btn-alter btn-border btn-border-brown" id="submit-employee">
    </div>
</form>

<?php
include("elements/footer.php");
?>