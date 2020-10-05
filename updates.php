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
   	//echo "Connected Successfully";
	mysqli_select_db($conn,$db);

  if($action=="register")
  {
    $qryrateup=mysqli_query($conn,"insert into puja_details(Date,Time,Seva,Venue,Activity,Price) values('".$_POST['date_id']."','".$_POST['time_id']."','".$_POST['seva_id']."','".$_POST['venue_id']."','".$_POST['activity_id']."','".$_POST['price_id']."')");
    echo "Inserted";
    return;
  }

	elseif ($action=="search")
	 {
		 $search_id=$_POST['search_id'];

		 $search_udetails=mysqli_query($conn,"select * from  user_details where uid='$search_id'");
		 $search_data=mysqli_fetch_array($search_udetails);
		 $uname=$search_data['name'];
		 $uemail=$search_data['email'];
		 $umobile=$search_data['mobile'];
		 $uamount=$search_data['amount'];
		 echo $uname. " , " .$uemail. " , " .$umobile. " , " .$uamount." ,";

		 $search_sdetails=mysqli_query($conn,"select * from  sankalpa_details where user_id='$search_id'");

		 $num=mysqli_num_rows($search_sdetails);
		 for($i=0;$i<$num;$i++){
			 $search_sdata=mysqli_fetch_array($search_sdetails);
			 ${'san_details_' . $i}=$search_sdata['seva_id'].",";
		 }
		 for($i=0;$i<$num;$i++){
			 $search_pujadetails=mysqli_query($conn,"select * from  puja_details where id='${'san_details_' . $i}'");
			 $search_pujadata=mysqli_fetch_array($search_pujadetails);
			 ${'puja_details_' . $i}=$search_pujadata['seva'].",";

		 }

		 for ($i=0;$i<$num;$i++) {
		 	echo ${'puja_details_' . $i};
		}
		 return;

	}
 ?>
