<?php 
	class baseController {
		public function view($viewName, $data = [])
		{
			
			require '../app/views/' . $viewName . '.php';
		}
	}
 ?>