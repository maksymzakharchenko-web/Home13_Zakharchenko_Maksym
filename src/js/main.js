$("#repeatPass").on("keyup", function () {
  let password = $("#password").val()
  let repeatPassword = $('#repeatPass').val()

  if (password !== repeatPassword) {
    $("#submit").attr("disabled", "disabled")
    $("#repeatPass").removeClass("border-success").addClass("border")
  } else {
    $("#submit").removeAttr("disabled")
    $("#repeatPass").removeClass("border")
    $("#repeatPass").addClass("border-success")
  }
})
