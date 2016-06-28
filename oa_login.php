<?php

session_start();
if (isset($_SESSION["username"])) {

  $username = $_SESSION["username"];

} else {
    $url = urlencode("http://www.ddp.idata.com:90/get_oa_user.php");

    header("Location:http://passport.oa.com/modules/passport/signin.ashx?url=".$url);
    exit();
}
