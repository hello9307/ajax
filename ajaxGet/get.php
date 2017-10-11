<?php

/**
 * @Author: Administrator
 * @Date:   2017-10-11 09:05:34
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-10-11 09:09:29
 */
$arr=array(
	"小明"=>array("age"=>18,"skill"=>"eat"),
	"小东"=>array("age"=>20,"skill"=>"sleep"),
	"小红"=>array("age"=>19,"skill"=>"dance"),
	"小军"=>array("age"=>28,"skill"=>"swiming")
);
if(!$arr[$_GET["userName"]]){
	echo "sorry, nobody in here";
}else{
	echo $arr[$_GET["userName"]]["age"]."<br>".$arr[$_GET["userName"]]["skill"];
}
?>