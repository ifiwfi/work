<?php
	//In wordpress you include header by calling "get_header" function.
	include('header.php');
	global $wp_query;
	//print_r($wp_query);die;// Just uncomment this line and see what data $wp_query is carrying with it.
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_title(); ?>
<?php the_time('F jS, Y'); ?>
<?php the_content(__('(more...)')); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php
	//In wordpress you include footer by calling "get_footer" function.
	include('footer.php');
?>