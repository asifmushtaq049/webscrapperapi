<?php

	require('simple_html_dom.php');

	// Create DOM from URL or file
	$html = file_get_html('https://www.daraz.pk/');
ini_set('memory_limit', '-1');
	// creating an array of elements
	
	$allItems = [];
	// Find top ten videos
	$i = 1;
	foreach ($html->find('#menuFixed ul.menu-items > li.menu-item') as $item) {
	       $value = $item->find('span.nav-subTxt', 0)->innertext;
			$items = [];
	       $items["category"] = $value;
	       // echo $value ."<br />";
	       $subItems = [];
	       foreach($item->find(".submenu .column .categories a") as $subItem){
	       	$subItems[] = $subItem->innertext;
	       }
	       $items["children"] = $subItems;
			$allItems[] = $items;
	}
	echo json_encode($allItems);
?>

<?php
	require('simple_html_dom.php');
	$html=file_get_html("https://www.daraz.pk/smartphones/samsung/");
	$data=[];
	foreach( $html->find("div.sku") as $products ) 
	{
	    $product = [];
	    $source=$products->find('img[class=lazy]',0)->{'data-src'};
	    $product['image'] = str_replace('"', '', $source); 
	    $brand=$products->find('h2 > span.brand',0)->innertext;
	    $product['brand'] = str_replace('"', '', $brand);
	    $name=$products->find('h2 > span.name',0)->innertext;
	    //echo str_replace('"', "", $name);
	    $product['title'] = trim($name,'"');
	    $price=$products->find('span.price',0)->innertext;
	    $product['price'] = str_replace('"', '', $price);
		$data[]= $product;
	}
	$output = json_encode($data);
	insert into tablename values($output);
?>