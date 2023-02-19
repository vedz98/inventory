<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
	$product_id = $_POST['product_id'];
	$name = $_POST['name'];

	$division = $_POST['division'];
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$location = $_POST['location'];
	$brand_id = $_POST['brandName'];
	$category_id = $_POST['categoryName'];


	$sql = "INSERT INTO product (product_id, name, division, startDate, endDate, location, brand_id, category_id, active, status) VALUES ( '$product_id', '$name',  '$division', '$startDate', '$endDate', '$location', '$brand_id', '$category_id', 1, 1)";

	if($connect->query($sql) === TRUE) {


					header('location: http://localhost/inventory/product.php');



	} else {
	 	echo "Failed!";
	}


	$connect->close();

	echo json_encode($valid);

}
