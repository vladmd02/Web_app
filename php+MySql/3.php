<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Test </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style type="text/css">

h1 {
  text-align: center;
  margin: 0px;
  padding: 0px;
  }

h2 {
  color : black;
  }

  #a  {
  width : 580px;
  height: 511px;
  padding: 0px;
  float : left;
  }

 #b {
  text-align: center;
  width : 400px;
  float : left;
  margin : 20px;
  border-radius: 70px;
  }

body {
  background-color:#79edd0;
  color : black;
  }

h2 {
  text-align: center;
  }

#menu {  
  margin: 0px; 
  background-color: #FC9D00;
  height: 60px;
  margin-bottom: 0px
  }

#menu ul {
  list-style-type: none; 
  padding: 0px;
  margin: 0px; 
      }

#menu li {  
  float: left; 
  }

#menu a:link, #menu a:visited {
  text-decoration: none;
  color: #fff;
  font: bold 17px Arial;
  display: block;
  line-height: 60px;
  padding: 0px 20px;
}

#menu a:hover, #menu a.active {
  color: #FC9D00;
  background-color: #fff;
}

p {
  margin-left: 65px;
  padding-right: 120px;
  text-align: justify;
  height: 20px;
  width: 1200px;
  padding-left: 800px;
}

#fon {
  width: 100%;
  height: 70px;
}

#main-form {
  width : 300px;
  margin-left: 760px;
}

#fone {
  width: 100%;
  height: 70px;
  background-color: #ed1a2f;
  color: white;
  font: bold 25px Arial;
  line-height: 65px;
  padding-left: 50px;
}

nav {
  width: 350px;
  height: 60px;
  margin-left: 1072px;
  padding-top: 10000px;
}

input {
  margin-left:20px;
}

#my {
margin-left: 984px;
}

#ss {
text-align: center;
}

</style>
</head>
  <body>
    
    <div id="fone"> История будизма
    <button id = "my" type="button" class="btn btn-dark">Узнать больше</button> </div>

<div id="wrapper">
    <div id="div">
      <div id="menu">
        <ul >
          <li><a href="1.html" class="active">Главная</a>
          </li>
          <li><a href="2.html"> Факты</a></li>
          <li><a href="3.html"> Профиль</a></li>
          <li><a href="4.html"> История</a></li>
          <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
        </ul>
      </div>
      <img  id="a" src="41.jpg">

 <?php
    session_start();
  ?>

<div class="container mt-5">
<h1 class="mt-5" > Регистрация </h1>
<div id = "ss" class = "text-success"> <?= $_SESSION['success'] ?> </div>

<form id = "main-form" action="simpl.php" method="post"  > 

<label for="name"> Имя : </label>
<input type="text" name="username" value = "<?=$_SESSION['user_name']?>" placeholder="Имя" id="name" class = "form-control"  > 
<div class="text-danger"><?=$_SESSION['error_username']?> </div> 

<label for="email" >Email : </label>
<input type="email" name="email" value = "<?=$_SESSION['email']?>" placeholder="Введите email" id="email" class = "form-control">
<div class="text-danger"><?=$_SESSION['error_email']?></div>

<label for="password" >Пароль : </label>
<input type="password" name="password" value = "<?=$_SESSION['password']?>" placeholder="Пароль" id="pass" class = "form-control">
<div class="text-danger"> <?=$_SESSION['error_password']?> </div>

<label for="repass">Проверка пароля : </label>
<input type="password" name="repass" value = "<?=$_SESSION['repass']?>" placeholder="Проверка пароля" id="repass" class = "form-control">
<div class="text-danger"><?=$_SESSION['error_repass']?></div><br>

<div id = "error" style="color: red"></div>
<input type="submit" name="submit" value="Готово" class = "btn btn-success" >
</form>

</div>


</body>
</html>

