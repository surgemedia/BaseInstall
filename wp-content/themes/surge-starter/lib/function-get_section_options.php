<?php 
function get_section_options($vars){
	
	$search = array_search("show_advanced", array_keys($vars));
	$tempVars = array_slice($vars, $search);
	$sizeof = sizeof($tempVars);
	foreach ($tempVars as $key => $value) {
    		if(is_array($tempVars[$key])){
    					if(isset($tempVars[$key][0])){
                $tempVars[$key] = $tempVars[$key][0];
                }
    		}	
	    }
	    // debug($tempVars);
	  //Section Options

	
	$section_classes = 'class="'.$vars['section'].' '.$tempVars['border'].' '.$tempVars['background_color'].' '.$tempVars['section_width'].' '.$tempVars['padding'].' '.$tempVars['margin'].' '.$tempVars['text_align'].'"';
	
	$section_id = (!empty($tempVars['id']))?'id="'.$tempVars['id'].'"': '';
	
	$section_style = (!empty($tempVars['background_image'])) ?
		'style="background-image:url('.$tempVars['background_image'].');"'
		: '';


	    return $section_id.' '.$section_classes.' '.$section_style;
    };
