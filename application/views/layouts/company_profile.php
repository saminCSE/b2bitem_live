
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="preload" href="https://b2bitem.com/public/frontend/css/bootstrap.min.css" as="style" />
    <link rel="preload" as="image" href="https://b2bitem.com/public/frontend/biz-images/b2bitem-import-export.gif" />
    <title>B2B Marketplace for Importers, Exporters and Manufacturers - Largest B2B Business Platform</title>
    
     <link rel="canonical" href="https://b2bitem.com" /> 
   
   <!--  <link rel="icon" type="image/x-icon" href="https://b2bitem.com/public/images/fav.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/frontend/css/googlefonts.css">
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121345574-1" type="d257963e33dac07492b9d6fd-text/javascript"></script>
    <script type="d257963e33dac07492b9d6fd-text/javascript">
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-121345574-1');
    </script>
    <script type="d257963e33dac07492b9d6fd-text/javascript">
      window._mfq = window._mfq || [];
      (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript";
        mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/a1f1aadc-00f2-4c6b-904d-cbc3668b3d15.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script>
    <script type="text/javascript" src="<?=base_url();?>public/frontend/js/jquery-3.4.1.min.js"></script>
  </head>
  <body>
    <div class="desktop-view-nav mb-3">
      <nav class="navbar navbar-expand-lg biz-header">
        <div class="container custom-container">
          <div class="scroll-show-item">
            <div class="d-flex align-items-center">
              <div class="header-single-menu-drop dropdown mr-2">
                <a href="#" class="btn btn-sm" data-toggle="dropdown">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
                </a>
                <div class="dropdown-menu rounded-0">
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-home link-icon"></i>
                    </span> Home </a>
                  <a href="<?=site_url('product');?>" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-cube link-icon"></i>
                    </span> Products </a>
                  <a href="<?=site_url('website/business_directory');?>" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-list-ul link-icon"></i>
                    </span> Business Directory </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-eraser link-icon"></i>
                    </span> B2B Leads </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="mr-2">
                      <i class="fa fa-industry link-icon"></i>
                    </span> Companies </a>
                </div>
              </div>
              <a class="navbar-brand small-brand" href="#">
                <!-- <img src="https://b2bitem.com/public/logo/b2bitem-logo-small.jpg" class="img-fluid"> -->
                B2BITEM
              </a>
            </div>
          </div>
          <a class="navbar-brand" href="#">
            B2BITEM
            <!-- <img src="https://b2bitem.com/public/logo/b2bitem-logo.jpg" class="img-fluid"> -->
          </a>
          <!-- <ul class="nav navbar-nav flex-row flex-nowrap align-items-center order-lg-10 ml-auto">
            <li class="nav-item mr-2">
              <a href="<?=site_url('website/user_login');?>" class="nav-link text-them">
                <span class="ml-2">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('website/join_fee');?>" class="d-block text-nowrap text-14 text-medium text-white py-0 px-2 rounded btn-join-free">Join Free</a>
            </li>
          </ul> -->
          <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#header">
            <i class="fa fa-bars"></i>
          </button>
          <!-- <div class="collapse navbar-collapse" id="header">
            <div class="d-flex justify-content-between w-100">
              <div class="d-flex flex-wrap mx-auto">
                <div class="biz-header-search mr-3">
                  <form method="get" action="#">
                    <div class="biz-header-search-group">
                      <input type="text" name="keyword" value="" title="Start search here" id="searchKeyword" placeholder="Search..." required aria-label="keyword">
                      <button type="submit" class="btn text-nowrap search-btn">Search</button>
                    </div>
                  </form>
                </div>
                <div class="nav-item dropdown">
                  <a href="#" title="'Post Buy Requirement" class="btn btn-dark bg-theme">Post Buy Requirement</a>
                </div>
              </div>
              <div>
                <ul class="nav navbar-nav flex-row flex-nowrap nav-on-responsive">
                  <li class="nav-item dropdown mr-2">
                    <a href="#" class="nav-link text-nowrap text-theme">Sell More</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </nav>
      
    </div>
    
    <div class="sticky-top">
      <div class="company-header bg-white py-3">
        <div class="container custom-container">
          <div class="d-flex align-items-lg-center">
            <div class="mr-3">
              <a href="#" class="company-navbar-brand ">
                <img src="#" alt="" title="" class="img-fluid" decoding="async" loading="lazy">
              </a>
            </div>
            <div class="ml-auto" style="margin-left: 0px !important;">
              <h1 class="text-lg-down-16 text-lg-28 text-strong text-right">
                <a href="#" class="text-dark" id="com_header"></a>
              </h1>
              <p class="m-0 text-strong text-muted text-13 text-right">
                <i class="icofont-google-map"></i> <span id="com_address"></span>
              </p>
            </div>

          </div>
        </div>
      </div>
	  <?php $com_slag = $this->session->userdata('com_slag'); ?>
      <nav class="navbar navbar-expand company-menubar py-0 mb-4">
        <div class="container custom-container">
          <div class="collapse navbar-collapse" id="companyMenu">
            <ul class="navbar-nav company-nav-menu">
              <li class="nav-item  active ">
                <a class="nav-link text-white" href="<?=site_url('company/' .$com_slag);?>">Home</a>
              </li>
              <li class="nav-item ">
			  
                <a class="nav-link text-white" href="<?=site_url('company/product/' .$com_slag);?>">Products</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

<style type="text/css">
  .slidecom{
    margin-bottom: 40px;
    margin-top: -24px;
  }
</style>

    <div class="com_slider">
        <div class="row">
            <div class="col-md-12">
                <div class="slidecom">
                    <img style="width: 100%;" src="https://blog.bydrec.com/hubfs/7%20Ways%20Working%20with%20a%20Nearshore%20Software%20Development%20Team%20Will%20Benefit%20Your%20Company.jpg">
                </div>
            </div>
        </div>
    </div>
	
    <main class="main-body">
		<?php echo $content_for_layout; ?>
    </main>
	
    <footer class="footer py-0">
      <section class="py-3 bg-black">
        <div class="container custom-container">
          <p class="text-center text-thin text-14 text-white m-0">@B2B-ITEM | All Rights Reserved</p>
        </div>
      </section>
    </footer>
    
    
    <script src="<?=base_url();?>public/frontend/js/popper.min.js"></script>
    <script src="<?=base_url();?>public/frontend/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>public/frontend/js/main.js"></script>
  </body>
</html>