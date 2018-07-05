<?php

	require('simple_html_dom.php');
	$html = file_get_html('https://www.gsmarena.com/');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('#body .sidebar .brandmenu-v2 ul li a') as $item) 
  {
              
    $value = $item->innertext;    
    $items['Category']=$value;
    
    $allItems[] = $items;
	}



	echo json_encode($allItems);


?>