<?php
	
	class REST {
		
		
		public $_contentType = "application/json";
		public $_request = array();
		
		private $_method = "";		
		private $_code = 200;
		
		public function __construct(){
			session_start();
			
			$this->inputs();

		}
		
		/*public function get_referer(){
			return $_SERVER['HTTP_REFERER'];
		}*/
		
		public function response($data,$status){
			//If data is an array, then conver it to json!
			if(!is_string($data) ) {
				$data = json_encode($data, JSON_UNESCAPED_SLASHES);
			}

			$this->_code = ($status)?$status:200;
			$this->set_headers();
			echo $data;
			exit;
		}
		
		private function get_status_message(){
			$status = array(
						100 => 'Continue',  
						101 => 'Switching Protocols',  
						200 => 'OK',
						201 => 'Created',  
						202 => 'Accepted',  
						203 => 'Non-Authoritative Information',  
						204 => 'No Content',  
						205 => 'Reset Content',  
						206 => 'Partial Content',  
						300 => 'Multiple Choices',  
						301 => 'Moved Permanently',  
						302 => 'Found',  
						303 => 'See Other',  
						304 => 'Not Modified',  
						305 => 'Use Proxy',  
						306 => '(Unused)',  
						307 => 'Temporary Redirect',  
						400 => 'Bad Request',  
						401 => 'Unauthorized',  
						402 => 'Payment Required',  
						403 => 'Forbidden',  
						404 => 'Not Found',  
						405 => 'Method Not Allowed',  
						406 => 'Not Acceptable',  
						407 => 'Proxy Authentication Required',  
						408 => 'Request Timeout',  
						409 => 'Conflict',  
						410 => 'Gone',  
						411 => 'Length Required',  
						412 => 'Precondition Failed',  
						413 => 'Request Entity Too Large',  
						414 => 'Request-URI Too Long',  
						415 => 'Unsupported Media Type',  
						416 => 'Requested Range Not Satisfiable',  
						417 => 'Expectation Failed',  
						500 => 'Internal Server Error',  
						501 => 'Not Implemented',  
						502 => 'Bad Gateway',  
						503 => 'Service Unavailable',  
						504 => 'Gateway Timeout',  
						505 => 'HTTP Version Not Supported');
			return ($status[$this->_code]) ? $status[$this->_code] : $status[500];
		}
		
		public function get_request_method(){
			return $_SERVER['REQUEST_METHOD'];
		}
		
		private function inputs(){
			switch($this->get_request_method()){
				
				case "POST":
					if(count($_POST) == 0 ) {						
						$arr  = json_decode(file_get_contents("php://input"), true);
						$this->_request = $this->cleanInputs($arr);

					}else { 
						$this->_request = $this->cleanInputs($_POST);
					}
					break;

				case "GET":
				case "DELETE":
					$this->_request = $this->cleanInputs($_GET);
					break;
				/*case "PUT":
					parse_str(file_get_contents("php://input"),$this->_request);
					$this->_request = $this->cleanInputs($this->_request);
					break;*/
				default:
					$this->response('',406);
					break;
			}
		}

		public function required($required) {

			//foreach()

		}

		public function processApi($son){

			if( isset($_REQUEST['request']) ) {
				
				$func = explode("/",$_REQUEST['request']);

				
				if(count($func) <= 1  ) $this->response('Client error',403);
				
				if((int)method_exists($son, $func[1]) > 0)
					$son->$func[1]();
				else
					$this->response('Not Found',404);
			}

		}
		
		private function cleanInputs($data){
			$clean_input = array();
			if(is_array($data)){
				foreach($data as $k => $v){
					$clean_input[$k] = $this->cleanInputs($v);
				}
			}else{
				if(get_magic_quotes_gpc()){
					$data = trim(stripslashes($data));
				}
				$data = strip_tags($data);
				$clean_input = trim($data);
			}
			return $clean_input;
		}		
		
		private function set_headers(){
			header("HTTP/1.1 ".$this->_code." ".$this->get_status_message());
			header("Content-Type:".$this->_contentType);
		}
	}	
?>