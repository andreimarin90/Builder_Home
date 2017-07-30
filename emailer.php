<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Pingbacks -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php do_action( 'toco_ckeck' ); ?>
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        if(toco_go('favicon')): ?>
            <link rel="shortcut icon" href="<?php echo esc_url(toco_go('favicon')); ?>">
        <?php endif;
        if(toco_go('favicon_iphone')): ?>
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(toco_go('favicon_iphone')); ?>" />
        <?php endif;
        if(toco_go('favicon_iphone_retina')): ?>
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(toco_go('favicon_iphone_retina')); ?>" />
        <?php endif;
        if(toco_go('favicon_ipad')): ?>
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(toco_go('favicon_ipad')); ?>" />
        <?php endif;
        if(toco_go('favicon_ipad_retina')): ?>
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(toco_go('favicon_ipad_retina')); ?>" />
        <?php endif;
    } ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class('landing-page')?>>

<?php 

/*
Template Name: Landing
*/ 
?>

	<!-- Header -->
	<header class="header transparent" itemscope itemtype="http://schema.org/WPHeader">
		<div class="header-flex">
			<div class="site-logo"><a href="#"><img src="images/logo.png" alt=""/></a></div>

			<ul class="main-menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Why BBT Builder</a></li>
				<li><a href="#">Templates</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-white btn-transparent">get started</a></li>
			</ul>

			<div class="main-menu-link"><a href="#"></a></div>
		</div>
	</header>
	<!--/ Header -->

	<!-- Main Banner -->
	<div class="main-header" style="background-image: url(images/temp/bg-1.jpg);">
		<div class="header-inner">
			<div class="header-pre-title"><span>THE BEST IN THE INDUSTRY</span></div>
			<h1 class="header-title">Drag&Drop Email Builder</h1>
			<div class="header-description">
				Use our drag&drop tools to easily customize your next email template.
				Export the code and use it with any Email sending service to engage your clients.
			</div>
			<div class="header-buttons">
				<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-shadow">BUY NOW</a>
			</div>
		</div>
	</div>
	<!--/ Main Banner -->

	<!-- Section Features -->
	<section class="section section-features">
		<div class="section-header">
			<h1 class="section-title">Amazing Features</h1>

			<div class="section-description">
				<p>
					Customize layouts, update background images, change colours and create awesome call to action buttons all
					from within the dashboard via the item’s many modules and solve your email marketing problems <strong>NOW!</strong>
				</p>
			</div>
		</div>

		<div class="section-content clearfix">
			<img class="image" src="images/temp/section-1.png" alt=""/>

			<ul class="features">
				<li>
					<i class="feature-icon-1"></i>
					<h4 class="title">Drag&Drop Builder</h4>
					<div class="description">
						Using a drag and drop builder has never been easier. Left click on any module you like and place it by dragging it over and releasing the mouse.
					</div>
				</li>

				<li>
					<i class="feature-icon-2"></i>
					<h4 class="title">Efficiently Categorised</h4>
					<div class="description">
						Our builder comes with this super useful option allowing you to  edit your template and save all your changes and new layouts for later use.
					</div>
				</li>

				<li>
					<i class="feature-icon-3"></i>
					<h4 class="title">Ready-Made Templates</h4>
					<div class="description">
						Now included with your purchase  you have a series of ready made templates you can choose from. Guaranteed high conversion rates out of the box.
					</div>
				</li>

				<li>
					<i class="feature-icon-4"></i>
					<h4 class="title">Multiple Export Options</h4>
					<div class="description">
						You can export files in HTML, My Mail, Campaign Monitor and Mailchimp. You can also choose to optimize the code  and export a minified version.
					</div>
				</li>

				<li>
					<i class="feature-icon-5"></i>
					<h4 class="title">Save All Your Features</h4>
					<div class="description">
						Thanks to our builder’s latest technology you can edit your template and save all your changes and new layouts for later use.
					</div>
				</li>

				<li>
					<i class="feature-icon-6"></i>
					<h4 class="title">Load Your Saved Templates</h4>
					<div class="description">
						If you want to access any of your saved templates you can do that in the “Load” section of the specific email you are trying to use.
					</div>
				</li>

				<li>
					<div class="description">Want to find out more? <a href="#">View All Features</a></div>
				</li>
			</ul>
		</div>
	</section>
	<!--/ Section Features -->

	<!-- Section Buy -->
	<section class="section section-buy" style="background-image: url(images/temp/bg-2.jpg);">
		<div class="section-content clearfix">
			<img class="image" src="images/temp/section-2.png" alt=""/>

			<div class="column-right">
				<div class="section-header">
					<div class="section-pre-title">INNOVATIVE TECHNOLOGY</div>
					<h1 class="section-title big">Everything you need in one place.</h1>

					<div class="section-description">
						<p>
							If using the builder sounds too complex for you, keep it simple and use one our of super cool,
							<strong>ultra responsive premade templates.</strong>
						</p>

						<p>
							Complete and ready to update right out of the box, designed for today’s modern devices and a
							multitude of choices included with your download.
						</p>
					</div>

					<div class="section-buttons">
						<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-shadow">BUY NOW</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ Section Buy -->

	<!-- Section CTA -->
	<section class="section section-cta" style="background-image: url(images/temp/bg-1.jpg);">
		<div class="section-header">
			<h1 class="section-title">Extremely Easy To Use</h1>

			<div class="section-description">
				<p>
					Our <strong>User Interface</strong> design is based on years of research and listening to our customers, reacting to what they
					want and digging deep into our customer support to understand what changes need to be made to create <strong>the best</strong>
					set of <strong>drag and drop email builder</strong> tools available.
				</p>
			</div>

			<div class="section-buttons">
				<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-shadow">TRY NOW</a>
			</div>
		</div>
	</section>
	<!--/ Section CTA -->

	<!-- Section Testimonials -->
	<section class="section section-testimonials">
		<div class="section-content">
			<div class="column-left">
				<div class="section-header">
					<div class="section-pre-title">TESTIMONIALS</div>
					<h1 class="section-title big"><strong>+9500</strong> Happy Customers</h1>

					<div class="section-description">
						<p>
							There is a reason why our customers <strong>love and trust</strong> our services.
							Their reviews and testimonials are proof of our dedication and high standards. <strong>Thank you</strong> for choosing us!
						</p>
					</div>
				</div>

				<div class="owl-carousel testimonials-slider">
					<div class="testimonial">
						<div class="testimonial-text">
							This is a fantastic tool! Well designed both technically, and aesthetically. We started using it recently in order to update our
							email blasts - we are a small family owned Art Gallery and the theme both was easy to use, exciting to setup and highly effective
							in enabling our brand to look modern, clean and of course, responsive to our customers devices!
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">greglion</div>
							<div class="job">Art Gallery Owner</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							I'm very pleased with Emailer. It's easy to customize the design to my company's
							brand and there are plenty of of drag and drop modules to work from.
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">annakarana</div>
							<div class="job">themeforest user</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							Great, flexible product and excellent customer service. I code many of my own emails to make sure they are responsive and work well
							with all major clients. Sion does that and the generated code is clean and easy to work with if small modifications are needed.
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">judsonvoss</div>
							<div class="job">themeforest user</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							Love all the module options and the builder tool. Makes it easy for us non-coders who can
							handle basic edits. Customer service is great too. Quick to respond.
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">spsachos</div>
							<div class="job">themeforest user</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							First, this is a great theme. HUGE amount of choices. There's so many its hard to pick the best sometimes
							but that's what's great about it. Also, their support is great. Fast, nice, and fixed my issue.
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">evrsmileinc</div>
							<div class="job">themeforest user</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							Was able to create fantastic responsive emails that look great in every email client I tested. I see that version 4.0
							of the Builder is out, so I can't wait to give it a try. On top of that, support is some of the best ever
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">JimOQuinn</div>
							<div class="job">themeforest user</div>
						</div>
					</div>

					<div class="testimonial">
						<div class="testimonial-text">
							So many great features and after the last update it is even easier to create your email.
							Thank you very much for this amazing email template/builder.
						</div>

						<div class="testimonial-author">
							<div class="avatar"><img src="images/avatar.png" alt=""/></div>
							<div class="author">colorfulwebdesign</div>
							<div class="job">themeforest user</div>
						</div>
					</div>
				</div>
			</div>

			<img class="image" src="images/temp/section-3.png" alt=""/>
		</div>
	</section>
	<!--/ Section Testimonials -->

	<!-- Footer -->
	<footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
		<div class="footer-top">
			<div class="clearfix">
				<div class="pull-left">
					<div class="site-logo"><a href="#"><img src="images/logo.png" alt=""/></a></div>
				</div>

				<div class="pull-right">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Why BBT Builder</a></li>
						<li><a href="#">Templates</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-white btn-transparent">get support</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="clearfix">
				<div class="pull-right">
					<ul class="footer-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
					</ul>
				</div>

				<div class="pull-left">
					<div class="copyright">
						<span style="color: #fb5025;">made</span>
						<span style="color: #7fba00;">with</span>
						<span style="color: #ff4181;">love</span>
						<span style="color: #01a5ed;">by</span>
						<a style="color: #ffb901;" href="http://bigbangthemes.net/">bigbangthemes</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/ Footer -->

	<!-- JS Section -->

</body>
</html>