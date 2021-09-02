// JS start

$(document).ready(function(){
 $("#signUp").click(function(){
   $("#register-form-box").show();
   $("#login-form-box").hide();
 });
 $("#signIn").click(function(){
   $("#login-form-box").show();
   $("#register-form-box").hide();
 });
 $("#forGot").click(function(){
   $("#forgotPass-form-box").show();
   $("#login-form-box").hide();
 });
 $("#back").click(function(){
   $("#login-form-box").show();
   $("#forgotPass-form-box").hide();
 });
 


});
