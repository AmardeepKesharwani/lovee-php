<?php
if(isset($_GET["id"])){
require_once("inc/header.php");
$row = $conn->singleData('register',$_GET['id']);

?>
<section class="container body">
 <h3 class="my-3">Registration form</h3>
  
 <table class="table">
 <tr>
 <td>ID number</td>
 <td><?php echo $row->id +1000; ?></td>
 </tr>
 <tr>
 <td>Date</td>
 <td><?php echo $row->date; ?></td>
 </tr>
 <tr>
 <td>Name</td>
 <td><?php echo $row->name; ?></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><?php echo $row->email; ?></td>
 </tr>
 <tr>
 <td>Number</td>
 <td><?php echo $row->number; ?></td>
 </tr>
 <tr>
 <td>Address</td>
 <td><?php echo $row->address; ?></td>
 </tr>
 <tr>
 <td>Course</td>
 <td><?php echo $row->course; ?></td>
 </tr>
 <tr>
 <td>Geneder</td>
 <td><?php echo $row->geneder; ?></td>
 </tr>
 <tr>
 <td>Message</td>
 <td><?php echo $row->message; ?></td>
 </tr>
 </table>
</section>
<?php
require_once("inc/footer.php");
}else{
header("Location:index.php");
}
?>