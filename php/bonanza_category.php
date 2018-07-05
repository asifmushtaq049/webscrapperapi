<?php

	require('simple_html_dom.php');
	$html = file_get_html('https://www.bonanza.com/booths/browse_categories');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('#main_wrapper #category_browse_home ') as $item) {
       $value = $item->find('#sidebar_left #shop_by_category .sidebar_content .title_item a', 0)->innertext;
       //echo $value."<br>";
       $items = [];
       $items["category"] = $value;
       $subItems = [];
       foreach($item->find("#main_right .category_group_container .sub_category_list a") as $subItem){
       	$subItems[] = $subItem->href;
       	//$subItems[]=$subItem->innertext;
       }
       $items["children"] = $subItems;
		$allItems[] = $items;
	}
	 echo json_encode($allItems);


?>