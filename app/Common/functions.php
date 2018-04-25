<?php 
	
	/**
	* 
	*/
	function showStatus($sta){
		switch ($sta) {
			case '1':
				return '开启';
				break;
			
			case '0':
				return '关闭';
				break;
		}
	};


 ?>