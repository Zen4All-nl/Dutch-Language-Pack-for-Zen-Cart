<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
  'HEADING_TITLE' => 'EZ-Pagina\'s',
  'TABLE_HEADING_PAGES' => 'Paginatitel',
  'TABLE_HEADING_ACTION' => 'Actie',
  'TABLE_HEADING_VSORT_ORDER' => 'Sidebox sorteervolgorde',
  'TABLE_HEADING_HSORT_ORDER' => 'Footer sorteervolgorde',
  'TEXT_PAGES_TITLE' => 'Paginatitel:',
  'TEXT_PAGES_HTML_TEXT' => 'HTML Inhoud:',
  'TABLE_HEADING_DATE_ADDED' => 'Datum toegevoegd:',
  'TEXT_PAGES_STATUS_CHANGE' => 'Statuswijziging: %s',
  'TEXT_INFO_DELETE_INTRO' => 'Wilt u deze pagina verwijderen?',
  'SUCCESS_PAGE_INSERTED' => 'Succes: de pagina is toegevoegd.',
  'SUCCESS_PAGE_UPDATED' => 'Succes: de pagina is gewijzigd.',
  'SUCCESS_PAGE_REMOVED' => 'Succes: de pagina is verwijderd.',
  'SUCCESS_PAGE_STATUS_UPDATED' => 'Succes: de status van deze pagina is gewijzigd.',
  'ERROR_PAGE_TITLE_REQUIRED' => 'Fout: Paginatitel is verplicht.',
  'ERROR_UNKNOWN_STATUS_FLAG' => 'Fout: onbekende status.',
  'ERROR_MULTIPLE_HTML_URL' => 'Fout: U heeft meerdere instellingen opgegeven terwijl er slechts één per link is toegestaan ...<br />Kies uit: HTML inhoud -or- Interne Link URL -or- Externe Link URL',
  'TABLE_HEADING_ID' => 'ID',
  'TABLE_HEADING_STATUS_HEADER' => 'Header:',
  'TABLE_HEADING_STATUS_SIDEBOX' => 'Sidebox:',
  'TABLE_HEADING_STATUS_FOOTER' => 'Footer:',
  'TABLE_HEADING_STATUS_TOC' => 'Inhoudsopgave:',
  'TABLE_HEADING_CHAPTER' => 'Hoofdstuk:',
  'TABLE_HEADING_VISIBLE' => 'Zichtbaar:',
  'TABLE_HEADING_PAGE_OPEN_NEW_WINDOW' => 'Open een nieuw venster:',
  'TABLE_HEADING_PAGE_IS_SSL' => 'Pagina via SSL:',
  'TABLE_HEADING_PAGE_IS_VISIBLE' => 'Pagina is zichtbaar:',
  'TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION' => ' De pagina wordt getoond, zelfs als deze niet wordt getoond in de header, footer of sidebox<br>
(Als alle instellinen voor zichtbaarheid, header, footer en sidebox uit staan, dan zulen bezoekers doe proberen de pagina te bekijken een pagina niet gevonden reactie.)',
  'TEXT_DISPLAY_NUMBER_OF_PAGES' => 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> pagina\'s)',
  'IMAGE_NEW_PAGE' => 'Nieuwe Pagina',
  'TEXT_INFO_PAGES_ID' => 'ID: ',
  'TEXT_INFO_PAGES_ID_SELECT' => 'Kies een pagina ...',
  'TEXT_HEADER_SORT_ORDER' => 'Volgorde:',
  'TEXT_SIDEBOX_SORT_ORDER' => 'Volgorde:',
  'TEXT_FOOTER_SORT_ORDER' => 'Volgorde:',
  'TEXT_TOC_SORT_ORDER' => 'Volgorde:',
  'TEXT_CHAPTER' => 'Vorig/volgend hoofdstuk:',
  'TABLE_HEADING_CHAPTER_PREV_NEXT' => 'Hoofdstuk:&nbsp;<br />',
  'TEXT_HEADER_SORT_ORDER_EXPLAIN' => 'Header-sorteervolgorde gebruikt voor het genereren van de pagina\'s in een enkele HEADER-regel; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina op regelbasis te tonen',
  'TEXT_SIDEBOX_ORDER_EXPLAIN' => 'Sidebox-sorteervolgorde gebruikt voor het genereren van de pagina\'s in een verticale volgorde;sorteervolgorde gebruikt voor het genereren van de pagina\'s inteneinde deze pagina\'s onder elkaar te tonen, anders wordt het beschouwd als HTML tekst for speciale doeleinden',
  'TEXT_FOOTER_ORDER_EXPLAIN' => 'Footer-sorteervolgorde gebruikt voor het genereren van de pagina\'s in een enkele FOOTER-regel; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina op regelbasis te tonen',
  'TEXT_TOC_SORT_ORDER_EXPLAIN' => 'Inhoudsopgave-sorteervolgorde gebruikt voor het genereren van de pagina\'s op regelbasis (header/footer, etc) of onder elkaar, gebasserd op individuele instellingen; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina te tonen',
  'TEXT_CHAPTER_EXPLAIN' => 'De (vorige/volgende) hoofdstukken zijn op volgorde van de inhoudsopgave. Links in de inhoudsopgave bestaan uit de pagina\'s die overeenkomen met het hoofdstuknummer en op volgorde volgens de inhoudsopgave',
  'TEXT_ALT_URL' => 'Interne Link URL:',
  'TEXT_ALT_URL_EXPLAIN' => 'Indien ingevuld, zal de pagina-inhoud genegeerd worden en wordt de INTERNE alternatieve URL gebruikt<br />Bijvoorbeeld naar Recensies: index.php?main_page=reviews<br />Bijvoorbeeld naar Mijn Account: index.php?main_page=account en met SSL geactiveerd',
  'TEXT_ALT_URL_EXTERNAL' => 'Externe Link URL:',
  'TEXT_ALT_URL_EXTERNAL_EXPLAIN' => 'Indien ingevuld, zal de pagina-inhoud genegeerd worden en wordt de EXTERNE alternatieve URL gebruikt<br />Bijvoorbeeld naar de externe link: http://www.sashbox.net',
  'TEXT_SORT_CHAPTER_TOC_TITLE_INFO' => 'Sorteervolgorde: ',
  'TEXT_SORT_CHAPTER_TOC_TITLE' => 'Hoofdstuk/Inhoudsopgave',
  'TEXT_SORT_HEADER_TITLE' => 'Header',
  'TEXT_SORT_SIDEBOX_TITLE' => 'Sidebox',
  'TEXT_SORT_FOOTER_TITLE' => 'Footer',
  'TEXT_SORT_PAGE_TITLE' => 'Paginatitel',
  'TEXT_SORT_PAGE_ID_TITLE' => 'Pagina ID, Titel',
  'TEXT_PAGE_TITLE' => 'Titel:',
  'TEXT_WARNING_MULTIPLE_SETTINGS' => '<strong>WAARSCHUWING: Meerdere Link Definities</strong>',
];

return $define;
