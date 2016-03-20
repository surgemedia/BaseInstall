<?php 
function addComponent($files = Array()){
			// $files['template'];
			// $files['styles'];
			// $files['vars'];
			//
			$var = $files['vars'];
			//get css list
			$files['concatStyles'];
			for ($i=0; $i < sizeof($files['styles']); $i++) { 
				//add into on string
				$files['concatStyles'] = " ".file_get_contents('./dist/styles/'.$files['styles'][$i]);
			}
			if(sizeof($files['concatStyles']) > 0) {
				//echo styles if have
				echo '<style type="text/css">';
					include($files['concatStyles']);
				echo '</style>';
			}
			//echo template
			include($files['template']));
			unset($files);
			unset($vars);
			}
			 ?>

		<?php 

addComponent([
	'template'=>'',
	'styles'=>[],
	'vars'=>[],
	])



		 ?>