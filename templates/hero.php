<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
					
						<h1><?php echo html_entity_decode(get_bloginfo('name'));?></h1>
						<p><?php echo html_entity_decode(get_bloginfo('description'));?></p>
						<ul class="actions">
							<li><a href="#header" >
							<?php 
							if(current_theme_supports('custom-logo')){?>
								<div class="logo">
								<?php the_custom_logo();?>
            
								</div>
								<?php }?>
</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">2nd Project</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
					<div>
						 <?php
							wp_nav_menu( array(
								'theme_location'        => 'topmenu',    //function pages id
								'menu_id'        => '',      		      //menu div id
								'menu_class'        => 'links'
            
            
							) );
        
        ?>
						</div>
						
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>
					