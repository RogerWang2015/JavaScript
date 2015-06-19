<?php
//Fill array with names(sample names are shown
	$user[] = "puppypal";
	$user[] = "shannonD";
	$user[] = "eddiedrivesfast";
	$user[] = "angieA";
	$user[] = "superSean";
	$user[] = "puppyLuv";
	$user[] = "flo_franks";
	$user[] = "lonnyG";
	$user[] = "taylorKiki";
	$user[] = "carolynG";
	$user[] = "gvillegirl";
	$user[] = "amandaF";
	$user[] = "zachParker";
	$user[] = "EvilEddy";
	$user[] = "shivangi";
	$user[] = "DorienDragon";
	$user[] = "Locode";
	$user[] = "WoofDude";
	$user[] = "jodude";
	$user[] = "Sweetbird";
	$user[] = "billybean";
	$user[] = "tobDude";
	$user[] = "winDude";
	$user[] = "besti";
	$user[] = "bff123";
	$user[] = "bff234";
	$user[] = "bff345";
	$user[] = "e2178";
	$user[] = "xfiles";
	$user[] = "xfiler";
	$user[] = "weird8";
	$user[] = "america";
	$user[] = "spirit^of^43";
	$user[] = "spinJenny";
	$user[] = "spinDoctor";
	$user[] = "spinner56";
	$user[] = "helpME!";
	$user[] = "happygal";
	$user[] = "lessISmore";
	$user[] = "okey^dokey";
	$user[] = "donkey66";
	$user[] = "route66";
	$user[] = "ponyTale";
	$user[] = "applepie";
	$user[] = "carolynX";
	$user[] = "love_to_eat";
	$user[] = "gamer1";
	$user[] = "hotGamer";
	$user[] = "playsAlot";
	$user[] = "wickedWitch";
	$user[] = "baby_face";
	
//identify the $q parameter
	$q = $_GET["q"];
	//echo strlen($q);
//lookup all hints from array if length of $q > 0
	if(strlen($q) > 0)
	{
		$hint ="";
		//echo $q;
		//echo count($user);
		for($i = 0; $i < count($user); $i++)
		{
			//echo strtolower($q); echo strtolower(substr($user[$i],0, (strlen($q)-1)));
			if(strtolower($q) == strtolower(substr($user[$i],0, strlen($q))))	
			{
				if($hint=="")
				{
					$hint = $user[$i];	
					//echo $user[$i];
				}
				else
				{
					$hint = $hint." ; ".$user[$i];	
					//echo $hint;
				}
			}
		}
	}
	//Set output to "no suggestion" if no hint were found or to the correct values
	if($hint == "")
	{
		$response = "no names match";	
	}
	else
	{
		$response = $hint;	
	}
//output the response
	echo $response;
?>
