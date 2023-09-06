<title>power4-its</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<p>&nbsp;</p>
<div class="container">
  <div class="row">
    <h2 class="text-center">
    POWER4-  <small class="text-muted">ITS</small>
</h2>
 
    <p>&nbsp;</p>

<?php
session_start();

$question2 = "<div class='col-sm'>   
<form method='post' action='sure.php'>
 <div class='form-group'>
 2.) Hast du mit einem dieser Frameworks / Plattform bereits gearbeitet? (Auswahl min 2)
 <input type='hidden' name='questionNum' value='2'>
 <div class='form-check'>
  <input class='form-check-input' name='answer2[]' type='checkbox' value='Laravel'>
  <label class='form-check-label' for='answer2'>Laravel</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer2[]' type='checkbox' value='Angular'>
<label class='form-check-label' for='answer2'>Angular</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer2[]' type='checkbox' value='React-Native'>
<label class='form-check-label' for='answer2'>React-Native</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer2[]' type='checkbox' value='nodejs'>
<label class='form-check-label' for='answer2'>Node.js / Express</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer2[]' type='checkbox' value='Git'>
<label class='form-check-label' for='answer2'>Git</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer2[]' type='checkbox' value='Docker'>
<label class='form-check-label' for='answer2'>Docker</label>
</div>
</div>
 <button type='submit' name='submit' class='btn btn-primary'>Next</button>
</form>
</div>";

$question3 = "<div class='col-sm'>   
<form method='post' action='sure.php'>
 <div class='form-group'>
 3.) In welchem Framework hast du deiner Meinung nach die meiste Erfahrung?
  <input type='hidden' name='questionNum' value='3'>
 <div class='form-check'>
  <input class='form-check-input' name='answer3[]' type='radio' value='Laravel' required>
  <label class='form-check-label' for='answer3'>Laravel</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer3[]' type='radio' value='Angular' required>
<label class='form-check-label' for='answer3'>Angular</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer3[]' type='radio' value='React-Native' required>
<label class='form-check-label' for='answer3'>React-Native</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer3[]' type='radio' value='nodejs' required>
<label class='form-check-label' for='answer3'>Node.js / Express</label>
</div>
</div>
<div class='invalid-feedback'>
        You must agree before submitting.
      </div>
<p></p>
 <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
</form>
</div>";
$question4 = "<div class='col-sm'>   
<form method='post' action='sure.php'>
 <div class='form-group'>
 4.) Wie lange programmierst du schon?
 <input type='hidden' name='questionNum' value='4'>
  <div class='form-group'>
    <select class='custom-select' name='answer4' required>
      <option value=''>Open this select menu</option>
      <option value='1'>1 Jahr</option>
      <option value='2'>2 Jahr</option>
      <option value='3'>3 Jahre</option>
      <option value='4'>4 Jahr</option>
      <option value='5'>5 Jahr</option>
      <option value='6'>6 Jahre</option>
      <option value='7'>7 Jahr</option>
      <option value='8'>8 Jahr</option>
      <option value='9'>9 Jahre</option>
      <option value='10'>10 Jahr</option>
      <option value='11'>10+ Jahr</option>
    </select>
    <div class='invalid-feedback'>Example invalid custom select feedback</div>
  </div>
</div>
<p></p>
 <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
</form>
</div>";
$question5 = "<div class='col-sm'>   
<form method='post' action='sure.php' onsubmit='return handleData()'>
<div class='form-group'>
 5.) Anwendungsentwicklung ist für dich?	
  <input type='hidden' name='questionNum' value='5'>
 <div class='form-check'>
  <input class='form-check-input' name='answer5[]' type='checkbox' value='Spaß und Herausforderung' >
  <label class='form-check-label' for='answer5'>Spaß und Herausforderung</label>
    </div>
<div class='form-check'>
<input class='form-check-input' name='answer5[]' type='checkbox' value='Deine Berufung' >
<label class='form-check-label' for='answer5'>Deine Berufung</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer5[]' type='checkbox' value='Hobby' >
<label class='form-check-label' for='answer5'>Hobby</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer5[]' type='checkbox' value='Deine Zukunft' >
<label class='form-check-label' for='answer5'>Deine Zukunft</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer5[]' type='checkbox' value='Dein Beruf' >
<label class='form-check-label' for='answer5'>Dein Beruf</label>
</div>
<div class='form-check'>
<input class='form-check-input' name='answer5[]' type='checkbox' value='Ein Mittel zum Zweck' >
<label class='form-check-label' for='answer5'>Ein Mittel zum Zweck</label>
</div>
<div style='visibility:hidden; color:red; ' id='chk_option_error'>
Bitte wählen Sie mindestens eine Option aus.
</div>
</div>
<button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
</form>
</div>";

$question6 = "<div class='col-sm'>   
       <form method='post' action='sure.php' name='registration' >
       <input type='hidden' name='questionNum' value='6'>
        <div class='form-group'>
      6.) Hast du Interesse an neuen, spannenden Projekten?
        <div class='form-group'>
        <div class='form-check radio-inline'>
  <input class='form-check-input' type='radio' name='answer6' value='ja' required>
  <label class='form-check-label' for='exampleRadios1'>Ja
  </label>
</div>
<div class='form-check'>
  <input class='form-check-input' type='radio' name='answer6' value='nein' required>
  <label class='form-check-label' for='exampleRadios2'>
    Nein
  </label>
</div>
    </div>
        <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
    </form>
    <span id='msg'></span>
      </div>";

$question7 = "<div class='col-sm'>   
      <form method='post' action='sure.php' onsubmit='return handleData7()'>
       <div class='form-group'>
       7.) Teamplayer oder Einzelkämpfer?
       <input type='hidden' name='questionNum' value='7'>
       <div class='form-check'>
        <input class='form-check-input' name='answer7[]' type='checkbox' value='Einzelkämpfer'>
        <label class='form-check-label' for='answer7'>Einzelkämpfer</label>
      </div>
      <div class='form-check'>
      <input class='form-check-input' name='answer7[]' type='checkbox' value='Teamplayer'>
      <label class='form-check-label' for='answer7'>Teamplayer</label>
      </div>
      <div class='form-check'>
      <input class='form-check-input' name='answer7[]' type='checkbox' value='Beide'>
      <label class='form-check-label' for='answer7'>Beide</label>
      </div>
      <div style='visibility:hidden; color:red; ' id='chk_option_error7'>
      Bitte wählen Sie mindestens eine Option aus.</div>
      </div>
      
       <button type='submit' name='submit' class='btn btn-primary'>Next</button>
      </form>
      </div>";

$question8 = "<div class='col-sm'>   
      <form method='post' action='sure.php' name='registration' >
      <input type='hidden' name='questionNum' value='8'>
       <div class='form-group'>
     8.) Zuvor in einem Team entwickelt?
       <div class='form-group'>
       <div class='form-check radio-inline'>
 <input class='form-check-input' type='radio' name='answer8' value='ja' required>
 <label class='form-check-label' for='exampleRadios1'>Ja
 </label>
</div>
<div class='form-check'>
 <input class='form-check-input' type='radio' name='answer8' value='nein' required>
 <label class='form-check-label' for='exampleRadios2'>
   Nein
 </label>
</div>
   </div>
       <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
   </form>
   <span id='msg'></span>
     </div>";

     $question9 = "<div class='col-sm'>   
     <form method='post' action='sure.php' name='registration' >
     <input type='hidden' name='questionNum' value='9'>
      <div class='form-group'>
     9.) Lernst du proaktiv neue Programmiersprachen/ Techniken?
      <div class='form-group'>
      <div class='form-check radio-inline'>
<input class='form-check-input' type='radio' name='answer9' value='ja' required>
<label class='form-check-label' for='exampleRadios1'>Ja
</label>
</div>
<div class='form-check'>
<input class='form-check-input' type='radio' name='answer9' value='nein' required>
<label class='form-check-label' for='exampleRadios2'>
  Nein
</label>
</div>
  </div>
      <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
  </form>
  <span id='msg'></span>
    </div>";

    $question10 = "<div class='col-sm'>   
    <form method='post' action='sure.php' name='registration' >
    <input type='hidden' name='questionNum' value='10'>
     <div class='form-group'>
    10.) Schon selbst für dich oder dein Umfeld Apps oder Anwendungen entwickelt?
     <div class='form-group'>
     <div class='form-check radio-inline'>
<input class='form-check-input' type='radio' name='answer10' value='ja' required>
<label class='form-check-label' for='exampleRadios1'>Ja
</label>
</div>
<div class='form-check'>
<input class='form-check-input' type='radio' name='answer10' value='nein' required>
<label class='form-check-label' for='exampleRadios2'>
 Nein
</label>
</div>
 </div>
     <button type='submit' name='submit' id='checked' class='btn btn-primary'>Next</button>
 </form>
 <span id='msg'></span>
   </div>";

   $question11 = "<div class='col-sm'>   
   <form method='post' action='sure.php' onsubmit='return handleData11()'>
    <div class='form-group'>
11.) In welchem Umfeld arbeiten Sie am liebsten?
    <input type='hidden' name='questionNum' value='11'>
    <div class='form-check'>
     <input class='form-check-input' name='answer11[]' type='checkbox' value='HomeOffice'>
     <label class='form-check-label' for='answer11'>HomeOffice</label>
   </div>
   <div class='form-check'>
   <input class='form-check-input' name='answer11[]' type='checkbox' value='Büro'>
   <label class='form-check-label' for='answer11'>Büro</label>
   </div>
   <div class='form-check'>
   <input class='form-check-input' name='answer11[]' type='checkbox' value='Beide'>
   <label class='form-check-label' for='answer11'>Beide</label>
   </div>
   <div style='visibility:hidden; color:red; ' id='chk_option_error11'>
      Bitte wählen Sie mindestens eine Option aus.</div>
   </div>
  
    <button type='submit' name='submit' class='btn btn-primary'>Next</button>
   </form>
   </div>";

   $question12 = "<div class='col-sm'>   
   <form method='post' action='sure.php'>
    <div class='form-group'>
12.) In welchem Umfeld arbeiten Sie am liebsten?
    <input type='hidden' name='questionNum' value='12'>
    <div class='form-group'>
    <label for='exampleFormControlTextarea1'>Kurz schreiben:</label>
    <textarea class='form-control' name='answer12' id='exampleFormControlTextarea1' rows='5' required></textarea>
  </div>
   </div>
   
    <button type='submit' name='submit' class='btn btn-primary'>Next</button>
   </form>
   </div>";
   $result = "Vielen Dank für Ihr Interesse an unserer Stellenanzeige und für das Ausfüllen des Fragenkatalogs.  Unsere Personalabteilung wird sich in Kürze mit Ihnen in Verbindung setzen. <p><img src='sure3.jpg'>   </p>";

$question_num = (isset($_POST['questionNum'])) ? (int)$_POST['questionNum'] : 0;
$leidernicht = "Nach den von Ihnen gemachten Angaben sind Sie leider nicht für die ausgeschriebene Stelle geeignet.<p><img src='sure1.jpg'></p><p> <a href='sure.php'>Home</a></p>";

switch($question_num) {
    case 0:
        ?>
  
    <div class="col-sm">   
       <form method="post" action="sure.php" name="registration" >
        <div class="form-group">
      1.) Sprichst du eine dieser Sprachen fließend? 
       <br>PHP - Angular / Typescript - Javascript
        <input type="hidden" name="questionNum" value="1">
        <div class="form-group">

        <div class="form-check radio-inline">
  <input class="form-check-input" type="radio" name="answer1" value="ja" required>
  <label class="form-check-label" for="exampleRadios1">Ja
  </label>

</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="answer1" value="nein" required>
  <label class="form-check-label" for="exampleRadios2">
    Nein
  </label>
  
</div>
  
    </div>
        <button type="submit" name="submit" id="checked" class="btn btn-primary">Next</button>

    </form>
    <span id="msg"></span>

      </div>

<?php
        break;
    case 1:
        if($_POST['answer1']== 'ja'){
        $_SESSION['answer1'] = $_POST['answer1'];
        echo $question2;
        }
        else {
            echo $leidernicht;
        }
        break;
     case 2:
        if( count($_POST['answer2']) > 1 && in_array("Git", $_POST['answer2']) == 0 && in_array("Docker", $_POST['answer2']) == 0 || count($_POST['answer2']) > 1 && in_array("nodejs", $_POST['answer2']) == 0 && in_array("Docker", $_POST['answer2']) == 0 || count($_POST['answer2']) > 1){
            $_SESSION['answer2'] = $_POST['answer2'];
            echo $question3;
            }
            else {
                echo $leidernicht;
            }
            break;
        
        case 3:
                    $_SESSION['answer3'] = $_POST['answer3'];
                    echo $question4;
                    break;
        case 4:
        if( $_POST['answer4'] > 3){
                $_SESSION['answer4'] = $_POST['answer4'];
            echo $question5;
                            }
                            else {
                                echo $leidernicht;
                            }
                            break; 
        case 5:
        if( in_array("Dein Beruf", $_POST['answer5']) == 0 || in_array("Ein Mittel zum Zweck", $_POST['answer5']) == 0 ){
        $_SESSION['answer5'] = $_POST['answer5'];
        echo $question6;
        }
        else {
        echo $leidernicht;
        }
        break;
        
        case 6:
            if($_POST['answer6']== 'ja'){
            $_SESSION['answer6'] = $_POST['answer6'];
            echo $question7;
            }
            else {
                echo $leidernicht;
            }
            break;

            case 7:
                if( in_array("Teamplayer", $_POST['answer7']) == 1 || in_array("Beide", $_POST['answer7']) == 1 ){
                $_SESSION['answer7'] = $_POST['answer7'];
                echo $question8;
                }
                else {
                echo $leidernicht;
                }
                break;
                
            case 8:
                $_SESSION['answer8'] = $_POST['answer8'];
                echo $question9;
                break;
            case 9:
                if($_POST['answer9']== 'ja'){
                $_SESSION['answer9'] = $_POST['answer9'];
                echo $question10;
                }
                else {
                echo $leidernicht;
                }
                break;             
            case 10:
            $_SESSION['answer10'] = $_POST['answer10'];
            echo $question11;
            break;
            case 11:
                $_SESSION['answer11'] = $_POST['answer11'];
                echo $question12;
                break;
            case 12:
            $_SESSION['answer12'] = $_POST['answer12'];
            echo $result;
            echo "<p>Answers;</p>";
            print_r($_SESSION);



            break;
            }

?>
<p>&nbsp;</p>
<div class="progress">
<script>
    function bar(){
       let i= 7.69;
       let deg = i * <?php echo $question_num;?>;
document.write("<div class='progress-bar bg-info' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:"+ deg +"%'>");
    }
    bar();
</script>
Complete
    </div> 

  </div>
</div>

  </div>
<script>
        $("input[type=submit]").click(function() {
             
             var atLeastOneChecked = false;
             $("input[type=radio]").each(function() {
              
                 if ($(this).attr("checked") != "checked") {
                  
                     $("#msg").html(
         "<span class='alert alert-danger' id='error'>"
         + "Please Choose atleast one</span>");
                 }
             });
         });

         function handleData()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("answer5[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;      
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }

}

function handleData7()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("answer7[]"))
    {
        document.getElementById("chk_option_error7").style.visibility = "visible";
      return false;      
    }
    else
    {
        document.getElementById("chk_option_error7").style.visibility = "hidden";
      return true;
    }

}

function handleData11()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("answer11[]"))
    {
        document.getElementById("chk_option_error11").style.visibility = "visible";
      return false;      
    }
    else
    {
        document.getElementById("chk_option_error11").style.visibility = "hidden";
      return true;
    }

}
</script>