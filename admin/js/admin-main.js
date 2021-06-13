/*==============================
    lovee admin js file
===============================*/

$(document).ready(function(){

/*==============================
    navbar toggle function
===============================*/
$(".sidebar-toggle").on("click",()=>{
 $(".sidebar").toggleClass("open");
});


$(".contact-check").click(function(e){
 e.preventDefault();
 let table = 'contant';
 let id = $(this).parent().data("id");
 let btn = $(this);
 $.ajax({
 url:'action.php',
 type:'POST',
 data:{
 id:id,
 contact:table
 },
 success:function(res){
 $(btn).hide()
 }
 })
 });
 
 $(".register-check").click(function(e){
 e.preventDefault();
 let table = 'register';
 let id = $(this).parent().data("id");
 let btn = $(this);
 $.ajax({
 url:'action.php',
 type:'POST',
 data:{
 id:id,
 register:table
 },
 success:function(res){
 $(btn).hide();
 }
 })
 });
 
 
 $(".delete-contact").click(function(e){
 e.preventDefault();
 let  Conf = confirm("are you sure Deleted this Contract");
 if(Conf ===true){
 let table = 'contact';
 let id = $(this).parent().data("id");
 let box = $(this).parent().parent();
 $.ajax({
 url:'action.php',
 type:'POST',
 data:{
 id:id,
 deleted:table
 },
 success:function(res){
 $(box).hide();
 }
 })
 }
 });
 
 $(".Delete-register").click(function(e){
 e.preventDefault();
 let  Confi = confirm("are you sure Deleted this Registration");
 if(Confi ===true){
 let table = "register";
 let id = $(this).parent().data("id");
 let box = $(this).parent().parent();
 $.ajax({
 url:"action.php",
 type:'POST',
 data:{
 id:id,
 deleted:table
 },
 success:function(res){
 $(box).hide();
 }
 })
 }
 });
 
 $(".delete-post").click(function(e){
 e.preventDefault();
 let  Conf = confirm("are you sure Deleted this Post");
 if(Conf ===true){
 let table = 'post';
 let id = $(this).parent().data("id");
 let box = $(this).parent().parent();
 $.ajax({
 url:'action.php',
 type:'POST',
 data:{
 id:id,
 deleted:table
 },
 success:function(res){
 $(box).hide();
 }
 })
 }
 });
 
})
