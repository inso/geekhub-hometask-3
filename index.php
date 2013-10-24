<?php

	#doc
	#	classname:	Tent
	#	scope:		PUBLIC
	#
	#/doc
	
	abstract class Tent
	{
		public $capacity; //seats in the tent
		public $weight; //tent weight
		public $type; //type of tent
		public $reviews; //reviews on tent
		public $price; //tent price
		
		abstract public function rating(points); //tent raiting
		
		public function initialization($arr)
		{
			$this->capacity = $arr['capacity'];
			$this->weight 	= $arr['weight'];
			$this->type 		= $arr['type'];
			$this->reviews 	= $arr['reviews'];
			$this->price 		= $arr['price'];			
		}
		
		public function print_data()
		{
			echo "<br>";
			print_r($this);
		}
	
	}
	###
	
	#doc
	#	classname:	Tent_TerraNova
	#	scope:		PUBLIC
	#	Class describes the first tent
	#/doc
	
	class Tent_TerraNova extends Tent
	{
		#	internal variables
	
		#	Constructor
		public function __construct ($arr)
		{
			$this->initialization($arr);
		}
		
		public function rating(points)
		{
			if($rate == 5){
				$this->reviews="Good tent";
			} else
			{
				$this->reviews="Bad tent";
			}
			return $rate;
		}
	
	}
	###
	
	#doc
	#	classname:	Tent_Campus
	#	scope:		PUBLIC
	#	Class describes the second tent
	#/doc
	
	class Tent_Campus extends Tent
	{
		#	Constructor
		public function __construct ($arr)
		{
			$this->initialization($arr);
		}
		
		public function rating(points)
		{
			if ($rate > 3)
			{
				echo "<br> Not bad tent.";
			}
			return $rate;
		}
	
	}
	###
	$Campus_Almeria_2 = new Tent_Campus(array(
													"capacity" => "2",
													"weight" => "3.2kg",
													"type" => "tube",
													"reviews" => "Good tent",
													"price" => "799 UAH",
													));
	
	$Campus_Almeria_2 -> print_data();
	
	

?>
