<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "search-test";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
if(!$conn){

die("Connection failed: " . mysqli_connect_error());

};

$output = '';

if(isset($_POST['searchVal'])){
    $searchq = $_POST['searchVal'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $sql = "SELECT * FROM `members` WHERE firstname LIKE '%$searchq%' OR lastname LIKE '%$searchq%'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        $output = "There was no search result";
    }else{
        while($row = mysqli_fetch_array($result)){
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $id = $row['id'];

            $output .= '<div> '.$fname.' '.$lname.' </div>';
        }


    }
}

echo($output);


?>
