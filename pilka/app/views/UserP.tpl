{extends file="main.tpl"}

{block name=top}
<h2 style="color:#2c3e50; margin-bottom: 20px;">Panel użytkownika</h2>
{/block}

{block name=bottom}
<form action="{$conf->action_root}userSave" method="post" class="pure-form pure-form-stacked" style="max-width: 500px; margin: auto; box-shadow: 0 0 12px rgba(0,0,0,0.1); padding: 25px; border-radius: 8px; background-color: #fafafa;">
    <fieldset>
        <label style="font-weight: bold; margin-top: 15px;">Imię</label>
        <input type="text" value="{$user.first_name}" disabled style="background-color: #e9ecef; cursor: not-allowed; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        
        <label style="font-weight: bold; margin-top: 15px;">Nazwisko</label>
        <input type="text" value="{$user.last_name}" disabled style="background-color: #e9ecef; cursor: not-allowed; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Login</label>
        <input type="text" name="login" value="{$user.login}" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Email</label>
        <input type="email" name="email" value="{$user.email}" required style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <label style="font-weight: bold; margin-top: 15px;">Nowe hasło (opcjonalnie)</label>
        <input type="password" name="password" placeholder="Wpisz nowe hasło" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary" style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">Zapisz zmiany</button>
    </fieldset>
</form>
{/block}
