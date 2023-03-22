<?php
/*
 * This is the child theme for Divi theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */

// Register your interest submit button styles
add_filter( 'gform_submit_button_2', 'add_custom_css_classes', 10, 2 );
function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " register-interest-submit-btn";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
// Newsletter submit button styles
 add_filter( 'gform_submit_button_4', 'add_custom_css_classes_2', 10, 2 );
function add_custom_css_classes_2( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " register-interest-submit-btn";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
add_action( 'wp_enqueue_scripts', 'child_divi_enqueue_styles' );
function child_divi_enqueue_styles() {
	$parent_css = 'parent-style';
	$child_css = 'child-style';
	$bootstrap_css = 'bootstrap-style';
    $custom_css = 'custom-style';
    $custom_js = 'custom-script';
	$slick_css = 'slick-style';
	$slick_js = 'slick-script';
    wp_enqueue_style( $parent_css, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_css,
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
	wp_enqueue_style($bootstrap_css, get_stylesheet_directory_uri(). '/css/bootstrap.min.css', array($parent_css)); 
    wp_enqueue_style($custom_css, get_stylesheet_directory_uri(). '/css/custom.css', array($parent_css));
	wp_enqueue_style($slick_css, get_stylesheet_directory_uri(). '/css/slick.css', array($parent_css));
    wp_enqueue_script($slick_js, get_stylesheet_directory_uri(). '/js/slick.min.js', array('jquery'),'',true);
	wp_enqueue_script($custom_js, get_stylesheet_directory_uri(). '/js/custom.js', array('jquery'),'',true);
}
/*
 * Your code goes below
 */

add_shortcode("partnersSlider", "partner_shortcode_func");
function partner_shortcode_func(){
	ob_start(); ?>

<section class="partner-section container-fluid">
	<div class="row align-items-center">
		<div class="partners">
			<div class="col-md-3 single-partner">
				<img src="http://realgiving.com.au/wp-content/uploads/2022/04/Group-3598.png" />
			</div>
			
			<div class="col-md-3 single-partner">
				<img src="http://realgiving.com.au/wp-content/uploads/2022/04/image-5-Traced.png" />
			</div>
			
			<div class="col-md-3 single-partner">
				<img src="http://realgiving.com.au/wp-content/uploads/2022/04/image-9-Traced.png" />
			</div>
			<div class="col-md-3 single-partner">
				<img src="http://realgiving.com.au/wp-content/uploads/2022/04/Group-3596.png" />
			</div>
			<div class="col-md-3 single-partner">
				<img src="http://realgiving.com.au/wp-content/uploads/2022/04/image-5-Traced.png" />
			</div>
		</div>
	</div>
</section>

<?php
	
	$partnersSliderEnd = ob_get_clean();
	return $partnersSliderEnd;
	
}


add_shortcode("sliderSection", "custom_shortcode_func");
function custom_shortcode_func(){
ob_start();
?>
    <section class="my-slider container-fluid">
        <div class="row my-slider-row">
            <div class="col-md-4 d-flex align-items-center position-relative">
				<div class="quotes-pic">
					<img src="http://realgiving.com.au/wp-content/uploads/2022/04/Highlight-Quote-Left.png" />	
				</div>
				<div>
				<h3 class="testimonial-header">
                    What our customers are saying
                </h3>
                <div class="d-flex mt-4">
                    <img src="http://realgiving.com.au/wp-content/uploads/2022/04/bi_arrow-down-circle-fill_2.png" class="slick-prev" />
                    <img  src="http://realgiving.com.au/wp-content/uploads/2022/04/bi_arrow-down-circle-fill.png" class="slick-next ms-4" />
                    
                </div>
	
				</div>
                
            </div>
            <div class="col-md-8 review-parent">
                        <div class="review-card first-review">
                            <div class="d-flex align-items-center mb-5">
                                <img src= "https://realgiving.com.au/wp-content/uploads/2022/05/Rachel.jpg" />
                               <span class="ms-3 ms-md-5 customer-name">Rachael Gibb </span>
                            </div>
                            <p class="customer-comment">Being able to provide a value to my clients which none of my competitors can is awesome. It's an app they will always use into the future and always remember me by.</p>
                        </div>
<!-- 2 -->
                        <div class="review-card ">
                            <div class="d-flex align-items-center mb-5">
                                <img src= "https://realgiving.com.au/wp-content/uploads/2022/05/brendan.jpg" />
                                 <span class="ms-3 ms-md-5 customer-name">Brent Hodge </span>
                            </div>
                            <p class="customer-comment">Not only am I able to provide something special to my clients, but I also get rewarded every time they use a deal plus receive great deals myself.</p>
                        </div>

                
            </div>
        </div>
</section>

    <?php

$sliderSectionEnd = ob_get_clean();
	return $sliderSectionEnd;
}
?>