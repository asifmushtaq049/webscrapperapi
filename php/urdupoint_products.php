<?php
	require('simple_html_dom.php');
  $html = file_get_html('https://www.urdupoint.com/mobile/');
  ini_set('memory_limit', '-1');
  $allItems = [];
  // fetech all categories
  foreach ($html->find('.nav--main .hassub ul li a') as $item) 
  {
 
  $subItems=$item->href;
 
  $allItems[] = $subItems;
  }
	 

	foreach($allItems as $link) 
	{
	    // echo $link;
	    // break;
	    getProducts($link); // get products from that category link
	    
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find(".main_bar .name_list_box ul a") as $products ) 
		{
			$product=[];
		    $title=$products->find('p',0)->plaintext;
		    $product['Title']=$title;
		    $price=$products->find('p.txt_green',0)->innertext;
		    $product['Price']=$price;
		    $image=$products->find('span img',0)->{'src'};
		    $product['Image']=$image;
		    
		    
		    $data[]=$product;
		    
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>