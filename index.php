<?php
//will eventually be put into functions.php

$con = mysql_connect('localhost','a_site','');
$db = mysql_select_db('sals');

//get list of users into array

$sql=mysql_query("SELECT * FROM users");
$usernames=mysql_fetch_assoc($sql);
$sql=NULL;

//get content
if(!$_GET['p'] || $_GET['p']=1){
	$sql=mysql_query("SELECT * FROM content WHERE id ='1'");
	$content=mysql_fetch_assoc($sql);
	$sql=NULL;
}else{
	$sql=mysql_query("SELECT * FROM content WHERE id='".$_GET['p']."'");
	$content=mysql_fetch_assoc($sql);
	$sql=NULL;
}
echo"<html><head>";
echo"<title>".$content['title']." | site</title></head><body>";
echo $content['content']."<br/>".$content['creation_date']."<br/>".$content['creater_id'];
echo"</body>";
?>
