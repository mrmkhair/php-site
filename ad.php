<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

form , button{
    width : 500px;
    height: 50px;
    background: #eee;
}
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


   <center>
    
     <a><button>  اضافة لغة  </button></a><br/>
        
    <form action="admin.php" method="POST">
        <select name="lang">
            <option value="eng">English</option>
            
            <option value="ar">Arabic</option>
          
        </select>
        <input type="submit">
    </form><br/><br/><br/><br/><br/><br/>

        <a><button>  اضافة خصائص  </button></a><br/>
        
        <form action="feat.php" method="POST">
        <select name="year">
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
        </select>
        <input type="submit">
    </form>
    
</center>
</div>
</body>
</html>