var puja_array = [];

// mss
function multi_sankalpa_subscribe() {
  $("#all_sankalpas_listing").submit();
}

$(document).ready(function () {
  $("input[type=button]").click(function () {
    $.each($("input[type='checkbox']:checked"), function () {
      puja_array.push($(this).attr("id"));
    });
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
