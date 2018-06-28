<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class AlibabaWebController extends Controller
{
	protected $all_products;
	protected $all_categories;
	protected $data=[];

    function execute()
    {
	    require('simple_html_dom.php');
		$html = file_get_html('http://www.alibaba.com/Products?spm=a2700.8293689.scGlobalHomeHeader.6.46ce65aaypP5Wz',$offset = 0);
		ini_set('memory_limit', '-1');	
		set_time_limit(3000);
		$allItems = [];
		// fetech all categories
		foreach ($html->find('div.cg-main div.item') as $item) 
		{
	       $value = $item->find('h3.big-title', 0)->plaintext;
	      // echo $value;
	       $items = [];
	       $items["category"] = $value;
	       $subItems = [];
	       foreach($item->find(".sub-item .sub-item-cont-wrapper .sub-item-cont li  a") as $subItem)
	       {
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
		    	$this->getProducts($link, json_encode($allItems)); // get products from that category link
		    }
		    
	    }
	    $website ='http://www.alibaba.com/Products?spm=a2700.8293689.scGlobalHomeHeader.6.46ce65aaypP5Wz';
		$this->addPDB(json_encode($allItems), json_encode($data), $website);
  	}

    function getProducts($link, $allItems)
    {
		$html=file_get_html($link);
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
		   $this->data[]=$product;
		}
		$output = json_encode($this->data);
		echo $output;
	}

	function getCategories()
	{
		require('simple_html_dom.php');
		$html = file_get_html('http://www.alibaba.com/Products?spm=a2700.8293689.scGlobalHomeHeader.6.46ce65aaypP5Wz');
		ini_set('memory_limit', '-1');
		set_time_limit(1000);	
		$allItems = [];
		// fetech all categories
		foreach ($html->find('div.cg-main div.item') as $item) 
		{
	       $value = $item->find('h3.big-title', 0)->plaintext;
	      // echo $value;
	       $items = [];
	       $items["category"] = $value;
	       $subItems = [];
	       foreach($item->find(".sub-item .sub-item-cont-wrapper .sub-item-cont li  a") as $subItem)
	       {
	       	//$subItems[$subItem->innertext] = $subItem->href;
	       	$subItems[]=$subItem->innertext;
	       }
	       $items["children"] = $subItems;
			$allItems[] = $items;
		}
		$cat = json_encode($allItems);
		echo $cat;
	}

	public function addPDB($category,$products,$website){
		$data = new Data;
		$data->category = json_encode($category);
		$data->products = json_encode($products);
		$data->website = json_encode($website);
		$data->save();
	}
}
