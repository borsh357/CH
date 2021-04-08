//smooth scroll
$(document).on("click", 'a[href^="#"]', function (event) {
  event.preventDefault();

  $("html, body").animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top,
    },
    1500
  );
});

//footer callback form aggregate
$("#callback-form").submit(function (e) {
  e.preventDefault();
  var data = $("#callback-form").serialize();
  data += "&ajax=true";
  $.post("api/send-callback.php", data).done(function (data) {
    alert(data);
    $("#callback-form").find("input[type=text]").val("");
    grecaptcha.reset();
  });
});

//leave feedback form aggregate
$("#send-feedback-form").submit(function (e) {
  e.preventDefault();
  var form = this;
  var formData = new FormData(form);
  formData.append("ajax", true);

  $.ajax({
    type: "POST",
    enctype: "multipart/form-data",
    url: "/api/send-feedback.php",
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 600000,
    success: function (data) {
      alert(data);
      $("#send-feedback-form")
        .find("input[type=text], input[type=file], textarea")
        .val("");
      grecaptcha.reset();
    },
    error: function (e) {
      console.log("ERROR : ", e);
    },
  });
});
