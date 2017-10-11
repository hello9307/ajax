<?php
header("content-type:text/html;charset=utf-8");
$arr=array(
	"小明"=>array("age"=>18,"skill"=>"eat"),
	"小东"=>array("age"=>20,"skill"=>"sleep"),
	"小红"=>array("age"=>19,"skill"=>"dance"),
	"小军"=>array("age"=>28,"skill"=>"swiming")
);
if(!$arr[$_GET["userName"]]){
	echo "sorry, nobody in here";
}else{
	echo $arr[$_GET["userName"]]["age"].$arr[$_GET["userName"]]["skill"];
}
?>