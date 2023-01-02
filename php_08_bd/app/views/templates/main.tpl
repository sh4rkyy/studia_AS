<!doctype html>
<html lang="pl">
<head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{$page_title|default:"Tytuł domyślny"}</title>
        
	<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />

</head>
<body class>
<header id="header">
    <nav id="nav">
        <ul>
	<li><a href="{$conf->action_root}personList">Lista</a></li>
{if count($conf->roles)>0}
    <li><a href="{$conf->action_root}logout" class="button primary">Wyloguj</a></li>
{else}	
    <li><a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a></li>
{/if}
</ul>
    </nav>
</header>

{block name=top} {/block}

{block name=messages}

{if $msgs->isError()}
<div class="messages error bottom-margin">
	<ul>
	{foreach $msgs->getErrors() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{if $msgs->isInfo()}
<div class="messages info bottom-margin">
	<ul>
	{foreach $msgs->getInfos() as $msg}
	{strip}
		<li>{$msg}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}

</body>

</html>