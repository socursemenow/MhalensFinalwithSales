<?php
include 'database.php';
$id=$_POST['id'];
$quantity=$_POST['quantity'];
$result = mysqli_query($conn,"SELECT * FROM crud WHERE id=$id");
$row = mysqli_fetch_row($result);
$cur_qty = $row[3];
$new_qty = $cur_qty - $quantity;
$price = $row[2];
$tprice = $price * $quantity;
if($cur_qty < $quantity){
	echo "Error: Buy quantity is greater than stock quantity";
	header('HTTP/1.1 500 Internal Server Booboo');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}else{
	$sql = "UPDATE `crud` SET `quantity`='$new_qty' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		$sql1 = "INSERT INTO `transactions`( `product_id`, `prev_quantity`,`quantity`,`price`,`total_price`) 
		VALUES ('$id','$cur_qty','$quantity','$price','$tprice')";
		if (mysqli_query($conn, $sql1)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>