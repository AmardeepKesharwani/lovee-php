<?php
if(isset($_GET["id"])){
require_once("inc/header.php");

$row = $conn->singleData('contact', $_GET['id']);
?>
<section class="container body">
 <h3 class="my-3">Registration</h3>
  
  <table class="table">
  <tr>
  <td>Data</td>
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