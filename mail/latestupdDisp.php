<?php
include_once('connection.php');


		$ret=mysqli_query($con,"select * from latestupd ORDER BY upd_id Desc limit 1");
		$row=mysqli_fetch_object($ret);
		echo "<strong>Title :</strong> ".$row->title."<br/><br/>" ;
		echo "<strong>Contents :</strong> ".$row->content."<br/><br/>" ;
		echo "<strong>Publish Date :</strong> ".$row->date ."<br/><br/>" ;
		echo "<strong>Picture:</strong><img src='latestUpdates/$row->image' width='200' height='200'" ;
		
		
	
?>
