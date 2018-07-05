<?php
	require('simple_html_dom.php');
	
	  $html = file_get_html('https://www.whatmobile.com.pk/');
	  echo $html;
	  $html = $html->find('#container .verticalMenu');

	    foreach($html->find('#container .verticalMenu section') as $item)
	    {
	    	echo $item."<br>";
    	  $value = $item->find('h3', 0)->innertext;
          $items = [];
          $items["category"] = $value;
          $subItems = [];
    	 
	      foreach($item->find('ul li a') as $subItem)
	      {
	      	  
		   $subItems[]=$subItem->innertext;
	      }
	      $items["children"] = $subItems;
   	      $allItems[] = $items;
	     
	        
	        
	    }
	    echo json_encode($allItems);
	    
	  
	

?>