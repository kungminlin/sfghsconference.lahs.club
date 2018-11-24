$(document).ready(function() {
  $('#submit').click(function() {
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();

    $.post("/mail.php", {name: name, email: email, message: message})
      .done(function(data) {
        console.log(data);
      })
  })
})
