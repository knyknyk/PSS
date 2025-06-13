{extends file="main.tpl"}

{block name=top}
<h2 style="color:#2c3e50; margin-bottom: 20px;">Rejestracja użytkownika</h2>
{/block}

{block name=bottom}
<form action="{$conf->action_url}register" method="post"
      class="pure-form pure-form-stacked"
      style="max-width: 500px; margin: auto; padding: 25px; background-color: #f9f9f9;
             box-shadow: 0 0 12px rgba(0,0,0,0.1); border-radius: 8px;">

    <fieldset>
        <label for="login" style="font-weight: bold;">Login</label>
        <input type="text" name="login" id="login" placeholder="Twój login" required
               value="{$form->login}" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="email" style="font-weight: bold; margin-top: 15px;">Email</label>
        <input type="email" name="email" id="email" placeholder="Twój email" required
               value="{$form->email}" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="password" style="font-weight: bold; margin-top: 15px;">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Hasło" required
               style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="password_confirm" style="font-weight: bold; margin-top: 15px;">Powtórz hasło</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Powtórz hasło" required
               style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="first_name" style="font-weight: bold; margin-top: 15px;">Imię</label>
        <input type="text" name="first_name" id="first_name" required
               value="{$form->first_name}" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <label for="last_name" style="font-weight: bold; margin-top: 15px;">Nazwisko</label>
        <input type="text" name="last_name" id="last_name" required
               value="{$form->last_name}" style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">

        <button type="submit" class="pure-button pure-button-primary"
                style="margin-top: 25px; width: 100%; font-size: 1.1em; padding: 12px;">
            Zarejestruj się
        </button>
    </fieldset>
</form>
{/block}
