<div class="large-4 columns rightbar nocontent robots-noindex">
  <!--googleoff: index-->
  <ul>
    <?php if (function_exists('clb_plus')) { clb_plus(); } ?>
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : else : ?>

    <li><h2><?php _e('Categories', 'sacha'); ?></h2>
      <ul>
        <?php wp_list_categories('sort_column=name'); ?>
      </ul>
    </li>
    <li><h2><?php _e('Archives', 'sacha'); ?></h2>
      <ul>
	<?php wp_get_archives('type=monthly'); ?>
      </ul>
      

      <li><h2><?php _e('Meta', 'sacha'); ?></h2>
	<ul>
	  <?php wp_register(); ?>
	  <li><?php wp_loginout(); ?></li>
	  <?php wp_meta(); ?>
	</ul>
      </li>

      

      <?php endif; ?>

  </ul>

</div>

<!-- End Sidebar -->
