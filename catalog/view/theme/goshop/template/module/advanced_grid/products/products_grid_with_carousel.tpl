<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$idsk = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');

if(count($module['content']['products']) == 6) { $class = 2; $all = 6; }
if(count($module['content']['products']) == 5) { $class = 25; $all = 5; }
if(count($module['content']['products']) == 3) { $class = 4;  $all = 3; }
if(count($module['content']['products']) == 2) { $class = 6; $all = 2; }
if(count($module['content']['products']) == 1) { $class = 12; $all = 1; } ?>

<div class="box2">
  <?php if($module['content']['title'] != '') { ?>
  <div class="box-heading"><?php echo html_entity_decode($module['content']['title']); ?></div>
  <?php } ?>
  
  <!-- Carousel nav -->
  <a class="next" href="#myCarousel<?php echo $idsk; ?>" id="myCarousel<?php echo $idsk; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $idsk; ?>" id="myCarousel<?php echo $idsk; ?>_prev"><span></span></a>
  
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel<?php echo $idsk; ?>">
    	     <div class="owl-carousel">
         		<?php foreach ($module['content']['products'] as $product) { ?>
     	    		<div class="item">
     	    			<div class="product-grid"><?php include('catalog/view/theme/'.$config->get($config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?></div>
     	    		</div>
         		<?php } ?>
    		</div>
     </div>
   </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var owl<?php echo $idsk; ?> = $(".box2 #myCarousel<?php echo $idsk; ?> .owl-carousel");
	
  $("#myCarousel<?php echo $idsk; ?>_next").click(function(){
      owl<?php echo $idsk; ?>.trigger('owl.next');
      return false;
    })
  $("#myCarousel<?php echo $idsk; ?>_prev").click(function(){
      owl<?php echo $idsk; ?>.trigger('owl.prev');
      return false;
  });
    
  owl<?php echo $idsk; ?>.owlCarousel({
     items : 2
   });
});
</script>
<?php } ?>