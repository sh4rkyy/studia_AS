{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="row gtr-uniform gtr-50">
			<div for="id_login" class="col-2 col-12-xsmall">login:
                            <input id="id_login" type="text" name="login"/></div>
		</div>
        <div class="row gtr-uniform gtr-50">
			<div for="id_pass" class="col-2 col-12-xsmall">pass:
                            <input id="id_pass" type="password" name="pass" /><br /></div>
		</div>
			<input type="submit" value="zaloguj" class="button primary"/>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
