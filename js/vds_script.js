/* load only on pujas listing page */
if ($("body#sankalpa_listing").length > 0) {
  var puja_array = [];
  var max_sankalpa_select = 2;

  // mss
  function multi_sankalpa_subscribe() {
    $("#all_sankalpas_listing").submit();
  }

  $(document).ready(function () {
    $("input[type=button]").click(function () {
      puja_array = [];
      $.each($("input[type='checkbox']:checked"), function () {
        puja_array.push($(this).attr("id"));
      });
      if (puja_array.length > max_sankalpa_select) {
        window.alert("Max allowed at a time is " + max_sankalpa_select);
        return;
      }
      multi_sankalpa_subscribe();
    });
  });

  $(document).ready(function () {
    $("#all_sankalpas_listing").submit(function (event) {
      event.preventDefault();
      $this = $(this);
      var url = $this.attr("action") + "?action=mss&pujas=" + puja_array.join("_");
      window.location.href = url;
    });
  });

  /* load only on subscribed sankalpa listing page */
} else if ($("body#sankalpa_subscribed").length > 0) {
  /* add date picker for birthday */
  $(function () {
    $("#bdate").datepicker();
  });
}
