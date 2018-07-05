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
       	$subItems[] = $subItem->href;
       	// $subItems[]=$subItem->innertext;
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
		foreach( $html->find("li.s-item") as $products ) 
		{
			$product=[];
		    $title=$products->find('a .s-item__title',0)->plaintext;
		    $product['Title']=$title;

		    $image=$products->find('.s-item__image-img',0)->{'src'};
		    $product['Image']=$image;

		    $price=$products->find('.s-item__details .s-item__detail span.s-item__price',0)->innertext;
		     $product['Price']=$price;
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