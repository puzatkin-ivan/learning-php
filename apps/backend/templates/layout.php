<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <?php
    include_http_metas();
    include_metas();
    include_title();
    include_stylesheets();
    ?>
	<link rel="shortcut icon" href="/favicon.ico"/>

</head>
<body>
    <?php
    include "_header.php";
    echo $sf_content;
    include_javascripts();
    ?>
</body>
</html>
