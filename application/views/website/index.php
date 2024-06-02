<section class="banner my-4">
	<div class="container custom-container">
		<div class="theme-block px-lg-5 mb-4">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7 mb-4 mb-md-0">
					<div class="pl-lg-4">
						<h1 class="text-lg-38 text-theme mb-1">B2B marketplace</h1>
						<h1 class="mb-3 text-theme text-strong">Importers and Exporters</h1>
						<h3 class="text-18 text-lg-24 text-theme mb-4 mb-lg-5 line-height-150">B2bItem provide a digital marketplace where businesses can interact, trade, and collaborate. </h3>
						<div>
							<a href="https://b2bitem.com/register" class="btn btn-b2bmap-primary w-md-down-100 text-lg-20 px-5 px-lg-4 py-2">Join Free!</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5">
					<div>
						<!--  <img src="https://b2bitem.com/public/frontend/biz-images/b2bitem-import-export.gif" class="img-fluid mx-auto d-block py-3"> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mb-4">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-3">
				<aside class="aside-on-responsive" id="asideNav">
					<div class="aside-content">
						<div class="bg-white border">
							<div class="border-bottom px-3 py-2">
								<h3 class="d-flex align-items-center text-strong text-24 m-0">Product Categories</h3>
							</div>
							<ul class="list-group list-group-flush m-0 py-2">

								<?php

								foreach ($product_cat as $key => $val) {

									$catname = $val['category_name'];
									$slag = $val['link_prefix'];

									$sub_cat = $this->sellermodel->get_sub_cat_list($val['id']);

								?>
									<li class="list-group-item p-0 dropdown aside-category-item-with-dropdown border-0">
										<a href="<?= site_url('category/' . $slag); ?>" class="nav-link d-flex justify-content-between py-1 text-theme-to-link"> <?= $catname; ?> <span class="ml-2 d-lg-down-none">
												<i class="fa fa-angle-right"></i>
											</span>
										</a>
										<div class="dropdown-menu category-menu-dropdown-submenu mt-n3">
											<div class="text-20 text-strong mb-3"> <?= $catname; ?> </div>
											<ul class="list-unstyled row mb-0">
												<?php
												foreach ($sub_cat as $key => $v) {

													$subcat = $v['sub_category_name'];

													$subslag = $v['sub_link_prefix'];
												?>
													<li class="col-sm-6 col-lg-4 mb-2">
														<a href="<?= site_url('subcategory/' . $subslag); ?>" class="d-flex d-md-block text-nowrap text-14 text-theme text-overflow-ellipsis">
															<span class="mt-n05 mr-2 d-md-none">
																<i class="fa fa-circle text-6"></i>
															</span> <?= $subcat; ?> </a>
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
				<div class="d-flex justify-content-between mb-2">
					<h2 class="title-with-square-box">Featured Products</h2>
					<div class="text-muted d-lg-none pl-2">
						<button type="button" data-toggle="aside" data-target="#asideNav" class="text-nowrap text-muted text-14 py-0 px-1 bg-transparent border-0 no-focus">
							<i class="fa fa-list-ul text-14 mr-2" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<div>
					<ul class="list-unstyled row mb-0">

						<?php

						$fplist = $this->websitemodel->get_cat_prodcut_list_for_heme();
						foreach ($fplist as $key => $v) {

						?>

							<li class="col-sm-6 col-lg-4 col-xl-3 mb-4">
								<div class="product-card border h-100">
									<div class="product-header mb-2">
										<div class="mb-2">
											<!--a href="<?= site_url('category/index/' . $v['link_prefix']); ?>" class="category-title text-14 text-muted-to-theme">
                          <?= $v['category_name']; ?>
                          </a-->
											<a href="<?= site_url('category/' . $v['link_prefix']); ?>" class="category-title text-14 text-muted-to-theme">
												<?= $v['category_name']; ?>
											</a>
										</div>
										<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="product-title" title="<?= $v['product_name']; ?>">
											<?= substr($v['product_name'], 0, 22); ?>...
										</a>
									</div>
									<a href="<?= site_url('product/view/' . $v['pslag']); ?>" class="product-img-box box-ratio-4by3 mb-2">
										<img src="https://b2bitem.com/upload/product/<?= $v['product_image']; ?>" alt="<?= $v['product_image']; ?>" title="<?= $v['product_image']; ?>" class="product-img" decoding="async" loading="lazy">
									</a>
									<div class="mb-2">
										<div class="d-flex">
											<?php if (!empty($v['flag'])) { ?>
												<span class="mr-1 mt-n05">

													<img src="http://b2bitem.com/upload/country/16_16/<?= $v['flag']; ?>" alt="<?= $v['country_name']; ?>">
												</span>
											<?php } ?>
											<a href="<?= site_url('company/' . $v['com_slag']); ?>" class="text-overflow-ellipsis"><?= $v['company_name']; ?></a>

										</div>
									</div>
									<div>
										<ul class="list-unstyled d-flex flex-wrap justify-content-between mb-0">
											<li class="text-14 text-muted mr-2">Price: <?= $v['price']; ?> USD / <?= $v['unit']; ?></li>
										</ul>
									</div>
								</div>
							</li>

						<?php } ?>

					</ul>
					<div class="bg-white px-3 py-1 border">
						<div class="row small-gutters">
							<div class="col-sm-6 col-lg-4">
								<div class="py-2">
									<div class="d-flex align-items-center">
										<div class="mr-2">
											<div class="grow-icon-group box-50">
												<div class="grow-icon-main after-none">
													<div class="grow-icon-out"></div>
													<i class="icofont-search-2"></i>
												</div>
											</div>
										</div>
										<div class="text-18 text-lg-16">Get Found by Buyers</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="py-2">
									<div class="d-flex align-items-center">
										<div class="mr-2">
											<div class="grow-icon-group box-50">
												<div class="grow-icon-main after-none">
													<div class="grow-icon-out"></div>
													<i class="fa fa-cube"></i>
												</div>
											</div>
										</div>
										<div class="text-18 text-lg-16">Showcase Your Product</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="py-2">
									<div class="d-flex align-items-center">
										<div class="mr-2">
											<div class="grow-icon-group box-50">
												<div class="grow-icon-main after-none">
													<div class="grow-icon-out"></div>
													<i class="fa fa-line-chart"></i>
												</div>
											</div>
										</div>
										<div class="text-18 text-lg-16">Sell More - Grow Fast</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container custom-container mb-4">
	<div class="row">
		<div class="col-lg-6 mb-4 mb-lg-0">
			<div class="bg-white biz-box h-100 with-footer-content">
				<div class="d-flex align-items-center biz-box-title">
					<div>
						<h2 class="text-theme m-0">Manufacturer / Supplier</h2>
					</div>
				</div>
				<div class="biz-box-content text-17">
					<p class="text-theme"><strong>Reach to thousands of verified buyers.</strong> </p>
					<div class="pl-3">
						<div class="mb-3">
							<span class="text-theme">
								-- Attract a large number of buyers looking for specific items or suppliers. Reach a wider audience that you may not have been able to reach through traditional channels. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Opportunity to connect with a diverse range of potential customers, expanding your customer base and market reach. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Target your marketing by advanced search and filtering , allowing buyers to search for specific products or suppliers based on their requirements. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Facilitate direct communication between buyers and suppliers to engage with potential customers, address their inquiries, negotiate deals, and build relationship. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Gather market intelligence that can inform your product development, pricing, and marketing strategies. </span>
						</div>
					</div>
				</div>
				<div class="footer-content p-3 pb-4 text-center text-lg-right">
					<a href="https://b2bitem.com/register" class="btn btn-b2bmap-secondary text-17 px-5"> Start Selling- FREE</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="bg-white biz-box h-100 with-footer-content">
				<div class="d-flex align-items-center biz-box-title">
					<div>
						<h2 class="text-theme m-0">Importers / Buyers</h2>
					</div>
				</div>
				<div class="biz-box-content text-1">
					<p class="text-theme"><strong>Access to a wide range of suppliers.</strong></p>
					<div class="pl-3">
						<div class="mb-3">
							<span class="text-theme">
								-- Gain access to a diverse pool of potential suppliers, increasing your chances of finding the right partners for your sourcing needs.</span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Simplifies the supplier discovery process and saves you time and effort in finding suitable suppliers. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Invite multiple suppliers to provide quotes and proposals, enabling you to compare prices and negotiate favorable terms. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Engage with potential suppliers, ask questions, discuss specifications, negotiate terms, and clarify any concerns. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Provide transparency to make informed decisions based on detailed product information, reviews, ratings, and other relevant data. </span>
						</div>
						<div class="mb-3">
							<span class="text-theme">
								-- Provide market insights, trend reports, and data analytics that can help you stay informed about industry trends, pricing fluctuations, and demand patterns. </span>
						</div>
					</div>
				</div>
				<div class="footer-content p-3 pb-4 text-center text-lg-right">
					<a href="#" class="btn btn-b2bmap-secondary text-17 px-5"> Start Buying- FREE</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="mb-4">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="bg-white biz-box d-flex flex-column h-100">
					<div class="flex-fill">
						<div class="biz-box-title">
							<h3>New Members (Suppliers)</h3>
						</div>
						<div class="biz-box-content">
							<ul class="list-unstyled">
								<?php
								foreach ($sellercompany as $key => $val) {
								?>
									<li class="mb-2">
										<a href="<?= site_url('company/' . $val['slag']); ?>" class="d-block">
											<?php if (!empty($val['flag'])) { ?>
												<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="mr-1">
											<?php } ?>
											<?= $val['company_name']; ?> </a>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="text-center text-lg-right">
						<a href="#" class="btn btn-sm btn-b2bmap-secondary px-4">Start Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mb-4 mb-lg-0">
				<div class="bg-white biz-box h-100">
					<div class="biz-box-title d-flex align-items-center justify-content-between mb-0">
						<div>
							<h2 class="block-text">Latest Trade Offers</h2>
						</div>
					</div>
					<div class="biz-box-content">
						<div class="table-responsive">
							<table class="table requirement-table">
								<thead>
									<tr>
										<th style="min-width: 160px" scope="col" class="text-strong border-bottom-0">Offer Description</th>
										<th scope="col" class="text-strong border-bottom-0 text-nowrap">Country / Region</th>
										<th scope="col" class="text-strong border-bottom-0 text-nowrap">Posted on</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$selllist = $this->websitemodel->get_sell_offer_list_top_5();
									//echo '<pre>';print_r($selllist);exit;
									foreach ($selllist as $key => $val) {

									?>

										<tr>
											<td>
												<a href="<?= site_url('buysell/' . $val['slag']); ?>" class="text-medium text-business-tertiary"> <?= $val['ad_title']; ?> </a>
											</td>

											<td>
												<img src="https://b2bitem.com/upload/country/16_16/<?= $val['flag']; ?>" class="flag mr-1"> <?= $val['country_name']; ?>
											</td>
											<td class="text-nowrap"> <?= $val['date']; ?> </td>
										</tr>

									<?php } ?>


								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 mb-4 d-lg-down-none">
				<div class="bg-white border p-4 p-lg-5">
					<div class="row">
						<div class="col-lg-6 mb-3 mb-lg-0">
							<div class="py-lg-4">
								<div class="text-business-secondary text-center">
									<i class="icofont-penalty-card fa-4x"></i>
								</div>
								<h4 class="text-thin text-center mt-4 mb-3">Describe your needs.</h4>
								<h4 class="text-md-down-20 text-normal text-theme line-height-150 text-center"> Post your buy requirement & get quotes from potential suppliers.</h4>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="py-3">
								<form method="post" action="#">

									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Item Name <span class="text-danger">*</span>
										</label>
										<input type="text" name="title" id="title" value="" class="form-control text-md-down-14 rounded-0" placeholder="Enter product name ...">
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Item Category <span class="text-danger">*</span>
										</label>
										<div>
											<select name="cat_id" id="cat_id" class="form-control text-md-down-14 rounded-0">
												<option value="">-- Select Category --</option>
												<?php foreach ($product_cat as $key => $cat) { ?>
													<option value="<?= $cat['id']; ?>"> <?= $cat['category_name']; ?> </option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="text-lg-18 d-none text-muted">Trade Leads Description</label>
										<textarea rows="4" name="details" id="details" class="form-control text-md-down-14 form-control-md-down-large rounded-0" placeholder="Describe your buying requirement including specifications, sizes etc"></textarea>
									</div>
									<div class="text-center mt-3 pt-lg-3">
										<button disabled="disabled" type="submit" class="btn btn-b2bmap-secondary btn-md-down-small rounded-0 px-4">Post Buy Leads</button>
									</div>
								</form>
							</div>
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
			<div class="col-lg-7 mb-4 mb-lg-0">
				<div class="bg-white biz-box h-100">
					<div class="biz-box-title">
						<h2 class="m-0">Present your indedtity through B2BItem</h2>
					</div>
					<div class="biz-box-content">
						<p class="text-justify mb-0">B2BItem offers global B2B marketplace and cross-border trade platform aimed at assisting small and medium-sized entrepreneurs in expanding their businesses worldwide. The platform appears to offer various features to facilitate connections and communication between suppliers and buyers. <a href="#">About B2bItem</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script>
	$(document).ready(function() {

		//alert('hello');
		$(".biz-menu li").removeClass("active");
		$(".biz-menu li:nth-child(2)").addClass("active");
	});
</script>