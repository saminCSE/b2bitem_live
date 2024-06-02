<?php


 ?>
     <div class="container custom-container">
        <ol class="breadcrumb page-breadcrumb-customize">
          <li class="breadcrumb-item">
            <a href="https://b2bitem.com">B2bitem</a>
          </li>
          <li class="breadcrumb-item">
            <a href="https://b2bitem.com/product">Products</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url('category/' . $pinfo['link_prefix']);?>"><?=$pinfo['category_name'];?></a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url('subcategory/' . $pinfo['sub_link_prefix']);?>"><?=$pinfo['sub_category_name'];?></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><?=$pinfo['product_name'];?></li>
        </ol>
      </div>
      <section class="product-details">
        <div class="container custom-container">
          <div class="mb-4">
            <div class="row">
              <div class="col-lg-8 col-xl-12">
                <div class="theme-block p-3 p-lg-4 h-100">
                  <h1 class="text-18 text-md-26 text-strong mb-3 d-lg-none">
                    <?=$pinfo['product_name'];?>
                  </h1>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-0">
                      <div class="box-ratio box-ratio-1by1">
                        <div class="box-ratio-content">
                          <a href="#viewProductImages" data-target="#viewProductImages" class="d-block primary-img-box target-scroll-top">
                            <?php if(!empty($pinfo['product_image'])){ ?>
                            <img src="https://b2bitem.com/upload/product/<?=$pinfo['product_image'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" id="primaryImg">
                          <?php } ?>
                          </a>
                        </div>
                      </div>
                      <div class="mt-4">
                        <ul class="list-unstyled row small-gutters mb-0 secondary-img-list">
                          <?php if(!empty($pinfo['product_image'])){ ?>
                          <li class="col-3 mb-2">
                            <div class="box-ratio box-ratio-1by1 secondary-img-item cursor">
                              <img src="https://b2bitem.com/upload/product/<?=$pinfo['product_image'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" class="secondary-img" decoding="async" loading="lazy">
                            </div>
                          </li>
                          <?php } ?>
                          <?php foreach ($pgalary as $key => $v) { ?>
                          <li class="col-3 mb-2">
                            <div class="box-ratio box-ratio-1by1 secondary-img-item cursor">
                              <img src="https://b2bitem.com/upload/product/<?=$v['product_pic'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" class="secondary-img" decoding="async" loading="lazy">
                            </div>
                          </li>
                          <?php  } ?>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-8">
                      <div>
                        <div class="d-flex justify-content-between">
                          <h1 class="text-18 text-md-26 text-strong mb-4 d-lg-down-none">
                            <?=$pinfo['product_name'];?>
                            </h1>
                            
                        </div>
                        <div class="table-responsive">
							<p>
                               <?=$pinfo['short_description'];?>
                            </p>
                          <table class="table table-sm table-bordered product-summery-table">
                            <tbody>
                             
                               <tr>
                                <td>QTY</td>
                                <td class="min_order_unit"> <?=$pinfo['min_order_qty'];?> <?=$pinfo['unit'];?> </td>
                              </tr>
                              <tr>
                                <td>Price</td>
                                <td class="price_info"><?=$pinfo['price'];?></td>
                              </tr>
                              <tr>
                                <td>Model</td>
                                <td class="price_info"><?=$pinfo['model_no'];?></td>
                              </tr>
							   <tr>
                                <td>Standard</td>
                                <td class="price_info"><?=$pinfo['standard'];?></td>
                              </tr>
                              <tr>
                                <td>Category</td>
                                <td>
                                  <a href="#" class="mr-1"><?=$pinfo['category_name'];?></a>
                                  <span class="mx-1">
                                    <i class="fa fa-angle-right"></i>
                                  </span>
                                  <a href="#"><?=$pinfo['sub_category_name'];?> Care</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          

          <div class="bg-white info-box p-3 p-lg-4 mb-4" id="productMoreInformation">
            <div class="product-info">
              <div class="row sibling-info-table-border">

                 <style type="text/css">
                    
                    nav > .nav.nav-tabs{

                      border: none;
                      

                    }
                   
                    nav > div a.nav-item.nav-link,
                    nav > div a.nav-item.nav-link.active
                    {
                        border: none;
                        background-color: #f7f7f7;
                        padding: 10px 25px;
                        margin: 0.5rem;
                       
                    }

                    .sibling-info-table-border > div:nth-child(2n+1)::after, .sibling-info-table-border > li:nth-child(2n+1)::after
                    {

                      background-color: white !important;
                    }

                   
                    .tab-content{
                       width: 100% !important;
                        line-height: 25px;
                        padding:10px !important;
                    }

                    nav > div a.nav-item.nav-link:hover,
                    nav > div a.nav-item.nav-link:focus
                    {
                        border: none;
                        background: #e74c3c;
                        color:#fff;
                        border-radius:0;
                        transition:background 0.20s linear;
                    }    
                  </style>
                  <nav>
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Specification</a>

                       <a class="nav-item nav-link" id="nav-pusages-tab" data-toggle="tab" href="#nav-pusages" role="tab" aria-controls="nav-pusages" aria-selected="false">Product Usages</a>

                       <a class="nav-item nav-link" id="nav-keywords-tab" data-toggle="tab" href="#nav-keywords" role="tab" aria-controls="nav-keywords" aria-selected="false">Product Keywords</a>

                       <a class="nav-item nav-link" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="false">Product Gallery</a>

                       <a class="nav-item nav-link" id="nav-sproduct-tab" data-toggle="tab" href="#nav-sproduct" role="tab" aria-controls="nav-sproduct" aria-selected="false">Supplier Product</a>

                      <a class="nav-item nav-link" id="nav-sprofile-tab" data-toggle="tab" href="#nav-sprofile" role="tab" aria-controls="nav-sprofile" aria-selected="false">Supplier Profile</a>
                     
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                     
                    </div>
                  </nav>
                  <div style="display: block;clear: both;"></div>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="row">
                        <div class="col-md-12">
                            
                            <h2 class="text-20 text-lg-26 text-theme"> <?=$pinfo['product_name'];?></h2>
                            <p> <?=$pinfo['product_description'];?></p>

                        </div>      
                      </div>


                    </div>
					
					<div class="tab-pane fade" id="nav-pusages" role="tabpanel" aria-labelledby="nav-pusages-tab">
                      <div class="row">
                        <div class="col-md-12">
                            <p> <?=$pinfo['product_usage'];?></p>
                        </div>      
                      </div>
                    </div>
					
					<div class="tab-pane fade" id="nav-keywords" role="tabpanel" aria-labelledby="nav-keywords-tab">
                      <div class="row">
                        <div class="col-md-12">
                            <p> <?=$pinfo['product_keywords'];?></p>
                        </div>      
                      </div>
                    </div>
					
					<div class="tab-pane fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
                      <div class="row">
                        <div class="col-md-12">
                            
							<div class="p-lg-4 lazy-load-box">
							  <ul class="row list-unstyled lazy-list mb-0 mb-lg-3">
								<?php if(!empty($pinfo['product_image'])) { ?>
								<li class="col-md-4 mb-4 mb-lg-5 d-block" id>
								  <div class="bg-white p-3 border-lg-down">
									<img src="https://b2bitem.com/upload/product/<?=$pinfo['product_image'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" class="img-fluid" decoding="async" loading="lazy">
								  </div>
								</li>
							  <?php } ?>
								<?php foreach ($pgalary as $key => $vv) { ?>
								<li class="col-md-4 mb-4 mb-lg-5 d-block" id>
								  <div class="bg-white p-3 border-lg-down">
									<img src="https://b2bitem.com/upload/product/<?=$vv['product_pic'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" class="img-fluid" decoding="async" loading="lazy">
								  </div>
								</li>
								 <?php  } ?>
							  </ul>
							</div>
							
							
                        </div>      
                      </div>
                    </div>
					
					<div class="tab-pane fade" id="nav-sproduct" role="tabpanel" aria-labelledby="nav-sproduct-tab">
                      <div class="row">
                        <div class="col-md-12">
                            <?php 
								$plist = $this->websitemodel->get_company_product_list($pinfo['cid']);
							?>
							<div class="bg-lg-white p-lg-4 border-lg">
							  <ul class="list-unstyled row mb-0">
								<?php

									foreach($plist as $v){
								?>
								
								<li class="col-sm-6 col-lg-3 mb-4">
								  <div class="product-card border h-100">
									<div class="product-header mb-2">
									  <a href="#" class="product-title" title="<?=$v['product_name'];?>"> <?=$v['product_name'];?> </a>
									</div>
									<a href="#" class="product-img-box box-ratio-4by3 mb-2">
									  <img src="https://b2bitem.com/upload/product/<?=$v['product_image']?>" alt="<?=$v['product_name'];?>" title="<?=$v['product_name'];?>" class="product-img" decoding="async" loading="lazy">
									</a>
									
									
								  </div>
								</li>
									<?php } ?>
								
							  </ul>
							</div>
                        </div>      
                      </div>
                    </div>
					
					<div class="tab-pane fade" id="nav-sprofile" role="tabpanel" aria-labelledby="nav-sprofile-tab">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="theme-block h-100" style="border:none;">
								  <div>
									<h4 class="d-lg-none mb-3 text-business-primary text-strong border-bottom pb-2"> Supplier Info :</h4>
									<h4 class="text-18 text-lg-22">
									  <a href="#" class="d-block text-strong">
									  <?=$pinfo['company_name'];?>
									  </a>
									</h4>
									<p class="text-muted mb-2">
									  <?php if(!empty($pinfo['flag'])){ ?>
									  <img src="https://b2bitem.com/upload/country/16_16/<?=$pinfo['flag'];?>" alt="France" class="mr-1"> 
									<?php } ?>
									  Cote-d&#039;Or, <?=$pinfo['country_name'];?>
									</p>
									<p>
									<?=$pinfo['description'];?>
									</p>
									
									<p class="mb-2">
									  <span>Year Established:</span> <?=$pinfo['year_of_stablishment'];?>
									</p>
									<div class="mb-2">
									  <p class="text-strong text-strong mb-1">Business Type:</p>
									  <ul class="d-flex flex-wrap pl-3">
										<li class="text-muted mr-4 mb-2">Manufacturer</li>
										<li class="text-muted mr-4 mb-2">Wholesaler</li>
									  </ul>
									</div>
									<div class="mb-3">
									  <span class="d-flex mb-3 align-items-center">
										<span class="box-30 border rounded-circle bg-light-white mr-2">
										  <i class="fa fa-phone mr-2 text-13"></i>
										</span>
										<span class="text-muted">
										  <span data-toggle="modal" data-target="#popupLoginFormModal" class="cursor"> <?=$pinfo['mobile'];?> </span>
										</span>
									  </span>
									  <a href="#" class="d-flex mb-3 align-items-center">
										<span class="box-30 border rounded-circle bg-light-white mr-2">
										  <i class="icofont-crop mr-2 text-13"></i>
										</span>
										<span class="text-muted-to-link text-17">View all products</span>
									  </a>
									  <a href="#" class="d-flex mb-3 align-items-center">
										<span class="box-30 border rounded-circle bg-light-white mr-2">
										  <i class="icofont-bar-code mr-2 text-13"></i>
										</span>
										<span class="text-muted-to-link text-17">View Company Profile</span>
									  </a>
									</div>
								  </div>
								</div>
							
                        </div>      
                      </div>
                    </div>
                   
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        
                      <div class="row" style="float: left;width: 100%;">
                        <div class="col-md-12">
                            <div class="card rounded-0 mb-4 specification">
                              <div class="card-header bg-white d-flex justify-content-between">
                                <h5 class="text-strong text-muted m-0">Send Your Message to: <a href="https://b2bitem.com/ecllat-paris" title="View Company Details" class="text-info">
                                    <span class="text-strong"><?=$pinfo['company_name'];?></span>
                                  </a>
                                </h5>
                              </div>

                              <div class="card-body bg-white">
                                  <div class="biz-form px-lg-5 py-lg-4">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="6IAc9fKColymscQ52UydixIdL4QWaJcefDOvbl0X">
                                      <input type="hidden" name="inquiry_to" value="seller">
                                      <input type="hidden" name="item_id" value="34279">
                                      <input type="hidden" name="item_type" value="product">
                                      <div class="biz-form">
                                        <div class="row mx-lg-n4 justify-content-lg-center">
                                          <div class="col-lg-3 px-lg-4">
                                            <div class="form-group">
                                            <?php if(!empty($pinfo['product_image'])) { ?>
                                              <img src="https://b2bitem.com/upload/product/<?=$pinfo['product_image'];?>" alt="<?=$pinfo['product_name'];?>" title="<?=$pinfo['product_name'];?>" class="img-thumbnail mx-auto d-block" decoding="async" loading="lazy">
                                            <?php } ?>
                                            </div>
                                          </div>
                                          <div class="col-lg-7 px-xl-5">
                                            <div class="form-group">
                                              <div>
                                                <input type="text" name="subject" value placeholder="Biomarine Eye Cream" class="form-control deep-placeholder numeric-validation" data-check-subject="true">
                                               
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div>
                                                <textarea rows="5" name="mail_body" class="form-control deep-placeholder" placeholder="Enter your inquiry details such as product name, color, size, quantity, pricing etc"></textarea>
                                               
                                              </div>
                                            </div>
                                            <div class="mb-3">
                                              <div class="py-2 mb-2">
                                                <div class="custom-control custom-radio custom-control-inline my-1">
                                                  <input type="radio" class="custom-control-input user-existence-checker" id="existingUserToggler" name="member_type" value="existing">
                                                  <label class="custom-control-label text-strong text-muted" for="existingUserToggler">Existing Member</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline my-1 mr-0">
                                                  <input type="radio" class="custom-control-input user-existence-checker" id="newUserToggler" name="member_type" value="new">
                                                  <label class="custom-control-label text-strong text-muted" for="newUserToggler">New Member</label>
                                                </div>
                                                <div>
                                                  <!--span class="error">
                                                    <i class="fa fa-warning"></i> This field is required </span-->
                                                </div>
                                              </div>
                                              <div class="user-existence-togglable" id="existingUser">
                                                <div class="user-form mb-4">
                                                  <div class="form-group row">
                                                    <label class="col-lg-3">Email Address <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                      <input type="email" name="email" value class="form-control" placeholder="Email Address">
                                                    </div>
                                                  </div>
                                                  <div class="form-group row">
                                                    <label class="col-lg-3">Password <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-9">
                                                      <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="user-existence-togglable" id="newUser">
                                                <div class="mb-4">
                                                  <h6> Account Information </h6>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none">I am <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <div class="auth-input-group">
                                                      <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                          <input type="radio" name="business_type" value="2" class="form-check-input "> Seller </label>
                                                      </div>
                                                      <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                          <input type="radio" name="business_type" value="1" class="form-check-input"> Buyer </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none" for="company">Company Name <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <input type="text" name="company" id="company" value class="form-control" placeholder="Company Name">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none" for="country">Country <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <select name="country" id="country" class="form-control">
                                                      <option value>-- Select Country --</option>
                                                      <option value="18">Afghanistan</option>
                                                      
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none">Contact Person <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <div class="d-flex">
                                                      <div class="mr-3">
                                                        <select name="contact_person_name_title" id="contact_person_name_title" class="form-control mw-100px">
                                                          <option value="Mr." selected> Mr. </option>
                                                          <option value="Ms."> Ms. </option>
                                                        </select>
                                                      </div>
                                                      <div class="w-100">
                                                        <input type="text" name="name" value class="form-control" placeholder="Your Name">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none">Email <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <input type="email" name="registration_email" value class="form-control" placeholder="Email Address">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none">Phone <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <div class="d-flex">
                                                      <div class="mr-3">
                                                        <input type="text" name="phone_code" value id="phone_code" class="form-control mw-50px" readonly>
                                                      </div>
                                                      <div class="w-100">
                                                        <input type="text" name="phone" id="phone" value class="form-control prevent-first-zero numeric-validation" aria-errormessage="Phone Number" placeholder="Phone Number">
                                                        <span class="phone-error"></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-lg-3 d-lg-down-none" for="registration_password">Password <span class="text-danger">*</span>
                                                  </label>
                                                  <div class="col-lg-9">
                                                    <input type="password" name="registration_password" id="registration_password" value class="form-control" placeholder="Password" autocomplete="new-password">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-lg-9 offset-lg-3">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" checked required>
                                                      <label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms"> I Agree to Business Listing <a href="https://b2bitem.com/terms" target="_blank" class="text-business-tertiary">Terms & General Agreement</a>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="text-center">
                                              <button type="submit" class="btn btn-info px-5 btn-md-down-small">
                                                <i class="fa fa-envelope-o mr-2"></i> Send Message </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>


                            </div>
                          </div>
                        </div>



                    </div>
                   
                  </div>
                
              </div>
            </div>
          </div>

          <div class="mb-4">
            <div class="mb-3">
              <h2 class="title-with-square-box">Related Products</h2>
            </div>
            <div class="position-relative">
              <div class="preloader related-product-preloader">
                <span class="loader"></span>
              </div>
              <ul class="list-unstyled row mb-0">
                <?php 
				//	echo '<pre>';print_r($relatedproduct);exit;
				foreach ($relatedproduct as $key => $val) { ?>
                <li class="col-sm-6 col-lg-4 col-xl-3 mb-4">
                  <div class="product-card border h-100">
                    <div class="product-header mb-2">
                      <div class="d-flex flex-wrap text-14 mb-2">
                        <a href="<?=site_url('category/index/' . $val['link_prefix']);?>" class="category-title"> <?=$val['category_name'];?> </a>
                        <span class="text-muted px-1">/</span>
                        <a href="#" class="category-title"> <?=$val['sub_category_name'];?> </a>
                      </div>
                      <a href="<?=site_url('product/view/' . $val['pslag']);?>" class="product-full-title" title="<?=$val['product_name'];?>"> <?=$val['product_name'];?> </a>
                    </div>
                    <a href="<?=site_url('product/view/' . $val['pslag']);?>" class="product-img-box box-ratio-4by3 mb-2">
                      <?php if(!empty($val['product_image'])){ ?>
                      <img src="https://b2bitem.com/upload/product/<?=$val['product_image'];?>" alt="<?=$val['product_name'];?>" title="<?=$val['product_name'];?>" class="product-img" decoding="async" loading="lazy">
                     <?php } ?>
                    </a>
                    <div class="d-flex mb-2">
                      <?php if(!empty($val['flag'])){ ?>
                      <span class="mr-2">
                        <img src="https://b2bitem.com/upload/country/16_16/<?=$val['flag'];?>" class="flag">
                      </span>
                      <?php } ?>
                      <a href="<?=site_url('company/index/' . $val['com_slag']);?>" class="text-overflow-ellipsis"> <?=$val['country_name'];?> </a>
                    </div>
                    <div class="mb-3">
                      <ul class="list-unstyled d-flex flex-wrap justify-content-between mb-0">
                        <li class="text-14 text-muted mr-2"> Price: <?=$val['price'];?> / <?=$val['unit'];?></li>
                        <li class="text-14 text-muted"> MOQ: <?=$val['min_order_qty'];?> <?=$val['unit'];?></li>
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
      </section>
	  
	  <script>
$(document).ready(function(){
 
 //alert('hello');
 $(".biz-menu li").removeClass("active");
  $(".biz-menu li:nth-child(2)").addClass("active");
});
</script>
    