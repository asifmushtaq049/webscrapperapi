<?php
	require('simple_html_dom.php');
	$html = file_get_html('https://www.gsmarena.com/');
	ini_set('memory_limit', '-1');	
	$allItems = [];
	// fetech all categories
	foreach ($html->find('#body .sidebar .brandmenu-v2 ul li a') as $item) 
  {
              
    $value = "https://www.gsmarena.com/".$item->href;
    $items = [];
    $items[]=$value;
    $newhtml=file_get_html($value);
    foreach ($newhtml->find('#body .main .nav-pages a') as $link) 
    {
      # code...
      $subitem="https://www.gsmarena.com/".$link->href;
      $items[]=$subitem;
    }
    
    $allItems[] = $items;
	}
	 

	foreach($allItems as $row) 
	{
		
	    foreach($row as $link) 
	    {
	    
	    	getProducts($link); // get products from that category link
	    }
    }
    // function to get products
	function getProducts($link){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find(".main .makers ul li a") as $products ) 
		{
			$product=[];
		    $title=$products->find('strong',0)->plaintext;
		    $product['title']=$title;
		    $image=$products->find('img',0)->{'src'};
		    $product['image']=$image;
		   
		    $data[]=$product;
		    
			
		}
		$output = json_encode($data);
		echo $output;
	}
	
?>