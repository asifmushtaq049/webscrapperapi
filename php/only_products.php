<?php
	 require('simple_html_dom.php');
  $html = file_get_html('https://www.chinaonline.pk/allcategories-listing/');
  //echo $html;
  ini_set('memory_limit', '-1');
  $allItems = [];
  // fetech all categories
  foreach ($html->find('.em-wrapper-main .all-category ul.category-grid li.category-item') as $item) 
  {
    
   $value = $item->find('a',0)->plaintext;
   $items = [];
   $items["category"] = $value;
   $subItems = [];
     foreach($item->find("ul li a") as $subItem)
     {
      //$subItems[]=$subItem->plaintext;
      $subItems[]=$subItem->href;
     }
   $items["children"] = $subItems;
   $allItems[] = $items;
  }
	 

	foreach($allItems as $link) 
	{
	    
	    getProducts($link); // get products from that category link
	    
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find(".wrapper-main .container + div .em-col-main ul li .product-item") as $products ) 
		{
			$product=[];
		    $title=$products->find('.product-shop p a',0)->plaintext;
		    $product['Title']=$title;
		    $price=$products->find('.product-shop .price-box .special-price .price',0)->plaintext;
		    $product['Price']=$price;
		    $image=$products->find('.top-product-shop a img',0)->{'src'};
		    $product['Image']=$image;
		    
		    
		    $data[]=$product;
		    
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>