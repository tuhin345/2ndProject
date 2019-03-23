<?php

	function mamurjor_dev(){
		load_theme_textdomain("2ndproject");
		add_theme_support("post-thumbnails");
		add_theme_support("title-tag");
		$menu_custom_header= array(
		'header-text'		=> true,
		'default-text-color'=> '#elelel'
		);
		add_theme_support("custom-header", $menu_custom_header);
		add_theme_support("custom-logo" );
		add_theme_support("custom-background" );
		add_theme_support("post-formats", array("video","audio","image") );
		register_nav_menu('topmenu', __('topmenu','2ndproject'));
		
	}
	
	add_action("after_setup_theme","mamurjor_dev");

	function mamurjor_scripts(){
		
		wp_enqueue_style("mamurjor_css",get_stylesheet_uri());       										 //get main stylesheet
		wp_enqueue_style("2ndproject-maincss", get_template_directory_uri()."/assets/css/main.css"); 
		wp_enqueue_style("2ndproject-fontawesome", get_template_directory_uri()."/assets/css/font-awesome.min.css"); 
		wp_enqueue_style("2ndproject-noscript", get_template_directory_uri()."/assets/css/noscript.css"); 
		
		wp_enqueue_script("2ndproject-main", get_template_directory_uri()."/assets/js/main.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-breakpoints", get_template_directory_uri()."/assets/js/breakpoints.min.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-browser", get_template_directory_uri()."/assets/js/browser.min.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-jquery", get_template_directory_uri()."/assets/js/jquery.min.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-scrollex", get_template_directory_uri()."/assets/js/jquery.scrollex.min.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-scrolly", get_template_directory_uri()."/assets/js/jquery.scrolly.min.js", null, "0.0.1", true); 
		wp_enqueue_script("2ndproject-util", get_template_directory_uri()."/assets/js/util.js", null, "0.0.1", true); 
		
	}

	add_action("wp_enqueue_scripts","mamurjor_scripts");



	function mamurjor_custom_header(){
			
				if(current_theme_supports('custom-header')){
					
					?>
					<style>
						#intro {
							background-image: url(<?php echo header_image();?>);
							background-size: cover;
						}
						#intro h1  , #intro p {
							color: #<?php echo get_header_textcolor();?>
							
						}
						#intro{
							<?php if(!display_header_text()){ 
							echo "display: none";
							}?>
						}
						 .custom-logo {
							width:70px;
							height:70px;
							
							
							border-radius: 50%;
						}
						p .dashicons {
							color: red;
							font-size: 32px;
							margin-right: 20px;
							margin-top: 4px;
						}
						
						
					
					
					</style>
					<?php
					
				}
			
		
		
	}
	
	add_filter("wp_head","mamurjor_custom_header");

	function revision_password($excerpt){
        if(!post_password_required()){
                return $excerpt;
    }else{
                echo get_the_password_form();
            }
}

add_filter("the_excerpt","revision_password");

function mamurjor_pass_title(){
    return "locked: %s";       //%s returns main post title
    
}

add_filter("protected_title_format","mamurjor_pass_title");

    function mamurjor_sidebar(){
                register_sidebar(array(
					'id'      			 => __('footer_sidebar'),
					'name'       		 => __('footer sidebar', '2ndproject'),
					'description'        => __('this is footer sidebar'),
					'before_widgets'     => '',
					'after_widgets'      => '',
					'before_title'       => '',
					'after-title'        => ''
        
        
    
        ));
    
}
add_action("widgets_init","mamurjor_sidebar");



?>