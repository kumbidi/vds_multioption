<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDS</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <script>

    function test()
    {
      var state_name=$(id).val();
      window.alert("Hello");
    }

  </script>
  <body>
    <div class="top-container">


    </div>
    <div class="middle-container">
      <img class="img-cont"src="images/vds.jpg" >

      <?php
      	$servername="localhost";
        $username="root";
        $password="";
      	$db="vds_puja";

        $conn=mysqli_connect($servername,$username,$password);
        if(!$conn)
        {
        		die("Connection Failed :" .mysqli_connect_eerror());
      	}
        //echo "Connected Successfully";

        mysqli_select_db($conn,$db);
        $querry_select=mysqli_query($conn,"select * from puja_details");
	      $num=mysqli_num_rows($querry_select);
      ?>

    </div>
    <form>
    <div class="bottom-container">
      <table>
        <tr>
          <th>SANKALPA</th>
          <th>DATE</th>
          <th>TIME</th>
          <th>SEVA</th>
          <th>VENUE</th>
          <th>ACTIVITY</th>
        </tr>
        <?php
            if ($num>0)
            {
              while($qrysp1=mysqli_fetch_array($querry_select))
              {
              ?>

              <tr>
                <td><input type="checkbox" id="<?php echo $qrysp1['id'];?>"></td>
                <td><?php echo $qrysp1['Time'];?></td>
                <td><?php echo $qrysp1['Time'];?></td>
                <td><?php echo $qrysp1['Seva'];?></td>
                <td><?php echo $qrysp1['Venue'];?></td>
                <td><?php echo $qrysp1['Activity'];?></td>
                <td><input type="hidden" value="<?php echo $qrysp1['id'];?>"></td>

              </tr>

              <?php
            }
            }
         ?>



      </table>


    </div>
    <div class="sub-button">
      <input type="button" value="Registr" id="style-button" onclick="test()">
    </div>
    </form>
  </body>
</html>
