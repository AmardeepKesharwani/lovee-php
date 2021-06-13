/*============================== 
     Lovie theme
===============================*/
/*==============================
    preloader function 
===============================*/
/*  $(window).on('load',function(){
 $("#preloader").hide();
 }); */
 
 
 
$(document).ready(function(){

/*==============================
    initializes Wow js
===============================*/

 new WOW().init();

/*============================== 
       top Search btn
===============================*/
 $(".nav-search-icon").on('click', function(){
  $(".search-box").slideToggle(200);
  $(this).children().toggleClass("fa-search");
  $(this).children().toggleClass("fa-times");
 });
 
 /*============================== 
     menu hover effect
 ===============================*/
 $('.menu-link li').on('click', function(){
   $(this).addClass('menu-effect');
   setTimeout(function(){
   $('.menu-link li').removeClass('menu-effect');
   },400);
 });
 
 /*============================== 
      sidenav toggle
 ===============================*/
 $(".sidebar-toggle").on('click', function(){
  $(".sidebar").toggleClass("open");
 });
 
/*==============================
    documents titles 
===============================*/
const domTitle = ()=>{
let url = location.href;
url = url.split("/");
url = url[url.length - 1];
url = url.split(".")[0];

if(url !== "index"){
var titles = $("title").append(" | "+url)
}
}
domTitle();


 /*============================== 
     Contact form submitting
 ===============================*/
 const formSubmit = () => {
 $(".input-field, .submit-btn").removeAttr("disabled");
 $('.submit-btn').text("SEND")
 $(".input-field").val("");
 $(".error-message").html('<span class="text-info">Form Successfully Submitted</span>');
 }
 
 
 $("#contact-form").on("submit",(e)=>{
 e.preventDefault();
 let form = $(this);
 let name = $(form).find("#name").val();
 let email = $(form).find("#email").val();
 let number = $(form).find("#number").val();
 let message = $(form).find("#message").val();
 let contactBTN = $(form).find("#contact-btn").val();
 
 let error = $(".error-message").text("");
 $(form).find(".error").removeClass("error");
 if(name ===''){
 $("#name").addClass("error");
 $(error).text("Name is required");
 return;
 }else if(email ==='' && number === ''){
 $("#email").addClass("error");
 $(error).text("Email/Number one field require");
 return;
 }else if(number !=='' && number.length < 10){
  $("#number").addClass("error");
  $(error).text("Number is not valid");
  return;
 }else if(message ===''){
 $("#message").addClass("error");
 $(error).text("message is required");
 return;
 }else{
 $(".input-field, .submit-btn").attr("disabled","disabled");
 $('.submit-btn').text("sending...");
 
 
 $.ajax({
   url:'actions.php',
   type:'POST',
   data:{
   name: name,
   email:email,
   number:number,
   message:message,
   contactBTN:contactBTN   
   },
   success: function(res){
    formSubmit()
   }
 })
 }
 });
 
 /*============================== 
     Registration form submitting
 ===============================*/
 $(".register-form").on("submit",(e)=>{
 e.preventDefault();
 let form = $(this);
 let name = $(form).find("#name").val();
 let email = $(form).find("#email").val();
 let number = $(form).find("#number").val();
 let address = $(form).find("#address").val();
 let course= $(form).find("#course").val();
 let geneder = $(form).find("#geneder").val();
 let message = $(form).find("#message").val();
 let registerBTN = $(form).find("#register-btn").val();
 
 let error = $(".error-message").text("");
 $(form).find(".error").removeClass("error");
 
 if(name ===''){
 $("#name").addClass("error");
 $(error).text("Name is required");
 return;
 }else if(email ==='' && number === ''){
 $("#email").addClass("error");
 $(error).text("Email/Number one field require");
 return;
 }else if(number !=='' && number.length < 10){
  $("#number").addClass("error");
  $(error).text("Number is not valid");
  return;
 }else if(address ===''){
 $("#address").addClass("error");
 $(error).text("address is required");
 return;
 }else if(course ===''){
 $("#course").addClass("error");
 $(error).text("Select any Courses");
 return;
 }else if(geneder ===''){
 $("#geneder").addClass("error");
 $(error).text("select your geneder");
 return;
 }else{
 $(".input-field, .submit-btn").attr("disabled","disabled");
 $('.submit-btn').text("sending...");
 
 $.ajax({
 url:'action.php',
 type:'POST',
 data:{
 name:name,
 email:email,
 number:number,
 address:address,
 course:course,
 geneder:geneder,
 message:message,
 registerBTN:registerBTN
 },
 success:function(res){
 let num = parseInt(res);
 $(".registration-no").text("YOU RESIGNATION NUMBER = "+(1000+num));
 formSubmit()
 }
 }); 
 }
 });
 
 
 
});