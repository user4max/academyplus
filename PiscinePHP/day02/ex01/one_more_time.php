<?php

	if ($argc == 2)
	{	
		$date = explode(" ", $argv[1]);
		$time = explode(":", $date[4]);

		$cd = count($date);
		$ct = count($time);

		echo $cd. " - nr. arg in date\n";
		echo $ct. " - nr. arg in time\n";

		if ($cd == 5 && $ct == 3)
		{	

		if (preg_match("/^[0-9]*$/", $time[0]) && preg_match("/^[0-9]*$/", $time[1])
			&& preg_match("/^[0-9]*$/", $time[2]) && preg_match("/^[0-9]*$/", $date[3]) 
			&& preg_match("/^[0-9]*$/", $date[1]))
			echo "Good Format\n";
		else
		{
			echo "Wrong Format\n";
			exit ;
		}
	
		if (strlen($time[0]) == 2 && strlen($time[1]) == 2 && strlen($time[2]) == 2
			&& intval($time[0]) < 24 && intval($time[1]) < 60 && intval($time[2]) < 60)
			echo "Good Format\n";
		else
		{
			echo "Wrong Format\n";
			exit ;
		}

		if (strlen($date[3]) == 4 && (strlen($date[1]) == 1 || strlen($date[1]) == 2) 
			&& intval($date[1]) < 32)
			echo "Good Format\n";
		else
		{
			echo "Wrong Format\n";
			exit;
		}

		if (preg_match("/^[a-zA-Z]*$/", $date[2]) && preg_match("/^[a-zA-Z]*$/", $date[0]))
			echo "Good Format\n";
		else
		{
			echo "Wrong Format\n";
			exit ;
		}

		$day1 = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
		$day2 = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
		$month1 = array(1 => "Janvier", 2 => "Fevrier", 3 => "Mars", 4=> "Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Aout", 
			9=>"Septembre", 10=>"Octobre", 11=>"Novembre", 12=>"Decembre");
		$month2 = array(1 => "janvier", 2 =>"fevrier", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"aout",
			9=>"septembre", 10=>"octombre", 11=>"novembre", 12=>"decembre");

		$eachm = array(31=>1, 59=>2, 90=>3, 120=>4, 151=>5, 181=>6, 212=>7, 243=>8, 273=>9, 304=>10, 334=>11);
			
		if (in_array($date[0], $day1) || in_array($date[0], $day2))
			echo " ";
		else
		{
			echo "Wrong Format\n";
			exit ;
		}


		if (in_array($date[2], $month1))
		{
			$dnom = array_search($date[2], $month1);
			echo $dnom. " - numaru lunei\n";
		}
		else if (in_array($date[2], $month2))
		{
			$dnom = array_search($date[2], $month2);
			echo $dnom . " - numaru lunei\n";
		}
		else
		{
			echo "Wrong Format\n";
			return (0) ;
		}

		$year = $date[3];

		$y = 1970;
		$leap = 0;

		while ($y <= $year)
		{
			if (($y%4==0) && ($y%100!= 0))
			{
				$leap++;
				$y++;
			}
			else if ($y%400 == 0)
			{
				$leap++;
				$y++;
			}
			else
				$y++;
		}

		$nrzi = array_search($dnom - 1, $eachm);
		
		echo $nrzi. " -- leap\n";
		
		$mytime = $time[2] + $time[1]*60 + $time[0]*3600 + ($date[3]-1970)*365*24*3600 + ($nrzi+$date[1]-1)*24*3600 + $leap*24*3600 - 3600;

		echo $mytime. "\n";
		}
		else
			echo "Wrong Format\n";
	}
	return (0);
?>
