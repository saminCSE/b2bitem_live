<section id="com_profile">
        <div class="container custom-container">
          <div class="row">
            <div class="col-lg-12 col-xl-12">
             
             
                <div class="col-lg-12 col-xl-12">
                  <h2 class="title-with-square-box text-lg-26 pt-1">Products from  <?=$info['company_name'];?> </h2>
                </div>
                <div class="bg-lg-white p-lg-4 border-lg">
                  <ul class="list-unstyled row mb-0">
                    <?php

						foreach($plist as $v){
					?>
					
					<li class="col-sm-6 col-lg-3 mb-4">
                      <div class="product-card border h-100">
                        <div class="product-header mb-2">
                          <div class="mb-2">
                            <a href="<?=site_url('category/' . $v['link_prefix']);?>" class="category-title"> <?=$v['category_name'];?> </a>
                          </div>
                          <a href="<?=site_url('product/view/'.$v['pslag']);?>" class="product-title" title="<?=$v['product_name'];?>"> <?=$v['product_name'];?> </a>
                        </div>
                        <a href="<?=site_url('product/view/'.$v['pslag']);?>" class="product-img-box box-ratio-4by3 mb-2">
                          <img src="https://b2bitem.com/upload/product/<?=$v['product_image']?>" alt="<?=$v['product_name'];?>" title="<?=$v['product_name'];?>" class="product-img" decoding="async" loading="lazy">
                        </a>
                        <div class="mb-3">
                          <ul class="list-unstyled d-flex flex-wrap justify-content-between mb-0">
                            <li class="text-14 text-muted mr-2">Price: <?=$v['price']?> / </li>
                            <li class="text-14 text-muted">MOQ: <?=$v['min_order_qty']?>  <?=$v['unit']?></li>
                          </ul>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end align-items-center">
                          <a href="#" class="btn btn-sm btn-thin btn-outline-b2bmap-secondary mr-3">
                            <i class="fa fa-envelope"></i>
                          </a>
                          <a href="<?=site_url('product/view/'.$v['pslag']);?>" class="btn btn-sm btn-thin btn-outline-b2bmap-primary hover-fill-btn">
                            <i class="fa fa-eye"></i> Quick View </a>
                        </div>
                      </div>
                    </li>
						<?php } ?>
					
                  </ul>
                </div>
             
            </div>
          </div>
        </div>
      </section>


<script>
$(document).ready(function(){
  
   
	
	$(".company-navbar-brand img").removeAttr("src");
	
	
	<?php if(!empty($info['banner'])){ ?>
	$(".com_slider .slidecom img").removeAttr("src");
	
	var srcimg = 'https://b2bitem.com/upload/company/<?=$info['banner'];?>';
	$(".com_slider .slidecom img").attr("src", srcimg);
	<?php } ?>
	
	<?php if(!empty($info['logo'])){ ?>
	
	
	
	var srcimg = 'https://b2bitem.com/upload/company/<?=$info['logo'];?>';
	$(".company-navbar-brand img").attr("src", srcimg);
	<?php } ?>
	
	
	<?php if(empty($info['logo'])){ ?>
	
	var srcimg = 'https://sources-com-bd-bucket.s3.ap-south-1.amazonaws.com/images/company-logo/default-logo.png';
	$(".company-navbar-brand img").attr("src", srcimg);
	<?php } ?>
	
	
  
});
</script>