# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Color.class.php                                    :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pstringe <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/01/15 13:22:05 by pstringe          #+#    #+#              #
#    Updated: 2019/01/15 14:36:35 by pstringe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/php
<?php
class Color{
	/*
	**	rgb values
	*/
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	/*
	** isolate bits of integer input
	*/

	private const R_OFFSET = 0xff0000;
	private const G_OFFSET = 0x00ff00;
	private const B_OFFSET = 0x0000ff;

	public static $verbose = False;
	/*
	** standard functions
	*/
	
	private static function check_input_keys($rgb)
	{
		if (count($rgb)){
			if (array_key_exists('red', $rgb))
				return (1);
			if (array_key_exists('green', $rgb))
				return (1);
			if (array_key_exists('blue', $rgb))
				return (1);
		}
	}

	private function get_color_from_int($color)
	{
		$this->red = (self::R_OFFSET & $color) >> 16;
		$this->green = (self::G_OFFSET & $color) >> 8;
		$this->blue = (self::B_OFFSET & $color);

	}

	public function __toString()
	{
		$format = "Color(red: %3d, green: %3d, blue: %3d)";
		return sprintf($format, $this->red, $this->green, $this->blue);
	}

	public function __construct(array $rgb)
	{
		if (isset($rgb) && array_key_exists('rgb', $rgb))
			$this->get_color_from_int($rgb['rgb']);
		else if (count($rgb) == 3 || self::check_input_keys($rgb)){
			if (array_key_exists('red', $rgb))
				$this->red = $rgb['red'];
			if (array_key_exists('green', $rgb))
				$this->green = $rgb['green'];
			if (array_key_exists('blue', $rgb))
				$this->blue = $rgb['blue'];
		}
		if (self::$verbose)
			echo $this . "constructed.\n";
	}
	
	public function __destruct()
	{
		if (self::$verbose)
			echo $this . "destructed. \n";
	}

	public static function doc()
	{
		$file = fopen("Color.doc.txt", 'r');
		$doc = "";
		while (!feof($file))
			$doc .= (fgets($file));
		echo $doc;
	}

	/*
	** operations
	 */

	public function add($color)
	{
		if (is_numeric($color))
			$res = $this->add(new Color(array('rgb' => $color)));
		else
		{
			$r = $this->red + $color->red;
			$g = $this->green + $color->green;
			$b = $this->blue + $color->blue;
			$res = new Color(array('red' => $r, 'green' => $g, 'blue' => $b));
		}
		return ($res);
	}

	public function sub($color)
	{
		if (is_numeric($color))
			$res = $this->add(new Color(array('rgb' => $color)));
		else
		{
			$r = $this->red - $color->red;
			$g = $this->green - $color->green;
			$b = $this->blue - $color->blue;
			$res = new Color(array('red' => $r, 'green' => $g, 'blue' => $b));
		}
		return ($res);
	}

	public function mult($color)
	{
		if (is_numeric($color))
			$res = $this->add(new Color(array('rgb' => $color)));
		else
		{
			$r = $this->red * $color->red;
			$g = $this->green * $color->green;
			$b = $this->blue * $color->blue;
			$res = new Color(array('red' => $r, 'green' => $g, 'blue' => $b));
		}
		return ($res);
	}
}
?>
