<?php
	require('simple_html_dom.php');
	$html = file_get_html('https://www.daraz.pk/');
	ini_set('memory_limit', '-1');
	$allItems = [];
	// fetech all categories
	foreach ($html->find('nav.menu ul.menu-items li.menu-item') as $item) {
       $value = $item->find('span.nav-subTxt', 0)->innertext;
       $items = [];
       $items["category"] = $value;
       $subItems = [];
       foreach($item->find("div.submenu .column .categories a.subcategory") as $subItem){
       	// $subItems[]=$subItem->innertext;
       	$subItems[]=$subItem->href;
       }
       $items["children"] = $subItems;
		$allItems[] = $items;
	}
	
	
	echo json_encode($allItems);

?>