<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/23/2017
 * Time: 12:15 AM
 */
include("elements/header.php");
include("elements/db.php");
?>
<form id="empolyees-form" class="label-placeholder" action="add-employee.php" method="POST" >
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="firstName" type="text" name="firstName" class="input-control"
                                           placeholder="First Name">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="lastName" type="text" name="lastName" class="input-control"
                                           placeholder="Last Name">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="age" type="text" name="age" class="input-control"
                                           placeholder="Age">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="city" type="text" name="city" class="input-control"
                                           placeholder="City">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="email" type="text" name="email" class="input-control"
                                           placeholder="E-mail">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="country" type="text" name="country" class="input-control"
                                           placeholder="Country">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="bankAccountNumber" type="text" name="bankAccountNumber" class="input-control"
                                           placeholder="Bank Account Number">
                                </div>
                             </div>
                            <div class="row clearfix">
                                <div class="form-group">
                                    <input id="creditCardNumber" type="text" name="creditCardNumber" class="input-control"
                                           placeholder="Credit Card Number">
                                </div>
                             </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-alter btn-border btn-border-brown"
                                        id="submit-employee">
                            </div>
                        </form>
<?php include("elements/footer.php"); ?>