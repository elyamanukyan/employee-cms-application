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
        </tr>
        </thead>

        <tbody>

        <?php
        $theId = $_GET['id'];

        $employess  = $pdo->prepare("SELECT * FROM employees WHERE id = ?");
        $employess->execute(array($theId));
        $myrow = $employess->fetch();
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


<?php
include("elements/footer.php");
