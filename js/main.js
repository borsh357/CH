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
    switch (data) {
      case "OK":
        $("#callback-form").find("input[type=text]").val("");
        grecaptcha.reset();
        showFormNotification("success", "Заявка отправлена.");
        break;
      case "CAPTCHA_ERROR":
        grecaptcha.reset();
        showFormNotification("error", "Ошибка captcha. Попробуйте еще раз.");
        break;
      case "VALIDATION_ERROR":
        grecaptcha.reset();
        showFormNotification(
          "error",
          "Ошибка валидации данных. Проверьте введенные данные."
        );
        break;
      default:
        break;
    }
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
      switch (data) {
        case "OK":
          $("#send-feedback-form")
            .find("input[type=text], input[type=file], textarea")
            .val("");
          grecaptcha.reset();
          showFormNotification("success", "Отзыв отправлен.");
          break;
        case "CAPTCHA_ERROR":
          grecaptcha.reset();
          showFormNotification("error", "Ошибка captcha. Попробуйте еще раз.");
          break;
        case "VALIDATION_ERROR":
          grecaptcha.reset();
          showFormNotification(
            "error",
            "Ошибка валидации данных. Проверьте введенные данные."
          );
          break;
        default:
          break;
      }
    },
    error: function (e) {
      console.log("ERROR : ", e);
    },
  });
});

function showFormNotification(type, text) {
  switch (type) {
    case "success":
      console.log(1);
      $(".form-notification-success").text(text);
      $(".form-notification-success").fadeIn(1000);
      setTimeout(() => {
        $(".form-notification-success").fadeOut(1000);
      }, 5000);
      break;
    case "error":
      $(".form-notification-error").text(text);
      $(".form-notification-error").fadeIn(1000);
      setTimeout(() => {
        $(".form-notification-error").fadeOut(1000);
      }, 5000);
      break;
  }
}
