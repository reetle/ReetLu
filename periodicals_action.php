<?php
include_once("config.php");

$input = filter_input_array(INPUT_POST);

$pealkiri = mysqli_real_escape_string($conn, $input["pealkiri"]);
$aasta = mysqli_real_escape_string($conn, $input["aasta"]);
$liik = mysqli_real_escape_string($conn, $input["liik"]);
$keel = mysqli_real_escape_string($conn, $input["keel"]);
$valjaandja = mysqli_real_escape_string($conn, $input["valjaandja"]);
$nr = mysqli_real_escape_string($conn, $input["nr"]);
$riiul = mysqli_real_escape_string($conn, $input["riiul"]);
$marksona = mysqli_real_escape_string($conn, $input["marksona"]);
$markused = mysqli_real_escape_string($conn, $input["markused"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE periodicals  SET 
pealkiri = '".$pealkiri."', 
aasta = '".$aasta."', 
liik = '".$liik."' ,
keel = '".$keel."', 
valjaandja = '".$valjaandja."' ,
nr = '".$nr."', 
riiul = '".$riiul."' ,
marksona = '".$marksona."', 
markused = '".$markused."' 
 
 WHERE id = '".$input["id"]."'  ";

 mysqli_query($conn, $query);

}

if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM periodicals 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($conn, $query);

}

echo json_encode($input);

	
?>