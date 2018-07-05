<?php

	require('simple_html_dom.php');
	$html = file_get_html('http://www.alibaba.com/Products?spm=a2700.8293689.scGlobalHomeHeader.6.46ce65aaypP5Wz');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('div.cg-main div.item') as $item) {
       $value = $item->find('h3.big-title', 0)->plaintext;
      // echo $value;
       $items = [];
       $items["category"] = $value;
       $subItems = [];
       foreach($item->find(".sub-item .sub-item-cont-wrapper .sub-item-cont li  a") as $subItem){
       	//$subItems[$subItem->innertext] = $subItem->href;
       	$subItems[]=$subItem->innertext;
       }
       $items["children"] = $subItems;
		$allItems[] = $items;
	}
	 echo json_encode($allItems);


?>