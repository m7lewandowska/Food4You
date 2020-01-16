<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="shortcut icon" href="img/icon.png">
<title>Wskaźnik BMI | Food4You</title>
<meta charset= "utf-8">
<meta name="description" content="Strona">
<meta name="keywords" content="Informatyka">
<meta name="robots" content="all">
<link rel="stylesheet" type="text/css" href="style/style1.css">
<link rel="stylesheet" media="screen and (max-width: 600px)" href="style/mobile1.css">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
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
              <a href="kalorie.php">Kalorie</a>
              <a href="bmi.php" style="color: #ffb300; border-top: 1px solid #ffb300;">BMI</a>
              <a href="odzywianie.html">Odżywanie</a>
              <a href="skladniki.html">Dodaj składnik </a>
              <a href="informacje.html">Info </a>
      </div>

  </div>

  <div class="wrapper">
    <div class="content2">
      <div>
        <form>      
              <h2 class="calculator-title">Oblicz swój wskaźnik <strong>BMI</strong></h2>
            
              <div class="group__right">
                <div class="control-group">
                  <p>Płeć:</p>
                  <label class="control control-radio">K
                      <input type="radio" name="radio" checked="checked" />
                      <div class="control_indicator"></div>
                  </label>

                  <label class="control control-radio">M
                      <input type="radio" name="radio" />
                      <div class="control_indicator"></div>
                  </label>
                </div>

                <div class="ww-controls">
                  <p>Waga:</p>
                  <input type="number" class="inputweight" name="weight" value="">
                  <br>
                  <p>Wzrost:</p>
                  <input type="text" class="inputheight" name="height" value="">
                </div>

                <div class="btn3">
                  <button onclick="countBMI()">OBLICZ</button>
                </div>
              </div>

              <div class="barriersBMI">
                <div class="group__right">
                  <p class="calculator-info__title"><strong>Zakresy wartości BMI:</strong></p>
                  <ul class="calculator-info__list">
                    <li>mniej niż 16 - wygłodzenie</li>
                    <li>16 - 16.99 - wychudzenie</li>
                    <li>17 - 18.49 - niedowaga</li>
                    <li>18.5 - 24.99 - wartość prawidłowa</li>
                    <li>25 - 29.99 - nadwaga</li>
                    <li>30 - 34.99 - I stopień otyłości</li>
                    <li>35 - 39.99 - II stopień otyłości</li>
                    <li>powyżej 40 - otyłość skrajna</li>
                  </ul>
                </div>

              </div>

        </form>
      </div>

      <div id="bmisummary" style="display: none;">
          <h2>Wskaźnik BMI wynosi: </h2>
          <p id="wskbmi">19.59</p>
      </div>
    </div>

  </div>

  <div class="wrapper2">
    
    <div class="wcontent1">
		</div>	

		<div class="wcontent2">
		</div>	
		
		<div class="wcontent3">
		</div>

  </div>
  
  <div id="down_description">
		<hr class="linia-dol">
		<p class="copyright">Copyright &copy; by Marta Lewandowska</p>
  </div>
  

</body>
</html>