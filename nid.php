<?php
// পোস্ট 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tnl নতুন ডেটা 
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];

    // api URL [Put NID API Link]
    $url = 'https://tnl.api/nid.php?nid=' . $nid . '&dob=' . $dob;

    //  1
    $response = file_get_contents($url);

    //  ১
    echo $response;
}
?>
