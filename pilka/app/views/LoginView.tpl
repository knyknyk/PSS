{extends file="main.tpl"}

{block name=top}
<h2 style="color:#2c3e50; margin-bottom: 20px;">Logowanie do systemu</h2>

<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-stacked" style="max-width: 400px; margin: auto; padding: 25px; background-color: #f9f9f9; box-shadow: 0 0 12px rgba(0,0,0,0.1); border-radius: 8px;">
    <fieldset>
        <label for="id_login" style="font-weight: bold;">Login</label>
        <input id="id_login" type="text" name="login" value="{$form->login}" placeholder="Wpisz login" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="id_pass" style="font-weight: bold; margin-top: 15px;">Hasło</label>
        <input id="id_pass" type="password" name="pass" placeholder="Wpisz hasło" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary" style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">Zaloguj się</button>
    </fieldset>
</form>
{/block}
