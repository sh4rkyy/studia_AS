{extends file="main.tpl"}

{block name=content}

<header id="header">
    <h1 id="logo"><a href="{$conf->action_url}logout">wyloguj</a></h1>
    <nav id="nav">
        <ul>
            <li>użytkownik: {$user->login}, rola: {$user->role}</li>
        </ul>
</nav>
</header>
 
<div id="main" class="wrapper style1">
    <div class="container">
	<header class="major">
	<h2>Przykład 06b</h2>
	<p>Kontroler glowny</p>
        
        <section>
            <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-4 col-12-xsmall">
                    <label for="x">Pierwsza liczba</label>
                    <input id="x" type="text" placeholder="wartość x" name="x" value="{$form->x}">
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="y">Druga liczba</label>
                    <input id="y" type="text" placeholder="wartość y" name="y" value="{$form->y}">
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="op">Operacja</label>
                    <select id="op" name="op">
                        {if isset($res->op_name)}
                        <option value="{$form->op}">ponownie: {$res->op_name}</option>
                        <option value="" disabled="true">---</option>
                        {/if}
                        <option value="plus">(+) dodaj</option>
                        <option value="minus">(-) odejmij </option>
                        <option value="times">(*) pomnóż</option>
                        {if $user->role == "admin"}
                        <option value="div">(/) podziel</option>
                        {/if}
                        </select>
                </div>
                
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </div>
            </div>
            </form>
        </section>
    </div>
</div>

{include file='messages.tpl'}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}