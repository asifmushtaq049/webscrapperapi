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
       	$subItems[] = $subItem->href;
       	//$subItems[]=$subItem->innertext;
       }
       $items["children"] = $subItems;
		$allItems[] = $items;
	}
	foreach($allItems as $row) 
	{
	    foreach($row['children'] as $link) 
	    {
	    	//echo $link;
	    	getProducts($link); // get products from that category link
	    	
	    }
	    
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find(".m-gallery-product-item .item-main") as $products ) 
		{
			$product=[];
		    $title=$products->find('.item-info .title  a',0)->innertext;
		    $product['title']=$title;
		    $image=$products->find('.item-img a>img',0)->{'src'};
		    $product['image']=$image;
		    // $price=$products->find('.item-info .pmo .price b',0)->innertext;
		    // $product['price']=$price;
		    // $category=$products->find('h2 > span.brand',0)->innertext;
		    // $product['category']=$category;
		    // $link = $products->find('a.link',0)->href;
		    // $product['link']=$link;
		    $data[]=$product;
		    
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>