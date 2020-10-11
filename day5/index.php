

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.clickme {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    color: #10a2ff;
    cursor:pointer;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Pramod Baviskar</a>
  <div class="header-right">
    <a class="active" href="index.php">Login</a>
    <a href="registration.php">register here</a>
    <a href="#about">About</a>
  </div>
</div>

<div style="padding-left:20px">

  <h1>Student report card generation</h1>
<form action= "login.php"   method="POST">
	Username:<input type="username" name="username" placeholder="student username"><p>
	Password:<input type="password" name="password" placeholder="student password"><p>
	<input class="clickme" type="submit" name="Login"><p>
	<a class="clickme" href="registration.php"><u>New Student? Register here!</u></a><p><br>
	
	


</form>
</div>

</body>
</html>

