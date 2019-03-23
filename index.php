<?php get_header();?>
	<body class="is-preload" <?php body_class();?>>

		<!-- Wrapper -->
			<?php get_template_part( 'templates/hero', 'hero' );?>
			

				<!-- Main -->
					<div id="main">
								<div style="text-align: center; width:600px; font-size: 110px; margin: 0 auto;">
									<?php
										if(is_search()){
											?>
											<h3>You Searched for: <?php the_search_query();?></h3>
											<?php
										}
										echo get_search_form();
									?>

								</div>
						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h2><a href="#">And this is a<br />
									massive headline</a></h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="<?php echo get_template_directory_uri().'/images/pic01.jpg'?>" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts" <?php post_class();?>>
							<?php
								while(have_posts()){        //loop
										the_post();        
							?>
								<article>
									<header>
										<span class="date"><?php echo get_the_date(); ?></span>
										<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
										
										<p class="meta"><?php
								$post_format= get_post_format();
									if($post_format=="audio"){
										echo '<span class="dashicons dashicons-format-audio"></span>';
									}elseif($post_format=="video"){
										echo '<span class="dashicons dashicons-video-alt"></span>';
									}elseif($post_format=="image"){
										echo '<span class="dashicons dashicons-format-image"></span>';
									}
							?> Posted by <span class="red"><?php echo the_author_posts_link();?></span> &nbsp;&bull;&nbsp; <span class="red"><a href="#" class="permalink">Tags: <?php echo get_the_tag_list();?></a></span></p>
							
									</header>
									<?php
										  if(has_post_thumbnail()){                        //check if image available
											the_post_thumbnail("medium", "class= image fit");       
                                }

									?>
									<p><?php  
									
										the_excerpt();
										
                                
							?>
							</p>
									<ul class="actions special">
										<li><a href="<?php the_permalink();?>" class="button">Full Story</a></li>
									</ul>
								</article>
								<?php }?>
								
								
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<?php
										the_posts_pagination(array(        // show navigation
									   'screen_reader_text' => ' ',    //navigation title
									   'mid_size' => 2,                //
										'prev_text' => '< PREV',                
										'next_text' => 'NEXT >'
									));
									?>

								</div>
							</footer>

					</div>

				<!-- Footer -->
				
<?php get_footer();?>