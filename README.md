# Zen Cart Dutch Language Pack
============================

Dit is het Nederlandse taalpakket 1.5.7 voor Zen Cart 1.5.7

## Installeer de files
1. Unzip het pakket naar een folder.
2. Hernoem de folder YOUR_ADMIN naar de naam van uw eigen adminfolder.
3. Kopie&euml;er alle folders naar de root folder van uw site (dat is degene waar u al een includes folder, een images, cache, media en een aantal ander folders ziet).
4. Upload alle files van dit pakket naar uw live server.
5. Als u <b>upgrade</b> vanaf Zen cart 1.39h kunt u de volgende files van uw live server verwijderen, deze zitten <strong>standaard</strong> niet meer in Zen Cart:
  * /admin/includes/languages/dutch/cache.php
  * /admin/includes/languages/dutch/email_welcome.php
  * /admin/includes/languages/dutch/extra_definitions/editors_list.php (geleegd - file kan verwijderd worden)
  * /admin/includes/languages/dutch/extra_definitions/onlyFor139.php (geleegd - file kan verwijderd wordend)
  * /includes/languages/dutch/tell_a_friend.php
  * /includes/languages/dutch/modules/shipping/ups.php
  * /includes/languages/dutch/modules/shipping/usps.php

## Activeer dit taalpakket in uw admin
Log in in uw Admin en ga naar  Localization => Languages klik op de "new language" knop.
1. set "Name:" naar "Nederlands"
2. set "Code:" naar "nl"
3. set "Image:" naar "icon.gif"
4. set "Directory:" naar "dutch"
5. set "Sort Order:" een getal naar uw keuze
6. Set as default: vink deze box aan als u deze taal als standaard wilt instellen - anders kunt u het vinkje leeg laten
7. klik op de "insert" knop

## Aanpssingen maken
Als u van plan bent aanpassingen te maken aan een van de defines in de files van dit pakket, sla de veranderde files dan op in de template override folder. Als voorbeeld: includes/languages/dutch.php wordt dan includes/languages/YOUR_TEMPLATE/dutch.php, waarbij YOUR_TEMPLATE voor uw template naam staat Het wordt afgeraden om bestaande core files te overschrijven, omdat dit toekomstige upgrades lastiger maakt. Voor informatie over hoe u het override systeem moet gebruiken, kunt u [deze tutorial](https://www.zen-cart.com/wiki/index.php/The_override_system_simplified) bekijken.

## Valuta toekennen aan dit taalpakket
Als u wilt dat uw klanten automatisch veranderen van valuta naar Euro als ze voor de Nederlandse taal kiezen in uw winkel, gan dan in de Admin naar Configuration => My Store en verander 'Switch To Default Language Currency' naar true. Dan wordt de valuta automatisch aangepast als er van taal veranderd wordt.

Als u problemen ondervind met deze add-on module, bekijk dan eerst de [Dutch language pack support thread](https://www.zen-cart.com/showthread.php?215272-Dutch-language-pack-support-thread&p=1264776"), om te kijken of uw vraag al beantwoord is. Als dat niet het geval is kunt u een vraag plaatsen. Alle support gaat via het Zen Cart support forum zodat alle gebruikers van Zen Cart er van kunnen profiteren.
