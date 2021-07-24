<?php
require_once 'config/db.php';
?>

<?php
$qry = "select id,name,  email, gender, dob from profile";

$rs = $conn->query($qry);

$fetchAllData = $rs->fetch_all(MYSQLI_ASSOC);

$createTable = '<table class="table table-active table-striped table-hover">';

$createTable .= '<tr>';
$createTable .= '<th scope="col">ID</th>';
$createTable .= '<th scope="col">Name</th>';
$createTable .= '<th scope="col">Email</th>';
$createTable .= '<th scope="col">Gender</th>';
$createTable .= '<th scope="col">Date</th>';
$createTable .= '</tr>';


foreach ($fetchAllData as $customerData) {
    $createTable .= '<tr>';
    $createTable .= '<td>' . $customerData['id'] . '</td>';
    $createTable .= '<td>' . $customerData['name'] . '</td>';
    $createTable .= '<td>' . $customerData['email'] . '</td>';
    $createTable .= '<td>' . $customerData['gender'] . '</td>';

    $createTable .= '<td>' . $customerData['dob'] . '</td>';

    $createTable .= '</tr>';
}

$createTable .= '</table>';

echo $createTable;

$rs->close();

// $conn->close();

?>