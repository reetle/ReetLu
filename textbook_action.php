<?php
include_once("config.php");

$input = filter_input_array(INPUT_POST);

$pealkiri = mysqli_real_escape_string($conn, $input["pealkiri"]);
$klass = mysqli_real_escape_string($conn, $input["klass"]);
$autor = mysqli_real_escape_string($conn, $input["autor"]);
$aasta = mysqli_real_escape_string($conn, $input["aasta"]);
$liik = mysqli_real_escape_string($conn, $input["liik"]);
$keel = mysqli_real_escape_string($conn, $input["keel"]);
$valjaandja = mysqli_real_escape_string($conn, $input["valjaandja"]);
$kogus = mysqli_real_escape_string($conn, $input["kogus"]);
$riiul = mysqli_real_escape_string($conn, $input["riiul"]);
$marksona = mysqli_real_escape_string($conn, $input["marksona"]);
$markused = mysqli_real_escape_string($conn, $input["markused"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE textbook  SET 
pealkiri = '".$pealkiri."', 
klass = '".$klass."' ,
autor = '".$autor."' ,
aasta = '".$aasta."', 
liik = '".$liik."' ,
keel = '".$keel."', 
valjaandja = '".$valjaandja."' ,
kogus = '".$kogus."', 
riiul = '".$riiul."' ,
marksona = '".$marksona."', 
markused = '".$markused."' 
 
 WHERE id = '".$input["id"]."'  ";

 mysqli_query($conn, $query);

}

if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM textbook 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($conn, $query);

}

echo json_encode($input);

	
?>