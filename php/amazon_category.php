<?php

	require('simple_html_dom.php');
	$html = file_get_html('https://www.amazon.com/gp/site-directory/ref=nav_shopall_btn');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('.fsdContainer .fsdColumn .fsdDeptBox') as $item) 
       {
              $value = $item->find('h2.fsdDeptTitle', 0)->innertext;
              //echo $value."<br>";
              $items = [];
              $items["category"] = $value;
              $subItems = [];
                     foreach($item->find(".fsdDeptCol a") as $subItem)
                     {
                     	$subItems[] = "https://www.amazon.com/".$subItem->href;
                     	//$subItems[]=$subItem->innertext;
                     }
              $items["children"] = $subItems;
       	$allItems[] = $items;
	}

	echo json_encode($allItems);


?>