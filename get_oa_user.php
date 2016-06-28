<?php
session_start();

$hosts = 'http://www.ddp.idata.com:90/';
if (isset($_GET["ticket"])) {
    $ticket = $_GET["ticket"];
} else {
    $url = urlencode($hosts."/get_oa_user.php");
    header("Location:http://passport.oa.com/modules/passport/signin.ashx?url=".$url);
	exit();
}

/*
$appkey = "da12dc6716d040fb80bac9b918f5399b";

$decryptTicketUrl ="http://oss.api.tof.oa.com/api/v1/Passport/DecryptTicketWithClientIP?appkey=".$appkey."&encryptedTicket=".$ticket."&browseIP=".$_SERVER["REMOTE_ADDR"];

$result = get_contents($decryptTicketUrl);

$result_arry = simple_json_parser($result);
*/

//10.1.163.32 是外包同学开发机
if($_SERVER['SERVER_ADDR'] == "10.24.248.12" || $_SERVER['SERVER_ADDR'] == "10.1.163.32"){
	$client = new SoapClient("http://logon.oa.com/Services/passportService.asmx?WSDL");
}else{
	$client = new SoapClient("http://login.oa.com/Services/passportService.asmx?WSDL");
}

$ticketInfo = $client->DecryptTicket(array("encryptedTicket" => $ticket));
if(isset($ticketInfo->DecryptTicketResult)){
	$initusername = $ticketInfo->DecryptTicketResult->LoginName;
    $_SESSION["username"] = $initusername;
    setcookie("username",$initusername);
	header("Location:".$hosts);
}else{
	header("Location:http://passport.oa.com/modules/passport/signin.ashx?url=".$hosts);
}
exit();

if ($result_arry["Ret"] == "0") {
    $initusername = $result_arry["LoginName"];
    $_SESSION["username"] = $initusername;
    setcookie("username",$initusername);
    // var_dump($_SESSION);
    echo "<script>top.location.href=\"http://ddp.idata.oa.com/";
    echo "\";</script>";
} else {
    header("Location:http://passport.oa.com/modules/passport/signin.ashx?url=http://ddp.idata.oa.com");
    exit();
}


// $mySoap = new SoapClient("http://login.oa.com/Services/passportService.asmx?WSDL");

// $soapResult = $mySoap -> DecryptTicket(array("encryptedTicket" => $_COOKIE["ticket"]));

// if (!$soapResult -> DecryptTicketResult -> LoginName) {
//     echo "hahahah";
// } else {
//     $initusername = $soapResult -> DecryptTicketResult -> LoginName;
//     $_SESSION["username"] = $initusername;
//     setcookie("username",$initusername);
//     header("Location: index.php");              
// }

function simple_json_parser($json){
    $json = str_replace("{","",str_replace("}","", $json));
    $jsonValue = explode(",", $json);
    $arr = array();
    foreach($jsonValue as $v){
        $jValue = explode(":", $v);
        $arr[str_replace('"',"", $jValue[0])] = (str_replace('"', "", $jValue[1]));
    }

    return $arr;
}

function get_contents($url) {
    $header = buildHeader();
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, TRUE );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt ( $ch, CURLOPT_URL, $url );
    $response = curl_exec ( $ch );
    curl_close ( $ch );
    
    return $response;
}

function buildHeader() {
    $random = rand ( 1000, 9999 );
    $appkey = "da12dc6716d040fb80bac9b918f5399b";
    $sysid  = "22210";
    $timestamp = time ();
    $data = "random" . $random . "timestamp" . $timestamp;

    $key = GetKey($sysid);
    $crypt = new DES ( $key );
    $signature = $crypt->encrypt ($data);
       return array(
    'random:'. $random
    ,'timestamp:'.$timestamp, 
    'appkey:'.$appkey,
    'signature:'.$signature
       );
}

function GetKey($key) {
    $tmp = "--------";
    $key = substr ( $key . $tmp, 0, 8 );
    return $key;
}