<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Test </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"> </script>
  <script>
    function funcBefore() { // функция , которая срабатывает До
      $("#information").text("Ожидание данных...");
    }

    function funcSuccess(data) { //data - информация со страницы content php // после возврата данных
      $("#information").text (data);
    }

    // function incSize (event) {
    //   alert("123");
    // }

    $(document).ready ( function() { // обращение ко всему документу // ready - вызывется только после полной загрузки страницы 
        $("#load").bind("click", function() { // bind - обработчик событий / принимает два парамтера 
        var admin = "Admin";
          $.ajax ({ // функция ajax 
            url:"content.php", // стр. обработки
            type: "POST", // метод передачи данных
            data: ( { name: admin , number:5 } ), // данные 
            dataType:"html", // тип данных
            beforeSend: funcBefore, // функция , срабатывающая до ajax
            success: funcSuccess // функция , срабатываюшая полсе 
          });
       }); // закрываем функцияю bind


    $("#done").bind("click", function() { // ищем элемент с id - done
          $.ajax ({ // и обрабатываем нажатие на этот элемент
            url:"check.php",
            type: "POST",
            data: ({name: $("#name1").val()}), // val = данные из input 
            dataType:"html",
            beforeSend: function () { // сразу объявляем функции 
                $("#information").text("Ожидание данных...");
            } ,
            success: function (data) {
              // if (data == "Fail")
              // alert ("Имя занято"); // окно предупреждение
              // document.write("<h1>Привет мир!</h1>");
              // document.write('<img src="5.jpg"/>');
              //document.getElementById("find").innerHTML = ' ';
              //document.getElementById(find).attribute = new value
            
              //document.getElementById('main-form').addEventListener("submit" , checkForm); // обраюотчик событиий , первый параметр - название события , которое мы отслеживаем без "on" , второй параметр название функции , которую мы будем вызывать

              // var id = $("#name1").val() 
              var Name = document.getElementById('name1').value;

              //document.write (name1);
              if ( Name == 'Индия' )  {
                 document.getElementById("something").innerHTML = '<img id = "a"src="11.jpg">';
                 document.getElementById("find").innerHTML = 'Будизм в Индии';
                  $("#information").text(data);
               }
              else if ( Name == "США") {
                 document.getElementById("something").innerHTML = '<img id = "a"src="14.jpg">';
                document.getElementById("find").innerHTML = 'Будизм в США';
                  $("#information").text(data);
              }
              else if ( Name == "Молдова") {
                 document.getElementById("something").innerHTML = '<img id = "a"src="16.jpg">';
                document.getElementById("find").innerHTML = 'Будизм в Молдове';
                  $("#information").text(data);
              }
              else if ( Name == "Китай") {
                  document.getElementById("something").innerHTML = '<img id = "a"src="21.jpeg">';
                  document.getElementById("find").innerHTML = 'Будизм в Китае';
                  $("#information").text(data);
              }
              else {
                document.getElementById("something").innerHTML = '<img id = "a"src="405.jpg">';
                document.getElementById("find").innerHTML = 'Увы , информация не была найдена :(';
                $("#information").text(data); // вывод в блоке с id - information
              }
            }
          });
       }); 
    }); // закрываем функцию ready
  </script>
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

#information {
  margin-left: 65px;
  padding-right: 120px;
  text-align: justify;
  height: 20px;
  width: 1200px;
  padding-left: 800px;
}

#something {
  width : 580px;
  height: 511px;
  padding: 0px;
  float : left;
}

/*#ii {
text-align: center;
border: 3px solid black ;
width: 800px;
padding-right: 100px;
margin-left: 200px;
margin-right: 800px;

}*/


  </style>


</head>
<body>
<!--   <input type="text" id="name" placeholder="Введите имя" />
  <input type="button" id="done" value="Готово" /> -->
 <!--  <p id="load" style="cursor:pointer"> Загрузить данные </p> -->
  <!-- <div id="information"></div> -->
<div id="fone"> История будизма
    <button id = "my" type="button" class="btn btn-dark" >Узнать больше</button> </div>

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
    <form id = "main-form" class="d-flex">
        <input class="form-control me-2" type="text" id="name1" placeholder="Введите имя" aria-label="Search"/>
        <input class="btn btn-outline-success" type="button" id="done" value="Готово" />
    </form>
  </div>
</nav>
        </ul>
      </div>
    <!--   <img  id="a" src="54.jpg"> -->
      <div id = "something">
       </div>
      <br>
      <div id="ii" >
      <h1 id = "find" class="mt-5" ><!-- Для поиска стран используйте поиск на странице :) --></h1>
      </div>
   <!--  <h2>От боли и переживаний никто не застрахован</h2> -->
<br>
<div id="information"></div>
<!-- <p >" Буддисты утверждают : депрессию и отчаяние вызывает наша неспособность контролировать собственные желания. Медитация, строгое следование несложным правилам, а главное, принятие и использование своей боли помогут вам достичь спокойствия. Жизненная энергия не статична. 
</p> -->
</body>
</html>

