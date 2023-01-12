<?php


// ログインチェク処理 loginCheck()
function loginCheck()
{
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()) {
        // ログインがおかしい、偽物
        exit('LOGIN ERROR');
    } else {
        // ログインok
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
}