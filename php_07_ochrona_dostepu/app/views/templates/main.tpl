<!doctype html>
<html lang="pl">
<head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{$page_title|default:"Tytuł domyślny"}</title>
        
	<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
        <noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.scrolly.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.dropotron.min.js"></script>
	<script src="{$conf->app_url}/js/jquery.scrollex.min.js"></script>
	<script src="{$conf->app_url}/js/browser.min.js"></script>
	<script src="{$conf->app_url}/js/breakpoints.min.js"></script>
	<script src="{$conf->app_url}/js/util.js"></script>
	<script src="{$conf->app_url}/js/main.js"></script>

</head>
<body>

<div id="app_content" class="content">
{block name=content} Domyślna treść zawartości .... {/block}
</div>
    
</body>
</html>