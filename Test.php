<?php

class Test {

	public $language ="LT";

	function __construct() {

		echo "Rita";

	}

	public function dayToday(){

		return date("Y-m-d");
	}

	public function storeToCookie(){

		$cookie_name = "test_today";
		$cookie_value = $this->dayToday();

		setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 86400 = 1 day
	}
	
	public function isEven($x){

		if ($x % 2 == 0) {
			return "TRUE";
		}
	}

	public function setLanguage($language){

		if ($language == "Lithuania") {
			return "LT";
		}else if ($language == "Russia"){
			return "RU";
		}else if ($language == "Poland"){
			return "PL";
		}
	}

	public function discount($array)
	{
	}
	
	public function storeRandom()
	{
		$myfile = fopen("random.txt", "a") or die("Unable to open file!");
		$text = rand(1990, 2017);
		fwrite($myfile, $text);
		fclose($myfile);
	}
	
	public function glueText($str)
	{
		$s = ucwords($str);
		return  $data= preg_replace('/\s+/', '', $s);
	}
   
	public function textGen(){
		$array = [
			'lorum',
			'ipsum',
			'labas',
			'krabas',
			'niekas',
			'gerai',
			'viskas',
			'diena',
			'buna'

		];
		
        for ($i = 0; $i < 100; $i++) {

        	$id = rand(0, (count($array)-1));
			echo $array[$id] . '. '; 
        }
            
	}
}