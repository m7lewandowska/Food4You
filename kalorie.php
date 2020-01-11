<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="shortcut icon" href="img/icon.png">
<title>Kalkulator kalorii| Food4You</title>
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
              <a href="bmi.php">BMI</a>
              <a href="odzywianie.html">Odżywanie</a>
              <a href="skladniki.html">Dodaj składnik </a>
              <a href="informacje.html">Info </a>
      </div>

  </div>

  <div class="wrapper">

    <div class="content1">
      <h2 class="calculator-title">Kalkulator kalorii</h2>

        <p>Ilość posiłków: </p>
          <select class="mealsnumber">
            <?php
                for ($i = 1;$i <= 10;$i++)
                {
                ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php
                }
            ?>
          </select>

          <button onclick="formGenerate()" class="btn">Generuj</button>
    </div>

    <div id="summary" style="display:none;">
          <div class="table200">
                <table>
                  <thead>
                    <tr class="table100-head">
                      <th class="column1">Nazwa</th>
                      <th class="column2">Kalorie</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td class="column1">Ryż biały</td>
                    <td class="column2">344</td>
                  </tr>
              </table>
          </div>
      </div>

    <div id="form1" style="display:none;">
      
          <form id="regForm" action="/action_page.php">
              <div class="tab">I POSIŁEK
                <p><input placeholder="wybierz składnik" oninput="this.className = ''" name="skladnik"></p>
                <button class="btn2">DODAJ</button>

                    <div class="listofmeals">

                          <div class="table100">
                            <table class="table table-striped">
                              <thead>
                                <tr class="table100-head">
                                  <th class="column1">Nazwa</th>
                                  <th class="column2">Kalorie</th>
                                  <th class="column3">Białko</th>
                                  <th class="column4">Tłuszcz</th>
                                  <th class="column5">Węglowodany</th>
                                  <th class="column6">Akcje</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td class="column1">Ryż biały</td>
                                <td class="column2">344</td>
                                <td class="column3">5.7</td>
                                <td class="column4">0.7</td>
                                <td class="column5">78.9</td>
                                <td class="column6"><button class="btn-primary">Usuń</button></td>
                              </tr>
                              
                              <tr>
                                  <td class="column1">Ryż biały</td>
                                  <td class="column2">344</td>
                                  <td class="column3">5.7</td>
                                  <td class="column4">0.7</td>
                                  <td class="column5">78.9</td>
                                  <td class="column6"><button class="btn-primary">Usuń</button></td>
                              </tr>

                              <tr>
                                  <td class="column1">Ryż biały</td>
                                  <td class="column2">344</td>
                                  <td class="column3">5.7</td>
                                  <td class="column4">0.7</td>
                                  <td class="column5">78.9</td>
                                  <td class="column6"><button class="btn-primary">Usuń</button></td>
                              </tr>

                                </tbody>
                            </table>
                          </div>
                    </div>
              </div>

            
              <!-- <div class="tab">II POSIŁEK
                <p><input placeholder="wybierz składnik" oninput="this.className = ''" name="skladnik"></p>
                  <button class="btn2">DODAJ</button>

                <div class="listofmeals">
                                
                              
                </div>
              </div> -->


              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
              </div>

              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>

          </form>

    </div>

  </div>


  <script>
    function formGenerate() {
      document.getElementById("form1").style.display = "block";
      //document.getElementById("summary").style.display = "block";

    }

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


  </script>

<div id="down_description">
		<hr class="linia-dol">
    <p class="copyright">Copyright &copy; by Marta Lewandowska</p>
  
</div>

</body>
</html>
