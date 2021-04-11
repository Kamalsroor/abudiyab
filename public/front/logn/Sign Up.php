<?php
session_start();

require '../PHP/db.php';
require '../PHP/views.php';

function zAz($xnxx)
{
    echo "<option value=\"$xnxx\">";
}
$stmt2 = $con->prepare("select * from Provinces");$stmt2->execute();$result = $stmt2->get_result();echo "<table border='1'>";

// numer
// is_numeric();

$R_name = null;
$R_email = null;
$R_number = null;
$R_password = null;
$R_re_password = null;
//$R_country = null;
$R_city = null;
$R_region = null;

$nemEmal = 'none';

$hide = 'hide';
$alert = '';
$msg_10 = '';
$TnT = '';$top = '-50%;';
//$E_mail = '';
?>
<!DOCTYPE html>
<html id="KM">
    <script>
        
    </script>
<head>
    <style type="text/css">
     .alert{
        opacity: 1;
        pointer-events: auto;
     }
    </style>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap');
        *{
            margin: 0;
            padding: 0;
            outline: none;
        }
        html, body{
            width: 100%;
            height: 100%;
          
            background-size: 100%;
            overflow: hidden;
        }
        @media (max-width: 980px){
            html, body{
                /* background: none; */
            }
        }
        #KM{
            /*display: none;*/
        }
    </style>
	<title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                                    <!-- iekon -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CDN --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="images/png" href="i/a2.png">
	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto:wght@400;900&display=swap');
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap');
       *{
        font-family: 'Cairo', sans-serif !important;
       }
       
       body{
        /* background:url("bg-01.jpg") !important; */
        /* background: rgb(95,9,121) !important; */
        background: linear-gradient(
90deg
, rgb(3 2 56 / 76%) 0%, rgb(13 11 43) 0%, rgb(152 26 26) 103%)  !important;
        background-repeat: no-repeat !important;
        background-size: 100% 100% !important;
        font-family: 'Cairo', sans-serif !important;
       }
       

       .MO-TOT{
           width: 500px !important; text-align: center !important;
           /* height: 800px !important; */
           border-radius: 10px;
           padding-bottom: 100px !important;
           
       }
       .MO-TOT > div{
         text-align: center ;
         margin-bottom: 100PX;
         /* margin-top: 30px; */
         /* padding: 50px; */
       }
       .MO-AK{
           margin: 30px auto  !important;
           /* text-align: center !important; */
           width: 100%;
       }

       .MO-NNN{
           text-align: center !important;
           margin: auto;
       }
       .MO-IP{
           width: 100% !important;
           margin: 10px 0 !important;
           text-align: right !important;
           
       }

       
      
       
        .mbdm{
            top: 50%;
            transform: translate(0, -50%);
            float: right;
            max-width: 570px;
            width: 570px;
        }
	 .shadow1{
		/*	float: right;
			width: 32%;
			margin: -140px 20px;
            background: #fff;*/
		}
		/*434px*/
        .ion{
            padding: 10px 5px 20px 30px;
            background: none;
        }
        h1 .img-a{
            width: 110px;
            margin: 0px 0px 0 0px;
            float: left;
        }
        h1{
            position: absolute;
            margin: 0px;
            top: 80%;
            left: 70%;
            color: #000;
            display: none;
        }
        h1 .LOOG{
              float: left;
              margin: -3px 0 0 0;
              font-family: 'Roboto', sans-serif;
              font-family: 'Noto Sans JP', sans-serif;
        }
        h1 .LOOG h2{
            font-size: 35px;
        }
        h1 .LOOG h6{
              margin: -10px 0px 0 2px;
              font-size: 12.4px;
              font-family: 'Roboto', sans-serif;
        }
        p.Sign_Up{
            position: absolute;
            margin: 0px 171px 0px;
            font-family: 'Roboto', sans-serif;
            font-size: 50px;
            font-weight: 4;
            color: #fff;
            top: -80px;
        }
	.shadow1 input {
        float: left;
        width: 248px;
        padding: 0 7px 0 8px;
        height: 40px;
        margin: 15px 2px;
        font-size: 17px;
        border: 1px solid #999;
        font-size: 16px;
        outline: none;
        color: #37d7fb;
        color: #000;
        font-family: 'Poppins' ,sans-serif;
        background: #fff;
	}
    input.w2{
        float: none;
        width: 500px;
    }
    .shadow1 input:focus{
        /*
        box-shadow:  0 0 5px #82e6fc,
                     0 0 15px #b4f0fd,
                     0 0 25px #ffffff;
        border: 1.5px solid #74b9ff;  6ab04c #badc58
        */
        box-shadow:  0 0 5px #44bd32,
                     0 0 10px #4cd137,
                     0 0 25px #fff;
        border: 1.5px solid #009432;

    }
    .input1{
        float: right;
        width: 165px;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 0 1.5px;
        border: none;
        border-radius: 3px;
        padding: 7px 20px;
        font-size: 17px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        /*background: #2196f3;*/
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
    }
    .input1:hover{
        background: #0984e3;
    }
    .i2{
        background: #4834d4;
        background: #3742fa;
    }
    .i3{
        background: #fff;
        color: #000;
    }

	 .shadow1 input[type="submit"]{
        width: 165px;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 0 1.5px;
        border: none;
        border-radius: 3px;
        padding: 0px;
        font-size: 17px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #2196f3;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
    }
    .OIO{
    }
    a{
       text-decoration: none;
       color: #fff;
    }
    input[type="submit"]:hover{
        background: #0984e3;
        transition: 0.4s;
    }
    .LoGo{
    	font-family: 'Lato', sans-serif;
        font-size: 95px;
        color: #fff;
        margin: 30px 0 0 10%;
    }


     /*CSS-->PHP*/


    .PLP{
        float: right;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        border: none;
        border-radius: 3px;
        padding: 10px;
        font-size: 15px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: red;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        margin: 10px;
    }
    .PLP1{
        float: right;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        border: none;
        border-radius: 3px;
        padding: 10px;
        font-size: 15px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #27ae60;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        margin: 10px;
    }


















    .alert{
        background: #ffdb9b;
        background: #ff7675;
        padding: 20px 40px;
        min-width: 420px;
        position: absolute;
        right: 0px;
        top: 10px;
        overflow: hidden;
        border-radius: 4px 4px 4px 4px;
        border-left: 8px solid #ffa502;
        border-left: 8px solid red;
        opacity: 0;
        pointer-events: none;
    }
    .alert.showAlert{
        opacity: 1;
        pointer-events: auto;
    }
    .alert.show{
        animation: show_slide 1s ease forwards;
    }
    @keyframes show_slide{
        0%{
            transform: translateX(100%);
        }
        40%{
            transform: translateX(-10%);
        }
        80%{
            transform: translateX(0%);
        }
        100%{
            transform: translateX(-10px);
        }
    }
    .alert.hide{
        animation: hide_slide 1s ease forwards;
    }
    @keyframes hide_slide{
        0%{
            transform: translateX(-10px);
        }
        40%{
            transform: translateX(0%);
        }
        80%{
            transform: translateX(-10%);
        }
        100%{
            transform: translateX(100%);
        }
    }
    .alert .fa-exclamation-circle{
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #ce8500;
        color: #fff;
        font-size: 30px;
    }
    .alert .msg_10{
        padding: 0 20px;
        font-size: 18px;
        color: #ce8500;
        color: #fff;
        font-family: 'Roboto', sans-serif;
    }
    .alert .close-btn{
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        background: #ffd080;
        background: #e74c3c;
        padding: 20px 18px;
        cursor: pointer;
    }
    .close-btn .fa-times{
        color: #ce8500;
        color: #fff;
        font-size: 22px;
        line-height: 40px;
    }
    .close-btn:hover .fa-times{
        
    }
    .close-btn:hover{
        background: #ffc766;
        background: #c0392b;
    }

                                   /*  -->TST<--  */
    .TST-D1{
        width: 100%;
        height: 100%;
        background-color: rgba(20, 40, 34, 0.7);
        /*opacity: 0.7;*/
        position: fixed;
        top: 0;
        left: 0;
        justify-content: center;
        align-items: center;
        z-index: 2;
        display: none;
    }
    .TST-D2{
       width: 600px;
       height: 350px;
       background-color: #f1f2f6;
       border-radius: 4px;
       position: relative;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-50%);
    }
    .TST-D3{
        padding: 20px 30px;
        text-align: center;
        font-family: 'Manrope', sans-serif;
    }
    .TST-D3 .TST-P1{
        font-size: 22px;
    }
    .TST-D3 .TST-P2{
        font-size: 17px;
        background: red;
        background: #009432;
        color: #fff;
        width: 519px;
        height: 30px;
        padding: 5px;
        border-radius: 10px;
        position: relative;
        margin: 10px 0 -10px 0;
    }
    .TST-D3 .TST-P2:hover{
        
    }
    .TST-D3 .TST-P2 .TST-S2{
        width: 519px;
        text-align: center;
        position: absolute;
        z-index: 1;
        margin: 0;
        left: 0%;
        top: 0;
    }
    .TST-D3 .TST-P2 .TST-S1{
        position: absolute;
        color: #fff;
        padding: 4px;
        font-size: 15px;
        margin: 0 -264.7px;
        /*cursor: pointer;*/
        background: #0652DD;
        height: 100%;
        width: 20%;
        border-radius: 10px 0 0 10px;
        top: 0;
        transition: 0.4s;
        z-index: 2;
    }
    .TST-D3 .TST-P2 .TST-S1 button{
         background: none;
         border: none;
         font-size: 15px;
         color: #fff;
         font-family: 'Manrope', sans-serif;
         transition: 0.4s;
    }
    .TST-D3 .TST-P2 .TST-S1 input{
        left: 0;
        top: 0;
        border: 0px solid #0652DD;
        font-size: 16px;
        outline: none;
        color: #37d7fb;
        color: #000;
        font-family: 'Poppins' ,sans-serif;
        padding: 0;
        width: 0;
        height: 0;
        transition: 0.4s;
    }
    /*.TST-D3 .TST-P2 .TST-S1:hover button{
         background: red;
         background: #009432;
         border: none;
         font-size: 15px;
         color: #fff;
         font-family: 'Manrope', sans-serif;
         height: 135%;
         padding: 0 5px;
         margin: -4px;
         border-radius: 0 10px 10px 0;
         outline: none;
         cursor: pointer;
         transition: 0.6s;
    }
    .TST-D3 .TST-P2 .TST-S1:hover{
        font-size: 15px;
        width: 101%;
        font-family: '';
        border-radius: 10px;
        transition: 0.6s;
    }
    .TST-D3 .TST-P2 .TST-S1:hover input{
        position: relative;
        margin: -4px 58.4px 0 134px;
        width: 225.6px;
        padding: 6.5px 14px;
        height: 30px;
        transition: 0.6s;
    }*/




    input::-webkit-inner-spin-button,
    input::-webkit-inner-spin-button{
        -webkit-appearance:none;
    }
    input[type="number"]{
        -moz-appearance:textfield;
    }





    .inputBox{
            position: relative;
            width: 300px;
            height: 60px;
            margin: 80px 125px;
        }
        .inputBox input#password{
            position: absolute;
            color: #48DBFB;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            background: transparent;
            padding: 0 20px 0;
            font-size: 18px;
            font-size: 32px;
            box-sizing: border-box;
            outline: none;
            border-radius: 8px;
            text-align: center;
            box-shadow: -4px -4px 10px rgba(255,255,255,1), inset 4px 4px 10px rgba(0,0,0,0.05), inset -4px -4px 10px rgba(255,255,255,1), 4px 4px 10px rgba(0,0,0,0.05)
        }
        .inputBox input#password::placeholder{
            color: #ccc;
            font-size: 31.1px;
        }
        .TST-I1{
            /*position: absolute;
            width: 200px;
            background: red;*/
            margin: -40px 0px;
        }
        .TST-I1 input{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 20px auto 0 auto;
        width: 35%;
        border: none;
        border-radius: 3px;
        padding: 10px 0;
        font-size: 17px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #009432;
        background: #1dd1a1;
        transition: 0.6s;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        }
        .TST-I1 input:hover{
            background: #10ac84;
            background: #10ac84;
            border-radius: 3px;
            transition: 0.6s;
        }
        .I1-N{
            margin: 0;
        }
        .I1-N input{
            background: #6ab04c;
        }
        .I1-N input:hover{
            background: #009432;
        }
        .TST-X{
            position: absolute;
            top: 0px;
            right: 0px;
            cursor: pointer;
            font-size: 18px;
            z-index: 1;
            background: #1dd1a1;
            width: 35px;
            height: 25px;
            border-radius: 10px 0 0 1000px;
            padding: 0;
            color: #10ac84;
        }
        .TST-X i{
            position: relative;
            top: 1px;
            padding: 0 12px;
        }
        .TST-X:hover{
            color: #fff;
            background: red;
        }




































.btn_grp .btn.btn_info,
.alert_item.alert_info{
    background: #cde8f5;
    color: #4480ae;
}
.btn_grp .btn.btn_error,
.alert_item.alert_error{
    background: #ecc8c5;
    color: #b32f2d;
}




.alert_backdrop{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #2d333f;
    opacity: 0.9;
    z-index: 2;
    display: none;
}

.alert_wrapper .alert_item{
    z-index: 3; 
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    align-items: center;
    padding: 25px 50px;
    border-radius: 3px;
    transition: all 0.2s ease;
}
.alert_wrapper.active .alert_item{
    top: 10%;
}
.alert_wrapper.active .alert_item{
    animation: msg 0.4s ease forwards;
}
@keyframes msg{
        0%{
            /*transform: translateY(100%);*/
            top: -100%;
        }
        40%{
            /*transform: translateY(-10%);*/
        }
        80%{
            /*transform: translateY(0%);*/
        }
        100%{
            /*transform: translateY(-10px);*/
            top: 50%;
        }
    }

.alert_wrapper .alert_item .data{
    margin: 0 50px;
}
.alert_wrapper .alert_item .data .title{
    font-size: 15px;
    margin-bottom: 5px;
}
.alert_wrapper .alert_item .data .sub{
    font-size: 14px;
    font-weight: 100;
}
.alert_wrapper .alert_item .icon{
    font-size: 32px;
}

.alert_wrapper.active{
    visibility: visible;
}
.alert_wrapper.active .alert_item{
    top: 50%;
}
.sub input{
    border: 0px;
    background: #cde8f5;
    color: #4480ae;
    outline: none;
    padding: 0;
    width: 100%;
}
.close input{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 0px auto 0 auto;
        border: none;
        outline: none;
        border-radius: 3px;
        padding: 10px 5px;
        font-size: 15px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #e17055;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        cursor: pointer;
        right: 0;
}
.close input:hover{
    background: red;
    border-radius: 4px;
}
.icon.close input:hover{
    background: #2e86de;
}
.icon.close input{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 0px auto 0 auto;
        border: none;
        outline: none;
        border-radius: 3px;
        padding: 10px 20px;
        font-size: 17px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #2196f3;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        cursor: pointer;
}
.alert_item.alert_error{
    display: none;
}
.X:hover{
    background: #009432;
}
button img{
    width: 26px;
}
.i3:hover .G-G{
    color: #0652DD;
}
.i3:hover .G-o{
    color: red;
}
.i3:hover .G-oo{
    color: #F79F1F;
}
.i3:hover .G-l{
    color: #009432;
}
.i3:hover{
    background: #dfe4ea;
}
.i2:hover{
    background: #0652DD;
}
.zz{
    z-index: 10;
}
.iii{
  position: absolute;
  z-index: 1;
}
.ii2{
    padding: 7px 0px;
}
div.input1{
    background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
    cursor: pointer;
}
div.input1:hover{
    background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
}
.arror_email{
    position: absolute;
    left: 15%;
    top: 30%;
    color: #fff;
    padding: 5px 10px;
    border-radius: 50px;
    font-size: 20px;
    font-family: 'Manrope', sans-serif;
    font-family: 'Roboto', sans-serif;
}
.TST-D3-N{
    width: 100%;
    height: 100%;
}
.TST-img-N{
    text-align: center;
    position: relative;
    width: 170px;
    top: 0px;
    margin: 0px 220px 0 auto;
}
.TST-img-N img{
    width: 100%;
}
.TST-D4-N{
    text-align: center;
    color: #009432;
}
.TST-D4-N h2{

}
.TST-D4-N p{
    font-size: 22px;
}
.P1-S{
        float: left;
        width: 248px;
        height: 40px;
        margin: 15px 2px;
        font-size: 16px;
        outline: none;
        color: #000;
        background: #fff;
}
.P1-S #password1{
        margin: 0;
        width: 100%;
        height: 100%;
}

 i.fa-eye{
   position: absolute;
   font-size: 23px;
   color: #48DBFB;
   cursor: pointer;
   margin: 8px 0 10px 32.3vh;
   display: none;
}
.P1-S #password1:valid ~ i.fa-eye{
   display: block;
}
 i.fa-eye.TQL:before{
        content: '\f070';
}
#oAQ{
    position: absolute;
    font-size: 25px;
    left: -25.5px;
    color: #f1f2f6;
    cursor: auto;
}






.MO-TOT{
  margin: 0 auto; 
  width: 330px;
  /* heig   ht: 100%; */
  background: #fff;
  text-align: center;
  padding: 21px 35px 10px 22px;
  font-family: 'Poppins', sans-serif;
  outline: none;
  display: none;
  margin: 85px auto;
  /*background: url("bg.png"), -webkit-linear-gradient(bottom, #0250c5, #d43f8d);*/
}
.MO-TOT header{
  font-size: 45px;
  font-weight: 600;
  margin: 0 0 0px 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
header::after{
    content: "";
    width: 10%;
    color: red;
}
.MO-MR{
    margin: 0 auto;
    outline: none;
    background: red;
    width: 330px;
    font-family: 'Poppins', sans-serif;
    user-select: none;
}
.MO-MR div{
    float: left;
    font-family: 'Poppins', sans-serif;
    outline: none;
}
.MO-MR div .MO-NM{
    padding: 0px 7px;
    border: 2px solid #000;
    border-radius: 1000px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    outline: none;
    font-size: 18px;
}
.MO-AK{
    font-family: 'Poppins', sans-serif;
    outline: none;
    font-weight: 500;
    font-size: 18px;
    width: 370px;
    margin: 40px 0px 9px -30px;
    user-select: none;
}
.MO-AK span{
    margin: 0px 10px;
}
.MO-MR div .MO-ff{
    margin: 12px 5px;
    background: #000;
    width: 50px;
    height: 3px;
    font-family: 'Poppins', sans-serif;
    outline: none;
}
.MO-FORM{
    margin: 80px;
    font-family: 'Poppins', sans-serif;
    outline: none;
}
.MO-IP{
    text-align: left;
    margin: 30px -22px;
    width: 330px;
    background: #fff;
    padding: 0 3px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}
.MO-IP input{
    height: 45px;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 5px;
    padding-left: 15px;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    transition: .5s;
}
.MO-IP input:focus{
        box-shadow:  0 0 5px #2980b9,
                     0 0 15px #82e6fc,
                     0 0 25px #ffffff;
        border: 1px solid #82e6fc;  
    }
.MO-IP p{
    font-family: 'Poppins', sans-serif;
    text-align: left;
    margin: 15px 0 5px;
}
.MO-NNN{
    text-align: left;
    margin: 0 -22px;
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    font-weight: 500;
}
.MO-IP button{
  /*margin-top: -20px!important;*/
  width: 100%;
  /*height: calc(100% + 5px);*/
  height: 50px;
  border: none;
  margin: 80px 0;
  background: #2980b9;
  /*margin-top: -20px;*/
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
.neen{
    width: 60% !important;
    background: rgb(95,9,121) !important;
    background: linear-gradient(
90deg
, rgb(3 2 56 / 76%) 0%, rgb(13 11 43) 0%, rgb(152 26 26) 103%)  !important;
    /* position: relative; */
    border-radius: 45px !important;
    margin-right:90px !important;
    transition:background .4s !important;
}

.neen:hover{
    background: linear-gradient(90deg, rgba(125,26,26,1) 0%, rgba(13,11,43) 100%) !important;
    /* transition: .4s; */
}
.MO-IP button:hover{
   
}
.MO-GF{
    margin: 5px -22px;
    /* width: 330px; */
    text-align: center;
    display: block;
    font-family: 'Poppins', sans-serif;
}
.MO-QSQ{
  width: 162px;
  height: 50px;
  border: none;
  background: #2980b9;
  /*margin-top: -20px;*/
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
  padding: 3px 10px;
}
.MO-F{
  background: #0652DD;
  padding: 3px 10px;
}
.MO-G{
  background: #222f3e;
}
.MO-QSQ img{
  width: 35px;
  margin: -10px 0;
}
.MO-hr{
    margin: 10px;
    background: #999;
    opacity: 0.7;
}

/*@media (max-width: 980px)
  {*/
    .MO-TOT{
       display: block;
    }
    .mbdm{
       display: none;
    }
    html, body{
            background: none;
        }
/*  }*/
.MO-IP .MO-NS{
    width: 60%;
    margin: 10px auto !important;
    display: block;
    /* background: rgb(95,9,121); */
    background: linear-gradient(
90deg
, rgb(3 2 56 / 76%) 0%, rgb(13 11 43) 0%, rgb(152 26 26) 103%)  !important;
    border-radius: 45px;
}

.MO-IP{
    margin: auto !important;
    width: 60%;
    transition: .5s;
}
.MO-NS-N{
    /* position: absolute; */
    width: 160px;
    /*margin-top: -20px!important;*/
    /*height: calc(100% + 5px);*/
    height: 50px;
    border: none;
    display: inline-block;
    /* margin: -75px -155px; */
    background: #2980b9;
    /*margin-top: -20px;*/
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.5s ;
    width: 60%;
    /* background: rgb(95,9,121); */
    background: linear-gradient(
90deg
, rgb(3 2 56 / 76%) 0%, rgb(13 11 43) 0%, rgb(152 26 26) 103%)  !important;
border-radius: 45px;

}

.MO-AK .MO_C2{
    margin: 0 25px 0 5px;
}
.MO-AK .MO_T3{
    margin: 0 40px 0 5px;
}
.MO-AK .MO_P4{
    margin: 0px 10px 0 -10px;
}
.MO-AK .MO_N1{
    margin: 0 10px 0 5px;
}
.MO-Arror{
    position: absolute;
    background: red;
    width: 100%;
    text-align: center;
    height: 24px;
}
.MO-AROO{
    color: #fff;
    margin: 0;
}
.MO-Arror{
        animation: MO_Arror 0.6s ease forwards;
    }
    @keyframes MO_Arror{
        0%{
            height: 0px;
        }

        100%{
            height: 24px;
        }
    }
#MO_PAS{
    position: absolute;
    font-size: 28px;
    color: #48DBFB;
    cursor: pointer;
    margin: -35px 270px;
    display: none;
}
#MO_password{
    padding-right: 55px;
    padding-left: 15px;
}
 input#MO_password:valid ~ #MO_PAS{
   display: block;
}
 i.TQL:before{
        content: '\f070';
}
.MO-IP .MO_RGO3{
    position: absolute;
    top: 0;
    left: 10px;
  /*margin-top: -20px!important;*/
  width: auto;
  /*height: calc(100% + 5px);*/
  height: auto;
  border: none;
  margin: 0;
  padding: 20px 10px;
  background: none;
  /*margin-top: -20px;*/
  border-radius: 500px;
  color: #777;
  cursor: pointer;
  font-size: 35px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
  outline: none;
}
.MO-IP .MO_RGO3:hover{
    background: none;
    color: #000;
    transition: 0.5s ease;
}
      .MO_inputBox{
            position: relative;
            width: 100%;
            height: 60px;
            margin: 80px 0px 40px;
        }
        .MO_inputBox input#MO_password1{
            font-family: 'Poppins', sans-serif;
            position: absolute;
            color: #48DBFB;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            background: transparent;
            padding: 0 20px 0;
            font-size: 18px;
            font-size: 32px;
            box-sizing: border-box;
            outline: none;
            border-radius: 8px;
            text-align: center;
            box-shadow: -4px -4px 10px rgba(255,255,255,1), inset 4px 4px 10px rgba(0,0,0,0.05), inset -4px -4px 10px rgba(255,255,255,1), 4px 4px 10px rgba(0,0,0,0.05)
        }
        .MO_inputBox input#MO_password1::placeholder{
            color: #ccc;
            font-size: 27px;
        }
        .MO_TST-I1 input{
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
        display: block;
        margin: 20px auto 0 auto;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 0;
        font-size: 17px;
        color: #fff;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
        font-weight: 700;
        background: #009432;
        background: #1dd1a1;
        transition: 0.6s;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
        }
        .MO_TST-I1 input:hover{
            background: #10ac84;
            background: #10ac84;
            border-radius: 3px;
            transition: 0.6s;
        }
        #MO_TER{
            font-family: 'Lato', sans-serif;
            position: absolute;
            top: 10px;
            left: 15px;
            color: #009432;
            border: none;
            background: none;
            border-bottom: 4px double #009432;
            outline: none;
        }
        #MO_DFGD{
            overflow: hidden;
        }
        .MO-TOT .MO_TST-img-N img{
            width: 100%;
        }
        .MO_TST-D4-N{
            color: #009432;
            width: 330px;
            margin: 0 -20px;
        }
        .MO_TST-D4-N h2{
            font-size: 25px;
        }
        .MO_TST-D4-N p{
            font-size: 20px;
        }
        .MO_TST-I2 input{
            background: #009432;
        }
.M_MO_RGO3{
    position: absolute;
    top: 0;
    left: 10px;
  /*margin-top: -20px!important;*/
  width: auto;
  /*height: calc(100% + 5px);*/
  height: auto;
  border: none;
  margin: 0;
  padding: 20px 10px;
  background: none;
  /*margin-top: -20px;*/
  border-radius: 500px;
  color: #777;
  cursor: pointer;
  font-size: 35px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
  outline: none;
}
 .M_MO_RGO3:hover{
    background: none;
    color: #000;
    transition: 0.5s ease;
}
.ARed{
  background: red;
  color: #fff;
  padding: 3px;
  border-radius: 20px;
  font-size: 12px;
  display: none;
}


.IID{
    
    display: inline-block !important;
    width: 45% !important;
    text-align: right !important;
    border-bottom: solid 2px rgb(216, 216, 216);
}

.IID input{
    background: none;
    border: none;
    height: 30px;
  width: 100%;
    background: url();
    outline: none;
    text-align: right;
    transition: 0.4s;
}

.IID input:focus{
    border: none;
    outline: none;
    box-shadow: none;
}

.IID p{
text-align: right;
font-family: 'Cairo', sans-serif !important;

}

.logo{
    margin: 40px auto !important;
    height: 150px !important;
    width: 14   0px !important;
    border: 1px solid black !important;
    transition: 1s;
    border-radius: 15px;
}


.logo:hover{
    transform: scale(1.5) ;
/* transform: rotate(360deg) !important; */
}
    </style>
</head>
<body>
    <?php
require 'LOD0000NG.php';
if (isset($_POST['signup'])) {
//         BIENAT
 $name = $_POST['name'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $password = $_POST['password'];
 $re_password = $_POST['re_password'];
 //$country = $_POST['country'];
 $city = $_POST['city'];
 $region = $_POST['region'];

 $R_name = $_POST['name'];
 $R_email = $_POST['email'];
 $R_number = $_POST['number'];
 $R_password = $_POST['password'];
 $R_re_password = $_POST['re_password'];
 //$R_country = $_POST['country'];
 $R_city = $_POST['city'];
 $R_region = $_POST['region'];
 /*if (strlen($password) >= 8) {
     echo "1111111111111111";
 }else{
    echo "22222222222222222";
 }
 for ($m=0; $m <= 37; $m++) {
    if ($m == 0){$q = "!";}if ($m == 1){$q = "@";}if ($m == 2){$q = "#";}if ($m == 3){$q = "$";}if ($m == 4){$q = "%";}if ($m == 5){$q = "^";}if ($m == 6){$q = "&";}if ($m == 7){$q = "*";}
    if ($m == 8){$q = ;}if ($m == 9){$q = ;}if ($m == 10){$q = ;}if ($m == 11){$q = ;}if ($m == 12){$q =;}if ($m == 13){$q = ;}if ($m == 14){$q = ;}if ($m == 15){$q = ;}if ($m == 16){$q = ;}if ($m == 17){$q = ;}if ($m == 18){$q = ;}if ($m == 19){$q = ;}if ($m == 20){$q = ;}if ($m == 21){$q = ;}if ($m == 22){$q = ;}if ($m == 23){$q = ;}if ($m == 24){$q = ;}if ($m == 25){$q = ;}if ($m == 26){$q = ;}if ($m == 27){$q = ;}if ($m == 28){$q = ;}if ($m == 29){$q = ;}if ($m == 30){$q = ;}if ($m == 31){$q = ;}if ($m == 32){$q = ;}if ($m == 33){$q = ;}if ($m == 34){$q = ;}if ($m == 35){$q = ;}if ($m == 36){$q = ;}if ($m == 37){$q = ;}
   $klma = count(explode($q, $name)) - 1;
   //echo "- ".$q.'='.$klma." -";
 }*/
 $klma1 = count(explode("!", $name)) - 1 + count(explode("@", $name)) - 1 + count(explode("#", $name)) - 1 + count(explode("$", $name)) - 1 + count(explode("%", $name)) - 1 + count(explode("^", $name)) - 1 + count(explode("&", $name)) - 1 + count(explode("*", $name)) - 1 + count(explode("/", $name)) - 1 + count(explode("?", $name)) - 1 + count(explode("<", $name)) - 1 + count(explode(">", $name)) - 1 + count(explode("'", $name)) - 1 + count(explode( ":", $name)) - 1 + count(explode(".", $name)) - 1 + count(explode(";", $name)) - 1 + count(explode("}", $name)) - 1 + count(explode("[", $name)) - 1 + count(explode("]", $name)) - 1 + count(explode("(", $name)) - 1 + count(explode("‘", $name)) - 1 + count(explode("ً", $name)) - 1 + count(explode("؛", $name)) - 1 + count(explode("ـ", $name)) - 1 + count(explode("ٍ", $name)) - 1 + count(explode("َ", $name)) - 1 + count(explode("ُ", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("~", $name)) - 1 + count(explode("’", $name)) - 1 + count(explode("÷", $name)) - 1 + count(explode("+", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("ِ", $name)) - 1 + count(explode("|", $name)) - 1 + count(explode("{", $name)) - 1 + count(explode(",", $name)) - 1 + count(explode('"', $name)) - 1 + count(explode(")", $name)) - 1 + count(explode("1", $name)) - 1 + count(explode("2", $name)) - 1 + count(explode("3", $name)) - 1 + count(explode("4", $name)) - 1 + count(explode("5", $name)) - 1 + count(explode("6", $name)) - 1 + count(explode("7", $name)) - 1 + count(explode("8", $name)) - 1 + count(explode("9", $name)) - 1 + count(explode("0", $name)) - 1;
 $count = str_word_count($name);
 $nnuu = count(explode("0", $number)) - 1 + count(explode("٠", $number)) - 1;
if ($count >= 2 and strlen($name) >= 7 and $klma1 == 0) {

 $qu = "SELECT * FROM Provinces WHERE P_Iraq = '$city'";
 $nu = "SELECT * FROM paso WHERE email = '$email'";
 if (mysqli_num_rows(mysqli_query($con, $qu)) > 0) {
  if (mysqli_num_rows(mysqli_query($con, $nu)) > 0) {
      //echo "الاميل الذي ادخلتها مستخدم بلفعل ";
      $errEmail = "border: solid #ff7675 1px;background: #fab1a0;";
      $errEmail2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
      $msg_10 = 'Sorry, the email you entered is already used!';
      $hide = 'showAlert show';
      $alert = '.alert';
  }else{
    if (strlen($number) <= 7) {
        $errN = "border: solid #ff7675 1px;background: #fab1a0;";
        $errN2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
        $msg_10 = 'Sorry, the phone number you entered is not valid!';
        $hide = 'showAlert show';
        $alert = '.alert';
        //echo "<div class='PLP'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Sorry, the phone number you entered is not valid</div>";
    }else{
        //echo $nnuu;
        if (strlen($password) >= 8) {
            if ($password === $re_password) {
                   if (!is_numeric($region)) {
                        $R_name = '';
                        $R_email = '';
                        $R_number = '';
                        $R_password = '';
                        $R_re_password = '';
                        $R_country = '';
                        $R_city = '';
                        $R_region = '';
                        echo "<style type=\"text/css\">
                                  .alert_backdrop{
                                     display: flex;
                                 }
                            </style>";
                        $TnT = 'active';$top = '50%;';
                        $E_mail = $email;
                        $_SESSION['name'] = $name;
                        $_SESSION['number'] = $number;
                        $_SESSION['password'] = $password;
                        //$_SESSION['country'] = $country;
                        $_SESSION['city'] = $city;
                        $_SESSION['region'] = $region;
                }else{
                    $errM2 = "border: double #ff7675 1px;background: #fab1a0;";
                    $errM22 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
                    $msg_10 = 'Sorry, there is no region with this name!';
                    $hide = 'showAlert show';
                    $alert = '.alert';
                }
        }else{
            $errP = "border: double #ff7675 1px;background: #fab1a0;";
            $errP2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
            $msg_10 = 'Sorry, the password you entered is not equal!';
            $hide = 'showAlert show';
            $alert = '.alert';
            $Ired = 'color: red;';
            //echo "<div class='PLP'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Sorry, the password you entered is not equal</div>";
        }
    }else{
    $errP = "border: double #ff7675 1px;background: #fab1a0;";
    $errP2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
    $msg_10 = 'Sorry, the password you entered is too short!';
    $hide = 'showAlert show';
    $alert = '.alert';
    $Ired = 'color: red;';
    //echo "<div class='PLP'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Sorry, the password you entered is too short</div>";
          }
}

        }

}else{
    $errM1 = "border: double #ff7675 1px;background: #fab1a0;";
    $errM12 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
    $msg_10 = 'Sorry, there is no city with this name!';
    $hide = 'showAlert show';
    $alert = '.alert';
}
}else{
    $errNeem = "border: double #ff7675 1.5px;background: #fab1a0;";
    $errNeem2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 1.5px solid red;";
    $msg_10 = 'Sorry, please enter your full real name!';
    $hide = 'showAlert show';
    $alert = '.alert';
}
}
$ArROrEMAIL = 'none;';
 ?>
 
<!--<h1><img src="i/a2.png" class="img-a"><div class="LOOG"><h2>FOREVER</h2><h6>MARYAM AND IDRAHIM</h6></div></h1>

                    <p class="Sign_Up">Sign Up</p>-->
<!--<div class="LoGo"><a href="inde.php"></a><br></div>-->

























<!-- MOBAEL -->
<?php
$MO_R_Name1 = null;
$MO_R_Name2 = null;
$MO_R_CON1 = null;
$MO_R_CON2 = null;
$MO_R_TIT1 = null;
$MO_R_TIT2 = null;
$MO_R_password = null;
$MO_R_re_password = null;
$MO_errM11 = null;
$MO_errM121 = null;
$MO_errM12 = null;
$MO_errM122 = null;
$MO_E_mail_Tk = null;
$MO_VAR = null;
$MO_VAR_B = null;
$MO_EM_TKE = 'none';
$MO_PX = '9';
$MO_NM_PX = '0 3px';
$MO_PX1 = '3';
//$MO_MABROK = false;
$MO_TKED_Email = 'none';
if (isset($_POST['MO_NEM'])) {
   $MO_R_Name1 = $_SESSION['MO_R_name1'];
   $MO_R_Name2 = $_SESSION['MO_R_name2'];
   $_SESSION['name'] = null;
   $_SESSION['MO_R_name1'] = null;
   $_SESSION['MO_R_name2'] = null;
}
if (isset($_POST['MO_CON'])) {
   $MO_R_CON1 = $_SESSION['email'];
   $MO_R_CON2 = $_SESSION['number'];
   $_SESSION['email'] = null;
   $_SESSION['number'] = null;
}
if (isset($_POST['MO_TIT'])) {
   $MO_R_TIT1 = $_SESSION['city'];
   $MO_R_TIT2 = $_SESSION['region'];
   $_SESSION['city'] = null;
   $_SESSION['region'] = null;
}
if (isset($_POST['MO_RG_PAS'])) {
    $MO_R_password = $_SESSION['password'];
    $MO_R_re_password = $_SESSION['password'];
    $_SESSION['password'] = null;
}
if (isset($_POST['MO_TER'])) {
    $MO_E_mail_Tk = $_SESSION['TA_email'];
    $_SESSION['TA_email'] = null;
}
if (isset($_POST['MO_D5OL'])) {
    unset($_SESSION['MO_R_name1']);
    unset($_SESSION['MO_R_name2']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['number']);
    unset($_SESSION['city']);
    unset($_SESSION['region']);
    unset($_SESSION['password']);
    unset($_SESSION['TA_email']);
    unset($_SESSION['MO_TAT']);
    unset($_SESSION['MO_MABROK']);
}


$MO_msg_11 = null;
$MO_NON = 'none';
if (isset($_POST['MO_NEXT'])) {
    $name = $_POST['MO_name'].' '.$_POST['MO_nameN'];
    
    
    $MO_klma1 = count(explode("!", $name)) - 1 + count(explode("@", $name)) - 1 + count(explode("#", $name)) - 1 + count(explode("$", $name)) - 1 + count(explode("%", $name)) - 1 + count(explode("^", $name)) - 1 + count(explode("&", $name)) - 1 + count(explode("*", $name)) - 1 + count(explode("/", $name)) - 1 + count(explode("?", $name)) - 1 + count(explode("<", $name)) - 1 + count(explode(">", $name)) - 1 + count(explode("'", $name)) - 1 + count(explode( ":", $name)) - 1 + count(explode(".", $name)) - 1 + count(explode(";", $name)) - 1 + count(explode("}", $name)) - 1 + count(explode("[", $name)) - 1 + count(explode("]", $name)) - 1 + count(explode("(", $name)) - 1 + count(explode("‘", $name)) - 1 + count(explode("ً", $name)) - 1 + count(explode("؛", $name)) - 1 + count(explode("ـ", $name)) - 1 + count(explode("ٍ", $name)) - 1 + count(explode("َ", $name)) - 1 + count(explode("ُ", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("~", $name)) - 1 + count(explode("’", $name)) - 1 + count(explode("÷", $name)) - 1 + count(explode("+", $name)) - 1 + count(explode("=", $name)) - 1 + count(explode("ِ", $name)) - 1 + count(explode("|", $name)) - 1 + count(explode("{", $name)) - 1 + count(explode(",", $name)) - 1 + count(explode('"', $name)) - 1 + count(explode(")", $name)) - 1 + count(explode("1", $name)) - 1 + count(explode("2", $name)) - 1 + count(explode("3", $name)) - 1 + count(explode("4", $name)) - 1 + count(explode("5", $name)) - 1 + count(explode("6", $name)) - 1 + count(explode("7", $name)) - 1 + count(explode("8", $name)) - 1 + count(explode("9", $name)) - 1 + count(explode("0", $name)) - 1;

    if (str_word_count($name) >= 2 and strlen($name) >= 7 and $MO_klma1 == 0) {
        $_SESSION['name'] = $name;
        $_SESSION['MO_R_name1'] = $_POST['MO_name'];
        $_SESSION['MO_R_name2'] = $_POST['MO_nameN'];
    }
    else{
        $MO_msg_11 = 'Sorry, please enter your full real name!';
        $MO_NON = 'block';
        $MO_NON_CRO = '#ffbe76';
        $MO_R_Name1 = $_POST['MO_name'];
        $MO_R_Name2 = $_POST['MO_nameN'];
    }
}




if (isset($_POST['MO_CNKT'])) {
    $MO_email = $_POST['MO_email'];
    $MO_number = $_POST['MO_number'];
    # paso users
    $MO_nu = "SELECT * FROM paso WHERE email = '$MO_email'";
    if (mysqli_num_rows(mysqli_query($con, $MO_nu)) > 0) {
        $MO_msg_11 = 'Sorry, the email you entered is already used!';
        $MO_NON = 'block';
        $MO_errE = "border: solid #ff7675 2px;";
        $MO_errE2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;";
        $MO_R_CON1 = $MO_email;
        $MO_R_CON2 = $MO_number;
    }
    else{
        if (strlen($MO_number) != 10) {
            $MO_msg_11 = 'Sorry, the phone number you entered is not valid!';
            $MO_NON = 'block';
            $MO_errN = "border: solid #ff7675 2px;";
            $MO_errN2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;";
            $MO_R_CON1 = $MO_email;
            $MO_R_CON2 = $MO_number;
        }
        else{
            $_SESSION['number'] = $MO_number;
            $_SESSION['email'] = $MO_email;
        }
    }
    
}

if (isset($_POST['MO_Address'])) {
   $MO_City = $_POST['MO_City'];
   $MO_Area = $_POST['MO_Area'];

   $MO_qu = "SELECT * FROM Provinces WHERE P_Iraq = '$MO_City'";
   if (mysqli_num_rows(mysqli_query($con, $MO_qu)) > 0) {
       if (!is_numeric($MO_Area)) {
          $_SESSION['city'] = $MO_City;
          $_SESSION['region'] = $MO_Area;
       }
       else{
        $MO_errM11 = "border: solid #ff7675 2px;";
        $MO_errM121 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;";
        $MO_msg_11 = 'Sorry, there is no region with this name!';
        $MO_NON = 'block';
        $MO_R_TIT1 = $_POST['MO_City'];
        $MO_R_TIT2 = $_POST['MO_Area'];
       }
   }
   else{
      $MO_errM12 = "border: solid #ff7675 2px;";
      $MO_errM122 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;";
      $MO_msg_11 = 'Sorry, there is no city with this name!';
      $MO_NON = 'block';
      $MO_R_TIT1 = $_POST['MO_City'];
      $MO_R_TIT2 = $_POST['MO_Area'];
   }
}
if (isset($_POST['MO_Pas'])) {
  $MO_password = $_POST['MO_password'];
  $MO_re_password = $_POST['MO_re_password'];
  if (strlen($MO_password) >= 8) {
      if ($MO_password === $MO_re_password) {
          $_SESSION['password'] = $MO_password;
      }
      else{
        $MO_msg_11 = 'Sorry, the password you entered is not equal!';
        $MO_NON = 'block';
        $MO_NON_CRO = '#ffbe76';
        $MO_R_password = $_POST['MO_password'];
        $MO_R_re_password = $_POST['MO_re_password'];    
      }
  }
  else{
    $MO_ArrorP = 'border: solid #ff7675 2px;';
    $MO_ArrorP2 = 'box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;';
    $MO_msg_11 = 'Sorry, the password you entered is too short!';
    $MO_NON = 'block';
    $MO_R_password = $_POST['MO_password'];
    $MO_R_re_password = $_POST['MO_re_password'];
  }
}

if (isset($_POST['MO_ARSL'])) {
    // users paso
   $MO_emailtl = $_POST['MO_E_mailtk'];
   $MO_TK = "SELECT * FROM paso WHERE email = '$MO_emailtl'";
    if (mysqli_num_rows(mysqli_query($con, $MO_TK)) > 0) {
        $MO_msg_11 = 'Sorry, the email you entered is already used!';
        $MO_NON = 'block';
        $MO_errE = "border: solid #ff7675 2px;";
        $MO_errE2 = "box-shadow:0 0 5px #d63031,0 0 10px #ff7675,0 0 25px #fff;border: 2.5px solid red;";
        $MO_E_mail_Tk = $MO_emailtl;
    }
    else{
     if (isset($_SESSION['password'])) {
        $_SESSION['TA_email'] = $MO_emailtl;
        $_SESSION['MO_TAT'] = rand(100000,999999);
        mail($_SESSION['TA_email'], 'Verification code. FOREVER MARYAM AND IBRAHIM', 'Your email code is: '.$_SESSION['MO_TAT'], 'MARYAM IBRAHIM FOREVER');
     }
     else{
        echo "يرجا ملاء جميع البينات لاستكمال هذه الخطوه";
     }
    }
}

if (isset($_POST['MO_T_EMAIL'])) {
   $MO_TKEQQ = $_POST['MO_aTa'];
    if ($MO_TKEQQ == $_SESSION['MO_TAT']) {
        $_SESSION['MO_MABROK'] = true;
    }
    else{
        $MO_msg_11 = 'The confirmation code you entered is not valid!';
        $MO_NON = 'block';
        echo $_SESSION['MO_TAT'];
    }
}
$MO_FORM1 = "<h2 class=\"MO-NNN\">الاسم بالكامل</h2>
        <div class=\"MO-IP\">
            <div class=\"IID\">
            <p>الاسم الثاني</p>
            <input required type=\"text\" name=\"MO_name\" value=\"$MO_R_Name1\">
            </div>
            <div class=\"IID\">
            <p>الاسم الاول</p>
            <input required type=\"text\" name=\"MO_nameN\" value=\"$MO_R_Name2\">
        </div>
            <button class=\"neen\" type=\"submit\" name=\"MO_NEXT\">NEXT</button>
        </div>";


$MO_FORM2 = "<h2 class=\"MO-NNN\">معلومات الاتصال</h2>
        <div class=\"MO-IP\">
            <div class=\"IID\">
            <p>البريد الالكتروني</p>
            <input required type=\"email\" name=\"MO_email\" id=\"MO_email\" value=\"$MO_R_CON1\">
        </div>
        <div class=\"IID\">
            <p>رقم الجوال</p>
            <input required type=\"number\" name=\"MO_number\" value=\"$MO_R_CON2\" maxlength=\"10\" minlength=\"10\">
        </div>
        <button type=\"submit\" name=\"MO_CNKT\" class=\"MO-NS\">NEXT</button>
        </div>";


$MO_FORM3 = "<h2 class=\"MO-NNN\">المستندات</h2>
        <div class=\"MO-IP\">
            <div class=\"IID\">
            <p>المدينه</p>
            <input required type=\"text\" name=\"MO_City\" list=\"oil\" id=\"MO_asd1\" value=\"$MO_R_TIT1\">
        </div>
        <div class=\"IID\">
            <p>الجنسيه</p>
            <input required type=\"text\" name=\"MO_Area\" id=\"MO_asd2\" value=\"$MO_R_TIT2\">
        </div>
            <button type=\"submit\" name=\"MO_Address\" class=\"MO-NS\">NEXT</button>
        </div>";


$MO_FORM4 = "<h2 class=\"MO-NNN\">كلمه المرور</h2>
        <div class=\"MO-IP\">
            <div class=\"IID\">
            <p>كلمه المرور</p>
            <input required type=\"password\" name=\"MO_password\" value=\"$MO_R_password\" id=\"MO_password\">
            <i class=\"fa fa-eye\" id=\"MO_PAS\" aria-hidden=\"true\" onclick=\"mo_showHide();\"></i>
        </div>
        <div class=\"IID\">
            <p>اعد كتابه كلمه المرور</p>
            <input required type=\"password\" name=\"MO_re_password\" value=\"$MO_R_re_password\" id=\"MO_re_password\">
        </div>
            <button type=\"submit\" name=\"MO_Pas\" class=\"MO-NS\">NEXT</button>
        </div>";

// T7LEL DATA
if (isset($_SESSION['name'])) {
    if (isset($_SESSION['number']) and isset($_SESSION['email'])) {
        if (isset($_SESSION['city']) and isset($_SESSION['region'])) {
            if (isset($_SESSION['password'])) {
                if (isset($_SESSION['TA_email']) and isset($_SESSION['MO_TAT'])) {
                    $MO_F_NHA = 'none';
                    $MO_TKED_Email = 'block';
                    //echo "تم ارسال رمز التحقق";
                    if (isset($_SESSION['MO_MABROK'])) {
                        $MO_TA_email = $_SESSION['TA_email'];
                        $MO_nu_ROK = "SELECT * FROM paso WHERE email = '$MO_TA_email'";
                        if (mysqli_num_rows(mysqli_query($con, $MO_nu_ROK)) > 0) {
                            //echo "بريد الاركتروني الذي ادخلتا مستخدم بلفعل";
                            unset($_SESSION['MO_R_name1']);
                            unset($_SESSION['MO_R_name2']);
                            unset($_SESSION['name']);
                            unset($_SESSION['email']);
                            unset($_SESSION['number']);
                            unset($_SESSION['city']);
                            unset($_SESSION['region']);
                            unset($_SESSION['password']);
                            unset($_SESSION['TA_email']);
                            unset($_SESSION['MO_TAT']);
                            unset($_SESSION['MO_MABROK']);
                        }
                        else{
                        //echo "تم انشاء حساب";
                        $MO_TKED_Email = 'none';
                        $MO_VAR_B = 'none';
                        $nameZ = $_SESSION['name'];

                  $MO_TA_email = $_SESSION['TA_email'];
                  $numberZ = $_SESSION['number'];
                  $passwordZ = $_SESSION['password'];
                  $cityZ = $_SESSION['city'];
                  $regionZ = $_SESSION['region'];

                  $stmt = $con->prepare("insert into paso (name, email, number, password, city, region)values('$nameZ','$MO_TA_email','$numberZ','$passwordZ','$cityZ','$regionZ')")or die(mysql_error());
                  $stmt->execute();
                        $MO_VAR = "
                                <div class=\"MO_TST-img-N\"><img src=\"i/T2.png\"></div>
                                     <div class=\"MO_TST-D4-N\">
                                         <h2>Account successfully created</h2>
                                         <p>You can log in now</p>
                                     </div>
                                     <div class=\"MO_TST-I1 MO_TST-I2\">
                                     <form method=\"post\">
                                       <input type=\"submit\" name=\"MO_D5OL\" value=\"Entry\">
                                    <form>
                                    </div>
                                
                        ";
                        }
                    }
                }
                else{
                    //echo "جميع البينات موجوده";
                    if ($MO_E_mail_Tk == '') {
                        $MO_E_mail_Tk = $_SESSION['email'];
                    }
                    $MO_TMC1 = '#82e6fc';
                    $MO_TMC2 = '#82e6fc';
                    $MO_TMC3 = '#82e6fc';
                    $MO_TMC4 = '#82e6fc';
                    $MO_PX = $MO_PX1;
                    $MO_NM_PX2 = $MO_NM_PX;
                    $MO_NM_PX3 = $MO_NM_PX;
                    $MO_NM_PX4 = $MO_NM_PX;

                    //s7
                    $S7a1 = '';
                    $S7a2 = '';
                    $S7a3 = '';
                    $S7a4 = '';
                    //rkm
                    $MO_nAna1 = 'MO_none';
                    $MO_nAna2 = 'MO_none';
                    $MO_nAna3 = 'MO_none';
                    $MO_nAna4 = 'MO_none';

                    // color
                    $MO_TMf1 = '#fff';
                    $MO_TMf2 = '#fff';
                    $MO_TMf3 = '#fff';
                    $MO_TMf4 = '#fff';
                    // background
                    $MO_TMr1 = '#82e6fc';
                    $MO_TMr2 = '#82e6fc';
                    $MO_TMr3 = '#82e6fc';
                    $MO_TMr4 = '#82e6fc';

                    $MO_TMr12 = 'solid #82e6fc';
                    $MO_TMr22 = 'solid #82e6fc';
                    $MO_TMr32 = 'solid #82e6fc';
                    $MO_TMr42 = 'solid #82e6fc';

                    $MO_F_NHA = 'none';
                    $MO_EM_TKE = 'block';
                }
            }
            else{
                $MO_FORM = $MO_FORM4;
                $MO_NS = "<button type=\"submit\" name=\"MO_TIT\" class=\"MO-NS-N\">PREVIOUS-T</button>";
                $MO_ff1 = '#82e6fc';
                $MO_ff2 = '#82e6fc';
                $MO_ff3 = '#82e6fc';

                $MO_TMC1 = '#82e6fc';
                $MO_TMC2 = '#82e6fc';
                $MO_TMC3 = '#82e6fc';
                $MO_TMC4 = '#000';

                $MO_PX = $MO_PX1;
                $MO_NM_PX2 = $MO_NM_PX;
                $MO_NM_PX3 = $MO_NM_PX;
                //s7
                $S7a1 = '';
                $S7a2 = '';
                $S7a3 = '';
                $S7a4 = 'none';
                //rkm
                $MO_nAna1 = 'MO_none';
                $MO_nAna2 = 'MO_none';
                $MO_nAna3 = 'MO_none';
                $MO_nAna4 = null;

                // color
                $MO_TMf1 = '#fff';
                $MO_TMf2 = '#fff';
                $MO_TMf3 = '#fff';
                $MO_TMf4 = '#82e6fc';
                // background
                $MO_TMr1 = '#82e6fc';
                $MO_TMr2 = '#82e6fc';
                $MO_TMr3 = '#82e6fc';
                $MO_TMr4 = '#fff';
                // border
                $MO_TMr12 = 'solid #82e6fc';
                $MO_TMr22 = 'solid #82e6fc';
                $MO_TMr32 = 'solid #82e6fc';
                $MO_TMr42 = 'dashed #82e6fc';
            }
        }
        else{
            $MO_FORM = $MO_FORM3;
            $MO_NS = "<button type=\"submit\" name=\"MO_CON\" class=\"MO-NS-N\">PREVIOUS-C</button>";
            $MO_ff1 = '#82e6fc';
            $MO_ff2 = '#82e6fc';
            $MO_ff3 = '#000';

    $MO_TMC1 = '#82e6fc';
    $MO_TMC2 = '#82e6fc';
    $MO_TMC3 = '#000';
    $MO_TMC4 = '#000';
    //s7
    $MO_PX = $MO_PX1;
    $MO_NM_PX2 = $MO_NM_PX;
    $S7a1 = '';
    $S7a2 = '';
    $S7a3 = 'none';
    $S7a4 = 'none';
    //rkm
    $MO_nAna1 = 'MO_none';
    $MO_nAna2 = 'MO_none';
    $MO_nAna3 = null;
    $MO_nAna4 = null;

    // color
    $MO_TMf1 = '#fff';
    $MO_TMf2 = '#fff';
    $MO_TMf3 = '#82e6fc';
    $MO_TMf4 = '#000';
    // background
    $MO_TMr1 = '#82e6fc';
    $MO_TMr2 = '#82e6fc';
    $MO_TMr3 = '#fff';
    $MO_TMr4 = '#fff';
    // border
    $MO_TMr12 = 'solid #82e6fc';
    $MO_TMr22 = 'solid #82e6fc';
    $MO_TMr32 = 'dashed #82e6fc';
    $MO_TMr42 = 'solid #000';
        }
    }
    else{
        $MO_FORM = $MO_FORM2;
        $MO_NS = "<button type=\"submit\" name=\"MO_NEM\" class=\"MO-NS-N\">PREVIOUS-N</button>";
        $MO_ff1 = '#82e6fc';
        $MO_ff2 = '#000';
        $MO_ff3 = '#000';
    

    $MO_TMC1 = '#82e6fc';
    $MO_TMC2 = '#000';
    $MO_TMC3 = '#000';
    $MO_TMC4 = '#000';
    //s7
    $MO_PX = $MO_PX1;
    $S7a1 = '';
    $S7a2 = 'none';
    $S7a3 = 'none';
    $S7a4 = 'none';
    //rkm
    $MO_nAna1 = 'MO_none';
    $MO_nAna2 = null;
    $MO_nAna3 = null;
    $MO_nAna4 = null;

    // color
    $MO_TMf1 = '#fff';
    $MO_TMf2 = '#82e6fc';
    $MO_TMf3 = '#000';
    $MO_TMf4 = '#000';
    // background
    $MO_TMr1 = '#82e6fc';
    $MO_TMr2 = '#fff';
    $MO_TMr3 = '#fff';
    $MO_TMr4 = '#fff';
    // border
    $MO_TMr12 = 'solid #82e6fc';
    $MO_TMr22 = 'dashed #82e6fc';
    $MO_TMr32 = 'solid #000';
    $MO_TMr42 = 'solid #000';
    }
}
else{
    $MO_FORM = $MO_FORM1;
    $MO_TMC1 = '#000';
    $MO_TMC2 = '#000';
    $MO_TMC3 = '#000';
    $MO_TMC4 = '#000';
    $MO_NS = null;
    //s7
    $S7a1 = 'none';
    $S7a2 = 'none';
    $S7a3 = 'none';
    $S7a4 = 'none';
    //rkm
    $MO_nAna1 = null;
    $MO_nAna2 = null;
    $MO_nAna3 = null;
    $MO_nAna4 = null;

    // color
    $MO_TMf1 = '#82e6fc';
    $MO_TMf2 = '#000';
    $MO_TMf3 = '#000';
    $MO_TMf4 = '#000';
    // background
    $MO_TMr1 = '#fff';
    $MO_TMr2 = '#fff';
    $MO_TMr3 = '#fff';
    $MO_TMr4 = '#fff';
    // border
    $MO_TMr12 = 'dashed #82e6fc';
    $MO_TMr22 = 'solid #000';
    $MO_TMr32 = 'solid #000';
    $MO_TMr42 = 'solid #000';

}
// NE DATA
?>
<style type="text/css">
.MO-MR div .MO-TM1{
    color: <?php echo $MO_TMf1;?>;
    background: <?php echo $MO_TMr1;?>;
    border: 2px  <?php echo $MO_TMr12;?>;
}
.MO-MR div .MO-TM2{
    color: <?php echo $MO_TMf2;?>;
    background: <?php echo $MO_TMr2;?>;
    border: 2px  <?php echo $MO_TMr22;?>;
}
.MO-MR div .MO-TM3{
    color: <?php echo $MO_TMf3;?>;
    background: <?php echo $MO_TMr3;?>;
    border: 2px  <?php echo $MO_TMr32;?>;
}
.MO-MR div .MO-TM4{
    color: <?php echo $MO_TMf4;?>;
    background: <?php echo $MO_TMr4;?>;
    border: 2px  <?php echo $MO_TMr42;?>;
}
.MO_N1{
    color: <?php echo $MO_TMC1;?>;
}
.MO_C2{
    color: <?php echo $MO_TMC2;?>;
}
.MO_T3{
    color: <?php echo $MO_TMC3;?>;
}
.MO_P4{
    color: <?php echo $MO_TMC4;?>;
}
.MO-MR div .MO-ff1{
    background: <?php echo $MO_ff1;?>;
}
.MO-MR div .MO-ff2{
    background: <?php echo $MO_ff2;?>;
}
.MO-MR div .MO-ff3{
    background: <?php echo $MO_ff3;?>;
}
.MO_none{
    display: none;
}
i.fa-check1{
    display: <?php echo $S7a1?>;
}
i.fa-check2{
    display: <?php echo $S7a2?>;
}
i.fa-check3{
    display: <?php echo $S7a3?>;
}
i.fa-check4{
    display: <?php echo $S7a4?>;
}
.MO-MR div .MO-TM2{
    padding: <?php echo $MO_NM_PX2;?>;
}
.MO-MR div .MO-TM3{
    padding: <?php echo $MO_NM_PX3;?>;
}
.MO-MR div .MO-TM4{
    padding: <?php echo $MO_NM_PX4;?>;
}

    input[type="number"]{
       <?php echo $MO_errN; ?>;
    }
    input[type="number"]:focus{
        <?php echo $MO_errN2; ?>;
    }
    input[type="email"]#MO_email{
        <?php echo $MO_errE; ?>;
    }
    input[type="email"]#MO_email:focus{
        <?php echo $MO_errE2; ?>;
    }
    .MO-Arror{
        background: <?php echo $MO_NON_CRO;?>;
    }
    #MO_password{
        <?php echo $MO_ArrorP;?>;
    }
    #MO_password:focus{
        <?php echo $MO_ArrorP2;?>;
    }
    .MO-NNN2{
        margin: 20px;
    }
    .MO-NNN22{
        font-size: 18px;
    }
    #MO_asd2{
        <?php echo $MO_errM11; ?>;
    }
    #MO_asd2:focus{
        <?php echo $MO_errM121;?>;
    }
    #MO_asd1{
        <?php echo $MO_errM12;?>;
    }
    #MO_asd1:focus{
        <?php echo $MO_errM122;?>;
    }
</style>

<div class="MO-Arror" style="display:<?php echo $MO_NON;?>;">
    <p class="MO-AROO"><?php echo $MO_msg_11;?></p>
</div>

<div class="MO-TOT">
     
    <header style="display: <?php echo $MO_VAR_B;?>;">التسجيل</header>

            <?php echo $MO_VAR?>

        <img class="logo" src="LogIn\images\logo.jpg" alt="">

<div style="display: <?php echo $MO_TKED_Email;?>">
    <form method="post">
        <button type="submit" name="MO_TER" class="M_MO_RGO3" style="outline: none;"><i class="fas fa-long-arrow-alt-left"></i></button>
    </form>
    <h5 id="MO_DFGD">The code was sent to <?php echo $_SESSION['TA_email'];?></h5>
<form method="post">

    <div class="MO_inputBox">
        <input type="number" name="MO_aTa" required placeholder="Verification Code" id="MO_password1">
    </div>

    <div class="MO_TST-I1">
        <input type="submit" name="MO_T_EMAIL" value="Substantiation">
    </div>

</form>
</div>

    <div style="display: <?php echo $MO_EM_TKE;?>;">
        <h2 class="MO-NNN MO-NNN2">Verify Your E-Mail</h2>
        <div class="MO-IP">
            <p class="MO-NNN22">A confirmation code will be sent to your e-mail</p>
            <form method="post">
                <input required type="email" name="MO_E_mailtk" id="MO_email" value="<?php echo $MO_E_mail_Tk;?>">

                <button type="submit" name="MO_ARSL">Send</button>
            </form>
            <form method="post">
                <button type="submit" name="MO_RG_PAS" class="MO_RGO3"><i class="fas fa-long-arrow-alt-left"></i></button>
            </form>
        </div>
    </div>
<div style="display: <?php echo $MO_F_NHA;?>">
    
<div class="MO-AK">
    <span class="MO_N1">الاسم</span>
    <span class="MO_C2">التواصل</span>
    <span class="MO_T3">المستندات</span>
    <span class="MO_P4">الامان</span>
</div>

    <div class="MO-MR">

        <div>
            <span class="MO-NM MO-TM1" style="padding: 0 <?php echo $MO_PX;?>px;"><span class="<?php echo $MO_nAna1?>">1</span><i class="fas fa-check fa-check1"></i></span>
        </div>

        <div>
            <span class="MO-NM MO-TM2"><span class="<?php echo $MO_nAna2?>">2</span><i class="fas fa-check fa-check2"></i></span><div class="MO-ff MO-ff1"></div>
        </div>

        <div>
            <span class="MO-NM MO-TM3"><span class="<?php echo $MO_nAna3?>">3</span><i class="fas fa-check fa-check3"></i></span><div class="MO-ff MO-ff2"></div>
        </div>

        <div>
            <span class="MO-NM MO-TM4"><span class="<?php echo $MO_nAna4?>">4</span><i class="fas fa-check fa-check4"></i></span><div class="MO-ff MO-ff3"></div>
        </div>

    </div>



    <form method="post" class="MO-FORM" style="text-align: left;"><div class="ARed">Sorry, please enter your full real name!</div><?php echo $MO_FORM ?></form>
        <form method="post"><?php echo $MO_NS?></form>

   <hr class="MO-hr">
    <div class="MO-GF">
        <button class="MO-QSQ MO-F"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>FACEBOOK</button>
        <button class="MO-QSQ MO-G"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/>GOOGLE</button>
    </div>
 </div>
</div>

<script type="text/javascript">
            const mo_password = document.getElementById('MO_password');
            const mo_re_password = document.getElementById('MO_re_password');
            const mo_toggle = document.getElementById('MO_PAS');

            function mo_showHide() {
                if (mo_password.type === 'password') {
                    mo_password.setAttribute('type', 'text');
                    mo_re_password.setAttribute('type', 'text');
                    mo_toggle.classList.add('TQL');
                }
                else{
                    mo_password.setAttribute('type', 'password');
                    mo_re_password.setAttribute('type', 'password');
                    mo_toggle.classList.remove('TQL');
                }
            }
</script>
<!-- MOBAEL -->


























<h1><img src="i/a2.png" class="img-a"><div class="LOOG"><h2>FOREVER</h2><h6>MARYAM AND IDRAHIM</h6></div></h1>
	  	<div class="col-md-5 mbdm">
            <form method="post" class="form">
            <div class="shadow1">
                <div class="ion">
                    
        <p class="Sign_Up">Sign Up</p>
	<input id="neem" type="text" name="name" required placeholder="Full name" value="<?php echo $R_name; ?>">
<input type="email" name="email" id="email" required placeholder="Email" value="<?php echo $R_email; ?>">

<input type="text" name="city" id="city" list="oil" required placeholder="City" value="<?php echo $R_city; ?>">
<input type="number" name="number" id="number" required placeholder="Telephone Number" value="<?php echo $R_number; ?>">
<div class="P1-S">
    <input type="password" name="password" id="password1" required placeholder="Password" value="<?php echo $R_password; ?>">
    <i class="fa fa-eye" id="TQL" aria-hidden="true" onclick="showHide();"></i>
</div>
	<input type="password" name="re_password" id="re_password" required placeholder="Re-Password" value="<?php echo $R_re_password; ?>">

<!--<input type="text" name="country" required placeholder="Country" list="oil" value="<?php //echo $R_country; ?>">-->
<input class="w2" type="text" name="region" id="region" required placeholder="Region" value="<?php echo $R_region; ?>">
  <div class="OIO">

    <button type="submit" name="signup" class="input1 i1" id="NON" onmouseover="tex();" onmouseout="hover1();">Creat Account</button>
    <button type="submit" name="" class="input1 i2"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>Facebook</button>
    <button type="submit" name="" class="input1 i3"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/> <span class="G-G">G</span><span class="G-o">o</span><span class="G-oo">o</span><span class="G-G">g</span><span class="G-l">l</span><span class="G-o">e</span></button>

</div>
        </div>
        </div>
       </form>
    </div>
    <div id="STS"></div>
     <script type="text/javascript">
            const password = document.getElementById('password1');
            const re_password = document.getElementById('re_password');
            const toggle = document.getElementById('TQL');

            function showHide() {
                if (password.type === 'password') {
                    password.setAttribute('type', 'text');
                    re_password.setAttribute('type', 'text');
                    toggle.classList.add('TQL')
                }
                else{
                    password.setAttribute('type', 'password');
                    re_password.setAttribute('type', 'password');
                    toggle.classList.remove('TQL')
                }
            }
        </script>
    <script type="text/javascript">
        setInterval(function () {
var name = window.neem.value;
var email = window.email.value;
var city = window.city.value;
var number = window.number.value;
var password = window.password1.value;
var re_password = window.re_password.value;
var region = window.region.value;
if (name != '' && email != '' && city != '' && number != '' && password != '' && re_password != '' && region != '') {
   //document.getElementById('STS').innerHTML = 'ممتلاء';
   //document.querySelector('div.input1').style.display = 'none';
   //document.querySelector('.i1').style.display = 'block';
   window.NON.style.background = '#2196f3';// #0984e3
   function tex() {
            window.NON.style.background = "green";      
    }
 }else{
    //document.getElementById('STS').innerHTML = 'فارغ';
    //document.querySelector('.i1').style.display = 'none';
    //document.querySelector('div.input1').style.display = 'block';
    
    window.NON.style.background = 'linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%)';
    function hover() {
        window.NON.style.background = 'red';
   }
 }
},0);
    </script>
    

<style type="text/css">
    #neem{
        <?php echo $errNeem; ?>
    }
    #neem:focus{
        <?php echo $errNeem2; ?>
    }
    #email{
        <?php echo $errEmail; ?>
    }
    #email:focus{
        <?php echo $errEmail2; ?>
    }

    input[type="number"]{
       <?php echo $errN; ?>
    }
    input[type="number"]:focus{
        <?php echo $errN2; ?>
    }

    #re_password, #password1{
       <?php echo $errP; ?>
    }
    #re_password:focus, #password1:focus{
        <?php echo $errP2; ?>
    }

    input[type="submit"]{
       <?php echo $tro; ?>
    }
    input[type="submit"]:focus{
        <?php echo $tro2; ?>
    }

    input#city{
       <?php echo $errM1; ?>
    }
    input#city:focus{
        <?php echo $errM12; ?>
    }

    input#region{
       <?php echo $errM2; ?>
    }
    input#region:focus{
        <?php echo $errM22; ?>
    }
    i.fa-eye{
        <?php echo $Ired; ?>
    }
</style>


       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       <div class="alert <?php echo $hide ?> ">
           <span class='fa fa-exclamation-circle'></span>
           <span class="msg_10"><?php echo $msg_10?></span>
           <span class="close-btn">
               <span class="fa fa-times"></span>
           </span>
       </div>
       <script type="text/javascript">
        setTimeout(function(){
               $('<?php echo $alert ?>').addClass('hide');
               $('<?php echo $alert ?>').removeClass('show');
               },10000); //hide alert automatically after 10sec
           $('.close-btn').click(function() {
               $('.alert').addClass('hide');
               $('.alert').removeClass('show');
           });
           /*$('button').click(function() {
               $('.alert').removeClass('hide');
               $('.alert').addClass('show');
               $('.alert').addClass('showAlert');
               setTimeout(function(){
               $('.alert').addClass('hide');
               $('.alert').removeClass('show');
               },500); //hide alert automatically after 5sec
           });*/
       </script>
<?php
          $block1 = 'none';
         if (isset($_POST['TKED'])) {
            $ERE = $_POST['E_mail'];
            $nu2 = "SELECT * FROM paso WHERE email = '$ERE'";
            if (mysqli_num_rows(mysqli_query($con, $nu2)) > 0) {
                echo "<style type=\"text/css\">
                                  .alert_backdrop{
                                     display: flex;
                                 }
                            </style>";
             $TnT = 'active';$top = '50%;';
             $ArROrEMAIL = 'block;';
             $_SESSION['E_mail'] = $_POST['E_mail'];
             $E_mail = $_SESSION['E_mail'];
            }
            else{
            $block1 = 'block';
            $_SESSION['E_mail'] = $_POST['E_mail'];
            $E_mail = $_SESSION['E_mail'];
            $_SESSION['TAT'] = rand(100000,999999);
            mail($E_mail, 'Verification code. FOREVER MARYAM AND IBRAHIM', 'Your email code is: '.$_SESSION['TAT'], 'MARYAM IBRAHIM FOREVER');
            //echo $_SESSION['TAT'];
              }
         }
       ?>
    <div class="alert_wrapper <?php echo $TnT; ?>">
                <div class="alert_backdrop"></div>
                <div class="alert_inner">
                    <form method="post">
                    <div class="alert_item alert_info" style="top: <?php echo $top;?>">
                        <div class="icon data_icon">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </div>
                        <div class="data">
                            <p class="title"><span></span>
                                A verification code will be sent to your email
                            </p>
                            <p class="sub"><input type="email" name="E_mail" required value="<?php echo $E_mail;?>"></p>
<h2 class="sub" style="color: red; margin: -10px auto;padding: 0;position: absolute;display: <?php echo $ArROrEMAIL?> ">Sorry, the email you entered is already used!</h2>
                        </div>
                        <div class="icon close">
                            <input type="submit" name="TKED" value="Okay">
                        </div>
                    </div>
                </form>
                <div class="alert_item alert_error">
                        <div class="icon data_icon">
                            <i class="fas fa-bomb"></i>
                        </div>
                        <div class="data">
                            <p class="title"><span>Noticeable:</span>
                                
                            </p>
                            <p class="sub">All data you entered will be lost</p>
                        </div>
                        <div class="close">
                            <input class="I-X" type="submit" name="rog" value="Follow up checkout">
                        </div>
                        <div class="">
                            <span class="btn TST-X X"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>

                    </div>
                </div>
            </div>
       

<script>

    /*var alert_items = document.querySelectorAll(".alert_item");
    var btns = document.querySelectorAll(".btn");
    var alert_wrapper = document.querySelector(".alert_wrapper");
    var close_btns = document.querySelectorAll(".close");

    btns.forEach(function(btn, btn_index){
        btn.addEventListener("click", function(){
            alert_wrapper.classList.add("active");

            alert_items.forEach(function(alert_item, alert_index){
                if(btn_index == alert_index){
                    alert_item.style.top = "50%";
                }
                else{
                    alert_item.style.top = "-100%";
                }
            })
        })
    })

    close_btns.forEach(function(close, close_index){
        close.addEventListener("click", function(){
            alert_wrapper.classList.remove("active");

            alert_items.forEach(function(alert_item, alert_index){
                alert_item.style.top = "-100%";
            })
        })
    })*/


</script>

<?php
$NGN = 'block';
$NGN2 = 'none';
if (isset($_POST['T_EMAIL'])) {
     $E_mail = $_SESSION['E_mail'];
$nuHO = "SELECT * FROM paso WHERE email = '$E_mail'";
if (mysqli_num_rows(mysqli_query($con, $nuHO)) > 0) {
       //header("Location: lodng.php");
       exit();
}
     $block1 = 'block';
     $aTa = $_POST['aTa'];
     if ($_SESSION['TAT'] == $aTa) {

                  $nameZ = $_SESSION['name'];
                  $numberZ = $_SESSION['number'];
                  $passwordZ = $_SESSION['password'];
                  $cityZ = $_SESSION['city'];
                  $regionZ = $_SESSION['region'];

                  //$conn = new mysqli("localhost","id11321909_root","Gmail.COM@22","id11321909_productdb");
$stmt = $con->prepare("insert into paso (name, email, number, password, city, region)values('$nameZ','$E_mail','$numberZ','$passwordZ','$cityZ','$regionZ')")or die(mysql_error());
                  $stmt->execute();

                  //$stit = $con->prepare("insert into users (name,email,number,password,city,region)values('$nameZ','$E_mail','$numberZ','$passwordZ','$cityZ','$regionZ')")or die(mysql_error());
                  //$stit->execute();
                  $NGN = 'none';
                  $NGN2 = 'block';

        //$quu = "insert into users (name,email,number,password,city,region) value ('$nameZ','$E_mail','$numberZ','$passwordZ','$cityZ','$regionZ')";
        //if(mysqli_query($con, $quu)){
         //$NGN = 'none';
         //$NGN2 = 'block';
        //}else{
            //echo "arroooooooooooooooooo0r";
        //}

     }else{
        $msg_11 = 'The confirmation code you entered is not valid';
        $colorEmal = 'red';
        $nemEmal = 'block';
        echo $_SESSION['TAT'];
     }

 }
 
?>


<div class="TST-D1">
    <div class="TST-D2">
        <span class="btn TST-X XX" style="display: <?php echo $NGN ?>;"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="TST-D3" style="display: <?php echo $NGN ?>;">
            <p class="TST-P1">The verification code has been sent to your email</p>
            <form method="post"><p class="TST-P2"><span class="TST-S1" id="SONN">
                <span class="fas fa-long-arrow-alt-left" id="oAQ" onclick="TOE();" aria-hidden="true"></span>
                    <input type="email" id="NLM" name="Email" required placeholder="E-mail">
                    <button type="submit" name="T3DeL" id="UOOU" onclick="TOOE();">Modification</button></span>
                    <?php
                    if (isset($_POST['T3DeL'])) {
                        $emT = $_POST['Email'];
                        $nu3 = "SELECT * FROM paso WHERE email = '$emT'";
                        if (mysqli_num_rows(mysqli_query($con, $nu3)) > 0) {
                            $E_mail = $_SESSION['E_mail'];
                            $msg_11 = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This email is already used. Try again';
                            $colorEmal = '#f0932b';
                            $nemEmal = 'block';
                            $block1 = 'block';
                            $MA = ' 0 30px';
                           }else{
                            $_SESSION['E_mail'] = $_POST['Email'];
                            $E_mail = $_SESSION['E_mail'];
                            $block1 = 'block';
                            $_SESSION['TAT'] = rand(100000,999999);
            mail($E_mail, 'Verification code. FOREVER MARYAM AND IBRAHIM', 'Your email code is: '.$_SESSION['TAT'], 'MARYAM IBRAHIM FOREVER');
                           }
                    }
                    ?>
                <span class="TST-S2"><?php echo $E_mail;?></span></p></form>

<style type="text/css">
.arror_email{
    background: <?php echo $colorEmal ?>;
    display: <?php echo $nemEmal ?>;
    margin:<?php echo $MA ?>;
}
</style>
                <p class="arror_email"><?php echo $msg_11 ?></p>
                <form method="post">
                    <div class="inputBox">
                        <input type="number" name="aTa" required placeholder="Verification Code" id="password">
                    </div>
                    <div class="TST-I1">
                        <input type="submit" name="T_EMAIL" value="Substantiation">
                    </div>
                </form>
        </div>
        <div style="display: <?php echo $NGN2 ?>;" class="TST-D3-N">
            <div class="TST-img-N"><img src="i/T2.png"></div>
            <div class="TST-D4-N">
                <h2>Account successfully created</h2>
                <p>You can log in now</p>
            </div>
            <div class="TST-I1 I1-N">
                 <a href="lodng.php"><input type="submit" name="T_EMAIL" value="Entry"></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function TOOE() {
        window.UOOU.style.background = "#009432";
        window.UOOU.style.border = "none";
        window.UOOU.style.fontSize = "15px" 
        window.UOOU.style.color = "#fff";
        window.UOOU.style.fontFamily = "'Manrope', sans-serif";
        window.UOOU.style.height = "139%";
        window.UOOU.style.padding = "0 5px";
        window.UOOU.style.margin = "-4px";
        window.UOOU.style.borderRadius = "0 10px 10px 0";
        window.UOOU.style.outline = "none";
        window.UOOU.style.cursor = "pointer";
        window.UOOU.style.transition = "0.6s";

        window.SONN.style.fontSize = "15px";
        window.SONN.style.width = "101%";
        window.SONN.style.borderRadius = "10px";
        window.SONN.style.transition = "0.4s";

        //window.NLM.style.position = "relative";
        window.NLM.style.margin = "-4px 58.4px 0 134px";
        window.NLM.style.width = "225.9px";
        window.NLM.style.padding = "6.5px 14px";
        window.NLM.style.height = "30px";
        window.NLM.style.transition = "0.6s";

        window.oAQ.style.left = "10px";
        window.oAQ.style.cursor = "pointer";
        window.oAQ.style.transition = "0.6s";
    }

    function TOE() {
              window.SONN.style.position = "absolute";
              window.SONN.style.color = "#fff";
              window.SONN.style.padding = "4px";
              window.SONN.style.fontSize = "15px";
              window.SONN.style.margin = "0 -264.7px";
              window.SONN.style.background = "#0652DD";
              window.SONN.style.height = "100%";
              window.SONN.style.width = "20%";
              window.SONN.style.borderRadius = "10px 0 0 10px";
              window.SONN.style.top = "0";
              window.SONN.style.transition = "0.4s";

              window.UOOU.style.background = "none";
              window.UOOU.style.border = "none";
              window.UOOU.style.fontSize = "15px";
              window.UOOU.style.color = "#fff";
              window.UOOU.style.transition = "0.4s";

              window.NLM.style.margin = "0px";
              window.NLM.style.padding = "0";
              window.NLM.style.width = "0";
              window.NLM.style.height = "0";
              window.NLM.style.transition = "0.2s";
              //window.NLM.style.left = "0";
              //window.NLM.style.top = "0";
              //window.NLM.style.border = "0 solid #0652DD";
              //window.NLM.style.fontSize = "16px";
              //window.NLM.style.outline = "none";
              //window.NLM.style.color = "#37d7fb";
              //window.NLM.style.color = "#000";

               window.oAQ.style.cursor = "auto";
               window.oAQ.style.left = "-25px";
               window.oAQ.style.transition = "0.4s";
        }
   //swal({title: "Account successfully created!",text: "You clicked the button!",icon: "success",});
  document.querySelector('.XX').addEventListener('click', function() {
        document.querySelector('.alert_item.alert_error').style.display = 'flex';
        document.querySelector('.TST-D2').style.display = 'none';
        document.querySelector('.alert_item.alert_info').style.display = 'none';
  });
document.querySelector('.X').addEventListener('click', function() {
        document.querySelector('.alert_item.alert_error').style.display = 'none';
        document.querySelector('.TST-D2').style.display = 'block';
  });
document.querySelector('.I-X').addEventListener('click', function() {
        document.querySelector('.alert_item.alert_error').style.display = 'none';
        document.querySelector('.TST-D1').style.display = 'none';
  });</script>
  <style type="text/css">.TST-D1{display: <?php echo $block1; ?>;}</style>

<datalist id="oil">
    <?php while($row = $result->fetch_assoc()){zAz($row[ "P_Iraq" ]);};?>
</datalist>

<!--
      $qu = "insert into Users (name,email,number,password,country,city,region) value ('$name','$email','$number','$password','$country','$city','$region')";
        if(mysqli_query($con, $qu)){
        echo '<div class="PLP1"><i class="fa fa-check" aria-hidden="true"></i> Account created successfully, you can log in now</div>';
            $tro = "width: 0%;";
        } 
-->

</body>
</html>