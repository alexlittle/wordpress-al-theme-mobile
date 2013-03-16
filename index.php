<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmetadata">
				<?php comments_popup_link(__('0'), __('1'), __('%'),'number_comments'); ?>
				<?php comments_popup_link(__('Comment'), __('Comment'), __('Comments')); ?>
				|
				<?php the_time(get_option('date_format').', '.get_option('time_format')) ?> <?php _e('by') ?> <?php the_author() ?> 
				
				<?php if(function_exists('the_views')) { '| '.the_views(); }  ?> 
				</div>
				<div class="postentry">
					<?php the_content(__('Continue reading'). " &#8216;" . the_title('', '', false) . "&#8217; &raquo;"); ?>
				</div>
		
				<div class="postmetadata">
					<?php if( function_exists('the_tags') ) 
						the_tags(__('Tags: '), ', ', '<br />'); 
					?>
					<?php edit_post_link(__('Edit'), '&nbsp;', ''); ?>
				 </div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;')) ?></div>
			<div style="clear:both"></div>
		</div>
		
	<?php else : ?>
		<div class="post">
			<h2 class="posttitle"><?php _e('Not Found') ?></h2>
			<div class="postentry"><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
		</div>

	<?php endif; ?>

	</div>
<?php get_footer(); ?>
