// <?php
// Keep the starting tag commented else eval will fail! :O
// -------------------------------------------------------
error_reporting(E_ALL & ~E_WARNING);
// German language file for gMusic
// By Tomelyr
$lang["author"] = "Tomelyr"; // Should this still be your name?
$lang["author_attribution"] = "steamcommunity.com/profiles/76561197978538662"; // see above
$lang["lang"] = "German";
$lang["lang_code"] = "de";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a onclick="setlang('cy');">Cymraeg</a></li>
<li><a onclick="setlang('pt');">PortuguÃªs Europeu</a></li>
EOT;
// --- Translations
// Sidebar
$lang["name"] = "gMusic";
$lang["notfound"] = "notFound";
$lang["title"] = "gMusic";
$lang["title_caps"] = "gMUSIC";
$lang["title_subheading"] = "Wähle deine eigene Musik!";
$lang["side_home"] = "Startseite";
$lang["side_what"] = "Was ist gMusic?";
$lang["side_players"] = "Für Spieler";
$lang["side_owners"] = "Für Serverbesitzer";
$lang["side_devs"] = "Für Entwickler";
$lang["side_testimonials"] = "Rezension ";
$lang["side_songs"] = "Titel";
$lang["side_servers"] = "Servers";
$lang["side_dashboard"] = "Übersicht";
$lang["side_logout"] = "Ausloggen";
// Homepage
$lang["welcome"] = "Willkommen!";
$lang["cdn_by"] = "CDN bereitgestellt von ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Kontakt";
$lang["signinwithsteam"] = "Mit Steam einloggen!";
$lang["what_is_gmusic"] = "WAS IST gMUSIC?";
$lang["what_is_gmusic_text"] = 
"Keine Lust mehr die Ladeschirm Musik vorgeschrieben zu bekommen?
Mit gMusic kannst du aussuchen, was du hören möchtest!";
$lang["players"] = "SPIELER";
$lang["players_text"] = 
"Bist du ein Garry's Mod Spieler, welcher die Ladeschirm Musik ändern möchte oder sie komplett deaktivieren möchte?
Logge dich jetzt ein um ins Benutzer-CP zu gelangen.";
$lang["serverowners"] = "SERVER BESITZER";
$lang["serverowners_text"] = 
"Bist du ein Serverbesitzer und möchtest gMusic zu deinem Server hinzufügen?
Logge dich jetzt ein um ins Benutzer-CP zu gelangen.";
$lang["devs"] = "SERVER ENTWICKLER";
$lang["devs_text"] = 
"Bist du ein Entwickler und möchtest gMusic in deinen Ladebildschirm intrigieren?
Werf doch einen Blick auf unsere API Dokumentation!";
$lang["devs_button"] = "ZUR API DOKUMENTATION";
$lang["testimonials"] = "REZENSIONEN";
// Welcome!
$lang["wel_welcome"] = "Willkommen!";
$lang["wel_welcometo"] = "Willkommen bei gMusic!";
$lang["wel_regular"] = "Bist du ein regelmäsiger Spieler von Garry's Mod? href='/dashboard/'>Erstelle jetzt deine Playlist!</a>"; // don't edit the tags, <a> and </a>
$lang["wel_owner"] = "Bist du ein Server Besitzer oder Entwickler? <a href='/dashboard/servers'>Regestriere deinen Server jetzt bei gMusic!</a>"; // don't edit the tags, <a> and </a>
// Banned! :C
$lang["ban_banned"] = "Verbannt!";
$lang["ban_uhoh"] = "Uh oh! Es sieht so aus, als wärst du gebannt... :C";
$lang["ban_contact"] = 'Fühle dich frei mich <a href="/contact">zu kontaktieren</a> um gegen deinen Ban einspruch zu erheben.';
// Uh oh! :O
$lang["uhoh_uhoh"] = "Uh oh!";
$lang["uhoh_lookslike"] = "Etwas ging wohl schief...";
$lang["uhoh_reported"] = "Doch keine Panik, der Fehler wurd bereits gemeldet und wird hoffentlich bald behoben.";
// Dashboard
$lang["dash_title"] = "gMUSIC ÜBERSICHT";
$lang["dash_subheading"] = "Wähle deine eigene Musik!";
$lang["dash_songs"] = "Songs";
$lang["dash_servers"] = "Server";
$lang["dash_addasong"] = "Song hinzufügen.";
$lang["dash_addnewsong"] = "Neuen Song hinzufügen";
$lang["dash_mutesongs"] = "Musik stummschalten";
$lang["dash_unmutesongs"] = "Stummschaltung aufheben";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "FEHLGESCHLAGEN!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(noch nicht implementiert)";
$lang["dash_add"] = "Hinzufügen";
$lang["dash_duration"] = "Dauer";
$lang["dash_videoid"] = "Video ID";
$lang["dash_enable"] = "Aktivieren";
$lang["dash_disable"] = "Deaktivieren";
$lang["dash_delete"] = "Löschen";
$lang["dash_cancel"] = "Abrechen";
$lang["dash_email_doconfirm"] = "Bitte überprüfe dein Postfach für die Verifikationsemail! (Schau auch in dein Spamfach, wenn du sie nicht findest)";
$lang["dash_email_confirmed"] = 'Danke für die Bestätigung deiner Email! Du kannst nun einen<a data-toggle="modal" href="#addServerModal">Server hinzufügen</a>!';
$lang["dash_email_disposable"] = "Please don't use a disposable email, we'll never spam you. It's only incase something goes wrong.";
$lang["dash_email_notverified"] = "You can't add a server since you're email isn't verified yet!";
$lang["dash_addaserver"] = "Neuen Server hinzufügen.";
$lang["dash_addserver"] = "Server hinzufügen.";
$lang["dash_name"] = "Name";
$lang["dash_loadingurl"] = "Ladebildschirm URL";
$lang["dash_optional"] = "Optional";
$lang["dash_email_verifytitle"] = "Bitte verifiziere deine Email.";
$lang["dash_email"] = "Email";
$lang["dash_email_wontsell"] = "Wir werden sie niemals verkaufen!";
$lang["dash_email_sendconfirmation"] = "Bestätigung senden";
$lang["dash_songs_deletemsg"] = // below
'<p>Bist du sicher, dass du <b><?php echo($songtitle); ?></b> entfernen möchtest?</p>
<p>Du wirst nicht diesen Song nicht länger beim verbinden hören!</p>'; // don't edit the tags, <b> to </b>
$lang["dash_selectoradd"] = // below
'Bitte <a data-toggle="modal" href="#addSongModal">füge einen Song hinzu</a> oder wähle ein bestehenden aus der linken Seite.<br/>
Ein zufälliger Song wird abgespielt, wenn du dich zu einem Server verbindest.'; // don't edit the tags, <a> to </a>
$lang["dash_serverselectoradd"] = // below
'Bitte <a data-toggle="modal" href="#<?php echo($modal); ?>">füge einen Server hinzu</a> oder wähle ein bestehenden aus der linken Seite.'; // don't edit the tags, <a> to </a>
// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Uh oh! Hiernach hast du wohl eher nicht gesucht...";
$lang["404_contact"] = 'Wenn du von einem korrekten Link hierher geleitet wurdest, bitte <a href="/contact">kontaktiere mich</a> oder gehe zurück zur <a href="/">Startseite</a>.'; // don't edit the tags, <a> and </a> (edit inside)
// Etc
$lang["contact"] = "Kontakt";
