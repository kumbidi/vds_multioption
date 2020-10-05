<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDS</title>

    <script src="jquery.min.js"></script>
    <script src="jquery.noty.js"></script>
  </head>

  <script>

  function searchid()
  {
    var search_id=$("#search_id").val();

    $.ajax({
      type:'POST',
      url:'updates.php',
      data:'action=search&search_id='+search_id,

      success:function(msg){

        var ar=msg.split(",");
        $("#sear1").val(ar[0]);
        $("#sear2").val(ar[1]);
        $("#sear3").val(ar[2]);
        $("#sear4").val(ar[3]);
        $("#sear5").val(ar[4]);
        $("#sear6").val(ar[5]);
        $("#sear7").val(ar[6]);
        $("#sear8").val(ar[7]);
        //window.location.reload();

      }
      });
  }

  </script>

  <body>
    <form class="" action="index.html" method="post">
    <table>
      <tr>
          <th>
            Enter ID:
          </th>
          <td>
              <input type="text" name="search_id" id="search_id">
          </td>
          <td>
              <input type="button" name="sub_id" value="Search" onclick="searchid()">
          </td>
      </tr>
      <tr>
          <td>Name: </td>
          <td>
              <input type="text" id="sear1" name="sear1">
          </td>
          <td></td>
      </tr>
      <tr>
          <td>email: </td>
          <td>
              <input type="text" id="sear2" name="sear2">
          </td>
          <td></td>
      </tr>
      <tr>
          <td>Mobile: </td>
          <td>
              <input type="text" id="sear3" name="sear3">
          </td>
          <td></td>
      <tr>
          <td>Amount: </td>
          <td>
              <input type="text" id="sear4" name="sear4">
          </td>
          <td></td>
      </tr>
      <tr>
          <td>Details Of Pujas</td>
          <td>
              <input type="text" id="sear5" name="sear5">
          </td>
          <td></td>
      </tr>
      <tr>
          <td></td>
          <td>
              <input type="text" id="sear6" name="sear6">
          </td>
      </tr>
      <tr>
          <td></td>
          <td>
              <input type="text" id="sear7" name="sear5">
          </td>
      </tr>
      <tr>
          <td></td>
          <td>
              <input type="text" id="sear8" name="sear6">
          </td>
      </tr>


    </table>
    </form>
  </body>
</html>
