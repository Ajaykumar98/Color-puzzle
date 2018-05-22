<?php 
  if($result = $db->query("SELECT name,password FROM users ")){
    if($count = $result->num_rows){
      while($row = $result->fetch_object()){
?>
        <div>
          <?php echo $row->name; ?><br><br>
          <?php echo $row->password; ?><br><br>
        </div>
<?php          
      }
    $result->free();
    }
  }
?>