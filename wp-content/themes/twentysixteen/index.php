<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<style>
		.row { width: 100%; max-width: 1440px; margin-right: 0; margin-left: 0; }
		#main { margin-bottom: 0; text-transform: uppercase; color: #fff; }
		h1, h2, h3 { letter-spacing: 0.3vw;}
		.site-header, .site-footer { display: none;}
		.top-image { background: #ff0000; height: 33vw; background: url("<?php bloginfo('template_directory'); ?>/images/top-bg.jpg"); background-size: cover;}
		.bebe-title { margin-top: 4vw; margin-left: 2vw; font-size: 4vw;}
		.buy-link { margin-top: 0vw; margin-right: 36vw; font-size: 1.5vw; opacity: 0; text-align: right; transition: all 1s; }
		.buy-link a { color: #ffffff; text-decoration: none;}
		.tour-dates { list-style-type: none; text-align: center; margin: 0 auto 0 auto; height: 33vw; background: #000000; }
		.tour-header { text-align: center; margin-top: 5vw; margin-bottom: 2vw; }
		.tour-dates li { width: 25%; display: inline-block; margin-bottom: 0.5vw; }
		.tour-dates a { text-decoration: none; color: #ffffff;}
		.video-highlight { background: #666666; height: 17vw; text-align: center; background: url("<?php bloginfo('template_directory'); ?>/images/video-bg.jpg"); background-size: cover; background-position-y: 24%;}
		.video-highlight h2 { line-height: 17vw; cursor: pointer;}
		.spotify-player { height: 43vw; padding: 0px; background: #282828; }
		.spotify-image { padding: 0; transition: all 0.2s;}
		.spotify-image:hover { opacity: 0.7;}
		.spotify-player img {cursor: pointer; width: 100%; display: inline-block;}
		.spotify { width: 100%; height: 5.5vw; margin-bottom: 0; }
		.spotify:nth-child(1) { display: block;}
		.spotify:nth-child(2) { display: none;}
		.spotify:nth-child(3) { display: none;}
		.news-holder { height: 43vw; background: #000000; padding: 0; position: relative;}
		.news-feed { position: absolute; top: 0; left: 0; width: 0; height: 0; background: #000000; z-index: 1; overflow: hidden; transition: all 1s;}
		.news-close { cursor: pointer; margin: 1.4vw 0 0 1vw;}
		.genericon-close-alt { font-size: 1vw;}
		.blog-holder { width: 90%; margin: 0 auto; height: 95%; overflow: scroll;}
		a.collapse-title { color: #ffffff; text-decoration: none;}
		.blog-content-holder { width: 80%; margin: 0 auto 2vw auto;}
		.blog-title-spacer { width: 2vw;}
		.news-icon { height: 17vw; background: #ff0000; cursor: pointer; transition: all 2s;}
		.social-feed { height: 17vw; background: #f1f1f1;}
		.sign-up { background: #ffffff; height: 22vw;}
		.shop { background: #ff0000; height: 22vw;}
		.links { background: #ffffff; height: 22vw;}
		.youtube { height: 26vw; width: 100%; }
		.youtube:nth-child(2), .youtube:nth-child(3) { display: none;}
		.video-title { text-align: center; cursor: pointer; margin: 1vw 0; transition: all 0.2s;}
		.video-title:hover { opacity: 0.7;}
		.videos-title { margin-bottom: 2vw; margin-top: 10vw; font-size: 4vw;}
		.shop-title { font-size: 4vw; margin-top: 9vw; }
		.videos-title a { color: #ffffff; text-decoration: none;}
		.video-embed { padding: 0; height: 26vw;}
		.video-icon { background: #ff0000; height: 26vw; cursor: pointer;}
		.news-title { text-align: center; margin-top: 7vw; cursor: pointer; transition: all 0.2s; font-size: 3vw;}
		.videos-title-margin { margin-top: 5vw !important; }
		.videos-title, .shop-title { text-align: center; cursor: pointer; transition: all 0.2s;}
		.videos-title:hover, .shop-title:hover, .news-title:hover { opacity: 0.7;}
		.video-more { text-align: center;}
		.video-more a {color: #ffffff; text-decoration: none; text-align: center; margin-top: 1vw; font-weight: bold; font-size: 1vw;}
		.sign-up-title { text-align: center; color: #000000; margin-top: 7vw;}
		.links-title { color: #000000; font-weight: bold; margin-top: 7vw; margin-bottom: 1vw;}
		.links-email, .links-email a {color: #000000; text-decoration: none;}
		.diagonal { width: 2px; height: 62vw; background: #ffffff; transform: rotate(45deg); position: absolute; z-index: 3; top: -3vw; right: 21vw;}
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="diagonal"></div>

		<div class="row">
			<div class="col-xs-12 col-sm-8 top-image">
				<h1 class="bebe-title">
					Bebe<br>
					Rexha
				</h1>
				<div class="buy-link">
					<a href="https://itunes.apple.com/us/album/i-dont-wanna-grow-up-ep/id989483968" target="_blank">
						"I don't wanna grow up"
						<br>
						buy now
					</a>
				</div>
			</div>

			<?php $args = array( 'post_type' => 'tour_dates', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>

			<ul class="tour-dates col-xs-12 col-sm-4">

				<h2 class="tour-header">
					Tour Dates
				</h2>

				<?php $dates = get_post_meta( $post->ID, 'tour_dates', true ); 
				foreach( $dates as $date){
			
					echo '<a href="' . $date['ticket_link'] . '" target="_blank">';
				    echo '<li>' . $date['date'] . '</li>';
				    echo '<li>' . $date['venue'] . '</li>';
				    echo '<li>' . $date['location'] . '</li></br>';
				    echo '</a>';

				};?>
			</ul>

	</div>

	<div class="row">
		<div class="col-xs-12 video-highlight">
			<h2>
				Watch "me, myself and I"
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-3 spotify-player">
			<iframe src="https://embed.spotify.com/?uri=spotify:track:40YcuQysJ0KlGQTeGUosTC" class="spotify" frameborder="0" allowtransparency="true"></iframe>
			<iframe src="https://embed.spotify.com/?uri=spotify:track:5LtNBCM2ve0SxP0dlRVvMu" class="spotify" frameborder="0" allowtransparency="true"></iframe>
			<iframe src="https://embed.spotify.com/?uri=spotify:track:4ZPdnqOaT0kkrsl9ppWc1V" class="spotify" frameborder="0" allowtransparency="true"></iframe>
			<div class="col-xs-12 spotify-image spot1">
				<img src="<?php bloginfo('template_directory'); ?>/images/myself.jpg" class="myself-image">
			</div>
			<div class="col-xs-6 spotify-image spot2">
				<img src="<?php bloginfo('template_directory'); ?>/images/crazy.jpg" class="crazy-image">
			</div>
			<div class="col-xs-6 spotify-image spot3">
				<img src="<?php bloginfo('template_directory'); ?>/images/drinking.jpg" class="drinking-image">
			</div>
		</div>
		<div class="col-xs-12 col-sm-9 news-holder">
			<div class="news-feed">
				<div class="news-close">
					<span class="genericon genericon-close-alt"></span>
				</div>
				<div class="blog-holder">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 news-icon">
					<h2 class="news-title">
						News
					</h2>
				</div>
				<div class="col-xs-9 social-feed">
					<?php $iargs = array( 'post_type' => 'insta', 'posts_per_page' => 3 );
					$iloop = new WP_Query( $iargs );
					while ( $iloop->have_posts() ) : $iloop->the_post();
					endwhile;?>

					<?php $grams = get_post_meta( $post->ID, 'insta', true ); 
					foreach( $grams as $gram){

						echo $gram['post_content'];

					};?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8 video-embed">
					<?php $vargs = array( 'post_type' => 'video', 'posts_per_page' => 10 );
					$vloop = new WP_Query( $vargs );
					while ( $vloop->have_posts() ) : $vloop->the_post();
					endwhile;?>

					<?php $videos = get_post_meta( $post->ID, 'video', true ); 
					foreach( $videos as $video){

						echo '<iframe class="youtube" src="https://www.youtube.com/embed/' . $video['embed'] . '?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>';

					};?>
				</div>
				<div class="col-xs-4 video-icon">
					<h2 class="videos-title">
						<a data-toggle="collapse" href="#collapseVideo" aria-expanded="false" aria-controls="collapseVideo">
						Videos
						</a>
					</h2>
					<div class="video-list collapse" aria-expanded="false" id="collapseVideo">
						<?php $vargs = array( 'post_type' => 'video', 'posts_per_page' => 10 );
						$vloop = new WP_Query( $vargs );
						while ( $vloop->have_posts() ) : $vloop->the_post();
						endwhile;?>

						<?php $videos = get_post_meta( $post->ID, 'video', true ); 
						foreach( $videos as $video){

							echo '<div class="video-title">' . $video['title'] . '</div>';

						};?>
						<div class="video-more">
							<a href="https://www.youtube.com/user/BEBEREXHA" target="_blank">
								View more
							</a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-3 sign-up">
			<h3 class="sign-up-title">
				Sign up
			</h3>
		</div>
		<div class="col-xs-12 col-sm-3 shop">
			<h2 class="shop-title">
				Shop
			</h2>
		</div>		
		<div class="col-xs-12 col-sm-6 links">
			<div class="col-xs-5 col-xs-offset-1">
				<div class="links-title">
					Management
				</div>
				<div class="links-email">
					Chris Anokute<br>
					<a href="mailto:chris.anokute@me.com" target="_blank">
						chris.anokute@me.com
					</a>
				</div>
			</div>
			<div class="col-xs-5 col-xs-offset-1">
				<div class="links-title">
					Press
				</div>
				<div class="links-email">
					Phylicia Fant<br>
					<a href="mailto:phylicia.fant@wbr.com" target="_blank">
						phylicia.fant@wbr.com
					</a>
				</div>
			</div>
		</div>
	</div>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<script type="text/javascript">

	jQuery('.news-icon').on('click',function(){
		jQuery('.news-icon').css({'transform':'rotateX(180deg)','background':"#000000"});
		setTimeout(function(){
			jQuery('.news-title').css({'opacity':'0'});
		}, 500);
		setTimeout(function(){
			jQuery('.news-feed').css({'width':'100%','height':'100%'});
		},1000);
	});

	jQuery('.news-close').on('click',function(){
		jQuery('.news-feed').css({'width':'0','height':'0'});
		setTimeout(function(){
			jQuery('.news-icon').css({'transform':'rotateX(360deg)','background':"#ff0000"});
		},500);
		setTimeout(function(){
			jQuery('.news-title').css({'opacity':'1'});
		},1000);
	});

	jQuery('.collapse-title h1').on('click', function(){
		if (jQuery(this).find('.blog-plus').html() === '+'){
			jQuery(this).find('.blog-plus').html('-');
		} else if (jQuery(this).find('.blog-plus').html() === '-') {
			jQuery(this).find('.blog-plus').html('+');
		}
	});

	jQuery('.videos-title').on('click', function(){
		jQuery('.videos-title').toggleClass('videos-title-margin');
	});

	jQuery('.top-image').on('mouseover',function(){
		jQuery('.buy-link').css({'opacity':'1','margin-top':'2vw'});
	});

	jQuery(window).on('scroll',function(){
		jQuery('.diagonal').css('margin-right', jQuery('body').scrollTop());
	});

	jQuery('.video-title:nth-child(1)').on('click', function(){
		jQuery('.youtube:nth-child(1)').css('display','block');
		jQuery('.youtube:nth-child(2)').css('display','none');
		jQuery('.youtube:nth-child(3)').css('display','none');
	});
	jQuery('.video-title:nth-child(2)').on('click', function(){
		jQuery('.youtube:nth-child(1)').css('display','none');
		jQuery('.youtube:nth-child(2)').css('display','block');
		jQuery('.youtube:nth-child(3)').css('display','none');
	});
	jQuery('.video-title:nth-child(3)').on('click', function(){
		jQuery('.youtube:nth-child(1)').css('display','none');
		jQuery('.youtube:nth-child(2)').css('display','none');
		jQuery('.youtube:nth-child(3)').css('display','block');
	});

	var myself = '<img src="<?php bloginfo('template_directory'); ?>/images/myself.jpg" class="myself-image">';
	var crazy = '<img src="<?php bloginfo('template_directory'); ?>/images/crazy.jpg" class="crazy-image">';
	var drinking = '<img src="<?php bloginfo('template_directory'); ?>/images/drinking.jpg" class="drinking-image">';
	jQuery('.spotify-image').on('click', '.myself-image', function(){
		jQuery('.spot1').html(myself);
		jQuery('.spot2').html(crazy);
		jQuery('.spot3').html(drinking);
		jQuery('.spotify:nth-child(1)').css('display','block');
		jQuery('.spotify:nth-child(2)').css('display','none');
		jQuery('.spotify:nth-child(3)').css('display','none');
	});
	jQuery('.spotify-image').on('click', '.crazy-image', function(){
		jQuery('.spot1').html(crazy);
		jQuery('.spot2').html(myself);
		jQuery('.spot3').html(drinking);
		jQuery('.spotify:nth-child(1)').css('display','none');
		jQuery('.spotify:nth-child(2)').css('display','block');
		jQuery('.spotify:nth-child(3)').css('display','none');
	});
	jQuery('.spotify-image').on('click', '.drinking-image', function(){
		jQuery('.spot1').html(drinking);
		jQuery('.spot2').html(myself);
		jQuery('.spot3').html(crazy);
		jQuery('.spotify:nth-child(1)').css('display','none');
		jQuery('.spotify:nth-child(2)').css('display','none');
		jQuery('.spotify:nth-child(3)').css('display','block');
	});

	</script>

<?php get_footer(); ?>
