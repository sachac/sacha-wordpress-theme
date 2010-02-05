<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<div id="cse" style="width: 100%;">Loading</div>
<script type="text/javascript">
google.load('search', '1', {language : 'en'});
google.setOnLoadCallback(function(){
    var customSearchControl = new google.search.CustomSearchControl('014317669515640043672:druvkypiu10');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
  }, true);

</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
<noscript>
  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
	<input type="submit" id="searchsubmit" value="Search" />
</form>
</noscript>
