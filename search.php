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
							

						<!-- Posts -->
							<section class="posts" <?php post_class();?>>
							<?php
							if(have_posts()){
								while(have_posts()){        //loop
										the_post();        
							?>
								<article>
									<header>
										<span class="date"><?php echo get_the_date(); ?></span>
										<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
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
								
								<?php }}else{
									echo "<article class='post featured'>";
									echo "sorry, no results found";
									echo "</article>";
									
								}
										
								?>
								
								
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