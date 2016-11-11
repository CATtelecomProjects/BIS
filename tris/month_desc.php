<?
		function month_longdesc($t)
		{
			switch($t)
				{
					case "01" ;
							 $t2 = "มกราคม";break;
					case "02";
							 $t2 = "กุมภาพันธ์";break;
					case "03";
							 $t2 = "มีนาคม";break;
					case "04";
							 $t2 = "เมษายน";break;
					case "05";
							 $t2 = "พฤษภาคม";break;
					case "06";
							 $t2 = "มิถุนายน";break;
					case "07";
							 $t2 = "กรกฎาคม";break;
					case "08";
							 $t2 = "สิงหาคม";break;
					case "09";
							 $t2 = "กันยายน";break;
					case "10";
							 $t2 = "ตุลาคม";break;
					case "11";
							 $t2 = "พฤศจิกายน";break;
					case "12";
							 $t2 = "ธันวาคม";break;
				}
			return $t2;
		}

		function month_shortdesc($t)
		{
			switch($t)
				{
					case "01" ;
							 $t2 = "ม.ค";break;
					case "02";
							 $t2 = "ก.พ.";break;
					case "03";
							 $t2 = "มี.ค.";break;
					case "04";
							 $t2 = "เม.ย.";break;
					case "05";
							 $t2 = "พ.ค.";break;
					case "06";
							 $t2 = "มิ.ย.";break;
					case "07";
							 $t2 = "ก.ค.";break;
					case "08";
							 $t2 = "ส.ค.";break;
					case "09";
							 $t2 = "ก.ย.";break;
					case "10";
							 $t2 = "ต.ค.";break;
					case "11";
							 $t2 = "พ.ย.";break;
					case "12";
							 $t2 = "ธ.ค.";break;
				}
			return $t2;
		}


?>