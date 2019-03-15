<?php
$lang = array();

$lang['user_blocked'] = "Teie kasutaja on blokeeritud.";
$lang['user_verify_failed'] = "Captcha kinnitus ei ole õige.";

$lang['email_password_invalid'] = "Email või parool ei vasta nõuetele.";
$lang['email_password_incorrect'] = "Email või parool ei ole õiged.";
$lang['remember_me_invalid'] = "'Mäleta mind' lahter ei vasta nõuetele.";

$lang['password_short'] = "Parool on liiga lühike.";
$lang['password_weak'] = "Parool on liiga nõrk.";
$lang['password_nomatch'] = "Paroolid ei ole samad.";
$lang['password_changed'] = "Parool muudetud.";
$lang['password_incorrect'] = "Vana parool on vale.";
$lang['password_notvalid'] = "Parool ei vasta nõuetele.";

$lang['newpassword_short'] = "Uus parool on liiga lühike.";
$lang['newpassword_long'] = "Uus parool on liiga pikk.";
$lang['newpassword_invalid'] = "Uus parool peab sisaldama vähemalt ühte väikest tähte, ühte suurt tähte ja ühte numbrit.";
$lang['newpassword_nomatch'] = "Uued paroolid ei ole samad.";
$lang['newpassword_match'] = "Uus parool on sama mis vana parool.";

$lang['email_short'] = "Emaili aadress liiga lühike.";
$lang['email_long'] = "Emaili aadress liiga pikk.";
$lang['email_invalid'] = "Emaili aadress ei vasta nõuetele.";
$lang['email_incorrect'] = "Emaili aadress on vale.";
$lang['email_banned'] = "See emaili aadress ei ole lubatud.";
$lang['email_changed'] = "Emaili aadress muudetud.";

$lang['newemail_match'] = "Uus emaili aadress on sama mis vana.";

$lang['account_inactive'] = "Konto ei ole veel aktiveeritud.";
$lang['account_activated'] = "Konto aktiveeritud.";

$lang['logged_in'] = "Oled sisse logitud.";
$lang['logged_out'] = "Oled välja logitud.";

$lang['system_error'] = "Süsteemi viga. Palun proovi uuesti.";

$lang['register_success'] = "Konto loodud. Aktiveerimislink saadetud sinu emailile.";
$lang['register_success_emailmessage_suppressed'] = "Konto loodud.";
$lang['email_taken'] = "Selle emailiga konto on juba olemas.";

$lang['resetkey_invalid'] = "Lähtestusvõti ei vasta nõuetele.";
$lang['resetkey_incorrect'] = "Lähtestusvõti on vale.";
$lang['resetkey_expired'] = "Lähtestusvõti on aegunud.";
$lang['password_reset'] = "Parool lähtestatud.";

$lang['activationkey_invalid'] = "Aktiveerimisvõti ei vasta nõuetele.";
$lang['activationkey_incorrect'] = "Aktiveerimisvõti ei ole õige.";
$lang['activationkey_expired'] = "Aktiveerimisvõti on aegunud.";

$lang['reset_requested'] = "Password reset request sent to email address.";
$lang['reset_requested_emailmessage_suppressed'] = "Password reset request is created.";
$lang['reset_exists'] = "A reset request already exists. Next reset password request will available at %s";             //@todo: updated 2018-06-28

$lang['already_activated'] = "Account is already activated.";
$lang['activation_sent'] = "Activation email has been sent.";
$lang['activation_exists'] = "An activation email has already been sent. Next reactivation will available at %s";       //@todo: updated 2018-06-28

$lang['email_activation_subject'] = '%s - Activate account';
$lang['email_activation_body'] = 'Hello,<br/><br/> To be able to log in to your account you first need to activate your account by clicking on the following link : <strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/> You then need to use the following activation key: <strong>%3$s</strong><br/><br/> If you did not sign up on %1$s recently then this message was sent in error, please ignore it.';
$lang['email_activation_altbody'] = 'Hello, ' . "\n\n" . 'To be able to log in to your account you first need to activate your account by visiting the following link :' . "\n" . '%1$s/%2$s' . "\n\n" . 'You then need to use the following activation key: %3$s' . "\n\n" . 'If you did not sign up on %1$s recently then this message was sent in error, please ignore it.';

$lang['email_reset_subject'] = '%s - Password reset request';
$lang['email_reset_body'] = 'Hello,<br/><br/>To reset your password click the following link :<br/><br/><strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/>You then need to use the following password reset key: <strong>%3$s</strong><br/><br/>If you did not request a password reset key on %1$s recently then this message was sent in error, please ignore it.';
$lang['email_reset_altbody'] = 'Hello, ' . "\n\n" . 'To reset your password please visiting the following link :' . "\n" . '%1$s/%2$s' . "\n\n" . 'You then need to use the following password reset key: %3$s' . "\n\n" . 'If you did not request a password reset key on %1$s recently then this message was sent in error, please ignore it.';

$lang['account_deleted'] = "Account deleted successfully.";
$lang['function_disabled'] = "This function has been disabled.";
$lang['account_not_found'] = "No account found with that email address";

return $lang;
