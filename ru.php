<?php
error_reporting(E_ALL & ~E_WARNING);
// Russian language file for gMusic
// By Denis Polischuk
$lang["author"] = "Crax/Denis Polischuk";
$lang["author_attribution"] = "vk.com/batyamedic";
$lang["lang"] = "Русский";
$lang["lang_code"] = "ru";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a href="/lang"> Помогите с переводом!</a></li>
<li role="separator" class="divider"></li>
<li><a onclick="setlang('en');">English</a></li>
<li><a onclick="setlang('pt');">Português Europeu</a></li>
<li><a onclick="setlang('pt-br');">Português Brasileiro</a></li>
<li><a onclick="setlang('de');">Deutsche</a></li>
<li><a onclick="setlang('fr');">Français</a></li>
EOT;
// --- Translations
// Sidebar
$lang["name"] = "gMusic";
$lang["notfound"] = "notFound";
$lang["title"] = "gMusic";
$lang["title_caps"] = "gMUSIC";
$lang["title_subheading"] = "Выберите свою собственную музыку!";
$lang["side_home"] = "Домой";
$lang["side_what"] = "Что это?";
$lang["side_players"] = "Для игроков";
$lang["side_owners"] = "Для владельцев";
$lang["side_devs"] = "Для разработчиков";
$lang["side_testimonials"] = "Testimonials";
$lang["side_songs"] = "Песни";
$lang["side_servers"] = "Сервера";
$lang["side_dashboard"] = "Настройки";
$lang["side_logout"] = "Выйти";
// Homepage
$lang["welcome"] = "Добро пожаловать!";
$lang["cdn_by"] = "CDN by ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Связь";
$lang["signinwithsteam"] = "Войти с помощью Steam!";
$lang["what_is_gmusic"] = "ЧТО ТАКОЕ gMUSIC?";
$lang["what_is_gmusic_text"] = 
"Надоело слушать музыку при загрузке которую поставил владелец сервера?
Теперь,с помощью gMusic, вы можете сами выбрать свою музыку!";
$lang["players"] = "ИГРОКИ";
$lang["players_text"] = 
"Вы игрок Garry`s Mod и хотите сменить музыку при загрузки или отключить её?
Зайдите с помощью Steam и проследуйте с контрольной панели.";
$lang["serverowners"] = "АДМИНЫ СЕРВЕРОВ";
$lang["serverowners_text"] = 
"Вы админ сервера и хотите добавить музыку на свой загрузочный экран?
Зайдите с помощью Steam и проследуйте к контрольной панели.";
$lang["devs"] = "СЕРВЕРНЫЕ РАЗРАБОТЧИКИ";
$lang["devs_text"] = 
"Вы разработчик для сервера и хотите интегрировать gMusic со своим сайтом?
Посмотрите на наш прекрасный API!";
$lang["devs_button"] = "ПОСМОТРЕТЬ НА API";
$lang["testimonials"] = "СВИДЕТЕЛЬСТВА";
// Welcome!
$lang["wel_welcome"] = "Добро пожаловать!";
$lang["wel_welcometo"] = "Добро пожаловать на gMusic!";
$lang["wel_regular"] = "Вы обычный игрок гмода? <a href='/dashboard/'>Выберете свою музыку!</a>"; // don't edit the tags, <a> and </a>
$lang["wel_owner"] = "Вы админ сервера или разработчик? <a href='/dashboard/servers'>Зарегистрируйте свой сервер уже сегодня!</a>"; // don't edit the tags, <a> and </a>
// Banned! :C
$lang["ban_banned"] = "Вас забанили !";
$lang["ban_uhoh"] = "Опаньки! Похоже вас забанили... :C";
$lang["ban_contact"] = 'Можно <a href="/contact">связаться со мной</a> чтобы подать протест на бан.';
// Uh oh! :O
$lang["uhoh_uhoh"] = "Опаньки!";
$lang["uhoh_lookslike"] = "Похоже,шот пошло не так!";
$lang["uhoh_reported"] = "Не волнуйтесь,мы уже знаем про эту ошибку и пытаемся это исправить.";
// Dashboard
$lang["dash_title"] = "gMUSIC DASHBOARD";
$lang["dash_subheading"] = "Выберете свою собственную музыку!";
$lang["dash_songs"] = "Музыка";
$lang["dash_servers"] = "Сервера";
$lang["dash_addasong"] = "Добавить песню!";
$lang["dash_addnewsong"] = "Добавить свою песню!";
$lang["dash_mutesongs"] = "Выключить музыку";
$lang["dash_unmutesongs"] = "Включить музыку";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "ОШИБОЧКА!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(еще недоступно)";
$lang["dash_add"] = "Добавить";
$lang["dash_duration"] = "Длительность";
$lang["dash_videoid"] = "ID Видео";
$lang["dash_enable"] = "Включить";
$lang["dash_disable"] = "Отключить";
$lang["dash_delete"] = "Удалить";
$lang["dash_cancel"] = "Отмена";
$lang["dash_email_doconfirm"] = "Пожалуйста,проверьте свой почтовый ящик чтобы подтвердить его! (Проверьте папку спам если не можете найти его)";
$lang["dash_email_confirmed"] = 'Спасибо за подтверждение своего email! Теперь вы можете <a data-toggle="modal" href="#addServerModal">добавить сервер</a>!';
$lang["dash_email_disposable"] = "Не используйте одноразовый email, мы никогда не будем заниматься спамом. Это только для важных объявлений.";
$lang["dash_email_notverified"] = "Вы не можете добавить сервер пока ваш email не потдвержден!";
$lang["dash_addaserver"] = "Добавить новый сервер!";
$lang["dash_addserver"] = "Добавить сервер!";
$lang["dash_name"] = "Название";
$lang["dash_loadingurl"] = "URL Загрузочной страницы";
$lang["dash_optional"] = "Дополнительно";
$lang["dash_email_verifytitle"] = "Подтвердите свой email!";
$lang["dash_email"] = "Email";
$lang["dash_email_wontsell"] = "Мы не будем разглашать его!";
$lang["dash_email_sendconfirmation"] = "Отправить подтверждение";
$lang["dash_songs_deletemsg"] = // below
'<p>Вы уверены что хотите удалить <b><?php echo($songtitle); ?></b>?</p>
<p>Вы больше никогда не услышите эту песню!</p>'; // don't edit the tags, <b> to </b>
$lang["dash_selectoradd"] = // below
'Пожалуйста <a data-toggle="modal" href="#addSongModal">добавьте песню</a> или выберете существующею слева.<br/>
Случайная песня будет проигрываться при подсоеденении к серверу.'; // don't edit the tags, <a> to </a>
$lang["dash_serverselectoradd"] = // below
'Пожалуйста <a data-toggle="modal" href="#<?php echo($modal); ?>">добавьте сервер</a> или выберете существующий слева.'; // don't edit the tags, <a> to </a>
// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Опаньки! Это не то что вы искали...";
$lang["404_contact"] = 'Если вы попали сюда откуда-то с этого сайта, пожалуйста <a href="/contact">дайте мне знать</a> или вы можете <a href="/">вернуться на домашнюю страницу</a>.'; // don't edit the tags, <a> and </a> (edit inside)
// Etc
$lang["contact"] = "Связь";
