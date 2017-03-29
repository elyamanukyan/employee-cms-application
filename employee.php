<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/21/2017
 * Time: 4:27 PM
 */
include("elements/db.php");
include("elements/header.php");
$theId = $_GET['id'];

$employees = $pdo->prepare("SELECT e.*, GROUP_CONCAT(DISTINCT  phone,'--',p.id ORDER BY p.id SEPARATOR '---') as phones, GROUP_CONCAT(DISTINCT address,'--',a.id ORDER BY a.id SEPARATOR '---') as addresses
                                              FROM employees e
                                              LEFT  JOIN  phones p ON (e.id = p.emp_id)
                                              LEFT  JOIN  addresses a ON (e.id = a.emp_id)
                                              WHERE e.id = ?
                                              GROUP BY e.id ");
$employees->execute(array($theId));
$myrow = $employees->fetch();
//echo '<pre>' . print_r($myrow, true) . '</pre>';
$phones = explode("---", $myrow["phones"]);
//var_dump($myrow["phones"]);die;
$addresses = explode("---", $myrow["addresses"]);
?>
    <!--Employee Table-->
    <table class="table table-bordered">

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
        </tr>
        </thead>

        <tbody>

        <?php
        if ($myrow) {
            printf("<tr>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>%s</td>
                                                </tr>",
                $myrow["firstName"] ? $myrow["firstName"] : 'No Data',
                $myrow["lastName"] ? $myrow["lastName"] : 'No Data',
                $myrow["age"] ? $myrow["age"] : 'No Data',
                $myrow["city"] ? $myrow["city"] : 'No Data',
                $myrow["email"] ? $myrow["email"] : 'No Data',
                $myrow["country"] ? $myrow["country"] : 'No Data',
                $myrow["bankAccountNumber"] ? $myrow["bankAccountNumber"] : 'No Data',
                $myrow["creditCardNumber"] ? $myrow["creditCardNumber"] : 'No Data');
        } ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>

    <!--Phones Table Of Employee-->
<?php printf("<a class='btn btn-success' href='add-phone-form.php?emp=$theId'>Add Phone</a>");
if ($myrow["phones"] != NULL) { ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Phone</th>
            <th>Options</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $i = 0;
        do {
            $phoneAndId = explode("--", $phones[$i]);
            $pId = $phoneAndId[1];
            printf("<tr>
    <td>%s</td>
    <td>%s%s</td>
</tr>",
                $phoneAndId[0],
                "<a class='btn btn-warning' style='margin-right:20px;' href='edit-phone-form.php?id=$pId'>Edit</a>",
                "<a class='btn btn-danger' href='delete-phone.php?id=$pId&eId=$theId'>Delete</a>");
            $i += 1;
        } while ($i < count($phones));
        ?>
        </tbody>
    </table>

    <!--Addresses Table Of Employee-->
<?php }
printf("<br><br><br><a class='btn btn-success' href='add-address-form.php?emp=$theId'>Add Address</a>");
if ($myrow["addresses"] != NULL) { ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Address</th>
            <th>Options</th>
        </tr>
        </thead>

        <tbody>

        <?php
        $i = 0;
        do {
            $addressAndId = explode("--", $addresses[$i]);
            $aId = $addressAndId[1];
            printf("<tr>
    <td>%s</td>
    <td>%s%s</td>
</tr>",
                $addressAndId[0],
                "<a class='btn btn-warning' style='margin-right:20px;' href='edit-address-form.php?id=$aId'>Edit</a>",
                "<a class='btn btn-danger'  href='delete-address.php?id=$aId&eId=$theId'>Delete</a>");
            $i += 1;
        } while ($i < count($addresses));
        ?>
        </tbody>
    </table>


<?php }
include("elements/footer.php");
