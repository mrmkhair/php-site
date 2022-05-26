<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>اعدادات الموقع </h3>

<div class="container">
<?php

  include ('connect.php');
   $year = $_POST['year'];
  $sql="SELECT * FROM feat WHERE year='$year'";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
       
        ?>
    <form action="updatefeat.php" method="POST" enctype="multipart/form-data">
    
    <input style="display: none;" type="text" name="year" value="<?php echo $row['year'] ?>">
    
    <label for="fname">  title </label>
    <input type="text"  name="title" value="<?php echo $row['title'] ?>">
    <label for="fname">  place </label>
    <input type="text"  name="place" value="<?php echo $row['place'] ?>">
    <label for="fname">  paragraph </label>
    <input type="text"  name="para" value="<?php echo $row['para'] ?>">
    <label for="fname">  groups </label>
    <input type="text"  name="groups" value="<?php echo $row['groups'] ?>">
  
   
    <input type="submit" value="تحديث">
  </form>
  <?php } ?>
</div>

</body>
</html>
