<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$ids = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>

<div class="box">
     <div class="box-heading"><?php echo $module['content']['title']; ?></div>
     <div class="second-heading"><?php echo $module['content']['description']; ?></div>
     <div class="box-content">
          <div class="goshop-filter-products">
          	<div class="goshop-filter-tabs">
          		<ul id="tab<?php echo $ids; ?>">
          			<?php $i = 0; foreach($module['content']['products_tabs'] as $product_tab) {
          				echo '<li'.($i == 0 ? ' class="active"' : '').'><a href="#pko'.$ids.'-'.$i.'">'.$product_tab['name'].'</a></li>';
          			$i++; } ?>
          		</ul>
          	</div>
          	
          	<div class="tab-content clearfix">
          		<?php $s = 0; foreach($module['content']['products_tabs'] as $product_tab) { ?>
          		<div class="tab-pane <?php if($s == 0) { echo 'active'; } ?>" id="pko<?php echo $ids.'-'.$s; ?>">
          			<div class="box-product">
          				<div id="myCarousel<?php echo $ids.'-'.$s; ?>" class="carousel slide">
          					<!-- Carousel items -->
          					<div class="carousel-inner">
          						<?php $i = 0; $row_fluid = 0; foreach ($product_tab['products'] as $product) { $row_fluid++; ?>
          			    			<?php if($i == 0) { echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
          			    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; } else { $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } } ?>
          			    			<div class="col-sm-<?php echo $class; ?> col-xs-6 <?php if($class == 2) { echo 'col-md-25 col-lg-2 col-sm-3 '; } if($class == 2 && $r == 0) { echo 'hidden-md hidden-sm'; } if($class == 2 && $r == 5) { echo 'hidden-sm'; } ?> <?php if($class == 25) { echo 'col-md-25 col-lg-25 col-sm-3 '; } if($class == 25 && $r == 0) { echo 'hidden-sm'; } ?>">
          			    				<?php include('catalog/view/theme/'.$config->get($config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
          			    			</div>
          						<?php $i++; } ?>
          						<?php if($i > 0) { echo '</div></div></div>'; } ?>
          					</div>
          				</div>
          			</div>
          		</div>
          		<?php $s++; } ?>
          	</div>
          </div>
           
          <script type="text/javascript">
          $('#tab<?php echo $ids; ?> a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
          })
          </script>
     </div>
</div>
<?php } ?>