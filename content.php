<?php
/**
 * The default template for displaying content
 *
 * @package Vtrois
 * @version 2.4
 */

$listlayout = kratos_option('list_layout');
$listlayout = (empty($listlayout)) ? 'new_layout' : $listlayout;
?>
<article class="kratos-hentry clearfix">
<?php if($listlayout == 'old_layout'){ ?>
<div class="kratos-entry-thumb">
	<?php kratos_blog_thumbnail() ?>
</div>	
<div class="kratos-post-inner">
	<header class="kratos-entry-header clearfix">
		<h2 class="kratos-entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<div class="kratos-post-meta">
			<span class="pull-left">
			<a href="#"><i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?></a>
			</span>
			<span class="visible-lg visible-md visible-sm pull-left">
			<?php $category = get_the_category(); echo '<a href="' . get_category_link($category[0] -> term_id) . '"><i class="fa fa-folder-open-o"></i> ' . $category[0] -> cat_name . '</a>'; ?>
			<a href="<?php the_permalink() ?>#respond"><i class="fa fa-commenting-o"></i> <?php echo kratos_comments_users($post->ID); ?> Comments</a>
			</span>
			<span class="pull-left">
			<a href="<?php the_permalink() ?>"><i class="fa fa-eye"></i> <?php echo kratos_get_post_views(); ?> Views</a>
			<a href="<?php the_permalink() ?>"><i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> Times</a>
			</span>
		</div>
	</header>
	<div class="kratos-entry-content clearfix">
	<?php $excerptphoto = wp_trim_words(get_the_excerpt(), 120); ?>
	<p><?php echo $excerptphoto ?></p>
	</div>
</div>
<?php } if($listlayout == 'new_layout'){ ?>
<div class="kratos-entry-border-new clearfix">
	<div class="kratos-entry-thumb-new">
		<?php kratos_blog_thumbnail_new() ?>
	</div>
	<div class="kratos-post-inner-new">
		<header class="kratos-entry-header-new">
			<a class="label" href="<?php $category = get_the_category();echo get_category_link($category[0] -> term_id) . '">' . $category[0] -> cat_name ; ?><i class="label-arrow"></i></a>
			<h2 class="kratos-entry-title-new"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="kratos-entry-content-new">
			<?php $excerptphoto = wp_trim_words(get_the_excerpt(), 110); ?>
			<p><?php echo $excerptphoto ?></p>
		</div>
	</div>
	<div class="kratos-post-meta-new">
		<span class="visible-lg visible-md visible-sm pull-left">
			<a href="#"><i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?></a>
			<a href="<?php the_permalink() ?>#respond"><i class="fa fa-commenting-o"></i> <?php echo kratos_comments_users($post->ID); ?> Comments</a>
		</span>
		<span class="pull-left">
			<a href="<?php the_permalink() ?>"><i class="fa fa-eye"></i> <?php echo kratos_get_post_views(); ?> Views</a>
			<a href="<?php the_permalink() ?>"><i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> Times</a>
		</span>
		<span class="pull-right">
			<a class="read-more" href="<?php the_permalink() ?>" title="阅读全文">阅读全文 <i class="fa fa-chevron-circle-right"></i></a>
		</span>
	</div>
</div>
<?php } ?>
</article>