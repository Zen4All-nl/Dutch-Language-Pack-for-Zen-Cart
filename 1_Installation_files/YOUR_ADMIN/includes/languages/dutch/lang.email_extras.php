<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */

$define = [
  'EMAIL_LOGO_FILENAME' => 'header.jpg',
  'EMAIL_LOGO_WIDTH' => '550',
  'EMAIL_LOGO_HEIGHT' => '110',
  'EMAIL_LOGO_ALT_TITLE_TEXT' => 'Zen Cart! The Art of E-commerce',
  'EMAIL_EXTRA_HEADER_INFO' => '',
    'EMAIL_ORDER_UPDATE_MESSAGE' => '', 
    'OFFICE_FROM' => 'Van:',
    'OFFICE_EMAIL' => 'E-mailadres afzender:',
    'OFFICE_USE' => 'Alleen eigen gebruik:',
    'OFFICE_LOGIN_NAME' => 'Gebruikersnaam:',
    'OFFICE_LOGIN_EMAIL' => 'Aanmelden e-mail:',
    'OFFICE_LOGIN_PHONE' => '<strong>Telefoon:</strong>',
    'OFFICE_IP_ADDRESS' => 'IP adres:',
    'OFFICE_HOST_ADDRESS' => 'Hostadres:',
    'OFFICE_DATE_TIME' => 'Datum en tijd:',
    'EMAIL_DISCLAIMER' => "\n" . 'Dit e-mailadres is door u of één van onze klanten aan ons verstrekt. Indien u vindt dat u deze e-mail niet had willen of mogen ontvangen of heeft ontvangen als gevolg van een fout kunt u een e-mail sturen aan %s ',
    'EMAIL_SPAM_DISCLAIMER' => 'Indien uw e-mailadres uit ons bestand moet worden verwijderd ontvangen wij dit verzoek graag als reply op dit adres. Uw verzoek wordt zo spoedig mogelijk, zonder verdere vragen, in behandeling genomen en uitgevoerd conform uw wens.',
    'EMAIL_FOOTER_COPYRIGHT' => 'Copyright (c) ' . date('Y') . ' <a href="https://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>',
    'SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT' => '[door ADMIN verstuurd]',
    'SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT' => '[Kortingsbonnen]',
    'SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT' => '[STATUS BESTELLINGEN]',
    'TEXT_UNSUBSCRIBE' => "\n\nOm u af te melden voor toekomstige nieuwsbrieven en andere promotionele activiteiten kunt u gebruik maken van de volgende link: \n",
    'OFFICE_IP_TO_HOST_ADDRESS' => 'Uitgeschakeld',
  'TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED' => 'Admin waarshuwing: Nieuwe admingebruiker toegevoegd.',
  'TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED' => 'Administratieve waarshuwing: Een nieuwe admingebruiker (%s) is TOEGEVOEGD aan uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.',
  'TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED' => 'Admin waarshuwing: Een admingebruiker is verwijderd.',
  'TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED' => 'Administratieve waarshuwing: Een admingebruiker (%s) is VERWIJDERD van uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.',
  'TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED' => 'Admin waarshuwing: Admingebruikersdetails zijn gewijzigd.',
  'TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED' => 'Admin waarshuwing: Admingebruiker (%s) e-mailadres is gewijzigd van (%s) in (%s) door (%s)',
  'TEXT_EMAIL_ALERT_ADM_NAME_CHANGED' => 'Admin waarshuwing: Admingebruiker (%s) gebruikersnaam is gewijzigd van (%s) in (%s) door (%s)',
  'TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED' => 'Admin waarshuwing: Admingebruiker (%s) beveiligingsprofiel is gewijzigd van (%s) naar (%s) door (%s)',
];

return $define;
