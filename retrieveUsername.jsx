$(document).ready(function(){
  $('#field_source').focusout(function(){
    var emailAddress = $(this).val();
    var emailuser = emailAddress.substring(0, emailAddress.indexOf("@"));
  	$('#field_source2').val(emailuser);
  });
});