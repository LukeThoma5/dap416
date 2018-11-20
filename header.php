<?php
function render_header_top($desc)  {
    $header = <<<headerText
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="Description" content="$desc" />
        <script defer src="min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="styles/common.css"/>
headerText;
    
    echo $header;
};

function render_header_bottom($title)  {
    $header = <<<headerText
    
    <title>$title</title>
    </head>
    
    <body>
headerText;
    
    echo $header;
};
    
$render_header = function($title, $style, $desc)  {
render_header_top($desc);
echo "<link rel=\"stylesheet\" href=\"styles/$style.css\" />";
render_header_bottom($title);
};




?>