{extends file="main.tpl"}

{block name=top}
<h1 style="text-align:center; color:#004080; margin-bottom: 15px;">Witamy w aplikacji śledzącej rozgrywki piłkarskie!</h1>

<p style="max-width: 700px; margin: 0 auto 25px; font-size: 1.1em; line-height: 1.5;">
    Śledź na bieżąco wyniki, tabele, składy drużyn oraz profile zawodników. Nasza aplikacja pozwala Ci być bliżej ulubionych lig i klubów.
</p>

<div style="text-align:center; margin-bottom: 40px;">
    <a href="{$conf->action_root}browse" class="pure-button pure-button-primary" style="font-size:1.2em; padding: 12px 30px;">
        Przeglądaj ligi i drużyny &raquo;
    </a>
</div>

<h2 style="color:#0066cc; margin-bottom: 20px;">Dostępne ligi</h2>

{if isset($leagues) && $leagues|@count > 0}
    <ul style="max-width: 600px; margin: 0 auto; padding-left: 0; list-style: none;">
        {foreach $leagues as $league}
        <li style="background: #e8f0fe; margin-bottom: 10px; padding: 15px 20px; border-radius: 6px; font-weight: 600;">
            <a href="{$conf->action_root}browse/{$league.id_league}" style="color:#004080; text-decoration:none;">
                {$league.league_name}
            </a>
        </li>
        {/foreach}
    </ul>
{else}
    <p style="text-align:center; font-style: italic; color: #888;">Brak dostępnych lig do wyświetlenia.</p>
{/if}

{/block}

{block name=bottom}
<div style="max-width: 700px; margin: 40px auto; font-size: 0.9em; color: #555; text-align:center;">
    <p>
        Aplikacja jest projektem edukacyjnym stworzonym przez Jakub Nyk. <br>
        Korzystaj i zgłaszaj sugestie na adres email: jakub.nyk@onet.pl
    </p>
</div>
{/block}
