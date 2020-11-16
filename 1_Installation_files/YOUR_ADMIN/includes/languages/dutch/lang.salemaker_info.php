<?php
/**
 * @ Maintained by Zen4All (https://zen4all.nl)
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
 */

$define = [
  'HEADING_TITLE' => 'Verkoopbevorderingstool',
  'SUBHEADING_TITLE' => 'Gebruikstips Verkoopbevorderingstool:',
  'INFO_TEXT' => '<ul>
                      <li>
                        Gebruik altijd een punt "." als decimaal teken in de korting en prijsselectie.
                      </li>
                      <li>
                        Gebruik dezelfde valuta als waar het artikel in is geprijsd en die standaard is voor het aanmaken en wijzigen van artikelen.
                      </li>
                      <li>
                        In de kortingsvelden kan, de prijs worden veminderd met een vast bedrag, een percentage
                        of een nieuwe prijs. Bijv. verminder alle prijzen binnnen de selectie met €5.00, 10% of zet 
                        alle prijzen binnen de selectie op €25.00).
                      </li>
                      <li>
                        Door het invullen van een prijsselectie (van...tot) wordt het aantal artikelen
                        beperkt dat in aanmerking komt (bijv. artikelen van &euro;5.00 tot &euro;50.00)
                      </li>
                      <li>
                        Kies een scenario dat van toepassing is als een artikel in de aanbieding is <i>en</i> in aanmerking komt voor de voorwaarden van de SALE:
                        <ul>
                          <li>
                            <strong>Toepassen SALE op normale artikelprijs - voorwaarden SALE van toepassing op normale artikelprijs en vervangt de aanbiedingsprijs</strong><br>
                            De SALE is van toepassing op de normale prijs van het artikel.
                            Voorbeeld: normale artikelprijs €10.00, huidige aanbiedingsprijs is €9.50, tijdens SALE is 10% korting van toepassing.
                            De definitieve prijs in de SALE wordt €9.00 (Dit is 10% van €10 en niet van €9.50. De aanbiedingsprijs wordt genegeerd.)
                          </li>
                          <li>
                            <strong>Toepassen aanbiedingsprijs - voorwaarden SALE niet van toepassing op artikel op het moment dat deze in de aanbieding is.</strong><br />
                            Indien artikel in de aanbieding is zijn de voorwaarden van de SALE niet op	deze artikelen van toepassing. De aanbiedingsprijs wordt getoond en
                            niet de korting op basis van de SALE. (Voorbeeld: normale artikelprijs €10.00, huidige aanbiedingsprijs is €9.50,
                            tijdens SALE is 10% korting van toepasing. De definitieve prijs die wordt getoond is de €9.50 uit de aanbieding.
                            De opruimngskorting wordt genegeerd.)
                          </li>
                          <li>
                            <strong>Pas de SALE toe op de aanbiedingsprijs en indien niet van toepassing op de normale artikelprijs</strong><br />
                            De SALE wordt van de aanbiedingsprijs afgehaald. Een samengestelde prijs wordt getoond. Indien geen aanbiedingsprijs actief is voor het artikel wordt de SALE van de normale prijs afgehaald.
                            (Voorbeeld: nomale prijs €10.00, aanbiedingsprijs €9.50, SALE is 10% korting. Het artikel heeft een definitieve eindprijs
                            van €8.55 (nl. 10% korting op €9.50). Indien er geen aanbiedingsprijs voor dit artikel is wordt de definitieve SALE €9.00, nl 10% korting op €10.00.
                          </li>
                        </ul>
                      </li>
                      <li>
                        Door de startdatum van de SALE niet in te vullen begint deze direct.
                      </li>
                      <li>
                        Door de vervaldatum van de SALE niet in te vullen blijft deze net zolang doorlopen totdat deze handmatig wordt verwijderd of stopgezet.</li>
                      <li>
                        Door het aanvinken van een categorie worden ook automatisch alle sub-categorieën geselecteerd.
                      </li>
                    </ul>',
  'TEXT_CLOSE_WINDOW' => '[ sluit venster ]',
];

return $define;
