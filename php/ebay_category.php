<?php

	require('simple_html_dom.php');
	$html = file_get_html('https://www.ebay.com/v/allcategories');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('.all-categories .category-section') as $item) {
       $value = $item->find('.left-section a>h2.ttl', 0)->innertext;
       //echo $value."<br>";
       $items = [];
       $items["category"] = $value;
       $subItems = [];
       foreach($item->find(".right-section .sub-category a") as $subItem){
       	//$subItems[] = $subItem->href;
              foreach($subItem->find('span') as $e)
                  {
                      $e->outertext = '';
                  }

       	$subItems[]=$subItem->innertext;
       }
       $items["children"] = $subItems;
		$allItems[] = $items;
	}
	 echo json_encode($allItems);


?>