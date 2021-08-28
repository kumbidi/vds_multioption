<?php
include_once 'vars.php';
include_once 'utilities.php';

/* informational */
$this_page_id = 1;

$this_page_title=$page_titles[1];
$this_page_body_tag_id=$page_body_tag_ids[1];

include_once 'header.php';

/* list of sankalpas to subscribe for  */
$s_list = explode($p_list_separator, $_GET['pujas']);

$s_count = count($s_list);

db_connect();

?>
        <div id="header">
        <img src="images/aol_logo.png" alt="" />
        </div>

        <div class="container mybox">
        <fieldset class="border border-secondary p-2">
        <legend>Contribution for Sankalpas: </legend>

<?php
foreach ($s_list as $s) {
  if (is_numeric($s)) {
    $query_select = mysqli_query($conn,"select * from puja_details where id=" . "$s");
    $num=mysqli_num_rows($query_select);
  } else {
    die('Invalid puja id received from client.');
  }

  while (($num > 0) && 
        ($r = mysqli_fetch_array($query_select))) { 
  ?>

            <div class="row">
              <div class="col-sm-4"><em>Seva: </em> <span><?=$r['seva']?></span></div>
              <div class="col-sm-4"><em>Seva Id: </em> <span><?=$r['id']?></span></div>
              <div class="col-sm-4"><em>Venue: </em> <span><?=$r['venue']?></span></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><em>Date: </em> <span><?=$r['date']?></span></div>
              <div class="col-sm-4"><em>Time: </em> <span><?=$r['time']?></span></div>
              <div class="col-sm-4">sdf</div>
            </div>
            <hr>
  <?php
        }
}
?>
          </fieldset>

        <fieldset class="border border-secondary p-2">
          <legend>Personal Details</legend>
          <form>
          <!-- mr-0 added to avoid negative margin for row -->
          <div class="form-group row mr-0">
              <label for="name" class="col-md-2">Full Name*</label>
              <input type="text" class="form-control col-md-10" id="full-name" placeholder="Full Name">
            </div>

            
          <div class="form-group row mr-0">
              <label for="email" class="col-md-2">Email address*</label>
              <input type="email" class="form-control col-md-4" id="email" placeholder="Your email address">
              <div class="col-md-1">&nbsp;</div>
              <label for="mobile" class="col-md-1 pl-md-2">Mobile*</label>
              <input type="number" class="form-control col-md-4" id="mobile" placeholder="Your contact number">
          </div>

          <div class="form-group row mr-0">
              <label for="addr" class="col-md-2">Address*</label>
              <input type="text" class="form-control col-md-10" id="addr" placeholder="Your contact address">
          </div>

          <div class="form-group row mr-0">
              <label for="city" class="col-md-2">City*</label>
              <input type="text" class="form-control col-md-2" id="city" placeholder="Your city">
              
              <div class="col-md-1">&nbsp;</div>
              <label for="state" class="col-md-1">State*</label>              
              <select name="state" class="form-control col-md-2" id="state" aria-hidden="true" aria-invalid="false">
                <option value=""></option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka" selected="">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
              </select>

              <div class="col-md-1">&nbsp;</div>
              <label for="pincode" class="col-md-1">City*</label>
              <input type="text" class="form-control col-md-2" id="pincode" placeholder="PinCode">
          </div>

          <div class="form-group row mr-0">
              <label for="gotra" class="col-md-2">Gotra</label>
              <input type="text" class="form-control col-md-2" id="gotra" placeholder="Your city">
              
              <div class="col-md-1">&nbsp;</div>
              <label for="nakshatra" class="col-md-1">Nakshtra</label>              
              <select name="nakshatra" class="form-control col-md-2" id="nakshatra" aria-hidden="true">
                <option value="">- Select Nakshatra -</option>;
                <option value="Aswini">Aswini</option>
                <option value="Bharani">Bharani</option>
                <option value="Krithika">Krithika</option>
                <option value="Rohini">Rohini</option>
                <option value="Mrigashirsha">Mrigashirsha</option>
                <option value="Ardra">Ardra</option>
                <option value="Punarvasu">Punarvasu</option>
                <option value="Pushya">Pushya</option>
                <option value="Ashlesha">Ashlesha</option>
                <option value="Magha">Magha</option>
                <option value="Purva Phalguni">Purva Phalguni</option>
                <option value="Uttara Phalguni">Uttara Phalguni</option>
                <option value="Hasta">Hasta</option>
                <option value="Chitra">Chitra</option>
                <option value="Swati">Swati</option>
                <option value="Vishakha">Vishakha</option>
                <option value="Anuradha">Anuradha</option>
                <option value="Jyeshtha">Jyeshtha</option>
                <option value="Mula">Mula</option>
                <option value="Purva Ashadha">Purva Ashadha</option>
                <option value="Uttara Ashadha">Uttara Ashadha</option>
                <option value="Shravana">Shravana</option>
                <option value="Dhanishtha">Dhanishtha</option>
                <option value="Shatabhisha">Shatabhisha</option>
                <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                <option value="Revati">Revati</option>
              </select>

              <div class="col-md-1">&nbsp;</div>
              <label for="rashi" class="col-md-1">Rashi</label>
              <select name="rashi" class="form-control col-md-2" id="rashi" aria-hidden="true">
                <option value="">- Select Rashi -</option>;
                <option value="Mesh">Mesh (Aries)</option>
                <option value="Vrushabh">Vrushabh (Taurus)</option>
                <option value="Mithuna">Mithuna (Gemini)</option>
                <option value="Karka">Karka (Cancer)</option>
                <option value="Simha">Simha (Leo)</option>
                <option value="Kanya">Kanya (Virgo)</option>
                <option value="Tula">Tula (Libra)</option>
                <option value="Vrischika">Vrischika (Scorpio)</option>
                <option value="Dhanur">Dhanur (Sagittarius)</option>
                <option value="Makara">Makara (Capricorn)</option>
                <option value="Kumbha">Kumbha (Aquarius)</option>
                <option value="Meena">Meena (Pisces)</option>
			  	    </select>
          </div>   
          
          <div class="form-group row mr-0">
              <label for="bdate" class="col-md-2">Birthday</label>
              <input type="text" class="form-control col-md-2" id="bdate" placeholder="Birthday">

              <label for="attending" class="col-md-2">Attending Personally</label>              
              <select name="attending" class="form-control col-md-2" id="attending" aria-hidden="true" aria-invalid="false" disabled>
                <option value="No">No</option>  
                <option value="Yes">Yes</option>
						  </select>
          </div>

    <!-- Add comment -->
          </form>
        </fieldset>
        </div>


<?php
include 'footer.php';
?>