<?php
	require('simple_html_dom.php');
  $html = file_get_html('http://www.mobile-phone.pk/');
  ini_set('memory_limit', '-1');
  $allItems = [];
  // fetech all categories
  foreach ($html->find('#main-contents #right-container-temp2 .table .table_contents a') as $item) 
  {
    
    $allItems[]=$item->href;
   
  }
	 

	foreach($allItems as $row) 
	{
	    
	    getProducts($row); // get products from that category link
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find(".center_mobs .home_page_blocks") as $products ) 
		{
			$product=[];
		    $title=$products->find('a .block_link',0)->plaintext;
		    $product['title']=$title;
		    // $price=$products->find('a+span',0)->innertext;
		    // $product['price']=$price;
		    $image=$products->find('a img',0)->{'src'};
		    $product['image']=$image;
		    
		    $data[]=$product;
		    
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>