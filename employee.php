<?php
/**
 * Created by PhpStorm.
 * User: Elya
 * Date: 3/21/2017
 * Time: 4:27 PM
 */
//class employee {
//    public function getJsonFile(){
//        $str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/employees.json');
//        $json = json_decode($str, true); // decode the JSON into an associative array
//        echo '<pre>' . print_r($json, true) . '</pre>';
//    }
//
//}
include("elements/db.php");
include("elements/header.php");
$theId = $_GET['id'];

$employees = $pdo->prepare("SELECT e.*, GROUP_CONCAT(DISTINCT  phone,'--',p.id ORDER BY p.id SEPARATOR '---') as phones, GROUP_CONCAT(DISTINCT address,'--',a.id ORDER BY a.id SEPARATOR '---') as addesses
                                              FROM employees e
                                              LEFT  JOIN  phones p ON (e.id = p.emp_id)
                                              LEFT  JOIN  addresses a ON (e.id = a.emp_id)
                                              WHERE e.id = ?
                                              GROUP BY e.id ");
$employees->execute(array($theId));
$myrow = $employees->fetch();
//echo '<pre>' . print_r($myrow, true) . '</pre>';
$phones = explode("---", $myrow["phones"]);
$addresses = explode("---", $myrow["addesses"]);
?>
<!--Employee Table-->
    <table >

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
    <?php printf("<a href='add-phone-form.php?emp=$theId'>Add Phone</a>");  ?>
    <table >
        <thead>
        <tr>
            <th>Phone</th>
            <th>Options</th>
            <th></th>
        </tr>
        </thead>

        <tbody>

        <?php
        $i = 0;
        do {
            $phoneAndId =  explode("--", $phones[$i]);
            $pId = $phoneAndId[1];
            printf("<tr>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
</tr>",
                $phoneAndId[0],
                "<a href='edit-phone-form.php?id=$pId'>Edit</a>",
                "<a href='delete-phone.php?id=$pId&eId=$theId'>Delete</a>");
            $i += 1;
        } while ($i < count($phones));
        ?>
        </tbody>
    </table>
<br>
<br>
<br>
<br>

<!--Addresses Table Of Employee-->
<?php printf("<a href='add-address-form.php?emp=$theId'>Add Address</a>");  ?>
    <table >
        <thead>
        <tr>
            <th>Address</th>
            <th>Options</th>
            <th></th>
        </tr>
        </thead>

        <tbody>

        <?php
        $i = 0;
        do {
            $addressAndId =  explode("--", $addresses[$i]);
            $aId = $addressAndId[1];
            printf("<tr>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
</tr>",
                $addressAndId[0],
                "<a href='edit-address-form.php?id=$aId'>Edit</a>",
                "<a href='delete-address.php?id=$aId&eId=$theId'>Delete</a>");
            $i += 1;
        } while ($i < count($addresses));
        ?>
        </tbody>
    </table>


<?php
include("elements/footer.php");
