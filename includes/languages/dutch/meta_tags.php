<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dutch translation voor zen cart 1.5.2
 * @version $Id: meta_tags.php 18697 2011-05-04 14:35:20Z wilt $
 */

// pagina titel
define('TITLE', 'Zen Cart');

// Site slogan
define('SITE_TAGLINE', 'De kunst van eCommerce');

// Hier uw eigen kernbergrippen plaatsen over uw site
define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');

// Home Page Only:  NOG VERTALEN
  define('HOME_PAGE_META_DESCRIPTION', '');
  define('HOME_PAGE_META_KEYWORDS', '');

  // NOTE: If HOME_PAGE_TITLE is left blank (default) then TITLE and SITE_TAGLINE will be used instead.
  define('HOME_PAGE_TITLE', ''); // usually best left blank


// EZ-Pages meta-tags.  Follow this pattern for all ez-pages for which you desire custom metatags. Replace the # with ezpage id.
// If you wish to use defaults for any of the 3 items for a given page, simply do not define it.
// (ie: the Title tag is best not set, so that site-wide defaults can be used.)
// repeat pattern as necessary
  define('META_TAG_DESCRIPTION_EZPAGE_#','');
  define('META_TAG_KEYWORDS_EZPAGE_#','');
  define('META_TAG_TITLE_EZPAGE_#', '');

// Per-Page meta-tags. Follow this pattern for individual pages you wish to override. This is useful mainly for additional pages.
// replace "page_name" with the UPPERCASE name of your main_page= value, such as ABOUT_US or SHIPPINGINFO etc.
// repeat pattern as necessary
  define('META_TAG_DESCRIPTION_page_name','');
  define('META_TAG_KEYWORDS_page_name','');
  define('META_TAG_TITLE_page_name', '');

// Recensie pagina kan een introtekst hebben
define('META_TAGS_REVIEW', 'Recensies: ');

// lijstscheidingsteken voor kernwoorden
// Defineer de standaardsectie weergave/output
  define('PRIMARY_SECTION', ' : ');

// defineer de 2e sectie weergave/output
  define('SECONDARY_SECTION', ' - ');

// defineer de driede sectie weergave/output ;-)
  define('TERTIARY_SECTION', ', ');

// Defineer scheidingsteken.. normaal gewoon een spatie of een comma plus een spatie
  define('METATAGS_DIVIDER', ' ');

// Defineeer welke paginas niet doorzocht moeten worden door zoekrobots/-spiders
// Dit word normaal gesproken gebruikt voor account-beheerpaginas en specifieke SSL paginas, normaal niet nodig hier aanpassingen in te doen.
  define('ROBOTS_PAGES_TO_SKIP','login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe,info_shopping_cart,popup_image,popup_image_additional,product_reviews_write,ssl_check,shopping_cart');


// Favorieten icoontje, favicon
// Normaal hoeft u dit NIET te gebruiken tenzij u het icoontje buiten de hooddirectory wil plaatsen danwel het icoontje een andere bestandnaam wil geven dan favicon.ico
//  define('FAVICON','favicon.ico');

