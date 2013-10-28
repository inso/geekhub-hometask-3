<?php

	#doc
	#	classname:	Tent_TerraNova
	#	scope:		PUBLIC
	#	Class describes the first tent
	#/doc
	
	class TentTerraNova extends Tent
	{
	
		#	Constructor
		public function __construct ($arr)
		{
			$this -> initialization($arr);
		}
		
		public function rating($rate)
		{
			if($rate == 5){
				$this -> reviews = "Good tent";
			} else
			{
				$this -> reviews = "Bad tent";
			}
			return $rate;
		}
	
	}