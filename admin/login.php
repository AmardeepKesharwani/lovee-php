<?php
session_start();
if(isset($_SESSION['admin'])){
header("Location:index.php");
}

require_once("classes/model.php");
$conn = new DbControler();

if(isset($_POST["login"])){
$user = $_POST["username"];
$pass = $_POST["password"];
$pass = md5($pass);
$res = $conn->login($user, $pass);
print_r($res);

if($res->rowCount() > 0){
   $row = $res->fetch(PDO::FETCH_OBJ);
   $pass2 = $row->password;
   if($pass == $pass2){
   $_SESSION['admin']=$user;
    header("Location:index.php");
   }
 }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
<title>login</title>
<style>
body{
 margin:0;
 padding:0;
 box-sizing:border-box;
 font-family:poppins, sanc-serif;
 height:100%;
 font-size:1rem;
}
.wrapper{
 position: absolute;
 top:0;
 left:0;
 right:0;
 bottom:0;
 height:100%;
 width:100%;
 background:#fff;
 display:flex;
 align-items:center;
 Justify-content:canter;
 text-align:center;
}
.box{
padding:20px;
width:100%;
max-width:500px;
margin:auto;
}
.box input{
  outline:none;
  border:1px solid #383835;
  width:80%;
  padding:13px 4%;
  margin:15px 10px;
  color:#383835;
  border-radius:4px;
 }
.box input[type="submit"]{
  background:#383835;
  color:#fff;
  margin:auto;
  width:90%;
  margin-top:30px;
  display:block;
}
.fb-link{
 color:#383835;
 font-size:14px;
 font-family: sanc-serif;
 font-weight:500;
 display: block;
 padding-top:5px;
}

.title h2{
 font-size:2.3rem;
 font-weight:400;
 color:#383835;
}
.title h2 span{
 font-size:1rem;
 display:inline-block;
 transform:translate(-10px,-23px) rotate(17deg);
}

</style>
</head>
<body>
<div class="wrapper">
 <div class="box">
 <div class="title">

  <h2>Lovee<span>///</span></h2>
 </div>
  <form method="POST" action="login.php">
   <input type="text" placeholder="username" name="username" autocomplete="off" required="required">
   <input type="password" placeholder="password" name="password" required="required">
   <div class="submit-box">
    <input type="submit" value="login" name="login">
   </div>
  </form>
   </div>
</div>
</body>
</html>