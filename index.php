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
    <table width="100%">

        <thead>
        <tr>
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
        $employees = $pdo->query('SELECT * FROM employees');
        $myrow = $employees->fetchAll();
        $i = 0;
        if ($myrow) {
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
                                                </tr>",
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
                    "<a href='delete-user.php?id=$id'>Delete</a>");
                $i += 1;
            } while ($i < count($myrow));
        } ?>
        </tbody>
    </table>

<?php
include("elements/footer.php");