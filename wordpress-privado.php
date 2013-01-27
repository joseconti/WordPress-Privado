<?php //Esta simple función hace tu WordPress totalmente privado. Solo es accesible wp-login.php y wp-register.php

function is_login_page_contapress() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
