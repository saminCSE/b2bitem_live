 <div class="container custom-container">
        <div class="d-flex justify-content-between">
          <ol class="breadcrumb page-breadcrumb-customize">
            <li class="breadcrumb-item">
              <a href="https://b2bitem.com/">B2bitem</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
          <div class="text-muted d-lg-none pl-2">
            <button type="button" data-toggle="aside" data-target="#asideNav" class="text-nowrap text-muted text-14 py-0 px-1 bg-transparent border-0 no-focus">
              <i class="fa fa-list-ul text-14 mr-2" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>

 <section class="mb-4">
    <div class="container custom-container">
      <div class="p-3 p-lg-4 px-lg-5 bg-white border border-lg-left-8">
        <div class="row align-items-center">
          <div class="col-lg-8 col-xl-9">
            <div class="border-lg-right pr-lg-5">
              <h1 class="mb-2 text-theme text-strong pr-lg-5 text-lg-down-20">B2Bitem Product Directory</h1>
              <div class="border-bottom my-2 d-lg-none"></div>
              <h3 class="text-18 text-lg-22 text-theme line-height-150 mb-lg-0"> B2Bitem product directory offers improved visibility, targeted audience engagement, increased inquiries and sales, brand awareness, competitive advantage, and access to new markets. These benefits can contribute to the growth and success of your business in the B2B marketplace. </h3>
            </div>
          </div>
          <div class="col-lg-4 col-xl-3">
            <div class="pl-lg-5 pl-xl-4">
              <div class="d-sm-inline-block mt-2">
                <a href="https://b2bitem.com/register" class="btn btn-b2bitem-primary btn-md-down-small w-sm-down-100 px-4 mb-1">List Your Product - Free</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="mb-5">
        <div class="container custom-container">
          <div class="row">
            <div class="col-lg-3">
              <aside class="aside-on-responsive" id="asideNav">
                <div class="aside-content">
                  <div class="bg-white border">
                    <div class="border-bottom px-3 py-2">
                      <h3 class="d-flex align-items-center text-strong text-24 m-0">Product Categories</h3>
                    </div>
                    <ul class="list-group list-group-flush m-0">

                       <?php 
                      //echo '<pre>';print_r($product_cat);exit;
                      foreach ($product_cat as $key => $val) {

                        $catname = $val['category_name'];
                        $icon = $val['icon'];
						$slag = $val['link_prefix'];

                        $sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

                    ?>  

                      <li class="list-group-item p-0 dropdown aside-category-item-with-dropdown">
                        <a href="<?=site_url('category/' . $slag);?>" class="bg-white nav-link d-flex py-3">
                          <span class="mr-2">
                            <i class="<?=$icon;?>"></i>
                          </span> <?=$catname;?> <span class="ml-auto pl-2 d-lg-down-none">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                        <div class="dropdown-menu category-menu-dropdown-submenu">
                          <div class="text-20 text-strong mb-3">
                            <a href="#"><?=$catname;?></a>
                          </div>
                          <ul class="list-unstyled row mb-0">

                            <?php 
                              foreach ($sub_cat as $key => $v) {

                              $subcat = $v['sub_category_name'];
							  
							  $subslag = $v['sub_link_prefix'];
                            ?>

                            <li class="col-sm-6 col-lg-4 mb-2">
                              <a href="<?=site_url('subcategory/' . $subslag);?>" class="d-flex d-md-block text-nowrap text-14 text-dark-to-info text-overflow-ellipsis">
                                <span class="mt-n05 mr-2 d-md-none">
                                  <i class="fa fa-circle text-6"></i>
                                </span> <?=$subcat;?> </a>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                      </li>
                       <?php } ?>
                    </ul>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <h2 class="title-with-square-box">Products By Category</h2>
              </div>

               <?php 
                      
                      foreach ($product_cat as $key => $val) {

                        $catname = $val['category_name'];

                        $icon = $val['icon'];
						
						$slag = $val['link_prefix'];

                        $sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

                    ?> 

              <div class="category-group-template mb-4">
                <div class="row no-gutters">
                  <div class="col-lg-3">
                    <a href="<?=site_url('category/' . $slag);?>" class="category-parent text-white d-flex flex-lg-column justify-content-lg-center">
                      <div class="text-20 text-lg-32 text-center mr-2 mr-lg-0 mb-lg-2">
                        <i class="<?=$icon;?>"></i>
                      </div>
                      <span class="text-20 text-lg-24 text-center"><?=$catname;?></span>
                    </a>
                  </div>
                  <div class="col-lg-9">
                    <div class="children-list">
                      <ul class="list-unstyled product-list-subcategory row mb-0">
                        
                        <?php 
                              foreach ($sub_cat as $key => $v) {

                              $subcat = $v['sub_category_name'];
							  
							  $subslag = $v['sub_link_prefix'];

                              if($key > 13){
                                break;
                              }

                            ?>

                        <li class="w-auto col-sm-6 col-lg-4 mb-1">
                          <a href="<?=site_url('subcategory/' . $subslag);?>" class="d-flex d-md-block text-nowrap text-custom-link text-overflow-ellipsis">
                            <span class="mt-n05 mr-2 d-md-none">
                              <i class="fa fa-circle text-6"></i>
                            </span> <?=$subcat;?> </a>
                        </li>

                         <?php } ?>

                        <li class="w-auto col-sm-6 col-md-4 col-lg-3 mb-1">
                          <a href="#">+ More Categories</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container custom-container">
          <div class="mb-4">
            <div class="theme-block h-100">
              <div class="pb-1 border-bottom mb-3">
                <h2 class="d-flex justify-content-between text-roboto text-sm-down-20 text-lg-24"> Product Directory: Products by Name </h2>
              </div>
              <div>
                <ul class="d-flex flex-wrap list-unstyled m-n05 company-list-letter">

                  <li class="p-05 ">
                    <a href="#" class="box-25 btn btn-char text-14">
                      <span class="text">A</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-4">
        <div class="container custom-container">
          <div class="collapse show" id="topCountries">
            <div class="biz-box bg-white mb-4">
              <div class="biz-box-title d-flex justify-content-between mb-3">
                <h2 class="block-text text-md-down-15 text-lg-28">Country Wise Product List</h2>
              </div>
              <div class="biz-box-content">
                <ul class="list-unstyled mb-0 row grid-xl-5">
                  <?php foreach ($country as $key => $v) { ?>
                  <li class="col-6 col-md-4 col-lg-3 mb-3">
					<?php if(!empty($v['flag'])){ ?>
                    <span class="mr-1 mt-n05">
                      <img src="https://b2bitem.com/upload/country/16_16/<?=$v['flag'];?>" alt="<?=$v['country_name'];?>">
                    </span>
					<?php } ?>
                    <a href="#" class="text-strong text-14"><?=$v['country_name'];?></a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

       <section class="mb-4">
        <div class="container custom-container">
          <div class="mb-3">
            <h2 class="title-with-square-box">B2B Product Directory - Latest Products</h2>
          </div>
          <ul class="list-unstyled row m-n2">

            <?php 
                  
                  foreach ($productlist as $key => $v) {

                ?>  

            <li class="col-sm-6 col-md-4 col-lg-3 p-2">
              <div class="bg-white border p-3 h-100">
                <div class="row no-gutters align-items-center">
                  <div class="col-3">
                    <div class="news-image news-image-4x3">
                      <a href="#">
						<?php if(!empty($v['product_image'])){ ?>
                        <img src="https://b2bitem.com/upload/product/<?=$v['product_image'];?>" alt="<?= $v['product_name'];?>" title="<?= $v['product_name'];?>" class="img-fluid" decoding="async" loading="lazy">
						<?php } ?>
                      </a>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="pl-3">
                      <a href="#" class="d-block text-roboto-evening text-14"><?= $v['product_name'];?></a>
                      <div>
						<?php if(!empty($v['flag'])){ ?>
                        <span class="mr-1 mt-n05">
                           <img src="https://b2bitem.com/upload/country/16_16/<?=$v['flag'];?>" alt="<?= $v['country_name'];?>">
                        </span>
						<?php } ?>
                        <a href="#" class="text-13 text-strong text-muted"><?= $v['country_name'];?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
             <?php } ?>
          </ul>
        </div>
      </section>
      <section>
        <div class="container custom-container">
          <div class="theme-block d-md-flex justify-content-between mb-2 py-2 py-xl-1">
            <h3 class="py-2 mb-0 mr-md-2 text-center text-md-left text-md-down-18">Grow Your Business with B2Bitem Product Directory</h3>
            <div class="py-2 text-center">
              <a href="#" class="btn btn-b2bitem-primary btn-sm text-nowrap px-4">List Your Product - FREE</a>
            </div>
          </div>
          <div class="theme-block">
            <p>B2Bitem's product directory offers businesses an excellent platform to showcase their wholesale products at B2B prices. The directory provides a comprehensive list of B2B products, conveniently categorized by industry or category. This structure simplifies the bulk buying process for businesses, allowing them to easily browse and find the products they need.</p>

<p>By listing your products in B2Bitem's online B2B directory, you can unlock a range of benefits for your business. First and foremost, it expands your reach, exposing your products to a broader audience of potential buyers. This increased visibility can lead to more inquiries and sales opportunities, helping to grow your customer base and revenue.</p>

<p>Moreover, B2Bitem's product directory improves the efficiency of the procurement process. Businesses can search listings, compare prices and features, and explore wholesale price items online. This streamlines the purchasing journey and allows buyers to make informed decisions based on their specific needs.</p>

<p>B2Bitem welcomes all types of product manufacturers, suppliers, and exporters to easily list and showcase their products in the B2B product directory. This presents an opportunity to explore new markets, attract new buyers, and improve brand awareness. By signing up and utilizing B2Bitem's product directory, you can leverage its features to drive business growth and reach new heights.</p>

<p>In conclusion, B2Bitem's product directory offers businesses a powerful platform to showcase wholesale products, simplify the buying process, expand reach, increase visibility, and generate more sales opportunities. Take advantage of this opportunity by signing up with B2Bitem today and propel your business forward.</p>
          </div>
        </div>
      </section>


<script>
$(document).ready(function(){
  
    $("#bizMenubar .biz-menu .nav-item").removeClass("active");

    $("#bizMenubar .biz-menu .nav-item:nth-child(3)").addClass("active");
 
});
</script>

<script>
$(document).ready(function(){
 
 //alert('hello');
 $(".biz-menu li").removeClass("active");
  $(".biz-menu li:nth-child(3)").addClass("active");
});
</script>