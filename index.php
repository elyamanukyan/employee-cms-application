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
<a href="add-employee-form.php">Add Employee</a>
    <table>

        <thead>
        <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Email</th>
            <th>Country</th>
            <th>Bank Account Number</th>
            <th>Credit Card Number</th>
            <th></th>
            <th>Options</th>
            <th></th>
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
        <form id="empolyees-delete-form" class="label-placeholder" action="delete-employees.php" method="POST" >
            <div class="form-group">
                <input type="submit" class="btn btn-alter btn-border btn-border-brown"
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
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
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
                    "<a href='employee.php?id=$id'>View</a>",
                    "<a href='edit-employee-form.php?id=$id'>Edit</a>",
                    "<a href='delete-employee.php?id=$id'>Delete</a>");
                $i += 1;
            } while ($i < count($myrow));
        ?>
            </form>
            <?php } ?>
        </tbody>
    </table>

<?php
include("elements/footer.php");