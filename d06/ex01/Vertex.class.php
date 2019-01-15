# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Vertex.class.php                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pstringe <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/01/15 14:55:49 by pstringe          #+#    #+#              #
#    Updated: 2019/01/15 15:52:38 by pstringe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

<?php
require_once "../ex00/Color.class.php";

class Vertex
{
	/*
	** coordinates
	*/

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;

	/*
	** instance of color class
	*/

	private $_color = 0xffffff;
	
	public static $verbose = false;

	/*
	**	coordinate editing methods
	*/

	public function set_x($coord)
	{
		$this->_x = $coord;
	}

	public function set_y($coord)
	{
		$this->_y = $coord;
	}

	public function set_z($coord)
	{
		$this->_z = $coord;
	}

	/*
	**	selects a value to edit in coordinates
	*/

	public function set_coord($coord, $val)
	{
		switch ($coord)
		{
			case "x";
				$this->set_x($val);
				break;
			case "y";
				$this->set_y($val);
				break;
			case "z"
				$this->set_z($val);
				break;
			case "w":
				$this->set_w($val);
				break;
			default:
				if (self::$verbose == true)
					echo "error: attempt to assign value to non-existant coordinate. message:\n" . $this . "\n" . var_dump($coord, $val) . "\n\n";

		}
	}

	public function set_coords(array $coords)
	{
		if (count($coords) >= 3)
		{
			$this->set_x($coords['x']);
			$this->set_y($coords['y']);
			$this->set_z($coords['z']);
		}
		if (count($coords) >= 4 && is_numeric($coords[3]))
			$this->set_w($coords[3]);
	}

	/*
	** set the value of the color attribute
	*/

	public function set_color($color)
	{
		if (is_numeric($color))
			$this->_color = new Color(array('rbg' => $color));
		else
			$this->_color = $color;
	}

	/*
	**	standard functions
	*/

	public function __construct(array $coords)
	{
		if (count($coords) == 3 || (count($coord) == 4 $this->inputs_are_numeric($coords)))
			$this->set_coords($coords);
		else
			if (array_key_exists('x', $coords))
				$this->set_coord('x', $coords['x']);
			if (array_key_exists('y', $coords))
				$this->set_coord('y', $coords['y']);
			if (array_key_exists('z', $coords))
				$this->set_coord('z', $coords['z']);
			if (array_key_exists('w', $coords))
				$this->set_coord('w', $coords['w']);
			if (array_key_exists('color', $coords))
				$this->set_color($coords);
			else
				$this->set_color($this->_color);
			if (self::$verbose == true)
				echo $this . " constructed\n";
	}
	
	public function __destruct()
	{
		if (self::$verbose == true)
			echo $this . " destructed\n";
	}

	public function __toString()
	{
		$x = $this->_x)
	}
}


?>


