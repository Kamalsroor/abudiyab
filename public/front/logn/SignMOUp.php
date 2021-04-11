<?php
session_start();
?>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
body,html{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  min-height: 100%;
  overflow: hidden;
  background: url("bg.png"), -webkit-linear-gradient(bottom, #0250c5, #d43f8d);
  background: #fff;
}
::selection{
  color: #fff;
  background: #82e6fc;
}
.container{
  width: 330px;
  height: 700px;
  background: #fff;
  text-align: center;
  border-radius: 5px;
  padding: 50px 35px 10px 22px;
  /*background: url("bg.png"), -webkit-linear-gradient(bottom, #0250c5, #d43f8d);*/
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 0px 0;
}
.container .form-outer{
  width: 103%;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width: 400%;
}
.form-outer form .page{
  width: 25%;
  transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
  text-align: left;
  font-size: 25px;
  font-weight: 500;
}
.form-outer form .page .field{
  padding: 0 5px;
  width: 330px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  background: #2980b9;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .field button:hover{
  background: #000;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
}
.container .progress-bar{
  display: flex;
  margin: 40px 0;
  user-select: none;
}
.container .progress-bar .step{
  text-align: center;
  width: 100%;
  position: relative;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 18px;
  color: #000;
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 2px solid #000;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 17px;
  line-height: 25px;
}
.progress-bar .step .bullet.active{
  border-color: #82e6fc;
  background: #82e6fc;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
  right: -51px;
  height: 3px;
  width: 44px;
  background: #262626;
}
.progress-bar .step .bullet.active:after{
  background: #82e6fc;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #82e6fc;
  transition: 0.2s linear;
}
.progress-bar .step .check{
  position: absolute;
  left: 50%;
  top: 77%;
  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
}
.progress-bar .step .check.active{
  display: block;
  color: #fff;
}


.field input:focus{
        box-shadow:  0 0 5px #2980b9,
                     0 0 15px #82e6fc,
                     0 0 25px #ffffff;
        border: 1.5px solid #82e6fc;  
    }
.QWQ{
  width: 49%;
  height: 50px;
  border: none;
  background: #2980b9;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
  padding: 3px 0 0px;
}
.QWQ-F{
  background: #0652DD;
}
.QWQ-G{
  background: #222f3e;
}
.QWQ img{
  width: 35px;
  margin: -10px 0;
}
.hr{
  position: absolute;
  opacity: 0.7;
  width: 300px;
  margin: -40px 20px;
}
.ARed{
  background: red;
  color: #fff;
  padding: 5px;
  border-radius: 20px;
  display: none;
}

</style>






<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <?php
    $R_name = null;
    $R_namen = null;
    //require 'LOD0000NG.php';
    $THS = null;
    if (isset($_POST['N-Neme'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['namen'] = $_POST['namen'];
    
    $R_name = $_SESSION['name'];
    $R_namen = $_SESSION['namen'];
    $name = $_POST['name'].' '.$_POST['namen'];
    $klma1 = count(explode("!", $name)) - 1 + count(explode("@", $name)) - 1 + count(explode("#", $name)) - 1 + count(explode("$", $name)) - 1 + count(explode("%", $name)) - 1 + count(explode("^", $name)) - 1 + count(explode("&", $name)) - 1 + count(explode("*", $name)) - 1 + count(explode("/", $name)) - 1 + count(explode("?", $name)) - 1 + count(explode("<", $name)) - 1 + count(explode(">", $name)) - 1 + count(explode("'", $name)) - 1 + count(explode( ":", $name)) - 1 + count(explode(".", $name)) - 1 + count(explode(";", $name)) - 1 + count(explode("}", $name)) - 1 + count(explode("[", $name)) - 1 + count(explode("]", $name)) - 1 + count(explode("(", $name)) - 1 + count(explode("‘", $name)) - 1 + count(explode("ً", $name)) - 1 + count(explode("؛", $name)) - 1 + count(explode("ـ", $name)) - 1 + count(explode("ٍ", $name)) - 1 + count(explode("َ", $name)) - 1 + count(explode("ُ", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("~", $name)) - 1 + count(explode("’", $name)) - 1 + count(explode("÷", $name)) - 1 + count(explode("+", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("ِ", $name)) - 1 + count(explode("|", $name)) - 1 + count(explode("{", $name)) - 1 + count(explode(",", $name)) - 1 + count(explode('"', $name)) - 1 + count(explode(")", $name)) - 1 + count(explode("1", $name)) - 1 + count(explode("2", $name)) - 1 + count(explode("3", $name)) - 1 + count(explode("4", $name)) - 1 + count(explode("5", $name)) - 1 + count(explode("6", $name)) - 1 + count(explode("7", $name)) - 1 + count(explode("8", $name)) - 1 + count(explode("9", $name)) - 1 + count(explode("0", $name)) - 1;
 $count = str_word_count($name);
if ($count >= 2 and strlen($name) >= 7 and $klma1 == 0) {
  $THS = "<script type=\"text/javascript\">
  const slidePage = document.querySelector(\".slide-page\");
const nextBtnFirst = document.querySelector(\".firstNext\");
const prevBtnSec = document.querySelector(\".prev-1\");
const nextBtnSec = document.querySelector(\".next-1\");
const prevBtnThird = document.querySelector(\".prev-2\");
const nextBtnThird = document.querySelector(\".next-2\");
const prevBtnFourth = document.querySelector(\".prev-3\");
const submitBtn = document.querySelector(\".submit\");
const progressText = [...document.querySelectorAll(\".step p\")];
const progressCheck = [...document.querySelectorAll(\".step .check\")];
const bullet = [...document.querySelectorAll(\".step .bullet\")];
let max = 4;
let current = 1;
      slidePage.style.marginLeft = \"-25%\";
  bullet[current - 1].classList.add(\"active\");
  progressCheck[current - 1].classList.add(\"active\");
  progressText[current - 1].classList.add(\"active\");
  current += 1;
    </script>";
}else{
  echo "<style type=\"text/css\">.ARed{display: block;}</style>";
}
      }
    if (isset($_POST['R-Neme'])) {
      $R_name = $_SESSION['name'];
      $R_namen = $_SESSION['namen'];
    }
    ?>
    <div class="container">
      <header>Sign Up</header>
      <div class="progress-bar">
        <div class="step">
          <p>
Name</p>
<div class="bullet">
            <span>1</span>
          </div>
<div class="check fas fa-check">
</div>
</div>
<div class="step">
          <p>
Contact</p>
<div class="bullet">
            <span>2</span>
          </div>
<div class="check fas fa-check">
</div>
</div>
<div class="step">
          <p>
Title</p>
<div class="bullet">
            <span>3</span>
          </div>
<div class="check fas fa-check">
</div>
</div>
<div class="step">
          <p>
Password</p>
<div class="bullet">
            <span>4</span>
          </div>
<div class="check fas fa-check">
</div>
</div>
</div>
<div class="form-outer">
        <form method="post">


          <div class="page slide-page">
            <div class="title">Your Full Name:</div>
            <div class="ARed">Sorry, please enter your full real name!</div>
<div class="field">
              <div class="label">
Name</div>
<input required type="text" name="name" value="<?php echo $R_name ?>">
            </div>
<div class="field">
              <div class="label">
Family Name</div>
<input required type="text" name="namen" value="<?php echo $R_namen ?>">
            </div>
<div class="field">
              <button type="submit" name="N-Neme" class="firstNext next">Next</button>
            </div>
</div>
<?php
   echo $THS;
?>
<div class="page">
            <div class="title">
Contact Info:</div>
<div class="field">
              <div class="label">
Email Address</div>
<input type="text">
            </div>
<div class="field">
              <div class="label">
Phone Number</div>
<input type="Number">
            </div>
<div class="field btns">
              <button type="submit" name="R-Neme" class="prev-1 prev">Previous-N</button>
              <button class="next-1 next">Next</button>
            </div>
</div>
<div class="page">
            <div class="title">
Your Address:</div>
<div class="field">
              <div class="label">
City</div>
<input type="text">
            </div>
<div class="field">
              <div class="label">
Area</div>
<input type="text">
            </div>
<div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
</div>
<div class="page">
            <div class="title">
Your Password:</div>
<div class="field">
              <div class="label">
Password</div>
<input type="text">
            </div>
<div class="field">
              <div class="label">
Retype Password</div>
<input type="password">
            </div>
<div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit">Submit</button>
            </div>
</div>
</form>
<hr class="hr">
<button class="QWQ-F QWQ"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>Facebook</button>
<button class="QWQ-G submit QWQ"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/>Google</button>
</div>
</div>
<script src="script.js"></script>

  </body>
</html>




<!-- Created By CodingNepal -->
<script type="text/javascript">
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".234234");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = [...document.querySelectorAll(".step p")];
const progressCheck = [...document.querySelectorAll(".step .check")];
const bullet = [...document.querySelectorAll(".step .bullet")];
let max = 4;
let current = 1;

nextBtnFirst.addEventListener("click", function(){
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prevBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

</script>