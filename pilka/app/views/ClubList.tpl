{extends file="main.tpl"}

{block name=top}
    <style>
        .top-menu {
            margin: 10px 0;
            padding: 10px;
            background: #f5f5f5;
        }
        .top-menu a {
            margin-right: 10px;
        }
    </style>

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
        min-width: 800px;
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
    <a class="pure-button button-success" href="{$conf->action_root}clubNew">+ Nowy klub</a>
</div>

<input type="text" id="searchInput" placeholder="Filtruj po nazwie klubu..." />

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered" id="clubTable">
        <thead>
            <tr>
                <th>Nazwa klubu</th>
                <th>Liczba zawodników</th>
                <th>Miasto</th>
                <th>Stadion</th>
                <th>Pozycja w lidze</th>
                <th>ID ligi</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            {foreach $club as $c}
            <tr>
                <td>{$c["club_name"]}</td>
                <td>{$c["number_of_players"]}</td>
                <td>{$c["city"]}</td>
                <td>{$c["stadium"]}</td>
                <td>{$c["league_position"]}</td>
                <td>{$c["id_league"]}</td>
                <td>
                    <a class="button-small pure-button button-secondary" href="{$conf->action_url}clubEdit/{$c['id_club']}">Edytuj</a>
                    <a class="button-small pure-button button-warning" href="{$conf->action_url}clubDelete/{$c['id_club']}">Usuń</a>
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
        const rows = document.querySelectorAll("#clubTable tbody tr");
        rows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            row.style.display = name.includes(filter) ? "" : "none";
        });
    });
</script>
{/block}
