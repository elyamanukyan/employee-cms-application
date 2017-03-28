<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/28/2017
 * Time: 6:41 PM
 */
include("elements/header.php");
include("elements/db.php");
$sel  = $pdo->prepare("SELECT * FROM phones WHERE id=?");
$sel->execute(array($_GET['id']));
$phone = $sel->fetch();
?>
    <form id="phone-form" class="label-placeholder" action="edit-phone.php" method="POST">
        <div class="row clearfix">
            <div class="form-group">
                <input id="phone" type="text" name="phone" class="input-control" value="<?php echo $phone['phone']; ?>">
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $phone['id']; ?>">
        <input type="hidden" name="emp_id" value="<?php echo $phone['emp_id']; ?>">
        <div class="form-group">
            <input type="submit" class="btn btn-alter btn-border btn-border-brown" id="submit-employee">
        </div>
    </form>

<?php
include("elements/footer.php");
?>