<?php
 
class MAIN_JS_INCLUDE { 

	private $main_js_array;
	private $bootstrap_datepicker_js_array;


    public function __construct() {

        $this->main_js_array=array(
       		"js" =>array (
       			'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'
       			,'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
       		)
       		,
       		"css" =>array (
       			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
       		)

       	);

        $this->bootstrap_datepicker_js_array=array(
       		"js" =>array (
       			'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js'
       			,'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.zh-TW.min.js'
       		)
       		,
       		"css" =>array (
       			'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css'
       			,'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.standalone.min.css'
       		)
        );
    }


    public function RUN($action) {


    	switch ($action) {
    		case 'main':
    				$inc_js_array = $this->main_js_array;
    			break;
    		case 'bootstrap_datepicker':
    				$inc_js_array = $this->bootstrap_datepicker_js_array;
    			break;
    		default:
    				return 'error controller , $action .';
    			break;
    	}



    	foreach ($inc_js_array as $key => $array) {
    		foreach ($array as $value) {
    			switch ($key) {
    				case 'js':
    						echo "<script src='{$value}' charset='UTF-8'></script>\n";
    					break;
    				case 'css':
    						echo "<link href='{$value}' rel='stylesheet' type='text/css'>\n";
    					break;

    			}

    		}
    		
    	}
    	
    }


} 

$MAIN_JS_INCLUDE = new MAIN_JS_INCLUDE;


?>