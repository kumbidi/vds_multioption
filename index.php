<?php
include_once 'vars.php';
include_once 'header.html';
?>

<div class="container"></div>
<div class="container" id="#quote-area">
  <img class="img-cont" src="images/vds.jpg" />

  <?php

    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn)
    {
        die("Connection Failed :" .mysqli_connect_error());
    }
    //echo "Connected Successfully";

    mysqli_select_db($conn,$db);
    $querry_select=mysqli_query($conn,"select * from puja_details");
    $num=mysqli_num_rows($querry_select);
  ?>
</div>
<form>
  <div class="bottom-container">
    <table class="table table-dark rounded">
      <thead>
        <tr>
          <th>SANKALPA</th>
          <th>DATE</th>
          <th>TIME</th>
          <th>SEVA</th>
          <th>VENUE</th>
          <th>ACTIVITY</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($num>0) { while($qrysp1=mysqli_fetch_array($querry_select)) { ?>

        <tr>
          <td><input type="checkbox" id="<?php echo $qrysp1['id'];?>" /></td>
          <td><?php echo $qrysp1['date'];?></td>
          <td><?php echo $qrysp1['time'];?></td>
          <td><?php echo $qrysp1['seva'];?></td>
          <td><?php echo $qrysp1['venue'];?></td>
          <td><?php echo $qrysp1['activity'];?></td>
          <td><input type="hidden" value="<?php echo $qrysp1['id'];?>" /></td>
        </tr>
      </tbody>
      <?php
        }
        }
      ?>
    </table>
  </div>
  <div class="sub-button">
    <input type="button" class="btn btn-dark" value="Register" id="style-button" onclick="test()" />
  </div>
</form>

<?php
include 'footer.html';
?>
