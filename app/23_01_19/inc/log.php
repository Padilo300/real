<?php	
	function writeToLog($data, $title = 'Dump') {
		$log = "\n------------------------\n";
		$log .= date("Y.m.d G:i:s") . "\n";
		$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
		$log .= print_r($data, 1);
		$log .= "\n------------------------\n";
		file_put_contents(getcwd() . '/log/'.date("y-m-d").'.log', $log, FILE_APPEND);
	return true;
	}

	function printLog($data, $title = 'Dump') {
		echo "$title:<br>";
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

?>

<style type="text/css">
	pre {
	    display: block;
	    padding: 9.5px;
	    margin: 0 0 10px;
	    font-size: 13px;
	    line-height: 1.42857;
	    word-break: break-all;
	    word-wrap: break-word;
	    /*color: #848f9e;*/
	    color: transparent;
	    background-color: #f5f5f5;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	}
</style>
