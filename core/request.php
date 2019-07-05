<?php 
	class request {
		public $controller = 'post';
		public $action = 'index';
		public $urlParams = [];

		public function __construct() {
			$this->getAllUrlParams();
			$this->getAllPostParams();

			if($this->getUrlParam(0) != null) {
				$this->controller = $this->getUrlParam(0);
			}

			if($this->getUrlParam(1) != null) {
				$this->action = $this->getUrlParam(1);
			}
		}

		protected function getAllUrlParams() {
			$requestUri = $_SERVER['REQUEST_URI'];

			if(strpos($requestUri, 'index.php') == false) {
				return;
			}

			$paramString = explode('index.php/', $requestUri)[1];

			$this->urlParams = explode('/', $paramString);
			$this->urlParams = array_filter($this->urlParams);
		}

		protected function getAllPostParams() {
			foreach ($_POST as $key => $value) {
				$this->{$key} = $value;
			}
		}

		protected function redriect($url) {
			header("location: $url");
		}

		public function getUrlParam($index = 0) {
			return $this->urlParams[$index] ?? null;
		}
	}
 ?>