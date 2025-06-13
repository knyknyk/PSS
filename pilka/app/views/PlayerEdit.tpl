{extends file="main.tpl"}

{block name=top}
<style>
    form.pure-form-aligned {
        max-width: 600px;
        margin: 20px auto;
        background: #fff;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    form.pure-form-aligned fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    form.pure-form-aligned legend {
        font-size: 1.6em;
        margin-bottom: 20px;
        font-weight: 700;
        color: #333;
        border-bottom: 2px solid #1f8dd6;
        padding-bottom: 8px;
    }

    .pure-control-group {
        margin-bottom: 18px;
    }

    .pure-control-group label {
        width: 140px;
        font-weight: 600;
        color: #444;
        padding-top: 8px;
    }

    .pure-control-group label.required::after {
        content: " *";
        color: #d64b1f;
        font-weight: 700;
    }

    .pure-control-group input[type="text"],
    .pure-control-group input[type="number"],
    .pure-control-group input[type="date"] {
        width: calc(100% - 150px);
        padding: 8px 12px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 6px;
        transition: border-color 0.3s ease;
    }

    .pure-control-group input[type="text"]:focus,
    .pure-control-group input[type="number"]:focus,
    .pure-control-group input[type="date"]:focus {
        border-color: #1f8dd6;
        outline: none;
        box-shadow: 0 0 6px rgba(31,141,214,0.4);
    }

    .pure-controls {
        margin-top: 30px;
        padding-left: 140px;
    }

    .pure-button-primary {
        background-color: #1f8dd6;
        border-radius: 6px;
        padding: 10px 22px;
        font-size: 1em;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .pure-button-primary:hover {
        background-color: #1769aa;
    }

    .button-secondary {
        background-color: #d64b1f;
        border-radius: 6px;
        padding: 10px 22px;
        font-size: 1em;
        margin-left: 10px;
        color: white;
        font-weight: 600;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
        line-height: 1.5;
    }

    .button-secondary:hover {
        background-color: #a73b18;
        text-decoration: none;
        color: white;
    }
</style>

<nav class="pure-menu pure-menu-horizontal" style="margin-bottom: 20px;">
    <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Użytkownicy</a>
    <a href="{$conf->action_root}leagueList" class="pure-menu-heading pure-menu-link">Ligi</a>
    <a href="{$conf->action_root}clubList" class="pure-menu-heading pure-menu-link">Drużyny</a>
    <a href="{$conf->action_root}playerList" class="pure-menu-heading pure-menu-link">Gracze</a>
</nav>
{/block}

{block name=bottom}
<form action="{$conf->action_root}playerSave" method="post" class="pure-form pure-form-aligned" autocomplete="off">
    <fieldset>
        <legend>Dane zawodnika</legend>

        <div class="pure-control-group">
            <label for="first_name" class="required">Imię</label>
            <input id="first_name" type="text" name="first_name" placeholder="Podaj imię" value="{$form->first_name|escape}">
        </div>

        <div class="pure-control-group">
            <label for="last_name" class="required">Nazwisko</label>
            <input id="last_name" type="text" name="last_name" placeholder="Podaj nazwisko" value="{$form->last_name|escape}">
        </div>

        <div class="pure-control-group">
            <label for="age" class="required">Wiek</label>
            <input id="age" type="number" name="age" min="10" max="100" placeholder="np. 25" value="{$form->age|escape}">
        </div>

        <div class="pure-control-group">
            <label for="position" class="required">Pozycja</label>
            <input id="position" type="text" name="position" placeholder="np. Napastnik" value="{$form->position|escape}">
        </div>

        <div class="pure-control-group">
            <label for="height" class="required">Wzrost (cm)</label>
            <input id="height" type="number" name="height" min="100" max="250" placeholder="np. 185" value="{$form->height|escape}">
        </div>

        <div class="pure-control-group">
            <label for="date_of_birth" class="required">Data urodzenia</label>
            <input id="date_of_birth" type="date" name="date_of_birth" value="{$form->date_of_birth|escape}">
        </div>

        <div class="pure-control-group">
            <label for="id_team" class="required">ID drużyny</label>
            <input id="id_team" type="number" name="id_team" min="1" placeholder="np. 5" value="{$form->id_team|escape}">
        </div>

        <div class="pure-control-group">
            <label for="goals" class="required">Liczba goli</label>
            <input id="goals" type="number" name="goals" min="0" placeholder="np. 12" value="{$form->goals|escape}">
        </div>

        <div class="pure-controls">
            <input type="submit" class="pure-button pure-button-primary" value="Zapisz">
            <a class="button-secondary" href="{$conf->action_root}playerList">Powrót</a>
        </div>
    </fieldset>

    <input type="hidden" name="id_player" value="{$form->id_player|escape}">
</form>
{/block}
