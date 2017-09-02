<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/'); // change this to change which folder you want your content to be stored in

$default_title = 'HoneDrops';
$file_format = ".md"; // change this to choose a file type, be sure to include the period
$markdown_js = 'js/marked.min.js';
$markdown_css = 'css/github-markdown.css';

// Get request url and script url
$url = '';
$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

// Get our url path and trim the / of the left and the right
if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
// Get js and css path
$root_url = str_replace('index.php', '', $script_url);

// Get the file path
if($url) $file = strtolower(CONTENT_DIR . $url);
else $file = CONTENT_DIR .'index';

// Load the file
if(is_dir($file)) $file = CONTENT_DIR . $url .'/index' . $file_format;
else $file .=  $file_format;

// Show 404 if file cannot be found
if(file_exists($file)) $content = file_get_contents($file);
else $content = file_get_contents(CONTENT_DIR .'404' . $file_format);
?>
<?php include 'template.php'; ?>
