<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 10:17 PM
 */
include("elements/header.php");
include("elements/db.php");
$emp_id = $_GET['emp'];
?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="phone-form" class="label-placeholder" action="add-phone.php" method="POST">
                <div class="row clearfix">
                    <div class="form-group">
                        <input id="emp_id" type="hidden" name="emp_id" value="<?php echo $emp_id; ?>">
                        <input id="phone" type="text" name="phone" class="input-control"
                               placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-alter btn-border btn-border-brown"
                               id="submit-phone">
                    </div>
                </div>

            </form>
        </div>
    </div>
<?php include("elements/footer.php"); ?>