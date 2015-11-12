<?php
if($language == "en") { $sh_en == ""; } else { $sh_en == '<li><a onclick="setlang("en");">English</a></li>'; }
if($language == "cy") { $sh_cy == ""; } else { $sh_cy == "<li><a onclick="setlang("cy");">Cymraeg</a></li>"; }
if($language == "pt") { $sh_pt == ""; } else { $sh_pt == "<li><a onclick="setlang("pt");">Português Europeu</a></li>"; }
if($language == "de") { $sh_de == ""; } else { $sh_de == "<li><a onclick="setlang("de");">Deutsche</a></li>"; }
$lang["options"] =
'
<li><a href="/lang">Help Translate!</a></li>
<li role="separator" class="divider"></li>
'. $sh_en .'
'. $sh_cy .'
'. $sh_pt .'
'. $sh_de .';
