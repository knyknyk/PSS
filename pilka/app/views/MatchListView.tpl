{extends file="main.tpl"}

{block name=top}
<style>
    .top-menu {
        margin: 10px 0;
        padding: 10px;
        background: #f5f5f5;
        border-radius: 6px;
    }
    .top-menu a {
        margin-right: 15px;
        font-weight: 600;
        color: #1f8dd6;
        text-decoration: none;
        transition: color 0.3s;
    }
    .top-menu a:hover {
        color: #155d9a;
    }

    .bottom-margin {
        margin: 20px 0;
    }

    .table-wrapper {
        overflow-x: auto;
        margin-top: 20px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        background: #fff;
        padding: 10px;
    }

    table.pure-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    table.pure-table thead {
        background-color: #e1eaff;
        color: #0a3a75;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.9em;
    }

    table.pure-table th, table.pure-table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table.pure-table tbody tr:nth-child(odd) {
        background-color: #fafbff;
    }

    table.pure-table tbody tr:nth-child(even) {
        background-color: #f4f7ff;
    }

    /* Kolory wyników */
    .result-completed {
        color: #3fa34d; /* zielony */
        font-weight: 700;
    }
    .result-pending {
        color: #999;
        font-style: italic;
    }

    /* Tooltip dla daty */
    .match-date {
        position: relative;
        cursor: help;
        border-bottom: 1px dotted #999;
    }
    .match-date:hover::after {
        content: attr(data-full-date);
        position: absolute;
        bottom: 125%;
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: #fff;
        padding: 5px 8px;
        border-radius: 5px;
        white-space: nowrap;
        font-size: 0.8em;
        z-index: 10;
        opacity: 0.9;
    }

    .button-small {
        font-size: 0.85em;
        padding: 6px 10px;
        margin: 2px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        transition: filter 0.2s;
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

    .control-buttons {
        margin: 15px 0;
    }

    /* Responsive nagłówek */
    @media (max-width: 768px) {
        table.pure-table thead tr {
            display: none;
        }
        table.pure-table, table.pure-table tbody, table.pure-table tr, table.pure-table td {
            display: block;
            width: 100%;
        }
        table.pure-table tr {
            margin-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }
        table.pure-table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
            border: none;
            border-bottom: 1px solid #eee;
        }
        table.pure-table td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            width: 45%;
            padding-left: 15px;
            font-weight: 700;
            text-align: left;
            color: #555;
        }
    }
</style>

<h2>Aktualne mecze</h2>
<nav class="pure-menu pure-menu-horizontal top-menu">
    <a href="{$conf->action_root}simulateMatches" class="pure-menu-heading pure-menu-link">Symuluj mecze</a>
    <a href="{$conf->action_root}resetMatches" class="pure-menu-heading pure-menu-link">Przelosuj mecze</a>
</nav>

<div class="table-wrapper">
    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Liga</th>
                <th>Drużyna Gospodarz</th>
                <th>Wynik</th>
                <th>Drużyna Gość</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            {foreach $matches as $m}
                <tr>
                    <td data-label="Liga">{$m.league_name|default:"-"}</td>
                    <td data-label="Drużyna Gospodarz">{$m.home_name|default:"-"}</td>
                    <td data-label="Wynik" class="{if isset($m.home_goals)}result-completed{else}result-pending{/if}">
                        {if isset($m.home_goals)}
                            {$m.home_goals} : {$m.away_goals}
                        {else}
                            - : -
                        {/if}
                    </td>
                    <td data-label="Drużyna Gość">{$m.away_name|default:"-"}</td>
                    <td data-label="Data" class="match-date" data-full-date="{$m.match_date|date_format:"%A, %d %B %Y, %H:%M:%S"}">
                        {$m.match_date|date_format:"%Y-%m-%d %H:%M"}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

{/block}
