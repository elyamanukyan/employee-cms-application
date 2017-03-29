<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/28/2017
 * Time: 6:42 PM
 */
include("elements/header.php");
include("elements/db.php");
$sel = $pdo->prepare("SELECT * FROM addresses WHERE id=?");
$sel->execute(array($_GET['id']));
$address = $sel->fetch();
?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form id="address-form" class="label-placeholder" action="edit-address.php" method="POST">
                <div class="row clearfix">
                    <div class="form-group">
                        <input id="address" type="text" name="address" class="input-control"
                               value="<?php echo $address['address']; ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $address['id']; ?>">
                <input type="hidden" name="emp_id" value="<?php echo $address['emp_id']; ?>">

                <div class="form-group">
                    <input type="submit" class="btn btn-alter btn-border btn-border-brown" id="submit-employee">
                </div>
            </form>
        </div>
    </div>

<?php
include("elements/footer.php");
?>