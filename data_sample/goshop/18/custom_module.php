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
      1 => '<div class="overflow-payments2">
     <div id="owl-example2" class="owl-carousel customfooter-payments">
          <div class="item"><a href="#"><img src="image/catalog/payment2-1.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-2.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-4.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-3.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-1.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-2.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-4.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-3.png" alt="Payment"></a></div>
     </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
     $("#owl-example2").owlCarousel({
         items : 5,
         navigation : true,
         navigationText : ["←","→"],
    });
});
</script>',
      $language_id => '<div class="overflow-payments2">
     <div id="owl-example2" class="owl-carousel customfooter-payments">
          <div class="item"><a href="#"><img src="image/catalog/payment2-1.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-2.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-4.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-3.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-1.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-2.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-4.png" alt="Payment"></a></div>
          <div class="item"><a href="#"><img src="image/catalog/payment2-3.png" alt="Payment"></a></div>
     </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
     $("#owl-example2").owlCarousel({
         items : 5,
         navigation : true,
         navigationText : ["←","→"],
    });
});
</script>',
    ),
    'layout_id' => '1',
    'position' => 'customfooter_bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
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
      1 => '<div class="service">
     <div class="row">
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-delivery.png" alt="Delivery"></div>
               </div>
               
               <p class="first-heading">Fast delivery</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
          
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-money-back.png" alt="Money back"></div>
               </div>
               
               <p class="first-heading">100% money back</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
          
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-support.png" alt="Support"></div>
               </div>
               
               <p class="first-heading">Awesome support</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
     </div>
</div>',
      $language_id => '<div class="service">
     <div class="row">
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-delivery.png" alt="Delivery"></div>
               </div>
               
               <p class="first-heading">Fast delivery</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
          
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-money-back.png" alt="Money back"></div>
               </div>
               
               <p class="first-heading">100% money back</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
          
          <div class="col-sm-4">
               <div class="left">
                    <div class="icon"><img src="image/catalog/icon-support.png" alt="Support"></div>
               </div>
               
               <p class="first-heading">Awesome support</p>
               <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
          </div>
     </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "custom_module", $output );	

?>