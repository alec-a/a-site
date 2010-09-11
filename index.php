<?php
//will eventually be put into functions.php

$con = mysql_connect('localhost','a_site','');
$db = mysql_select_db('sals');

//get list of users into array

$sql=mysql_query("SELECT * FROM users");
$usernames=mysql_fetch_assoc($sql);
$sql=NULL;
echo"<html><head>";
//get title for head
if(!$_GET['p'] || $_GET['p']=1){
	$sql=mysql_query("SELECT title FROM content WHERE id ='1'");
	$title=mysql_fetch_assoc($sql);
	$sql=NULL;
}else{
	$sql=mysql_query("SELECT title FROM content WHERE id='".$_GET['p']."'");
	$title=mysql_fetch_assoc($sql);
	$sql=NULL;
}
echo"<title>".$title." | site</title>";
?>
