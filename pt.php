// <?php
// Keep the starting tag commented else eval will fail! :O
// -------------------------------------------------------
// European Portuguese language file for gMusic
// By SmOkEwOw
$lang["author"] = "SmOkEwOw";
$lang["author_attribution"] = "steamcommunity.com/id/SmOkEwOw";
$lang["lang"] = "Português Europeu";
$lang["lang_code"] = "pt";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a href="/lang">Help Translate!</a></li>
<li role="separator" class="divider"></li>
<li><a onclick="setlang('en');">English</a></li>
<li><a onclick="setlang('cy');">Cymraeg</a></li>
<li><a onclick="setlang('de');">Deutsche</a></li>
EOT;
 
// --- Translations
 
// Sidebar
 
$lang["name"] = "gMusic";
$lang["notfound"] = "notFound";
$lang["title"] = "gMusic";
$lang["title_caps"] = "gMUSIC";
$lang["title_subheading"] = "Escolha a sua musica!";
 
$lang["side_home"] = "Inicio";
$lang["side_what"] = "O que Ã© isto?";
$lang["side_players"] = "Para Jogadores";
$lang["side_owners"] = "Para Donos";
$lang["side_devs"] = "Para Desenvolvedores";
$lang["side_testimonials"] = "Testemunhos";
 
$lang["side_songs"] = "Musicas";
$lang["side_servers"] = "Servidores";
 
$lang["side_dashboard"] = "Painel de Controlo";
$lang["side_logout"] = "Encerrar SessÃ£o";
 
// Homepage
 
$lang["welcome"] = "Bem-vindo!";
$lang["cdn_by"] = "CDN por ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Contato";
$lang["signinwithsteam"] = "Sign in with Steam!";
 
$lang["what_is_gmusic"] = "O QUE Ã‰ O gMUSIC?";
$lang["what_is_gmusic_text"] =
"Odeia a musica de carregamento do servidor?
 
Com o gMusic podes escolher a musica que queres ouvir!";
 
$lang["players"] = "JOGADORES";
$lang["players_text"] =
"Ã‰s um jogador de Garry's Mod que deseja mudar a musica dos servidores ou mesmo desabilitar-la completamente?
 
Inicie sessÃ£o com a steam abaixo para continuar para o painel de controlo.";
 
$lang["serverowners"] = "DONOS DE SERVIDORES";
$lang["serverowners_text"] =
"EstÃ¡s interresado em adicionar o gMusic ao teu servidor?
 
Inicie SessÃ£o com a steam abaixo para continuar para o painel de controlo.";
 
$lang["devs"] = "DESENVOLVEDORES";
$lang["devs_text"] =
"Ã‰s um desenvolvedor interresado em integrar o gMusic no teu site?
 
DÃ¡ uma vista de olhos no API REFERENCE!";
$lang["devs_button"] = "VER API REFERENCE";
 
$lang["testimonials"] = "TESTEMUNHOS";

// Welcome!
$lang["wel_welcome"] = "Bem-vindo!";
$lang["wel_welcometo"] = "Bem-vindo gMusic!";
$lang["wel_regular"] = "Ã‰s um jogador regular de Garry's Mod? <a href='/dashboard/'>Escolhe as musicas que queres ouvir!</a>"; // don't edit the tags, <a> and </a>
$lang["wel_owner"] = "Tens um servidor ou Ã©s desenvolvedor? <a href='/dashboard/servers'>Registra-te no gMusic ainda hoje!</a>"; // don't edit the tags, <a> and </a>

// Banned! :C
$lang["ban_banned"] = "Banned!";
$lang["ban_uhoh"] = "Uh oh! Looks like you're banned... :C";
$lang["ban_contact"] = 'Feel free to <a href="/contact">contact me</a> to appeal this ban.';

// Uh oh! :O
$lang["uhoh_uhoh"] = "Uh oh!";
$lang["uhoh_lookslike"] = "Looks like something went wrong!";
$lang["uhoh_reported"] = "Don't worry though, the error has been reported to a developer, and he'll fix it or something hopefully.";
 
// Dashboard
$lang["dash_title"] = "gMUSIC DASHBOARD";
$lang["dash_subheading"] = "Escolha a sua musica!";
$lang["dash_songs"] = "Musicas";
$lang["dash_servers"] = "Servidores";
$lang["dash_addasong"] = "Adicionar uma musica!";
$lang["dash_addnewsong"] = "Adicionar musica";
$lang["dash_mutesongs"] = "Desabilitar musicas";
$lang["dash_unmutesongs"] = "Abilitar musicas";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "FALHOU!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(nÃ£o implementado)";
$lang["dash_add"] = "Adicionar";
$lang["dash_duration"] = "DuraÃ§Ã£o";
$lang["dash_videoid"] = "ID do Video";
$lang["dash_enable"] = "Abilitar";
$lang["dash_disable"] = "Desabilitar";
$lang["dash_delete"] = "Apagar";
$lang["dash_cancel"] = "Cancelar";
$lang["dash_email_doconfirm"] = "Por favor verifique o seu e-mail! (Verifique o lixo se nÃ£o encontrar nada)";
$lang["dash_email_confirmed"] = 'Obrigado por verificares o teu e-mail! Agora podes <a data-toggle="modal" href="#addServerModal">adicionar um servidor</a>!';
$lang["dash_email_disposable"] = "Por favor utilize o seu e-mail principal, no caso de alguma coisa de mal acontecer.";
$lang["dash_email_notverified"] = "SÃ³ podes adicionar um servidor depois de verificares o teu e-mail!";
$lang["dash_addaserver"] = "Adicionar um novo servidor!";
$lang["dash_addserver"] = "Adicionar um servidor!";
$lang["dash_name"] = "Nome";
$lang["dash_loadingurl"] = "URL da pÃ¡gina de carregamento";
$lang["dash_optional"] = "Opcional";
$lang["dash_email_verifytitle"] = "Verifique o seu e-mail!";
$lang["dash_email"] = "Email";
$lang["dash_email_wontsell"] = "Nunca o iremos vender!";
$lang["dash_email_sendconfirmation"] = "Enviar confirmaÃ§Ã£o";
$lang["dash_actions"] = "Actions";
$lang["dash_songs_deletemsg"] = // below
'<p>Desejas eliminar a musica: <b><?php echo($songtitle); ?></b>?</p>
<p>NÃ£o irÃ¡s ouvir mais este som se o fizeres!</p>'; // don't edit the tags, <b> to </b>
$lang["dash_selectoradd"] = // below
'Por favor <a data-toggle="modal" href="#addSongModal">adicione uma musica</a> ou selecione uma existente Ã  esquerda.<br/>
SerÃ¡ reproduzido um som aleatÃ³rio quando entrares num servidor.'; // don't edit the tags, <a> to </a>
$lang["dash_serverselectoradd"] = // below
'Por favor <a data-toggle="modal" href="#<?php echo($modal); ?>">adicione um servidor</a> ou selecione uma existente Ã  esquerda.'; // don't edit the tags, <a> to </a>
 
// Servers
$lang["dash_resetapi"] = "RESET APIKEY";
$lang["dash_setupinstructions"] = "Setup Instructions";
$lang["dash_setupinstructions_text"] = // don't worry about editing this part
<<<EOT
<ul>
  <li>You will need the webserver hosting your loading screen to be running PHP for gMusic to work correctly.</li>
  <li>If you don't have PHP, you can use a different programming language, such as ASP, as long as the steamid is being filled out correctly!</li>
</ul>
<ol>
  <li>Find the file for your loading screen.</li>
  <li>If you already have music on your loading screen, replace the &lt;audio&gt; element or how ever you are playing the music with the code found under the Embed Code tab. </li>
  <li>If your loading screen does not already have music, place the embed at the bottom near the &lt;/body&gt; tag.</li>
</ol>
EOT;
$lang["dash_embedcode"] = "Embed Code";
$lang["dash_customjscode"] = "Custom JS Code";
$lang["dash_customjscode_text"] = "The custom javascript code section is being deprecated! Please use the soon to come <a href='/api'>API</a> instead!";
$lang["dash_serverdelete"] = // below 
"
<p>Are you you wish to delete <b>%s</b>?</p>
<p>Any custom music on your loading screen will stop functioning!</p>
";
$lang["dash_resetapikey_modal_title"] = "Reset API Key?";
$lang["dash_resetapikey_modal_text"] = // don't worry about editing this part
<<<EOT
<p>Are you you wish to reset the API Key for <b>%s</b>?</p>
<p>Make sure you update the API key on your embeds!</p>
EOT;
$lang["dash_totalconnects"] = "Total connects";

// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Ops! Isto nÃ£o era o que estavas Ã  procura!";
$lang["404_contact"] = 'Se vieste aqui por um link valido por favor <a href="/contact">contate-me</a> ou podes <a href="/">voltar Ã  pagina inicial</a>.'; // don't edit the tags, <a> and </a> (edit inside)
 
// Etc
$lang["contact"] = "Contatos";
