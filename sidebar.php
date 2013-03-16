	<div id="sidebar">
		<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( function_exists('dynamic_sidebar') ) {  dynamic_sidebar(); }?>

<li class="box">
	<h4><?php _e('Archives'); ?></h4>
	<ul>
	<?php 
		//wp_get_archives('type=monthly&show_post_count=true'); 
		compact_archive();
	?>
	</ul>
</li>

			
			<?php if(is_home()) { ?>
			<li>
				<h4>Feed on RSS</h4>
				<ul class="feeds">
					<li>
						<a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed for Posts">Posts</a>
					</li>
					<li>
						<a href="<?php bloginfo('comments_rss2_url'); ?>" title="RSS Feed for Comments">Comments</a>
					</li>
				</ul>
			</li>
			
			<?php }?>
			<li >
				<div style="width:100%;text-align:center;">
				<a href="http://www3.clustrmaps.com/counter/maps.php?url=http://alexlittle.net" id="clustrMapsLink"><img src="http://www3.clustrmaps.com/counter/index2.php?url=http://alexlittle.net" style="border:0px;" alt="Locations of visitors to this page" title="Locations of visitors to this page" id="clustrMapsImg" onerror="this.onerror=null; this.src='http://www2.clustrmaps.com/images/clustrmaps-back-soon.jpg'; document.getElementById('clustrMapsLink').href='http://www2.clustrmaps.com';" />
			</a></div>
			</li>
		
		
			


			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2><?php _e('Author') ?></h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->


			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>				
				<!--?php get_links_list(); ?-->
				
				<li><h2><?php _e('Meta') ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional') ?>">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="<?php _e('XHTML Friends Network') ?>">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.')?> ">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

		</ul>
	</div>

