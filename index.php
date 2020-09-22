<?php
include_once 'vars.php';

/* informational */
$this_page_id = 0;

$this_page_title=$page_titles[0];
$this_page_body_tag_id=$page_body_tag_ids[0];

include_once 'header.php';
?>

<div id="header">
  <img src="images/aol_logo.png" alt="" />
</div>

<div id="quote-area">
  <div class="container">
    <!-- <img class="img-cont" src="images/vds.jpg" /> -->
    <p>"SANKALPA is having an intention. That is it! IT WORKS.
      Desires mean it has to happen now. In SANKALPA you say, 
      LET IT HAPPEN WHENEVER IT HAS TO."</p>
    <hr>
    <p>Gurudev Sri Sri Ravi Shankar</p>
  </div>
</div>

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

<form id="all_sankalpas_listing" action="multi_sankalpa.php" method="GET">
  <div class="bottom-container">
    <table class="table rounded">
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
        </tr>
      </tbody>
      <?php
        }
        }
      ?>
    </table>
  </div>
  <div class="sub-button">
    <input type="button" class="btn btn-dark" value="Register" id="style-button" />
  </div>
</form>

<?php
include 'footer.php';
?>
