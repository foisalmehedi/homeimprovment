<?php get_header();?>
<div style="height:62px;"></div>

<?php
// get header
get_header();


?>

<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
<div class="fm_featured_area" style="background-image: url('<?php echo $featured_img_url ?>');">
<div class="fm_home_search_container">
	<?php
 
if ( is_active_sidebar( 'home-featured-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'home-featured-widget' ); ?>
    </div>
     
<?php endif; ?>

</div>
</div>

<?php
###### TOP CONTENT ######
/** This action is documented in geodirectory-templates/add-listing.php */
do_action('geodir_top_content', 'home-page');

/**
 * Calls the top section widget area and the breadcrumbs on the home page.
 *
 * @since 1.1.0
 */
do_action('geodir_home_before_main_content');

/** This action is documented in geodirectory-templates/add-listing.php */
do_action('geodir_before_main_content', 'home-page');

###### SIDEBAR ######
/**
 * Adds the home page left sidebar to the home template page if active.
 *
 * @since 1.1.0
 */
do_action('geodir_home_sidebar_left');

###### MAIN CONTENT WRAPPERS OPEN ######
/** This action is documented in geodirectory-templates/add-listing.php */
do_action('geodir_wrapper_content_open', 'home-page', 'geodir-wrapper-content', '');

###### MAIN CONTENT ######
/**
 * Adds page content to the page.
 *
 * @since 1.6.3
 *
 * @param string 'before' Position to add the post content. 'before' or 'after'.
 * @param string 'home-page' Current page type.
 */
do_action('geodir_add_page_content', 'before', 'home-page');

/**
 * Calls the home page main content area on the home template page.
 *
 * @since 1.1.0
 */
do_action('geodir_home_content');

/** This action is documented in geodirectory-templates/geodir-home.php */
do_action('geodir_add_page_content', 'after', 'home-page');

###### MAIN CONTENT WRAPPERS CLOSE ######
/** This action is documented in geodirectory-templates/add-listing.php */
do_action('geodir_wrapper_content_close', 'home-page');

###### SIDEBAR ######
/**
 * Adds the home page right sidebar to the home template page if active.
 *
 * @since 1.1.0
 */
do_action('geodir_home_sidebar_right');

# WRAPPER CLOSE ######	
/** This action is documented in geodirectory-templates/add-listing.php */
do_action('geodir_wrapper_close', 'home-page');

###### BOTTOM SECTION WIDGET AREA ######
/**
 * Adds the home page bottom widget area to the home template page if active.
 *
 * @since 1.1.0
 */
do_action('geodir_sidebar_home_bottom_section');

//get footer
get_footer();