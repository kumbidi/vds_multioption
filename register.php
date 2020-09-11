<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <script src="jquery.min.js"></script>
    <script src="jquery.noty.js"></script>
  </head>
  <script>

    function insertdata()
    {
      var date_id=$("#date_id").val();
      var time_id=$("#time_id").val();
      var seva_id=$("#seva_id").val();
      var venue_id=$("#venue_id").val();
      var activity_id=$("#activity_id").val();
      var price_id=$("#price_id").val();

    $.ajax({
		type:'POST',
		url:'updates.php',
    data:'action=register&date_id='+date_id+'&time_id='+time_id+'&seva_id='+seva_id+'&venue_id='+venue_id+'&activity_id='+activity_id+'&price_id='+price_id,

		success:function(msg){
		window.location.reload();

	  }
		  });
    }
  </script>
  <body>
    <form method="post">
    <table align="center">
      <tr>
        <td >Date</td>
        <td><input type="text" id="date_id"></td>
      </tr>
      <tr>
        <td>Time</td>
        <td><input type="text" id="time_id"></td>
      </tr>
      <tr>
        <td>Seva</td>
        <td><input type="text" id="seva_id"></td>
      </tr>
      <tr>
        <td>Venue</td>
        <td><input type="text" id="venue_id"></td>
      </tr>
      <tr>
        <td>Activity</td>
        <td><input type="text" id="activity_id"></td>
      </tr>
      <tr>
      <tr>
        <td>Price</td>
        <td><input type="text" id="price_id"></td>
      </tr>
        <td></td>
        <td><input type="button" value="Insert" onclick="insertdata()"></td>
      </tr>
    </table>
  </body>
</html>
