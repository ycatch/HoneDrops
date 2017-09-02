<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $default_title; ?></title>
<!-- css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap-responsive.css">
<link rel="stylesheet" href= "<?php echo $root_url.$markdown_css; ?>">
<link rel="stylesheet" href= "<?php echo $root_url."css/style.css"; ?>">
</head>
<body>
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
<script src="<?php echo $root_url.$markdown_js; ?>"></script>
<script src="<?php echo $root_url."js/honedrops.js"; ?>"></script>
</body>
</html>
