<?php
error_reporting(E_ALL & ~E_WARNING);
// Russian language file for gMusic
// By Denis Polischuk
// Fixes, spellchecking and additional translation by Fixator10
// Note for next translators:  
// Будущим переводчикам рекомендую проверять орфографию. Хотя-бы в Word'е.
// Такие простые ошибки аж глаза режут.
// И да. Не бойтесь внедрять адаптации. Прямой перевод - тоже не всегда хорошо.
// Note for Developer: Please, in future, add new lines in original (EN) file to the end of the file.
// This way more easy to detect new lines to translate.
$lang["author"] = "Crax/Denis Polischuk, Fixator10";
$lang["author_attribution"] = "vk.com/batyamedic, vk.com/fixator10 | http://steamcommunity.com/id/fixator10";
$lang["lang"] = "Русский";
$lang["lang_code"] = "ru";
$lang["options"] = // don't worry about editing this part
<<<EOT
<li><a href="/lang"> Помогите с переводом!</a></li>
<li role="separator" class="divider"></li>
<li><a onclick="setlang('en');">English</a></li>
<li><a onclick="setlang('pt');">Português Europeu</a></li>
<li><a onclick="setlang('pt-br');">Português Brasileiro</a></li>
<li><a onclick="setlang('de');">Deutsch</a></li>
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
$lang["side_testimonials"] = "Отзывы";
$lang["side_premium"] = "Премиум";
$lang["side_stats"] = "Статистика";

$lang["side_songs"] = "Песни";
$lang["side_servers"] = "Сервера";

$lang["side_dashboard"] = "Настройки";
$lang["side_logout"] = "Выйти";
// Homepage
$lang["welcome"] = "Добро пожаловать!";
$lang["cdn_by"] = "CDN от ";
$lang["maxcdn"] = "MaxCDN";
$lang["contact"] = "Связь";
$lang["signinwithsteam"] = "Войти с помощью Steam!";

$lang["stats"] = "СТАТИСТИКА";
$lang["stats_songs"] = "Всего песен зарегестрировано в gMusic";
$lang["stats_users"] = "Всего пользователей зарегестрировано в gMusic";
$lang["stats_servers"] = "Всего серверов зарегестрированно в gMusic";
$lang["stats_betas"] = "Всего серверов использующих бету gMusic";

$lang["what_is_gmusic"] = "ЧТО ТАКОЕ gMUSIC?";
$lang["what_is_gmusic_text"] = 
"Надоело слушать музыку при загрузке, которую поставил владелец сервера?
Теперь, с помощью gMusic, вы можете сами выбрать свою музыку!";

$lang["players"] = "ИГРОКИ";
$lang["players_text"] = 
"Вы игрок Garry`s Mod и хотите сменить музыку при загрузке или отключить её?
Зайдите с помощью Steam и проследуйте к контрольной панели.";

$lang["serverowners"] = "АДМИНЫ СЕРВЕРОВ";
$lang["serverowners_text"] = 
"Вы админ сервера и хотите добавить музыку на свой загрузочный экран?
Зайдите с помощью Steam и проследуйте к контрольной панели.";

$lang["devs"] = "РАЗРАБОТЧИКИ СЕРВЕРОВ";
$lang["devs_text"] = 
"Вы разработчик сервера и хотите интегрировать gMusic со своим сайтом?
Посмотрите на наш прекрасный API!";
$lang["devs_button"] = "ПОСМОТРЕТЬ НА API";

$lang["testimonials"] = "ОТЗЫВЫ";
// Welcome!
$lang["wel_welcome"] = "Добро пожаловать!";
$lang["wel_welcometo"] = "Добро пожаловать на gMusic!";
$lang["wel_regular"] = "Вы обычный игрок Garry's Mod'а? <a href='/dashboard/'>Выберите свою музыку!</a>"; // don't edit the tags, <a> and </a> | не трогайте теги от <a> до </a>
$lang["wel_owner"] = "Вы админ сервера или разработчик? <a href='/dashboard/servers'>Зарегистрируйте свой сервер уже сегодня!</a>"; // don't edit the tags, <a> and </a> | не трогайте теги от <a> до </a>
// Banned! :C
$lang["ban_banned"] = "Вас забанили !";
$lang["ban_uhoh"] = "Опаньки! Похоже вас забанили... :C";
$lang["ban_contact"] = 'Можно <a href="/contact">связаться со мной</a>, чтобы подать заявку о разбане.'; // Edit note: Второй раз баниться собрался?
// Uh oh! :O
$lang["uhoh_uhoh"] = "Опаньки!";
$lang["uhoh_lookslike"] = "Похоже, чтото пошло не так!";
$lang["uhoh_reported"] = "Не волнуйтесь, мы уже знаем про эту ошибку и пытаемся это исправить.";
// Dashboard
$lang["dash_title"] = "gMUSIC DASHBOARD";
$lang["dash_subheading"] = "Выберите свою собственную музыку!";
$lang["dash_songs"] = "Музыка";
$lang["dash_servers"] = "Сервера";
$lang["dash_addasong"] = "Добавить песню!";
$lang["dash_addnewsong"] = "Добавить свою песню!";
$lang["dash_mutesongs"] = "Выключить музыку";
$lang["dash_unmutesongs"] = "Включить музыку";
$lang["dash_id"] = "ID";
$lang["dash_fail"] = "ОШИБКА!";
$lang["dash_youtube"] = "YouTube";
$lang["dash_soundcloud"] = "Soundcloud";
$lang["dash_notimplimented"] = "(еще недоступно)";
$lang["dash_experimental"] = "(экспериментально)";
$lang["dash_add"] = "Добавить";
$lang["dash_duration"] = "Длительность";
$lang["dash_videoid"] = "ID Видео";
$lang["dash_enable"] = "Включить";
$lang["dash_disable"] = "Отключить";
$lang["dash_delete"] = "Удалить";
$lang["dash_cancel"] = "Отмена";
$lang["dash_email_doconfirm"] = "Пожалуйста, проверьте свой почтовый ящик чтобы подтвердить его! (Проверьте папку спам если не можете найти его)";
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
$lang["dash_actions"] = "Действия";
$lang["dash_songs_deletemsg"] = // below
'<p>Вы уверены что хотите удалить <b><?php echo($songtitle); ?></b>?</p>
<p>Вы больше никогда не услышите эту песню!</p>'; // don't edit the tags, <b> to </b> | не трогайте теги от <b> до </b>
$lang["dash_selectoradd"] = // below
'Пожалуйста <a data-toggle="modal" href="#addSongModal">добавьте песню</a> или выберите существующую слева.<br/>
Случайная песня будет проигрываться при подсоеденении к серверу.'; // don't edit the tags, <a> to </a> | не трогайте теги от <a> до </a>
$lang["dash_serverselectoradd"] = // below
'Пожалуйста <a data-toggle="modal" href="#<?php echo($modal); ?>">добавьте сервер</a> или выберите существующий слева.'; // don't edit the tags, <a> to </a> | не трогайте теги от <a> до </a>

// Servers
$lang["dash_resetapi"] = "СБРОСИТЬ КЛЮЧ API";
$lang["dash_setupinstructions"] = "Инструкции По Установке";
$lang["dash_setupinstructions_text"] = // don't worry about editing this part
<<<EOT
<ul>
  <li>Вам необходим веб-хостинг с поддержкой PHP для корректной работы gMusic.</li>
  <li>Если у вас нет PHP, вы можете использовать другой язык программирования, такой как ASP, если steamid получается верно!</li>
</ul>
<ol>
  <li>Найдите файл для вашего загрузочного экрана.</li>
  <li>Если у вас уже имеется музыка в загрузочном экране, замените &lt;audio&gt; элемент или любой другой проигрывающий музыку на код находящийся в вкладке Код для Встраивания. </li>
  <li>Если в вашем загрузочном экране нет музыки, разместите код внизу, возле тега &lt;/body&gt;</li>
</ol>
EOT;
$lang["dash_embedcode"] = "Код для Встриавания";
$lang["dash_customjscode"] = "Собственный код JS";
$lang["dash_customjscode_text"] = "Собственный код javascript устарел! Используйте <a href='/api'>API</a>!";
$lang["dash_serverdelete"] = // below 
"
<p>Вы хотите удалить сервер <b>%s</b>?</p>
<p>Музыка на вашем загрузочном экране перестанет работать!</p>
";
$lang["dash_resetapikey_modal_title"] = "Сбросить ключ API?";
$lang["dash_resetapikey_modal_text"] = // don't worry about editing this part
<<<EOT
<p>Вы хотите сбросить ключ API для <b>%s</b>?</p>
<p>Убедитесь что вы изменили ключ API в вашем коде!</p>
EOT;
$lang["dash_totalconnects"] = "Всего подключений";
// Servers - embed widget
$lang["dash_embedwidget"] = "Вставка Виджета";
$lang["dash_embedwidget_text"] = "Привет! Я буквально сейчас делаю Виджет! Вам, наверное, не стоит трогать это так как чтото может сломаться.";
// Premium
$lang["premium"] = "Премиум";
$lang["premium_text"] = // below 
"
<p>Вы хотите поддержать gMusic?</p>
<p>При покупке Премиума, реклама будет убрана с виджета, вы получите возможность увидеть количество просмотров вашего загрузочного экрана, и Я разработаю виджет для вашего сайта, и многое другое!</p>
<p>Единразовый платеж £3.50</p>
";
$lang["premium_already"] = "У вас уже Премиум!";
$lang["premium_notloggedin"] = "Вы не вошли в gMusic!";

// 404
$lang["404"] = "404";
$lang["404_uhoh"] = "Опаньки! Это не то что вы искали...";
$lang["404_contact"] = 'Если вы попали сюда откуда-то с этого сайта, пожалуйста <a href="/contact">дайте мне знать</a>. Вы также можете <a href="/">вернуться на домашнюю страницу</a>.'; // don't edit the tags, <a> and </a> (edit inside) | не трогайте теги от <a> до </a> (редактируйте внутри)
// Etc
$lang["contact"] = "Связь";


$lang["stats_views"] = "Всего подключений к серверам с gMusic";
