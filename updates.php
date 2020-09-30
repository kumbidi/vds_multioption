<!-- <script src="js/jquery.min.js"></script> -->
<?php
	$servername="localhost";
  $username="root";
  $password="root";
	$action=$_POST['action'];
	$db="vds_puja";
        $conn=mysqli_connect($servername,$username,$password);
        if(!$conn)
        {
        		die("Connection Failed :" .mysqli_connect_error());
	}
   	echo "Connected Successfully";
	mysqli_select_db($conn,$db);

  if($action=="register")
  {
    $qryrateup=mysqli_query($conn,"insert into puja_details(date,time,seva,venue,activity,price) values('".$_POST['date_id']."','".$_POST['time_id']."','".$_POST['seva_id']."','".$_POST['venue_id']."','".$_POST['activity_id']."','".$_POST['price_id']."')");
    echo "Inserted";
    return;
  }

 elseif ($action=="search")
 {
	$sear=mysqli_query($conn,"select * from puja_details where id='".$_POST['search_id']."'");
 	//$num=mysqli_num_rows($qry);
	$seardata=mysqli_fetch_array($sear);
	echo $seardata['date'].",".$seardata['price'].",".$seardata['seva'];
	return;
}


 ?>
