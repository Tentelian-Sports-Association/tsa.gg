<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

\app\modules\company\assets\ImprintAsset::register($this);

?>

<div class="site-imprint">
    <!-- *************** Header *************** -->
    <div class="hero">
        <div class="hero-image">
            <picture>
                <source media="(min-width: 1200px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'imprint') . '.webp' ?>
                        type="image/jpeg">
                <source media="(min-width: 300px)"
                        srcset=<?php echo Yii::$app->HelperClass->checkImage('/images/banner/mobile/', 'imprint') . '.webp' ?>
                        type="image/jpeg">
                <img src="<?php echo Yii::$app->HelperClass->checkImage('/images/banner/', 'events') . '.webp' ?>" aria-label="News Header" class="img-fluid"/>
                <!--<img src="assets/images/hero/herobackground.png" aria-label="News Header" class="img-fluid"/>-->
            </picture>
        </div>
        <div class="hero-container row">
            <div class="hero-text col-lg-8">
                <h1 class="hero-title">
                    Impressum
                </h1>
                <p class="description" >
                    Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien.
                </p>
            </div>
        </div>
    </div>
    <!-- Der Text dann.... -->
    <div class='impressum'>
        <p>Commotron GmbH<br>
        Feuerhausstr. 2 <br>
        82256 Fürstenfeldbruck <br>
        </p>
        <p> <strong>Commotron GmbH Ansprechpartner </strong><br>
            A. Brandmair +49-8141-1500360 <br>
            ab-at-commotron.com
        </p>
        <p><strong>Ansprechpartner für Presse, Marketing und Öffentlichkeitsarbeit </strong> <br>
            A. Brandmair +49-8141-1500360 <br>
            ab-at-commotron.com
        </p>
        <p><strong>Geschäftsführer</strong><br>
            Lars Suhrmann lars.suhrmann-at-commotron.com<br>
            Andreas Brandmair andreas.brandmair-at-commotron.com<br><
            Handelsregister München B: HRB Nr.: 174804 | USt-IdNr. DE260978210
        </p>
        <p><strong>Datenschutzbeauftragter</strong><br>
            Daniel Pfister datenschutz-at-commotron.com
        </p>
        <p>
            <strong>Haftung für Inhalte</strong>
            <br>
            Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei bekannt werden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.
            <br><br>
            <strong>Haftung für Links</strong>
            <br>
            Unser Angebot enthält möglicherweise Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Bei bekannt werden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.
            <br><br>
            <strong>Urheber-, Marken-, Patent- und Geschmacksmusterrechte</strong>
            <br>
            Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheber-, Marken-, Patent- und Geschmacksmusterrecht. Beiträge Dritter sind als solche gekennzeichnet. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Der Betreiber der Seiten ist bemüht, stets die Urheber-, Marken, Patent- und Geschmacksmusterrechte anderer zu beachten bzw. auf selbst erstellte sowie lizenzfreie Werke zurückzugreifen.
        </p>
    </div>

</div>