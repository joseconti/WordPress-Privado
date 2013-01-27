<?php //Esta simple funbción hace tu WordPress totalmente privado

function is_login_page_contapress() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
