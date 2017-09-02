<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $default_title; ?></title>
<!-- css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href= "<?php echo $root_url.$markdown_css; ?>">
<link rel="stylesheet" href= "<?php echo $root_url."css/style.css"; ?>">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $root_url; ?>"><?php echo $default_title; ?></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo $root_url; ?>">Home</a></li>
					<li><a href="<?php echo $root_url; ?>sub01/index">Sub 01</a></li>
					<li><a href="<?php echo $root_url; ?>sub01/sub11/index">Sub 01/Sub 11</a></li>
					<li><a href="<?php echo $root_url; ?>sub01/sub12/index">Sub 01/Sub 11</a></li>
                    <li><a href="<?php echo $root_url; ?>sub02/index">Sub 02</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-8">
                <div id="md_out" class="markdown-body"></div>
                <div id="md_src"><?php echo $content; ?></div>
            </div>
        </div>
    </div>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $root_url.$markdown_js; ?>"></script>
<script src="<?php echo $root_url."js/honedrops.js"; ?>"></script>
</body>
</html>
