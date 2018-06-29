<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class WebController extends Controller
 {
//     protected $data=[];

// 	protected $all_products=[];
// 	protected $all_categories=[];
	
// 	protected $sub_categories=[];
// 	protected $sub_products=[];

 	function scrapDaraz()
 	{
	 	require('simple_html_dom.php');
		$html = file_get_html('https://www.daraz.pk/');
		ini_set('memory_limit', '-1');
		set_time_limit(3000);
	
		// fetech all categories
		foreach ($html->find('nav.menu ul.menu-items li.menu-item') as $item) {
	       $value = $item->find('span.nav-subTxt', 0)->innertext;
	 
	       $cat_items["category"]=$value;
	       $prod_items["category"]=$value;

	       foreach($item->find("div.submenu .column .categories a.subcategory") as $subItem){
	       	$sub_products[] = $subItem->href;
	       	$sub_categories[] = $subItem->innertext;
	       }

	       $cat_items["children"]=$sub_categories;
	       $prod_items["children"]=$sub_products;

	       $all_categories[]=$cat_items;
	       $all_products[]=$prod_items;

	       echo json_encode($all_categories);
		}

		$upper_loop=0;
		$count=0;
		$products="";

		foreach($all_products as $row) 
		{
			if($upper_loop==2){
				break;
			}
			else{
				foreach($row['children'] as $link) 
		    	{
			    	if($count==5){
			    		break;
			    	}
			    	else{
				    	$products.= $this->getDarazProducts($link, json_encode($all_products)); // get products from that category link
				    	$count++;
			    	}
		    	}
		    	$upper_loop++;
			}
	    }

	    $website ='www.daraz.pk';
		$this->insert(json_encode($all_categories), $products, $website);
 	}


    // function to get products from daraz.pk
	function getDarazProducts($link,$products){
		$html=file_get_html($link);
		$data=[];
		foreach( $html->find("div.sku") as $products ) 
		{
			$product=[];
		    // $title=$products->find('h2 > span.name',0)->innertext;
		    // $product['Title']=$title;
		    $brand=$products->find('h2 > span.brand',0)->innertext;
		    $product['Brand']=$brand;
		    $price=$products->find('span.price',0)->plaintext;
		    $product['Price']=$price;
		    $image=$products->find('img[class=lazy]',0)->{'data-src'};
		    $product['Image']=$image;
		    
		    $data[]=$product;
			
		}
		$output = json_encode($data);
		echo $output;
		return $output;
	}


    function scrapAlibaba()
    {
	    require('simple_html_dom.php');
		$html = file_get_html('http://www.alibaba.com/Products?spm=a2700.8293689.scGlobalHomeHeader.6.46ce65aaypP5Wz',$offset = 0);
		ini_set('memory_limit', '-1');	
		set_time_limit(3000);

		// fetch all categories
		foreach ($html->find('div.cg-main div.item') as $item) 
		{
	       $value = $item->find('h3.big-title', 0)->plaintext;
	       $cat_items["category"]=$value;
	       $prod_items["category"]=$value;

	       foreach($item->find(".sub-item .sub-item-cont-wrapper .sub-item-cont li  a") as $subItem)
	       {
	       	
	       	$sub_products[] = $subItem->href;
	       	$sub_categories[] = $subItem->innertext;
	       }
	       
	       $cat_items["children"]=$sub_categories;
	       $prod_items["children"]=$sub_products;

	       $all_categories[]=$cat_items;
	       $all_products[]=$prod_items;

	       echo json_encode($all_categories);
		}

		$upper_loop=0;
		$count=0;
		$products="";

		foreach($all_products as $row) 
		{
			if($upper_loop==2){
				break;
			}
			else{
				foreach($row['children'] as $link) 
		    	{
			    	if($count==5){
			    		break;
			    	}
			    	else{
				    	$products.= $this->getAlibabaProducts($link, json_encode($all_products)); // get products from that category link
				    	$count++;
			    	}
		    	}
		    	$upper_loop++;
			}
	    }
	    $website ='www.alibaba.com';
		$this->insert(json_encode($all_categories), $products, $website);
  	}

    function getAlibabaProducts($link, $allItems)
    {
		$html=file_get_html($link);
		foreach( $html->find(".m-gallery-product-item .item-main") as $products ) 
		{
			$product=[];
		    $title=$products->find('.item-info .title  a',0)->innertext;
		    $product['title']=$title;
		    $image=$products->find('.item-img a>img',0)->{'src'};
		    $product['image']=$image;
		   $this->data[]=$product;
		}
		$output = json_encode($this->data);
		echo $output;
		return $output;
	}

    public function scrapEbay()
    {
	    require('simple_html_dom.php');
		$html = file_get_html('https://www.ebay.com/v/allcategories');
		ini_set('memory_limit', '-1');	
		set_time_limit(3000);
		// fetech all categories
		foreach ($html->find('.all-categories .category-section') as $item) 
		{
	       $value = $item->find('.left-section a>h2.ttl', 0)->innertext;
	       //echo $value."<br>";
	      $cat_items["category"]=$value;
	      $prod_items["category"]=$value;

	       foreach($item->find(".right-section .sub-category a") as $subItem)
	       {
	       	 	$sub_products[] = $subItem->href;
	       		$sub_categories[] = $subItem->innertext;
	       		
	       		foreach($subItem->find('span') as $e)
	                  {
	                      $e->outertext = '';
	                  }
	       }
	       $cat_items["children"]=$sub_categories;
	       $prod_items["children"]=$sub_products;

	       $all_categories[]=$cat_items;
	       $all_products[]=$prod_items;
		}

		//show categories
		echo json_encode($all_categories);

		$upper_loop=0;
		$count=0;
		$products="";
		foreach($all_products as $row) 
		{
			if($upper_loop==2){
				break;
			}
			else{
				foreach($row['children'] as $link) 
		    	{
			    	if($count==5){
			    		break;
			    	}
			    	else{
				    	$products.= $this->getEbayProducts($link); // get products from that category link
				    	$count++;
			    	}
		    	}
		    	$upper_loop++;
			}
	    }
	    $website ='www.ebay.com';
		$this->insert(json_encode($all_categories), $products, $website);
  	}


    // function to get products
	function getEbayProducts($link){
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
		    $data[]=$product;
		}
		$output = json_encode($data);
		echo $output;
		return $output;
	}


	public function insert($category,$products,$website){
		$data = new Data;
		$data->category = json_encode($category);
		$data->products = json_encode($products);
		$data->website = json_encode($website);
		$data->save();
	}
}