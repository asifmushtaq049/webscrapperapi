

<?php
  require('simple_html_dom.php');
  $html = file_get_html('https://www.tajori.pk/collections/best-watches-for-men-in-pakistan');
  //echo $html;
  ini_set('memory_limit', '-1');
  $allItems = [];
  // fetech all categories
  foreach ($html->find('.main-content .shopify-section .widget .widget-content ul li') as $item) 
  {
    
   $value = $item->find('a',0)->plaintext;
   $items = [];
   $items["category"] = $value;
   $subItems = [];
     foreach($item->find("ul li a") as $subItem)
     {
      $subItems[]=$subItem->plaintext;
      //$subItems[]=$subItem->href;
     }
   $items["children"] = $subItems;
   $allItems[] = $items;
  }
  
  
  echo json_encode($allItems);

?>