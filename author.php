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
							
<h3 style="text-align:center;"> Showing Posts from author:  <?php the_author();?> </h3>
				<br />
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
							<div>
	<ul class="actions special">
										<li><a href="<?php echo get_home_url();?>" class="button">HOME PAGE</a></li>
									</ul>
									</div>

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