<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

\app\modules\company\assets\PrivacyAsset::register($this);

?>

<div class="site-privacy">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'privacy') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'privacy') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'events') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
                <!--<img src="assets/images/hero/herobackground.png" aria-label="News Header" class="img-fluid"/>-->
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    Datenschutzerklärung
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    <!-- Der Text dann.... -->
    <div class="privacy">
        <div class="inner-wrapper">
            <p>Wir haben diese Datenschutzerklärung (Fassung 23.07.2020-311196990) verfasst, um Ihnen gemäß der Vorgaben der <a class="adsimple-311196990" href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&amp;tid=311196990" target="_blank" rel="noopener">Datenschutz-Grundverordnung (EU) 2016/679</a> zu erklären, welche Informationen wir sammeln, wie wir Daten verwenden und welche Entscheidungsmöglichkeiten Sie als Besucher dieser Webseite haben.</p>
            <p>Leider liegt es in der Natur der Sache, dass diese Erklärungen sehr technisch klingen, wir haben uns bei der Erstellung jedoch bemüht die wichtigsten Dinge so einfach und klar wie möglich zu beschreiben.</p>
            <h2 class="adsimple-311196990">Automatische Datenspeicherung</h2>
            <p>Wenn Sie heutzutage Webseiten besuchen, werden gewisse Informationen automatisch erstellt und gespeichert, so auch auf dieser Webseite.</p>
            <p>Wenn Sie unsere Webseite so wie jetzt gerade besuchen, speichert unser Webserver (Computer auf dem diese Webseite gespeichert ist) automatisch Daten wie</p>
            <ul class="adsimple-311196990">
                <li class="adsimple-311196990">die Adresse (URL) der aufgerufenen Webseite</li>
                <li class="adsimple-311196990">Browser und Browserversion</li>
                <li class="adsimple-311196990">das verwendete Betriebssystem</li>
                <li class="adsimple-311196990">die Adresse (URL) der zuvor besuchten Seite (Referrer URL)</li>
                <li class="adsimple-311196990">den Hostname und die IP-Adresse des Geräts von welchem aus zugegriffen wird</li>
                <li class="adsimple-311196990">Datum und Uhrzeit</li>
            </ul>
            <p>in Dateien (Webserver-Logfiles).</p>
            <p>In der Regel werden Webserver-Logfiles zwei Wochen gespeichert und danach automatisch gelöscht. Wir geben diese Daten nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim Vorliegen von rechtswidrigem Verhalten eingesehen werden.</p>
            <h2 class="adsimple-311196990">Cookies</h2>
            <p>Unsere Website verwendet HTTP-Cookies um nutzerspezifische Daten zu speichern.<br />
            Im Folgenden erklären wir, was Cookies sind und warum Sie genutzt werden, damit Sie die folgende Datenschutzerklärung besser verstehen.</p>
            <h3 class="adsimple-311196990">Was genau sind Cookies?</h3>
            <p>Immer wenn Sie durch das Internet surfen, verwenden Sie einen Browser. Bekannte Browser sind beispielsweise Chrome, Safari, Firefox, Internet Explorer und Microsoft Edge. Die meisten Webseiten speichern kleine Text-Dateien in Ihrem Browser. Diese Dateien nennt man Cookies.</p>
            <p>Eines ist nicht von der Hand zu weisen: Cookies sind echt nützliche Helferlein. Fast alle Webseiten verwenden Cookies. Genauer gesprochen sind es HTTP-Cookies, da es auch noch andere Cookies für andere Anwendungsbereiche gibt. HTTP-Cookies sind kleine Dateien, die von unserer Website auf Ihrem Computer gespeichert werden. Diese Cookie-Dateien werden automatisch im Cookie-Ordner, quasi dem &#8220;Hirn&#8221; Ihres Browsers, untergebracht. Ein Cookie besteht aus einem Namen und einem Wert. Bei der Definition eines Cookies müssen zusätzlich ein oder mehrere Attribute angegeben werden.</p>
            <p>Cookies speichern gewisse Nutzerdaten von Ihnen, wie beispielsweise Sprache oder persönliche Seiteneinstellungen. Wenn Sie unsere Seite wieder aufrufen, übermittelt Ihr Browser die „userbezogenen“ Informationen an unsere Seite zurück. Dank der Cookies weiß unsere Website, wer Sie sind und bietet Ihnen Ihre gewohnte Standardeinstellung. In einigen Browsern hat jedes Cookie eine eigene Datei, in anderen wie beispielsweise Firefox sind alle Cookies in einer einzigen Datei gespeichert.</p>
            <p>Es gibt sowohl Erstanbieter Cookies als auch Drittanbieter-Cookies. Erstanbieter-Cookies werden direkt von unserer Seite erstellt, Drittanbieter-Cookies werden von Partner-Webseiten (z.B. Google Analytics) erstellt. Jedes Cookie ist individuell zu bewerten, da jedes Cookie andere Daten speichert. Auch die Ablaufzeit eines Cookies variiert von ein paar Minuten bis hin zu ein paar Jahren. Cookies sind keine Software-Programme und enthalten keine Viren, Trojaner oder andere „Schädlinge“. Cookies können auch nicht auf Informationen Ihres PCs zugreifen.</p>
            <p>So können zum Beispiel Cookie-Daten aussehen:</p>
            <ul class="adsimple-311196990">
                <li class="adsimple-311196990">Name: _ga</li>
                <li class="adsimple-311196990">Ablaufzeit: 2 Jahre</li>
                <li class="adsimple-311196990">Verwendung: Unterscheidung der Webseitenbesucher</li>
                <li class="adsimple-311196990">Beispielhafter Wert: GA1.2.1326744211.152311196990</li>
            </ul>
            <p>Ein Browser sollte folgende Mindestgrößen unterstützen:</p>
            <ul class="adsimple-311196990">
                <li class="adsimple-311196990">Ein Cookie soll mindestens 4096 Bytes enthalten können</li>
                <li class="adsimple-311196990">Pro Domain sollen mindestens 50 Cookies gespeichert werden können</li>
                <li class="adsimple-311196990">Insgesamt sollen mindestens 3000 Cookies gespeichert werden können</li>
            </ul>
            <h3 class="adsimple-311196990">Welche Arten von Cookies gibt es?</h3>
            <p>Die Frage welche Cookies wir im Speziellen verwenden, hängt von den verwendeten Diensten ab und wird in der folgenden Abschnitten der Datenschutzerklärung geklärt. An dieser Stelle möchten wir kurz auf die verschiedenen Arten von HTTP-Cookies eingehen.</p>
            <p>Man kann 4 Arten von Cookies unterscheiden:</p>
            <p>
            <strong class="adsimple-311196990">Unbedingt notwendige Cookies<br />
            </strong>Diese Cookies sind nötig, um grundlegende Funktionen der Website sicherzustellen. Zum Beispiel braucht es diese Cookies, wenn ein User ein Produkt in den Warenkorb legt, dann auf anderen Seiten weitersurft und später erst zur Kasse geht. Durch diese Cookies wird der Warenkorb nicht gelöscht, selbst wenn der User sein Browserfenster schließt.</p>
            <p>
            <strong class="adsimple-311196990">Funktionelle Cookies<br />
            </strong>Diese Cookies sammeln Infos über das Userverhalten und ob der User etwaige Fehlermeldungen bekommt. Zudem werden mithilfe dieser Cookies auch die Ladezeit und das Verhalten der Website bei verschiedenen Browsern gemessen.</p>
            <p>
            <strong class="adsimple-311196990">Zielorientierte Cookies<br />
            </strong>Diese Cookies sorgen für eine bessere Nutzerfreundlichkeit. Beispielsweise werden eingegebene Standorte, Schriftgrößen oder Formulardaten gespeichert.</p>
            <p>
            <strong class="adsimple-311196990">Werbe-Cookies<br />
            </strong>Diese Cookies werden auch Targeting-Cookies genannt. Sie dienen dazu dem User individuell angepasste Werbung zu liefern. Das kann sehr praktisch, aber auch sehr nervig sein.</p>
            <p>Üblicherweise werden Sie beim erstmaligen Besuch einer Webseite gefragt, welche dieser Cookiearten Sie zulassen möchten. Und natürlich wird diese Entscheidung auch in einem Cookie gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich Cookies löschen?</h3>
            <p>Wie und ob Sie Cookies verwenden wollen, entscheiden Sie selbst. Unabhängig von welchem Service oder welcher Website die Cookies stammen, haben Sie immer die Möglichkeit Cookies zu löschen, nur teilweise zuzulassen oder zu deaktivieren. Zum Beispiel können Sie Cookies von Drittanbietern blockieren, aber alle anderen Cookies zulassen.</p>
            <p>Wenn Sie feststellen möchten, welche Cookies in Ihrem Browser gespeichert wurden, wenn Sie Cookie-Einstellungen ändern oder löschen wollen, können Sie dies in Ihren Browser-Einstellungen finden:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie das Cookie erlauben oder nicht. Die Vorgangsweise ist je nach Browser verschieden. Am besten ist es Sie suchen die Anleitung in Google mit dem Suchbegriff “Cookies löschen Chrome” oder &#8220;Cookies deaktivieren Chrome&#8221; im Falle eines Chrome Browsers oder tauschen das Wort &#8220;Chrome&#8221; gegen den Namen Ihres Browsers, z.B. Edge, Firefox, Safari aus.</p>
            <h3 class="adsimple-311196990">Wie sieht es mit meinem Datenschutz aus?</h3>
            <p>Seit 2009 gibt es die sogenannten „Cookie-Richtlinien“. Darin ist festgehalten, dass das Speichern von Cookies eine Einwilligung von Ihnen verlangt. Innerhalb der EU-Länder gibt es allerdings noch sehr unterschiedliche Reaktionen auf diese Richtlinien. In Deutschland wurden die Cookie-Richtlinien nicht als nationales Recht umgesetzt. Stattdessen erfolgte die Umsetzung dieser Richtlinie weitgehend in § 15 Abs.3 des Telemediengesetzes (TMG).</p>
            <p>Wenn Sie mehr über Cookies wissen möchten und technischen Dokumentationen nicht scheuen, empfehlen wir <a class="adsimple-311196990" href="https://tools.ietf.org/html/rfc6265" target="_blank" rel="nofollow noopener">https://tools.ietf.org/html/rfc6265</a>, dem Request for Comments der Internet Engineering Task Force (IETF) namens &#8220;HTTP State Management Mechanism&#8221;.</p>
            <h2 class="adsimple-311196990">Speicherung persönlicher Daten</h2>
            <p>Persönliche Daten, die Sie uns auf dieser Website elektronisch übermitteln, wie zum Beispiel Name, E-Mail-Adresse, Adresse oder andere persönlichen Angaben im Rahmen der Übermittlung eines Formulars oder Kommentaren im Blog, werden von uns gemeinsam mit dem Zeitpunkt und der IP-Adresse nur zum jeweils angegebenen Zweck verwendet, sicher verwahrt und nicht an Dritte weitergegeben.</p>
            <p>Wir nutzen Ihre persönlichen Daten somit nur für die Kommunikation mit jenen Besuchern, die Kontakt ausdrücklich wünschen und für die Abwicklung der auf dieser Webseite angebotenen Dienstleistungen und Produkte. Wir geben Ihre persönlichen Daten ohne Zustimmung nicht weiter, können jedoch nicht ausschließen, dass diese Daten beim Vorliegen von rechtswidrigem Verhalten eingesehen werden.</p>
            <p>Wenn Sie uns persönliche Daten per E-Mail schicken &#8211; somit abseits dieser Webseite &#8211; können wir keine sichere Übertragung und den Schutz Ihrer Daten garantieren. Wir empfehlen Ihnen, vertrauliche Daten niemals unverschlüsselt per E-Mail zu übermitteln.</p>
            <p>Die Rechtsgrundlage besteht nach <a class="adsimple-311196990" href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&amp;from=DE&amp;tid=311196990" target="_blank" rel="noopener">Artikel 6  Absatz 1 a DSGVO</a> (Rechtmäßigkeit der Verarbeitung) darin, dass Sie uns die Einwilligung zur Verarbeitung der von Ihnen eingegebenen Daten geben. Sie können diesen Einwilligung jederzeit widerrufen &#8211; eine formlose E-Mail reicht aus, Sie finden unsere Kontaktdaten im Impressum.</p>
            <h2 class="adsimple-311196990">Rechte laut Datenschutzgrundverordnung</h2>
            <p>Ihnen stehen laut den Bestimmungen der DSGVO grundsätzlich die folgende Rechte zu:</p>
            <ul class="adsimple-311196990">
                <li class="adsimple-311196990">Recht auf Berichtigung (Artikel 16 DSGVO)</li>
                <li class="adsimple-311196990">Recht auf Löschung („Recht auf Vergessenwerden“) (Artikel 17 DSGVO)</li>
                <li class="adsimple-311196990">Recht auf Einschränkung der Verarbeitung (Artikel 18 DSGVO)</li>
                <li class="adsimple-311196990">Recht auf Benachrichtigung &#8211; Mitteilungspflicht im Zusammenhang mit der Berichtigung oder Löschung personenbezogener Daten oder der Einschränkung der Verarbeitung (Artikel 19 DSGVO)</li>
                <li class="adsimple-311196990">Recht auf Datenübertragbarkeit (Artikel 20 DSGVO)</li>
                <li class="adsimple-311196990">Widerspruchsrecht (Artikel 21 DSGVO)</li>
                <li class="adsimple-311196990">Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung — einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden (Artikel 22 DSGVO)</li>
            </ul>
            <p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie sich an die <a class="adsimple-311196990" class="311196990" href="https://www.bfdi.bund.de" target="_blank" rel="noopener">Bundesbeauftragte für den Datenschutz und die Informationsfreiheit (BfDI)</a> wenden.</p>
            <h2 class="adsimple-311196990">Auswertung des Besucherverhaltens</h2>
            <p>In der folgenden Datenschutzerklärung informieren wir Sie darüber, ob und wie wir Daten Ihres Besuchs dieser Website auswerten. Die Auswertung der gesammelten Daten erfolgt in der Regel anonym und wir können von Ihrem Verhalten auf dieser Website nicht auf Ihre Person schließen.</p>
            <p>Mehr über Möglichkeiten dieser Auswertung der Besuchsdaten zu widersprechen erfahren Sie in der folgenden Datenschutzerklärung.</p>
            <h2 class="adsimple-311196990">TLS-Verschlüsselung mit https</h2>
            <p>Wir verwenden https um Daten abhörsicher im Internet zu übertragen (Datenschutz durch Technikgestaltung <a class="adsimple-311196990" href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&amp;from=DE&amp;tid=311196990" target="_blank" rel="noopener">Artikel 25 Absatz 1 DSGVO</a>). Durch den Einsatz von TLS (Transport Layer Security), einem Verschlüsselungsprotokoll zur sicheren Datenübertragung im Internet können wir den Schutz vertraulicher Daten sicherstellen. Sie erkennen die Benutzung dieser Absicherung der Datenübertragung am kleinen Schloßsymbol links oben im Browser und der Verwendung des Schemas https (anstatt http) als Teil unserer Internetadresse.</p>
            <h2 class="adsimple-311196990">Google Maps Datenschutzerklärung</h2>
            <p>Wir benützen auf unserer Website Google Maps der Firma Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Mit Google Maps können wir Ihnen Standorte besser zeigen und damit unser Service an Ihre Bedürfnisse anpassen. Durch die Verwendung von Google Maps werden Daten an Google übertragen und auf den Google-Servern gespeichert. Hier wollen wir nun genauer darauf eingehen, was Google Maps ist, warum wir diesen Google-Dienst in Anspruch nehmen, welche Daten gespeichert werden und wie Sie dies unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist Google Maps?</h3>
            <p>Google Maps ist ein Internet-Kartendienst der Firma Google. Mit Google Maps können Sie online über einen PC, ein Tablet oder eine App genaue Standorte von Städten, Sehenswürdigkeiten, Unterkünften oder Unternehmen suchen. Wenn Unternehmen auf Google My Business vertreten sind, werden neben dem Standort noch weitere Informationen über die Firma angezeigt. Um die Anfahrtsmöglichkeit anzuzeigen, können Kartenausschnitte eines Standorts mittels HTML-Code in eine Website eingebunden werden. Google Maps zeigt die Erdoberfläche als Straßenkarte oder als Luft- bzw. Satellitenbild. Dank der Street View Bilder und den hochwertigen Satellitenbildern sind sehr genaue Darstellungen möglich.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Google Maps auf unserer Webseite?</h3>
            <p>All unsere Bemühungen auf dieser Seite verfolgen das Ziel, Ihnen eine nützliche und sinnvolle Zeit auf unserer Webseite zu bieten. Durch die Einbindung von Google Maps können wir Ihnen die wichtigsten Informationen zu diversen Standorten liefern. Sie sehen auf einen Blick wo wir unseren Firmensitz haben. Die Wegbeschreibung zeigt Ihnen immer den besten bzw. schnellsten Weg zu uns. Sie können den Anfahrtsweg für Routen mit dem Auto, mit öffentlichen Verkehrsmitteln, zu Fuß oder mit dem Fahrrad abrufen. Für uns ist die Bereitstellung von Google Maps Teil unseres Kundenservice.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Google Maps gespeichert?</h3>
            <p>Damit Google Maps ihren Dienst vollständig anbieten kann, muss das Unternehmen Daten von Ihnen aufnehmen und speichern. Dazu zählen unter anderem die eingegebenen Suchbegriffe, Ihre IP-Adresse und auch die Breiten- bzw. Längenkoordinaten. Benutzen Sie die Routenplaner-Funktion wird auch die eingegebene Startadresse gespeichert. Diese Datenspeicherung passiert allerdings auf den Webseiten von Google Maps. Wir können Sie darüber nur informieren, aber keinen Einfluss nehmen. Da wir Google Maps in unsere Webseite eingebunden haben, setzt Google mindestens ein Cookie (Name: NID) in Ihrem Browser. Dieses Cookie speichert Daten über Ihr Userverhalten. Google nutzt diese Daten in erster Linie, um eigene Dienste zu optimieren und individuelle, personalisierte Werbung für Sie bereitzustellen.</p>
            <p>Folgendes Cookie wird aufgrund der Einbindung von Google Maps in Ihrem Browser gesetzt:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> NID<br />
            <strong class="adsimple-311196990">Wert:</strong> 188=h26c1Ktha7fCQTx8rXgLyATyITJ311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> NID wird von Google verwendet, um Werbeanzeigen an Ihre Google-Suche anzupassen. Mit Hilfe des Cookies „erinnert“ sich Google an Ihre am häufigsten eingegebenen Suchanfragen oder Ihre frühere Interaktion mit Anzeigen. So bekommen Sie immer maßgeschneiderte Werbeanzeigen. Das Cookie enthält eine einzigartige ID, die Google benutzt, um Ihre persönlichen Einstellungen für Werbezwecke zu sammeln.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 6 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Wir können bei den Angaben der gespeicherten Daten keine Vollständigkeit gewährleisten. Speziell bei der Verwendung von Cookies sind Veränderungen nie auszuschließen. Um das Cookie NID zu identifizieren, wurde eine eigene Testseite angelegt, wo ausschließlich Google Maps eingebunden war.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Die Google-Server stehen in Rechenzentren auf der ganzen Welt. Die meisten Server befinden sich allerdings in Amerika. Aus diesem Grund werden Ihre Daten auch vermehrt in den USA gespeichert. Hier können Sie genau nachlesen wo sich die Google-Rechenzentren befinden: <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a>
            </p>
            <p>Die Daten verteilt Google auf verschiedenen Datenträgern. Dadurch sind die Daten schneller abrufbar und werden vor etwaigen Manipulationsversuchen besser geschützt. Jedes Rechenzentrum hat auch spezielle Notfallprogramme. Wenn es zum Beispiel Probleme bei der Google-Hardware gibt oder eine Naturkatastrophe die Server lahm legt, bleiben die Daten ziemlich sicher trotzdem geschützt.</p>
            <p>Manche Daten speichert Google für einen festgelegten Zeitraum. Bei anderen Daten bietet Google lediglich die Möglichkeit, diese manuell zu löschen. Weiters anonymisiert das Unternehmen auch Informationen (wie zum Beispiel Werbedaten) in Serverprotokollen, indem es einen Teil der IP-Adresse und Cookie-Informationen nach 9 bzw.18 Monaten löscht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Mit der 2019 eingeführten automatischen Löschfunktion von Standort- und Aktivitätsdaten werden Informationen zur Standortbestimmung und Web-/App-Aktivität &#8211; abhängig von Ihrer Entscheidung &#8211; entweder 3 oder 18 Monate gespeichert und dann gelöscht. Zudem kann man diese Daten über das Google-Konto auch jederzeit manuell aus dem Verlauf löschen. Wenn Sie Ihre Standorterfassung vollständig verhindern wollen, müssen Sie im Google-Konto die Rubrik „Web- und App-Aktivität“ pausieren. Klicken Sie „Daten und Personalisierung“ und dann auf die Option „Aktivitätseinstellung“. Hier können Sie die Aktivitäten ein- oder ausschalten.</p>
            <p>In Ihrem Browser können Sie weiters auch einzelne Cookies deaktivieren, löschen oder verwalten. Je nach dem welchen Browser Sie verwenden, funktioniert dies immer etwas anders. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie es erlauben oder nicht.</p>
            <p>Google ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI</a>. Wenn Sie mehr über die Datenverarbeitung von Google erfahren wollen, empfehlen wir Ihnen die hauseigene Datenschutzerklärung des Unternehmens unter <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer">https://policies.google.com/privacy?hl=de</a>.</p>
            <h2 class="adsimple-311196990">Google Fonts Datenschutzerklärung</h2>
            <p>Auf unserer Website verwenden wir Google Fonts. Das sind die &#8220;Google-Schriften&#8221; der Firma Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich.</p>
            <p>Für die Verwendung von Google-Schriftarten müssen Sie sich nicht anmelden bzw. ein Passwort hinterlegen. Weiters werden auch keine Cookies in Ihrem Browser gespeichert. Die Dateien (CSS, Schriftarten/Fonts) werden über die Google-Domains fonts.googleapis.com und fonts.gstatic.com angefordert. Laut Google sind die Anfragen nach CSS und Schriften vollkommen getrennt von allen anderen Google-Diensten. Wenn Sie ein Google-Konto haben, brauchen Sie keine Sorge haben, dass Ihre Google-Kontodaten, während der Verwendung von Google Fonts, an Google übermittelt werden. Google erfasst die Nutzung von CSS (Cascading Style Sheets) und der verwendeten Schriftarten und speichert diese Daten sicher. Wie die Datenspeicherung genau aussieht, werden wir uns noch im Detail ansehen.</p>
            <h3 class="adsimple-311196990">Was sind Google Fonts?</h3>
            <p>Google Fonts (früher Google Web Fonts) ist ein Verzeichnis mit über 800 Schriftarten, die <a class="adsimple-311196990" href="https://de.wikipedia.org/wiki/Google_LLC?tid=311196990">Google</a> seinen Nutzern kostenlos zu Verfügung stellt.</p>
            <p>Viele dieser Schriftarten sind unter der SIL Open Font License veröffentlicht, während andere unter der Apache-Lizenz veröffentlicht wurden. Beides sind freie Software-Lizenzen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Google Fonts auf unserer Webseite?</h3>
            <p>Mit Google Fonts können wir auf unserer eigenen Webseite Schriften nutzen, doch müssen sie nicht auf unseren eigenen Server hochladen. Google Fonts ist ein wichtiger Baustein, um die Qualität unserer Webseite hoch zu halten. Alle Google-Schriften sind automatisch für das Web optimiert und dies spart Datenvolumen und ist speziell für die Verwendung mit mobilen Endgeräten ein großer Vorteil. Wenn Sie unsere Seite besuchen, sorgt die niedrige Dateigröße für eine schnelle Ladezeit. Des Weiteren sind Google Fonts sichere Web Fonts. Unterschiedliche Bildsynthese-Systeme (Rendering) in verschiedenen Browsern, Betriebssystemen und mobilen Endgeräten können zu Fehlern führen. Solche Fehler können teilweise Texte bzw. ganze Webseiten optisch verzerren. Dank des schnellen Content Delivery Networks (CDN) gibt es mit Google Fonts keine plattformübergreifenden Probleme. Google Fonts unterstützt alle gängigen Browser (Google Chrome, Mozilla Firefox, Apple Safari, Opera) und funktioniert zuverlässig auf den meisten modernen mobilen Betriebssystemen, einschließlich Android 2.2+ und iOS 4.2+ (iPhone, iPad, iPod). Wir verwenden die Google Fonts also, damit wir unser gesamtes Online-Service so schön und einheitlich wie möglich darstellen können.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Google gespeichert?</h3>
            <p>Wenn Sie unsere Webseite besuchen, werden die Schriften über einen Google-Server nachgeladen. Durch diesen externen Aufruf werden Daten an die Google-Server übermittelt. So erkennt Google auch, dass Sie bzw. Ihre IP-Adresse unsere Webseite besuchen. Die Google Fonts API wurde entwickelt, um Verwendung, Speicherung und Erfassung von Endnutzerdaten auf das zu reduzieren, was für eine ordentliche Bereitstellung von Schriften nötig ist. API steht übrigens für „Application Programming Interface“ und dient unter anderem als Datenübermittler im Softwarebereich.</p>
            <p>Google Fonts speichert CSS- und Schrift-Anfragen sicher bei Google und ist somit geschützt. Durch die gesammelten Nutzungszahlen kann Google feststellen, wie gut die einzelnen Schriften ankommen. Die Ergebnisse veröffentlicht Google auf internen Analyseseiten, wie beispielsweise Google Analytics. Zudem verwendet Google auch Daten des eigenen Web-Crawlers, um festzustellen, welche Webseiten Google-Schriften verwenden. Diese Daten werden in der BigQuery-Datenbank von Google Fonts veröffentlicht. Unternehmer und Entwickler nützen das Google-Webservice BigQuery, um große Datenmengen untersuchen und bewegen zu können.</p>
            <p>Zu bedenken gilt allerdings noch, dass durch jede Google Font Anfrage auch Informationen wie Spracheinstellungen, IP-Adresse, Version des Browsers, Bildschirmauflösung des Browsers und Name des Browsers automatisch an die Google-Server übertragen werden. Ob diese Daten auch gespeichert werden, ist nicht klar feststellbar bzw. wird von Google nicht eindeutig kommuniziert.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Anfragen für CSS-Assets speichert Google einen Tag lang auf seinen Servern, die hauptsächlich außerhalb der EU angesiedelt sind. Das ermöglicht uns, mithilfe eines Google-Stylesheets die Schriftarten zu nutzen. Ein Stylesheet ist eine Formatvorlage, über die man einfach und schnell z.B. das Design bzw. die Schriftart einer Webseite ändern kann.</p>
            <p>Die Font-Dateien werden bei Google ein Jahr gespeichert. Google verfolgt damit das Ziel, die Ladezeit von Webseiten grundsätzlich zu verbessern. Wenn Millionen von Webseiten auf die gleichen Schriften verweisen, werden sie nach dem ersten Besuch zwischengespeichert und erscheinen sofort auf allen anderen später besuchten Webseiten wieder. Manchmal aktualisiert Google Schriftdateien, um die Dateigröße zu reduzieren, die Abdeckung von Sprache zu erhöhen und das Design zu verbessern.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Jene Daten, die Google für einen Tag bzw. ein Jahr speichert können nicht einfach gelöscht werden. Die Daten werden beim Seitenaufruf automatisch an Google übermittelt. Um diese Daten vorzeitig löschen zu können, müssen Sie den Google-Support auf <a class="adsimple-311196990" href="https://support.google.com/?hl=de&amp;tid=311196990">https://support.google.com/?hl=de&amp;tid=311196990</a> kontaktieren. Datenspeicherung verhindern Sie in diesem Fall nur, wenn Sie unsere Seite nicht besuchen.</p>
            <p>Anders als andere Web-Schriften erlaubt uns Google uneingeschränkten Zugriff auf alle Schriftarten. Wir können also unlimitiert auf ein Meer an Schriftarten zugreifen und so das Optimum für unsere Webseite rausholen. Mehr zu Google Fonts und weiteren Fragen finden Sie auf <a class="adsimple-311196990" href="https://developers.google.com/fonts/faq?tid=311196990">https://developers.google.com/fonts/faq?tid=311196990</a>. Dort geht zwar Google auf datenschutzrelevante Angelegenheiten ein, doch wirklich detaillierte Informationen über Datenspeicherung sind nicht enthalten. Es ist relativ schwierig, von Google wirklich präzise Informationen über gespeicherten Daten zu bekommen.</p>
            <p>Welche Daten grundsätzlich von Google erfasst werden und wofür diese Daten verwendet werden, können Sie auch auf <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de&amp;tid=311196990">https://www.google.com/intl/de/policies/privacy/</a> nachlesen.</p>
            <h2 class="adsimple-311196990">Google Fonts Lokal Datenschutzerklärung</h2>
            <p>Auf unserer Website nutzen wir Google Fonts der Firma Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) verantwortlich. Wir haben die Google-Schriftarten lokal, d.h. auf unserem Webserver &#8211; nicht auf den Servern von Google &#8211; eingebunden. Dadurch gibt es keine Verbindung zu Google-Servern und somit auch keine Datenübertragung oder Speicherung.</p>
            <h3 class="adsimple-311196990">Was sind Google Fonts?</h3>
            <p>Früher nannte man Google Fonts auch Google Web Fonts. Dabei handelt es sich um ein interaktives Verzeichnis mit über 800 Schriftarten, die <a class="adsimple-311196990" href="https://de.wikipedia.org/wiki/Google_LLC?tid=311196990">Google</a> kostenlos bereitstellt. Mit Google Fonts könnte man Schriften nutzen, ohne sie auf den eigenen Server hochzuladen. Doch um diesbezüglich jede Informationsübertragung zu Google-Servern zu unterbinden, haben wir die Schriftarten auf unseren Server heruntergeladen. Auf diese Weise handeln wir datenschutzkonform und senden keine Daten an Google Fonts weiter.</p>
            <p>Anders als andere Web-Schriften erlaubt uns Google uneingeschränkten Zugriff auf alle Schriftarten. Wir können also unlimitiert auf ein Meer an Schriftarten zugreifen und so das Optimum für unsere Webseite rausholen. Mehr zu Google Fonts und weiteren Fragen finden Sie auf <a class="adsimple-311196990" href="https://developers.google.com/fonts/faq?tid=311196990">https://developers.google.com/fonts/faq?tid=311196990</a>.</p>
            <h2 class="adsimple-311196990">OpenStreetMap Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Website Kartenausschnitte des Online-Kartentools „OpenStreetMap“ eingebunden. Dabei handelt es sich um ein sogenanntes Open-Source-Mapping, welches wir über eine API (Schnittstelle) abrufen können. Angeboten wird diese Funktion von OpenStreetMap Foundation, St John’s Innovation Centre, Cowley Road, Cambridge, CB4 0WS, United Kingdom. Durch die Verwendung dieser Kartenfunktion wird Ihre IP-Adresse an OpenStreetMap weitergeleitet. In dieser Datenschutzerklärung erfahren Sie warum wir Funktionen des Tools OpenStreetMap verwenden, wo welche Daten gespeichert werden und wie Sie diese Datenspeicherung verhindern können.</p>
            <h3 class="adsimple-311196990">Was ist OpenStreetMap?</h3>
            <p>Das Projekt OpenStreetMap wurde 2004 ins Leben gerufen. Ziel des Projekts ist und war es, eine freie Weltkarte zu erschaffen. User sammeln weltweit Daten etwa über Gebäude, Wälder, Flüsse und Straßen. So entstand über die Jahre eine umfangreiche, von Usern selbst erstellte digitale Weltkarte. Selbstverständlich ist die Karte, nicht vollständig, aber in den meisten Regionen mit sehr vielen Daten ausgestattet.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir OpenStreetMap auf unserer Website?</h3>
            <p>Unsere Website soll Ihnen in erster Linie hilfreich sein. Und das ist sie aus unserer Sicht immer dann, wenn man Information schnell und einfach findet. Da geht es natürlich einerseits um unsere Dienstleistungen und Produkte, andererseits sollen Ihnen auch weitere hilfreiche Informationen zur Verfügung stehen. Deshalb nutzen wir auch den Kartendienst OpenStreetMap. Denn so können wir Ihnen beispielsweise genau zeigen, wie Sie unsere Firma finden. Die Karte zeigt Ihnen den besten Weg zu uns und Ihre Anfahrt wird zum Kinderspiel.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von OpenStreetMap gespeichert?</h3>
            <p>Wenn Sie eine unserer Webseiten besuchen, die OpenStreetMap anbietet, werden Nutzerdaten an den Dienst übermittelt und dort gespeichert. OpenStreetMap sammelt etwa Informationen über Ihre Interaktionen mit der digitalen Karte, Ihre IP-Adresse, Daten zu Ihrem Browser, Gerätetyp, Betriebssystem und an welchem Tag und zu welcher Uhrzeit Sie den Dienst in Anspruch genommen haben. Dafür wird auch Tracking-Software zur Aufzeichnung von Userinteraktionen verwendet. Das Unternehmen gibt hier in der eigenen Datenschutzerklärung das Analysetool „Piwik“ an.</p>
            <p>Die erhobenen Daten sind in Folge den entsprechenden Arbeitsgruppen der OpenStreetMap Foundation zugänglich. Laut dem Unternehmen werden persönliche Daten nicht an andere Personen oder Firmen weitergegeben, außer dies ist rechtlich notwendig. Der Drittanbieter Piwik speichert zwar Ihre IP-Adresse, allerdings in gekürzter Form.</p>
            <p>Folgendes Cookie kann in Ihrem Browser gesetzt werden, wenn Sie mit OpenStreetMap auf unserer Website interagieren:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _osm_location<br />
            <strong class="adsimple-311196990">Wert:</strong> 9.63312%7C52.41500%7C17%7CM<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird benötigt, um die Inhalte von OpenStreetMap zu entsperren.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 10 Jahren</p>
            <p>Wenn Sie sich das Vollbild der Karte ansehen wollen, werden Sie auf die OpenStreetMap-Website verlinkt. Dort können unter anderem folgende Cookies in Ihrem Browser gespeichert werden:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _osm_totp_token<br />
            <strong class="adsimple-311196990">Wert:</strong> 148253311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird benutzt, um die Bedienung des Kartenausschnitts zu gewährleisten.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einer Stunde</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _osm_session<br />
            <strong class="adsimple-311196990">Wert:</strong> 1d9bfa122e0259d5f6db4cb8ef653a1c<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Mit Hilfe des Cookies können Sitzungsinformationen (also Userverhalten) gespeichert werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _pk_id.1.cf09<br />
            <strong class="adsimple-311196990">Wert:</strong> 4a5.1593684142.2.1593688396.1593688396311196990-9<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird von Piwik gesetzt, um Userdaten wie etwa das Klickverhalten zu speichern bzw. zu messen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Die API-Server, die Datenbanken und die Server von Hilfsdiensten befinden sich derzeit im Vereinten Königreich (Großbritannien und Nordirland) und in den Niederlanden. Ihre IP-Adresse und Userinformationen, die in gekürzter Form durch das Webanalysetool Piwik gespeichert werden, werden nach 180 Tagen wieder gelöscht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und Einspruch gegen die Nutzung und Verarbeitung zu erheben. Cookies, die von OpenStreetMap möglicherweise gesetzt werden, können Sie in Ihrem Browser jederzeit verwalten, löschen oder deaktivieren. Dadurch wird allerdings der Dienst nicht mehr im vollen Ausmaß funktionieren. Bei jedem Browser funktioniert die Verwaltung, Löschung oder Deaktivierung von Cookies etwas anders. Im Folgenden finden Sie Links zu den Anleitungen der bekanntesten Browser:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wenn Sie mehr über die Datenverarbeitung durch OpenStreetMap erfahren wollen, empfehlen wir Ihnen die Datenschutzerklärung des Unternehmens unter <a class="adsimple-311196990" href="https://wiki.osmfoundation.org/wiki/Privacy_Policy?tid=311196990" target="_blank" rel="noopener noreferrer">https://wiki.osmfoundation.org/wiki/Privacy_Policy.</a>
            </p>
            <h2 class="adsimple-311196990">Google Analytics Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website das Analyse-Tracking Tool Google Analytics (GA) des amerikanischen Unternehmens Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Google Analytics sammelt Daten über Ihre Handlungen auf unserer Website. Wenn Sie beispielsweise einen Link anklicken, wird diese Aktion in einem Cookie gespeichert und an Google Analytics versandt. Mithilfe der Berichte, die wir von Google Analytics erhalten, können wir unsere Website und unser Service besser an Ihre Wünsche anpassen. Im Folgenden gehen wir näher auf das Tracking Tool ein und informieren Sie vor allem darüber, welche Daten gespeichert werden und wie Sie das verhindern können.</p>
            <h3 class="adsimple-311196990">Was ist Google Analytics?</h3>
            <p>Google Analytics ist ein Trackingtool, das der Datenverkehrsanalyse unserer Website dient. Damit Google Analytics funktioniert, wird ein Tracking-Code in den Code unserer Website eingebaut. Wenn Sie unsere Website besuchen, zeichnet dieser Code verschiedene Handlungen auf, die Sie auf unserer Website ausführen. Sobald Sie unsere Website verlassen, werden diese Daten an die Google-Analytics-Server gesendet und dort gespeichert.</p>
            <p>Google verarbeitet die Daten und wir bekommen Berichte über Ihr Userverhalten. Dabei kann es sich unter anderem um folgende Berichte handeln:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Zielgruppenberichte: Über Zielgruppenberichte lernen wir unsere User besser kennen und wissen genauer, wer sich für unser Service interessiert.</li>
            <li class="adsimple-311196990">Anzeigeberichte: Durch Anzeigeberichte können wir unsere Onlinewerbung leichter analysieren und verbessern.</li>
            <li class="adsimple-311196990">Akquisitionsberichte: Akquisitionsberichte geben uns hilfreiche Informationen darüber, wie wir mehr Menschen für unser Service begeistern können.</li>
            <li class="adsimple-311196990">Verhaltensberichte: Hier erfahren wir, wie Sie mit unserer Website interagieren. Wir können nachvollziehen welchen Weg Sie auf unserer Seite zurücklegen und welche Links Sie anklicken.</li>
            <li class="adsimple-311196990">Conversionsberichte: Conversion nennt man einen Vorgang, bei dem Sie aufgrund einer Marketing-Botschaft eine gewünschte Handlung ausführen. Zum Beispiel, wenn Sie von einem reinen Websitebesucher zu einem Käufer oder Newsletter-Abonnent werden. Mithilfe dieser Berichte erfahren wir mehr darüber, wie unsere Marketing-Maßnahmen bei Ihnen ankommen. So wollen wir unsere Conversionrate steigern.</li>
            <li class="adsimple-311196990">Echtzeitberichte: Hier erfahren wir immer sofort, was gerade auf unserer Website passiert. Zum Beispiel sehen wir wie viele User gerade diesen Text lesen.</li>
            </ul>
            <h3 class="adsimple-311196990">Warum verwenden wir Google Analytics auf unserer Webseite?</h3>
            <p>Unser Ziel mit dieser Website ist klar: Wir wollen Ihnen das bestmögliche Service bieten. Die Statistiken und Daten von Google Analytics helfen uns dieses Ziel zu erreichen.</p>
            <p>Die statistisch ausgewerteten Daten zeigen uns ein klares Bild von den Stärken und Schwächen unserer Website. Einerseits können wir unsere Seite so optimieren, dass sie von interessierten Menschen auf Google leichter gefunden wird. Andererseits helfen uns die Daten, Sie als Besucher besser zu verstehen. Wir wissen somit sehr genau, was wir an unserer Website verbessern müssen, um Ihnen das bestmögliche Service zu bieten. Die Daten dienen uns auch, unsere Werbe- und Marketing-Maßnahmen individueller und kostengünstiger durchzuführen. Schließlich macht es nur Sinn, unsere Produkte und Dienstleistungen Menschen zu zeigen, die sich dafür interessieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Google Analytics gespeichert?</h3>
            <p>Google Analytics erstellt mithilfe eines Tracking-Codes eine zufällige, eindeutige ID, die mit Ihrem Browser-Cookie verbunden ist. So erkennt Sie Google Analytics als neuen User. Wenn Sie das nächste Mal unsere Seite besuchen, werden Sie als „wiederkehrender“ User erkannt. Alle gesammelten Daten werden gemeinsam mit dieser User-ID gespeichert. So ist es überhaupt erst möglich pseudonyme Userprofile auszuwerten.</p>
            <p>Durch Kennzeichnungen wie Cookies und App-Instanz-IDs werden Ihre Interaktionen auf unserer Website gemessen. Interaktionen sind alle Arten von Handlungen, die Sie auf unserer Website ausführen. Wenn Sie auch andere Google-Systeme (wie z.B. ein Google-Konto) nützen, können über Google Analytics generierte Daten mit Drittanbieter-Cookies verknüpft werden. Google gibt keine Google Analytics-Daten weiter, außer wir als Websitebetreiber genehmigen das. Zu Ausnahmen kann es kommen, wenn es gesetzlich erforderlich ist.</p>
            <p>Folgende Cookies werden von Google Analytics verwendet:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _ga<br />
            <strong class="adsimple-311196990">Wert: </strong>2.1326744211.152311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Standardmäßig verwendet analytics.js das Cookie _ga, um die User-ID zu speichern. Grundsätzlich dient es zur Unterscheidung der Webseitenbesucher.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gid<br />
            <strong class="adsimple-311196990">Wert: </strong>2.1687193234.152311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie dient auch zur Unterscheidung der Webseitenbesucher.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 24 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gat_gtag_UA_&lt;property-id&gt;<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Wird zum Senken der Anforderungsrate verwendet. Wenn Google Analytics über den Google Tag Manager bereitgestellt wird, erhält dieser Cookie den Namen _dc_gtm_ &lt;property-id&gt;.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 1 Minute</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> AMP_TOKEN<br />
            <strong class="adsimple-311196990">Wert:</strong> keine Angaben<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie hat einen Token, mit dem eine User ID vom AMP-Client-ID-Dienst abgerufen werden kann. Andere mögliche Werte weisen auf eine Abmeldung, eine Anfrage oder einen Fehler hin.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 30 Sekunden bis zu einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utma<br />
            <strong class="adsimple-311196990">Wert: </strong>1564498958.1564498958.1564498958.1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Mit diesem Cookie kann man Ihr Verhalten auf der Website verfolgen und die Leistung messen. Das Cookie wird jedes Mal aktualisiert, wenn Informationen an Google Analytics gesendet werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utmt<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird wie _gat_gtag_UA_&lt;property-id&gt; zum Drosseln der Anforderungsrate verwendet.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 10 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utmb<br />
            <strong class="adsimple-311196990">Wert: </strong>3.10.1564498958<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um neue Sitzungen zu bestimmen. Es wird jedes Mal aktualisiert, wenn neue Daten bzw. Infos an Google Analytics gesendet werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 30 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utmc<br />
            <strong class="adsimple-311196990">Wert:</strong> 167421564<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um neue Sitzungen für wiederkehrende Besucher festzulegen. Dabei handelt es sich um ein Session-Cookie, und es wird nur solange gespeichert, bis Sie den Browser wieder schließen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> Nach Schließung des Browsers</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utmz<br />
            <strong class="adsimple-311196990">Wert:</strong> m|utmccn=(referral)|utmcmd=referral|utmcct=/<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird verwendet, um die Quelle des Besucheraufkommens auf unserer Website zu identifizieren. Das heißt, das Cookie speichert, von wo Sie auf unsere Website gekommen sind. Das kann eine andere Seite bzw. eine Werbeschaltung gewesen sein.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 6 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> __utmv<br />
            <strong class="adsimple-311196990">Wert:</strong> keine Angabe<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird verwendet, um benutzerdefinierte Userdaten zu speichern. Es wird immer aktualisiert, wenn Informationen an Google Analytics gesendet werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese Aufzählung kann keinen Anspruch auf Vollständigkeit erheben, da Google die Wahl seiner Cookies immer wieder verändert.</p>
            <p>Hier zeigen wir Ihnen einen Überblick über die wichtigsten Daten, die mit Google Analytics erhoben werden:</p>
            <p>
            <strong class="adsimple-311196990">Heatmaps:</strong> Google legt sogenannte Heatmaps an. Über Heatmaps sieht man genau jene Bereiche, die Sie anklicken. So bekommen wir Informationen, wo Sie auf unserer Seite „unterwegs“ sind.</p>
            <p>
            <strong class="adsimple-311196990">Sitzungsdauer:</strong> Als Sitzungsdauer bezeichnet Google die Zeit, die Sie auf unserer Seite verbringen, ohne die Seite zu verlassen. Wenn Sie 20 Minuten inaktiv waren, endet die Sitzung automatisch.</p>
            <p>
            <strong class="adsimple-311196990">Absprungrate</strong> (engl. Bouncerate): Von einem Absprung ist die Rede, wenn Sie auf unserer Website nur eine Seite ansehen und dann unsere Website wieder verlassen.</p>
            <p>
            <strong class="adsimple-311196990">Kontoerstellung:</strong> Wenn Sie auf unserer Website ein Konto erstellen bzw. eine Bestellung machen, erhebt Google Analytics diese Daten.</p>
            <p>
            <strong class="adsimple-311196990">IP-Adresse:</strong> Die IP-Adresse wird nur in gekürzter Form dargestellt, damit keine eindeutige Zuordnung möglich ist.</p>
            <p>
            <strong class="adsimple-311196990">Standort:</strong> Über die IP-Adresse kann das Land und Ihr ungefährer Standort bestimmt werden. Diesen Vorgang bezeichnet man auch als IP- Standortbestimmung.</p>
            <p>
            <strong class="adsimple-311196990">Technische Informationen:</strong> Zu den technischen Informationen zählen unter anderem Ihr Browsertyp, Ihr Internetanbieter oder Ihre Bildschirmauflösung.</p>
            <p>
            <strong class="adsimple-311196990">Herkunftsquelle:</strong> Google Analytics beziehungsweise uns, interessiert natürlich auch über welche Website oder welche Werbung Sie auf unsere Seite gekommen sind.</p>
            <p>Weitere Daten sind Kontaktdaten, etwaige Bewertungen, das Abspielen von Medien (z.B., wenn Sie ein Video über unsere Seite abspielen), das Teilen von Inhalten über Social Media oder das Hinzufügen zu Ihren Favoriten. Die Aufzählung hat keinen Vollständigkeitsanspruch und dient nur zu einer allgemeinen Orientierung der Datenspeicherung durch Google Analytics.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Google hat Ihre Server auf der ganzen Welt verteilt. Die meisten Server befinden sich in Amerika und folglich werden Ihre Daten meist auf amerikanischen Servern gespeichert. Hier können Sie genau nachlesen wo sich die Google-Rechenzentren befinden: <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a>
            </p>
            <p>Ihre Daten werden auf verschiedenen physischen Datenträgern verteilt. Das hat den Vorteil, dass die Daten schneller abrufbar sind und vor Manipulation besser geschützt sind. In jedem Google-Rechenzentrum gibt es entsprechende Notfallprogramme für Ihre Daten. Wenn beispielsweise die Hardware bei Google ausfällt oder Naturkatastrophen Server lahmlegen, bleibt das Risiko einer Dienstunterbrechung bei Google dennoch gering.</p>
            <p>Standardisiert ist bei Google Analytics eine Aufbewahrungsdauer Ihrer Userdaten von 26 Monaten eingestellt. Dann werden Ihre Userdaten gelöscht. Allerdings haben wir die Möglichkeit, die Aufbewahrungsdauer von Nutzdaten selbst zu wählen. Dafür stehen uns fünf Varianten zur Verfügung:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Löschung nach 14 Monaten</li>
            <li class="adsimple-311196990">Löschung nach 26 Monaten</li>
            <li class="adsimple-311196990">Löschung nach 38 Monaten</li>
            <li class="adsimple-311196990">Löschung nach 50 Monaten</li>
            <li class="adsimple-311196990">Keine automatische Löschung</li>
            </ul>
            <p>Wenn der festgelegte Zeitraum abgelaufen ist, werden einmal im Monat die Daten gelöscht. Diese Aufbewahrungsdauer gilt für Ihre Daten, die mit Cookies, Usererkennung und Werbe-IDs (z.B. Cookies der DoubleClick-Domain) verknüpft sind. Berichtergebnisse basieren auf aggregierten Daten und werden unabhängig von Nutzerdaten gespeichert. Aggregierte Daten sind eine Zusammenschmelzung von Einzeldaten zu einer größeren Einheit.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Nach dem Datenschutzrecht der Europäischen Union haben Sie das Recht, Auskunft über Ihre Daten zu erhalten, sie zu aktualisieren, zu löschen oder einzuschränken. Mithilfe des Browser-Add-ons zur Deaktivierung von Google Analytics-JavaScript (ga.js, analytics.js, dc.js) verhindern Sie, dass Google Analytics Ihre Daten verwendet. Das Browser-Add-on können Sie unter <a class="adsimple-311196990" href="https://tools.google.com/dlpage/gaoptout?hl=de" target="_blank" rel="noopener noreferrer">https://tools.google.com/dlpage/gaoptout?hl=de</a> runterladen und installieren. Beachten Sie bitte, dass durch dieses Add-on nur die Datenerhebung durch Google Analytics deaktiviert wird.</p>
            <p>Falls Sie grundsätzlich Cookies (unabhängig von Google Analytics) deaktivieren, löschen oder verwalten wollen, gibt es für jeden Browser eine eigene Anleitung:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Google Analytics ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;tid=311196990</a>. Wir hoffen wir konnten Ihnen die wichtigsten Informationen rund um die Datenverarbeitung von Google Analytics näherbringen. Wenn Sie mehr über den Tracking-Dienst erfahren wollen, empfehlen wir diese beiden Links: <a class="adsimple-311196990" href="http://www.google.com/analytics/terms/de.html" target="_blank" rel="noopener noreferrer">http://www.google.com/analytics/terms/de.html</a> und <a class="adsimple-311196990" href="https://support.google.com/analytics/answer/6004245?hl=de" target="_blank" rel="noopener noreferrer">https://support.google.com/analytics/answer/6004245?hl=de</a>.</p>
            <h2 class="adsimple-311196990">Google Analytics IP-Anonymisierung</h2>
            <p>Wir haben auf dieser Webseite die IP-Adressen-Anonymisierung von Google Analytics implementiert. Diese Funktion wurde von Google entwickelt, damit diese Webseite die geltenden Datenschutzbestimmungen und Empfehlungen der lokalen Datenschutzbehörden einhalten kann, wenn diese eine Speicherung der vollständigen IP-Adresse untersagen. Die Anonymisierung bzw. Maskierung der IP findet statt, sobald die IP-Adressen im Google Analytics-Datenerfassungsnetzwerk eintreffen und bevor eine Speicherung oder Verarbeitung der Daten stattfindet.</p>
            <p>Mehr Informationen zur IP-Anonymisierung finden Sie auf <a class="adsimple-311196990" href="https://support.google.com/analytics/answer/2763052?hl=de" target="_blank" rel="noopener">https://support.google.com/analytics/answer/2763052?hl=de</a>.</p>
            <h2 class="adsimple-311196990">Google Analytics Berichte zu demografischen Merkmalen und Interessen</h2>
            <p>Wir haben in Google Analytics die Funktionen für Werbeberichte eingeschaltet. Die Berichte zu demografischen Merkmalen und Interessen enthalten Angaben zu Alter, Geschlecht und Interessen. Damit können wir uns &#8211; ohne diese Daten einzelnen Personen zuordnen zu können &#8211; ein besseres Bild von unseren Nutzern machen. Mehr über die Werbefunktionen erfahren Sie <a class="adsimple-311196990" href="https://support.google.com/analytics/answer/3450482?hl=de_AT&amp;utm_id=ad" target="_blank" rel="noopener">auf https://support.google.com/analytics/answer/3450482?hl=de_AT&amp;utm_id=ad</a>.</p>
            <p>Sie können die Nutzung der Aktivitäten und Informationen Ihres Google Kontos unter “Einstellungen für Werbung” auf <a class="adsimple-311196990" href="https://adssettings.google.com/authenticated">https://adssettings.google.com/authenticated</a> per Checkbox beenden.</p>
            <h2 class="adsimple-311196990">Google Analytics Deaktivierungslink</h2>
            <p>Wenn Sie auf folgenden <strong class="adsimple-311196990">Deaktivierungslink</strong> klicken, können Sie verhindern, dass Google weitere Besuche auf dieser Webseite erfasst. Achtung: Das Löschen von Cookies, die Nutzung des Inkognito/Privatmodus Ihres Browsers, oder die Nutzung eines anderen Browsers führt dazu, dass wieder Daten erhoben werden.</p>
            <p>
            <a class="adsimple-311196990" onclick="alert('Google Analytics wurde deaktiviert');"
            href="javascript:gaOptout()">Google Analytics deaktivieren</a>
            </p>
            <h2 class="adsimple-311196990">Google Analytics Zusatz zur Datenverarbeitung</h2>
            <p>Wir haben mit Google einen Direktkundenvertrag zur Verwendung von Google Analytics abgeschlossen, indem wir den “Zusatz zur Datenverarbeitung” in Google Analytics akzeptiert haben.</p>
            <p>Mehr über den Zusatz zur Datenverarbeitung für Google Analytics finden Sie hier: <a class="adsimple-311196990" href="https://support.google.com/analytics/answer/3379636?hl=de&amp;utm_id=ad" target="_blank" rel="noopener">https://support.google.com/analytics/answer/3379636?hl=de&amp;utm_id=ad</a>
            </p>
            <h2 class="adsimple-311196990">Google Analytics Google-Signale Datenschutzerklärung</h2>
            <p>Wir haben in Google Analytics die Google-Signale aktiviert. So werden die bestehenden Google-Analytics-Funktionen (Werbeberichte, Remarketing, gerätübergreifende Berichte und Berichte zu Interessen und demografische Merkmale) aktualisiert, um zusammengefasste und anonymisierte Daten von Ihnen zu erhalten, sofern Sie personalisierte Anzeigen in Ihrem Google-Konto erlaubt haben.</p>
            <p>Das besondere daran ist, dass es sich dabei um ein Cross-Device-Tracking handelt. Das heißt Ihre Daten können geräteübergreifend analysiert werden. Durch die Aktivierung von Google-Signale werden Daten erfasst und mit dem Google-Konto verknüpft. Google kann dadurch zum Beispiel erkennen, wenn Sie auf unsere Webseite über ein Smartphone ein Produkt ansehen und erst später über einen Laptop das Produkt kaufen. Dank der Aktivierung von Google-Signale können wir gerätübergreifende Remarketing-Kampagnen starten, die sonst in dieser Form nicht möglich wären. Remarketing bedeutet, dass wir Ihnen auch auf anderen Webseiten unser Angebot zeigen können.</p>
            <p>In Google Analytics werden zudem durch die Google-Signale weitere Besucherdaten wie Standort, Suchverlauf, YouTube-Verlauf und Daten über Ihre Handlungen auf unserer Webseite, erfasst. Wir erhalten dadurch von Google bessere Werbeberichte und nützlichere Angaben zu Ihren Interessen und demografischen Merkmalen. Dazu gehören Ihr Alter, welche Sprache sie sprechen, wo Sie wohnen oder welchem Geschlecht Sie angehören. Weiters kommen auch noch soziale Kriterien wie Ihr Beruf, Ihr Familienstand oder Ihr Einkommen hinzu. All diese Merkmal helfen Google Analytics Personengruppen bzw. Zielgruppen zu definieren.</p>
            <p>Die Berichte helfen uns auch Ihr Verhalten, Ihre Wünsche und Interessen besser einschätzen zu können. Dadurch können wir unsere Dienstleistungen und Produkte für Sie optimieren und anpassen. Diese Daten laufen standardmäßig nach 26 Monaten ab. Bitte beachten Sie, dass diese Datenerfassung nur erfolgt, wenn Sie personalisierte Werbung in Ihrem Google-Konto zugelassen haben. Es handelt sich dabei immer um zusammengefasste und anonyme Daten und nie um Daten einzelner Personen. In Ihrem Google-Konto können Sie diese Daten verwalten bzw. auch löschen.</p>
            <h2 class="adsimple-311196990">Facebook-Pixel Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Webseite das Facebook-Pixel von Facebook. Dafür haben wir einen Code auf unserer Webseite implementiert. Der Facebook-Pixel ist ein Ausschnitt aus JavaScript-Code, der eine Ansammlung von Funktionen lädt, mit denen Facebook Ihre Userhandlungen verfolgen kann, sofern Sie über Facebook-Ads auf unsere Webseite gekommen sind. Wenn Sie beispielsweise ein Produkt auf unserer Webseite erwerben, wird das Facebook-Pixel ausgelöst und speichert Ihre Handlungen auf unserer Webseite in einem oder mehreren Cookies. Diese Cookies ermöglichen es Facebook Ihre Userdaten (Kundendaten wie IP-Adresse, User-ID) mit den Daten Ihres Facebook-Kontos abzugleichen. Dann löscht Facebook diese Daten wieder. Die erhobenen Daten sind für uns anonym und nicht einsehbar und werden nur im Rahmen von Werbeanzeigenschaltungen nutzbar. Wenn Sie selbst Facebook-User sind und angemeldet sind, wird der Besuch unserer Webseite automatisch Ihrem Facebook-Benutzerkonto zugeordnet.</p>
            <p>Wir wollen unsere Dienstleistungen bzw. Produkte nur jenen Menschen zeigen, die sich auch wirklich dafür interessieren. Mithilfe von Facebook-Pixel können unsere Werbemaßnahmen besser auf Ihre Wünsche und Interessen abgestimmt werden. So bekommen Facebook-User (sofern sie personalisierte Werbung erlaubt haben) passende Werbung zu sehen. Weiters verwendet Facebook die erhobenen Daten zu Analysezwecken und eigenen Werbeanzeigen.</p>
            <p>Im Folgenden zeigen wir Ihnen jene Cookies, die durch das Einbinden von Facebook-Pixel auf einer Testseite gesetzt wurden. Bitte beachten Sie, dass dies nur Beispiel-Cookies sind. Je nach Interaktion auf unserer Webseite werden unterschiedliche Cookies gesetzt.</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _fbp<br />
            <strong class="adsimple-311196990">Wert:</strong> fb.1.1568287647279.257405483-6311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie verwendet Facebook, um Werbeprodukte anzuzeigen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> fr<br />
            <strong class="adsimple-311196990">Wert:</strong> 0aPf312HOS5Pboo2r..Bdeiuf&#8230;1.0.Bdeiuf.<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, damit Facebook-Pixel auch ordentlich funktioniert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> comment_author_50ae8267e2bdf1253ec1a5769f48e062311196990-3<br />
            <strong class="adsimple-311196990">Wert:</strong> Name des Autors<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert den Text und den Namen eines Users, der beispielsweise einen Kommentar hinterlässt.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 12 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> comment_author_url_50ae8267e2bdf1253ec1a5769f48e062<br />
            <strong class="adsimple-311196990">Wert:</strong> https%3A%2F%2Fwww.testseite…%2F (URL des Autors)<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert die URL der Website, die der User in einem Textfeld auf unserer Webseite eingibt.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 12 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> comment_author_email_50ae8267e2bdf1253ec1a5769f48e062<br />
            <strong class="adsimple-311196990">Wert:</strong> E-Mail-Adresse des Autors<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert die E-Mail-Adresse des Users, sofern er sie auf der Website bekannt gegeben hat.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 12 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung: </strong>Die oben genannten Cookies beziehen sich auf ein individuelles Userverhalten. Speziell bei der Verwendung von Cookies sind Veränderungen bei Facebook nie auszuschließen.</p>
            <p>Sofern Sie bei Facebook angemeldet sind, können Sie Ihre Einstellungen für Werbeanzeigen unter <a class="adsimple-311196990" href="https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen" target="_blank" rel="noopener">https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen</a> selbst verändern. Falls Sie kein Facebook-User sind, können Sie auf <a class="adsimple-311196990" href="http://www.youronlinechoices.com/de/praferenzmanagement/?tid=311196990" target="_blank" rel="noopener">http://www.youronlinechoices.com/de/praferenzmanagement/</a> grundsätzlich Ihre nutzungsbasierte Online-Werbung verwalten. Dort haben Sie die Möglichkeit, Anbieter zu deaktivieren bzw. zu aktivieren.</p>
            <p>Wenn Sie mehr über den Datenschutz von Facebook erfahren wollen, empfehlen wir Ihnen die eigenen Datenrichtlinien des Unternehmens auf <a class="adsimple-311196990" href="https://www.facebook.com/policy.php" target="_blank" rel="noopener">https://www.facebook.com/policy.php</a>.</p>
            <h2 class="adsimple-311196990">Facebook Automatischer erweiterter Abgleich Datenschutzerklärung</h2>
            <p>Wir haben im Rahmen der Facebook-Pixel-Funktion auch den automatischen erweiterten Abgleich (engl. Automatic Advanced Matching) aktiviert. Diese Funktion des Pixels ermöglicht uns, gehashte E-Mails, Namen, Geschlecht, Stadt, Bundesland, Postleitzahl und Geburtsdatum oder Telefonnummer als zusätzliche Informationen an Facebook zu senden, sofern Sie uns diese Daten zur Verfügung gestellt haben. Diese Aktivierung ermöglicht uns Werbekampagnen auf Facebook noch genauer auf Menschen, die sich für unsere Dienstleistungen oder Produkte interessieren, anzupassen.</p>
            <h2 class="adsimple-311196990">Google Tag Manager Datenschutzerklärung</h2>
            <p>Für unsere Website verwenden wir den Google Tag Manager des Unternehmens Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Dieser Tag Manager ist eines von vielen hilfreichen Marketing-Produkten von Google. Über den Google Tag Manager können wir Code-Abschnitte von diversen Trackingtools, die wir auf unserer Webseite verwenden, zentral einbauen und verwalten.</p>
            <p>In dieser Datenschutzerklärung wollen wir Ihnen genauer erklären was der Google Tag Manager macht, warum wir ihn verwenden und in welcher Form Daten verarbeitet werden.</p>
            <h3 class="adsimple-311196990">Was ist der Google Tag Manager?</h3>
            <p>Der Google Tag Manager ist ein Organisationstool, mit dem wir Webseiten-Tags zentral und über eine Benutzeroberfläche einbinden und verwalten können. Als Tags bezeichnet man kleine Code-Abschnitte, die beispielsweise Ihre Aktivitäten auf unserer Webseite aufzeichnen (tracken). Dafür werden JavaScript-Code-Abschnitte in den Quelltext unserer Seite eingesetzt. Die Tags stammen oft von google-internen Produkten wie Google Ads oder Google Analytics, aber auch Tags von anderen Unternehmen können über den Manager eingebunden und verwaltet werden. Solche Tags übernehmen unterschiedliche Aufgaben. Sie können Browserdaten sammeln, Marketingtools mit Daten füttern, Buttons einbinden, Cookies setzen und auch Nutzer über mehrere Webseiten hinweg verfolgen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir den Google Tag Manager für unserer Webseite?</h3>
            <p>Wie sagt man so schön: Organisation ist die halbe Miete! Und das betrifft natürlich auch die Pflege unserer Webseite. Um unsere Webseite für Sie und alle Menschen, die sich für unsere Produkte und Dienstleistungen interessieren, so gut wie möglich zu gestalten, brauchen wir diverse Trackingtools wie beispielsweise Google Analytics. Die erhobenen Daten dieser Tools zeigen uns, was Sie am meisten interessiert, wo wir unsere Leistungen verbessern können und welchen Menschen wir unsere Angebote noch zeigen sollten. Und damit dieses Tracking funktioniert, müssen wir entsprechende JavaScript-Codes in unsere Webseite einbinden. Grundsätzlich könnten wir jeden Code-Abschnitt der einzelnen Tracking-Tools separat in unseren Quelltext einbauen. Das erfordert allerdings relativ viel Zeit und man verliert leicht den Überblick. Darum nützen wir den Google Tag Manager. Wir können die nötigen Skripte einfach einbauen und von einem Ort aus verwalten. Zudem bietet der Google Tag Manager eine leicht zu bedienende Benutzeroberfläche und man benötigt keine Programmierkenntnisse. So schaffen wir es, Ordnung in unserem Tag-Dschungel zu halten.</p>
            <h3 class="adsimple-311196990">Welche Daten werden vom Google Tag Manager gespeichert?</h3>
            <p>Der Tag Manager selbst ist eine Domain, die keine Cookies setzt und keine Daten speichert. Er fungiert als bloßer „Verwalter“ der implementierten Tags. Die Daten erfassen die einzelnen Tags der unterschiedlichen Web-Analysetools. Die Daten werden im Google Tag Manager quasi zu den einzelnen Tracking-Tools durchgeschleust und nicht gespeichert.</p>
            <p>Ganz anders sieht das allerdings mit den eingebundenen Tags der verschiedenen Web-Analysetools, wie zum Beispiel Google Analytics, aus. Je nach Analysetool werden meist mit Hilfe von Cookies verschiedene Daten über Ihr Webverhalten gesammelt, gespeichert und verarbeitet. Dafür lesen Sie bitte unsere Datenschutztexte zu den einzelnen Analyse- und Trackingtools, die wir auf unserer Webseite verwenden.</p>
            <p>In den Kontoeinstellungen des Tag Managers haben wir Google erlaubt, dass Google anonymisierte Daten von uns erhält. Dabei handelt es sich aber nur um die Verwendung und Nutzung unseres Tag Managers und nicht um Ihre Daten, die über die Code-Abschnitte gespeichert werden. Wir ermöglichen Google und anderen, ausgewählte Daten in anonymisierter Form zu erhalten. Wir stimmen somit der anonymen Weitergabe unseren Website-Daten zu. Welche zusammengefassten und anonymen Daten genau weitergeleitet werden, konnten wir – trotz langer Recherche – nicht in Erfahrung bringen. Auf jeden Fall löscht Google dabei alle Infos, die unsere Webseite identifizieren könnten. Google fasst die Daten mit Hunderten anderen anonymen Webseiten-Daten zusammen und erstellt, im Rahmen von Benchmarking-Maßnahmen, Usertrends. Bei Benchmarking werden eigene Ergebnisse mit jenen der Mitbewerber verglichen. Auf Basis der erhobenen Informationen können Prozesse optimiert werden.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Wenn Google Daten speichert, dann werden diese Daten auf den eigenen Google-Servern gespeichert. Die Server sind auf der ganzen Welt verteilt. Die meisten befinden sich in Amerika. Unter <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a> können Sie genau nachlesen, wo sich die Google-Server befinden.</p>
            <p>Wie lange die einzelnen Tracking-Tools Daten von Ihnen speichern, entnehmen Sie unseren individuellen Datenschutztexten zu den einzelnen Tools.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Der Google Tag Manager selbst setzt keine Cookies, sondern verwaltet Tags verschiedener Tracking-Webseiten. In unseren Datenschutztexten zu den einzelnen Tracking-Tools, finden Sie detaillierte Informationen wie Sie Ihre Daten löschen bzw. verwalten können.</p>
            <p>Google ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;tid=311196990</a>. Wenn Sie mehr über den Google Tag Manager erfahren wollen, empfehlen wir Ihnen die FAQs unter <a class="adsimple-311196990" href="https://www.google.com/intl/de/tagmanager/faq.html" target="_blank" rel="noopener noreferrer">https://www.google.com/intl/de/tagmanager/faq.html</a>.</p>
            <h2 class="adsimple-311196990">Google Site Kit Datenschutzerklärung</h2>
            <p>Wir haben in unsere Website das WordPress-Plugin Google Site Kit des amerikanischen Unternehmens Google Inc. eingebunden. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Mit Google Site Kit können wir schnell und einfach Statistiken, die aus diversen Google-Produkten wie Google Analytics stammen, direkt in unserem WordPress-Dashboard ansehen. Das Tool beziehungsweise die in Google Site Kit eingebundenen Tools sammeln unter anderem auch personenbezogene Daten von Ihnen. In dieser Datenschutzerklärung erklären wir Ihnen, warum wir Google Site Kit verwenden, wie lange und wo Daten gespeichert werden und welche weiteren Datenschutztexte in diesem Zusammenhang für Sie relevant sind.</p>
            <h3 class="adsimple-311196990">Was ist Google Site Kit?</h3>
            <p>Google Site Kit ist ein Plugin für das Content-Management-System WordPress. Mit diesem Plugin können wir wichtige Statistiken zur Websiteanalyse direkt in unserem Dashboard ansehen. Dabei handelt es sich um Statistiken, die von anderen Google-Produkten erhoben werden. Allen voran von Google Analytics. Neben Google Analytics können auch noch die Services Google Search Console, Page Speed Insight, Google AdSense, Google Optimize und Google Tag Manager mit Google Site Kit verknüpft werden.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Google Site Kit auf unserer Website?</h3>
            <p>Als Dienstleister ist es unsere Aufgabe, Ihnen auf unserer Website das bestmögliche Erlebnis zu bieten. Sie sollen sich auf unserer Website wohl fühlen und schnell und einfach genau das finden, was Sie suchen. Statistische Auswertungen helfen uns dabei, sie besser kennen zu lernen und unser Angebot an Ihre Wünsche und Interessen anzupassen. Für diese Auswertungen nutzen wir verschiedene Google-Tools. Site Kit erleichtert diesbezüglich unsere Arbeit sehr, weil wir die Statistiken der Google-Produkte gleich im Dashboard ansehen und analysieren können. Wir müssen uns also nicht mehr für das jeweilige Tool extra anmelden. Site Kit bietet somit immer einen guten Überblick über die wichtigsten Analyse-Daten.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Google Site Kit gespeichert?</h3>
            <p>Wenn Sie im Cookie-Hinweis (auch Script oder Banner genannt) Trackingtools aktiv zugestimmt haben, werden durch Google-Produkte wie Google Analytics Cookies gesetzt und Daten von Ihnen, etwa über Ihr Userverhalten, an Google gesendet, dort gespeichert und verarbeitet. Darunter werden auch personenbezogen Daten wie Ihre IP-Adresse gespeichert.</p>
            <p>Für genauere Informationen zu den einzelnen Diensten haben wir eigenen Textabschnitte in dieser Datenschutzerklärung. Sehen Sie sich beispielsweise unsere Datenschutzerklärung zu Google Analytics an. Hier gehen wir sehr genau auf die erhobenen Daten ein. Sie erfahren wie lange Google Analytics Daten speichert, verwaltet und verarbeitet, welche Cookies zum Einsatz kommen können und wie Sie die Datenspeicherung verhindern. Ebenso haben wir auch für weitere Google-Dienste wie etwa den Google Tag Manager oder Google AdSense eigene Datenschutzerklärungen mit umfassenden Informationen.</p>
            <p>Im Folgenden zeigen wir Ihnen beispielhafte Google-Analytics-Cookies, die in Ihrem Browser gesetzt werden können, sofern Sie der Datenverarbeitung durch Google grundsätzlich zugestimmt haben. Bitte beachten Sie, dass es sich bei diesen Cookies lediglich um eine Auswahl handelt:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _ga<br />
            <strong class="adsimple-311196990">Wert:</strong>2.1326744211.152311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Standardmäßig verwendet analytics.js das Cookie _ga, um die User-ID zu speichern. Grundsätzlich dient es zur Unterscheidung der Websitenbesucher.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gid<br />
            <strong class="adsimple-311196990">Wert:</strong>2.1687193234.152311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Auch dieses Cookie dient der Unterscheidung von Websitesbesuchern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 24 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gat_gtag_UA_&lt;property-id&gt;<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird zum Senken der Anforderungsrate verwendet.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 1 Minute</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Google speichert erhobene Daten auf eigenen Google-Servern, die weltweit verteilt sind. Die meisten Server befinden sich in den Vereinigten Staaten und daher ist es leicht möglich, dass Ihre Daten auch dort gespeichert werden. Auf <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="noopener">https://www.google.com/about/datacenters/inside/locations/?hl=de</a> sehen Sie genau, wo das Unternehmen Server bereitstellt.</p>
            <p>Daten, die durch Google Analytics erhoben werden, werden standardisiert 26 Monate aufbewahrt. Im Anschluss werden Ihre Userdaten gelöscht. Die Aufbewahrungsdauer gilt für alle Daten, die mit Cookies, Usererkennung und Werbe-IDs verknüpft sind.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben immer das Recht, Auskunft über Ihre Daten zu erhalten, Ihre Daten löschen, berichtigen oder einschränken zu lassen. Zudem können Sie auch in Ihrem Browser Cookies jederzeit deaktivieren, löschen oder verwalten. Hier zeigen wir Ihnen die entsprechenden Anleitungen der gängigsten Browser:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Google ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;tid=311196990</a>. Um mehr über die Datenverarbeitung durch Google zu erfahren, empfehlen wir Ihnen die umfassenden Datenschutzrichtlinien von Google unter <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de?tid=311196990">https://policies.google.com/privacy?hl=de</a>.</p>
            <h2 class="adsimple-311196990">Hotjar Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Webseite Hotjar der Firma Hotjar Limited (Level 2, St Julian&#8217;s Business Centre, 3, Elia Zammit Street, St Julian&#8217;s STJ 1000, Malta), um Besucherdaten statistisch auszuwerten. Hotjar ist ein Dienst, der das Verhalten und das Feedback von Ihnen als Nutzer auf unserer Webseite durch eine Kombination von Analyse- und Feedback-Tools analysiert. Wir erhalten von Hotjar Berichte und visuelle Darstellungen, die uns zeigen wo und wie Sie sich auf unserer Seite &#8220;bewegen&#8221;. Personenbezogenen Daten werden automatisch anonymisiert und erreichen niemals die Server von Hotjar. Das heißt Sie werden als Webseitenbenutzer nicht persönlich identifiziert und wir lernen dennoch vieles über Ihr Userverhalten.</p>
            <h3 class="adsimple-311196990">Was ist Hotjar?</h3>
            <p>Wie im oberen Abschnitt bereits erwähnt, hilft uns Hotjar das Verhalten unserer Seitenbesucher zu analysieren. Zu diesen Tools, die Hotjar anbietet,  gehören Heatmaps, Conversion Funnels, Visitor Recording, Incoming Feedback, Feedback Polls und Surveys (mehr Informationen darüber erhalten Sie unter <a class="adsimple-311196990" href="https://www.hotjar.com?tid=311196990/" target="_blank" rel="noopener">https://www.hotjar.com/</a>). Damit hilft uns Hotjar, Ihnen eine bessere Nutzererfahrung und ein besseres Service anzubieten. Es bietet somit einerseits eine gute Analyse über das Onlineverhalten, andererseits erhalten wir auch ein gutes Feedback über die Qualität unserer Webseite. Denn neben all den analysetechnischen Aspekten wollen wir natürlich auch einfach Ihre Meinung über unsere Webseite wissen. Und mit dem Feedbacktool ist genau das möglich.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Hotjar auf unserer Webseite?</h3>
            <p>In den letzten Jahren nahm die Bedeutung von User Experience (also Benutzererfahrung) auf Webseiten stark zu. Und das auch aus gutem Grund. Eine Webseite soll so aufgebaut sein, dass Sie sich als Besucher wohl fühlen und sich einfach zurechtfinden. Wir können dank der Analyse-Tools und des Feedback-Tools von Hotjar unsere Webseite und unser Angebot attraktiver gestalten. Für uns besonders wertvoll erweisen sich die Heatmaps von Hotjar. Bei Heatmaps handelt es sich um eine Darstellungsform für die Visualisierung von Daten. Durch die Heatmaps von Hotjar sehen wir beispielsweise sehr genau, was Sie gerne anklicken, antippen und wohin Sie scrollen.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Hotjar gespeichert?</h3>
            <p>Während Sie durch unsere Webseite surfen, sammelt Hotjar automatisch Informationen über Ihr Userverhalten. Um diese Informationen sammeln zu können, haben wir auf unserer Webseite einen eigenen Tracking-Code eingebaut. Folgende Daten können über Ihren Computer beziehungsweise Ihren Browser gesammelt werden:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">IP-Adresse Ihres Computers (wird in einem anonymen Format gesammelt und gespeichert)</li>
            <li class="adsimple-311196990">Bildschirmgröße</li>
            <li class="adsimple-311196990">Browserinfos (welcher Browser, welche Version usw.)</li>
            <li class="adsimple-311196990">Ihr Standort (aber nur das Land)</li>
            <li class="adsimple-311196990">Ihre bevorzugte Spracheinstellung</li>
            <li class="adsimple-311196990">Besuchte Webseiten (Unterseiten)</li>
            <li class="adsimple-311196990">Datum und Uhrzeit des Zugriffs auf eine unserer Unterseiten (Webseiten)</li>
            </ul>
            <p>Zudem speichern Cookies auch Daten, die auf Ihrem Computer (meist in Ihrem Browser) platziert werden. Darin werden keine personenbezogenen Daten gesammelt. Grundsätzlich gibt Hotjar keine gesammelten Daten an Dritte weiter. Hotjar weist allerdings ausdrücklich darauf hin, dass es manchmal notwendig ist, Daten mit Amazon Web Services zu teilen. Dann werden Teile Ihrer Informationen auf deren Servern gespeichert. Amazon ist aber durch eine Geheimhaltungspflicht gebunden, diese Daten nicht preiszugeben.</p>
            <p>Auf die gespeicherten Informationen haben nur eine begrenzte Anzahl an Personen (Mitarbeiter von Hotjar) Zugriff. Die Hotjar-Server sind durch Firewalls und IP-Beschränkungen (Zugriff nur genehmigter IP-Adressen) geschützt. Firewalls sind Sicherheitssysteme, die Computer vor unerwünschten Netzwerkzugriffen schützen. Sie sollen als Barriere zwischen dem sicheren internen Netzwerk von Hotjar und dem Internet dienen. Weiters verwendet Hotjar für Ihre Dienste auch Drittunternehmen, wie etwa Google Analytics oder Optimizely. Diese Firmen können auch Informationen, die Ihr Browser an unsere Webseite sendet, speichern.</p>
            <p>Folgende Cookies werden von Hotjar verwendet. Da wir uns unter anderem auf die Cookie-Liste aus der Datenschutzerklärung von Hotjar unter <a class="adsimple-311196990" href="https://help.hotjar.com/hc/en-us/articles/115011789248-Hotjar-Cookies" target="_blank" rel="follow noopener">https://www.hotjar.com/legal/policies/cookie-information</a> beziehen, liegt nicht bei jedem Cookie ein exemplarischer Wert vor. Die Liste zeigt Beispiele von verwendeten Hotjar-Cookies und erhebt keinen Anspruch auf Vollständigkeit.</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: ajs_anonymous_id<br />
            <strong class="adsimple-311196990">Wert: </strong>%2258832463-7cee-48ee-b346-a195f18b06c3%22311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird gewöhnlich für Analysezwecke verwendet und hilft beim Zählen von Besuchern unserer Website, indem es verfolgt, ob Sie schon mal auf dieser Seite waren.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: ajs_group_id<br />
            <strong class="adsimple-311196990">Wert: </strong>0<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie sammelt Daten über das User-Verhalten. Diese Daten können dann, basierend auf Gemeinsamkeiten der Websitebesucher, einer bestimmten Besuchergruppe zugeordnet werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: _hjid<br />
            <strong class="adsimple-311196990">Wert: </strong>699ffb1c-4bfb-483f-bde1-22cfa0b59c6c<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Das Cookie wird verwendet, um eine Hotjar-User-ID beizubehalten, die für die Website im Browser eindeutig ist. So kann das Userverhalten bei den nächsten Besuchen derselben User-ID zugeordnet werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjMinimizedPolls<br />
            <strong class="adsimple-311196990">Wert:</strong> 462568311196990-8<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Immer, wenn Sie ein Feedback Poll Widget minimieren, setzt Hotjar dieses Cookie. Das Cookie stellt sicher, dass das Widget auch wirklich minimiert bleibt, wenn Sie auf unseren Seiten surfen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjIncludedInSample<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Session-Cookie wird gesetzt, um Hotjar darüber zu informieren, ob Sie Teil der ausgewählten Personen (Sample) sind, die zum Erzeugen von Trichtern (Funnels) herangezogen werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: _hjClosedSurveyInvites<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird gesetzt, wenn Sie über ein Popup-Fenster eine Einladung zu einer Feedback-Umfrage sehen. Das Cookie wird verwendet, um sicherzustellen, dass diese Einladung für Sie nur einmal erscheint.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjDonePolls<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Sobald Sie eine Feedback- „Fragerunde“ mit dem sogenannten Feedback Poll Widget beenden, wird dieses Cookie in Ihrem Browser gesetzt. Damit verhindert Hotjar, dass Sie in Zukunft wieder dieselben Umfragen erhalten.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjDoneTestersWidgets<strong class="adsimple-311196990">
            <br />
            </strong>
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, sobald Sie Ihre Daten im „Recruit User Tester Widget“ angeben. Mit diesem Widget wollen wir Sie als Tester anheuern. Damit dieses Formular nicht immer wieder erscheint, wird das Cookie verwendet.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjMinimizedTestersWidgets<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Damit der „Recruit User Tester“ auch wirklich auf all unseren Seite minimiert bleibt, sobald Sie Ihn einmal minimiert haben, wird dieses Cookie gesetzt.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _hjShownFeedbackMessage<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird gesetzt, wenn Sie das eingehende Feedback minimiert oder ergänzt haben. Dies geschieht, damit das eingehende Feedback sofort als minimiert geladen wird, wenn Sie zu einer anderen Seite navigieren, auf der es angezeigt werden soll.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Wir haben einen Tracking-Code auf unserer Webseite eingebaut, der an die Hotjar-Server in Irland (EU) übertragen wird. Dieser Tracking-Code kontaktiert die Server von Hotjar und sendet ein Skript an Ihren Computer oder Ihr Endgerät, mit dem Sie auf unsere Seite zugreifen. Das Skript erfasst bestimmte Daten in Bezug auf Ihre Interaktion mit unserer Webseite. Diese Daten werden dann zur Verarbeitung an die Server von Hotjar gesendet. Hotjar hat sich selbst eine 365-Tage-Datenspeicherungsfrist auferlegt. Das heißt alle Daten, die Hotjar gesammelt hat und die älter als ein Jahr sind, werden automatisch wieder gelöscht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Hotjar speichert für die Analyse keine personenbezogenen Daten von Ihnen. Das Unternehmen wirbt sogar mit dem Slogan „We track behavior, not individuals“ (also „Wir tracken Userverhalten, aber keine identifizierbaren, individuellen Daten). Sie haben auch immer die Möglichkeit die Erhebung Ihrer Daten zu unterbinden. Dafür müssen Sie nur auf die „<a class="adsimple-311196990" href="https://www.hotjar.com/legal/compliance/opt-out" target="_blank" rel="noopener">Opt-out-Seite</a>“ gehen und auf „Hotjar deaktivieren“ klicken. Bitte beachten Sie, dass das Löschen von Cookies, die Nutzung des Privatmodus Ihres Browsers oder die Nutzung eines anderen Browsers dazu führt, Daten wieder zu erheben. Weiters können Sie auch in Ihrem Browser den „Do Not Track“-Button aktivieren. Im Browser Chrome beispielsweise müssen Sie dafür rechts oben auf die drei Balken klicken und auf „Einstellungen“ gehen. Dort finden Sie im Abschnitt „Datenschutz“ die Option „Mit Browserzugriffen eine &#8220;Do Not Track&#8221;-Anforderung senden&#8221;. Jetzt aktivieren Sie nur noch diese Schaltfläche und schon werden keinen Daten von Hotjar erhoben.</p>
            <p>Mehr Details zur Datenschutzrichtlinie und welche Daten auf welche Art durch Hotjar erfasst werden finden Sie auf <a class="adsimple-311196990" href="https://www.hotjar.com/legal/policies/privacy?tid=311196990" target="_blank" rel="noopener">https://www.hotjar.com/legal/policies/privacy?tid=311196990</a>.</p>
            <h2 class="adsimple-311196990">wao.io Datenschutzerklärung</h2>
            <p>Um unsere Website auch technisch so gut wie möglich zu optimieren, verwenden wir den Onlinedienst wao.io. des Technologie-Unternehmens Avenga Germany GmbH, Bahnhofsvorplatz 1, 50667 Köln, Deutschland. Der Dienst hilft uns unserer Website vor Cyberangriffen zu schützen, die Ladegeschwindigkeit unserer Website zu erhöhen, und die Leistung unserer Website im allgemeinen zu verbessern.</p>
            <p>Bei wao.io handelt es sich um eine Cloud-Lösung. Das heißt, damit dieser Dienst funktioniert, mussten wir am Code nichts ändern und auch kein Plugin installieren. Dennoch übermitteln wir allerdings Inhalte unserer Website an wao.io. Dabei wird auch Ihre IP-Adresse übermittelt, durch wao.io verarbeitet und für sieben Tagen anonymisiert in sogenannten Logfiles gespeichert. Weiters speichert wao.io ein Cookie in Ihrem Browser auf Ihrem Endgerät (PC, Laptop, Tablet usw.). Dieses Cookie ist ein sogenanntes Session-Cookie und wenn Sie Ihren Browser schließen, wird auch das Cookie wieder gelöscht. Es werden aber zu Analysezwecken auch dauerhafte Cookies gespeichert. Dabei werden Daten über Ihr Userverhalten auf unserer Website ermittelt und gespeichert. Zum Beispiel welche Unterseite Sie ansehen, die Verweildauer auf einer Seite oder welche Buttons Sie anklicken. Anhand der Daten ermöglicht uns wao.io eine pseudonymisierte Analyse des Userverhaltens auf unserer Website. Das hilft uns natürlich, besser auf Ihre Wünsche einzugehen und so unser gesamtes Service zu optimieren. Diese dauerhaften Cookies werden teilweise bereits nach 30 Minuten wieder gelöscht und andere bestehen bis zu einem Jahr.</p>
            <p>Hier sehen Sie eine beispielhafte Liste von Cookies, die von wao.io gesetzt werden können:</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: fdx2v<br />
            <strong class="adsimple-311196990">Wert: </strong>1cf811cb0cdf86c6e32b263c4c17554d<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Das Cookie dient der Identifizierung eines Seitenaufrufs.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: fdx2s<br />
            <strong class="adsimple-311196990">Wert: </strong>d8deeaf0c692d4110da9ecd566eca782311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie dient der Identifizierung einer Sitzung.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 30 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: fdx2u<br />
            <strong class="adsimple-311196990">Wert: </strong>d4546d1f71b6f5f19bf347f644ace784311196990-0<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie dient dazu, Sie wieder zu erkennen, wenn Sie auf unsere Website zurückkehren.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Bitte beachten Sie, dass es sich hierbei lediglich um eine beispielhafte Liste handelt und keinen Anspruch auf Vollständigkeit hat.</p>
            <p>Wenn Sie nicht wollen, dass diese Cookies gesetzt werden und Daten dadurch von Ihnen bzw. Ihrem Userverhalten gespeichert werden, können Sie in Ihrem Browser das Setzen der Cookies auch verhindern. Denn in Ihrem Browser können Sie Cookies verwalten, deaktivieren oder löschen. Abhängig von Ihrem Browser funktioniert das immer etwas unterschiedlich. Hier finden Sie die Anleitungen der gängigsten Browser.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Nähere Informationen über die Datenverarbeitung durch wao.io erhalten Sie in der Datenschutzerklärung von wao.io unter der Internetadresse <a class="adsimple-311196990" href="https://wao.io/de/privacy?tid=311196990" target="_blank" rel="noopener noreferrer">https://wao.io/de/privacy</a>.</p>
            <h2 class="adsimple-311196990">Newsletter Datenschutzerklärung</h2>
            <p>
            <span class="adsimple-311196990" style="font-weight: 400;">Wenn Sie sich für unseren Newsletter eintragen übermitteln Sie die oben genannten persönlichen Daten und geben uns das Recht Sie per E-Mail zu kontaktieren. Die im Rahmen der Anmeldung zum Newsletter gespeicherten Daten nutzen wir ausschließlich für unseren Newsletter und geben diese nicht weiter.</span>
            </p>
            <p>
            <span class="adsimple-311196990" style="font-weight: 400;">Sollten Sie sich vom Newsletter abmelden &#8211; Sie finden den Link dafür in jedem Newsletter ganz unten &#8211; dann löschen wir alle Daten die mit der Anmeldung zum Newsletter gespeichert wurden.</span>
            </p>
            <h2 class="adsimple-311196990">MailChimp Datenschutzerklärung</h2>
            <p>Wie viele andere Webseiten verwenden auch wir auf unsere Website die Dienste des Newsletter-Unternehmens MailChimp. Der Betreiber von MailChimp ist das Unternehmen The Rocket Science Group, LLC, 675 Ponce de Leon Ave NE, Suite 5000, Atlanta, GA 30308 USA. Dank MailChimp können wir Ihnen interessante Neuigkeiten sehr einfach per Newsletter zukommen lassen. Mit MailChimp müssen wir nichts installieren und können trotzdem aus einem Pool an wirklich nützlichen Funktionen schöpfen. Im Folgenden gehen wir näher auf dieses E-Mail-Marketing-Service ein und informieren Sie über die wichtigsten datenschutzrelevanten Aspekte.</p>
            <h3 class="adsimple-311196990">Was ist MailChimp?</h3>
            <p>MailChimp ist ein cloudbasiertes Newsletter-Management-Service. „Cloudbasiert“ heißt, dass wir MailChimp nicht auf unserem eigenen Rechner bzw. Server installieren müssen. Wir nutzen den Dienst stattdessen über eine IT-Infrastruktur &#8211; die über das Internet verfügbar ist – auf einem externen Server. Diese Art eine Software zu nutzen, wird auch SaaS (Software as a Service) genannt.</p>
            <p>Mit MailChimp können wir aus einer breiten Palette an verschiedenen E-Mail-Typen auswählen. Abhängig davon, was wir mit unserem Newsletter erreichen wollen, können wir Einzel-Kampagnen, regelmäßige Kampagnen, Autoresponder (automatische E-Mail), A/B Tests, RSS-Kampagnen (Aussendung in vordefinierter Zeit und Häufigkeit) und Follow-Up Kampagnen durchführen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir MailChimp auf unserer Webseite?</h3>
            <p>Grundsätzlich nutzen wir einen Newsletter-Dienst, damit wir mit Ihnen in Kontakt bleiben. Wir wollen Ihnen erzählen was es bei uns Neues gibt oder welche attraktiven Angebote wir gerade in unserem Programm haben. Für unsere Marketing-Maßnahmen suchen wir immer die einfachsten und besten Lösungen. Und aus diesem Grund haben wir uns auch für das Newsletter-Management-Service von Mailchimp entschieden. Obwohl die Software sehr einfach zu bedienen ist, bietet sie eine große Anzahl an hilfreichen Features. So können wir in nur kurzer Zeit interessante und schöne Newsletter gestalten. Durch die angebotenen Designvorlagen gestalten wir jeden Newsletter ganz individuell und dank des „Responsive Design“ werden unsere Inhalte auch auf Ihrem Smartphone (oder einem anderen mobilen Endgeräten) leserlich und schön angezeigt.</p>
            <p>Durch Tools wie beispielsweise den A/B-Test oder den umfangreichen Analysemöglichkeiten, sehen wir sehr schnell, wie unsere Newsletter bei Ihnen ankommen. So können wir gegebenenfalls reagieren und unser Angebot oder unsere Dienstleistungen verbessern.</p>
            <p>Ein weiterer Vorteil ist das „Cloudsystem“ von Mailchimp. Die Daten werden nicht direkt auf unserem Server abgelegt und verarbeitet. Wir können die Daten von externen Servern abrufen und schonen auf diese Weise unseren Speicherplatz. Zudem wird der Pflegeaufwand deutlich geringer.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von MailChimp gespeichert?</h3>
            <p>Die Rocket Science Group LLC (MailChimp) unterhält Online-Plattformen, die es uns ermöglichen, mit Ihnen (sofern Sie unseren Newsletter abonniert haben) in Kontakt zu treten. Wenn Sie über unsere Website Abonnent unseres Newsletters werden, bestätigen Sie per E-Mail die Mitgliedschaft in einer E-Mail-Liste von MailChimp. Damit MailChimp auch nachweisen kann, dass Sie sich in den „Listenprovider“ eingetragen haben, wird das Datum der Eintragung und Ihre IP-Adresse gespeichert. Weiters speichert MailChimp Ihre E-Mail-Adresse, Ihren Namen, die physische Adresse und demografische Informationen, wie Sprache oder Standort.</p>
            <p>Diese Informationen werden verwendet, um Ihnen E-Mails zu senden und bestimmte anderer MailChimp-Funktionen (wie z.B. Auswertung der Newsletter) zu ermöglichen.</p>
            <p>MailChimp teilt Informationen auch mit Drittanbieter, um bessere Dienste bereitzustellen. Einige Daten teilt MailChimp auch mit Werbepartnern von Drittanbietern, um die Interessen und Anliegen seiner Kunden besser zu verstehen, damit relevantere Inhalte und zielgerichtete Werbung bereitgestellt werden kann.</p>
            <p>Durch sogenannte „Web Beacons“ (das sind kleine Grafiken in HTML-E-Mails) kann MailChimp feststellen, ob die E-Mail angekommen ist, ob sie geöffnet wurde und ob Links angeklickt wurden. All diese Informationen werden auf den MailChimp-Servern gespeichert. Dadurch erhalten wir statistische Auswertungen und sehen genau, wie gut unser Newsletter bei Ihnen ankam. Auf diese Weise können wir unser Angebot viel besser an Ihre Wünsche anpassen und unser Service verbessern.</p>
            <p>MailChimp darf zudem diese Daten auch zur Verbesserung des eigenen Service-Dienstes verwenden. Dadurch kann beispielsweise der Versand technisch optimiert werden oder der Standort (das Land) der Empfänger bestimmt werden.</p>
            <p>Die folgenden Cookies können von Mailchimp gesetzt werden. Dabei handelt es sich nicht um eine vollständige Cookie-Liste, sondern ist vielmehr eine exemplarische Auswahl:</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: AVESTA_ENVIRONMENT<br />
            <strong class="adsimple-311196990">Wert: </strong>Prod<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie ist notwendig, um die Mailchimp-Dienste zur Verfügung zu stellen. Es wird immer gesetzt, wenn ein User sich für eine Newsletter-Mailing-Liste registriert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: ak_bmsc<br />
            <strong class="adsimple-311196990">Wert: </strong>F1766FA98C9BB9DE4A39F70A9E5EEAB55F6517348A7000001311196990-3<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird verwendet, um einen Menschen von einem Bot unterscheiden zu können. So können sichere Berichte über die Nutzung einer Website erstellt werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: bm_sv<br />
            <strong class="adsimple-311196990">Wert: </strong>A5A322305B4401C2451FC22FFF547486~FEsKGvX8eovCwTeFTzb8//I3ak2Au&#8230;<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie ist von MasterPass Digital Wallet (ein MasterCard-Dienst) und wird verwendet, um einem Besucher einen virtuellen Zahlungsvorgang sicher und einfach anbieten zu können. Dafür wird der User auf der Website anonym identifiziert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: _abck<br />
            <strong class="adsimple-311196990">Wert: </strong>8D545C8CCA4C3A50579014C449B045311196990-9<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Wir konnten über den Zweck dieses Cookies keine näheren Informationen in Erfahrung bringen<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>Manchmal kann es vorkommen, dass Sie unseren Newsletter zur besseren Darstellung über einen angegebenen Link öffnen. Das ist zum Beispiel der Fall, wenn Ihr E-Mail-Programm nicht funktioniert oder der Newsletter nicht ordnungsgemäß anzeigt wird. Der Newsletter wir dann über eine Website von MailChimp angezeigt. MailChimp verwendet auf seinen eigenen Webseiten auch Cookies (kleine Text-Dateien, die Daten auf Ihrem Browser speichern). Dabei können personenbezogenen Daten durch MailChimp und dessen Partner (z.B. Google Analytics) verarbeitet werden. Diese Datenerhebung liegt in der Verantwortung von MailChimp und wir haben darauf keinen Einfluss. Im „Cookie Statement“ von MailChimp (unter: <a class="adsimple-311196990" href="https://mailchimp.com/legal/cookies/" target="_blank" rel="noopener noreferrer">https://mailchimp.com/legal/cookies/</a>) erfahren Sie genau, wie und warum das Unternehmen Cookies verwendet.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Da MailChimp ein amerikanisches Unternehmen ist, werden alle gesammelten Daten auch auf amerikanischen Servern gespeichert.</p>
            <p>Grundsätzlich bleiben die Daten auf den Servern von Mailchimp dauerhaft gespeichert und werden erst gelöscht, wenn eine Aufforderung von Ihnen erfolgt. Sie können Ihren Kontakt bei uns löschen lassen. Das entfernt für uns dauerhaft all Ihre persönlichen Daten und anonymisiert Sie in den Mailchimp-Berichten. Sie können allerdings auch direkt bei MailChimp die Löschung Ihrer Daten anfordern. Dann werden dort all Ihre Daten entfernt und wir bekommen eine Benachrichtigung von MailChimp. Nachdem wir die E-Mail erhalten haben, haben wir 30 Tage Zeit, um Ihren Kontakt von allen verbundenen Integrationen zu löschen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie können Ihre Zustimmung für den Erhalt unseres Newsletters jederzeit innerhalb der empfangenen E-Mail per Klick auf den Link im unteren Bereich entziehen. Wenn Sie sich mit einem Klick auf den Abmeldelink abgemeldet haben, werden Ihre Daten bei MailChimp gelöscht.</p>
            <p>Falls Sie über einen Link in unserem Newsletter auf eine Website von MailChimp gelangen und Cookies in Ihrem Browser gesetzt werden, können Sie diese Cookies jederzeit löschen oder deaktivieren.</p>
            <p>Je nach Browser funktioniert das Deaktivieren bzw. Löschen etwas anders. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie es erlauben oder nicht.</p>
            <p>MailChimp ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000TO6hAAG" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000TO6hAAG&amp;tid=311196990</a>. Mehr über den Einsatz von Cookies bei MailChimp erfahren Sie auf <a class="adsimple-311196990" href="https://mailchimp.com/legal/cookies/" target="_blank" rel="noopener noreferrer">https://mailchimp.com/legal/cookies/</a>, Informationen zum Datenschutz bei MailChimp (Privacy) können Sie auf <a class="adsimple-311196990" href="https://mailchimp.com/legal/privacy/" target="_blank" rel="noopener noreferrer">https://mailchimp.com/legal/privacy/</a> nachlesen.</p>
            <h2 class="adsimple-311196990">MailChimp Auftragsdatenverarbeitung Vertrag</h2>
            <p>Wir haben mit MailChimp einen Vertrag über die Auftragsdatenverarbeitung (Data Processing Addendum) abgeschlossen. Dieser Vertrag dient zur Absicherung Ihrer persönlichen Daten und stellt sicher, dass sich MailChimp an die geltenden Datenschutzbestimmungen hält und Ihre persönlichen Daten nicht an Dritte weitergibt.</p>
            <p>Mehr Informationen zu diesem Vertrag finden Sie auf <a class="adsimple-311196990" href="https://mailchimp.com/legal/data-processing-addendum/">https://mailchimp.com/legal/data-processing-addendum/</a>.</p>
            <h2 class="adsimple-311196990">Sendinblue Datenschutzerklärung</h2>
            <p>Sie können sich auf unserer Website kostenlos für unseren Newsletter anmelden. Damit das auch funktioniert, verwenden wir für unseren Newsletter den E-Mail-Versanddienst Sendinblue. Das ist ein Service des deutschen Unternehmens Sendinblue GmbH, Köpenicker Str. 126, 10179 Berlin.</p>
            <p>Uns freut es natürlich sehr, wenn Sie sich für unseren Newsletter anmelden. So können wir Ihnen immer aktuell und aus erster Hand mitteilen, was sich in unserem Unternehmen gerade so abspielt. Sie sollten aber wissen, dass beim Anmeldevorgang zum Newsletter alle Daten, die Sie eingeben (wie zum Beispiel Ihre E-Mailadresse oder Ihr Vor- und Nachname) auf unserem Server und bei Sendinblue gespeichert und verwaltet werden. Dabei handelt es sich auch um personenbezogene Daten. So wird beispielsweise neben der Uhrzeit und dem Datum der Anmeldung auch Ihre IP-Adresse gespeichert. Im Verlauf der Anmeldung willigen Sie auch ein, dass wir Ihnen den Newsletter senden können und es wird weiters auf diese Datenschutzerklärung hingewiesen.<br />
            Der Newsletter-Dienst bietet uns auch hilfreiche Analysemöglichkeiten. Das heißt, wenn wir einen Newsletter verschicken, erfahren wir beispielsweise ob und wann der Newsletter von Ihnen geöffnet wurde. Auch ob und auf welchen Link Sie im Newsletter klicken, wird von der Software erkannt und aufgezeichnet. Diese Informationen helfen enorm, unser Service an Ihre Wünsche und Anliegen anzupassen und zu optimieren. Schließlich wollen wir natürlich Ihnen die bestmögliche Dienstleistung bieten. Neben den oben bereits erwähnten Daten werden also auch solche Daten über Ihre Userverhalten gespeichert.</p>
            <p>Die von Ihnen durchgeführte Einwilligung dieser Datenverarbeitung können Sie jederzeit widerrufen. Zum Beispiel, wenn Sie direkt im Newsletter auf den Abmeldelink klicken. Nach der Abmeldung werden die personenbezogenen Daten von unserem Server und von den Sendinblue-Servern, die in Deutschland angesiedelt sind, gelöscht. Sie haben ein Recht auf unentgeltliche Auskunft über Ihre gespeicherten Daten und gegebenenfalls auch ein Recht auf Löschung, Sperrung oder Berichtigung.</p>
            <p>Wenn sie nähere Informationen über die Datenverarbeitung einholen wollen, empfehlen wir Ihnen die Datenschutzrichtlinie des Unternehmens unter <a class="adsimple-311196990" href="https://de.sendinblue.com/legal/privacypolicy/?tid=311196990" target="_blank" rel="follow noopener noreferrer">https://de.sendinblue.com/legal/privacypolicy/</a> und zudem auch noch folgende Informationsseite unter <a class="adsimple-311196990" href="https://de.sendinblue.com/informationen-newsletter-empfaenger/?tid=311196990" target="_blank" rel="follow noopener noreferrer">https://de.sendinblue.com/informationen-newsletter-empfaenger/</a>
            </p>
            <h2 class="adsimple-311196990">Google AdSense Datenschutzerklärung</h2>
            <p>Wir verwenden auf dieser Website Google AdSense. Das ist ein Anzeigenprogramm der Firma Google Inc. In Europa ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Mit Google AdSense können wir auf dieser Webseite Werbeanzeigen einblenden, die zu unserem Thema passen. So bieten wir Ihnen Anzeigen, die im Idealfall einen richtigen Mehrwert für Sie darstellen. Im Zuge dieser Datenschutzerklärung über Google AdSense erklären wir Ihnen, warum wir Google AdSense auf unserer Webseite verwenden, welche Daten von Ihnen verarbeitet und gespeichert werden und wie Sie diese Datenspeicherung unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist Google AdSense?</h3>
            <p>Das Werbeprogramm Google AdSense gibt es mittlerweile seit 2003. Im Gegensatz zu Google Ads (früher: Google AdWords) kann man hier nicht selbst Werbung schalten. Über Google AdSense werden Werbeanzeigen auf Webseiten, wie zum Beispiel auf unserer, ausgespielt. Der größte Vorteil dieses Werbedienstes im Vergleich zu manch anderen ist, dass Ihnen Google AdSense nur Anzeigen zeigt, die zu unseren Inhalten passen. Google hat einen eigenen Algorithmus, der berechnet, welche Werbeanzeigen Sie zu Gesicht bekommen. Natürlich wollen wir Ihnen nur Werbung bieten, die Sie auch interessiert und Ihnen einen Mehrwert bietet. Google überprüft anhand Ihrer Interessen bzw. Ihres Userverhaltens und anhand unseres Angebots, welche Werbeanzeigen für unsere Webseite und für unserer User geeignet sind. An dieser Stelle wollen wir auch gleich erwähnen, dass wir für die Auswahl der Werbeanzeigen nicht verantwortlich sind. Wir bieten mit unserer Webseite lediglich die Werbefläche an. Die Auswahl der angezeigten Werbung trifft Google. Seit August 2013 werden die Anzeigen auch an die jeweilige Benutzeroberfläche angepasst. Das heißt, egal ob Sie von Ihrem Smartphone, Ihrem PC oder Laptop unsere Webseite besuchen, die Anzeigen passen sich an Ihr Endgerät an.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Google AdSense auf unserer Webseite?</h3>
            <p>Das Betreiben einer hochwertigen Webseite erfordert viel Hingabe und großen Einsatz. Im Grunde sind wir mit der Arbeit an unserer Webseite nie fertig. Wir versuchen stets unsere Seite zu pflegen und so aktuell wie möglich zu halten. Natürlich wollen wir mit dieser Arbeit auch einen wirtschaftlichen Erfolg erzielen. Darum haben wir uns für Werbeanzeigen als Einnahmequelle entschieden. Das Wichtigste für uns ist allerdings, Ihren Besuch auf unserer Webseite durch diese Anzeigen nicht zu stören. Mithilfe von Google AdSense wird Ihnen nur Werbung angeboten, die zu unseren Themen und Ihren Interessen passt.</p>
            <p>Ähnlich wie bei der Google-Indexierung für eine Webseite, untersucht ein Bot den entsprechenden Content und die entsprechenden Angebote unserer Webseite. Dann werden die Werbeanzeigen inhaltlich angepasst und auf der Webseite präsentiert. Neben den inhaltlichen Überschneidungen zwischen Anzeige und Webseiten-Angebot unterstützt AdSense auch interessensbezogenes Targeting. Das bedeutet, dass Google auch Ihre Daten dazu verwendet, um auf Sie zugeschnittene Werbung anzubieten. So erhalten Sie Werbung, die Ihnen im Idealfall einen echten Mehrwert bietet und wir haben eine höhere Chance ein bisschen etwas zu verdienen.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Google AdSense gespeichert?</h3>
            <p>Damit Google AdSense eine maßgeschneiderte, auf Sie angepasste Werbung anzeigen kann, werden unter anderem Cookies verwendet. Cookies sind kleine Textdateien, die bestimmte Informationen auf Ihrem Computer speichern.</p>
            <p>In AdSense sollen Cookies bessere Werbung ermöglichen. Die Cookies enthalten keine personenidentifizierbaren Daten. Hierbei ist allerdings zu beachten, dass Google Daten wie zum Beispiel &#8220;Pseudonyme Cookie-IDs&#8221; (Name oder anderes Identifikationsmerkmal wird durch ein Pseudonym ersetzt) oder IP-Adressen als nicht personenidentifizierbare Informationen ansieht. Im Rahmen der DSGVO können diese Daten allerdings als personenbezogene Daten gelten. Google AdSense sendet nach jeder Impression (das ist immer dann der Fall, wenn Sie eine Anzeige sehen), jedem Klick und jeder anderen Aktivität, die zu einem Aufruf der Google AdSense-Server führt, ein Cookie an den Browser. Sofern der Browser das Cookie akzeptiert, wird es dort gespeichert.</p>
            <p>Drittanbieter können im Rahmen von AdSense unter Umständen Cookies in Ihrem Browser platzieren und auslesen bzw. Web-Beacons verwenden, um Daten zu speichern, die sie durch die Anzeigenbereitstellung auf der Webseite erhalten. Als Web-Beacons bezeichnet man kleine Grafiken, die eine Logdatei-Analyse und eine Aufzeichnung der Logdatei machen. Diese Analyse ermöglicht eine statistische Auswertung für das Online-Marketing.</p>
            <p>Google kann über diese Cookies bestimmte Informationen über Ihr Userverhalten auf unserer Webseite sammeln. Dazu zählen:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Informationen wie Sie mit einer Anzeige umgehen (Klicks, Impression, Mausbewegungen)</li>
            <li class="adsimple-311196990">Informationen, ob in Ihrem Browser schon eine Anzeige zu einem früheren Zeitpunkt erschienen ist. Diese Daten helfen dabei, Ihnen eine Anzeige nicht öfter anzuzeigen.</li>
            </ul>
            <p>Dabei analysiert Google die Daten zu den angezeigten Werbemitteln und Ihre IP-Adresse und wertet diese aus. Google verwendet die Daten in erster Linie, um die Effektivität einer Anzeige zu messen und das Werbeangebot zu verbessern. Diese Daten werden nicht mit personenbezogenen Daten, die Google möglicherweise über andere Google-Dienste von Ihnen hat, verknüpft.</p>
            <p>Im Folgenden stellen wir Ihnen Cookies vor, die Google AdSense für Trackingzwecke verwendet. Hierbei beziehen wir uns auf eine Test-Webseite, die ausschließlich Google AdSense installiert hat:<strong class="adsimple-311196990"> </strong>
            </p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> uid<br />
            <strong class="adsimple-311196990">Wert:</strong> 891269189311196990-8<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird unter der Domain adform.net gespeichert. Es stellt eine eindeutig zugewiesene, maschinell generierte User-ID bereit und sammelt Daten über die Aktivität auf unserer Webseite.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> C<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie identifiziert, ob Ihrer Browser Cookies akzeptiert. Das Cookie wird unter der Domain track.adform.net gespeichert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 1 Monat</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> cid<br />
            <strong class="adsimple-311196990">Wert:</strong> 8912691894970695056,0,0,0,0<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie wird unter der Domain track.adform.net gespeichert, steht für Client-ID und wird verwendet, um die Werbung für Sie zu verbessern. Es kann relevantere Werbung an den Besucher weiterleiten und hilft, die Berichte über die Kampagnenleistung zu verbessern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> IDE<br />
            <strong class="adsimple-311196990">Wert:</strong> zOtj4TWxwbFDjaATZ2TzNaQmxrU311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie wird unter der Domain doubleclick.net gespeichert. Es dient dazu, Ihre Aktionen nach der Anzeige bzw. nach dem Klicken der Anzeige zu registrieren. Dadurch kann man messen, wie gut eine Anzeige bei unseren Besuchern ankommt.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 1 Monat</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> test_cookie<br />
            <strong class="adsimple-311196990">Wert:</strong> keine Angabe<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Mithilfe des „test_cookies“ kann man überprüfen, ob Ihr Browser überhaupt Cookies unterstützt. Das Cookie wird unter der Domain doubleclick.net gespeichert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 1 Monat</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CT592996<br />
            <strong class="adsimple-311196990">Wert:</strong>733366<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Wird unter der Domain adform.net gespeichert. Das Cookie wird gesetzt sobald Sie auf eine Werbeanzeige klicken. Genauere Informationen über die Verwendung dieses Cookies konnten wir nicht in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einer Stunde</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese Aufzählung kann keinen Anspruch auf Vollständigkeit erheben, da Google erfahrungsgemäß die Wahl ihrer Cookies immer wieder auch verändert.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Google erfasst Ihre IP-Adresse und verschiedene Aktivitäten, die Sie auf der Webseite ausführen. Cookies speichern diese Informationen zu den Interaktionen auf unserer Webseite. Laut Google sammelt und speichert das Unternehmen die angegebenen Informationen auf sichere Weise auf den hauseigenen Google-Servern in den USA.</p>
            <p>Wenn Sie kein Google-Konto haben bzw. nicht angemeldet sind, speichert Google die erhobenen Daten mit einer eindeutigen Kennung (ID) meist auf Ihrem Browser. Die in Cookies gespeicherten eindeutigen IDs dienen beispielsweise dazu, personalisierte Werbung zu gewährleisten. Wenn Sie in einem Google-Konto angemeldet sind, kann Google auch personenbezogene Daten erheben.</p>
            <p>Einige der Daten, die Google speichert, können Sie jederzeit wieder löschen (siehe nächsten Abschnitt). Viele Informationen, die in Cookies gespeichert sind, werden automatisch nach einer bestimmten Zeit wieder gelöscht. Es gibt allerdings auch Daten, die von Google über einen längeren Zeitraum gespeichert werden. Dies ist dann der Fall, wenn Google aus wirtschaftlichen oder rechtlichen Notwendigkeiten, gewisse Daten über einen unbestimmten, längeren Zeitraum speichern muss.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben immer die Möglichkeit Cookies, die sich auf Ihrem Computer befinden, zu löschen oder zu deaktivieren. Wie genau das funktioniert hängt von Ihrem Browser ab.</p>
            <p>Hier finden Sie die Anleitung, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie das Cookie erlauben oder nicht. Durch das Herunterladen und Installieren dieses Browser-Plug-ins auf <a class="adsimple-311196990" href="https://support.google.com/ads/answer/7395996" target="_blank" rel="noopener noreferrer">https://support.google.com/ads/answer/7395996</a> werden ebenfalls alle „Werbecookies“ deaktiviert. Bedenken Sie, dass Sie durch das Deaktivieren dieser Cookies nicht die Werbeanzeigen verhindern, sondern nur die personalisierte Werbung.</p>
            <p>Wenn Sie ein Google Konto besitzen, können Sie auf der Webseite <a class="adsimple-311196990" href="https://adssettings.google.com/authenticated" target="_blank" rel="noopener noreferrer">https://adssettings.google.com/authenticated</a> personalisierte Werbung deaktivieren. Auch hier sehen Sie dann weiter Anzeigen, allerdings sind diese nicht mehr an Ihre Interessen angepasst. Dennoch werden die Anzeigen auf der Grundlage von ein paar Faktoren, wie Ihrem Standort, dem Browsertyp und der verwendeten Suchbegriffe, angezeigt.</p>
            <p>Welche Daten Google grundsätzlich erfasst und wofür sie diese Daten verwenden, können Sie auf <a class="adsimple-311196990" href="https://www.google.com/intl/de/policies/privacy/" target="_blank" rel="noopener noreferrer">https://www.google.com/intl/de/policies/privacy/</a> nachlesen.</p>
            <h2 class="adsimple-311196990">Amazon-Partnerprogramm Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website das Amazon-Partnerprogramm des Unternehmens Amazon.com, Inc. Die verantwortlichen Stellen im Sinne der Datenschutzerklärung sind die Amazon Europe Core S.à.r.l., die Amazon EU S.à.r.l, die Amazon Services Europe S.à.r.l. und die Amazon Media EU S.à.r.l., alle vier ansässig 5, Rue Plaetis, L-2338 Luxemburg sowie Amazon Instant Video Germany GmbH, Domagkstr. 28, 80807 München. Als Datenverarbeiter wird die Amazon Deutschland Services GmbH, Marcel-Breuer-Str. 12, 80807 München, tätig. Durch die Verwendung dieses Amazon-Partnerprogramms können Daten von Ihnen an Amazon übertragen, gespeichert und verarbeitet werden.</p>
            <p>In dieser Datenschutzerklärung informieren wir Sie um welche Daten es sich handelt, warum wir das Programm verwenden und wie Sie die Datenübertragung verwalten bzw. unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist das Amazon-Partnerprogramm?</h3>
            <p>Das Amazon-Partnerprogramm ist ein Affiliate-Marketing-Programm des Online-Versandunternehmens <a class="adsimple-311196990" href="https://www.amazon.de/ref=as_li_ss_tl?site-redirect=at&amp;linkCode=ll2&amp;tag=thetraffic-21&amp;linkId=16a65fb03b8cb39206283c5345d87944&amp;language=de_DE&amp;tid=311196990" target="_blank" rel="follow noopener noreferrer">Amazon.de</a>. Wie jedes Affiliate-Programm basiert auch das Amazon-Partnerprogramm auf dem Prinzip der Vermittlungsprovision. Amazon bzw. wir platzieren auf unserer Website Werbung oder Partnerlinks und wenn Sie darauf klicken und ein Produkt über Amazon kaufen, erhalten wir eine Werbekostenerstattung (Provision).</p>
            <h3 class="adsimple-311196990">Warum verwenden wir das Amazon-Partnerprogramm auf unserer Webseite?</h3>
            <p>Unser Ziel ist es Ihnen eine angenehme Zeit mit vielen hilfreichen Inhalten zu liefern. Dafür stecken wir sehr viel Arbeit und Energie in die Entwicklung unserer Website. Mit Hilfe des Amazon-Partnerprogramms haben wir die Möglichkeit, für unsere Arbeit auch ein bisschen entlohnt zu werden. Jeder Partnerlink zu Amazon hat selbstverständlich immer mit unserem Thema zu tun und zeigt Angebote, die Sie interessieren könnten.</p>
            <h3 class="adsimple-311196990">Welche Daten werden durch das Amazon-Partnerprogramm gespeichert?</h3>
            <p>Sobald Sie mit den Produkten und Dienstleistungen von Amazon interagieren, erhebt Amazon Daten von Ihnen. Amazon unterscheidet zwischen Informationen, die Sie aktiv dem Unternehmen geben und Informationen, die automatisch gesammelt und gespeichert werden. Zu den &#8220;aktiven Informationen&#8221; zählen zum Beispiel Name, E-Mail-Adresse, Telefonnummer, Alter, Zahlungsinformationen oder Standortinformationen. Sogenannte „automatische Informationen“ werden in erster Linie über Cookies gespeichert. Dazu zählen Informationen zum Userverhalten, IP-Adresse, Gerätinformationen (Browsertyp, Standort, Betriebssysteme) oder die URL. Amazon speichert weiters auch den Clickstream. Damit ist der Weg (Reihenfolge der Seiten) gemeint, den Sie als User zurücklegen, um zu einem Produkt zu kommen. Auch um die Herkunft einer Bestellung nachvollziehen zu können, speichert Amazon Cookies in Ihrem Browser. So erkennt das Unternehmen, dass Sie über unsere Website eine Amazon-Werbeanzeige oder einen Partnerlink angeklickt haben.</p>
            <p>Wenn Sie ein Amazon-Konto haben und angemeldet sind, während Sie auf unserer Webseite surfen, können die erhobenen Daten Ihrem Account zugewiesen werden. Das verhindern Sie, indem Sie sich bei Amazon abmelden, bevor Sie auf unserer Website surfen.</p>
            <p>Hier zeigen wir Ihnen beispielhafte Cookies, die in Ihrem Browser gesetzt werden, wenn Sie auf unserer Website auf einen Amazon-Link kicken.</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: uid<br />
            <strong class="adsimple-311196990">Wert: </strong>3230928052675285215311196990-9<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert eine eindeutige User-ID und sammelt Informationen über Ihre Websiteaktivität.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: ad-id<br />
            <strong class="adsimple-311196990">Wert: </strong>AyDaInRV1k-Lk59xSnp7h5o<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie wird von amazon-adsystem.com zur Verfügung gestellt und dient dem Unternehmen für verschiedene Werbezwecke.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 8 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: uuid2<br />
            <strong class="adsimple-311196990">Wert: </strong>8965834524520213028311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie ermöglicht gezielte und interessensbezogene Werbung über die AppNexus-Plattform. Das Cookie sammelt und speichert über die IP-Adresse beispielsweise anonyme Daten darüber, welche Werbung Sie angeklickt haben und welche Seiten Sie aufgerufen haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: session-id<br />
            <strong class="adsimple-311196990">Wert: </strong>262-0272718-2582202311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert eine eindeutige User-ID, die der Server Ihnen für die Dauer eines Websitebesuchs (Session) zuweist. Besuchen Sie dieselbe Seite wieder, werden die darin gespeichert Information wieder abgerufen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 15 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: APID<br />
            <strong class="adsimple-311196990">Wert: </strong>UP9801199c-4bee-11ea-931d-02e8e13f0574<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Informationen darüber, wie Sie eine Website nutzen und welche Werbung Sie vor dem Websitebesuch angesehen haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: session-id-time<br />
            <strong class="adsimple-311196990">Wert: </strong>tb:s-STNY7ZS65H5335FZEVPE|1581329862486&amp;t:1581329864300&amp;adb:adblk_no<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie erfasst die Zeit, die Sie mit einer eindeutigen Cookie-ID auf einer Webseite verbringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: csm-hit<br />
            <strong class="adsimple-311196990">Wert: </strong>2082754801l<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Wir könnten über dieses Cookie keine genauen Informationen in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 15 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung: </strong>Bitte beachten Sie, dass diese Liste lediglich Cookie-Beispiele zeigt und keinen Anspruch auf Vollständigkeit erheben kann.</p>
            <p>Amazon nutzt diese erhaltenen Informationen, um Werbeanzeigen genauer an die Interessen der User abzustimmen.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Persönliche Daten werden von Amazon so lange gespeichert, wie es für die geschäftlichen Dienste von Amazon erforderlich ist oder aus rechtlichen Gründen notwendig ist. Da das Unternehmen Amazon seinen Hauptsitz in den USA hat, werden die gesammelten Daten auch auf amerikanischen Servern gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Wenn Sie einen Amazon-Account besitzen, können Sie in Ihrem Account viele der erhobenen Daten verwalten oder löschen.</p>
            <p>Eine weitere Option, die Datenverarbeitung und -speicherung durch Amazon nach Ihren Vorlieben zu verwalten, bietet Ihr Browser. Dort können Sie Cookies verwalten, deaktivieren oder löschen. Dies funktioniert bei jedem Browser ein bisschen anders. Hier finden Sie die Anleitungen zu den gängigsten Browsern:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Amazon ist aktiver Teilnehmer des EU-U.S. Privacy Shield Frameworks, wodurch der korrekte Datentransfer persönlicher Daten zwischen den USA und der EU geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000TOWQAA4&amp;tid=311196990" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000TOWQAA4</a>. Wir hoffen wir haben Ihnen die wichtigsten Informationen über die Datenübertragung durch die Verwendung von dem Amazon-Partnerprogramm nähergebracht. Mehr Informationen finden Sie unter <a class="adsimple-311196990" href="https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010" target="_blank" rel="noopener noreferrer">https://www.amazon.de/gp/help/customer/display.html?nodeId=201909010</a>.</p>
            <h2 class="adsimple-311196990">Google Ads (Google AdWords) Conversion-Tracking Datenschutzerklärung</h2>
            <p>Wir verwenden als Online-Marketing-Maßnahme Google Ads (früher Google AdWords), um unsere Produkte und Dienstleistungen zu bewerben. So wollen wir im Internet mehr Menschen auf die hohe Qualität unserer Angebote aufmerksam machen. Im Rahmen unserer Werbe-Maßnahmen durch Google Ads verwenden wir auf unserer Website das Conversion-Tracking der Firma Google Inc. In Europa ist allerdings für alle Google-Dienste das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) verantwortlich. Mithilfe dieses kostenlosen Tracking-Tools können wir unser Werbeangebot an Ihre Interessen und Bedürfnisse besser anpassen. Im Folgenden Artikel wollen wir genauer darauf eingehen, warum wir Conversion-Tracking benutzen, welche Daten dabei gespeichert werden und wie Sie diese Datenspeicherung verhindern.</p>
            <h3 class="adsimple-311196990">Was ist Google Ads Conversion-Tracking?</h3>
            <p>Google Ads (früher Google AdWords) ist das hauseigene Online-Werbesystem der Firma Google Inc. Wir sind von der Qualität unseres Angebots überzeugt und wollen, dass so viele Menschen wie möglich unsere Webseite kennenlernen. Im Onlinebereich bietet Google Ads dafür die beste Plattform. Natürlich wollen wir auch einen genauen Überblick über den Kosten-Nutzen-Faktor unsere Werbeaktionen gewinnen. Darum verwenden wir das Conversion-Tracking-Tool von Google Ads.</p>
            <p>Doch was ist eine Conversion eigentlich? Eine Conversion entsteht, wenn Sie von einem rein interessierten Webseitenbesucher zu einem handelnden Besucher werden. Dies passiert immer dann, wenn Sie auf unsere Anzeige klicken und im Anschluss eine andere Aktion ausführen, wie zum Beispiel unsere Webseite besuchen. Mit dem Conversion-Tracking-Tool von Google erfassen wir, was nach einem Klick eines Users auf unsere Google Ads-Anzeige geschieht. Zum Beispiel können wir so sehen, ob Produkte gekauft werden, Dienstleistungen in Anspruch genommen werden oder ob sich User für unseren Newsletter angemeldet haben.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Google Ads Conversion-Tracking auf unserer Webseite?</h3>
            <p>Wir setzen Google Ads ein, um auch auf anderen Webseiten auf unser Angebot aufmerksam zu machen. Ziel ist es, dass unsere Werbekampagnen wirklich auch nur jene Menschen erreichen, die sich für unsere Angebote interessieren. Mit dem Conversion-Tracking Tool sehen wir welche Keywords, Anzeigen, Anzeigengruppen und Kampagnen zu den gewünschten Kundenaktionen führen. Wir sehen wie viele Kunden mit unseren Anzeigen auf einem Gerät interagieren und dann eine Conversion durchführen. Durch diese Daten können wir unseren Kosten-Nutzen-Faktor berechnen, den Erfolg einzelner Werbemaßnahmen messen und folglich unsere Online-Marketing-Maßnahmen optimieren. Wir können weiters mithilfe der gewonnenen Daten unsere Webseite für Sie interessanter gestalten und unser Werbeangebot noch individueller an Ihre Bedürfnisse anpassen.</p>
            <h3 class="adsimple-311196990">Welche Daten werden bei Google Ads Conversion-Tracking gespeichert?</h3>
            <p>Wir haben ein Conversion-Tracking-Tag oder Code-Snippet auf unserer Webseite eingebunden, um gewisse User-Aktionen besser analysieren zu können. Wenn Sie nun eine unserer Google Ads-Anzeigen anklicken, wird auf Ihrem Computer (meist im Browser) oder Mobilgerät das Cookie „Conversion“ von einer Google-Domain gespeichert. Cookies sind kleine Textdateien, die Informationen auf Ihrem Computer speichern.</p>
            <p>Hier die Daten der wichtigsten Cookies für das Conversion-Tracking von Google:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> Conversion<br />
            <strong class="adsimple-311196990">Wert:</strong> EhMI_aySuoyv4gIVled3Ch0llweVGAEgt-mr6aXd7dYlSAGQ311196990-3<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert jede Conversion, die Sie auf unserer Seite machen, nachdem Sie über eine Google Ad zu uns gekommen sind.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gac<br />
            <strong class="adsimple-311196990">Wert:</strong> 1.1558695989.EAIaIQobChMIiOmEgYO04gIVj5AYCh2CBAPrEAAYASAAEgIYQfD_BwE<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dies ist ein klassisches Google Analytics-Cookie und dient dem Erfassen verschiedener Handlungen auf unserer Webseite.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Das Cookie _gac scheint nur in Verbindung mit Google Analytics auf. Die oben angeführte Aufzählung hat keinen Anspruch auf Vollständigkeit, da Google für analytische Auswertung immer wieder auch andere Cookies verwendet.</p>
            <p>Sobald Sie eine Aktion auf unserer Webseite abschließen, erkennt Google das Cookie und speichert Ihre Handlung als sogenannte Conversion. Solange Sie auf unserer Webseite surfen und das Cookie noch nicht abgelaufen ist, erkennen wir und Google, dass Sie über unsere Google-Ads-Anzeige zu uns gefunden haben. Das Cookie wird ausgelesen und mit den Conversion-Daten zurück an Google Ads gesendet. Es ist auch möglich, dass noch andere Cookies zur Messung von Conversions verwendet werden. Das Conversion-Tracking von Google Ads kann mithilfe von Google Analytics noch verfeinert und verbessert werden. Bei Anzeigen, die Google an verschiedenen Orten im Web anzeigt, werden unter unserer Domain möglicherweise Cookies mit dem Namen &#8220;__gads&#8221; oder “_gac” gesetzt. Seit September 2017 werden diverse Kampagneninformationen von analytics.js mit dem _gac-Cookie gespeichert. Das Cookie speichert diese Daten, sobald Sie eine unserer Seiten aufrufen, für die die automatische Tag-Kennzeichnung von Google Ads eingerichtet wurde. Im Gegensatz zu Cookies, die für Google-Domains gesetzt werden, kann Google diese Conversion-Cookies nur lesen, wenn Sie sich auf unserer Webseite befinden. Wir erheben und erhalten keine personenbezogenen Daten. Wir bekommen von Google einen Bericht mit statistischen Auswertungen. So erfahren wir beispielsweise die Gesamtanzahl der User, die unsere Anzeige angeklickt haben und wir sehen, welche Werbemaßnahmen gut ankamen.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>An dieser Stelle wollen wir darauf hinweisen, dass wir keinen Einfluss darauf haben, wie Google die erhobenen Daten weiterverwendet. Laut Google werden die Daten verschlüsselt und auf sicheren Servern gespeichert. In den meisten Fällen laufen Conversion-Cookies nach 30 Tagen ab und übermitteln keine personenbezogenen Daten. Die Cookies mit dem Namen „Conversion“ und „_gac“ (das in Verbindung mit Google Analytics zum Einsatz kommt) haben ein Ablaufdatum von 3 Monaten.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben die Möglichkeit am Conversion-Tracking von Google Ads nicht teilzunehmen. Wenn Sie das Cookie des Google Conversion-Tracking über Ihren Browser deaktivieren, blockieren Sie das Conversion-Tracking. In diesem Fall werden Sie in der Statistik des Tracking-Tools nicht berücksichtigt. Sie können die Cookie-Einstellungen in Ihrem Browser jederzeit verändern. Bei jedem Browser funktioniert dies etwas anders. Hier finden Sie die Anleitung, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie das Cookie erlauben oder nicht. Durch das Herunterladen und Installieren dieses Browser-Plug-ins auf <a class="adsimple-311196990" href="https://support.google.com/ads/answer/7395996" target="_blank" rel="noopener noreferrer">https://support.google.com/ads/answer/7395996</a> werden ebenfalls alle „Werbecookies“ deaktiviert. Bedenken Sie, dass Sie durch das Deaktivieren dieser Cookies nicht die Werbeanzeigen verhindern, sondern nur die personalisierte Werbung.</p>
            <p>Durch die Zertifizierung für das amerikanische-europäische Datenschutzübereinkommen &#8220;Privacy Shield&#8221;, muss der amerikanische Konzern Google LLC die in der EU geltenden Datenschutzgesetze einhalten. Wenn Sie Näheres über den Datenschutz bei Google erfahren möchten, empfehlen wir die allgemeine Datenschutzerklärung von Google: <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer">https://policies.google.com/privacy?hl=de</a>.</p>
            <h2 class="adsimple-311196990">plista Datenschutzerklärung</h2>
            <p>Wir verwenden auf dieser Website plista der Firma plista GmbH (Torstraße 33-35, 10119 Berlin, Deutschland), um für Sie passende Onlinewerbung und interessante Inhalte anzuzeigen. Dabei werden Daten von Ihnen erfasst, gespeichert und verarbeitet. In dieser Datenschutzerklärung informieren wir Sie darüber, warum wir plista verwenden, welche Daten wo Daten gespeichert werden und wie Sie diese Datenverarbeitung verwalten oder unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist plista?</h3>
            <p>plista analysiert Ihr Besucherverhalten auf unserer Website und sorgt mit Hilfe der gesammelten Daten und einer Echtzeit-Empfehlungstechnologie dafür, dass Sie passende Werbeanzeigen und passenden bezahlten Content (z.B. Beiträge) zu sehen bekommen. plista empfiehlt Besuchern von Websites des plista-Netzwerks (wie dieser Website) bestimmte Inhalte oder Anzeigen, die auf der Analyse der erhobenen Daten beruhen, die auf Seiten des plista-Netzwerks gesammelt oder abgerufen werden. Das sind Inhalte, die Sie interessieren könnten, Inhalte, die auf den Interessen ähnlicher User beruhen und Inhalte, die User zuvor auf Webseiten außerhalb des plista-Netzwerks angesehen haben.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir plista auf unserer Webseite?</h3>
            <p>Wir wollen Ihnen auf unserer Website das bestmögliche Service und die beste Nutzererfahrung (User Experience, UX) bieten. Für uns bedeutet das auch, dass Sie nur Inhalte und Werbeanzeigen zu sehen bekommen, die Sie auch wirklich interessieren. Durch plista können wir Werbeanzeigen und weiteren Content exakt an Ihre Wünsche und Interessen anpassen. Damit versorgen wir Sie mit guten Inhalten und erreichen leichter und schneller unsere Unternehmensziele.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von plista gespeichert?</h3>
            <p>Die plista Dienste erfassen Informationen über das Besucherverhalten, wenn Besucher Websites des plista-Netzwerks und Werbeanzeigen aufrufen, ansehen und mit diesen interagieren. plista erhebt dafür Daten, mit denen sich Browser und Geräte, die Seiten des plista Netzwerks wiederholt besuchen, identifizieren lassen:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Cookie IDs, um den Browser zu identifizieren</li>
            <li class="adsimple-311196990">Advertising-IDs für mobile Geräte, um das Werbeumfeld zu erkennen</li>
            <li class="adsimple-311196990">IP-Adressen und von solchen IP-Adressen abgeleitete Daten, wie ungenaue Geolokalisierungsdaten, die das Land, die Region, die Stadt und/oder den Postleitzahlenbereich eines Geräts angeben</li>
            <li class="adsimple-311196990">Art des Internetbrowsers, Browser-Sprache und Betriebssystem</li>
            <li class="adsimple-311196990">Art der Verbindung (kabelgebunden oder kabellos); Netzwerk, an welches das Gerät angeschlossen ist, und Mobilfunkbetreiber (wenn verfügbar)</li>
            <li class="adsimple-311196990">Breitengrad/Längengrad eines mobilen Geräts.</li>
            </ul>
            <p>Die von plista erhobenen Daten beinhalten niemals Namen, Adressen, Telefonnummern, E-Mail-Adressen oder ähnliche Daten der Nutzer und werden auch nicht mit solchen verknüpft. Ein Rückschluss auf natürliche Personen ist plista somit nicht möglich.</p>
            <p>Im Folgenden zeigen wir Ihnen Cookies, die plista in Ihrem Browser setzen kann. Die gefundenen Cookies können keinen Vollständigkeitsanspruch erheben und dienen lediglich als Beispiel.</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>Pookie<br />
            <strong class="adsimple-311196990">Wert: </strong>HhjIN4SdViBlW1ZTPZuoWBdoQTF4L5DINUZEtNQVSzU=<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Durch dieses Cookie erhalten Sie eine zufällige Cookie-ID, die als Identifizierung dient.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 50 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>Ploptout<br />
            <strong class="adsimple-311196990">Wert: </strong>1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die Information, dass Sie die Opt-out-Funktion verwendet haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 30 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>rt11<br />
            <strong class="adsimple-311196990">Wert: </strong>AlnCL9toeaa5lX0u2uS7D1B%2BinxhWAjqYkRre9sYf%2BI%3311196990-4<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Retargeting-Kampagnen-IDs von Ihnen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 60 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>um<br />
            <strong class="adsimple-311196990">Wert: </strong>c3de=1581682028%3B3420334527069442875&amp;crc=8d5889e4c3c6bd6237e6fd9c2b94624311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert von Partnern übermittelte Drittanbieter-IDs von Ihnen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 30 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>arv<br />
            <strong class="adsimple-311196990">Wert: </strong>q1YqSy0qzszPU7Iy0lFKSSxJVLKKrlYysrQ0sQSylEzNDSxMDI2NjJRia2311196990-8<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die zuvor von Ihnen gesehenen Beiträge.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 3 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>rec<br />
            <strong class="adsimple-311196990">Wert: </strong>a%3A0%3A%7B%7D<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die zuvor von Ihnen angeklickten Empfehlungen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 3 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>red<br />
            <strong class="adsimple-311196990">Wert: </strong>a%3A1%3A%7Bi%3A0%3Ba%3A1%3A%7BA9%3A%22477939325%22%3311196990-9<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die für Sie zuvor angezeigten Empfehlungen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 3 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>frc<br />
            <strong class="adsimple-311196990">Wert: </strong>q1YqSy0qzszPU7Iy0lFKSSxJVLKKjq0FAA<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Das Cookie sorgt dafür, dass Besucher Werbeanzeigen nur in begrenzter Anzahl sehen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 3 Tagen</p>
            <p>plista gibt Daten von Besuchern (insbesondere die von uns zugewiesene Cookie ID bzw. die jeweilige Advertising ID) an ausgewählte Drittanbieter und Dienstleister weiter, etwa um besondere Arten von Werbung auszuspielen und die eigenen Dienstleistungen zu verbessern.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Alle Besucherdaten aus der EU werden auf den plista-Servern in Deutschland gespeichert. Das plista Targeting-Cookie hat eine Speicherungszeit von einem Jahr und wird nach Ablauf dieser Zeit automatisch gelöscht. All Ihre Daten werden ebenfalls spätestens ein Jahr nach deren Erhebung gelöscht oder anonymisiert und können in letzterem Fall nur noch für statistische Zwecke verwendet werden.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Mit dem Opt-out Button auf <a class="adsimple-311196990" href="https://www.plista.com/de/ueber/opt-out" target="_blank" rel="noopener noreferrer">https://www.plista.com/de/ueber/opt-out</a> können Sie die Erfassung Ihrer Daten unterbinden.</p>
            <p>Zudem haben Sie auch in Ihrem Browser die Möglichkeit, die Datenverarbeitung durch plista zu unterbinden. Wie oben bereits erwähnt, speichert plista die meisten Daten über Cookies, die in Ihrem Browser gesetzt werden. Diese Cookies können Sie verwalten, deaktivieren oder löschen. Je nachdem, welchen Browser Sie haben, funktioniert die Verwaltung etwas anders. Die Anleitungen der gängigsten Browser finden Sie hier:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Sie können auch grundsätzlich Ihren Browser dahingehend einrichten, dass Sie immer informiert werden, wenn ein Cookie gesetzt werden soll. Dann können Sie immer individuell entscheiden, ob Sie das Cookie zulassen wollen oder nicht.</p>
            <p>Wir haben versucht, Ihnen die wichtigsten Informationen über die Datenverarbeitung durch plista näherzubringen. Auf <a class="adsimple-311196990" href="https://www.plista.com/de/ueber/privacy?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.plista.com/de/ueber/privacy</a> erfahren Sie noch mehr über die Datenschutzrichtlinien des Unternehmens.</p>
            <h2 class="adsimple-311196990">Eingebettete Social Media Elemente Datenschutzerklärung</h2>
            <p>Wir binden auf unserer Webseite Elemente von Social Media Diensten ein um Bilder, Videos und Texte anzuzeigen.<br />
            Durch den Besuch von Seiten die diese Elemente darstellen, werden Daten von Ihrem Browser zum jeweiligen Social Media Dienst übertragen und dort gespeichert. Wir haben keinen Zugriff auf diese Daten.<br />
            Die folgenden Links führen Sie zu den Seiten der jeweiligen Social Media Dienste wo erklärt wird, wie diese mit Ihren Daten umgehen:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Instagram-Datenschutzrichtlinie: <a class="adsimple-311196990" href="https://help.instagram.com/519522125107875?tid=311196990" target="_blank" rel="noopener">https://help.instagram.com/519522125107875</a>
            </li>
            <li class="adsimple-311196990">Für YouTube gilt die Google Datenschutzerklärung: <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de&amp;tid=311196990" target="_blank" rel="noopener">https://policies.google.com/privacy?hl=de</a>
            </li>
            <li class="adsimple-311196990">Facebook-Datenrichtline: <a class="adsimple-311196990" href="https://www.facebook.com/about/privacy?tid=311196990" target="_blank" rel="noopener">https://www.facebook.com/about/privacy</a>
            </li>
            <li class="adsimple-311196990">Twitter Datenschutzrichtlinie: <a class="adsimple-311196990" href="https://twitter.com/de/privacy?tid=311196990" target="_blank" rel="noopener">https://twitter.com/de/privacy</a>
            </li>
            </ul>
            <h2 class="adsimple-311196990">Facebook Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Webseite ausgewählte Tools von Facebook. Facebook ist ein Social Media Network des Unternehmens Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2 Ireland. Mithilfe dieser Tools können wir Ihnen und Menschen, die sich für unsere Produkte und Dienstleistungen interessieren, das bestmögliche Angebot bieten. Im Folgenden geben wir einen Überblick über die verschiedenen Facebook Tools, welche Daten an Facebook gesendet werden und wie Sie diese Daten löschen können.</p>
            <h3 class="adsimple-311196990">Was sind Facebook-Tools?</h3>
            <p>Neben vielen anderen Produkten bietet Facebook auch die sogenannten &#8220;Facebook Business Tools&#8221; an. Das ist die offizielle Bezeichnung von Facebook. Da der Begriff aber kaum bekannt ist, haben wir uns dafür entschieden, sie lediglich Facebook-Tools zu nennen. Darunter finden sich unter anderem:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Facebook-Pixel</li>
            <li class="adsimple-311196990">soziale Plug-ins (wie z.B der „Gefällt mir“- oder „Teilen“-Button)</li>
            <li class="adsimple-311196990">Facebook Login</li>
            <li class="adsimple-311196990">Account Kit</li>
            <li class="adsimple-311196990">APIs (Programmierschnittstelle)</li>
            <li class="adsimple-311196990">SDKs (Sammlung von Programmierwerkzeugen)</li>
            <li class="adsimple-311196990">Plattform-Integrationen</li>
            <li class="adsimple-311196990">Plugins</li>
            <li class="adsimple-311196990">Codes</li>
            <li class="adsimple-311196990">Spezifikationen</li>
            <li class="adsimple-311196990">Dokumentationen</li>
            <li class="adsimple-311196990">Technologien und Dienstleistungen</li>
            </ul>
            <p>Durch diese Tools erweitert Facebook Dienstleistungen und hat die Möglichkeit, Informationen über User-Aktivitäten außerhalb von Facebook zu erhalten.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Facebook-Tools auf unserer Webseite?</h3>
            <p>Wir wollen unsere Dienstleistungen und Produkte nur Menschen zeigen, die sich auch wirklich dafür interessieren. Mithilfe von Werbeanzeigen (Facebook-Ads) können wir genau diese Menschen erreichen. Damit den Usern passende Werbung gezeigt werden kann, benötigt Facebook allerdings Informationen über die Wünsche und Bedürfnisse der Menschen. So werden dem Unternehmen Informationen über das Userverhalten (und Kontaktdaten) auf unserer Webseite zur Verfügung gestellt. Dadurch sammelt Facebook bessere User-Daten und kann interessierten Menschen die passende Werbung über unsere Produkte bzw. Dienstleistungen anzeigen. Die Tools ermöglichen somit maßgeschneiderte Werbekampagnen auf Facebook.</p>
            <p>Daten über Ihr Verhalten auf unserer Webseite nennt Facebook „Event-Daten“. Diese werden auch für Messungs- und Analysedienste verwendet. Facebook kann so in unserem Auftrag „Kampagnenberichte“ über die Wirkung unserer Werbekampagnen erstellen. Weiters bekommen wir durch Analysen einen besseren Einblick, wie Sie unsere Dienstleistungen, Webseite oder Produkte verwenden. Dadurch optimieren wir mit einigen dieser Tools Ihre Nutzererfahrung auf unserer Webseite. Beispielsweise können Sie mit den sozialen Plug-ins Inhalte auf unserer Seite direkt auf Facebook teilen.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Facebook-Tools gespeichert?</h3>
            <p>Durch die Nutzung einzelner Facebook-Tools können personenbezogene Daten (Kundendaten) an Facebook gesendet werden. Abhängig von den benutzten Tools können Kundendaten wie Name, Adresse, Telefonnummer und IP-Adresse versandt werden.</p>
            <p>Facebook verwendet diese Informationen, um die Daten mit den Daten, die es selbst von Ihnen hat (sofern Sie Facebook-Mitglied sind) abzugleichen. Bevor Kundendaten an Facebook übermittelt werden, erfolgt ein sogenanntes „Hashing“. Das bedeutet, dass ein beliebig großer Datensatz in eine Zeichenkette transformiert wird. Dies dient auch der Verschlüsselung von Daten.</p>
            <p>Neben den Kontaktdaten werden auch „Event-Daten“ übermittelt. Unter „Event-Daten“ sind jene Informationen gemeint, die wir über Sie auf unserer Webseite erhalten. Zum Beispiel, welche Unterseiten Sie besuchen oder welche Produkte Sie bei uns kaufen. Facebook teilt die erhaltenen Informationen nicht mit Drittanbietern (wie beispielsweise Werbetreibende), außer das Unternehmen hat eine explizite Genehmigung oder ist rechtlich dazu verpflichtet. „Event-Daten“ können auch mit Kontaktdaten verbunden werden. Dadurch kann Facebook bessere personalisierte Werbung anbieten. Nach dem bereits erwähnten Abgleichungsprozess löscht Facebook die Kontaktdaten wieder.</p>
            <p>Um Werbeanzeigen optimiert ausliefern zu können, verwendet Facebook die Event-Daten nur, wenn diese mit anderen Daten (die auf andere Weise von Facebook erfasst wurden) zusammengefasst wurden. Diese Event-Daten nützt Facebook auch für Sicherheits-, Schutz-, Entwicklungs- und Forschungszwecken. Viele dieser Daten werden über Cookies zu Facebook übertragen. Cookies sind kleine Text-Dateien, die zum Speichern von Daten bzw. Informationen in Browsern verwendet werden. Je nach verwendeten Tools und abhängig, ob Sie Facebook-Mitglied sind, werden unterschiedlich viele Cookies in Ihrem Browser angelegt. In den Beschreibungen der einzelnen Facebook Tools gehen wir näher auf einzelne Facebook-Cookies ein. Allgemeine Informationen über die Verwendung von Facebook-Cookies erfahren Sie auch auf <a class="adsimple-311196990" href="https://www.facebook.com/policies/cookies?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.facebook.com/policies/cookies</a>.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Grundsätzlich speichert Facebook Daten bis sie nicht mehr für die eigenen Dienste und Facebook-Produkte benötigt werden. Facebook hat auf der ganzen Welt Server verteilt, wo Ihre Daten gespeichert werden. Kundendaten werden allerdings, nachdem sie mit den eigenen Userdaten abgeglichen wurden, innerhalb von 48 Stunden gelöscht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Entsprechend der Datenschutz Grundverordnung haben Sie das Recht auf Auskunft, Berichtigung, Übertragbarkeit und Löschung Ihrer Daten.</p>
            <p>Eine komplette Löschung der Daten erfolgt nur, wenn Sie Ihr Facebook-Konto vollständig löschen. Und so funktioniert das Löschen Ihres Facebook-Kontos:</p>
            <p>1) Klicken Sie rechts bei Facebook auf Einstellungen.</p>
            <p>2) Anschließend klicken Sie in der linken Spalte auf „Deine Facebook-Informationen“.</p>
            <p>3) Nun klicken Sie &#8220;Deaktivierung und Löschung&#8221;.</p>
            <p>4) Wählen Sie jetzt „Konto löschen“ und klicken Sie dann auf „Weiter und Konto löschen“</p>
            <p>5) Geben Sie nun Ihr Passwort ein, klicken Sie auf „Weiter“ und dann auf „Konto löschen“</p>
            <p>Die Speicherung der Daten, die Facebook über unsere Seite erhält, erfolgt unter anderem über Cookies (z.B. bei sozialen Plugins). In Ihrem Browser können Sie einzelne oder alle Cookies deaktivieren, löschen oder verwalten. Je nach dem welchen Browser Sie verwenden, funktioniert dies auf unterschiedliche Art und Weise. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie es erlauben oder nicht.</p>
            <p>Facebook ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC</a>. Wir hoffen wir haben Ihnen die wichtigsten Informationen über die Nutzung und Datenverarbeitung durch die Facebook-Tools nähergebracht. Wenn Sie mehr darüber erfahren wollen, wie Facebook Ihre Daten verwendet, empfehlen wir Ihnen die Datenrichtlinien auf <a class="adsimple-311196990" href="https://www.facebook.com/about/privacy/update" target="_blank" rel="noopener noreferrer">https://www.facebook.com/about/privacy/update</a>.</p>
            <h2 class="adsimple-311196990">Facebook Soziale Plug-ins Datenschutzerklärung</h2>
            <p>Auf unserer Webseite sind sogenannte soziale Plug-ins des Unternehmens Facebook Inc. eingebaut. Sie erkennen diese Buttons am klassischen Facebook-Logo, wie dem „Gefällt mir“-Button (die Hand mit erhobenem Daumen) oder an einer eindeutigen „Facebook Plug-in“-Kennzeichnung. Ein soziales Plug-in ist ein kleiner Teil von Facebook, der in unsere Seite integriert ist. Jedes Plug-in hat eine eigene Funktion. Die am meisten verwendeten Funktionen sind die bekannten &#8220;Gefällt mir&#8221;- und &#8220;Teilen&#8221;-Buttons.</p>
            <p>Folgende soziale Plug-ins werden von Facebook angeboten:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">&#8220;Speichern&#8221;-Button</li>
            <li class="adsimple-311196990">&#8220;Gefällt mir&#8221;-Button, Teilen, Senden und Zitat</li>
            <li class="adsimple-311196990">Seiten-Plug-in</li>
            <li class="adsimple-311196990">Kommentare</li>
            <li class="adsimple-311196990">Messenger-Plug-in</li>
            <li class="adsimple-311196990">Eingebettete Beiträge und Videoplayer</li>
            <li class="adsimple-311196990">Gruppen-Plug-in</li>
            </ul>
            <p>Auf <a class="adsimple-311196990" href="https://developers.facebook.com/docs/plugins" target="_blank" rel="noopener noreferrer">https://developers.facebook.com/docs/plugins</a> erhalten Sie nähere Informationen, wie die einzelnen Plug-ins verwendet werden. Wir nützen die sozialen Plug-ins einerseits, um Ihnen ein besseres Usererlebnis auf unserer Seite zu bieten, andererseits weil Facebook dadurch unsere Werbeanzeigen optimieren kann.</p>
            <p>Sofern Sie ein Facebook-Konto haben oder <a class="adsimple-311196990" href="https://www.facebook.com/" target="_blank" rel="follow noopener noreferrer">facebook.com</a> schon mal besucht haben, hat Facebook bereits mindestens ein Cookie in Ihrem Browser gesetzt. In diesem Fall sendet Ihr Browser über dieses Cookie Informationen an Facebook, sobald Sie unsere Seite besuchen bzw. mit sozialen Plug-ins (z.B. dem „Gefällt mir“-Button) interagieren.</p>
            <p>Die erhaltenen Informationen werden innerhalb von 90 Tagen wieder gelöscht bzw. anonymisiert. Laut Facebook gehören zu diesen Daten Ihre IP-Adresse, welche Webseite Sie besucht haben, das Datum, die Uhrzeit und weitere Informationen, die Ihren Browser betreffen.</p>
            <p>Um zu verhindern, dass Facebook während Ihres Besuches auf unserer Webseite viele Daten sammelt und mit den Facebook-Daten verbindet, müssen Sie sich während des Webseitenbesuchs von Facebook abmelden (ausloggen).</p>
            <p>Falls Sie bei Facebook nicht angemeldet sind oder kein Facebook-Konto besitzen, sendet Ihr Browser weniger Informationen an Facebook, weil Sie weniger Facebook-Cookies haben. Dennoch können Daten wie beispielsweise Ihre IP-Adresse oder welche Webseite Sie besuchen an Facebook übertragen werden. Wir möchten noch ausdrücklich darauf hinweisen, dass wir über die genauen Inhalte der Daten nicht exakt Bescheid wissen. Wir versuchen aber Sie nach unserem aktuellen Kenntnisstand so gut als möglich über die Datenverarbeitung aufzuklären. Wie Facebook die Daten nutzt, können Sie auch in den Datenrichtline des Unternehmens unter <a class="adsimple-311196990" href="https://www.facebook.com/about/privacy/update" target="_blank" rel="noopener noreferrer">https://www.facebook.com/about/privacy/update</a> nachlesen.</p>
            <p>Folgende Cookies werden in Ihrem Browser mindestens gesetzt, wenn Sie eine Webseite mit sozialen Plug-ins von Facebook besuchen:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> dpr<br />
            <strong class="adsimple-311196990">Wert:</strong> keine Angabe<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, damit die sozialen Plug-ins auf unserer Webseite funktionieren.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> fr<br />
            <strong class="adsimple-311196990">Wert:</strong> 0jieyh4311196990c2GnlufEJ9..Bde09j&#8230;1.0.Bde09j<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Auch das Cookie ist nötig, dass die Plug-ins einwandfrei funktionieren.<br />
            <strong class="adsimple-311196990">Ablaufdatum::</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese Cookies wurden nach einem Test gesetzt, auch wenn Sie nicht Facebook-Mitglied sind.</p>
            <p>Sofern Sie bei Facebook angemeldet sind, können Sie Ihre Einstellungen für Werbeanzeigen unter <a class="adsimple-311196990" href="https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen" target="_blank" rel="noopener noreferrer">https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen</a> selbst verändern. Falls Sie kein Facebook-User sind, können Sie auf <a class="adsimple-311196990" href="http://www.youronlinechoices.com/de/praferenzmanagement/?tid=311196990" target="_blank" rel="noopener noreferrer">http://www.youronlinechoices.com/de/praferenzmanagement/</a>grundsätzlich Ihre nutzungsbasierte Online-Werbung verwalten. Dort haben Sie die Möglichkeit, Anbieter zu deaktivieren bzw. zu aktivieren.</p>
            <p>Wenn Sie mehr über den Datenschutz von Facebook erfahren wollen, empfehlen wir Ihnen die eigenen Datenrichtlinien des Unternehmens auf <a class="adsimple-311196990" href="https://www.facebook.com/policy.php?tip=311196990" target="_blank" rel="noopener noreferrer">https://www.facebook.com/policy.php</a>.</p>
            <h2 class="adsimple-311196990">Facebook Login Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Seite das praktische Facebook Login integriert. So können Sie sich bei uns ganz einfach mit Ihrem Facebook-Konto einloggen, ohne ein weiteres Benutzerkonto anlegen zu müssen. Wenn Sie sich entscheiden, Ihre Registrierung über das Facebook Login zu machen, werden Sie auf das Social Media Network Facebook weitergeleitet. Dort erfolgt die Anmeldung über Ihre Facebook Nutzerdaten. Durch dieses Login-Verfahren werden Daten über Sie bzw. Ihr Userverhalten gespeichert und an Facebook übermittelt.</p>
            <p>Um die Daten zu speichern, benutzt Facebook verschiedene Cookies. Im Folgenden zeigen wir Ihnen die wichtigsten Cookies, die in Ihrem Browser gesetzt werden bzw. schon bestehen, wenn Sie sich über das Facebook Login auf unserer Seite anmelden:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> fr<br />
            <strong class="adsimple-311196990">Wert:</strong> 0jieyh4c2GnlufEJ9..Bde09j&#8230;1.0.Bde09j<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, damit das soziale Plugin auf unserer Webseite bestmöglich funktioniert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> datr<br />
            <strong class="adsimple-311196990">Wert:</strong> 4Jh7XUA2311196990SEmPsSfzCOO4JFFl<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Facebook setzt das &#8220;datr&#8221;-Cookie, wenn ein Webbrowser auf facebook.com zugreift, und das Cookie hilft, Anmeldeaktivitäten zu identifizieren und die Benutzer zu schützen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _js_datr<br />
            <strong class="adsimple-311196990">Wert:</strong> deleted<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Session-Cookie setzt Facebook zu Trackingzwecken, auch wenn Sie kein Facebook-Konto haben oder ausgeloggt sind.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Die angeführten Cookies sind nur eine kleine Auswahl der Cookies, die Facebook zur Verfügung stehen. Weitere Cookies sind beispielsweise _ fbp, sb oder wd. Eine vollständige Aufzählung ist nicht möglich, da Facebook über eine Vielzahl an Cookies verfügt und diese variabel einsetzt.</p>
            <p>Der Facebook Login bietet Ihnen einerseits einen schnellen und einfachen Registrierungsprozess, andererseits haben wir so die Möglichkeit Daten mit Facebook zu teilen. Dadurch können wir unser Angebot und unsere Werbeaktionen besser an Ihre Interessen und Bedürfnisse anpassen. Daten, die wir auf diese Weise von Facebook erhalten, sind öffentliche Daten wie</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Ihr Facebook-Name</li>
            <li class="adsimple-311196990">Ihr Profilbild</li>
            <li class="adsimple-311196990">eine hinterlegte E-Mail-Adresse</li>
            <li class="adsimple-311196990">Freundeslisten</li>
            <li class="adsimple-311196990">Buttons-Angaben (z.B. „Gefällt mir“-Button)</li>
            <li class="adsimple-311196990">Geburtstagsdatum</li>
            <li class="adsimple-311196990">Sprache</li>
            <li class="adsimple-311196990">Wohnort</li>
            </ul>
            <p>Im Gegenzug stellen wir Facebook Informationen über Ihre Aktivitäten auf unserer Webseite bereit. Das sind unter anderem Informationen über Ihr verwendetes Endgerät, welche Unterseiten Sie bei uns besuchen oder welche Produkte Sie bei uns erworben haben.</p>
            <p>Durch die Verwendung von Facebook Login willigen Sie der Datenverarbeitung ein. Sie können diese Vereinbarung jederzeit widerrufen. Wenn Sie mehr Informationen über die Datenverarbeitung durch Facebook erfahren wollen, empfehlen wir Ihnen die Facebook-Datenschutzerklärung unter <a class="adsimple-311196990" href="https://de-de.facebook.com/policy.php?tid=311196990" target="_blank" rel="noopener noreferrer">https://de-de.facebook.com/policy.php</a>.</p>
            <p>Sofern Sie bei Facebook angemeldet sind, können Sie Ihre Einstellungen für Werbeanzeigen unter <a class="adsimple-311196990" href="https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen" target="_blank" rel="noopener noreferrer">https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen</a> selbst verändern.</p>
            <h2 class="adsimple-311196990">Instagram Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Webseite Funktionen von Instagram eingebaut. Instagram ist eine Social Media Plattform des Unternehmens Instagram LLC, 1601 Willow Rd, Menlo Park CA 94025, USA. Instagram ist seit 2012 ein Tochterunternehmen von Facebook Inc. und gehört zu den Facebook-Produkten. Das Einbetten von Instagram-Inhalten auf unserer Webseite nennt man Embedding. Dadurch können wir Ihnen Inhalte wie Buttons, Fotos oder Videos von Instagram direkt auf unserer Webseite zeigen. Wenn Sie Webseiten unserer Webpräsenz aufrufen, die eine Instagram-Funktion integriert haben, werden Daten an Instagram übermittelt, gespeichert und verarbeitet. Instagram verwendet dieselben Systeme und Technologien wie Facebook. Ihre Daten werden somit über alle Facebook-Firmen hinweg verarbeitet.</p>
            <p>Im Folgenden wollen wir Ihnen einen genaueren Einblick geben, warum Instagram Daten sammelt, um welche Daten es sich handelt und wie Sie die Datenverarbeitung weitgehend kontrollieren können. Da Instagram zu Facebook Inc. gehört, beziehen wir unsere Informationen einerseits von den Instagram-Richtlinien, andererseits allerdings auch von den Facebook-Datenrichtlinien selbst.</p>
            <h3 class="adsimple-311196990">Was ist Instagram?</h3>
            <p>Instagram ist eines der bekanntesten Social Media Netzwerken weltweit. Instagram kombiniert die Vorteile eines Blogs mit den Vorteilen von audiovisuellen Plattformen wie YouTube oder Vimeo. Sie können auf „Insta“ (wie viele der User die Plattform salopp nennen) Fotos und kurze Videos hochladen, mit verschiedenen Filtern bearbeiten und auch in anderen sozialen Netzwerken verbreiten. Und wenn Sie selbst nicht aktiv sein wollen, können Sie auch nur anderen interessante Users folgen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Instagram auf unserer Webseite?</h3>
            <p>Instagram ist jene Social Media Plattform, die in den letzten Jahren so richtig durch die Decke ging. Und natürlich haben auch wir auf diesen Boom reagiert. Wir wollen, dass Sie sich auf unserer Webseite so wohl wie möglich fühlen. Darum ist für uns eine abwechslungsreiche Aufbereitung unserer Inhalte selbstverständlich. Durch die eingebetteten Instagram-Funktionen können wir unseren Content mit hilfreichen, lustigen oder spannenden Inhalten aus der Instagram-Welt bereichern. Da Instagram eine Tochtergesellschaft von Facebook ist, können uns die erhobenen Daten auch für personalisierte Werbung auf Facebook dienlich sein. So bekommen unsere Werbeanzeigen nur Menschen, die sich wirklich für unsere Produkte oder Dienstleistungen interessieren.</p>
            <p>Instagram nützt die gesammelten Daten auch zu Messungs- und Analysezwecken. Wir bekommen zusammengefasste Statistiken und so mehr Einblick über Ihre Wünsche und Interessen. Wichtig ist zu erwähnen, dass diese Berichte Sie nicht persönlich identifizieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Instagram gespeichert?</h3>
            <p>Wenn Sie auf eine unserer Seiten stoßen, die Instagram-Funktionen (wie Instagrambilder oder Plug-ins) eingebaut haben, setzt sich Ihr Browser automatisch mit den Servern von Instagram in Verbindung. Dabei werden Daten an Instagram versandt, gespeichert und verarbeitet. Und zwar unabhängig, ob Sie ein Instagram-Konto haben oder nicht. Dazu zählen Informationen über unserer Webseite, über Ihren Computer, über getätigte Käufe, über Werbeanzeigen, die Sie sehen und wie Sie unser Angebot nutzen. Weiters werden auch Datum und Uhrzeit Ihrer Interaktion mit Instagram gespeichert. Wenn Sie ein Instagram-Konto haben bzw. eingeloggt sind, speichert Instagram deutlich mehr Daten über Sie.</p>
            <p>Facebook unterscheidet zwischen Kundendaten und Eventdaten. Wir gehen davon aus, dass dies bei Instagram genau so der Fall ist. Kundendaten sind zum Beispiel Name, Adresse, Telefonnummer und IP-Adresse. Wichtig zu erwähnen ist, dass diese Kundendaten erst an Instagram übermittelt werden, wenn Sie zuvor „gehasht“ wurden. Hashing meint, ein Datensatz wird in eine Zeichenkette verwandelt. Dadurch kann man die Kontaktdaten verschlüsseln. Zudem werden auch die oben genannten „Event-Daten“ übermittelt. Unter „Event-Daten“ versteht Facebook – und folglich auch Instagram – Daten über Ihr Userverhalten. Es kann auch vorkommen, dass Kontaktdaten mit Event-Daten kombiniert werden. Die erhobenen Kontaktdaten werden mit den Daten, die Instagram bereits von Ihnen hat abgeglichen.</p>
            <p>Über kleine Text-Dateien (Cookies), die meist in Ihrem Browser gesetzt werden, werden die gesammelten Daten an Facebook übermittelt. Je nach verwendeten Instagram-Funktionen und ob Sie selbst ein Instagram-Konto haben, werden unterschiedlich viele Daten gespeichert.</p>
            <p>Wir gehen davon aus, dass bei Instagram die Datenverarbeitung gleich funktioniert wie bei Facebook. Das bedeutet: wenn Sie ein Instagram-Konto haben oder <a class="adsimple-311196990" href="http://www.instagram.com?tid=311196990" target="_blank" rel="noopener">www.instagram.com</a> besucht haben, hat Instagram zumindest ein Cookie gesetzt. Wenn das der Fall ist, sendet Ihr Browser über das Cookie Infos an Instagram, sobald Sie mit einer Instagram-Funktion in Berührung kommen. Spätestens nach 90 Tagen (nach Abgleichung) werden diese Daten wieder gelöscht bzw. anonymisiert. Obwohl wir uns intensiv mit der Datenverarbeitung von Instagram beschäftigt haben, können wir nicht ganz genau sagen, welche Daten Instagram exakt sammelt und speichert.</p>
            <p>Im Folgenden zeigen wir Ihnen Cookies, die in Ihrem Browser mindestens gesetzt werden, wenn Sie auf eine Instagram-Funktion (wie z.B. Button oder ein Insta-Bild) klicken. Bei unserem Test gehen wir davon aus, dass Sie kein Instagram-Konto haben. Wenn Sie bei Instagram eingeloggt sind, werden natürlich deutlich mehr Cookies in Ihrem Browser gesetzt.</p>
            <p>Diese Cookies wurden bei unserem Test verwendet:</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>csrftoken<br />
            <strong class="adsimple-311196990">Wert: </strong>&#8220;&#8221;<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie wird mit hoher Wahrscheinlichkeit aus Sicherheitsgründen gesetzt, um Fälschungen von Anfragen zu verhindern. Genauer konnten wir das allerdings nicht in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>mid<br />
            <strong class="adsimple-311196990">Wert: </strong>&#8220;&#8221;<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Instagram setzt dieses Cookie, um die eigenen Dienstleistungen und Angebote in und außerhalb von Instagram zu optimieren. Das Cookie legt eine eindeutige User-ID fest.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Ende der Sitzung</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> fbsr_311196990124024<br />
            <strong class="adsimple-311196990">Wert: </strong>keine Angaben<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die Log-in-Anfrage für User der Instagram-App.<strong class="adsimple-311196990">
            <br />
            </strong>
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Ende der Sitzung</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> rur<br />
            <strong class="adsimple-311196990">Wert: </strong>ATN<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dabei handelt es sich um ein Instagram-Cookie, das die Funktionalität auf Instagram gewährleistet.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Ende der Sitzung</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> urlgen<br />
            <strong class="adsimple-311196990">Wert: </strong>&#8220;{\&#8221;194.96.75.33\&#8221;: 1901}:1iEtYv:Y833k2_UjKvXgYe311196990&#8221;<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie dient den Marketingzwecken von Instagram.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Ende der Sitzung</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Wir können hier keinen Vollständigkeitsanspruch erheben. Welche Cookies im individuellen Fall gesetzt werden, hängt von den eingebetteten Funktionen und Ihrer Verwendung von Instagram ab.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Instagram teilt die erhaltenen Informationen zwischen den Facebook-Unternehmen mit externen Partnern und mit Personen, mit denen Sie sich weltweit verbinden. Die Datenverarbeitung erfolgt unter Einhaltung der eigenen Datenrichtlinie. Ihre Daten sind, unter anderem aus Sicherheitsgründen, auf den Facebook-Servern auf der ganzen Welt verteilt. Die meisten dieser Server stehen in den USA.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Dank der Datenschutz Grundverordnung haben Sie das Recht auf Auskunft, Übertragbarkeit, Berichtigung und Löschung Ihrer Daten. In den Instagram-Einstellungen können Sie Ihre Daten verwalten. Wenn Sie Ihre Daten auf Instagram völlig löschen wollen, müssen Sie Ihr Instagram-Konto dauerhaft löschen.</p>
            <p>Und so funktioniert die Löschung des Instagram-Kontos:</p>
            <p>Öffnen Sie zuerst die Instagram-App. Auf Ihrer Profilseite gehen Sie nach unten und klicken Sie auf „Hilfebereich“. Jetzt kommen Sie auf die Webseite des Unternehmens. Klicken Sie auf der Webseite auf „Verwalten des Kontos“ und dann auf „Dein Konto löschen“.</p>
            <p>Wenn Sie Ihr Konto ganz löschen, löscht Instagram Posts wie beispielsweise Ihre Fotos und Status-Updates. Informationen, die andere Personen über Sie geteilt haben, gehören nicht zu Ihrem Konto und werden folglich nicht gelöscht.</p>
            <p>Wie bereits oben erwähnt, speichert Instagram Ihre Daten in erster Linie über Cookies. Diese Cookies können Sie in Ihrem Browser verwalten, deaktivieren oder löschen. Abhängig von Ihrem Browser funktioniert die Verwaltung immer ein bisschen anders. Hier zeigen wir Ihnen die Anleitungen der wichtigsten Browser.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Sie können auch grundsätzlich Ihren Browser so einrichten, dass Sie immer informiert werden, wenn ein Cookie gesetzt werden soll. Dann können Sie immer individuell entscheiden, ob Sie das Cookie zulassen wollen oder nicht.</p>
            <p>Instagram ist ein Tochterunternehmen von Facebook Inc. und Facebook ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework. Dieses Framework stellt eine korrekte Datenübertragung zwischen den USA und der Europäischen Union sicher. Unter <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC" target="_blank" rel="noopener">https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC </a> erfahren Sie mehr darüber. Wir haben versucht, Ihnen die wichtigsten Informationen über die Datenverarbeitung durch Instagram näherzubringen. Auf <a class="adsimple-311196990" href="https://help.instagram.com/519522125107875" target="_blank" rel="noopener">https://help.instagram.com/519522125107875</a>
            <br />
            können Sie sich noch näher mit den Datenrichtlinien von Instagram auseinandersetzen.</p>
            <h2 class="adsimple-311196990">Twitter Datenschutzerklärung</h2>
            <p>Auf unserer Webseite haben wir Funktionen von Twitter eingebaut. Dabei handelt es sich zum Beispiel um eingebettete Tweets, Timelines, Buttons oder Hashtags. Twitter ist ein Kurznachrichtendienst und eine Social-Media-Plattform der Firma Twitter Inc., One Cumberland Place, Fenian Street, Dublin 2 D02 AX07, Irland.</p>
            <p>Nach unserer Kenntnis werden im Europäischen Wirtschaftsraum und in der Schweiz durch das bloße Einbinden von Twitter-Funktion noch keine personenbezogenen Daten oder Daten zu Ihrer Webaktivitäten an Twitter übertragen. Erst wenn Sie mit den Twitter-Funktionen interagieren, wie zum Beispiel auf einen Button klicken, können Daten an Twitter gesendet, dort gespeichert und verarbeitet werden. Auf diese Datenverarbeitung haben wir keinen Einfluss und tragen keine Verantwortung. Im Rahmen dieser Datenschutzerklärung wollen wir Ihnen einen Überblick geben, welche Daten Twitter speichert, was Twitter mit diesen Daten macht und wie Sie sich vor der Datenübertragung weitgehend schützen können.</p>
            <h3 class="adsimple-311196990">Was ist Twitter?</h3>
            <p>Für die einen ist Twitter ein Nachrichtendienst, für andere eine Social-Media-Plattform und wieder andere sprechen von einem Microblogging-Dienst. All diese Bezeichnungen haben ihre Berechtigung und meinen mehr oder weniger dasselbe.</p>
            <p>Sowohl Privatpersonen als auch Unternehmen nützen Twitter, um mit interessierten Personen über Kurznachrichten zu kommunizieren. Pro Nachricht erlaubt Twitter nur 280 Zeichen. Diese Nachrichten werden „Tweets“ genannt. Anders als beispielsweise bei Facebook fokussiert sich der Dienst nicht auf den Ausbau eines Netzwerks für &#8220;Freunde&#8221;, sondern will als weltweite und offene Nachrichten-Plattform verstanden werden. Bei Twitter kann man auch ein anonymes Konto führen und Tweets können einerseits vom Unternehmen, andererseits von den Usern selbst gelöscht werden.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Twitter auf unserer Webseite?</h3>
            <p>Wie viele andere Webseiten und Unternehmen versuchen wir unserer Services und Dienstleistungen über verschiedene Kanäle anzubieten und mit unseren Kunden zu kommunizieren. Speziell Twitter ist uns als nützlicher „kleiner“ Nachrichtendienst ans Herz gewachsen. Immer wieder tweeten oder retweeten wir spannende, lustige oder interessante Inhalte. Uns ist klar, dass Sie nicht jeden Kanal extra folgen können. Schließlich haben Sie auch noch etwas anderes zu tun. Darum haben wir auf unserer Webseite auch Twitter-Funktionen eingebunden. Sie können unsere Twitter-Aktivität „vor Ort“ miterleben oder über einen direkten Link zu unserer Twitter-Seite kommen. Durch die Einbindung wollen wir unser Service und die Nutzerfreundlichkeit auf unserer Webseite stärken.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Twitter gespeichert?</h3>
            <p>Auf manchen unserer Unterseiten finden Sie die eingebauten Twitter-Funktionen. Wenn Sie mit den Twitter-Inhalten interagieren, wie zum Beispiel auf einen Button klicken, kann Twitter Daten erfassen und speichern. Und zwar auch dann, wenn Sie selbst kein Twitter-Konto haben. Twitter nennt diese Daten &#8220;Log-Daten&#8221;. Dazu zählen demografische Daten, Browser-Cookie-IDs, die ID Ihres Smartphones, gehashte E-Mail-Adressen, und Informationen, welche Seiten Sie bei Twitter besucht haben und welche Handlungen Sie ausgeführt haben. Twitter speichert natürlich mehr Daten, wenn Sie ein Twitter-Konto haben und angemeldet sind. Meistens passiert diese Speicherung über Cookies. Cookies sind kleine Text-Dateien, die meist in Ihrem Browser gesetzt werden und unterschiedliche Information an Twitter übermitteln.</p>
            <p>Welche Cookies gesetzt werden, wenn Sie nicht bei Twitter angemeldet sind, aber eine Webseite mit eingebauten Twitter-Funktionen besuchen, zeigen wir Ihnen jetzt. Bitte betrachten Sie diese Aufzählung als Beispiel. Einen Anspruch auf Vollständigkeit können wir hier auf keinen Fall gewährleisten, da sich die Wahl der Cookies stets verändert und von Ihren individuellen Handlungen mit den Twitter-Inhalten abhängt.</p>
            <p>Diese Cookies wurden bei unserem Test verwendet:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> personalization_id<br />
            <strong class="adsimple-311196990">Wert:</strong> &#8220;v1_cSJIsogU51SeE311196990&#8221;<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Informationen, wie Sie die Webseite nutzen und über welche Werbung Sie möglicherweise zu Twitter gekommen sind.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahre</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>lang<br />
            <strong class="adsimple-311196990">Wert: </strong>de<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Ihre voreingestellte bzw. bevorzugte Sprache.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>guest_id<br />
            <strong class="adsimple-311196990">Wert: </strong>311196990v1%3A157132626<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie wird gesetzt, um Sie als Gast zu identifizieren.<strong class="adsimple-311196990"> </strong>
            <br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>fm<br />
            <strong class="adsimple-311196990">Wert: </strong>0<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Zu diesem Cookie konnten wir leider den Verwendungszweck nicht in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>external_referer<br />
            <strong class="adsimple-311196990">Wert: </strong>3111969902beTA0sf5lkMrlGt<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie sammelt anonyme Daten, wie zum Beispiel wie oft Sie Twitter besuchen und wie lange Sie Twitter besuchen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>Nach 6 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>eu_cn<br />
            <strong class="adsimple-311196990">Wert: </strong>1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Useraktivität und dient diversen Werbezwecken von Twitter. <strong class="adsimple-311196990">
            <br />
            Ablaufdatum: </strong>Nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>ct0<br />
            <strong class="adsimple-311196990">Wert: </strong>c1179f07163a365d2ed7aad84c99d966<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Zu diesem Cookie haben wir leider keine Informationen gefunden.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 6 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>_twitter_sess<br />
            <strong class="adsimple-311196990">Wert: </strong>53D%253D&#8211;dd0248311196990-<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Mit diesem Cookie können Sie Funktionen innerhalb der Twitter-Webseite nutzen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Twitter arbeitet auch mit Drittanbietern zusammen. Darum haben wir bei unsrem Test auch die drei Google-Analytics-Cookies _ga, _gat, _gid erkannt.</p>
            <p>Twitter verwendet die erhobenen Daten einerseits, um das Userverhalten besser zu verstehen und somit ihre eigenen Dienste und Werbeangebote zu verbessern, andererseits dienen die Daten auch internen Sicherheitsmaßnahmen.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Wenn Twitter Daten von anderen Webseiten erhebt, werden diese nach maximal 30 Tagen gelöscht, zusammengefasst oder auf andere Weise verdeckt. Die Twitter-Server liegen auf verschiedenen Serverzentren in den Vereinigten Staaten. Demnach ist davon auszugehen, dass erhobenen Daten in Amerika gesammelt und gespeichert werden. Nach unserer Recherche konnten wir nicht eindeutig feststellen, ob Twitter auch eigene Server in Europa hat. Grundsätzlich kann Twitter die erhobenen Daten speichern, bis sie dem Unternehmen nicht mehr dienlich sind, Sie die Daten löschen oder eine gesetzliche Löschfrist besteht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Twitter betont in seinen Datenschutzrichtlinien immer wieder, dass es keine Daten von externen Webseitenbesuchen speichert, wenn Sie bzw. Ihr Browser sich im europäischen Wirtschaftsraum oder in der Schweiz befinden. Falls Sie allerdings mit Twitter direkt interagieren, speichert Twitter selbstverständlich auch Daten von Ihnen.</p>
            <p>Wenn Sie ein Twitter-Konto besitzen, können Sie Ihre Daten verwalten, indem Sie unter dem „Profil“-Button auf „Mehr“ klicken. Anschließend klicken Sie auf „Einstellungen und Datenschutz“. Hier können Sie die Datenverarbeitung individuell verwalten.</p>
            <p>Wenn Sie kein Twitter-Konto besitzen, können Sie auf <a class="adsimple-311196990" href="https://twitter.com/">twitter.com</a> gehen und dann auf „Individualisierung“ klicken. Unter dem Punkt „Individualisierung und Daten“ können Sie Ihre erhobenen Daten verwalten.</p>
            <p>Die meisten Daten werden, wie oben bereits erwähnt, über Cookies gespeichert und die können Sie in Ihrem Browser verwalten, deaktivieren oder löschen. Bitte beachten Sie, dass Sie die Cookies nur in dem von Ihnen gewählten Browser &#8220;bearbeiten&#8221;. Das heißt: verwenden Sie in Zukunft einen anderen Browser, müssen Sie dort Ihre Cookies erneut nach Ihren Wünschen verwalten. Hier gibt es die Anleitung zur Cookie-Verwaltung der bekanntesten Browser.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Ihren Browser können Sie auch so verwalten, dass Sie bei jedem einzelnen Cookie informiert werden. Dann können Sie immer individuell entscheiden, ob Sie ein Cookie zulassen oder nicht.</p>
            <p>Twitter verwendet die Daten auch für personalisierte Werbung in- und außerhalb von Twitter. In den Einstellungen können Sie unter „Individualisierung und Daten“ die personalisierte Werbung abschalten. Wenn Sie Twitter auf einem Browser nutzen, können Sie die personalisierte Werbung unter <a class="adsimple-311196990" href="http://optout.aboutads.info/?c=2&amp;lang=EN" target="_blank" rel="follow noopener noreferrer">http://optout.aboutads.info/?c=2&amp;lang=EN</a> deaktivieren.</p>
            <p>Twitter ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework. Dieses Framework stellt eine korrekte Datenübertragung zwischen den USA und der Europäischen Union sicher. Unter <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000TORzAAO" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000TORzAAO</a> erfahren Sie mehr darüber.</p>
            <p>Wir hoffen, wir haben Ihnen einen grundsätzlichen Überblick über die Datenverarbeitung durch Twitter gegeben. Wir erhalten keinen Daten von Twitter und tragen auch keine Verantwortung darüber, was Twitter mit Ihren Daten macht. Falls Sie noch weitere Fragen zu diesem Thema haben, empfehlen wir Ihnen die Twitter-Datenschutzerklärung unter <a class="adsimple-311196990" href="https://twitter.com/de/privacy">https://twitter.com/de/privacy</a>.</p>
            <h2 class="adsimple-311196990">LinkedIn Datenschutzerklärung</h2>
            <p>Wir nutzen auf unserer Webseite Social-Plug-ins des Social-Media-Netzwerks LinkedIn, der Firma LinkedIn Corporation, 2029 Stierlin Court, Mountain View, CA 94043, USA. Bei den Social-Plug-ins kann es sich um Feeds, das Teilen von Inhalten oder um die Verlinkung zu unserer LinkedIn-Seite handeln. Die Social-Plug-ins sind eindeutig mit dem bekannten LinkedIn-Logo gekennzeichnet und erlauben beispielsweise interessante Inhalte direkt über unsere Webseite zu teilen. Für den Europäischen Wirtschaftsraum und die Schweiz ist die Firma LinkedIn Ireland Unlimited Company Wilton Place in Dublin für die Datenverarbeitung verantwortlich.</p>
            <p>Durch die Einbettung solcher Plug-ins können Daten an LinkedIn versandt, gespeichert und dort verarbeitet werden. In dieser Datenschutzerklärung wollen wir Sie informieren, um welche Daten es sich handelt, wie das Netzwerk diese Daten verwendet und wie Sie die Datenspeicherung verwalten bzw. unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist LinkedIn?</h3>
            <p>LinkedIn ist das größte soziale Netzwerk für Geschäftskontakte. Anders als beispielsweise bei Facebook konzentriert sich das Unternehmen ausschließlich auf den Aufbau geschäftlicher Kontakte. Unternehmen können auf der Plattform Dienstleistungen und Produkte vorstellen und Geschäftsbeziehungen knüpfen. Viele Menschen verwenden LinkedIn auch für die Jobsuche oder um selbst geeignete Mitarbeiter oder Mitarbeiterinnen für die eigene Firma zu finden. Allein in Deutschland zählt das Netzwerk über 11 Millionen Mitglieder. In Österreich sind es etwa 1,3 Millionen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir LinkedIn auf unserer Webseite?</h3>
            <p>Wir wissen wie beschäftigt Sie sind. Da kann man nicht alle Social-Media-Kanäle einzeln verfolgen. Auch wenn es sich, wie in unserem Fall, lohnen würde. Denn immer wieder posten wir interessante News oder Berichte, die es wert sind, verbreitet zu werden. Darum haben wir auf unserer Webseite die Möglichkeit geschaffen, interessante Inhalte direkt auf LinkedIn zu teilen bzw. direkt auf unsere LinkedIn-Seite zu verweisen. Wir betrachten eingebaute Social-Plug-ins als erweiterten Service auf unserer Webseite. Die Daten, die LinkedIn sammelt, helfen uns zudem mögliche Werbemaßnahmen nur Menschen zu zeigen, die sich für unser Angebot interessieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von LinkedIn gespeichert?</h3>
            <p>Nur durch die bloße Einbindung der Social-Plug-ins speichert LinkedIn keine persönlichen Daten. LinkedIn nennt diese Daten, die durch Plug-ins generiert werden, passive Impressionen. Wenn Sie aber auf ein Social-Plug-in klicken, um beispielsweise unsere Inhalte zu teilen, speichert die Plattform personenbezogene Daten als sogenannte „aktive Impressionen“. Und zwar unabhängig, ob Sie ein LinkedIn-Konto haben oder nicht. Falls Sie angemeldet sind, werden die erhobenen Daten Ihrem Konto zugeordnet.</p>
            <p>Ihr Browser stellt eine direkte Verbindung zu den Servern von LinkedIn her, wenn Sie mit unseren Plug-ins interagieren. So protokolliert das Unternehmen verschiedene Nutzungsdaten. Neben Ihrer IP-Adresse können das beispielsweise Anmeldungsdaten, Gerätinformationen oder Infos über Ihren Internet- bzw. Mobilfunkanbieter sein. Wenn Sie LinkedIn-Dienste über Ihr Smartphone aufrufen, kann auch Ihr Standort (nachdem Sie das erlaubt haben) ermittelt werden. LinkedIn kann diese Daten in „gehashter“ Form auch an dritte Werbetreibende weitergeben. Hashing meint, ein Datensatz wird in eine Zeichenkette verwandelt. Dadurch kann man die Daten so verschlüsseln, dass Personen nicht mehr identifiziert werden können.</p>
            <p>Die meisten Daten zu Ihrem Userverhalten werden in Cookies gespeichert. Das sind kleine Text-Dateien, die meist in Ihrem Browser gesetzt werden. Weiters kann LinkedIn aber auch Web Beacons, Pixel-Tags, Anzeige-Tags und andere Geräteerkennungen benutzen.</p>
            <p>Diverse Tests zeigen auch welche Cookies gesetzt werden, wenn ein User mit einem Social-Plug-in interagiert. Die gefundenen Daten können keinen Vollständigkeitsanspruch erheben und dienen lediglich als Beispiel. Die folgenden Cookies wurden gesetzt, ohne bei LinkedIn angemeldet zu sein:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> bcookie<br />
            <strong class="adsimple-311196990">Wert:</strong> =2&amp;34aab2aa-2ae1-4d2a-8baf-c2e2d7235c16311196990-<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie ist ein sogenanntes „Browser-ID-Cookie“ und speichert folglich Ihre Identifikationsnummer (ID).<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> Nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> lang<br />
            <strong class="adsimple-311196990">Wert:</strong> v=2&amp;lang=de-de<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre voreingestellte bzw. bevorzugte Sprache.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> lidc<br />
            <strong class="adsimple-311196990">Wert:</strong> 1818367:t=1571904767:s=AQF6KNnJ0G311196990…<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird zum Routing verwendet. Routing zeichnet die Wege auf, wie Sie zu LinkedIn gekommen sind und wie Sie dort durch die Webseite navigieren.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 24 Stunden</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> rtc<br />
            <strong class="adsimple-311196990">Wert:</strong> kt0lrv3NF3x3t6xvDgGrZGDKkX<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Zu diesem Cookie konnten keine näheren Informationen in Erfahrung gebracht werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> JSESSIONID<br />
            <strong class="adsimple-311196990">Wert:</strong> ajax:3111969902900777718326218137<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Es handelt sich hier um ein Session-Cookie, das LinkedIn verwendet, um anonyme Benutzersitzungen durch den Server aufrecht zu erhalten.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> bscookie<br />
            <strong class="adsimple-311196990">Wert:</strong> &#8220;v=1&amp;201910230812…<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Bei diesem Cookie handelt es sich um ein Sicherheits-Cookie. LinkedIn beschreibt es als Secure-Browser-ID-Cookie.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> fid<br />
            <strong class="adsimple-311196990">Wert:</strong> AQHj7Ii23ZBcqAAAA…<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Zu diesem Cookie konnten keine näheren Informationen gefunden werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 7 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> LinkedIn arbeitet auch mit Drittanbietern zusammen. Darum haben wir bei unserem Test auch die beiden Google-Analytics-Cookies _ga und _gat erkannt.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Grundsätzlich behaltet LinkedIn Ihre personenbezogenen Daten so lange, wie es das Unternehmen als nötig betrachtet, um die eigenen Dienste anzubieten. LinkedIn löscht aber Ihre personenbezogenen Daten, wenn Sie Ihr Konto löschen. In manchen Ausnahmefällen behaltet LinkedIn selbst nach Ihrer Kontolöschung einige Daten in zusammengefasster und anonymisierter Form. Sobald Sie Ihr Konto löschen, können andere Personen Ihre Daten innerhalb von einem Tag nicht mehr sehen. LinkedIn löscht die Daten grundsätzlich innerhalb von 30 Tagen. LinkedIn behält allerdings Daten, wenn es aus rechtlicher Pflicht notwendig ist. Daten, die keinen Personen mehr zugeordnet werden können, bleiben auch nach Schließung des Kontos gespeichert. Die Daten werden auf verschiedenen Servern in Amerika und vermutlich auch in Europa gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. In Ihrem LinkedIn-Konto können Sie Ihre Daten verwalten, ändern und löschen. Zudem können Sie von LinkedIn auch eine Kopie Ihrer personenbezogenen Daten anfordern.</p>
            <p>So greifen Sie auf die Kontodaten in Ihrem LinkedIn-Profil zu:</p>
            <p>Klicken Sie in LinkedIn auf Ihr Profilsymbol und wählen Sie die Rubrik „Einstellungen und Datenschutz“. Klicken Sie nun auf „Datenschutz“ und dann im Abschnitt „So verwendet LinkedIn Ihre Daten auf „Ändern“. In nur kurzer Zeit können Sie ausgewählte Daten zu Ihrer Web-Aktivität und Ihrem Kontoverlauf herunterladen.</p>
            <p>Sie haben auch in Ihrem Browser die Möglichkeit, die Datenverarbeitung durch LinkedIn zu unterbinden. Wie oben bereits erwähnt, speichert LinkedIn die meisten Daten über Cookies, die in Ihrem Browser gesetzt werden. Diese Cookies können Sie verwalten, deaktivieren oder löschen. Je nachdem, welchen Browser Sie haben, funktioniert die Verwaltung etwas anders. Die Anleitungen der gängigsten Browser finden Sie hier:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Sie können auch grundsätzlich Ihren Browser dahingehend einrichten, dass Sie immer informiert werden, wenn ein Cookie gesetzt werden soll. Dann können Sie immer individuell entscheiden, ob Sie das Cookie zulassen wollen oder nicht.</p>
            <p>LinkedIn ist aktiver Teilnehmer des EU-U.S. Privacy Shield Frameworks. Dieses Framework stellt eine korrekte Datenübertragung zwischen den USA und der Europäischen Union sicher. Unter <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000L0UZAA0" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000L0UZAA0</a> erfahren Sie mehr darüber. Wir haben versucht, Ihnen die wichtigsten Informationen über die Datenverarbeitung durch LinkedIn näherzubringen. Auf <a class="adsimple-311196990" href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer">https://www.linkedin.com/legal/privacy-policy</a> erfahren Sie noch mehr über die Datenverarbeitung des Social-Media-Netzwerks LinkedIn.</p>
            <h2 class="adsimple-311196990">Pinterest Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Seite Buttons und Widgets des Social Media Netzwerks Pinterest, der Firma Pinterest Inc.,808 Brannan Street, San Francisco, CA 94103, USA.</p>
            <p>Durch den Aufruf von Seiten die solche Funktionen nutzen werden Daten (IP-Adresse, Browserdaten, Datum und Zeitpunkt, Cookies) an Pinterest übermittelt, gespeichert und ausgewertet.</p>
            <p>Die Datenschutzrichtlinien, welche Informationen Pinterest sammelt und wie sie diese verwenden finden Sie auf <a class="adsimple-311196990" href="https://policy.pinterest.com/de/privacy-policy">https://policy.pinterest.com/de/privacy-policy</a>.</p>
            <h2 class="adsimple-311196990">XING Datenschutzerklärung</h2>
            <p>Wir benutzen auf unserer Webseite Social-Plugins des Social-Media-Netzwerks Xing, der Firma Xing SE, Dammtorstraße 30, 20354 Hamburg, Deutschland. Durch diese Funktionen können Sie beispielsweise direkt über unsere Website Inhalte auf Xing teilen, sich über Xing einloggen oder interessanten Inhalten folgen. Sie erkennen die Plug-ins am Unternehmensnamen oder am Xing-Logo. Wenn Sie eine Webseite aufrufen, die ein Xing-Plug-in verwendet, können Daten an die &#8220;Xing-Server&#8221; übermittelt, gespeichert und ausgewertet werden. In dieser Datenschutzerklärung wollen wir Sie darüber informieren, um welche Daten es sich dabei handelt und wie Sie diese Datenspeicherung verwalten oder verhindern.</p>
            <h3 class="adsimple-311196990">Was ist Xing?</h3>
            <p>Xing ist ein soziales Netzwerk mit dem Hauptsitz in Hamburg. Das Unternehmen hat sich auf das Verwalten von beruflichen Kontakten spezialisiert. Das heißt, anders als bei andere Netzwerken, geht es bei Xing in erster Linie um berufliches Networking. Die Plattform wird oft für die Jobsuche verwendet oder um Mitarbeiter für das eigene Unternehmen zu finden. Darüber hinaus bietet Xing interessanten Content zu verschiedenen beruflichen Themen. Das globale Pendant dazu ist das amerikanische Unternehmen LinkedIn.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Xing auf unserer Webseite?</h3>
            <p>Es gibt mittlerweile eine Flut an Social-Media-Kanälen und uns ist durchaus bewusst, dass Ihre Zeit sehr kostbar ist. Nicht jeder Social-Media-Kanal eines Unternehmens kann genau unter die Lupe genommen werden. Daher wollen wir Ihnen das Leben so einfach wie möglich machen, damit Sie interessante Inhalte direkt über unsere Website auf Xing teilen oder folgen können. Mit solchen „Social-Plug-ins“ erweitern wir unser Service auf unserer Website. Darüber hinaus helfen uns die Daten, die von Xing gesammelt werden, auf der Plattform gezielte Werbemaßnahmen durchführen zu können. Das heißt unser Service wird nur Menschen gezeigt, die sich auch wirklich dafür interessieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Xing gespeichert?</h3>
            <p>Xing bietet den Teilen-Button, den Folgen-Button und den Log-in-Button als Plug-in für Websites an. Sobald Sie eine Seite öffnen, wo ein Social-Plug-in von Xing eingebaut ist, verbindet sich Ihr Browser mit Servern in einem von Xing verwendeten Rechenzentrum. Im Falle des Teilen-Buttons sollen – laut Xing – keine Daten gespeichert werden, die einen direkten Bezug auf eine Person herleiten könnten. Insbesondere speichert Xing keine IP-Adresse von Ihnen. Weiters werden im Zusammenhang mit dem Teilen-Button auch keine Cookies gesetzt. Somit findet auch keine Auswertung Ihres Nutzerverhaltens statt. Nähere Informationen dazu erhalten Sie über <a class="adsimple-311196990" href="https://www.xing.com/app/share%3Fop%3Ddata_protection?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.xing.com/app/share%3Fop%3Ddata_protection.</a>
            </p>
            <p>Bei den anderen Xing-Plug-ins werden erst Cookies in Ihrem Browser gesetzt, wenn Sie mit dem Plug-in interagieren bzw. darauf klicken. Hier können personenbezogene Daten wie beispielsweise Ihre IP-Adresse, Browserdaten, Datum und Zeitpunkt Ihres Seitenaufrufs bei Xing gespeichert werden. Sollten Sie ein XING-Konto haben und angemeldet sein, werden erhobene Daten Ihrem persönlichen Konto und den darin gespeicherten Daten zugeordnet.</p>
            <p>Folgende Cookies werden in Ihrem Browser gesetzt, wenn Sie auf den Folgen bzw. Log-in-Button klicken und noch nicht bei Xing eingeloggt sind. Bitte bedenken Sie, dass es sich hier um eine beispielhafte Liste handelt und wir keinen Anspruch auf Vollständigkeit erheben können:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> AMCVS_0894FF2554F733210A4C98C6%40AdobeOrg<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um Identifikationen von Websitebesuchern zu erstellen und zu speichern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> c_<br />
            <strong class="adsimple-311196990">Wert:</strong> 157c609dc9fe7d7ff56064c6de87b019311196990-8<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Zu diesem Cookie konnten wir keine näheren Informationen in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Tag</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> prevPage<br />
            <strong class="adsimple-311196990">Wert:</strong> wbm%2FWelcome%2Flogin<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert die URL der vorhergehenden Webseite, die Sie besucht haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 30 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> s_cc<br />
            <strong class="adsimple-311196990">Wert:</strong> true<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Adobe Site Catalyst Cookie bestimmt, ob Cookies im Browser grundsätzlich aktiviert sind.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> s_fid<br />
            <strong class="adsimple-311196990">Wert:</strong> 6897CDCD1013221C-39DDACC982217CD1311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um einen eindeutigen Besucher zu identifizieren.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 5 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> visitor_id<br />
            <strong class="adsimple-311196990">Wert:</strong> fe59fbe5-e9c6-4fca-8776-30d0c1a89c32<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Besucher-Cookie enthält eine eindeutige Besucher-ID und die eindeutige Kennung für Ihren Account.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong>_session_id<br />
            <strong class="adsimple-311196990">Wert: </strong>533a0a6641df82b46383da06ea0e84e7311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie erstellt eine vorübergehende Sitzungs-ID, die als In-Session-Benutzer-ID verwendet wird. Das Cookie ist absolut notwendig, um die Funktionen von Xing bereitzustellen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>Sobald Sie bei Xing eingeloggt bzw. Mitglied sind, werden definitiv weitere personenbezogene Daten erhoben, verarbeitet und gespeichert. Xing gibt auch personenbezogene Daten an Dritte weiter, wenn das für die Erfüllung eigener betriebswirtschaftlicher Zwecke nötig ist, Sie eine Einwilligung erteilt haben oder eine rechtliche Verpflichtung besteht.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Xing speichert die Daten auf verschiedenen Servern in diversen Rechenzentren. Das Unternehmen speichert diese Daten bis Sie die Daten löschen bzw. bis zur Löschung eines Nutzerkontos. Das betrifft natürlich nur User, die bereits Xing-Mitglied sind.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Auch wenn Sie kein Xing-Mitglied sind, können Sie über Ihren Browser eine mögliche Datenverarbeitung unterbinden oder nach Ihren Wünschen verwalten. Die meisten Daten werden über Cookies gespeichert. Je nachdem, welchen Browser Sie haben, funktioniert die Verwaltung etwas anders. Die Anleitungen der gängigsten Browser finden Sie hier:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Sie können auch grundsätzlich Ihren Browser dahingehend einrichten, dass Sie immer informiert werden, wenn ein Cookie gesetzt werden soll. Dann können Sie immer individuell entscheiden, ob Sie das Cookie zulassen wollen oder nicht.</p>
            <p>Wir haben versucht, Ihnen die wichtigsten Informationen über die Datenverarbeitung durch Xing näherzubringen. Auf <a class="adsimple-311196990" href="https://privacy.xing.com/de/datenschutzerklaerung?tid=311196990" target="_blank" rel="noopener noreferrer">https://privacy.xing.com/de/datenschutzerklaerung</a> erfahren Sie noch mehr über die Datenverarbeitung des Social-Media-Netzwerks Xing.</p>
            <h2 class="adsimple-311196990">Gravatar Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Website das Gravatar-Plug-in der Firma Automattic Inc. (60 29th Street #343, San Francisco, CA 94110, USA) eingebunden. Gravatar ist unter anderem bei allen WordPress-Websites automatisch aktiviert. Die Funktion ermöglicht, Userbilder (Avatars) bei veröffentlichten Beiträgen oder Kommentaren anzuzeigen, sofern die entsprechende E-Mail-Adresse bei <a class="adsimple-311196990" href="https://de.gravatar.com/?tid=311196990" target="_blank" rel="follow noopener noreferrer">www.gravatar.com</a> registriert ist.</p>
            <p>Durch diese Funktion werden Daten an die Firma Gravatar bzw. Automattic Inc. versandt, gespeichert und dort verarbeitet. In dieser Datenschutzerklärung wollen wir Sie informieren, um welche Daten es sich handelt, wie das Netzwerk diese Daten verwendet und wie Sie die Datenspeicherung verwalten bzw. unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist Gravatar?</h3>
            <p>Gravatar steht grundsätzlich für „Globally Recognized Avatar“ und damit ist ein global verfügbarer Avatar (ein Benutzerbild) gemeint, der mit der E-Mail-Adresse verbunden ist. Das Unternehmen Gravatar ist der weltweit führende Dienstleister für dieses Service. Sobald ein User auf einer Website die E-Mail-Adresse angibt, die auch bei der Firma Gravatar unter <a class="adsimple-311196990" href="https://de.gravatar.com/?tid=311196990" target="_blank" rel="follow noopener noreferrer">www.gravatar.com</a> registriert ist, wird automatisch ein zuvor hinterlegtes Bild gemeinsam mit einem veröffentlichten Beitrag oder Kommentar angezeigt.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Gravatar auf unserer Webseite?</h3>
            <p>Es wird oft über die Anonymität im Internet gesprochen. Durch einen Avatar bekommen User ein Gesicht zu den kommentierenden Personen. Zudem wird man grundsätzlich im Netz leichter erkannt und kann sich so einen gewissen Bekanntheitsgrad aufbauen. Viele User genießen die Vorzüge eines solchen Benutzerbildes und wollen auch im Netz persönlich und authentisch auftreten. Wir wollen Ihnen selbstverständlich die Möglichkeit bieten, dass Sie Ihren Gravatar auch auf unserer Website anzeigen können. Zudem sehen auch wir gerne Gesichter zu unseren kommentierenden Usern. Mit der aktivierten Gravatar-Funktion erweitern auch wir unser Service auf unserer Website. Wir wollen schließlich, dass Sie sich auf unserer Website wohl fühlen und ein umfangreiches und interessantes Angebot bekommen.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Gravatar gespeichert?</h3>
            <p>Sobald Sie beispielsweise einen Kommentar zu einem Blogbeitrag veröffentlichen, der eine E-Mailadresse erfordert, prüft WordPress, ob die E-Mail-Adresse mit einem Avatar bei Gravatar verknüpft ist. Für diese Anfrage wird Ihre E-Mail-Adresse in verschlüsselter bzw. gehashter Form samt IP-Adresse und unserer URL an die Server von Gravatar bzw. Automattic gesendet. So wird überprüft, ob diese E-Mail-Adresse bei Gravatar registriert ist.</p>
            <p>Ist das der Fall, wird das dort hinterlegte Bild (Gravatar) gemeinsam mit dem veröffentlichten Kommentar angezeigt. Wenn Sie eine E-Mail-Adresse bei Gravatar registriert haben und auf unserer Website kommentieren, werden weitere Daten an Gravatar übertragen, gespeichert und verarbeitet. Dabei handelt es sich neben IP-Adresse und Daten zum Userverhalten zum Beispiel um Browsertyp, eindeutige Gerätkennung, bevorzugte Sprache, Daten und Uhrzeit des Seiteneintritts, Betriebssystem und Informationen zum mobilen Netzwerk. Gravatar nutzt diese Informationen, um die eigenen Services und Angebote zu verbessern und bessere Einblicke zur Nutzung des eigenen Service zu erhalten.</p>
            <p>Folgende Cookies werden von Automattic gesetzt, wenn ein User für einen Kommentar eine E-Mail-Adresse verwendet, die bei Gravatar registriert ist:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> gravatar<br />
            <strong class="adsimple-311196990">Wert:</strong> 16b3191024acc05a238209d51ffcb92bdd710bd19311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Wir konnten keine genauen Informationen über das Cookie in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 50 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> is-logged-in<br />
            <strong class="adsimple-311196990">Wert: </strong>1311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert die Information, dass der User über die registrierte E-Mail-Adresse angemeldet ist.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 50 Jahren</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Automattic löscht die gesammelten Daten, wenn diese für die eigenen Dienste nicht mehr verwendet werden und das Unternehmen nicht gesetzlich dazu verpflichtet ist, die Daten aufzubewahren. Webserverprotokolle wie IP-Adresse, Browsertyp und Betriebssystem werden nach etwa 30 Tagen gelöscht. Solange verwendet Automattic die Daten, um den Verkehr auf den eigenen Webseiten (zum Beispiel alle WordPress-Seiten) zu analysieren und mögliche Probleme zu beheben. Die Daten werden auch auf amerikanischen Servern von Automattic gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Wenn Sie sich bei Gravatar mit einer E-Mail-Adresse registriert haben, können Sie dort Ihr Konto bzw. die E-Mail-Adresse jederzeit wieder löschen.</p>
            <p>Da nur beim Einsatz einer bei Gravatar registrierten E-Mail-Adresse ein Bild angezeigt wird und somit Daten zu Gravatar übertragen werden, können Sie die Übertragung Ihrer Daten zu Gravatar auch verhindern, indem Sie mit einer bei Gravatar nicht registrierten E-Mail-Adresse auf unserer Website kommentieren oder Beiträge verfassen.</p>
            <p>Mögliche Cookies, die während dem Kommentieren gesetzt werden, können Sie in Ihrem Browser verwalten, deaktivieren oder löschen. Nehmen Sie bitte nur zur Kenntnis, dass dann etwaige Kommentarfunktionen nicht mehr im vollen Ausmaß zur Verfügung stehen. Je nachdem, welchen Browser Sie benutzen, funktioniert die Verwaltung der Cookies ein bisschen anders. Die Anleitungen der gängigsten Browser finden Sie hier:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Automattic ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC</a> .<br />
            Mehr Details zur Datenschutzrichtlinie und welche Daten auf welche Art durch Gravatar erfasst werden finden Sie auf <a class="adsimple-311196990" href="https://automattic.com/privacy/?tid=311196990" target="_blank" rel="noopener noreferrer">https://automattic.com/privacy/</a>, allgemeine Informationen zu Gravatar auf <a class="adsimple-311196990" href="http://de.gravatar.com/" target="_blank" rel="noopener noreferrer">http://de.gravatar.com/</a>.</p>
            <h2 class="adsimple-311196990">ShareThis Datenschutzerklärung</h2>
            <p>Auf unserer Website haben wir Funktionen von ShareThis der Firma ShareThis Inc. (4005 Miranda Ave, Suite 100, Palo Alto, 94304 Kalifornien, USA) eingebaut. Dabei handelt es sich zum Beispiel um &#8220;Teilen&#8221;-Plug-ins verschiedener Social-Media-Kanäle. Mit Hilfe dieser Funktionen können Sie Inhalte unserer Website auf Social-Media-Kanälen teilen. Wenn Sie eine Webseite mit einer ShareThis-Funktion aufrufen, können Daten von Ihnen an das Unternehmen übertragen, gespeichert und verarbeitet werden. Mit dieser Datenschutzerklärungen erfahren Sie warum wir ShareThis verwenden, welche Daten verarbeitet werden und wie Sie diese Datenübertragung unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist ShareThis?</h3>
            <p>ShareThis ist ein Technologieunternehmen, das Websitebetreibern Tools zur Steigerung der Websitequalität anbietet. Durch die Nutzung der Social-Plugins von ShareThis können Sie Inhalte unserer Website in verschiedenen Social-Media-Kanälen wie Facebook, Twitter, Instagram und Co teilen. Das Unternehmen bietet das Teilen von Inhalten für über 40 verschiedene Kanäle an und wird von über 3 Millionen Websitebetreibern weltweit genutzt. Die von ShareThis gesammelten Daten werden auch für individuelle Werbeanzeigen genutzt.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir ShareThis auf unserer Webseite?</h3>
            <p>Wir wollen mit unserem Content überzeugen und natürlich freuen wir uns, wenn unser Content auch weiterempfohlen wird. Dann wissen wir, wir sind am richtigen Weg. Am einfachsten funktioniert das über „Share/Teilen-Buttons“ direkt auf unserer Website. Durch die Vielzahl an verschiedenen Social-Media-Kanälen kann so unser Content auch einem breiten Publikum präsentiert werden. Das hilft uns im Internet bekannter und erfolgreicher zu werden. Zudem dienen die Plug-ins auch Ihnen, weil Sie mit nur einem Klick, interessante Inhalte mit Ihrer Social-Media-Community teilen können.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von ShareThis gespeichert?</h3>
            <p>Wenn Sie Inhalte mit ShareThis teilen und Sie mit dem jeweiligen Social-Media-Konto angemeldet sind, können Daten wie beispielsweise der Besuch auf unserer Website und das Teilen von Inhalten dem Userkonto des entsprechenden Social-Media-Kanals zugeordnet werden. ShareThis verwendet Cookies, Pixel, HTTP-Header und Browser Identifier, um Daten zu Ihrem Besucherverhalten zu sammeln. Zudem werden manche dieser Daten nach einer Pseudonymisierung mit Dritten geteilt.</p>
            <p>Hier eine Liste der möglicherweise verarbeiteten Daten:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Eindeutige ID eines im Webbrowser platzierten Cookies</li>
            <li class="adsimple-311196990">Allgemeines Klickverhalten</li>
            <li class="adsimple-311196990">Adressen der besuchten Webseiten</li>
            <li class="adsimple-311196990">Suchanfragen über die ein Besucher zur Seite mit ShareThis gelangt ist</li>
            <li class="adsimple-311196990">Navigation von Webseite zu Webseite falls dies über ShareThis Dienste abgelaufen ist</li>
            <li class="adsimple-311196990">Verweildauer auf einer Webseite</li>
            <li class="adsimple-311196990">Welche Elemente angeklickt oder hervorgehoben wurden</li>
            <li class="adsimple-311196990">Die IP-Adresse des Computers oder mobilen Gerätes</li>
            <li class="adsimple-311196990">Mobile Werbe-IDs (Apple IDFA oder Google AAID)</li>
            <li class="adsimple-311196990">In HTTP-Headern oder anderen verwendeten Übertragungsprotokollen enthaltene Informationen</li>
            <li class="adsimple-311196990">Welches Programm auf dem Computer (Browser) oder welches Betriebssystem verwendet wurde (iOS)</li>
            </ul>
            <p>ShareThis verwendet Cookies, die wir im Folgenden beispielhaft auflisten. Mehr zu den ShareThis Cookies finden Sie unter <a class="adsimple-311196990" href="https://www.sharethis.com/privacy/" target="_blank" rel="noopener noreferrer">https://www.sharethis.com/privacy/</a>.</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>__unam<br />
            <strong class="adsimple-311196990">Wert: </strong>8961a7f179d1d017ac27lw87qq69V69311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie zählt die „Clicks“ und „Shares“ auf einer Webseite.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 9 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>__stid<br />
            <strong class="adsimple-311196990">Wert: </strong>aGCDwF4hjVEI+oIsABW7311196990Ag==<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie speichert Userverhalten, wie zum Beispiel die aufgerufenen Webseiten, die Navigation von Seite zu Seite und die Verweildauer auf der Webseite.<strong class="adsimple-311196990">
            <br />
            </strong>
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>__sharethis_cookie_test__<br />
            <strong class="adsimple-311196990">Wert: </strong>0<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie überwacht die „Clickstream“-Aktivität. Das bedeutet es beobachtet wo Sie auf der Webseite geklickt haben.<strong class="adsimple-311196990">
            <br />
            </strong>
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Wir können hier keinen Vollständigkeitsanspruch erheben. Welche Cookies im individuellen Fall gesetzt werden, hängt von den eingebetteten Funktionen und Ihrer Verwendung ab.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>ShareThis bewahrt gesammelte Daten für einen Zeitraum von bis zu 14 Monaten ab dem Datum der Datenerfassung auf. ShareThis-Cookies laufen 13 Monate nach der letzten Aktualisierung ab. Da ShareThis ein amerikanisches Unternehmen ist, werden Daten auf amerikanischen ShareThis-Servern übertragen und gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Wenn Sie keine Werbung mehr sehen möchten, die auf von ShareThis gesammelten Daten basiert, können Sie den Opt-out-Button auf <a class="adsimple-311196990" href="https://www.sharethis.com/privacy/?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.sharethis.com/privacy/</a> verwenden. Dabei wird ein Opt-out-Cookie gesetzt, das Sie nicht löschen dürfen, um diese Einstellung weiterhin zu behalten.</p>
            <p>Sie können Ihre Präferenzen für nutzungsbasierte Onlinewerbung auch über <a class="adsimple-311196990" href="http://www.youronlinechoices.com/at/" target="_blank" rel="noopener noreferrer">http://www.youronlinechoices.com/at/</a> im Präferenzmanagement festlegen.</p>
            <p>Weiters haben Sie auch die Möglichkeit Daten, die über Cookies gespeichert werden, in Ihrem Browser zu verwalten, zu deaktivieren oder zu löschen. Wie die Verwaltung genau funktioniert, hängt von Ihrem Browser ab. Hier finden Sie die Anleitungen zu den momentan bekanntesten Browsern.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Sie können Ihren Browser auch so einrichten, dass Sie immer informiert werden, wenn ein Cookie gesetzt werden soll.</p>
            <p>ShareThis ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000L1HMAA0&amp;status=Active" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000L1HMAA0&amp;status=Active</a>. Wenn Sie mehr über die Verarbeitung Ihrer Daten durch ShareThis wissen möchten, finden Sie alle Informationen unter <a class="adsimple-311196990" href="https://www.sharethis.com/privacy/?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.sharethis.com/privacy/</a>.</p>
            <h2 class="adsimple-311196990">AddThis Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website Plug-ins von AddThis der Firma Oracle America, Inc. (500 Oracle Parkway, Redwood Shores, CA 94065, USA). Mit diesen Plug-ins können Sie Inhalte unserer Website schnell und einfach mit anderen Menschen teilen. Wenn Sie eine Webseite mit einer AddThis-Funktion besuchen, können Daten von Ihnen an das Unternehmen AddThis übertragen, gespeichert und verarbeitet werden. Mit dieser Datenschutzerklärungen erfahren Sie warum wir AddThis verwenden, welche Daten verarbeitet werden und wie Sie diese Datenübertragung unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist AddThis?</h3>
            <p>AddThis entwickelt unter anderem Software-Tools, die auf Websites eingebunden werden, um Usern das Verbreiten von Inhalten auf verschiedenen Social-Media-Kanälen oder per E-Mail zu ermöglichen. Darüber hinaus bietet AddThis auch Funktionen, die der Websiteanalyse dienen. Die gesammelten Daten werden auch genutzt, um Internetusern interessensbezogene Werbung anzubieten. Das Service wird von mehr als 15 Millionen Websitebetreibern weltweit in Anspruch genommen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir AddThis auf unserer Webseite?</h3>
            <p>Durch die Nutzung der AddThis-Buttons können Sie interessante Inhalte unserer Webseite in verschiedenen Social-Media-Kanälen wie Facebook, Twitter, Instagram oder Pinterest teilen. Wenn Sie unsere Inhalte gut finden, freut es uns natürlich, wenn Sie diese auch mit Ihrer Social-Community teilen. Und am einfachsten geht das über die AddThis-Buttons.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von AddThis gespeichert?</h3>
            <p>Wenn Sie Inhalte mit AddThis teilen und Sie mit dem jeweiligen Social-Media-Konto angemeldet sind, können Daten wie beispielsweise der Besuch auf unserer Website und das Teilen von Inhalten dem Userkonto des entsprechenden Social-Media-Kanals zugeordnet werden. AddThis verwendet Cookies, Pixel, HTTP-Header und Browser Identifier, um Daten zu Ihrem Besucherverhalten zu sammeln. Zudem werden manche dieser Daten nach einer Pseudonymisierung mit Dritten geteilt.<br />
            Hier eine beispielhafte Auflistung der möglicherweise verarbeiteten Daten:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Eindeutige ID eines im Webbrowser platzierten Cookies</li>
            <li class="adsimple-311196990">Adresse der besuchten Webseite</li>
            <li class="adsimple-311196990">Zeitpunkt des Webseitenbesuches</li>
            <li class="adsimple-311196990">Suchanfragen über die ein Besucher zur Seite mit AddThis gelangt ist</li>
            <li class="adsimple-311196990">Verweildauer auf einer Webseite</li>
            <li class="adsimple-311196990">Die IP-Adresse des Computers oder mobilen Gerätes</li>
            <li class="adsimple-311196990">Mobile Werbe-IDs (Apple IDFA oder Google AAID)</li>
            <li class="adsimple-311196990">In HTTP-Headern oder anderen verwendeten Übertragungsprotokollen enthaltene Informationen</li>
            <li class="adsimple-311196990">Welches Programm auf dem Computer (Browser) oder welches Betriebssystem verwendet wurde (iOS)</li>
            </ul>
            <p>AddThis verwendet Cookies, die wir im Folgenden beispielhaft und auszugsweise auflisten. Mehr zu den AddThis-Cookies finden Sie unter <a class="adsimple-311196990" href="http://www.addthis.com/privacy/privacy-policy" target="_blank" rel="noopener noreferrer">http://www.addthis.com/privacy/privacy-policy</a>.</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>bt2<br />
            <strong class="adsimple-311196990">Wert:</strong> 8961a7f179d87qq69V69311196990-3<br />
            <strong class="adsimple-311196990">Verwendungszweck</strong>
            <strong class="adsimple-311196990">: </strong>Dieses Cookie wird verwendet, um Teile der besuchten Website aufzuzeichnen, um andere Teile der Website zu empfehlen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 255 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>bku<br />
            <strong class="adsimple-311196990">Wert:</strong> ra/99nTmYN+fZWX7311196990-4<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie registriert anonymisierte Benutzerdaten wie Ihre IP-Adresse, geografischen Standort, besuchte Websites und auf welche Anzeigen Sie geklickt haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 179 Tagen</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung: </strong>Bitte bedenken Sie, dass es sich hier um eine beispielhafte Liste handelt und wir keinen Anspruch auf Vollständigkeit erheben können.</p>
            <p>AddThis teilt gesammelte Informationen auch mit anderen Unternehmen. Nähere Details dazu finden Sie unter <a class="adsimple-311196990" href="http://www.addthis.com/privacy/privacy-policy#section5" target="_blank" rel="noopener noreferrer">http://www.addthis.com/privacy/privacy-policy#section5</a>. AddThis verwendet die erhaltenen Daten auch, Zielgruppen und Interessensprofile zu erstellen, um Usern im selben Werbenetzwerk interessensbezogene Werbung anzubieten.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>AddThis speichert die gesammelten Daten für 13 Monate ab der Datenerhebung. 1% der Daten werden als „Musterdatensatz“ für maximal 24 Monate aufgehoben, damit die Geschäftsverbindung bewahrt bleibt. In diesem „Musterdatensatz“ wird allerdings die direkte und indirekte Identifikation (wie Ihre IP-Adresse und Cookie-ID) gehasht. Das bedeutet, dass die persönlichen Daten ohne Zusatzinformationen nicht mehr mit Ihnen in Verbindung gebracht werden können. Da das Unternehmen AddThis ihren Hauptsitz in den USA hat, werden die gesammelte Daten auch auf amerikanischen Servern gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Wenn Sie keine Werbung mehr sehen möchten, die auf von AddThis gesammelten Daten basiert, können Sie den Opt-out-Button auf <a class="adsimple-311196990" href="http://www.addthis.com/privacy/opt-out?tid=311196990" target="_blank" rel="noopener noreferrer">http://www.addthis.com/privacy/opt-out</a> verwenden. Dabei wird ein Opt-out-Cookie gesetzt, das Sie nicht löschen dürfen, um diese Einstellung weiterhin zu behalten.</p>
            <p>Sie können Ihre Präferenzen für nutzungsbasierte Onlinewerbung auch über <a class="adsimple-311196990" href="http://www.youronlinechoices.com/at/" target="_blank" rel="noopener noreferrer">http://www.youronlinechoices.com/at/</a> im Präferenzmanagement festlegen.</p>
            <p>Eine Möglichkeit die Datenverarbeitung zu unterbinden bzw. nach Ihren Wünschen zu verwalten, bietet Ihr Browser. Je nach Browser funktioniert die Datenverarbeitung etwas anders. Hier finden Sie die Anleitungen zu den momentan bekanntesten Browsern:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>AddThis ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt00000000181AAA" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt00000000181AAA</a>. Wenn Sie mehr über die Verarbeitung Ihrer Daten durch AddThis wissen möchten, finden Sie weitere Informationen unter <a class="adsimple-311196990" href="http://www.addthis.com/privacy/privacy-policy?tid=311196990" target="_blank" rel="noopener noreferrer">http://www.addthis.com/privacy/privacy-policy</a>.</p>
            <h2 class="adsimple-311196990">YouTube Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Website YouTube-Videos eingebaut. So können wir Ihnen interessante Videos direkt auf unserer Seite präsentieren. YouTube ist ein Videoportal, das seit 2006 eine Tochterfirma von Google ist. Betrieben wird das Videoportal durch YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. Wenn Sie auf unserer Website eine Seite aufrufen, die ein YouTube-Video eingebettet hat, verbindet sich Ihr Browser automatisch mit den Servern von YouTube bzw. Google. Dabei werden (je nach Einstellungen) verschiedene Daten übertragen. Für die gesamte Datenverarbeitung im europäischen Raum ist Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) verantwortlich.</p>
            <p>Im Folgenden wollen wir Ihnen genauer erklären, welche Daten verarbeitet werden, warum wir YouTube-Videos eingebunden haben und wie Sie Ihre Daten verwalten oder löschen können.</p>
            <h3 class="adsimple-311196990">Was ist YouTube?</h3>
            <p>Auf YouTube können die User kostenlos Videos ansehen, bewerten, kommentieren und selbst hochladen. Über die letzten Jahre wurde YouTube zu einem der wichtigsten Social-Media-Kanäle weltweit. Damit wir Videos auf unserer Webseite anzeigen können, stellt YouTube einen Codeausschnitt zur Verfügung, den wir auf unserer Seite eingebaut haben.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir YouTube-Videos auf unserer Webseite?</h3>
            <p>YouTube ist die Videoplattform mit den meisten Besuchern und dem besten Content. Wir sind bemüht, Ihnen die bestmögliche User-Erfahrung auf unserer Webseite zu bieten. Und natürlich dürfen interessante Videos dabei nicht fehlen. Mithilfe unserer eingebetteten Videos stellen wir Ihnen neben unseren Texten und Bildern weiteren hilfreichen Content zur Verfügung. Zudem wird unsere Webseite auf der Google-Suchmaschine durch die eingebetteten Videos leichter gefunden. Auch wenn wir über Google Ads Werbeanzeigen schalten, kann Google – dank der gesammelten Daten – diese Anzeigen wirklich nur Menschen zeigen, die sich für unsere Angebote interessieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von YouTube gespeichert?</h3>
            <p>Sobald Sie eine unserer Seiten besuchen, die ein YouTube-Video eingebaut hat, setzt YouTube zumindest ein Cookie, das Ihre IP-Adresse und unsere URL speichert. Wenn Sie in Ihrem YouTube-Konto eingeloggt sind, kann YouTube Ihre Interaktionen auf unserer Webseite meist mithilfe von Cookies Ihrem Profil zuordnen. Dazu zählen Daten wie Sitzungsdauer, Absprungrate, ungefährer Standort, technische Informationen wie Browsertyp, Bildschirmauflösung oder Ihr Internetanbieter. Weitere Daten können Kontaktdaten, etwaige Bewertungen, das Teilen von Inhalten über Social Media oder das Hinzufügen zu Ihren Favoriten auf YouTube sein.</p>
            <p>Wenn Sie nicht in einem Google-Konto oder einem Youtube-Konto angemeldet sind, speichert Google Daten mit einer eindeutigen Kennung, die mit Ihrem Gerät, Browser oder App verknüpft sind. So bleibt beispielsweise Ihre bevorzugte Spracheinstellung beibehalten. Aber viele Interaktionsdaten können nicht gespeichert werden, da weniger Cookies gesetzt werden.</p>
            <p>In der folgenden Liste zeigen wir Cookies, die in einem Test im Browser gesetzt wurden. Wir zeigen einerseits Cookies, die ohne angemeldeten YouTube-Konto gesetzt werden. Andererseits zeigen wir Cookies, die mit angemeldetem Account gesetzt werden. Die Liste kann keinen Vollständigkeitsanspruch erheben, weil die Userdaten immer von den Interaktionen auf YouTube abhängen.</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> YSC<br />
            <strong class="adsimple-311196990">Wert:</strong> b9-CV6ojI5Y311196990-1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert eine eindeutige ID, um Statistiken des gesehenen Videos zu speichern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> PREF<br />
            <strong class="adsimple-311196990">Wert:</strong> f1=50000000<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert ebenfalls Ihre eindeutige ID. Google bekommt über PREF Statistiken, wie Sie YouTube-Videos auf unserer Webseite verwenden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 8 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> GPS<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert Ihre eindeutige ID auf mobilen Geräten, um den GPS-Standort zu tracken.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 30 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> VISITOR_INFO1_LIVE<br />
            <strong class="adsimple-311196990">Wert:</strong> 95Chz8bagyU<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie versucht die Bandbreite des Users auf unseren Webseiten (mit eingebautem YouTube-Video) zu schätzen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 8 Monaten</p>
            <p>Weitere Cookies, die gesetzt werden, wenn Sie mit Ihrem YouTube-Konto angemeldet sind:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> APISID<br />
            <strong class="adsimple-311196990">Wert:</strong> zILlvClZSkqGsSwI/AU1aZI6HY7311196990-<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um ein Profil über Ihre Interessen zu erstellen. Genützt werden die Daten für personalisierte Werbeanzeigen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CONSENT<br />
            <strong class="adsimple-311196990">Wert:</strong> YES+AT.de+20150628-20-0<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie speichert den Status der Zustimmung eines Users zur Nutzung unterschiedlicher Services von Google. CONSENT dient auch der Sicherheit, um User zu überprüfen und Userdaten vor unbefugten Angriffen zu schützen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 19 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> HSID<br />
            <strong class="adsimple-311196990">Wert:</strong> AcRwpgUik9Dveht0I<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird verwendet, um ein Profil über Ihre Interessen zu erstellen. Diese Daten helfen personalisierte Werbung anzeigen zu können.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> LOGIN_INFO<br />
            <strong class="adsimple-311196990">Wert:</strong> AFmmF2swRQIhALl6aL…<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> In diesem Cookie werden Informationen über Ihre Login-Daten gespeichert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> SAPISID<br />
            <strong class="adsimple-311196990">Wert:</strong> 7oaPxoG-pZsJuuF5/AnUdDUIsJ9iJz2vdM<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie funktioniert, indem es Ihren Browser und Ihr Gerät eindeutig identifiziert. Es wird verwendet, um ein Profil über Ihre Interessen zu erstellen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> SID<br />
            <strong class="adsimple-311196990">Wert:</strong> oQfNKjAsI311196990-<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Google-Konto-ID und Ihren letzten Anmeldezeitpunkt in digital signierter und verschlüsselter Form.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> SIDCC<br />
            <strong class="adsimple-311196990">Wert:</strong> AN0-TYuqub2JOcDTyL<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Informationen, wie Sie die Webseite nutzen und welche Werbung Sie vor dem Besuch auf unserer Seite möglicherweise gesehen haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Die Daten, die YouTube von Ihnen erhält und verarbeitet werden auf den Google-Servern gespeichert. Die meisten dieser Server befinden sich in Amerika. Unter <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="noopener noreferrer">https://www.google.com/about/datacenters/inside/locations/?hl=de</a>  sehen Sie genau wo sich die Google-Rechenzentren befinden. Ihre Daten sind auf den Servern verteilt. So sind die Daten schneller abrufbar und vor Manipulation besser geschützt.</p>
            <p>Die erhobenen Daten speichert Google unterschiedlich lang. Manche Daten können Sie jederzeit löschen, andere werden automatisch nach einer begrenzten Zeit gelöscht und wieder andere werden von Google über längere Zeit gespeichert. Einige Daten (wie Elemente aus „Meine Aktivität“, Fotos oder Dokumente, Produkte), die in Ihrem Google-Konto gespeichert sind, bleiben so lange gespeichert, bis Sie sie löschen. Auch wenn Sie nicht in einem Google-Konto angemeldet sind, können Sie einige Daten, die mit Ihrem Gerät, Browser oder App verknüpft sind, löschen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Grundsätzlich können Sie Daten im Google Konto manuell löschen. Mit der 2019 eingeführten automatische Löschfunktion von Standort- und Aktivitätsdaten werden Informationen abhängig von Ihrer Entscheidung &#8211; entweder 3 oder 18 Monate gespeichert und dann gelöscht.</p>
            <p>Unabhängig, ob Sie ein Google-Konto haben oder nicht, können Sie Ihren Browser so konfigurieren, dass Cookies von Google gelöscht bzw. deaktiviert werden. Je nach dem welchen Browser Sie verwenden, funktioniert dies auf unterschiedliche Art und Weise. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie grundsätzlich keine Cookies haben wollen, können Sie Ihren Browser so einrichten, dass er Sie immer informiert, wenn ein Cookie gesetzt werden soll. So können Sie bei jedem einzelnen Cookie entscheiden, ob Sie es erlauben oder nicht. Da YouTube ein Tochterunternehmen von Google ist, gibt es eine gemeinsame Datenschutzerklärung. Wenn Sie mehr über den Umgang mit Ihren Daten erfahren wollen, empfehlen wir Ihnen die Datenschutzerklärung unter <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de" target="_blank" rel="noopener noreferrer">https://policies.google.com/privacy?hl=de.</a>
            </p>
            <h2 class="adsimple-311196990">YouTube Abonnieren Button Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Webseite den YouTube Abonnieren Button (engl. „Subscribe-Button“) eingebaut. Sie erkennen den Button meist am klassischen YouTube-Logo. Das Logo zeigt vor rotem Hintergrund in weißer Schrift die Wörter „Abonnieren“ oder „YouTube“ und links davon das weiße „Play-Symbol“. Der Button kann aber auch in einem anderen Design dargestellt sein.</p>
            <p>Unser YouTube-Kanal bietet Ihnen immer wieder lustige, interessante oder spannende Videos. Mit dem eingebauten „Abonnieren-Button“ können Sie unseren Kanal direkt von unserer Webseite aus abonnieren und müssen nicht eigens die YouTube-Webseite aufrufen. Wir wollen Ihnen somit den Zugang zu unserem umfassenden Content so einfach wie möglich machen. Bitte beachten Sie, dass YouTube dadurch Daten von Ihnen speichern und verarbeiten kann.</p>
            <p>Wenn Sie auf unserer Seite einen eingebauten Abo-Button sehen, setzt YouTube &#8211; laut Google &#8211; mindestens ein Cookie. Dieses Cookie speichert Ihre IP-Adresse und unsere URL. Auch Informationen über Ihren Browser, Ihren ungefähren Standort und Ihre voreingestellte Sprache kann YouTube so erfahren. Bei unserem Test wurden folgende vier Cookies gesetzt, ohne bei YouTube angemeldet zu sein:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> YSC<br />
            <strong class="adsimple-311196990">Wert:</strong> b9-CV6ojI5311196990Y<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert eine eindeutige ID, um Statistiken des gesehenen Videos zu speichern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> PREF<br />
            <strong class="adsimple-311196990">Wert:</strong> f1=50000000<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert ebenfalls Ihre eindeutige ID. Google bekommt über PREF Statistiken, wie Sie YouTube-Videos auf unserer Webseite verwenden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 8 Monate</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> GPS<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie registriert Ihre eindeutige ID auf mobilen Geräten, um den GPS-Standort zu tracken.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 30 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> VISITOR_INFO1_LIVE<br />
            <strong class="adsimple-311196990">Wert:</strong> 31119699095Chz8bagyU<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie versucht die Bandbreite des Users auf unseren Webseiten (mit eingebautem YouTube-Video) zu schätzen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 8 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese Cookies wurden nach einem Test gesetzt und können nicht den Anspruch auf Vollständigkeit erheben.</p>
            <p>Wenn Sie in Ihrem YouTube-Konto angemeldet sind, kann YouTube viele Ihrer Handlungen/Interaktionen auf unserer Webseite mit Hilfe von Cookies speichern und Ihrem YouTube-Konto zuordnen. YouTube bekommt dadurch zum Beispiel Informationen wie lange Sie auf unserer Seite surfen, welchen Browsertyp Sie verwenden, welche Bildschirmauflösung Sie bevorzugen oder welche Handlungen Sie ausführen.</p>
            <p>YouTube verwendet diese Daten zum einen um die eigenen Dienstleistungen und Angebote zu verbessern, zum anderen um Analysen und Statistiken für Werbetreibende (die Google Ads verwenden) bereitzustellen.</p>
            <h2 class="adsimple-311196990">Vimeo Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website auch Videos der Firma Vimeo. Betrieben wird das Videoportal durch Vimeo LLC, 555 West 18th Street, New York, New York 10011, USA. Mit Hilfe eines Plug-ins können wir Ihnen so interessantes Videomaterial direkt auf unserer Website anzeigen. Dabei können gewissen Daten von Ihnen an Vimeo übertragen werden. In dieser Datenschutzerklärung zeigen wir Ihnen, um welche Daten es sich handelt, warum wir Vimeo verwenden und wie Sie Ihre Daten bzw. die Datenübertragung verwalten oder unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist Vimeo?</h3>
            <p>Vimeo ist eine Videoplattform, die 2004 gegründet wurde und seit 2007 das Streamen von Videos in HD-Qualität ermöglicht. Seit 2015 kann auch in 4k Ultra HD gestreamt werden. Die Nutzung des Portals ist kostenlos, es kann allerdings auch kostenpflichtiger Content veröffentlicht werden. Im Vergleich zum Marktführer YouTube, legt Vimeo vorrangig Wert auf hochwertigen Content in guter Qualität. So bietet das Portal einerseits viele künstlerische Inhalte wie Musikvideos und Kurzfilme, andererseits aber auch wissenswerte Dokumentationen zu den unterschiedlichsten Themen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Vimeo auf unserer Webseite?</h3>
            <p>Ziel unserer Webpräsenz ist es, Ihnen den bestmöglichen Content zu liefern. Und zwar so einfach zugänglich wie möglich. Erst wenn wir das geschafft haben, sind wir mit unserem Service zufrieden. Der Videodienst Vimeo unterstützt uns dieses Ziel zu erreichen. Vimeo bietet uns die Möglichkeit, Ihnen qualitativ hochwertige Inhalte direkt auf unserer Website zu präsentieren. Statt Ihnen nur einen Link zu einem interessanten Video zu geben, können Sie so das Video gleich bei uns ansehen. Das erweitert unser Service und erleichtert Ihnen den Zugang zu interessanten Inhalten. Somit bieten wir neben unseren Texten und Bildern auch Video-Content an.</p>
            <h3 class="adsimple-311196990">Welche Daten werden auf Vimeo gespeichert?</h3>
            <p>Wenn Sie auf unserer Website eine Webseite aufrufen, die ein Vimeo-Video eingebettet hat, verbindet sich Ihr Browser mit den Servern von Vimeo. Dabei kommt es zu einer Datenübertragung. Diese Daten werden auf den Vimeo-Servern gesammelt, gespeichert und verarbeitet. Unabhängig davon, ob Sie ein Vimeo-Konto haben oder nicht, sammelt Vimeo Daten über Sie. Dazu zählen Ihre IP-Adresse, technische Infos über Ihren Browsertyp, Ihr Betriebssystem oder ganz grundlegende Geräteinformationen. Weiters speichert Vimeo Informationen über welche Webseite Sie den Vimeo-Dienst nutzen und welche Handlungen (Webaktivitäten) Sie auf unserer Webseite ausführen. Zu diesen Webaktivitäten zählen beispielsweise Sitzungsdauer, Absprungrate oder auf welchen Button Sie auf unserer Webseite mit eingebauter Vimeo-Funktion geklickt haben. Diese Handlungen kann Vimeo mit Hilfe von Cookies und ähnlichen Technologien verfolgen und speichern.</p>
            <p>Falls Sie als registriertes Mitglied bei Vimeo eingeloggt sind, können meistens mehr Daten erhoben werden, da möglicherweise mehr Cookies bereits in Ihrem Browser gesetzt wurden. Zudem werden Ihre Handlungen auf unsere Webseite direkt mit Ihrem Vimeo-Account verknüpft. Um dies zu verhindern müssen Sie sich, während des &#8220;Surfens&#8221; auf unserer Webseite, von Vimeo ausloggen.</p>
            <p>Nachfolgend zeigen wir Ihnen Cookies, die von Vimeo gesetzt werden, wenn Sie auf einer Webseite mit integrierter Vimeo-Funktion, sind. Diese Liste erhebt keinen Anspruch auf Vollständigkeit und geht davon aus, dass Sie keinen Vimeo-Account haben.</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> player<br />
            <strong class="adsimple-311196990">Wert:</strong> &#8220;&#8221;<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Einstellungen, bevor Sie ein eingebettetes Vimeo-Video abspielen. Dadurch bekommen Sie beim nächsten Mal, wenn Sie ein Vimeo-Video ansehen, wieder Ihre bevorzugten Einstellungen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: vuid<br />
            <strong class="adsimple-311196990">Wert: </strong>pl1046149876.614422590311196990-4<strong class="adsimple-311196990">
            <br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>
            </strong>Dieses Cookie sammelt Informationen über Ihre Handlungen auf Webseiten, die ein Vimeo-Video eingebettet haben.<strong class="adsimple-311196990">
            <br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>
            </strong>nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese beiden Cookies werden immer gesetzt, sobald Sie sich auf einer Webseite mit einem eingebetteten Vimeo-Video befinden. Wenn Sie das Video ansehen und auf die Schaltfläche klicken, um beispielsweise das Video zu &#8220;teilen&#8221; oder zu &#8220;liken&#8221;, werden weitere Cookies gesetzt. Dabei handelt es sich auch um Drittanbieter-Cookies wie  _ga oder _gat_UA-76641-8 von Google Analytics oder _fbp von Facebook. Welche Cookies hier genau gesetzt werden, hängt von Ihrer Interaktion mit dem Video ab.</p>
            <p>Die folgende Liste zeigt einen Ausschnitt möglicher Cookies, die gesetzt werden, wenn Sie mit dem Vimeo-Video interagieren:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _abexps<br />
            <strong class="adsimple-311196990">Wert:</strong> %5B%5D<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Vimeo-Cookie hilft Vimeo, sich an die von Ihnen getroffenen Einstellungen zu erinnern. Dabei kann es sich zum Beispiel um eine voreingestellte Sprache, um eine Region oder einen Benutzernamen handeln. Im Allgemeinen speichert das Cookie Daten darüber, wie Sie Vimeo verwenden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> continuous_play_v3<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Bei diesem Cookie handelt es sich um ein Erstanbieter-Cookie von Vimeo. Das Cookie sammelt Informationen wie Sie das Vimeo-Service verwenden. Beispielsweise speichert das Cookie, wann Sie ein Video pausieren bzw. wieder abspielen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _ga<br />
            <strong class="adsimple-311196990">Wert:</strong> GA1.2.1522249635.1578401280311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Cookie ist ein Drittanbieter-Cookie von Google. Standardmäßig verwendet analytics.js das Cookie _ga, um die User-ID zu speichern. Grundsätzlich dient es zur Unterscheidung der Websitebesucher.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _gcl_au<br />
            <strong class="adsimple-311196990">Wert:</strong> 1.1.770887836.1578401279311196990-3<br />
            <strong class="adsimple-311196990">Verwendungszweck: </strong>Dieses Drittanbieter-Cookie von Google AdSense wird verwendet, um die Effizienz von Werbeanzeigen auf Websites zu verbessern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> _fbp<br />
            <strong class="adsimple-311196990">Wert:</strong> fb.1.1578401280585.310434968<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das ist ein Facebook-Cookie. Dieses Cookie wird verwendet, um Werbeanzeigen bzw. Werbeprodukte von Facebook oder anderen Werbetreibenden einzublenden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 3 Monaten</p>
            <p>Vimeo nutzt diese Daten unter anderem, um das eigene Service zu verbessern, um mit Ihnen in Kommunikation zu treten und um eigene zielgerichtete Werbemaßnahmen zu setzen. Vimeo betont auf seiner Website, dass bei eingebetteten Videos nur Erstanbieter-Cookies (also Cookies von Vimeo selbst) verwendet werden, solange man mit dem Video nicht interagiert.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Vimeo hat den Hauptsitz in White Plains im Bundesstaat New York (USA). Die Dienste werden aber weltweit angeboten. Dabei verwendet das Unternehmen Computersysteme, Datenbanken und Server in den USA und auch in anderen Ländern. Ihre Daten können somit auch auf Servern in Amerika gespeichert und verarbeitet werden. Die Daten bleiben bei Vimeo so lange gespeichert, bis das Unternehmen keinen wirtschaftlichen Grund mehr für die Speicherung hat. Dann werden die Daten gelöscht oder anonymisiert. Vimeo entspricht dem EU-U.S. Privacy Shield Framework und darf somit Daten von Usern aus der EU sammeln, nutzen und in die USA übertragen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben immer die Möglichkeit, Cookies in Ihrem Browser nach Ihren Wünschen zu verwalten. Wenn Sie beispielsweise nicht wollen, dass Vimeo Cookies setzt und so Informationen über Sie sammelt, können Sie in Ihren Browser-Einstellungen Cookies jederzeit löschen oder deaktivieren. Je nach Browser funktioniert dies ein bisschen anders. Bitte beachten Sie, dass möglicherweise nach dem Deaktivieren/Löschen von Cookies diverse Funktionen nicht mehr im vollen Ausmaß zur Verfügung stehen. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten bzw. löschen.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Falls Sie ein registriertes Vimeo-Mitglied sind, können Sie auch in den Einstellungen bei Vimeo die verwendeten Cookies verwalten.</p>
            <p>Vimeo ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt00000008V77AAE&amp;status=Active" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt00000008V77AAE&amp;status=Active</a>. Mehr über den Einsatz von Cookies bei Vimeo erfahren Sie auf <a class="adsimple-311196990" href="https://vimeo.com/cookie_policy?tid=311196990" target="_blank" rel="follow noopener noreferrer">https://vimeo.com/cookie_policy</a>, Informationen zum Datenschutz bei Vimeo können Sie auf <a class="adsimple-311196990" href="https://vimeo.com/privacy?tid=311196990" target="_blank" rel="follow noopener noreferrer">https://vimeo.com/privacy</a> nachlesen.</p>
            <h2 class="adsimple-311196990">SoundCloud Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website Funktionen (Widgets) des Social Media Netzwerks SoundCloud der Firma SoundCloud Limited, Rheinsberger Str. 76/77, 10115 Berlin, Deutschland. Sie erkennen die Widgets am bekannten orangen Logo. Durch die Verwendung von Funktionen wie beispielsweise dem Abspielen von Musik werden Daten an SoundCloud übermittelt, gespeichert und ausgewertet. In dieser Datenschutzerklärung zeigen wir Ihnen, um welche Daten es sich handelt, warum wir SoundCloud verwenden und wie Sie Ihre Daten bzw. die Datenübertragung verwalten oder unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist SoundCloud?</h3>
            <p>Das Social-Media-Netzwerk SoundCloud ist eine Online-Musikplattform, die dem Austausch und der Verteilung von Audiodateien dient. Auf SoundCloud bieten Musiker oder Podcaster ihre Audiodateien zum Downloaden an. Zudem kann man mit SoundCloud die Audiodateien auch in anderen Websites einbinden. Und genau das haben auch wir gemacht. Typisch für SoundCloud sind die grafischen Darstellungen der Audiodateien in Wellenform und die Kommentarleiste. So können angemeldete User Musikstücke bzw. Podcasts jederzeit anhören und kommentieren.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir SoundCloud auf unserer Webseite?</h3>
            <p>Unser Ziel ist es, Ihnen auf unserer Webseite den bestmöglichen Service zu liefern. Damit meinen wir nicht nur unsere Produkte oder Dienstleistungen. Zu einem gesamtheitlichen Kundenservice zählt auch, wie wohl Sie sich auf unserer Website fühlen und wie hilfreich unsere Website für Sie ist. Durch die eingebettete SoundCloud-Abspielfunktion können wir Ihnen akustischen Content direkt und frei Haus liefern. Sie müssen nicht zuerst irgendeinen Link folgen, um sich eine Audiodatei anzuhören, sondern können gleich über unsere Webseite starten.</p>
            <h3 class="adsimple-311196990">Welche Daten werden auf SoundCloud gespeichert?</h3>
            <p>Sobald Sie eine unserer Webseiten besuchen, die ein Widget (Like- oder Share-Button oder Abspielfunktion) eingebaut hat, verbindet sich Ihr Browser mit einem SoundCloud-Server. Dabei können Daten von Ihnen an SoundCloud übertragen, dort verwaltet und gespeichert werden. Zum Beispiel erfährt SoundCloud auf diese Weise Ihre IP-Adresse und welche Seite (in diesem Fall unsere) Sie wann besucht haben. Wenn Sie ein SoundCloud-Konto haben und angemeldet sind, während Sie auf unserer Webseite surfen, werden die erhobenen Daten direkt Ihrem Konto/Account zugewiesen. Das können Sie nur verhindern, indem Sie sich, während Ihres Aufenthalts auf unserer Website, von SoundCloud abmelden. Neben den oben genannten Informationen werden in den Cookies auch Daten über Ihr Userverhalten gespeichert. Wann immer Sie beispielsweise einen Button klicken, ein Musikstück abspielen oder pausieren wird diese Information in den Cookies gespeichert. Das Widget bzw. SoundCloud ist somit in der Lage, Sie zu erkennen und manchmal wird das Widget auch verwendet, um Ihnen personalisierte Inhalte zu liefern. SoundCloud verwendet nicht nur eigene Cookies, sondern auch Cookies von Drittanbietern wie Facebook oder Google Analytics. Diese Cookies dienen dem Unternehmen mehr Informationen über Ihr Verhalten auf externen Websites und der eigenen Plattform zu erhalten. Wir als Websitebetreiber bekommen durch die verwendeten Cookies von SoundCloud keine Informationen über Ihr Userverhalten. Die Datenübertragung und daher auch die Informationen zu technischen Geräten und Ihrem Verhalten auf der Webseite findet zwischen Ihnen und SoundCloud statt.</p>
            <p>Im Folgenden zeigen wir Cookies, die gesetzt wurden, wenn man auf eine Webseite geht, die SoundCloud-Funktionen eingebunden hat. Diese Liste ist nur ein Beispiel möglicher Cookies und kann keinen Anspruch auf Vollständigkeit erheben. Bei diesem Beispiel hat der User kein SoundCloud-Konto:</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>sc_anonymous_id<br />
            <strong class="adsimple-311196990">Wert:</strong> 208165-986996-398971-423805311196990-0<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie macht es erst möglich, Dateien oder andere Inhalte in Websites einzubinden und speichert eine User-ID.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 10 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:<br />
            </strong>Das Cookie sc_anonymous_id wird sofort gesetzt, wenn Sie auf einer unserer Webseiten sind, die eine Soundcloud-Funktion eingebaut hat. Dafür müssen Sie mit der Funktion noch nicht interagieren.</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>__qca<br />
            <strong class="adsimple-311196990">Wert:</strong> P0-1223379886-1579605792812311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie ist ein Drittanbieter-Cookie von Quantcast und sammelt Daten wie beispielsweise wie oft Sie die Seite besuchen oder wie lange Sie auf der Seite bleiben. Die gesammelten Informationen werden dann an SoundCloud weitergegeben.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> Sclocale<br />
            <strong class="adsimple-311196990">Wert:</strong> de<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie speichert die Spracheinstellung, die Sie voreingestellt haben.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>_soundcloud_session<br />
            <strong class="adsimple-311196990">Wert:</strong> /<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Zu diesem Cookie konnten wir keine konkreten Informationen in Erfahrung bringen.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>_session_auth_key<br />
            <strong class="adsimple-311196990">Wert:</strong> /<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Mit Hilfe des Cookies können Sitzungsinformationen (also Userverhalten) gespeichert werden und eine Client-Anfrage authentifiziert werden.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach 10 Jahren</p>
            <p>Zudem verwendet SoundCloud auch weitere Drittanbieter-Cookies wie _fbp, _ga, gid von Facebook und Google Analytics. All die in den Cookies gespeicherten Informationen nutzt SoundCloud, um die eigenen Dienste zu verbessern und personalisierte Werbung auszuspielen.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Grundsätzlich bleiben die erhobenen Daten bei SoundCloud gespeichert, solange ein User-Konto besteht oder es für SoundCloud nötig ist, um die betriebswirtschaftlichen Ziele zu erreichen. Wie lange genau gespeichert wird ändert sich abhängig vom Kontext und den rechtlichen Verpflichtungen. Auch wenn Sie kein Konto haben und personenbezogene Daten gespeichert wurden, haben Sie das Recht die Datenlöschung zu beantragen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Wenn Sie ein SoundCloud-Konto haben, können Sie über „Einstellungen“ die Datenverarbeitung verwalten bzw. Ihr ganzes Konto löschen. Sie können aber auch Cookies in Ihrem Browser genau nach Ihren Ansprüchen verwalten, löschen oder deaktivieren. Die Herangehensweise hängt immer von Ihrem verwendeten Browser ab. Falls Sie sich zum Löschen oder Deaktivieren von Cookies entscheiden, nehmen Sie bitte zu Kenntnis, dass dann möglicherweise nicht mehr alle Funktionen verfügbar sind. In den folgenden Anleitungen steht, wie Sie Cookies in Ihrem Browser verwalten, löschen oder deaktivieren können.</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wir hoffen, wir haben Ihnen einen guten Überblick über den Datenverkehr durch SoundCloud geliefert. Wenn Sie mehr über die Datenschutzrichtlinien und dem allgemeinen Umgang mit Daten durch SoundCloud erfahren wollen, empfehlen wir Ihnen die Datenschutzerklärung des Unternehmens unter <a class="adsimple-311196990" href="https://soundcloud.com/pages/privacy?tid=311196990" target="_blank" rel="noopener noreferrer">https://soundcloud.com/pages/privacy</a>.</p>
            <h2 class="adsimple-311196990">Zoom Datenschutzerklärung</h2>
            <p>Wir verwenden für unsere Website das Videokonferenz-Tool Zoom des amerikanischen Software-Unternehmens Zoom Video Communications. Der Firmenhauptsitz ist im kalifornischen San Jose, 55 Almaden Boulevard, 6th Floor, CA 95113. Dank „Zoom“ können wir mit Kunden, Geschäftspartnern, Klienten und auch Mitarbeitern ganz einfach und ohne Software-Installation eine Videokonferenz abhalten. In dieser Datenschutzerklärung gehen wir näher auf das Service ein und informieren Sie über die wichtigsten datenschutzrelevanten Aspekte.</p>
            <h3 class="adsimple-311196990">Was ist Zoom?</h3>
            <p>Zoom ist eine der weltweit bekanntesten Videokonferenzlösungen. Mit dem Dienst „Zoom Meetings“ können wir beispielsweise mit Ihnen, aber auch mit Mitarbeitern oder anderen Usern über einen digitalen Konferenzraum eine Online-Videokonferenz abhalten. So können wir sehr einfach digital in Kontakt treten, uns über diverse Themen austauschen, Textnachrichten schicken oder auch telefonieren. Weiters kann man über Zoom auch den Bildschirm teilen, Dateien austauschen und ein Whiteboard nutzen.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Zoom auf unserer Webseite?</h3>
            <p>Uns ist es wichtig, dass wir mit Ihnen schnell und unkompliziert kommunizieren können. Und genau diese Möglichkeit bietet uns Zoom. Das Softwareprogramm funktioniert auch direkt über einen Browser. Das heißt wir können Ihnen einfach einen Link schicken und schon mit der Videokonferenz starten. Zudem sind natürlich auch Zusatzfunktionen wie Screensharing oder das Austauschen von Dateien sehr praktisch.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Zoom gespeichert?</h3>
            <p>Wenn Sie Zoom verwenden, werden auch Daten von Ihnen erhoben, damit Zoom ihre Dienste bereitstellen kann. Das sind einerseits Daten, die Sie dem Unternehmen bewusst zur Verfügung stellen. Dazu gehören zum Beispiel Name, Telefonnummer oder Ihre E-Mail-Adresse. Es werden aber auch Daten automatisch an Zoom übermittelt und gespeichert. Hierzu zählen beispielsweise technische Daten Ihres Browsers oder Ihre IP-Adresse. Im Folgenden gehen wir genauer auf die Daten ein, die Zoom von Ihnen erheben und speichern kann:</p>
            <p>Wenn Sie Daten wie Ihren Namen, Ihren Benutzernamen, Ihre E-Mail-Adresse oder Ihre Telefonnummer angeben, werden diese Daten bei Zoom gespeichert. Inhalte, die Sie während der Zoom-Nutzung hochladen werden ebenfalls gespeichert. Dazu zählen beispielsweise Dateien oder Chatprotokolle.</p>
            <p>Zu den technischen Daten, die Zoom automatisch speichert, zählen neben der oben bereits erwähnten IP-Adresse auch die MAC-Adresse, weitere Geräte-IDs, Gerätetyp, welches Betriebssystem Sie nutzen, welchen Client Sie nutzen, Kameratyp, Mikrofon- und Lautsprechertyp. Auch Ihr ungefährer Standort wird bestimmt und gespeichert. Des Weiteren speichert Zoom auch Informationen darüber wie Sie den Dienst nutzen. Also beispielsweise ob Sie via Desktop oder Smartphone „zoomen“, ob Sie einen Telefonanruf oder VoIP nutzen, ob Sie mit oder ohne Video teilnehmen oder ob Sie ein Passwort anfordern. Zoom zeichnet auch sogenannte Metadaten wie Dauer des Meetings/Anrufs, Beginn und Ende der Meetingteilnahme, Meetingname und Chatstatus auf.</p>
            <p>Zoom erwähnt in der eigenen Datenschutzerklärung, dass das Unternehmen keine Werbecookies oder Tracking-Technologien für Ihre Dienste verwenden. Nur auf den eigenen Marketing-Websites wie etwa <a class="adsimple-311196990" href="https://www.zoom.us/de-de/home.html" target="_blank" rel="follow noopener noreferrer">www.zoom.us</a> werden diese Trackingmethoden genutzt. Zoom verkauft personenbezogenen Daten nicht weiter und nutzt diese auch nicht für Werbezwecke.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Zoom gibt diesbezüglich keinen konkreten Zeitrahmen bekannt, sondern betont, dass die erhobenen Daten solange gespeichert bleiben, wie es zur Bereitstellung der Dienste bzw. für die eigenen Zwecke nötig ist. Länger werden die Daten nur gespeichert, wenn dies aus rechtlichen Gründen gefordert wird.</p>
            <p>Grundsätzlich speichert Zoom die erhobenen Daten auf amerikanischen Servern, aber Daten können weltweit auf unterschiedlichen Rechenzentren eintreffen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Wenn Sie nicht wollen, dass Daten während des Zoom-Meetings gespeichert werden, müssen Sie auf das Meeting verzichten. Sie haben aber auch immer das Recht und die Möglichkeit all Ihre personenbezogenen Daten löschen zu lassen. Falls Sie ein Zoom-Konto haben, finden Sie unter <a class="adsimple-311196990" href="https://support.zoom.us/hc/en-us/articles/201363243-How-Do-I-Delete-Terminate-My-Account" target="_blank" rel="follow noopener noreferrer">https://support.zoom.us/hc/en-us/articles/201363243-How-Do-I-Delete-Terminate-My-Account</a> eine Anleitung wie Sie Ihr Konto löschen können.</p>
            <p>Zoom Video Communications ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000TNkCAAW&amp;status=Active" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000TNkCAAW&amp;status=Active</a>.<br />
            Wir hoffen Ihnen einen Überblick über die Datenverarbeitung durch Zoom geboten zu haben. Es kann natürlich immer auch vorkommen, dass sich die Datenschutzrichtlinien des Unternehmens ändern. Daher empfehlen wir Ihnen für mehr Informationen auch die Datenschutzerklärung von Zoom unter <a class="adsimple-311196990" href="https://zoom.us/de-de/privacy.html?tid=311196990" target="_blank" rel="noopener noreferrer">https://zoom.us/de-de/privacy.html</a>.</p>
            <h2 class="adsimple-311196990">AdSimple Cookie Manager Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website den AdSimple Cookie Manager des Softwareentwicklungs- und Online-Marketing Unternehmens AdSimple GmbH, Fabriksgasse 20, 2230 Gänserndorf. Der AdSimple Cookie Manager bietet uns unter anderem die Möglichkeit, Ihnen einen umfangreichen und datenschutzkonformen Cookie-Hinweis zu liefern, damit Sie selbst entscheiden können, welche Cookies Sie zulassen und welche nicht. Durch die Verwendung dieser Software werden Daten von Ihnen an AdSimple gesendet und gespeichert. In dieser Datenschutzerklärung informieren wir Sie, warum wir den AdSimple Cookie Manager verwenden, welche Daten übertragen und gespeichert werden und wie Sie diese Datenübertragung verhindern können.</p>
            <h3 class="adsimple-311196990">Was ist der AdSimple Cookie Manager?</h3>
            <p>Der AdSimple Cookie Manager ist eine Software, die unsere Website scannt und alle vorhandenen Cookies identifiziert und kategorisiert. Zudem werden Sie als Websitebesucher über ein Cookie Hinweis Script über die Verwendung von Cookies informiert und entscheiden selbst welche Cookies Sie zulassen und welche nicht.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir den AdSimple Cookie Manager auf unserer Website?</h3>
            <p>Wir wollen Ihnen maximale Transparenz im Bereich Datenschutz bieten. Um das zu gewährleisten, müssen wir zuerst genau wissen, welche Cookies im Laufe der Zeit auf unserer Website gelandet sind. Dadurch, dass der Cookie Manager von AdSimple regelmäßig unsere Website scannt und alle Cookies ausfindig macht, haben wir die volle Kontrolle über diese Cookies und können so DSGVO-konform handeln. Wir können Sie dadurch über die Nutzung der Cookies auf unserer Website genau informieren. Weiters bekommen Sie stets einen aktuellen und datenschutzkonformen Cookie-Hinweis und entscheiden per Checkbox-System selbst, welche Cookies Sie akzeptieren bzw. blockieren.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von dem AdSimple Cookie Manager gespeichert?</h3>
            <p>Wenn Sie Cookies auf unserer Website zustimmen, wird folgendes Cookie von dem AdSimple Cookie Manager gesetzt:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> acm_status<br />
            <strong class="adsimple-311196990">Wert:</strong> &#8220;:true,&#8221;statistik&#8221;:true,&#8221;marketing&#8221;:true,&#8221;socialmedia&#8221;:true,&#8221;einstellungen&#8221;:true}<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> In diesem Cookie wird Ihr Zustimmungsstatus, gespeichert. Dadurch kann unsere Website auch bei zukünftigen Besuchen den aktuellen Status lesen und befolgen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Alle Daten, die durch den AdSimple Cookie Manager erhoben werden, werden ausschließlich innerhalb der Europäischen Union übertragen und gespeichert. Die erhobenen Daten werden auf den Servern von AdSimple bei der Hetzner GmbH in Deutschland gespeichert. Zugriff auf diese Daten hat ausschließlich die AdSimple GmbH und die Hetzner GmbH.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Die Datenerfassung und Speicherung können Sie beispielsweise verhindern, indem Sie über das Cookie-Hinweis-Script die Verwendung von Cookies ablehnen. Eine weitere Möglichkeit die Datenverarbeitung zu unterbinden bzw. nach Ihren Wünschen zu verwalten, bietet Ihr Browser. Je nach Browser funktioniert die Cookie-Verwaltung etwas anders. Hier finden Sie die Anleitungen zu den momentan bekanntesten Browsern:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wir hoffen, wir haben Ihnen einen guten Überblick über den Datenverkehr und die Datenverarbeitung durch den AdSimple Cookie Manager geliefert. Wenn Sie mehr über dieses Tool erfahren wollen, empfehlen wir Ihnen die Beschreibungsseite auf <a class="adsimple-311196990" href="https://www.adsimple.at/adsimple-cookie-manager/?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.adsimple.at/adsimple-cookie-manager/.</a>
            </p>
            <h2 class="adsimple-311196990">Google reCAPTCHA Datenschutzerklärung</h2>
            <p>Unser oberstes Ziel ist es, unsere Webseite für Sie und für uns bestmöglich zu sichern und zu schützen. Um das zu gewährleisten, verwenden wir Google reCAPTCHA der Firma Google Inc. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. Mit reCAPTCHA können wir feststellen, ob Sie auch wirklich ein Mensch aus Fleisch und Blut sind und kein Roboter oder eine andere Spam-Software. Unter Spam verstehen wir jede, auf elektronischen Weg, unerwünschte Information, die uns ungefragter Weise zukommt. Bei den klassischen CAPTCHAS mussten Sie zur Überprüfung meist Text- oder Bildrätsel lösen. Mit reCAPTCHA von Google müssen wir Sie meist nicht mit solchen Rätseln belästigen. Hier reicht es in den meisten Fällen, wenn Sie einfach ein Häkchen setzen und so bestätigen, dass Sie kein Bot sind. Mit der neuen Invisible reCAPTCHA Version müssen Sie nicht mal mehr ein Häkchen setzen. Wie das genau funktioniert und vor allem welche Daten dafür verwendet werden, erfahren Sie im Verlauf dieser Datenschutzerklärung.</p>
            <h3 class="adsimple-311196990">Was ist reCAPTCHA?</h3>
            <p>reCAPTCHA ist ein freier Captcha-Dienst von Google, der Webseiten vor Spam-Software und den Missbrauch durch nicht-menschliche Besucher schützt. Am häufigsten wird dieser Dienst verwendet, wenn Sie Formulare im Internet ausfüllen. Ein Captcha-Dienst ist eine Art automatischer Turing-Test, der sicherstellen soll, dass eine Handlung im Internet von einem Menschen und nicht von einem Bot vorgenommen wird. Im klassischen Turing-Test (benannt nach dem Informatiker Alan Turing) stellt ein Mensch die Unterscheidung zwischen Bot und Mensch fest. Bei Captchas übernimmt das auch der Computer bzw. ein Softwareprogramm. Klassische Captchas arbeiten mit kleinen Aufgaben, die für Menschen leicht zu lösen sind, doch für Maschinen erhebliche Schwierigkeiten aufweisen. Bei reCAPTCHA müssen Sie aktiv keine Rätsel mehr lösen. Das Tool verwendet moderne Risikotechniken, um Menschen von Bots zu unterscheiden. Hier müssen Sie nur noch das Textfeld „Ich bin kein Roboter“ ankreuzen bzw. bei Invisible reCAPTCHA ist selbst das nicht mehr nötig. Bei reCAPTCHA wird ein JavaScript-Element in den Quelltext eingebunden und dann läuft das Tool im Hintergrund und analysiert Ihr Benutzerverhalten. Aus diesen Useraktionen berechnet die Software einen sogenannten Captcha-Score. Google berechnet mit diesem Score schon vor der Captcha-Eingabe wie hoch die Wahrscheinlichkeit ist, dass Sie ein Mensch sind. reCAPTCHA bzw. Captchas im Allgemeinen kommen immer dann zum Einsatz, wenn Bots gewisse Aktionen (wie z.B. Registrierungen, Umfragen usw.) manipulieren oder missbrauchen könnten.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir reCAPTCHA auf unserer Webseite?</h3>
            <p>Wir wollen nur Menschen aus Fleisch und Blut auf unserer Seite begrüßen. Bots oder Spam-Software unterschiedlichster Art dürfen getrost zuhause bleiben. Darum setzen wir alle Hebel in Bewegung, uns zu schützen und die bestmögliche Benutzerfreundlichkeit für Sie anzubieten. Aus diesem Grund verwenden wir Google reCAPTCHA der Firma Google. So können wir uns ziemlich sicher sein, dass wir eine „botfreie“ Webseite bleiben. Durch die Verwendung von reCAPTCHA werden Daten an Google übermittelt, um festzustellen, ob Sie auch wirklich ein Mensch sind. reCAPTCHA dient also der Sicherheit unserer Webseite und in weiterer Folge damit auch Ihrer Sicherheit. Zum Beispiel könnte es ohne reCAPTCHA passieren, dass bei einer Registrierung ein Bot möglichst viele E-Mail-Adressen registriert, um im Anschluss Foren oder Blogs mit unerwünschten Werbeinhalten „zuzuspamen“. Mit reCAPTCHA können wir solche Botangriffe vermeiden.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von reCAPTCHA gespeichert?</h3>
            <p>reCAPTCHA sammelt personenbezogene Daten von Usern, um festzustellen, ob die Handlungen auf unserer Webseite auch wirklich von Menschen stammen. Es kann also die IP-Adresse und andere Daten, die Google für den reCAPTCHA-Dienst benötigt, an Google versendet werden. IP-Adressen werden innerhalb der Mitgliedstaaten der EU oder anderer Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum fast immer zuvor gekürzt, bevor die Daten auf einem Server in den USA landen. Die IP-Adresse wird nicht mit anderen Daten von Google kombiniert, sofern Sie nicht während der Verwendung von reCAPTCHA mit Ihrem Google-Konto angemeldet sind. Zuerst prüft der reCAPTCHA-Algorithmus, ob auf Ihrem Browser schon Google-Cookies von anderen Google-Diensten (YouTube. Gmail usw.) platziert sind. Anschließend setzt reCAPTCHA ein zusätzliches Cookie in Ihrem Browser und erfasst einen Schnappschuss Ihres Browserfensters.</p>
            <p>Die folgende Liste von gesammelten Browser- und Userdaten, hat nicht den Anspruch auf Vollständigkeit. Vielmehr sind es Beispiele von Daten, die nach unserer Erkenntnis, von Google verarbeitet werden.</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Referrer URL (die Adresse der Seite von der der Besucher kommt)</li>
            <li class="adsimple-311196990">IP-Adresse (z.B. 256.123.123.1)</li>
            <li class="adsimple-311196990">Infos über das Betriebssystem (die Software, die den Betrieb Ihres Computers ermöglicht. Bekannte Betriebssysteme sind Windows, Mac OS X oder Linux)</li>
            <li class="adsimple-311196990">Cookies (kleine Textdateien, die Daten in Ihrem Browser speichern)</li>
            <li class="adsimple-311196990">Maus- und Keyboardverhalten (jede Aktion, die Sie mit der Maus oder der Tastatur ausführen wird gespeichert)</li>
            <li class="adsimple-311196990">Datum und Spracheinstellungen (welche Sprache bzw. welches Datum Sie auf Ihrem PC voreingestellt haben wird gespeichert)</li>
            <li class="adsimple-311196990">Alle Javascript-Objekte (JavaScript ist eine Programmiersprache, die Webseiten ermöglicht, sich an den User anzupassen. JavaScript-Objekte können alle möglichen Daten unter einem Namen sammeln)</li>
            <li class="adsimple-311196990">Bildschirmauflösung (zeigt an aus wie vielen Pixeln die Bilddarstellung besteht)</li>
            </ul>
            <p>Unumstritten ist, dass Google diese Daten verwendet und analysiert noch bevor Sie auf das Häkchen „Ich bin kein Roboter“ klicken. Bei der Invisible reCAPTCHA-Version fällt sogar das Ankreuzen weg und der ganze Erkennungsprozess läuft im Hintergrund ab. Wie viel und welche Daten Google genau speichert, erfährt man von Google nicht im Detail.</p>
            <p>Folgende Cookies werden von reCAPTCHA verwendet: Hierbei beziehen wir uns auf die reCAPTCHA Demo-Version von Google unter <a class="adsimple-311196990" href="https://www.google.com/recaptcha/api2/demo" target="_blank" rel="noopener noreferrer">https://www.google.com/recaptcha/api2/demo</a>. All diese Cookies benötigen zu Trackingzwecken eine eindeutige Kennung. Hier ist eine Liste an Cookies, die Google reCAPTCHA auf der Demo-Version gesetzt hat:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> IDE<br />
            <strong class="adsimple-311196990">Wert:</strong> WqTUmlnmv_qXyi_DGNPLESKnRNrpgXoy1K-pAZtAkMbHI-311196990-8<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird von der Firma DoubleClick (gehört auch Google) gesetzt, um die Aktionen eines Users auf der Webseite im Umgang mit Werbeanzeigen zu registrieren und zu melden. So kann die Werbewirksamkeit gemessen und entsprechende Optimierungsmaßnahmen getroffen werden. IDE wird in Browsern unter der Domain doubleclick.net gespeichert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> 1P_JAR<br />
            <strong class="adsimple-311196990">Wert:</strong> 2019-5-14-12<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie sammelt Statistiken zur Webseite-Nutzung und misst Conversions. Eine Conversion entsteht z.B., wenn ein User zu einem Käufer wird. Das Cookie wird auch verwendet, um Usern relevante Werbeanzeigen einzublenden. Weiters kann man mit dem Cookie vermeiden, dass ein User dieselbe Anzeige mehr als einmal zu Gesicht bekommt.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Monat</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> ANID<br />
            <strong class="adsimple-311196990">Wert:</strong> U7j1v3dZa3111969900xgZFmiqWppRWKOr<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Viele Infos konnten wir über dieses Cookie nicht in Erfahrung bringen. In der Datenschutzerklärung von Google wird das Cookie im Zusammenhang mit „Werbecookies“ wie z. B. &#8220;DSID&#8221;, &#8220;FLC&#8221;, &#8220;AID&#8221;, &#8220;TAID&#8221; erwähnt. ANID wird unter Domain google.com gespeichert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 9 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CONSENT<br />
            <strong class="adsimple-311196990">Wert: </strong>YES+AT.de+20150628-20-0<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie speichert den Status der Zustimmung eines Users zur Nutzung unterschiedlicher Services von Google. CONSENT dient auch der Sicherheit, um User zu überprüfen, Betrügereien von Anmeldeinformationen zu verhindern und Userdaten vor unbefugten Angriffen zu schützen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 19 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> NID<br />
            <strong class="adsimple-311196990">Wert:</strong> 0WmuWqy311196990zILzqV_nmt3sDXwPeM5Q<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> NID wird von Google verwendet, um Werbeanzeigen an Ihre Google-Suche anzupassen. Mit Hilfe des Cookies „erinnert“ sich Google an Ihre meist eingegebenen Suchanfragen oder Ihre frühere Interaktion mit Anzeigen. So bekommen Sie immer maßgeschneiderte Werbeanzeigen. Das Cookie enthält eine einzigartige ID, um persönliche Einstellungen des Users für Werbezwecke zu sammeln.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 6 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> DV<br />
            <strong class="adsimple-311196990">Wert:</strong> gEAABBCjJMXcI0dSAAAANbqc311196990-4<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Sobald Sie das „Ich bin kein Roboter“-Häkchen angekreuzt haben, wird dieses Cookie gesetzt. Das Cookie wird von Google Analytics für personalisierte Werbung verwendet. DV sammelt Informationen in anonymisierter Form und wird weiters benutzt, um User-Unterscheidungen zu treffen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 10 Minuten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung: </strong>Diese Aufzählung kann keinen Anspruch auf Vollständigkeit erheben, da Google erfahrungsgemäß die Wahl ihrer Cookies immer wieder auch verändert.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Durch das Einfügen von reCAPTCHA werden Daten von Ihnen auf den Google-Server übertragen. Wo genau diese Daten gespeichert werden, stellt Google, selbst nach wiederholtem Nachfragen, nicht klar dar. Ohne eine Bestätigung von Google erhalten zu haben, ist davon auszugehen, dass Daten wie Mausinteraktion, Verweildauer auf der Webseite oder Spracheinstellungen auf den europäischen oder amerikanischen Google-Servern gespeichert werden. Die IP-Adresse, die Ihr Browser an Google übermittelt, wird grundsätzlich nicht mit anderen Google-Daten aus weiteren Google-Diensten zusammengeführt. Wenn Sie allerdings während der Nutzung des reCAPTCHA-Plug-ins bei Ihrem Google-Konto angemeldet sind, werden die Daten zusammengeführt.<strong class="adsimple-311196990"> </strong>Dafür gelten die abweichenden Datenschutzbestimmungen der Firma Google.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Wenn Sie wollen, dass über Sie und über Ihr Verhalten keine Daten an Google übermittelt werden, müssen Sie sich, bevor Sie unsere Webseite besuchen bzw. die reCAPTCHA-Software verwenden, bei Google vollkommen ausloggen und alle Google-Cookies löschen. Grundsätzlich werden die Daten sobald Sie unsere Seite aufrufen automatisch an Google übermittelt. Um diese Daten wieder zu löschen, müssen Sie den Google-Support auf  <a class="adsimple-311196990" href="https://support.google.com/?hl=de&amp;tid=311196990" target="_blank" rel="noopener">https://support.google.com/?hl=de&amp;tid=311196990</a> kontaktieren.</p>
            <p>Wenn Sie also unsere Webseite verwenden, erklären Sie sich einverstanden, dass Google LLC und deren Vertreter automatisch Daten erheben, bearbeiten und nutzen.</p>
            <p>Etwas mehr über reCAPTCHA erfahren Sie auf der Webentwickler-Seite von Google auf <a class="adsimple-311196990" href="https://developers.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">https://developers.google.com/recaptcha/</a>. Google geht hier zwar auf die technische Entwicklung der reCAPTCHA näher ein, doch genaue Informationen über Datenspeicherung und datenschutzrelevanten Themen sucht man auch dort vergeblich. Eine gute Übersicht über die grundsätzliche Verwendung von Daten bei Google finden Sie in der hauseigenen Datenschutzerklärung auf <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de&amp;tid=311196990" target="_blank" rel="noopener noreferrer">https://www.google.com/intl/de/policies/privacy/</a>.</p>
            <h2 class="adsimple-311196990">Benutzerdefinierte Google Suche Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Website das Google-Plug-in zur benutzerdefinierten Suche eingebunden. Google ist die größte und bekannteste Suchmaschine weltweit und wird von dem US-amerikanische Unternehmen Google Inc. betrieben. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) verantwortlich. Durch die benutzerdefinierte Google Suche können Daten von Ihnen an Google übertragen werden. In dieser Datenschutzerklärung informieren wir Sie, warum wir dieses Plug-in verwenden, welche Daten verarbeitet werden und wie Sie diese Datenübertragung verwalten oder unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist die benutzerdefinierte Google Suche?</h3>
            <p>Das Plug-in zur benutzerdefinierten Google Suche ist eine Google-Suchleiste direkt auf unserer Website. Die Suche findet wie auf <a class="adsimple-311196990" href="https://www.google.com?tid=311196990" target="_blank" rel="follow noopener">www.google.com</a> statt, nur fokussieren sich die Suchergebnisse auf unsere Inhalte und Produkte bzw. auf einen eingeschränkten Suchkreis.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir die benutzerdefinierte Google Suche auf unserer Webseite?</h3>
            <p>Eine Website mit vielen interessanten Inhalten wird oft so groß, dass man unter Umständen den Überblick verliert. Über die Zeit hat sich auch bei uns viel wertvolles Material angesammelt und wir wollen als Teil unserer Dienstleistung, dass Sie unsere Inhalte so schnell und einfach wie möglich finden. Durch die benutzerdefinierte Google-Suche wird das Finden von interessanten Inhalten zu einem Kinderspiel. Das eingebaute Google-Plug-in verbessert insgesamt die Qualität unserer Website und macht Ihnen das Suchen leichter.</p>
            <h3 class="adsimple-311196990">Welche Daten werden durch die benutzerdefinierte Google Suche gespeichert?</h3>
            <p>Durch die benutzerdefinierte Google-Suche werden nur Daten von Ihnen an Google übertragen, wenn Sie die auf unserer Website eingebaute Google-Suche aktiv verwenden. Das heißt, erst wenn Sie einen Suchbegriff in die Suchleiste eingeben und dann diesen Begriff bestätigen (z.B. auf „Enter“ klicken) wird neben dem Suchbegriff auch Ihre IP-Adresse an Google gesandt, gespeichert und dort verarbeitet. Anhand der gesetzten Cookies (wie z.B. 1P_JAR) ist davon auszugehen, dass Google auch Daten zur Webseiten-Nutzung erhält. Wenn Sie während Ihrem Besuch auf unserer Webseite, über die eingebaute Google-Suchfunktion, Inhalte suchen und gleichzeitig mit Ihrem Google-Konto angemeldet sind, kann Google die erhobenen Daten auch Ihrem Google-Konto zuordnen. Als Websitebetreiber haben wir keinen Einfluss darauf, was Google mit den erhobenen Daten macht bzw. wie Google die Daten verarbeitet.</p>
            <p>Folgende Cookie werden in Ihrem Browser gesetzt, wenn Sie die benutzerdefinierte Google Suche verwenden und nicht mit einem Google-Konto angemeldet sind:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> 1P_JAR<br />
            <strong class="adsimple-311196990">Wert:</strong> 2020-01-27-13311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie sammelt Statistiken zur Website-Nutzung und misst Conversions. Eine Conversion entsteht zum Beispiel, wenn ein User zu einem Käufer wird. Das Cookie wird auch verwendet, um Usern relevante Werbeanzeigen einzublenden.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Monat</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CONSENT<br />
            <strong class="adsimple-311196990">Wert:</strong> WP.282f52311196990-9<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie speichert den Status der Zustimmung eines Users zur Nutzung unterschiedlicher Services von Google. CONSENT dient auch der Sicherheit, um User zu überprüfen und Userdaten vor unbefugten Angriffen zu schützen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 18 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> NID<br />
            <strong class="adsimple-311196990">Wert:</strong> 196=pwIo3B5fHr-8<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> NID wird von Google verwendet, um Werbeanzeigen an Ihre Google-Suche anzupassen. Mit Hilfe des Cookies „erinnert“ sich Google an Ihre eingegebenen Suchanfragen oder Ihre frühere Interaktion mit Anzeigen. So bekommen Sie immer maßgeschneiderte Werbeanzeigen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 6 Monaten</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Diese Aufzählung kann keinen Anspruch auf Vollständigkeit erheben, da Google die Wahl ihrer Cookies immer wieder auch verändert.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Die Google-Server sind auf der ganzen Welt verteilt. Da es sich bei Google um ein amerikanisches Unternehmen handelt, werden die meisten Daten auf amerikanischen Servern gespeichert. Unter <a class="adsimple-311196990" href="https://www.google.com/about/datacenters/inside/locations/?hl=de" target="_blank" rel="follow noopener">https://www.google.com/about/datacenters/inside/locations/?hl=de</a> sehen Sie genau, wo die Google-Server stehen.<br />
            Ihre Daten werden auf verschiedenen physischen Datenträgern verteilt. Dadurch sind die Daten schneller abrufbar und vor möglichen Manipulationen besser geschützt. Google hat auch entsprechende Notfallprogramme für Ihre Daten. Wenn es beispielsweise bei Google interne technische Probleme gibt und dadurch Server nicht mehr funktionieren, bleibt das Risiko einer Dienstunterbrechung und eines Datenverlusts dennoch gering.<br />
            Je nach dem um welche Daten es sich handelt, speichert Google diese unterschiedlich lange. Manche Daten können Sie selbst löschen, andere werden von Google automatisch gelöscht oder anonymisiert. Es gibt aber auch Daten, die Google länger speichert, wenn dies aus juristischen oder geschäftlichen Gründen erforderlich ist.</p>
            <h3 class="adsimple-311196990">Wie kann ich meinen Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Nach dem Datenschutzrecht der Europäischen Union haben Sie das Recht, Auskunft über Ihre Daten zu erhalten, sie zu aktualisieren, zu löschen oder einzuschränken. Es gibt einige Daten, die Sie jederzeit löschen können. Wenn Sie ein Google-Konto besitzen, können Sie dort Daten zu Ihrer Webaktivität löschen bzw. festlegen, dass sie nach einer bestimmten Zeit gelöscht werden sollen.<br />
            In Ihrem Browser haben Sie zudem die Möglichkeit, Cookies zu deaktivieren, zu löschen oder nach Ihren Wünschen und Vorlieben zu verwalten. Hier finden Sie Anleitungen zu den wichtigsten Browsern:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Google ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;tid=311196990" target="_blank" rel="noopener">https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI</a>. Wir hoffen wir konnten Ihnen die wichtigsten Informationen rund um die Datenverarbeitung durch Google näherbringen. Wenn Sie mehr darüber erfahren wollen, empfehlen wir die umfangreiche Datenschutzerklärung von Google unter <a class="adsimple-311196990" href="https://policies.google.com/privacy?hl=de" target="_blank" rel="follow noopener">https://policies.google.com/privacy?hl=de</a>.</p>
            <h2 class="adsimple-311196990">Cookiebot Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website Funktionen des Anbieters Cookiebot. Hinter Cookiebot steht das Unternehmen Cybot A/S, Havnegade 39, 1058 Kopenhagen, DK. Cookiebot bietet uns unter anderem die Möglichkeit, Ihnen einen umfangreichen Cookie-Hinweis (auch Cookie-Banner oder Cookie-Notice genannt) zu liefern. Durch die Verwendung dieser Funktion können Daten von Ihnen an Cookiebot bzw. Cybot gesendet, gespeichert und verarbeitet werden. In dieser Datenschutzerklärung informieren wir Sie warum wir Cookiebot nutzen, welche Daten übertragen werden und wie Sie diese Datenübertragung verhindern können.</p>
            <h3 class="adsimple-311196990">Was ist Cookiebot?</h3>
            <p>Cookiebot ist ein Software-Produkt des Unternehmens Cybot. Die Software erstellt automatisch einen DSGVO-konformen Cookie-Hinweis für unserer Websitebesucher. Zudem scannt, kontrolliert und wertet die Technologie hinter Cookiebot alle Cookies und Tracking-Maßnahmen auf unserer Website.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Cookiebot auf unserer Webseite?</h3>
            <p>Datenschutz nehmen wir sehr ernst. Wir wollen Ihnen ganz genau zeigen, was auf unserer Website vor sich geht und welche Daten von Ihnen gespeichert werden. Cookiebot hilft uns einen guten Überblick über all unserer Cookies (Erst- und Drittanbieter-Cookies) zu erhalten. So können wir Sie über die Nutzung von Cookies auf unserer Website exakt und transparent informieren. Sie bekommen stets einen aktuellen und datenschutzkonformen Cookie-Hinweis und entscheiden selbst, welche Cookies Sie zulassen und welche nicht.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Cookiebot gespeichert?</h3>
            <p>Wenn Sie Cookies zulassen, werden folgende Daten an Cybot übertragen, gespeichert und verarbeitet.</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">IP-Adresse (in anonymisierter Form, die letzten 3 Ziffern werden auf 0 gesetzt)</li>
            <li class="adsimple-311196990">Datum und Uhrzeit Ihres Einverständnisses</li>
            <li class="adsimple-311196990">unsere Website-URL</li>
            <li class="adsimple-311196990">technische Browserdaten</li>
            <li class="adsimple-311196990">verschlüsselter, anonymer Key</li>
            <li class="adsimple-311196990">die Cookies, die Sie zugelassen haben (als Zustimmungsnachweis)</li>
            </ul>
            <p>Folgenden Cookies werden von Cookiebot gesetzt, wenn Sie der Verwendung von Cookies zugestimmt haben:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CookieConsent<br />
            <strong class="adsimple-311196990">Wert:</strong> {stamp:&#8217;P7to4eNgIHvJvDerjKneBsmJQd9311196990-2<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> In diesem Cookie wird Ihr Zustimmungsstatus, gespeichert. Dadurch kann unsere Website auch bei zukünftigen Besuchen den aktuellen Status lesen und befolgen.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> CookieConsentBulkTicket<br />
            <strong class="adsimple-311196990">Wert:</strong> kDSPWpA%2fjhljZKClPqsncfR8SveTnNWhys5NojaxdFYBPjZ2PaDnUw%3d%3311196990-6<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie wird gesetzt, wenn Sie alle Cookies erlauben und somit eine &#8220;Sammelzustimmung&#8221; aktiviert haben. Das Cookie speichert dann eine eigene, zufällige und eindeutige ID.<br />
            <strong class="adsimple-311196990">Ablaufdatum: </strong>nach einem Jahr</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung: </strong>Bitte bedenken Sie, dass es sich hier um eine beispielhafte Liste handelt und wir keinen Anspruch auf Vollständigkeit erheben können. In der Cookie-Erklärung unter <a class="adsimple-311196990" href="https://www.cookiebot.com/de/cookie-declaration/" target="_blank" rel="follow noopener noreferrer">https://www.cookiebot.com/de/cookie-declaration/</a> sehen Sie, welche weiteren Cookies eingesetzt werden können.</p>
            <p>Laut der Datenschutzerklärung von Cybot verkauft das Unternehmen personenbezogene Daten nicht weiter. Cybot gibt allerdings Daten an vertrauensvolle Dritt- oder Subunternehmen weiter, die dem Unternehmen helfen, die eigenen betriebswirtschaftlichen Ziele zu erreichen. Daten werden auch dann weitergegeben, wenn dies rechtlich erforderlich ist.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Alle erhobenen Daten werden ausschließlich innerhalb der Europäischen Union übertragen, gespeichert und weitergeleitet. Die Daten werden in einem Azure-Rechenzentrum (Cloud-Anbieter ist Microsoft) gespeichert. Auf  <a class="adsimple-311196990" href="https://azure.microsoft.com/de-de/global-infrastructure/regions/?tid=311196990" target="_blank" rel="noopener noreferrer">https://azure.microsoft.com/de-de/global-infrastructure/regions/</a> erfahren Sie mehr über alle „Azure-Regionen“. Alle User Daten werden von Cookiebot nach 12 Monaten ab der Registrierung (Cookie-Zustimmung) bzw. unmittelbar nach Kündigung des Cookiebot-Services gelöscht.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und sie auch zu löschen. Die Datenerfassung und Speicherung können Sie beispielsweise verhindern, indem Sie über den Cookie-Hinweis die Verwendung von Cookies ablehnen. Eine weitere Möglichkeit die Datenverarbeitung zu unterbinden bzw. nach Ihren Wünschen zu verwalten, bietet Ihr Browser. Je nach Browser funktioniert die Cookie-Verwaltung etwas anders. Hier finden Sie die Anleitungen zu den momentan bekanntesten Browsern:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wenn Sie mehr über die Datenschutzrichtlinien von „Cookiebot“ bzw. dem dahinterstehenden Unternehmen Cybot erfahren wollen, empfehlen wir Ihnen die Datenschutzrichtlinien unter <a class="adsimple-311196990" href="https://www.cookiebot.com/de/privacy-policy/?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.cookiebot.com/de/privacy-policy/</a> durchzulesen.</p>
            <p>&nbsp;</p>
            <h2 class="adsimple-311196990">WooCommerce Datenschutzerklärung</h2>
            <p>Wir haben auf unserer Website das Open-Source Shopsystem WooCommerce als Plugin eingebunden. Dieses WooCommerce-Plugin basiert auf dem Content-Management-System WordPress, das ein Tochterunternehmen der Firma Automattic Inc. (60 29th Street #343, San Francisco, CA 94110, USA) ist. Durch die implementierten Funktionen werden Daten an Automattic Inc. versandt, gespeichert und verarbeitet. In dieser Datenschutzerklärung informieren wir Sie, um welche Daten es sich handelt, wie das Netzwerk diese Daten verwendet und wie Sie die Datenspeicherung verwalten bzw. unterbinden können.</p>
            <h3 class="adsimple-311196990">Was ist WooCommerce?</h3>
            <p>WooCommerce ist ein Onlineshop-System, das seit 2011 Teil des Verzeichnisses von WordPress ist und speziell für WordPress-Websites entwickelt wurde. Es ist eine anpassbare, quelloffene eCommerce-Plattform, die auf WordPress basiert und auch als WordPress-Plugin in unsere Website eingebunden wurde.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir WooCommerce auf unserer Webseite?</h3>
            <p>Wir nutzen diese praktische Onlineshop-Lösung, um Ihnen unserer physischen oder digitalen Produkte oder Dienstleistungen bestmöglich auf unserer Website anbieten zu können. Ziel ist es, Ihnen einen einfachen und leichten Zugang zu unserem Angebot zu ermöglichen, damit Sie unkompliziert und schnell zu Ihren gewünschten Produkten kommen. Mit WooCommerce haben wir hier ein gutes Plugin gefunden, das unseren Ansprüchen an einen Onlineshop erfüllt.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von WooCommerce gespeichert?</h3>
            <p>Informationen, die Sie aktiv in ein Textfeld in unserem Onlineshop eingeben, können von WooCommerce bzw. von Automattic gesammelt und gespeichert werden. Also wenn Sie sich bei uns anmelden bzw. ein Produkt bestellen, kann Automattic diese Daten sammeln, verarbeiten und speichern. Dabei kann es sich neben E-Mail-Adresse, Namen oder Adresse auch um Kreditkarten- oder Rechnungsinformationen handeln. Automattic kann diese Informationen in weiterer Folge auch für eigene Marketing-Kampagnen nützen.</p>
            <p>Zudem gibt es auch noch Informationen, die Automattic automatisch in sogenannten Serverlogfiles von Ihnen sammelt:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">IP-Adresse</li>
            <li class="adsimple-311196990">Browserinformationen</li>
            <li class="adsimple-311196990">Voreingestellte Spracheinstellung</li>
            <li class="adsimple-311196990">Datum und Uhrzeit des Webzugriffs</li>
            </ul>
            <p>WooCommerce setzt in Ihrem Browser auch Cookies und verwendet Technologien wie Pixel-Tags (Web Beacons), um beispielsweise Sie als User klar zu identifizieren und möglicherweise interessensbezogene Werbung anbieten zu können. WooCommerce verwendet eine Reihe verschiedener Cookies, die je nach Useraktion gesetzt werden. Das heißt, wenn Sie zum Beispiel ein Produkt in den Warenkorb legen wird ein Cookie gesetzt, damit das Produkt auch im Warenkorb bleibt, wenn Sie unsere Website verlassen und zu einem späteren Zeitpunkt wiederkommen.</p>
            <p>Hier zeigen wir Ihnen eine beispielhafte Liste möglicher Cookies, die von WooCommerce gesetzt werden können:</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> woocommerce_items_in_cart<br />
            <strong class="adsimple-311196990">Wert:</strong> 1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Das Cookie hilft WooCommerce festzustellen, wann sich der Inhalt im Warenkorb verändert.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> woocommerce_cart_hash<br />
            <strong class="adsimple-311196990">Wert:</strong> 447c84f810834056ab37cfe5ed27f204311196990-7<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Auch dieses Cookie wird dafür eingesetzt, um die Veränderungen in Ihrem Warenkorb zu erkennen und zu speichern.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Sitzungsende</p>
            <p>
            <strong class="adsimple-311196990">Name:</strong> wp_woocommerce_session_d9e29d251cf8a108a6482d9fe2ef34b6<br />
            <strong class="adsimple-311196990">Wert:</strong> 1146%7C%7C1589034207%7C%7C95f8053ce0cea135bbce671043e740311196990-4aa<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie enthält eine eindeutige Kennung für Sie, damit die Warenkorbdaten in der Datenbank auch gefunden werden können.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Tagen</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Sofern es keine gesetzliche Verpflichtung gibt, Daten für einen längeren Zeitraum aufzubewahren, löscht WooCommerce die Daten dann, wenn Sie für die eigenen Zwecke, für die Sie gespeichert wurden, nicht mehr benötigt werden. So werden zum Beispiel Serverlogfiles, die technische Daten zu Ihrem Browser und Ihrer IP-Adresse erhalten etwa nach 30 Tagen wieder gelöscht. Solange verwendet Automattic die Daten, um den Verkehr auf den eigenen Websites (zum Beispiel alle WordPress-Seiten) zu analysieren und mögliche Probleme zu beheben. Die Daten werden auf amerikanischen Servern von Automattic gespeichert.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie haben jederzeit das Recht auf Ihre personenbezogenen Daten zuzugreifen und Einspruch gegen die Nutzung und Verarbeitung dieser zu erheben. Sie können auch jederzeit bei einer staatlichen Aufsichtsbehörde eine Beschwerde einreichen.</p>
            <p>In Ihrem Browser haben Sie auch die Möglichkeit, Cookies individuell zu verwalten, zu löschen oder zu deaktivieren. Nehmen Sie aber bitte zur Kenntnis, dass deaktivierte oder gelöschte Cookies mögliche negative Auswirkungen auf die Funktionen unseres WooCommerce-Onlineshops haben. Je nachdem, welchen Browser Sie verwenden, funktioniert das Verwalten der Cookies etwas anders. Im Folgenden sehen Sie Links zu den Anleitungen der gängigsten Browser:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Automattic ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC" target="_blank" rel="noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC</a>.<br />
            Mehr Details zur Datenschutzrichtlinie und welche Daten auf welche Art durch WooCommerce erfasst werden, finden Sie auf <a class="adsimple-311196990" href="https://automattic.com/privacy/?tid=311196990" target="_blank" rel="noopener noreferrer">https://automattic.com/privacy/ </a>und allgemeine Informationen zu WooCommerce auf <a class="adsimple-311196990" href="https://woocommerce.com/?tid=311196990" target="_blank" rel="noopener noreferrer">https://woocommerce.com/</a>.</p>
            <h2 class="adsimple-311196990">Klarna Checkout Datenschutzerklärung</h2>
            <p>Wir verwenden auf unserer Website das Online-Zahlungssystem Klarna Checkout des schwedischen Unternehmens Klarna Bank AB. Die Klarna-Bank hat ihren Hauptfirmensitz in Sveavägen 46, 111 34 Stockholm, Schweden. Wenn Sie sich für diesen Dienst entscheiden, werden unter anderem personenbezogene Daten an Klarna gesendet, gespeichert und verarbeitet. In dieser Datenschutzerklärung möchten wir Ihnen einen Überblick über die Datenverarbeitung durch Klarna geben.</p>
            <h3 class="adsimple-311196990">Was ist Klarna Checkout?</h3>
            <p>Klarna Checkout ist ein Zahlungssystem für Bestellungen in einem Onlineshop. Dabei wählt der Nutzer die Zahlungsart und Klarna Checkout übernimmt den gesamten Zahlungsprozess. Nachdem ein Nutzer einmal eine Zahlung über das Checkout-System durchgeführt hat und die entsprechenden Daten angegeben hat, können zukünftige Online-Einkäufe noch schneller und einfacher durchgeführt werden. Das Klarna-System erkennt dann bereits nach Eingabe der E-Mail-Adresse und Postleitzahl den bestehenden Kunden.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir Klarna Checkout für unsere Webseite?</h3>
            <p>Unser Ziel mit unserer Website und unserem eingebundenen Onlineshop ist es, Ihnen das bestmögliche Service zu bieten. Dazu zählt neben dem Gesamterlebnis auf der Website und neben unseren Angeboten auch eine reibungslose, schnelle und sichere Zahlungsabwicklung Ihrer Bestellungen. Um das zu gewährleisten, nutzen wir das Zahlungssystem Klarna Checkout.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Klarna Checkout gespeichert?</h3>
            <p>Sobald Sie sich für den Zahlungsdienst Klarna entscheiden und über die Zahlungsmethode Klarna Checkout bezahlen, übermitteln Sie auch personenbezogene Daten an das Unternehmen. Auf der Klarna Checkout-Seite werden technische Daten wie Browsertyp, Betriebssystem, unsere Internetadresse, Datum und Uhrzeit, Spracheinstellungen, Zeitzoneneinstellungen und IP-Adresse von Ihnen erhoben und an die Server von Klarna übermittelt und dort gespeichert. Diese Daten werden auch dann gespeichert, wenn Sie noch keine Bestellung abgeschlossen haben.</p>
            <p>Wenn Sie ein Produkt oder eine Dienstleistung über unseren Shop bestellen, müssen Sie in die vorgegebenen Felder Daten zu Ihrer Person eingeben. Diese Daten werden durch Klarna für die Zahlungsabwicklung verarbeitet. Dabei können zur Bonitäts- und Identitätsprüfung speziell folgende personenbezogenen Daten (sowie allgemeine Produktinformationen) durch Klarna gespeichert und verarbeitet werden:</p>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Kontaktinformationen: Namen, Geburtsdatum, nationale Ausweisnummer, Titel, Rechnungs- und Lieferadresse, E-Mail-Adresse, Telefonnummer, Nationalität oder Gehalt.</li>
            <li class="adsimple-311196990">Zahlungsinformationen wie Kreditkartendaten oder Ihre Kontonummer</li>
            <li class="adsimple-311196990">Produktinformationen wie Sendungsnummer, Art des Artikels und Preis des Produkts</li>
            </ul>
            <p>Zudem gibt es auch noch Daten, die optional erhoben werden können, sofern Sie sich dazu bewusst entscheiden. Das sind etwa politische, religiöse oder weltanschauliche Überzeugungen oder diverse Gesundheitsdaten.</p>
            <p>Klarna kann auch selbst oder über Dritte (wie beispielsweise über uns oder über öffentliche Datenbanken) neben den oben genannten Daten auch Daten zu den Waren oder Dienstleistungen, die Sie kaufen oder bestellen erheben. Das kann zum Beispiel die Sendungsnummer oder die Art des bestellten Artikels sein, aber auch Auskünfte über Ihre Bonität, über Ihr Einkommen oder Kreditgewährungen. Klarna kann Ihre personenbezogenen Daten auch Dienstleister wie etwa Softwareanbieter, Datenspeicheranbieter oder uns als Händler weitergeben.</p>
            <p>Wenn Daten automatisch in ein Formular eingetragen werden, dann sind immer Cookies im Spiel. Wenn Sie diese Funktion nicht nutzen wollen, können Sie jederzeit diese Cookies deaktivieren. Weiter unten im Text finden Sie eine Anleitung, wie Sie Cookies in Ihrem Browser grundsätzlich löschen, deaktivieren oder verwalten. Unsere Tests haben ergeben, dass von Klarna direkt keine Cookies gesetzt werden. Wenn Sie die Zahlungsmethode &#8220;Klarna Sofort&#8221; wählen und auf &#8220;Bestellen&#8221; klicken, werden Sie auf die Sofort-Website weitergeleitet. Nach der erfolgreichen Zahlung kommen Sie auf unsere Dankesseite. Dort wird von sofort.com folgendes Cookie gesetzt:</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: SOFUEB<br />
            <strong class="adsimple-311196990">Wert: </strong>e8cipp378mdscn9e17kajlfhv7311196990-4<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Session-ID.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Beenden der Browsersitzung</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Klarna ist bemüht Ihre Daten nur innerhalb der EU bzw. des Europäischen Wirtschaftsraums (EWR) zu speichern. Es kann aber auch vorkommen, dass Daten außerhalb des EU/EWR übertragen werden. Wenn das passiert, stellt Klarna sicher, dass der Datenschutz im Einklang mit der DSGVO steht, das Drittland in einer Angemessenheitsentscheidung der Europäischen Union steht oder das Land das Zertifikat des US-Privacy Shield besitzt. Die Daten werden immer solange gespeichert, wie Klarna sie für den Verarbeitungszweck benötigt.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Sie können Ihre Einwilligung, dass Klarna personenbezogene Daten verarbeitet jederzeit widerrufen. Sie haben auch immer das Recht auf Auskunft, Berichtigung und Löschung Ihrer personenbezogenen Daten. Dafür müssen Sie lediglich das Unternehmen bzw. das Datenschutzteam des Unternehmens per E-Mail an <a class="adsimple-311196990" href="mailto:datenschutz@klarna.de">datenschutz@klarna.de</a> kontaktieren. Über die Klarna-Webseite <a class="adsimple-311196990" href="https://www.klarna.com/at/meine-datenschutzanfrage-formular/?tid=311196990" target="_blank" rel="noopener noreferrer">„Meine Datenschutzanfrage“</a> können Sie ebenfalls mit Klarna direkt in Kontakt treten.</p>
            <p>Cookies, die Klarna für ihre Funktionen möglicherweise verwendet, können Sie in Ihrem Browser löschen, deaktivieren oder verwalten. Je nachdem welchen Browser Sie verwenden, funktioniert dies auf unterschiedliche Art und Weise. Die folgenden Anleitungen zeigen, wie Sie Cookies in Ihrem Browser verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wir hoffen Ihnen einen guten Überblick über die Datenverarbeitung durch Klarna geboten zu haben. Wenn Sie mehr über den Umgang mit Ihren Daten erfahren wollen, empfehlen wir Ihnen die Klarna-Datenschutzerklärung unter <a class="adsimple-311196990" href="https://cdn.klarna.com/1.0/shared/content/legal/terms/0/de_at/privacy?tid=311196990" target="_blank" rel="noopener noreferrer">https://cdn.klarna.com/1.0/shared/content/legal/terms/0/de_at/privacy</a>.</p>
            <p>&nbsp;</p>
            <h2 class="adsimple-311196990">Sofortüberweisung Datenschutzerklärung</h2>
            <p>Wir bieten auf unserer Website die Zahlungsmethode „Sofortüberweisung“ des Unternehmens Sofort GmbH zur bargeldlosen Bezahlung an. Die Sofort GmbH gehört seit 2014 zum schwedischen Unternehmen Klarna, hat aber ihren Firmensitz in Deutschland, Theresienhöhe 12, 80339 München.</p>
            <p>Entscheiden Sie sich für diese Zahlungsmethode werden unter anderem auch personenbezogene Daten an die Sofort GmbH bzw. an Klarna übermittelt, gespeichert und dort verarbeitet. Mit diesem Datenschutztext geben wir Ihnen einen Überblick über die Datenverarbeitung durch die Sofort GmbH.</p>
            <h3 class="adsimple-311196990">Was ist eine „Sofortüberweisung“?</h3>
            <p>Bei der Sofortüberweisung handelt es sich um ein Online-Zahlungssystem, das es Ihnen ermöglicht eine Bestellung über Online-Banking durchzuführen. Dabei wird die Zahlungsabwicklung durch die Sofort GmbH durchgeführt und wir erhalten sofort eine Information über die getätigte Zahlung. Diese Methode kann jeder User nutzen, der ein aktives Online-Banking-Konto mit PIN und TAN hat. Nur noch wenige Banken unterstützen diese Zahlungsmethode noch nicht.</p>
            <h3 class="adsimple-311196990">Warum verwenden wir „Sofortüberweisung“ auf unserer Website?</h3>
            <p>Unser Ziel mit unserer Website und unserem eingebundenen Onlineshop ist es, Ihnen das bestmögliche Service zu bieten. Dazu zählt neben dem Gesamterlebnis auf der Website und neben unseren Angeboten auch eine reibungslose, schnelle und sichere Zahlungsabwicklung Ihrer Bestellungen. Um das zu gewährleisten, nutzen wir „Sofortüberweisung“ als Zahlungssystem.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von „Sofortüberweisung“ gespeichert?</h3>
            <p>Wenn Sie über den Sofort/Klarna-Dienst eine Sofortüberweisung durchführen, werden Daten wie Name, Kontonummer, Bankleitzahl, Betreff, Betrag und Datum auf den Servern des Unternehmens gespeichert. Diese Informationen erhalten auch wir über die Zahlungsbestätigung.</p>
            <p>Im Rahmen der Kontodeckungsprüfung überprüft die Sofort GmbH, ob Ihr Kontostand und Überziehungskreditrahmen den Zahlungsbeitrag abdeckt. In manchen Fällen wird auch überprüft, ob in den letzten 30 Tagen Sofortüberweisungen erfolgreich durchgeführt wurden. Weiters wird Ihre User-Identifikation (wie etwa Verfügernummer oder Vertragsnummer) in gekürzter („gehashter“) Form und Ihre IP-Adresse erhoben und gespeichert. Bei SEPA-Überweisungen wird auch BIC und IBAN gespeichert.</p>
            <p>Laut dem Unternehmen werden sonst keine weiteren personenbezogenen Daten (wie Kontostände, Umsatzdaten, Verfügungsrahmen, Kontolisten, Mobiltelefonnummer, Authentifizierungszertifikate, Sicherheitscodses oder PIN/TAN) erhoben, gespeichert oder an Dritte weitergegeben.</p>
            <p>Sofortüberweisung nutzt auch Cookies, um den eigenen Dienst benutzerfreundlicher zu gestalten. Wenn Sie ein Produkt bestellen, werden Sie auf die Sofort bzw. Klarna-Website umgeleitet. Nach der erfolgreichen Zahlung werden Sie auf unsere Dankesseite weitergeleitet. Hier werden folgende drei Cookies gesetzt:</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: SOFUEB<br />
            <strong class="adsimple-311196990">Wert: </strong>e8cipp378mdscn9e17kajlfhv7311196990-5<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Session-ID.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach Beenden der Browsersitzung</p>
            <p>
            <strong class="adsimple-311196990">Name</strong>: User[user_cookie_rules]
            <strong class="adsimple-311196990">Wert: </strong>1<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Dieses Cookie speichert Ihre Zustimmung zur Verwendung von Cookies.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 10 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Name: </strong>_ga<br />
            <strong class="adsimple-311196990">Wert: </strong>GA1.2.69759879.1589470706<br />
            <strong class="adsimple-311196990">Verwendungszweck:</strong> Standardmäßig verwendet analytics.js das Cookie _ga, um die User-ID zu speichern. Grundsätzlich dient es zur Unterscheidung der Webseitenbesucher. Hier handelt es sich um ein Cookie von Google Analytics.<br />
            <strong class="adsimple-311196990">Ablaufdatum:</strong> nach 2 Jahren</p>
            <p>
            <strong class="adsimple-311196990">Anmerkung:</strong> Die hier angeführten Cookies erheben keinen Anspruch auch Vollständigkeit. Es kann immer sein, dass Sofortüberweisung auch andere Cookies verwendet.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Alle erhobenen Daten werden innerhalb der rechtlichen Aufbewahrungspflicht gespeichert. Diese Pflicht kann zwischen drei und zehn Jahren dauern.</p>
            <p>Klarna/Sofort GmbH versucht Daten nur innerhalb der EU bzw. des Europäischen Wirtschaftsraums (EWR) zu speichern. Wenn Daten außerhalb des EU/EWR übertragen werden, muss der Datenschutz mit der DSGVO übereinstimmen, das Land in einer Angemessenheitsentscheidung der EU stehen oder das US-Privacy-Shield-Zertifikat besitzen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen oder die Datenspeicherung verhindern?</h3>
            <p>Sie können Ihre Einwilligung, dass Klarna personenbezogene Daten verarbeitet jederzeit widerrufen. Sie haben auch immer das Recht auf Auskunft, Berichtigung und Löschung Ihrer personenbezogenen Daten. Dafür können Sie einfach das Datenschutzteam des Unternehmens per E-Mail an datenschutz@sofort.com kontaktieren.</p>
            <p>Mögliche Cookies, die Sofortüberweisung verwendet, können Sie in Ihrem Browser verwalten, löschen oder deaktivieren. Abhängig von Ihrem bevorzugten Browser funktioniert das auf unterschiedliche Weise. Die folgenden Anleitungen zeigen wie Sie Cookies in den gängigsten Browsern verwalten:</p>
            <p>
            <a class="adsimple-311196990" href="https://support.google.com/chrome/answer/95647?tid=311196990" target="_blank" rel="noopener noreferrer">Chrome: Cookies in Chrome löschen, aktivieren und verwalten</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.apple.com/de-at/guide/safari/sfri11471/mac?tid=311196990" target="_blank" rel="noopener noreferrer">Safari: Verwalten von Cookies und Websitedaten mit Safari</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.mozilla.org/de/kb/cookies-und-website-daten-in-firefox-loschen?tid=311196990" target="_blank" rel="noopener noreferrer">Firefox: Cookies löschen, um Daten zu entfernen, die Websites auf Ihrem Computer abgelegt haben</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/17442/windows-internet-explorer-delete-manage-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Internet Explorer: Löschen und Verwalten von Cookies</a>
            </p>
            <p>
            <a class="adsimple-311196990" href="https://support.microsoft.com/de-at/help/4027947/windows-delete-cookies?tid=311196990" target="_blank" rel="noopener noreferrer">Microsoft Edge: Löschen und Verwalten von Cookies</a>
            </p>
            <p>Wenn Sie mehr über die Datenverarbeitung durch die „Sofortüberweisung“ des Unternehmens Sofort GmbH erfahren wollen, empfehlen wir Ihnen die Datenschutzerklärung unter <a class="adsimple-311196990" href="https://www.sofort.de/datenschutz.html?tid=311196990">https://www.sofort.de/datenschutz.html</a>.</p>
            <h2 class="adsimple-311196990">Cloudflare Datenschutzerklärung</h2>
            <p>Wir verwenden auf dieser Webseite Cloudflare der Firma Cloudflare, Inc. (101 Townsend St., San Francisco, CA 94107, USA), um unsere Webseite schneller und sicherer zu machen. Dabei verwendet Cloudflare Cookies und verarbeitet User-Daten. Cloudflare, Inc. ist eine amerikanische Firma, die ein Content Delivery Network und diverse Sicherheitsdienste bereitstellt. Diese Dienste befinden sich zwischen dem User und unserem Hosting-Anbieter und fungieren als <a class="adsimple-311196990" href="https://de.wikipedia.org/wiki/Reverse_Proxy" target="_blank" rel="noopener">Reverse Proxy</a> für Webseiten. Was das alles genau bedeutet, versuchen wir im Folgenden genauer zu erläutern.</p>
            <h3 class="adsimple-311196990">Was ist Cloudflare?</h3>
            <p>Ein Content Delivery Network (CDN), wie es die Firma Cloudflare bereitstellt, ist nichts anderes als ein Netzwerk aus über das Internet verbundenen Servern. Cloudflare hat auf der ganzen Welt solche Server verteilt, um Webseiten schneller auf Ihren Bildschirm zu bringen. Ganz einfach gesagt, legt Cloudflare Kopien unserer Website an und platziert sie auf ihren eigenen Servern. Wenn Sie jetzt unsere Webseite besuchen, stellt ein System der Lastenverteilung sicher, dass die größten Teile unserer Webseite von jenem Server ausgeliefert werden, der Ihnen unsere Webseite am schnellsten anzeigen kann. Die Strecke der Datenübertragung zu Ihrem Browser wird durch ein CDN deutlich verkürzt. Somit wird Ihnen der Content unserer Webseite durch Cloudflare nicht nur von unserem Hosting-Server geliefert, sondern von Servern aus der ganzen Welt. Besonders hilfreich wird der Einsatz von Cloudflare für User aus dem Ausland, da hier die Seite von einem Server in der Nähe ausgeliefert werden kann. Neben dem schnellen Ausliefern von Webseiten bietet Cloudflare auch diverse Sicherheitsdienste, wie den DDoS-Schutz oder die Web Application Firewall an.</p>
            <h3 class="adsimple-311196990">Warum wir Cloudflare auf unserer Website verwenden?</h3>
            <p>Natürlich wollen wir Ihnen mit unserer Webseite das bestmögliche Service bieten. Cloudflare hilft uns dabei, unsere Webseite schneller und sicherer zu machen. Cloudflare bietet uns sowohl Web-Optimierungen als auch Sicherheitsdienste, wie DDoS-Schutz und Web-Firewall, an. Dazu gehören auch ein <a class="adsimple-311196990" href="https://de.wikipedia.org/wiki/Reverse_Proxy" target="_blank" rel="noopener">Reverse-Proxy</a> und das Content-Verteilungsnetzwerk (CDN). Cloudflare blockiert Bedrohungen und begrenzt missbräuchliche Bots und Crawler, die unsere Bandbreite und Serverressourcen verschwenden. Durch das Speichern unserer Webseite auf lokalen Datenzentren und das Blockieren von Spam-Software ermöglicht Cloudflare, unsere Bandbreitnutzung etwa um 60% zu reduzieren. Das Bereitstellen von Inhalten über ein Datenzentrum in Ihrer Nähe und einiger dort durchgeführten Web-Optimierungen reduziert die durchschnittliche Ladezeit einer Website etwa um die Hälfte. Durch die Einstellung „I´m Under Attack Mode“ („Ich werde angegriffen“-Modus) können laut Cloudflare weitere Angriffe abgeschwächt werden, indem eine JavaScript-Rechenaufgabe angezeigt wird, die man lösen muss, bevor ein User auf eine Webseite zugreifen kann. Insgesamt wird dadurch unsere Website deutlich leistungsstärker und weniger anfällig auf Spam oder andere Angriffe.</p>
            <h3 class="adsimple-311196990">Welche Daten werden von Cloudflare gespeichert?</h3>
            <p>Cloudflare leitet im Allgemeinen nur jene Daten weiter, die von Websitebetreibern gesteuert werden. Die Inhalte werden also nicht von Cloudflare bestimmt, sondern immer vom Websitebetreiber selbst. Zudem erfasst Cloudflare unter Umständen bestimmte Informationen zur Nutzung unserer Webseite und verarbeitet Daten, die von uns versendet werden oder für die Cloudflare entsprechende Anweisungen erhalten hat. In den meisten Fällen erhält Cloudflare Daten wie Kontaktinformationen, IP-Adressen, Sicherheitsfingerabdrücke, DNS-Protokolldaten und Leistungsdaten für Webseiten, die aus der Browseraktivitäten abgeleitet werden. Protokolldaten helfen Cloudflare beispielsweise dabei, neue Bedrohungen zu erkennen. So kann Cloudflare einen hohen Sicherheitsschutz für unsere Webseite gewährleisten. Cloudflare verarbeitet diese Daten im Rahmen der Services unter Einhaltung der geltenden Gesetze. Dazu zählt natürlich auch die Datenschutzgrundverordnung (DSGVO).</p>
            <p>Aus Sicherheitsgründen verwendet Cloudflare auch ein Cookie. Das Cookie (__cfduid) wird verwendet, um einzelne User hinter einer gemeinsam genutzten IP-Adresse zu identifizieren und Sicherheitseinstellungen für jeden einzelnen User anzuwenden. Sehr nützlich wird dieses Cookie beispielweise, wenn Sie unsere Webseite aus einem Lokal benutzen, in dem sich eine Reihe infizierter Computer befinden. Wenn aber Ihr Computer vertrauenswürdig ist, können wir dies anhand des Cookies erkennen. So können Sie, trotz infizierter PCs im Umfeld, ungehindert durch unsere Webseite surfen. Wichtig zu wissen ist auch noch, dass dieses Cookie keine personenbezogenen Daten speichert. Dieses Cookie ist für die Cloudflare-Sicherheitsfunktionen unbedingt erforderlich und kann nicht deaktiviert werden.</p>
            <h3 class="adsimple-311196990">Cookies von Cloudflare</h3>
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">__cfduid
            <ul class="adsimple-311196990">
            <li class="adsimple-311196990">Ablaufzeit: 1 Jahr</li>
            <li class="adsimple-311196990">Verwendung: Sicherheitseinstellungen für jeden einzelnen Besucher</li>
            <li class="adsimple-311196990">Beispielhafter Wert: d798bf7df9c1ad5b7583eda5cc5e78311196990</li>
            </ul>
            </li>
            </ul>
            <p>Cloudflare arbeitet auch mit Drittanbietern zusammen. Diese dürfen personenbezogene Daten nur unter Anweisung der Firma Cloudflare und in Übereinstimmung mit den Datenschutzrichtlinien und anderer Vertraulichkeits- und Sicherheitsmaßnahmen verarbeiten. Ohne explizite Einwilligung von uns gibt Cloudflare keine personenbezogenen Daten weiter.</p>
            <h3 class="adsimple-311196990">Wie lange und wo werden die Daten gespeichert?</h3>
            <p>Cloudflare speichert Ihre Informationen hauptsächlich in den USA und im Europäischen Wirtschaftsraum. Cloudflare kann die oben beschriebenen Informationen aus der ganzen Welt übertragen und darauf zugreifen. Im Allgemeinen speichert Cloudflare Daten auf User-Ebene für Domains in den Versionen Free, Pro und Business für weniger als 24 Stunden. Für Enterprise Domains, die Cloudflare Logs (früher Enterprise LogShare oder ELS) aktiviert haben, können die Daten bis zu 7 Tage gespeichert werden. Wenn allerdings IP-Adressen bei Cloudflare Sicherheitswarnungen auslösen, kann es zu Ausnahmen der oben angeführten Speicherungsdauer kommen.</p>
            <h3 class="adsimple-311196990">Wie kann ich meine Daten löschen bzw. die Datenspeicherung verhindern?</h3>
            <p>Cloudflare bewahrt Daten-Protokolle nur solange wie nötig auf und diese Daten werden auch in den meisten Fällen innerhalb von 24 Stunden wieder gelöscht. Cloudflare speichert auch keine personenbezogenen Daten, wie beispielsweise Ihre IP-Adresse. Es gibt allerdings Informationen, die Cloudflare als Teil seiner permanenten Protokolle auf unbestimmte Zeit speichert, um so die Gesamtleistung von Cloudflare Resolver zu verbessern und etwaige Sicherheitsrisiken zu erkennen. Welche permanenten Protokolle genau speichert werden, können Sie auf <a class="adsimple-311196990" href="https://www.cloudflare.com/application/privacypolicy/" target="_blank" rel="noopener">https://www.cloudflare.com/application/privacypolicy/</a> nachlesen. Alle Daten, die Cloudflare sammelt (temporär oder permanent), werden von allen personenbezogenen Daten bereinigt. Alle permanenten Protokolle werden zudem von Cloudflare anonymisiert.</p>
            <p>Cloudflare geht in ihrer Datenschutzerklärung darauf ein, dass sie für die Inhalte, die sie erhalten nicht verantwortlich sind. Wenn Sie beispielsweise bei Cloudflare anfragen, ob sie Ihre Inhalte aktualisieren oder löschen können, verweist Cloudflare grundsätzlich auf uns als Websitebetreiber. Sie können auch die gesamte Erfassung und Verarbeitung Ihrer Daten durch Cloudflare komplett unterbinden, indem Sie die Ausführung von Script-Code in Ihrem Browser deaktivieren oder einen Script-Blocker in Ihren Browser einbinden.</p>
            <p>Cloudflare ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000GnZKAA0&amp;tid=311196990" target="_blank" rel="noopener">https://www.privacyshield.gov/participant?id=a2zt0000000GnZKAA0</a>.<br />
            Mehr Informationen zum Datenschutz bei Cloudflare finden Sie auf <a class="adsimple-311196990" href="https://www.cloudflare.com/de-de/privacypolicy/?tid=311196990" target="_blank" rel="noopener">https://www.cloudflare.com/de-de/privacypolicy/</a>
            </p>
            <h2 class="adsimple-311196990">jsdelivr.com-CDN Datenschutzerklärung</h2>
            <p>Damit wir Ihnen unsere einzelnen Webseiten schnell und auf allen unterschiedlichen Geräten einwandfrei ausliefern können, verwenden wir die Open-Source-Dienste von <a class="adsimple-311196990" href="https://www.jsdelivr.com/" target="_blank" rel="follow noopener noreferrer">jsdelivr.com</a> des polnischen Software-Unternehmens ProspectOne, Królewska 65A/1, 30-081, Kraków, Polen.</p>
            <p>Dabei handelt es sich um ein Content Delivery Network (CDN). Das ist ein Netzwerk regional verteilter Server, die über das Internet verbunden sind. Dadurch können Inhalte, speziell große Dateien, auch bei großen Lastspitzen schnell und optimal ausgeliefert werden.</p>
            <p>jsDelivr ist so aufgebaut, dass JavaScript-Bibliotheken heruntergeladen werden können, die auf npm- und Github-Servern gehostet werden. Es können aber auch WordPress-Plugins geladen werden, sofern diese auf <a class="adsimple-311196990" href="https://wordpress.org/" target="_blank" rel="follow noopener noreferrer">WordPress.org</a> gehostet werden. Um diesen Dienst bereitstellen zu können, kann Ihr Browser personenbezogene Daten an <a class="adsimple-311196990" href="https://www.jsdelivr.com/?tid=311196990" target="_blank" rel="noopener">jsdelivr.com</a> senden. jsDelivr kann somit Userdaten wie IP-Adresse, Browsertyp, Browserversion, welche Webseite geladen wird oder Uhrzeit und Datum des Seitenbesuchs sammeln und speichern. In der Datenschutzerklärung von <a class="adsimple-311196990" href="https://www.jsdelivr.com/" target="_blank" rel="follow noopener noreferrer">jsdelivr.com</a> wird ausdrücklich darauf hingewiesen, dass das Unternehmen keine Cookies oder andere Tracking-Services verwendet.</p>
            <p>Wenn Sie diese Datenübertragung unterbinden wollen, können Sie einen JavaScript-Blocker (siehe beispielsweise <a class="adsimple-311196990" href="https://noscript.net/" target="_blank" rel="noopener noreferrer">https://noscript.net/</a>) installieren. Bitte beachten Sie aber, dass dadurch die Website nicht mehr das gewohnte Service (wie etwa schnelle Ladegeschwindigkeit) bieten kann.</p>
            <p>Nähere Informationen zur Datenverarbeitung durch den Softwaredienst jsDelivr finden Sie in der Datenschutzerklärung des Unternehmens unter <a class="adsimple-311196990" href="https://www.jsdelivr.com/privacy-policy-jsdelivr-net?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.jsdelivr.com/privacy-policy-jsdelivr-net</a>.</p>
            <h2 class="adsimple-311196990">BootstrapCDN Datenschutzerklärung</h2>
            <p>Um Ihnen all unsere einzelnen Webseiten (Unterseiten unserer Website) auf allen Geräten schnell und sicher ausliefern zu können, nutzen wir das Content Delivery Network (CDN) BootstrapCDN des amerikanischen Software-Unternehmens StackPath, LLC 2012 McKinney Ave. Suite 1100, Dallas, TX 75201, USA.</p>
            <p>Ein Content Delivery Network (CDN) ist ein Netzwerk regional verteilter Server, die über das Internet miteinander verbunden sind. Durch dieses Netzwerk können Inhalte, speziell sehr große Dateien, auch bei großen Lastspitzen schnell ausgeliefert werden.</p>
            <p>BootstrapCDN funktioniert so, dass sogenannte JavaScript-Bibliotheken an Ihren Browser ausgeliefert werden. Lädt nun Ihr Browser eine Datei vom BootstrapCDN herunter, wird Ihre IP-Adresse während der Verbindung zum Bootstrap-CDN-Server an das Unternehmen StockPath übermittelt.</p>
            <p>StackPath erwähnt auch in der hauseigenen Datenschutzerklärung, dass das Unternehmen aggregierte und anonymisierte Daten von diversen Diensten (wie BootstrapCDN) für die Erweiterung der Sicherung und für andere StackPath-Dienste und Clients verwenden. All diese Daten können aber keine Person identifizieren.</p>
            <p>Wenn Sie diese Datenübertragung unterbinden wollen, können Sie einen JavaScript-Blocker (siehe beispielsweise <a class="adsimple-311196990" href="https://noscript.net/" target="_blank" rel="noopener noreferrer">https://noscript.net/</a>) installieren oder in Ihrem Browser die Ausführung von JavaScript-Codes deaktivieren. Bitte beachten Sie aber, dass dadurch die Website nicht mehr das gewohnte Service (wie etwa schnelle Ladegeschwindigkeit) bieten kann.</p>
            <p>StackPath ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&amp;status=Active" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&amp;status=Active</a>.<br />
            Mehr Informationen zum Datenschutz bei StackPath bzw. BootstrapCDN finden Sie auf <a class="adsimple-311196990" href="https://www.bootstrapcdn.com/privacy-policy/?tid=311196990" target="_blank" rel="noopener">https://www.bootstrapcdn.com/privacy-policy/</a>.</p>
            <h2 class="adsimple-311196990">jQuery CDN Datenschutzerklärung</h2>
            <p>Um Ihnen unsere Website bzw. all unsere einzelnen Unterseiten (Webseiten) auf unterschiedlichen Geräten schnell und problemlos auszuliefern, nutzen wir Dienste von jQuery CDN des Unternehmens jQuery Foundation. jQuery wird über das Content Delivery Network (CDN) des amerikanischen Software-Unternehmens StackPath (LCC 2012 McKinney Ave. Suite 1100, Dallas, TX 75201, USA) verteilt. Durch diesen Dienst werden personenbezogene Daten von Ihnen gespeichert, verwaltet und verarbeitet.</p>
            <p>Ein Content Delivery Network (CDN) ist ein Netzwerk regional verteilter Server, die über das Internet miteinander verbunden sind. Durch dieses Netzwerk können Inhalte, speziell sehr große Dateien, auch bei großen Lastspitzen schnell ausgeliefert werden.</p>
            <p>jQuery nutzt JavaScript-Bibliotheken, um unsere Website-Inhalte zügig ausliefern zu können. Dafür lädt ein CDN-Server die nötigen Dateien. Sobald eine Verbindung zum CDN-Server aufgebaut ist, wird Ihre IP-Adresse erfasst und gespeichert. Das geschieht nur, wenn diese Daten nicht schon durch einen vergangenen Websitebesuch in Ihrem Browser gespeichert sind.</p>
            <p>In den Datenschutz-Richtlinien von StackPath wird ausdrücklich erwähnt, dass StackPath aggregierte und anonymisierte Daten von diversen Diensten (wie eben auch jQuery) für die Erweiterung der Sicherheit und für eigene Dienste benutzen. Diese Daten können Sie als Person allerdings nicht identifizieren.</p>
            <p>Wenn Sie nicht wollen, dass es zu dieser Datenübertragung kommt, haben Sie immer auch die Möglichkeit Java-Scriptblocker wie beispielsweise <a class="adsimple-311196990" href="https://www.ghostery.com/de/" target="_blank" rel="follow noopener noreferrer">ghostery.com</a> oder <a class="adsimple-311196990" href="https://noscript.net/" target="_blank" rel="follow noopener noreferrer">noscript.net</a> zu installieren. Sie können aber auch einfach in Ihrem Browser die Ausführung von JavaScript-Codes deaktivieren. Wenn Sie sich für die Deaktivierung von JavaScript-Codes entscheiden, verändern sich auch die gewohnten Funktionen. So wird beispielsweise eine Website nicht mehr so schnell geladen.</p>
            <p>StackPath ist aktiver Teilnehmer beim EU-U.S. Privacy Shield Framework, wodurch der korrekte und sichere Datentransfer persönlicher Daten geregelt wird. Mehr Informationen dazu finden Sie auf <a class="adsimple-311196990" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&amp;status=Active" target="_blank" rel="follow noopener noreferrer">https://www.privacyshield.gov/participant?id=a2zt0000000CbahAAC&amp;status=Active</a>.<br />
            Mehr Informationen zum Datenschutz bei StackPath finden Sie unter <a class="adsimple-311196990" href="https://www.stackpath.com/legal/privacy-statement/?tid=311196990" target="_blank" rel="noopener noreferrer">https://www.stackpath.com/legal/privacy-statement/</a> und zu jQuery unter <a class="adsimple-311196990" href="https://openjsf.org/wp-content/uploads/sites/84/2019/11/OpenJS-Foundation-Privacy-Policy-2019-11-15.pdf" target="_blank" rel="follow noopener noreferrer">https://openjsf.org/wp-content/uploads/sites/84/2019/11/OpenJS-Foundation-Privacy-Policy-2019-11-15.pdf</a>.</p>
            <p style="margin-top:15px;">Quelle: Erstellt mit dem <a title="Datenschutz Generator Deutschland" href="https://www.adsimple.de/datenschutz-generator/" target="_blank" rel="follow" style="text-decoration:none;">Datenschutz Generator</a> von AdSimple in Kooperation mit <a href="https://www.hashtagbeauty.de" target="_blank" rel="follow" title="">hashtagbeauty.de</a>
            </p>
        </div>
    </div>
</div>