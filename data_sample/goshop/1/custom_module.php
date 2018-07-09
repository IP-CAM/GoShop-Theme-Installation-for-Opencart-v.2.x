<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="clearfix row row-without-padding main-banners hidden-xs hidden-sm">
     <div class="col-sm-4">
          <div class="description">
               <div class="first-heading">MEN <span>$350</span></div>
               <p>Bikes, Clothing, and many more...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-01.png" alt="Banner">
     </div>
     
     <div class="col-sm-4">
          <div class="description">
               <div class="first-heading">WOMEN <span style="color: #f1613d">$250</span></div>
               <p>Bikes, Clothing, Accessories and many more...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-02.png" alt="Banner">
     </div>
     
     <div class="col-sm-4">
          <div class="description left">
               <div class="first-heading" style="color: #383f30">BIKE’S <span style="color: #eef1c9">$550</span></div>
               <p style="color: #525a46">All Famous Bike Brands<br>Only for you...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-03.png" alt="Banner">
     </div>
</div>',
      $language_id => '<div class="clearfix row row-without-padding main-banners hidden-xs hidden-sm">
     <div class="col-sm-4">
          <div class="description">
               <div class="first-heading">MEN <span>$350</span></div>
               <p>Bikes, Clothing, and many more...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-01.png" alt="Banner">
     </div>
     
     <div class="col-sm-4">
          <div class="description">
               <div class="first-heading">WOMEN <span style="color: #f1613d">$250</span></div>
               <p>Bikes, Clothing, Accessories and many more...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-02.png" alt="Banner">
     </div>
     
     <div class="col-sm-4">
          <div class="description left">
               <div class="first-heading" style="color: #383f30">BIKE’S <span style="color: #eef1c9">$550</span></div>
               <p style="color: #525a46">All Famous Bike Brands<br>Only for you...</p>
               <a href="#" class="button">Shop now</a>
          </div>     
          <img src="image/catalog/banner-03.png" alt="Banner">
     </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '2',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="box">
     <div class="box-heading">Special offers</div>
     <div class="second-heading">Special price only this month</div>
     <div class="box-content">
          <div class="special-offers row">
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-1.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-2.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">BREEZER SQUALL 1.0</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-3.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-3.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">BREEZER SQUALL 1.0</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-1.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-2.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>',
      $language_id => '<div class="box">
     <div class="box-heading">Special offers</div>
     <div class="second-heading">Special price only this month</div>
     <div class="box-content">
          <div class="special-offers row">
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-1.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-2.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">BREEZER SQUALL 1.0</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-3.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-3.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">BREEZER SQUALL 1.0</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-1.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-4">
                    <div class="product">
                         <div class="image"><a href="index.php?route=product/product&product_id=43"><img src="image/catalog/product-2.png" alt="Product"></a></div>
                         <div class="right">
                              <p>Mountain bike</p>
                              <div class="name"><a href="index.php?route=product/product&product_id=43">GT SENSOR COMP 27.5</a></div>
                              <div class="price">Price: <span class="price-new">$299.00</span> <span class="price-old">$599.00</span></div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '6',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => 'Test',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p>Example</p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners">
 <div class="col-sm-12"><a href="#"><img src="image/catalog/banner-04.png" alt="Image"></a></div>
 </div>',
      $language_id => '<div class="row banners">
 <div class="col-sm-12"><a href="#"><img src="image/catalog/banner-04.png" alt="Image"></a></div>
 </div>',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '3',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>