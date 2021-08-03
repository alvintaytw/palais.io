<?php
$link = mysql_connect(_EIP_DB_HOST, _EIP_DB_USERNAME, _EIP_DB_PASSWORD);
$db_selected = mysql_select_db(_EIP_DB_DATABASE, $link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1">
<title><?php echo $_PAGE_TITLE?> - Palais</title>
<link rel="stylesheet" type="text/css" id="LinkCss" href="displays/css/palais-v5.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="displays/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="displays/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8">
<script type="text/javascript" src="displays/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
});
</script>
<script type="text/javascript" src="displays/js/swfobject.js"></script>
<script type="text/javascript" src="displays/js/slider.js"></script>
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10766595-4', 'palais.sg');
  ga('send', 'pageview');

</script>

</head>

<body>