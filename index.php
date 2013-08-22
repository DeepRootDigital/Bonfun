<?php get_header(); ?>
<div class="slider-area">
	<div class="slider">
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png">
				<h1>  Wine<span>Infused</span><span>
					<br />Cognac</span></h1>
					<div class="slider-bottom-line"></div>
				</li>
			</ul>
			<div class="mobile-main-panel">
				<div class="flag-horizontal">
				</div>
				<div class="mobile-wine-images">
					<img src="<?php echo get_template_directory_uri(); ?>/images/purple-wine-shadow.png" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/red-wine-shadow.png" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/white-wine-shadow.png" />
				</div>
			</div>
			<div class="flag">
				<div class="carousel">            
					<!-- All images with class of "cloudcarousel" will be turned into carousel items -->
					<!-- You can place links around these images -->
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/red-wine.png" />
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/purple-wine.png"/>
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/white-wine.png" />
				</div>
			</div>
		</div>
	</div>
	<div class="process-area">
		<img class="process-button" src="<?php echo get_template_directory_uri(); ?>/images/process-button.png">
	</div>
	<div class="process-content">
		<div class="container">
			<div class="process-navigation">
				<div class="process-navigation-bar"></div>
				<div class="process one selected">1</div>
				<div class="process two">2</div>
				<div class="process three">3</div>
				<div class="process four">4</div>
				<div class="process five">5</div>
				<div class="process-history-icon process-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/process-history-icon.png" />
				</div>
				<div class="process-growth-icon process-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/process-growth-icon.png" />
				</div>
				<div class="process-distillation-icon process-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/process-distillation-icon.png" />
				</div>
				<div class="process-aging-icon process-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/process-aging-icon.png" />
				</div>
				<div class="process-infusion-icon process-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/process-infusion-icon.png" />
				</div>
			</div>
			<div class="process-viewport">
				<div class="process-panel-string">
					<?php 
					$args=array(
						'post_type' => 'process',
						'order' => 'ASC'
						);

					$blogPosts = new WP_Query($args);

					while ($blogPosts->have_posts()) : $blogPosts->the_post();
					?>
					<div class="process-panel <?php echo get_post_meta(get_the_ID(), 'stages', true) ?>">
						<div class="process-small-nav-left"></div>
						<div class="process-small-nav-right"></div>
						<div class="process-stage-icon">
							<div class="process-lines-outer">
								<div class="process-lines-inner">
									<h6><?php echo get_post_meta(get_the_ID(), 'stage', true) ?></h6>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/process-history-logo.png" />
						</div>
						<?php autoc_get_img('processimage'); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>
<div class="grid-area">
	<div class="grid-wrapper">
		<div class="grid-slideout grid-top">
			<div class="grid-slideout-viewport">
				<div class="grid-slideout-strip">
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-row">
			<div class="grid-box-half grid-box">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image1.png" />
				<div class="grid-cover-tall-red grid-cover grid-top-row grid-left-col">
					<h2>Circle of Fun</h2>
					<div class="dotted-shadow">
						<ul>
							<li>Socialize /</li>
							<li>Party /</li>
							<li>Meet other bonfun fans /</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="grid-box-sixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image2.png" />
				<div class="grid-cover-short-orange grid-cover-vert grid-top-row grid-mid-col">
					<h2>Infusions</h2>
				</div>
			</div>
			<div class="grid-box-twosixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image3.png" />
				<div class="grid-cover-wide-red grid-cover-vert grid-top-row grid-right-col">
					<h2>Store Locator</h2>
				</div>
			</div>
		</div>
		<div class="grid-slideout grid-middle">
			<div class="grid-slideout-viewport">
				<div class="grid-slideout-strip">
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-row">
			<div class="grid-box-twosixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image4.png" />
				<div class="grid-cover-wide-orange grid-cover-vert grid-mid-row grid-left-col">
					<h2>Cognac Grapes</h2>
				</div>
			</div>
			<div class="grid-box-sixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image5.png" />
				<div class="grid-cover-short-red grid-cover-vert grid-mid-row grid-mid-col">
					<h2>Cognac, France</h2>
				</div>
			</div>
			<div class="grid-box-half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image6.png" />
				<div class="grid-cover-tall-orange right grid-cover grid-mid-row grid-right-col">
					<h2>Fun Music</h2>
				</div>
			</div>
		</div>
		<div class="grid-slideout grid-bottom">
			<div class="grid-slideout-viewport">
				<div class="grid-slideout-strip">
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
					<div class="grid-slideout-panel">
						<div class="grid-slideout-sidebar">
							<div class="grid-slideout-sidebar-tab"></div>
							<h3>Join the circle of fun</h3>
							<p>Nonumes vituperatoribus at cum, veniam quaeque adolescens duo et, ex persequeris consectetuer mea. Consequat necessitatibus sea id, vis no wisi omnesque. Harum accusata deseruisse...</p>
							<h4>More > </h4>
							<div class="grid-slideout-sidebar-pointer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-row">
			<div class="grid-box-half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image9.png" />
				<div class="grid-cover-tall-red grid-cover grid-bot-row grid-left-col">
					<h2>How to Party</h2>
				</div>

			</div>
			<div class="grid-box-twosixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image8.png" />
				<div class="grid-cover-wide-orange grid-cover-vert grid-bot-row grid-mid-col">
					<h2>Special Events</h2>
				</div>
			</div>
			<div class="grid-box-sixth">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/image7.png" />
				<div class="grid-cover-short-red grid-cover-vert grid-bot-row grid-right-col">
					<h2>Brand Ambas<br />sadors</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>