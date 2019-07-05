<?php 
	class input {

		public static function get($name)
		{
			return $_GET[$name] ?? null;
		}

		public static function post($name)
		{
			return $_POST[$name] ?? null;
		}
	}
 ?>