<?php

include "config.php";

$sql="UPDATE comment SET status=1 WHERE status=0";	
$result=mysqli_query($con, $sql);

$sql="select * from comment ORDER BY id DESC limit 5";
$result=mysqli_query($con, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	if(isset($row['id_post'])) {
		$type = "Thread dikomentari ".$row['nama_user'] . " " . "<a href=post.php?id=" .$row['id_post'] . ">lihat di sini</a>";
	}
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $type . "</div>" . 
	"<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}
?>

