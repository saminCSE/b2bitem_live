<section id="com_profile">
        <div class="container custom-container">
          <div class="row">
            <div class="col-lg-12 col-xl-12">
              <div class="card rounded-0 bg-white mb-4">
                <div class="card-header d-flex justify-content-between bg-white">
                  <h3 class="text-strong text-muted text-lg-22 m-0 d-md-none">Company Description</h3>
                  <h3 class="text-strong text-muted text-lg-22 d-md-down-none m-0">About <?=$info['company_name'];?></h3>
                </div>
                <div class="card-body bg-white">
                  <div class="clean-link">
                    <p><?=$info['description'];?></p>
                  </div>
                  <!-- <div class="mt-4 text-center">
                    <a href="#" class="btn btn-outline-b2bmap-primary btn-md-down-small px-5">
                      <i class="fa fa-envelope-o mr-2"></i> Contact Us </a>
                  </div> -->
                </div>
              </div>

              <div class="row">
                   <div class="col-md-6">
              <div class="card rounded-0 bg-white mb-4" style="height: 449px;">
                <div class="card-header bg-white">
                  <h3 class="text-strong text-muted text-lg-22 m-0">Member Information</h3>
                </div>
                <div class="card-body bg-white">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless w-auto mb-0">
                          <tbody>
                            <tr>
                              <td class="text-deep-muted">Business Type</td>
                              <td class="px-2">:</td>
                              <td>
                                <ul class="list-inline mb-0">
									
									<?php 
									
										 $type =  $this->sellermodel->get_biz_type();
										 foreach ($type as $key => $v) {
										  $selelec_type = explode(',', $info['type']);
										  if( in_array($v['id'], $selelec_type)){
											$select = 'checked';
										  }else{
											continue;
										  }
									?>
								
                                  <li class="list-inline-item text-nowrap mb-1 text-deep-muted">
                                    <span class="text-12 mr-1 d-md-down-none">
                                      <i class="fa fa-check"></i>
                                    </span> <?=$v['type'];?>
                                  </li>
										 <?php } ?>
                                </ul>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-deep-muted">Founded in</td>
                              <td class="px-2 text-deep-muted">:</td>
                              <td class="text-deep-muted"><?=$info['year_of_stablishment'];?></td>
                            </tr>
                            <tr>
                              <td class="text-deep-muted">Employees</td>
                              <td class="px-2 text-deep-muted">:</td>
                              <td class="text-deep-muted"><?=$info['num_of_employee'];?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="table-responsive">
                        <table class="table table-sm table-borderless w-auto mb-0">
                          <tbody>
                            <tr>
                              <td class="text-deep-muted">Member Since</td>
                              <td class="px-2 text-muted">:</td>
                              <td class="text-deep-muted"><?=$info['join_date'];?></td>
                            </tr>
                            <tr>
                              <td class="text-deep-muted">Membership Status</td>
                              <td class="px-2 text-muted">:</td>
                              <td class="text-deep-muted">Free Member</td>
                            </tr>
                            <tr>
                              <td class="text-deep-muted">Business Category</td>
                              <td class="px-2 text-deep-muted">:</td>
                              <td class="text-deep-muted"> Electronics &amp; Electrical </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>
               <div class="col-md-6">


              <div class="card rounded-0 bg-white mb-4">
                <div class="card-header bg-white">
                  <h3 class="text-strong text-muted text-lg-22 m-0">Company Overview</h3>
                </div>
                <div class="card-body bg-white">
                  <div class="d-md-table d-company-info-table w-100">
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell">
                        <span class="d-md-none">
                          <i class="icofont-building-alt"></i>
                        </span>
                        <span class="d-md-down-none text-nowrap">Company Name:</span>
                      </div>
                      <div class="d-md-table-cell"><?=$info['company_name'];?> </div>
                    </div>
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell">
                        <span class="d-md-none">
                          <i class="fa fa-cog"></i>
                        </span>
                        <span class="d-md-down-none text-nowrap">Business Type:</span>
                      </div>
                      <div class="d-md-table-cell">
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item mb-1 text-nowrap">
                            <i class="icofont-check-alt mr-1 d-md-down-none"></i> Manufacturer
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell">
                        <span class="d-md-none">
                          <i class="fa fa-phone"></i>
                        </span>
                        <span class="d-md-down-none text-nowrap">Contact Number:</span>
                      </div>
                      <div class="d-md-table-cell">
                        <span data-toggle="modal" data-target="#popupLoginFormModal" class="cursor"><?=$info['mobile'];?></span>
                      </div>
                    </div>
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell">
                        <span class="d-md-none">
                          <i class="icofont-google-map"></i>
                        </span>
                        <span class="d-md-down-none text-nowrap">Register Address:</span>
                      </div>
                      <div class="d-md-table-cell"><?=$info['company_address'];?></div>
                    </div>
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell text-nowrap">
                        <span>Zip Code:</span>
                      </div>
                      <div class="d-md-table-cell"><?=$info['post_code'];?></div>
                    </div>
                    <div class="d-flex d-md-table-row">
                      <div class="d-md-table-cell text-nowrap">
                        <span>Country:</span>
                      </div>
                      <div class="d-md-table-cell">
                        <a href="#"><?=$info['country_name'];?></a>
                      </div>
                    </div>
                    <div class="d-md-table-row">
                      <div class="d-md-table-cell text-nowrap pb-0 pb-md-2">Main Products:</div>
                      <div class="d-md-table-cell pt-1 pt-md-2"><?=$info['main_product'];?></div>
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>

            </div>
          </div>


            <div class="mb-4">
                <div class="mb-3">
                  <h2 class="title-with-square-box text-lg-26 pt-1">Category from <?=$info['company_name'];?> </h2>
                </div>
                <div class="bg-lg-white p-lg-4 border-lg">
                  <ul class="list-unstyled row mb-0">
				  
					<?php foreach($com_cat as $val){ ?>
                    <li class="col-sm-6 col-lg-3 mb-4">
                      <div class="product-card border h-100">
                        <div class="product-header mb-2">
                          <div class="mb-2" style="text-align: center;">
                            <a href="<?= site_url('category/index/'.$val['link_prefix']);?>" class="category-title"><?=$val['category_name'];?></a>
                          </div>
                        </div>
                        <a href="#" class="product-img-box box-ratio-4by3 mb-2">
                          <img src="https://b2bitem.com/upload/category/<?=$val['cat_img'];?>" alt="<?=$val['category_name'];?>" title="<?=$val['category_name'];?>" class="product-img" decoding="async" loading="lazy">
                        </a>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>

              <div class="mb-4">
                <div class="mb-3">
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
                            <a href="#" class="category-title"> <?=$v['category_name'];?> </a>
                          </div>
                          <a href="#" class="product-title" title="<?=$v['product_name'];?>"> <?=$v['product_name'];?> </a>
                        </div>
                        <a href="#" class="product-img-box box-ratio-4by3 mb-2">
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
                          <a href="#" class="btn btn-sm btn-thin btn-outline-b2bmap-primary hover-fill-btn">
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
        </div>
      </section>


<script>
$(document).ready(function(){
  
    //$("body a").removeAttr("href");
	
	
	$("#com_header").text('<?=$info['company_name'];?>');
	
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