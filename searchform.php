<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" style="width: 100px" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>
