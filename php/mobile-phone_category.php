<?php
  require('simple_html_dom.php');
  $html = file_get_html('http://www.mobile-phone.pk/');
  ini_set('memory_limit', '-1');
  $allItems = [];
  // fetech all categories
  foreach ($html->find('#main-contents #right-container-temp2 .table') as $item) 
  {
    
   $value = $item->find('.table_tittle',0)->plaintext;
   $items = [];
   $items["category"] = $value;
   $subItems = [];
     foreach($item->find(".table_contents a") as $subItem)
     {
      $subItems[]=$subItem->plaintext;
      //$subItems[]=$subItem->href;
     }
   $items["children"] = $subItems;
   $allItems[] = $items;
  }
  
  
  echo json_encode($allItems);

?>