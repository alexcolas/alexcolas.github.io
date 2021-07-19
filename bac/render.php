<?php
class BAC
{
	var $Source;
	var $FirstName;
	var $LastName;
	var $Gender;
	var $ZipCode;
	var $City;
	var $Address;
	var $Title;
	var $BirthDate;
	var $BirthCity;
	var $BirthCityZipCode;
	var $GetDate;
	var $GetCity;

	public function BAC()
	{
		header('Content-Type: image/jpeg');
		header('Content-Disposition: inline; filename="BAC.jpg"');

		$this->Resolutions = array(1725, 1249);

		$this->LayerBottom = imagecreatefromjpeg("static/.1.jpg");
		$this->LayerTest = imagecreatefromjpeg("static/test.jpg");
		$this->Source = imagecreatetruecolor($this->Resolutions[0], $this->Resolutions[1]);

		//Colors
		$this->ColorWhite = imagecolorallocate($this->Source, 255, 255, 255);
		$this->ColorGrey = imagecolorallocate($this->Source, 100, 100, 102);
		$this->ColorGrey2 = imagecolorallocate($this->Source, 90, 90, 90);
		$this->ColorRed = imagecolorallocate($this->Source, 255, 0, 50);
		$this->ColorBlack = imagecolorallocate($this->Source, 0, 0, 0);
		$this->ColorBleu = imagecolorallocate($this->Source, 0, 113, 187);
		$this->ColorTransparent = imagecolorallocatealpha($this->Source, 0, 255, 0, 128);
		$this->ColorFiligrane = imagecolorallocatealpha($this->Source, 50, 50, 50, 30);
	}

	public function Render($preview = true, $effect = 0)
	{
		$effect = -240*(1-log(101-$effect)/log(101));

		imagecopy($this->Source, $this->LayerBottom, 0, 0, 0, 0, $this->Resolutions[0], $this->Resolutions[1]);
		//imagecopy($this->Source, $this->LayerTest, 0, 0, 0, 0, $this->Resolutions[0], $this->Resolutions[1]);

		//imagettftext($this->Source, 20, 0, 280, 642, $this->ColorGrey2, "fonts/CALIST.TTF", "Serie ECONOMIQUE");
		imagettftext($this->Source, 18.5, 0, 280, 692, $this->ColorGrey2, "fonts/CALISTB.TTF", utf8_decode($this->Title));
		imagettftext($this->Source, 18.5, 0, 404, 741, $this->ColorGrey2, "fonts/CALISTB.TTF", utf8_decode(mb_strtoupper($this->gender($this->Gender) . " " . $this->LastName . " " . $this->FirstName, 'UTF-8')));

		imagettftext($this->Source, 18.5, 0, 343, 790, $this->ColorGrey2, "fonts/CALISTB.TTF", $this->date($this->BirthDate));
		imagettftext($this->Source, 18.5, 0, 929, 790, $this->ColorGrey2, "fonts/CALISTB.TTF", utf8_decode(mb_strtoupper($this->BirthCity . "   (0" . $this->BirthCityZipCode . ")", 'UTF-8')));

		imagettftext($this->Source, 18.5, 0, 920, 963, $this->ColorGrey2, "fonts/CALIST.TTF", utf8_decode(mb_strtoupper($this->GetCity, 'UTF-8')));
		imagettftext($this->Source, 18.5, 0, 1210, 963, $this->ColorGrey2, "fonts/CALIST.TTF",  utf8_decode($this->date($this->GetDate, 'UTF-8')));

		if($effect != 0)
		{
			imagefilter($this->Source, IMG_FILTER_GRAYSCALE);
			imagefilter($this->Source, IMG_FILTER_CONTRAST, $effect);
			imagefilter($this->Source, IMG_FILTER_SMOOTH, -1000);
		}

		imagejpeg($this->Source);
		imagedestroy($this->Source);
	}

	private function date($date)
	{
		$rts = explode("/", $date);
		$month = "";
		switch($rts[1])
		{
			case 1:
			$month = "Janvier";
			break;
			case 2:
			$month = "Février";
			break;
			case 3:
			$month = "Mars";
			break;
			case 4:
			$month = "Avril";
			break;
			case 5:
			$month = "Mai";
			break;
			case 6:
			$month = "Juin";
			break;
			case 7:
			$month = "Juillet";
			break;
			case 8:
			$month = "Aout";
			break;
			case 9:
			$month = "Septembre";
			break;
			case 10:
			$month = "Octobre";
			break;
			case 11:
			$month = "Novembre";
			break;
			default;
			$month = "Janvier";
			break;
		}
		return $rts[0] . " " . $month . " " . $rts["2"];
	}

	private function gender($gender)
	{
		if($gender == "M")
		return "MONSIEUR";
		else if($gender == "MME")
		return "MADAME";
		else
		return "MADEMOISELLE";
	}

	public function setName($firstname, $lastname)
	{
		$this->FirstName = $firstname;
		$this->LastName = $lastname;
	}

	public function setDate($date, $city, $zip)
	{
		$this->BirthDate = $date;
		$this->BirthCity = $city;
		$this->BirthCityZipCode = $zip;
	}

	public function setInfos($date, $city)
	{
		$this->GetDate = $date;
		$this->GetCity = $city;
	}

	public function setTitle($title)
	{
		$this->Title = $title;
	}

	public function setGender($gender)
	{
		$this->Gender = $gender;
	}
}
?>
