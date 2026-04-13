<?php
$d=Date("D");
switch($d)
{
	case "Sun":echo "Today is Sunday";
			   break;
	case "Mon":echo "Today is Monday";
			   break;
	case "Tue":echo "Today is Tuesday";
			   break;
	case "Wed":echo "Today is Wednesday";
			   break;
	case "Thur":echo "Today is Thursday";
			   break;
	case "Fri":echo "Today is Friday";
			   break;
	case "Sat":echo "Today is Saturday";
			   break;		   
	default: echo "Wrong case";
}
?>	