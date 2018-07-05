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

	foreach($allItems as $row) 
	{
	    foreach($row['children'] as $key => $link) 
	    {
	    	getProducts($link); // get products from that category link
	    }
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find("div.sku") as $products ) 
		{
			$product=[];
		    // $title=$products->find('h2 > span.name',0)->innertext;
		    // $product['Title']=$title;
		    $brand=$products->find('h2 > span.brand',0)->innertext;
		    $product['Brand']=$brand;
		    $price=$products->find('span.price',0)->plaintext;
		    $product['Price']=$price;
		    $image=$products->find('img[class=lazy]',0)->{'data-src'};
		    $product['Image']=$image;
		    
		    $data[]=$product;
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>