<?php
@session_start();
@ob_start();
define("DATA","data/");
define("PAGE","include/");
include_once("class/FL.php");
include_once("class/DB.php");
include_once("class/User.php");
$settings=DB::table("settings")->where("ID",1)->first();
define("SITE",$settings->url."admin/");
function json($data){
    return json_encode($data);
}
if($_POST && !empty($_POST["process"])){
    $process=$_POST["process"];
    $result=["success"=>false,"message"=>"İşleminiz geçersizdir."];
    if($process=="login"){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $login=User::login();
        }else{
            $result["success"]=false;
            $result["message"]="Boş bıraktığınız alanları doldurunuz.";
        }

    }
}
else{
    echo json($result);
}
?>