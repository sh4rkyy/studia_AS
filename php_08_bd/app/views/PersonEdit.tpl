{extends file="main.tpl"}

{block name=top}

<div id="main" class="wrapper style1">
<form action="{$conf->action_root}personSave" method="post" class="row gtr-uniform gtr-50">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
        </div>
		<div class="pure-control-group">
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="{$form->birthdate}"><br>
        </div>
		<div class="pure-controls">
			<input type="submit" class="button primary" value="Zapisz"/>
			<a class="button" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
