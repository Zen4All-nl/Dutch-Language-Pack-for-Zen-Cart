Zen-Cart-Dutch-Language-Pack
============================

Dit is Het nieuwe Nederlandse taalpakket 1.5.4 voor Zen Cart 1.5.4

<h3>Installeer de files</h3>
<ol>
<li>Unzip het pakket naar een folder.</li>
<li>Hernoem de folder YOUR_ADMIN naar de naam van uw eigen adminfolder.</li>
<li>Kopie&euml;er alle folders naar de root folder van uw site (dat is degene waar u al een includes folder, een images, cache, media en een aantal ander folders ziet).</li>
<li>Upload alle files van dit pakket naar uw live server.</li>
<li>Als u <b>upgrade</b> vanaf Zen cart 1.39h kunt u de volgende files van uw live server verwijderen, deze zitten <strong>standaard</strong> niet meer in Zen Cart:
<ul>
<li>/admin/includes/languages/dutch/cache.php</li>
<li>/admin/includes/languages/dutch/email_welcome.php</li>
<li>/admin/includes/languages/dutch/extra_definitions/editors_list.php (geleegd - file kan verwijderd worden)</li>
<li>/admin/includes/languages/dutch/extra_definitions/onlyFor139.php (geleegd - file kan verwijderd wordend)</li>
<li>/includes/languages/dutch/tell_a_friend.php</li>
<li>/includes/languages/dutch/modules/shipping/ups.php</li>
<li>/includes/languages/dutch/modules/shipping/usps.php</li>
</ul>
</li>
</ol>
<h3>Activeer dit taalpakket in uw admin</h3>
<p>Log in in uw Admin en ga naar  Localization => Languages klik op de "new language" knop.</p>
<ol>
<li>set "Name:" naar "Nederlands"</li>
<li>set "Code:" naar "nl"</li>
<li>set "Image:" naar "icon.gif"</li>
<li>set "Directory:" naar "dutch"</li>
<li>set "Sort Order:" een getal naar uw keuze</li>
<li>Set as default: vink deze box aan als u deze taal als standaard wilt instellen - anders kunt u het vinkje leeg laten</li>
<li>klik op de "insert" knop</li>
</ol>
<h3>Aanpassingen maken</h3>
<p>Als u van plan bent aanpassingen te maken aan een van de defines in de files van dit pakket, sla de veranderde files dan op in de template override folder. Als voorbeeld: includes/languages/dutch.php wordt dan includes/languages/YOUR_TEMPLATE/dutch.php, waarbij YOUR_TEMPLATE voor uw template naam staat Het wordt afgeraden om bestaande core files te overschrijven, omdat dit toekomstige upgrades lastiger maakt. Voor informatie over hoe u het override systeem moet gebruiken, kunt u <a href="http://www.zen-cart.com/wiki/index.php/The_override_system_simplified" target="_blank"><b>deze tutorial</b></a> bekijken.</p>
<h3>Valuta toekennen aan dit taalpakket</h3>
<p>Als u wilt dat uw klanten automatisch veranderen van valuta naar Euro als ze voor de Nederlandse taal kiezen in uw winkel, gan dan in de Admin naar Configuration => My Store en verander 'Switch To Default Language Currency' naar true. Dan wordt de valuta automatisch aangepast als er van taal veranderd wordt.</p>
<p>Als u problemen ondervind met deze add-on module, bekijk dan eerst de <a href="http://www.zen-cart.com/showthread.php?215272-Dutch-language-pack-support-thread&p=1264776" target="_blank"><b>Dutch language pack support thread</b></a>, om te kijken of uw vraag al beantwoord is. Als dat niet het geval is kunt u een vraag plaatsen. Alle support gaat via het Zen Cart support forum zodat alle gebruikers van Zen Cart er van kunnen profiteren.</p>
