<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('014317669515640043672:druvkypiu10');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setSearchFormRoot('cse-search-form');
    
    options.setAutoComplete(true);
    customSearchControl.draw('cse', options);
  }, true);
</script>
<noscript>
  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>
</noscript>
