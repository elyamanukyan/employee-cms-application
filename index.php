<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/21/2017
 * Time: 4:55 PM
 */
include("elements/db.php");
include("elements/header.php");
?>
    <a class="btn btn-success" href="add-employee-form.php">Add Employee</a>
    <br>
    <br>
    <table id="employee-search" width="100%">
        <td><input type="text" id="firstName" onkeyup="myFunctionFirstname()" placeholder="Search By First Name.."></td>
        <td><input type="text" id="lastName" onkeyup="myFunctionLastname()" placeholder="Search By Last Name.."></td>
        <td><input type="text" id="age" onkeyup="myFunctionAge()" placeholder="Search By Search by Age.."></td>
        <td><input type="text" id="city" onkeyup="myFunctionCity()" placeholder="Search by City.."></td>
        <td><input type="text" id="email" onkeyup="myFunctionEmail()" placeholder="Search by Email.."></td>
        <td><input type="text" id="country" onkeyup="myFunctionCountry()" placeholder="Search By Country.."></td>
        <td><input type="text" id="bankAccountNumber" onkeyup="myFunctionAccount()" placeholder="Search by Account..">
        </td>
        <td><input type="text" id="creditCardNumber" onkeyup="myFunctionCard()" placeholder="Search by Card.."></td>

    </table>
    <table class="table table-bordered" id="employee-table" width="100%">
        <thead>
        <tr>
            <th width="1%"></th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="4%">Age</th>
            <th width="12%">City</th>
            <th width="12%">Email</th>
            <th width="12%">Country</th>
            <th width="10%">Bank Account Number</th>
            <th width="10%">Credit Card Number</th>
            <th width="23%">Options</th>
        </tr>
        </thead>


        <tbody>
        <?php
        $employees = $pdo->query('SELECT * FROM employees ORDER BY id DESC');
        $myrow = $employees->fetchAll();
        $i = 0;
        if ($myrow) { ?>
            <br>
            <br>
            <form id="empolyees-delete-form" class="label-placeholder" action="delete-employees.php" method="POST">
                <div class="form-group">
                    <input type="submit" class="btn btn-alter btn-border btn-border-brown btn-danger"
                           id="submit-employees" value="Delete Selected">
                </div>
                <br>

                <?php
                do {
                    $id = $myrow[$i]['id'];
                    printf("<tr>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s%s%s</td>
                                                </tr>",
                        "<input type='checkbox' name='employee-$id' value='$id'>",
                        $myrow[$i]["firstName"] ? $myrow[$i]["firstName"] : 'No Data',
                        $myrow[$i]["lastName"] ? $myrow[$i]["lastName"] : 'No Data',
                        $myrow[$i]["age"] ? $myrow[$i]["age"] : 'No Data',
                        $myrow[$i]["city"] ? $myrow[$i]["city"] : 'No Data',
                        $myrow[$i]["email"] ? $myrow[$i]["email"] : 'No Data',
                        $myrow[$i]["country"] ? $myrow[$i]["country"] : 'No Data',
                        $myrow[$i]["bankAccountNumber"] ? $myrow[$i]["bankAccountNumber"] : 'No Data',
                        $myrow[$i]["creditCardNumber"] ? $myrow[$i]["creditCardNumber"] : 'No Data',
                        "<a class='btn btn-info' style='margin-right:10px;' href='employee.php?id=$id'>View</a>",
                        "<a class='btn btn-warning' style='margin-right:10px;' href='edit-employee-form.php?id=$id'>Edit</a>",
                        "<a class='btn btn-danger' href='delete-employee.php?id=$id'>Delete</a>");
                    $i += 1;
                } while ($i < count($myrow));
                ?>
            </form>
        <?php } ?>
        </tbody>
    </table>

<?php
include("elements/footer.php");

