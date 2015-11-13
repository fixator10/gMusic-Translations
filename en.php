// <?php
// Keep the starting tag commented else eval will fail! :O
// -------------------------------------------------------
// English language file for gMusic
// By Connor McFarlane
$lang["author"] = "Connor McFarlane";
$lang["author_attribution"] = "connormcf.com";
$lang["lang"] = "English";
$lang["lang_code"] = "en";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a href="/lang">Help Translate!</a></li>
<li role="separator" class="divider"></li>
<li><a onclick="setlang('pt');">Português Europeu</a></li>
<li><a onclick="setlang('de');">Deutsche</a></li>
<li><a onclick="setlang('ru');">Русский</a></li>
EOT;

// --- Translations

// Sidebar

$lang["name"] = "gMusic";
$lang["notfound"] = "notFound";
$lang["title"] = "gMusic";
$lang["title_caps"] = "gMUSIC";
$lang["title_subheading"] = "Pick your own music!";

$lang["side_home"] = "Home";
$lang["side_what"] = "What is it?";
$lang["side_players"] = "For Players";
$lang["side_owners"] = "For Owners";
$lang["side_devs"] = "For Developers";
$lang["side_testimonials"] = "Testimonials";
$lang["side_premium"] = "Premium";
$lang["side_stats"] = "Statistics";

$lang["side_songs"] = "Songs";
$lang["side_servers"] = "Servers";

$lang["side_dashboard"] = "Dashboard";
$lang["side_logout"] = "Logout";

// Homepage

$lang["welcome"] = "Welcome!";
$lang["cdn_by"] = "CDN by ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Contact";
$lang["signinwithsteam"] = "Sign in with Steam!";

$lang["stats"] = "STATISTICS";
$lang["stats_songs"] = "Total songs registered with gMusic";
$lang["stats_users"] = "Total users registered with gMusic";
$lang["stats_servers"] = "Total servers registered with gMusic";
$lang["stats_betas"] = "Total servers registered with beta gMusic";

$lang["what_is_gmusic"] = "WHAT IS gMUSIC?";
$lang["what_is_gmusic_text"] = 
"Hate having to listen to the loading music forced apon you by server owners?

Now with gMusic, you can pick what you want to listen to!";

$lang["players"] = "PLAYERS";
$lang["players_text"] = 
"Are you a Garry's Mod player looking to change the music you hear on all servers or disable it entirely?

Sign in with steam below to continue to the control panel.";

$lang["serverowners"] = "SERVER OWNERS";
$lang["serverowners_text"] = 
"Are you a server owner looking to add gMusic to your server's loading screen?

Sign in with steam below to continue to the control panel.";

$lang["devs"] = "SERVER DEVELOPERS";
$lang["devs_text"] = 
"Are you a server developer looking to intergrate gMusic with your website?

Take a look at our API reference!";
$lang["devs_button"] = "VISIT API REFERENCE";

$lang["testimonials"] = "TESTIMONIALS";

// Welcome!
$lang["wel_welcome"] = "Welcome!";
$lang["wel_welcometo"] = "Welcome to gMusic!";
$lang["wel_regular"] = "Are you a regular Garry's Mod player? <a href='/dashboard/'>Pick the songs you want to listen to!</a>"; // don't edit the tags, <a> and </a>
$lang["wel_owner"] = "Are you a server owner or developer? <a href='/dashboard/servers'>Register your server with gMusic today!</a>"; // don't edit the tags, <a> and </a>

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
$lang["dash_subheading"] = "Pick your own music!";
$lang["dash_songs"] = "Songs";
$lang["dash_servers"] = "Servers";
$lang["dash_addasong"] = "Add a song!";
$lang["dash_addnewsong"] = "Add new song";
$lang["dash_mutesongs"] = "Mute songs";
$lang["dash_unmutesongs"] = "Unmute songs";
$lang["dash_cancel"] = "Cancel";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "FAIL!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(not implimented)";
$lang["dash_add"] = "Add";
$lang["dash_duration"] = "Duration";
$lang["dash_videoid"] = "Video ID";
$lang["dash_enable"] = "Enable";
$lang["dash_disable"] = "Disable";
$lang["dash_delete"] = "Delete";
$lang["dash_cancel"] = "Cancel";
$lang["dash_reset"] = "Reset";
$lang["dash_email_doconfirm"] = "Please check your email for the confirmation email! (Check your junk box if you can't find it)";
$lang["dash_email_confirmed"] = 'Thanks for verifying your email! You may now <a data-toggle="modal" href="#addServerModal">add a server</a>!';
$lang["dash_email_disposable"] = "Please don't use a disposable email, we'll never spam you. It's only incase something goes wrong.";
$lang["dash_email_notverified"] = "You can't add a server since you're email isn't verified yet!";
$lang["dash_addaserver"] = "Add new server";
$lang["dash_addserver"] = "Add a server!";
$lang["dash_name"] = "Name";
$lang["dash_loadingurl"] = "Loading Screen URL";
$lang["dash_optional"] = "Optional";
$lang["dash_email_verifytitle"] = "Verify your email!";
$lang["dash_email"] = "Email";
$lang["dash_email_wontsell"] = "We won't sell it, ever!";
$lang["dash_email_sendconfirmation"] = "Send Confirmation";
$lang["dash_actions"] = "Actions";
$lang["dash_songs_deletemsg"] = // below
'<p>Are you sure you wish to delete <b><?php echo($songtitle); ?></b>?</p>
<p>You will no longer hear this song while connecting if you do!</p>'; // don't edit the tags, <b> to </b>
$lang["dash_selectoradd"] = // below
'Please <a data-toggle="modal" href="#addSongModal">add a song</a> or select an existing one from the left hand side.<br/>
A random song will be selected to play when you join a server.'; // don't edit the tags, <a> to </a>
$lang["dash_serverselectoradd"] = // below
'Please <a data-toggle="modal" href="#<?php echo($modal); ?>">add a server</a> or select an existing one from the left hand side.'; // don't edit the tags, <a> to </a>

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

// Servers - embed widget
$lang["dash_embedwidget"] = "Embed Widget";
$lang["dash_embedwidget_text"] = "Hey there! I'm literally making the embed widget this very second! You probably shouldn't touch this because something might break probably.";

// Premium
$lang["premium"] = "Premium";
$lang["premium_text"] = // below 
"
<p>Do you want to help support the development of gMusic?</p>
<p>When you buy premium, the branding is removed from the embed widget, the ability to view unique views of your loading screen and I will design the embed widget to fit your website and more!</p>
<p>One time payment of £3.50</p>
";
$lang["premium_already"] = "You are already premium!";
$lang["premium_notloggedin"] = "You aren't logged in!";

// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Uh oh! This wasn't what you were looking for...";
$lang["404_contact"] = 'If you came here from a valid link, please <a href="/contact">let me know</a> or you can <a href="/">go back to the homepage</a>.'; // don't edit the tags, <a> and </a> (edit inside)

// Etc
$lang["contact"] = "Contact";
