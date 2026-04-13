<?php

 class vehicle
{	
	// $wheels=4;
	// $color="black";
	// $fuel="diesel";
	// $speed=220;
	 
	
	public function start($a)
	{
		 echo " ",$a, " is started <br>";
	}
	
	public function acclerate($a)
	{
		 echo " ",$a, " is accelerated <br>";
	}
	public function brake($a)
	{
		 echo " ",$a, " is stopped <br>";
	}
	
}
 class transvehicle extends vehicle
{
	// $doors=2;
	// $load=2000;

}
class van extends vehicle
{
	// $this->noboxes=200;
	public function loadvan()
	{
		echo "van loaded";
	}	
}
class truck extends vehicle
{
	// $nocontainer=20;
	public function loadcontainer()
	{
		echo "truck loaded";
	}	
}
class passengervehicle extends vehicle
{
	// passengerseats=40;
	public function passload()
	{
		echo "passengers loaded";
	}
}
class car extends passengervehicle
{
	// nodoors=5;
}
class bike extends passengervehicle
{
	// saddlehieght=210;
}
	
$obj1=new van();
$obj2=new truck();
$obj3=new car();
$obj4=new bike();

$obj1->start("van");
$obj1->acclerate("van");
$obj1->brake("van");


$obj2->start("truck");
$obj2->acclerate("truck");
$obj2->brake("truck");
?>
	