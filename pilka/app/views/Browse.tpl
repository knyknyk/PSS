{extends file="main.tpl"}

{block name=top}
<div class="bottom-margin" style="max-width: 600px; margin:auto;">
    <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_url}browse">
        <legend style="font-weight: bold; font-size: 1.3em; margin-bottom: 10px;">🔍 Wyszukaj klub lub zawodnika</legend>
        <fieldset>
            <input type="text" placeholder="Nazwa klubu lub zawodnika" name="search_query" value="{$form->query}" style="padding: 10px; font-size: 1em; border: 1px solid #ccc; border-radius: 4px;"/>
            <button type="submit" class="pure-button pure-button-primary" style="margin-top: 10px; width: 100%;">Szukaj</button>
        </fieldset>
    </form>
</div>
{/block}

{block name=bottom}
<div style="max-width: 900px; margin: 20px auto;">

    {if !$leagues|@count}
        <p style="color: #cc0000; font-weight: bold;">⚠️ Brak dostępnych lig do wyświetlenia.</p>
    {else}
        <h3 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 6px;">⚽ Ligi</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; margin-bottom: 30px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #3498db; color: white;">
                <th>Nazwa ligi</th>
                <th>Kraj</th>
                <th>Liczba klubów</th>
            </tr>
        </thead>
        <tbody>
            {foreach $leagues as $l}
            <tr>
                <td><strong>{$l.league_name}</strong></td>
                <td>{$l.country}</td>
                <td style="text-align: center;">{$l.number_of_clubs}</td>
            </tr>
            {/foreach}
        </tbody>
        </table>
    {/if}

    {if $clubs|@count}
        <h3 style="color: #2c3e50; border-bottom: 2px solid #27ae60; padding-bottom: 6px;">🏟️ Kluby</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; margin-bottom: 30px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #27ae60; color: white;">
                <th>Nazwa klubu</th>
                <th>Miasto</th>
                <th>Stadion</th>
                <th style="text-align: center;">Pozycja w lidze</th>
            </tr>
        </thead>
        <tbody>
            {foreach $clubs as $c}
            <tr>
                <td><strong>{$c.club_name}</strong></td>
                <td>{$c.city}</td>
                <td>{$c.stadium}</td>
                <td style="text-align: center;">{$c.league_position}</td>
            </tr>
            {/foreach}
        </tbody>
        </table>
    {/if}

    {if $players|@count}
        <h3 style="color: #2c3e50; border-bottom: 2px solid #e67e22; padding-bottom: 6px;">👤 Zawodnicy</h3>
        <table class="pure-table pure-table-bordered pure-table-striped" style="width: 100%; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #e67e22; color: white;">
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Pozycja</th>
                <th style="text-align: center;">Wiek</th>
                <th style="text-align: center;">Bramki</th>
            </tr>
        </thead>
        <tbody>
            {foreach $players as $p}
            <tr>
                <td>{$p.first_name}</td>
                <td>{$p.last_name}</td>
                <td>{$p.position}</td>
                <td style="text-align: center;">{$p.age}</td>
                <td style="text-align: center;">{$p.goals}</td>
            </tr>
            {/foreach}
        </tbody>
        </table>
    {/if}

</div>
{/block}
