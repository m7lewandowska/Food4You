<!DOCTYPE html>
<html lang="pl">
<head>
<title>Strona główna | Food4You</title>
<meta charset= "utf-8">
<meta name="description" content="Strona">
<meta name="keywords" content="Informatyka">
<meta name="robots" content="all">
<link rel="stylesheet" type="text/css" href="style/style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="first_line_links">
    
      <ul class="linki">
      <li><a href="index.html"><img src="img/home1.png" alt="home" onmouseover="this.src= 'img/home2.png'" onmouseout="this.src= 'img/home1.png'"></a></li>
      <li><img src="img/logo.png" alt="logo"></li>
      </ul>
    </div>

  <div class="header">

    <div class="nav">
              <a href="kalorie.html" style="color: #ffb300; border-top: 1px solid #ffb300;">Kalorie</a>
              <a href="bmi.html">BMI</a>
              <a href="odzywianie.html">Odżywanie</a>
              <a href="skladniki.html">Dodaj składnik </a>
              <a href="informacje.html">Info </a>
      </div>

  </div>

  <div class="wrapper">
    <div class="content1">
      <p>Ilość posiłków: </p>
        <select class="mealsnumber">
          <?php
              for ($i=1; $i<=10; $i++)
              {
                  ?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
              }
                  ?>
        </select>

        <button class="btn">Generuj</button>

    </div>

  </div>

</body>
</html>