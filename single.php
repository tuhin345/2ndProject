<?php get_header();?>
	<body class="is-preload" <?php body_class();?>>

		<!-- Wrapper -->
			<?php get_template_part( 'templates/hero', 'hero' );?>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							

						<!-- Posts -->
							<article class="post featured">
							<?php
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
										
										 the_content();
										
										echo '<br />';
										echo '<br />';
										echo '<br />';
										previous_post_link();
										echo '<br />';
										next_post_link();
										
							?>
							</p>
							
							
									<ul class="actions special">
										<li><a href="<?php echo get_home_url();?>" class="button">HOME PAGE</a></li>
									</ul>
									<br />
									<?php
            echo "<h3>author info </h3>";
                    
           echo get_avatar(get_the_author_meta('id'));        //show image
                    
            echo "<h3>";
           echo get_the_author_meta('display_name');        //author name
            echo "</h3>";
           echo "<p>";
           echo get_the_author_meta('description');        //author biography
            echo "</p>";
       ?>
								</article>
								<?php }?>
								
								<?php
        if(comments_open()){        //check if comment are allowed on the post
                    
   ?>
    <div>
        <?php
            comments_template();    // show the default comment template
       ?>
   </div>
                    
   <?php
        }
    ?>

								
								
							

						<!-- Footer -->
							

					</div>
					

				<!-- Footer -->
				
<?php get_footer();?>