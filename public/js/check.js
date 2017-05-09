$("#login-form").on('submit', function() {
  var email = ("#email").value();
  if(email == '') {
    alert('email missing');
  }
});
