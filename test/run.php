<?php 

$high=array("sick", "hospitalized", "hospital", "food poisoning");
$medium=array("wrong" , "concern", "misspelled", "cheated", "cheat","opened");
$low=array("delayed", "false", "next time");

$priority=array();
$new_sub="";

if(isset($_POST['submit'])){

	$to=(isset($_POST['to'])) ? $_POST['to'] : '' ;

	$subject=(isset($_POST['subject'])) ? $_POST['subject'] : '' ;

	$body=(isset($_POST['body'])) ? $_POST['body'] : '' ;
	
	$priority['high']=in_array($body,$high);
	$priority['medium']=in_array($body,$medium);
	$priority['low']=in_array($body,$low);

	$new_sub=$subject;
	
	if($priority['high'])
		$new_sub.=" priority(high)";
	if($priority['medium'])
		$new_sub.=" priority(medium)";
	if($priority['low'])
		$new_sub.=" priority(low)";

	

}




?>