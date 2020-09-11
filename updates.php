<script src="jquery.min.js"></script>
<?php
	$servername="localhost";
  $username="root";
  $password="";
	$action=$_POST['action'];
	$db="vds_puja";
        $conn=mysqli_connect($servername,$username,$password);
        if(!$conn)
        {
        		die("Connection Failed :" .mysqli_connect_eerror());
	}
   	echo "Connected Successfully";
	mysqli_select_db($conn,$db);

  if($action=="register")
  {
    $qryrateup=mysqli_query($conn,"insert into puja_details(Date,Time,Seva,Venue,Activity,Price) values('".$_POST['date_id']."','".$_POST['time_id']."','".$_POST['seva_id']."','".$_POST['venue_id']."','".$_POST['activity_id']."','".$_POST['price_id']."')");
    echo "Inserted";
    return;
  }


 ?>
