					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->

								<?php $manuName = basename(__DIR__); ?>
								<li class=<?php echo $manuName == 'admin' ? "active" : ''; ?>><a href="../index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li class=<?php echo $manuName == 'banner' ? "active" : ''; ?>><a href="<?php echo $isInternal == true ? '' : 'Banner/'; ?>banner_List.php"><i class="icon-image-compare"></i> <span>Banners</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Service</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Section</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Our Projects</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Our Staffs</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Our Clients</span></a></li>
								<li><a href="#"><i class="icon-home4"></i> <span>Contact Message</span></a></li>
								<li>
									<a href="#"><i class="icon-gear"></i> <span>Back office setup</span></a>
									<ul>
										<li><a href="#">Category</a></li>
										<li><a href="#">Designation</a></li>

									</ul>
								</li>


								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>

										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
												<li><a href="starters/3_col_double.html">Double sidebars</a></li>
											</ul>
										</li>



									</ul>
								</li>

								<!-- /main -->





							</ul>
						</div>
					</div>
					<!-- /main navigation -->