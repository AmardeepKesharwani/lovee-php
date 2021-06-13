<?php

class DbControler{
 
 private $conn;
 private $dsn = 'mysql:dbname=lovee;host=localhost';
 private $user = 'root';
 private $password = '';
 
 /* Creates database connection */
 public function __construct() {
 try {
 $this->conn = new PDO($this->dsn, $this->user, $this->password);
 } catch (PDOException $e) {
 print "Error!: " . $e->getMessage() . "";
 die();
 }
 return $this->conn;
 }
 
 public function login($user,$pass){
   $stmt = $this->conn->prepare("SELECT * FROM admin where username=:username");
   $stmt->bindparam(":username",$user);
   $stmt->execute();
  return $stmt;
 }

public function sideLink(){
   $host = $_SERVER["HTTP_HOST"];
   $http = (isset($_SERVER["HTTPS"]) ? 'https://':'http://');
   $side = $http.$host;
   return $side;
}

public function insertContact($name,$email,$number,$message){
 $date =  date("d-M-Y");
 $seen = 0;
 try{
 $stmt=$this->conn->prepare("insert into contact(name, email, number,message, seen, date) values(:name, :email, :number, :message, :seen , :date)");
 $stmt->bindparam(":name",$name);
 $stmt->bindparam(":email",$email);
 $stmt->bindparam(":number",$number);
 $stmt->bindparam(":message",$message);
 $stmt->bindparam(":seen",$seen);
 $stmt->bindparam(":date",$date);
 
 $stmt->execute();
 if($stmt){
  return true;
 } else{
  return false;
 }
 
 } catch(Exception $ex){
  echo $ex->getMessage();
  return false;
 }
}
 
 public function insertRegisterData($name,$email,$number, $address, $course, $geneder ,$message){
  
  $date =  date("d-M-Y");
  $seen = 0;
  try{
  $stmt=$this->conn->prepare("insert into register(name, email, number, address, course, geneder , message, seen, date) values(:name, :email, :number, :address, :course, :geneder, :message, :seen , :date)");
  $stmt->bindparam(":name",$name);
  $stmt->bindparam(":email",$email);
  $stmt->bindparam(":number",$number);
  $stmt->bindparam(":address",$address);
  $stmt->bindparam(":course",$course);
  $stmt->bindparam(":geneder",$geneder);
  $stmt->bindparam(":message",$message);
  $stmt->bindparam(":seen",$seen);
  $stmt->bindparam(":date",$date);
  $stmt->execute();
   if($stmt){
   $id = $this->conn->lastInsertId();
   return $id;
   }
  } catch(Exception $ex){
  echo $ex->getMessage();
  return false;
   }
 }
 
 public function createPost($title, $content, $img){
 $date =  date("d-M-Y");
 $stmt=$this->conn->prepare("insert into post(title, text, img, date) values(:title, :text, :img, :date)");
 $stmt->bindparam(":title",$title);
 $stmt->bindparam(":text",$content);
 $stmt->bindparam(":img",$img);
 $stmt->bindparam(":date",$date);
 $stmt->execute();
 if($stmt){
 $id = $this->conn->lastInsertId();
 return $id;
 }
 }
 public function updatePost($title,$content, $img, $id){
  $date =  date("d-M-Y");
  $query = "UPDATE post SET title=:title , text=:text, img=:img , date=:date where id=".$id;
  $stmt = $this->conn->prepare($query);
  $stmt->bindparam(":title",$title);
  $stmt->bindparam(":text",$content);
  $stmt->bindparam(":img",$img);
  $stmt->bindparam(":date",$date);
  $stmt->execute();
 }
 
public function showNewData($table){
 $query = 'select * from '.$table.' where seen = 0'; 
 $stmt = $this->conn->prepare($query);
 $stmt->execute();
 $num = $stmt->rowCount();
 return $num;
}
public function showAllData($table){
 $query = 'select * from '.$table; 
 $stmt = $this->conn->prepare($query);
 $stmt->execute();
 $num = $stmt->rowCount();
 return $num;
}

public function singleData($table,$id){
 $stmt = $this->conn->prepare("SELECT * FROM ".$table." where id=:id");
 $stmt->bindparam(":id",$id);
 $stmt->execute();
 if($stmt->rowCount()>0){
 $row =$stmt->fetch(PDO::FETCH_OBJ);
 return $row;
 }
}

public function deleteData($id,$table){
$query = 'DELETE FROM '.$table.' where id='.$id;
$stmt = $this->conn->prepare($query);
$stmt->execute();
return "success";
}


public function seen($id){
 $stmt = $this->conn->prepare("update contact set seen=1 where id=".$id);
 $stmt->execute();
 return true;
}
public function seen2($id){
 $stmt = $this->conn->prepare("update register set seen=1 where id=".$id);
 $stmt->execute();
 return true;
}

public function pagging($table,$record_par_page){
 $starting_position = 0;
 if(isset($_GET['paged'])){
 $starting_position = ($_GET['paged'] -1 )* $record_par_page;
 } 
 $query2 = "select * from ".$table." order by id DESC LIMIT $starting_position, $record_par_page";
 return $query2;
}

public function viewAllData($query){
 $stmt = $this->conn->prepare($query);
 $stmt->execute();
 return $stmt;
}


// pagination start

public function paginations($table,$record_par_page){
  $self = $_SERVER['PHP_SELF'];
  
  $stmt = $this->showAllData($table);
  $total_num_of_record = $stmt;
  
  if($total_num_of_record > 0){
   ?>
    <nav aria-label="pagination">
    <ul class="pagination text-center my-4">   
    
   <?php
     $total_num_of_page = ceil($total_num_of_record/$record_par_page);
     $pages = $total_num_of_page;
     $current_page = 1;
     if(isset($_GET["paged"])){
     $current_page = $_GET["paged"];
     }
     if($total_num_of_page > 1){
     
     if($current_page != 1){
      $previous = $current_page -1;
      echo "<li class='page-item'><a href='".$self."?paged=".$previous."' class='page-link' aria-label='Previous'><span aria-hidden='true'>&laquo;</span>
      <span class='sr-only'>Previous</span></a></li>";
     }
     
     
     for($i=1; $i<=$total_num_of_page; $i++){
       if($i == $current_page){
        echo "<li class='page-item active'><a href='".$self."?paged=".$i."' class='page-link'>".$i."</a></li>";
       } else{
        echo "<li class='page-item'><a href='".$self."?paged=".$i."' class='page-link'>".$i."</a></li>";
       }
       
     }
     
     if($current_page != 1){
     $next= $current_page +1;
     if($current_page == $total_num_of_page){
     return;
     } 
       
    echo "<li class='page-item'><a href='".$self."?paged=".$next."' class='page-link' aria-label='next'>
    <span aria-hidden='true'>&raquo;</span>
    <span class='r-only'></span></a></li>";
     }  
    
    if(!isset($_GET["paged"]) || $current_page == 1){
    $next= $current_page +1;
      echo "<li class='page-item'><a href='".$self."?paged=".$next."' class='page-link' aria-label='next'>
      <span aria-hidden='true'>&raquo;</span>
      <span class='r-only'></span></a></li>";
      }
 
    ?>
   
    </ul>
    </nav>
   <?php
  }
  }
} 
// pagination end



}

?>