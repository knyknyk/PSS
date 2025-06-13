{extends file="main.tpl"}

{block name=top}
<nav class="pure-menu pure-menu-horizontal">
    <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Użytkownicy</a>
    <a href="{$conf->action_root}leagueList" class="pure-menu-heading pure-menu-link">Ligi</a>
    <a href="{$conf->action_root}clubList" class="pure-menu-heading pure-menu-link">Drużyny</a>
    <a href="{$conf->action_root}playerList" class="pure-menu-heading pure-menu-link">Gracze</a>
</nav>
{/block}

{block name=bottom}
<style>
    .bottom-margin {
        margin: 20px 0;
    }

    .table-wrapper {
        overflow-x: auto;
        margin-top: 20px;
        box-shadow: 0 0 8px rgba(0,0,0,0.05);
        border-radius: 8px;
    }

    table.pure-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 900px;
    }

    table.pure-table thead {
        background-color: #f2f2f2;
    }

    table.pure-table th, table.pure-table td {
        padding: 10px;
        text-align: center;
    }

    table.pure-table tbody tr:nth-child(odd) {
        background-color: #fcfcfc;
    }

    table.pure-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    .button-small {
        font-size: 0.85em;
        padding: 6px 10px;
        margin: 2px;
    }

    .button-secondary {
        background-color: #1f8dd6;
        color: white;
    }

    .button-warning {
        background-color: #d64b1f;
        color: white;
    }

    .button-success {
        background-color: #3fa34d;
        color: white;
    }

    .button-secondary:hover,
    .button-warning:hover,
    .button-success:hover {
        filter: brightness(1.1);
    }

    #searchInput {
        margin-top: 10px;
        padding: 8px;
        width: 100%;
        max-width: 400px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>

<div class="bottom-margin">
    <a class="pure-button button-success" href="{$conf->action_root}playerNew">+ Nowy zawodnik</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwisku..." />

<div class="table-wrapper">
<table class="pure-table pure-table-bordered" id="playerTable">
    <thead>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Wiek</th>
            <th>Pozycja</th>
            <th>Wzrost (cm)</th>
            <th>Data urodzenia</th>
            <th>ID drużyny</th>
            <th>Bramki</th>
            <th>Opcje</th>
        </tr>
    </thead>
    <tbody>
        {foreach $players as $p}
        <tr>
            <td>{$p.first_name}</td>
            <td>{$p.last_name}</td>
            <td>{$p.age}</td>
            <td>{$p.position}</td>
            <td>{$p.height}</td>
            <td>{$p.date_of_birth}</td>
            <td>{$p.id_team}</td>
            <td>{$p.goals}</td>
            <td>
                <a class="button-small pure-button button-secondary" href="{$conf->action_url}playerEdit/{$p.id_player}">Edytuj</a>
                <a class="button-small pure-button button-warning" href="{$conf->action_url}playerDelete/{$p.id_player}">Usuń</a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
</div>

<script>
    const input = document.getElementById("searchInput");
    input.addEventListener("keyup", function() {
        const filter = input.value.toLowerCase();
        const rows = document.querySelectorAll("#playerTable tbody tr");
        rows.forEach(row => {
            const lastName = row.cells[1].textContent.toLowerCase();
            row.style.display = lastName.includes(filter) ? "" : "none";
        });
    });
</script>
{/block}
