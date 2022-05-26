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
   $lang = $_POST['lang'];
  $sql="SELECT * FROM info WHERE lang='$lang'";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
       
        ?>
    <form action="updateinfo.php" method="POST" enctype="multipart/form-data">
    
    <input style="display: none;" type="text" name="lang" value="<?php echo $row['lang'] ?>">
    <input style="display: none;" type="text" name="oldsvg" value="<?php echo $row['svg'] ?>">
    <input style="display: none;" type="text" name="oldattachment" value="<?php echo $row['attachment'] ?>">
    <input style="display: none;" type="text" name="oldimg1" value="<?php echo $row['img1'] ?>">
    <input style="display: none;" type="text" name="oldimg2" value="<?php echo $row['img2'] ?>">
    <input style="display: none;" type="text" name="oldimg3" value="<?php echo $row['img3'] ?>">
    <input style="display: none;" type="text" name="oldimg4" value="<?php echo $row['img4'] ?>">
    <input style="display: none;" type="text" name="oldimg5" value="<?php echo $row['img5'] ?>">
    <input style="display: none;" type="text" name="oldimg6" value="<?php echo $row['img6'] ?>">
    <label for="fname">  1 </label>
    <input type="text"  name="content" value="<?php echo $row['content'] ?>">
    <label for="fname">  2 </label>
    <input type="text"  name="title" value="<?php echo $row['title'] ?>">
    <label for="fname">  3 </label>
    <input type="text"  name="brand" value="<?php echo $row['brand'] ?>">
    <label for="fname">  4 </label>
    <input type="text"  name="about" value="<?php echo $row['about'] ?>">
    <label for="fname">  5 </label>
    <input type="text"  name="projects" value="<?php echo $row['projects'] ?>">
    <label for="fname">  6 </label>
    <input type="text"  name="resum" value="<?php echo $row['resum'] ?>">
    <label for="fname">  7 </label>
    <input type="text"  name="contact" value="<?php echo $row['contact'] ?>">
    <label for="fname">  8 </label>
    <input type="text"  name="mode" value="<?php echo $row['mode'] ?>">
    <label for="fname">  9 </label>
    <input type="text"  name="smalltext" value="<?php echo $row['smalltext'] ?>">
    <label for="fname">  10 </label>
    <input type="text"  name="span1" value="<?php echo $row['span1'] ?>">
    <label for="fname">  11 </label>
    <input type="text"  name="span2" value="<?php echo $row['span2'] ?>">
    <label for="fname">  12 </label>
    <input type="text"  name="span3" value="<?php echo $row['span3'] ?>">
    <label for="fname">  13 </label>
    <input type="text"  name="span4" value="<?php echo $row['span4'] ?>">
    <label for="fname">  14 </label>
    <input type="text"  name="paragraph" value="<?php echo $row['paragraph'] ?>">
    <label for="fname">  15 </label>
    <input type="text"  name="link" value="<?php echo $row['link'] ?>">
    <label for="fname">  16 </label>
    <input type="text"  name="quote" value="<?php echo $row['quote'] ?>">
    <label for="fname">  17 </label>
    <input type="text"  name="h2projects" value="<?php echo $row['h2projects'] ?>">
    <label for="fname">  1 </label>
    <input type="text"  name="group1" value="<?php echo $row['group1'] ?>">
    <label for="fname">  s1 </label>
    <input type="text"  name="s1" value="<?php echo $row['s1'] ?>">
    <label for="fname">  h1 </label>
    <input type="text"  name="h1" value="<?php echo $row['h1'] ?>">
    <label for="fname">  m1 </label>
    <input type="text"  name="m1" value="<?php echo $row['m1'] ?>">
    <label for="fname">  p1 </label>
    <input type="text"  name="p1" value="<?php echo $row['p1'] ?>">
    <label for="fname">  s2 </label>
    <input type="text"  name="s2" value="<?php echo $row['s2'] ?>">
    <label for="fname">  h2 </label>
    <input type="text"  name="h2" value="<?php echo $row['h2'] ?>">
    <label for="fname">  m2 </label>
    <input type="text"  name="m2" value="<?php echo $row['m2'] ?>">
    <label for="fname">  p2 </label>
    <input type="text"  name="p2" value="<?php echo $row['p2'] ?>">
    <label for="fname">  s3 </label>
    <input type="text"  name="s3" value="<?php echo $row['s3'] ?>">
    <label for="fname">  h3 </label>
    <input type="text"  name="h3" value="<?php echo $row['h3'] ?>">
    <label for="fname">  p3 </label>
    <input type="text"  name="p3" value="<?php echo $row['p3'] ?>">
    <label for="fname">  s4 </label>
    <input type="text"  name="s4" value="<?php echo $row['s4'] ?>">
    <label for="fname">  h4 </label>
    <input type="text"  name="h4" value="<?php echo $row['h4'] ?>">
    <label for="fname">  m4 </label>
    <input type="text"  name="m4" value="<?php echo $row['m4'] ?>">
    <label for="fname">  p4 </label>
    <input type="text"  name="p4" value="<?php echo $row['p4'] ?>">
    <label for="fname">  2 </label>
    <input type="text"  name="group2" value="<?php echo $row['group2'] ?>">
    <label for="fname">  s5 </label>
    <input type="text"  name="s5" value="<?php echo $row['s5'] ?>">
    <label for="fname">  h5 </label>
    <input type="text"  name="h5" value="<?php echo $row['h5'] ?>">
    <label for="fname">  m5 </label>
    <input type="text"  name="m5" value="<?php echo $row['m5'] ?>">
    <label for="fname">  p5 </label>
    <input type="text"  name="p5" value="<?php echo $row['p5'] ?>">
    <label for="fname">  s6 </label>
    <input type="text"  name="s6" value="<?php echo $row['s6'] ?>">
    <label for="fname">  h6 </label>
    <input type="text"  name="h6" value="<?php echo $row['h6'] ?>">
    <label for="fname">  m6 </label>
    <input type="text"  name="m6" value="<?php echo $row['m6'] ?>">
    <label for="fname">  p6 </label>
    <input type="text"  name="p6" value="<?php echo $row['p6'] ?>">
    <label for="fname">  s7 </label>
    <input type="text"  name="s7" value="<?php echo $row['s7'] ?>">
    <label for="fname">  h7 </label>
    <input type="text"  name="h7" value="<?php echo $row['h7'] ?>">
    <label for="fname">  m7 </label>
    <input type="text"  name="m7" value="<?php echo $row['m7'] ?>">
    <label for="fname">  p7 </label>
    <input type="text"  name="p7" value="<?php echo $row['p7'] ?>">
    <label for="fname">  3 </label>
    <input type="text"  name="welcome" value="<?php echo $row['welcome'] ?>">
    <label for="fname">  4 </label>
    <input type="text"  name="phone" value="<?php echo $row['phone'] ?>">
    <label for="fname">  5 </label>
    <input type="text"  name="email" value="<?php echo $row['email'] ?>">
    <label for="fname">  6 </label>
    <input type="text"  name="flink" value="<?php echo $row['flink'] ?>">
    <label for="fname">  7 </label>
    <input type="text"  name="ilink" value="<?php echo $row['ilink'] ?>">
    <label for="fname">  8 </label>
    <input type="text"  name="welcontact" value="<?php echo $row['welcontact'] ?>">
    <label for="fname">  9 </label>
    <input type="text"  name="yname" value="<?php echo $row['yname'] ?>">
    <label for="fname">  10 </label>
    <input type="text"  name="yemail" value="<?php echo $row['yemail'] ?>">
    <label for="fname">  11 </label>
    <input type="text"  name="ymsg" value="<?php echo $row['ymsg'] ?>">
    <label for="fname">  12 </label>
    <input type="text"  name="sending" value="<?php echo $row['sending'] ?>">
    <label for="fname">صورة  </label>
    <input type="file" id="fname" name="svg" ><br>
    <label for="fname">مرفق  </label>
    <input type="file" id="fname" name="attachment" ><br>
    <label for="fname">ص 1  </label>
    <input type="file" id="fname" name="img1" ><br>
    <label for="fname">ص 2  </label>
    <input type="file" id="fname" name="img2" ><br>
    <label for="fname">ص 3  </label>
    <input type="file" id="fname" name="img3" ><br>
    <label for="fname">ص 4  </label>
    <input type="file" id="fname" name="img4" ><br>
    <label for="fname">ص 5  </label>
    <input type="file" id="fname" name="img5" ><br>
    <label for="fname">ص 6  </label>
    <input type="file" id="fname" name="img6" ><br>
   
    <input type="submit" value="تحديث">
  </form>
  <?php } ?>
</div>

</body>
</html>
