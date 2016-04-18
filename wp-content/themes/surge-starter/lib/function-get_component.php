<?php 
/*=====================================
=            Add Component            =
=====================================*/
//Example Use
// get_component([
// 		'template' => 'components/page-header',
// 		'vars' => [
//					'title Var'
//					]
// ]);
function get_component($files = Array()){
			/*================================
			=            Varibles            =
			================================*/
			$styleDir = ''; //where is you css dir (optional)
			$compDir = ''; //where are your comps (optional)
			$errors = []; //empty error array what be be filled.
			
			if(isset($files['vars'])){
				$vars = $files['vars']; //gets vars
			}
			$return_string = false; //echo by default
			if( isset($files['return_string'])){
				$return_string = $files['return_string'];
			}
			ob_start(); //start object buffer 
			$component = include(locate_template($compDir.$files['template'].'.php')); //instead of echoing it, its stored 
			$component = ob_get_clean(); //set var to the stored buffer ( i believe this flats the vars)
			/*=================================================
			=    Add Inline Scoped Styles (Optional)            =
			=================================================*/
			$files['concatStyles'] = NULL;
			if(isset($files['styles'])){
				for ($i=0; $i < sizeof($files['styles']); $i++) { 
					//add into on string and add to bucket
					$files['concatStyles'] .= " ".file_get_contents($styleDir.$files['styles'][$i].'.css');
				}
			}
			/*=================================================
			=       Filter out tags you don't want            =
			=================================================*/
			if(isset($files['remove_tags']) && sizeof($files['remove_tags']) > 0){
				$tags = [];
				for ($i=0; $i < sizeof($files['remove_tags']); $i++) { 
					array_push($tags, '<'.$files['remove_tags'][$i].'>');
					array_push($tags, '</'.$files['remove_tags'][$i].'>');
				}
				$component = str_replace($tags, "", $component);
			}
			/*================================================
			=            Return Comp or Echo Comp            =
			================================================*/
			if(true == $return_string){
				return $component; //dont echo it allow it to be returned later;
			} else {
				echo $component;
			}
			unset($files); // unset file array
			unset($vars); //unset vars so no population
			}
?>