@extends('layouts.app')

@section('content')
    {{--  @while (have_posts()) @php(the_post())

    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile --}}
    <div class="container mx-auto flex flex-col items-center px-4 gap-4 ">
        <div class=" -translate-x-[45px] md:-translate-x-[110px] xl:-translate-x-[179px]">
            @include('partials.heading', ['text' => 'Datenschutzerklärung'])
        </div>
        {{-- heading --}}
        <article class="prose lg:prose-xl">
            <h4 class="text-sm text-txPri font-bold leading-8">Datenschutz</h4>
            <p class="text-base text-txPri font-normal leading-8">Die Betreiber dieser Seiten nehmen den Schutz Ihrer
                persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der
                gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>

            <p class="text-base text-txPri font-normal leading-8">Die Nutzung unserer Webseite ist in der Regel ohne Angabe
                personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name,
                Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis.
                Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.</p>

            <p class="text-base text-txPri font-normal leading-8">Wir weisen darauf hin, dass die Datenübertragung im
                Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz
                der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>

            <h4 class="text-sm text-txPri font-bold leading-8">Auskunft, Löschung, Sperrung</h4>
            <p class="text-base text-txPri font-normal leading-8">Sie haben jederzeit das Recht auf unentgeltliche Auskunft
                über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der
                Datenverarbeitung sowie ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu
                weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum
                angegebenen Adresse an uns wenden.</p>

            <h4 class="text-sm text-txPri font-bold leading-8">Kontaktformular</h4>
            <p class="text-base text-txPri font-normal leading-8">Wenn Sie uns per Kontaktformular Anfragen zukommen lassen,
                werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks
                Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir
                nicht ohne Ihre Einwilligung weiter.</p>

            <h4 class="text-sm text-txPri font-bold leading-8">Widerspruch Werbe-Mails</h4>
            <p class="text-base text-txPri font-normal leading-8">Der Nutzung von im Rahmen der Impressumspflicht
                veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung und
                Informationsmaterialien wird hiermit widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich
                rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-E-Mails,
                vor.</p>

            <h4 class="text-sm text-txPri font-bold leading-8">Hotjar</h4>
            <p class="text-base text-txPri font-normal leading-8">Diese Website benutzt Hotjar, ein Analysesoftware der
                Hotjar Ltd. („Hotjar“) (http://www.hotjar.com, 3 Lyons Range, 20 Bisazza Street, Sliema SLM 1640, Malta,
                Europe). Mit Hotjar ist es möglich das Nutzungsverhalten (Klicks, Mausbewegungen, Scrollhöhen, etc.) auf
                unserer Website zu messen und auszuwerten. Die Informationen die dabei durch den „Tracking Code“ und
                „Cookie“ über Ihren Besuch auf unserer Website generiert werden, werden an die Hotjar Server in Irland
                übermittelt und dort gespeichert. Durch den Tracking Code werden folgenden Informationen gesammelt:</p>

            <p class="text-base text-txPri font-normal leading-8">
                Geräte abhängige Daten
                Die folgenden Informationen können durch Ihr Gerät und Ihren Browser aufgezeichnet werden:
            </p>
            <ul class="text-base text-txPri font-normal leading-8">
                <li>
                    Die IP-Adresse Ihres Gerätes (gesammelt und abgespeichert in einem anonymisierten Format)
                </li>
                <li>
                    Ihre E-Mail-Adresse inklusive Ihres Vor- und Nachnamens, soweit Sie diese über unsere Website uns zur
                    Verfügung gestellt haben
                </li>
                <li>
                    Bildschirmgröße Ihres Gerätes
                </li>
                <li>
                    Gerätetyp und Browserinformation
                </li>
                <li>
                    Geographischer Standpunkt (nur das Land)
                </li>
                <li>
                    Die bevorzugte Sprache um unsere Website darzustellen
                </li>
            </ul>




            <p class="text-base text-txPri font-normal leading-8">Log Daten</p>
            <p class="text-base text-txPri font-normal leading-8">Die folgenden Daten werden automatisch durch unsere Server
                erstellt wenn Hotjar benutzt wird</p>
            <ul class="text-base text-txPri font-normal leading-8">
                <li>
                    Bezugnehmende Domain
                </li>
                <li>
                    Besuchte Seiten
                </li>
                <li>
                    Geographischer Standpunkt (nur das Land)
                </li>
                <li>
                    Die bevorzugte Sprache um unsere Website darzustellen
                </li>
                <li>
                    Datum und Zeit wenn auf die Website zugegriffen wurde
                </li>
            </ul>
            <p class="text-base text-txPri font-normal leading-8">Hotjar wird diese Informationen nutzen um Ihre Nutzung
                unserer Website auszuwerten, Berichte der Nutzung zu erstellen, sowie sonstige Dienstleistungen, die die
                Websitebenutzung und Internetauswertung der Website betreffen. Hotjar benutzt zur Leistungserbringung auch
                Dienstleistungen von Drittunternehmen, wie beispielsweise Google Analytics und Optimizely. Diese
                Drittunternehmer können Informationen, die Ihr Browser im Rahmen des Website-Besuches sendet, wie
                beispielsweise Cookies oder IP-Anfragen, speichern. Für nähere Informationen, wie Google Analytics und
                Optimizely Daten speichern und verwenden, beachten Sie bitte deren entsprechende Datenschutzerklärungen.</p>

            <p class="text-base text-txPri font-normal leading-8">Wenn Sie diese Website weiter nutzen, stimmen Sie der oben
                genannten Verarbeitung der dortigen Daten durch Hotjar und deren Drittanbieter im Rahmen derer
                Datenschutzerklärungen zu.</p>

            <p class="text-base text-txPri font-normal leading-8">Die Cookies, die Hotjar nutzt, haben eine unterschiedliche
                „Lebensdauer“; manche bleiben bis zu 365 Tagen, manche bleiben nur während des aktuellen Besuchs gültig.</p>

            <p class="text-base text-txPri font-normal leading-8">Sie können die Erfassung der Daten durch Hotjar
                verhindern, indem Sie auf folgenden Link klicken und die dortigen Instruktionen befolgen: <a
                    href="https://www.hotjar.com/opt-out" class="text-primary-0">https://www.hotjar.com/opt-out.</a></p>

            <h4 class="text-sm text-txPri font-bold leading-8">Google reCAPTCHA</h4>
            <p class="text-base text-txPri font-normal leading-8">Auf dieser Website verwenden wir auch die reCAPTCHA
                Funktion von Google Ireland Limited, Gordon House, 4 Barrow St, Dublin, D04 E5W5, Irland („Google“). Diese
                Funktion dient vor allem zur Unterscheidung, ob eine Eingabe durch eine natürliche Person erfolgt oder
                missbräuchlich durch maschinelle und automatisierte Verarbeitung erfolgt. Der Dienst umfasst den Versand der
                IP-Adresse und ggf. weiterer von Google für den Dienst reCAPTCHA benötigter Daten an Google und erfolgt
                gemäß Art. 6 Abs. 1 lit. f DSGVO auf Basis unseres berechtigten Interesses an der Feststellung der
                individuellen Eigenverantwortung im Internet und der Vermeidung von Missbrauch und Spam. Im Rahmen der
                Nutzung von Google reCAPTCHA kann es auch zu einer Übermittlung von personenbezogenen Daten an die Server
                der Google LLC. in den USA kommen.</p>

            <p class="text-base text-txPri font-normal leading-8">Weiterführende Informationen zu Google reCAPTCHA sowie die
                Datenschutzerklärung von Google können Sie einsehen unter: https://www.google.com/intl/de/policies/privacy/
            </p>

            <p class="text-base text-txPri font-normal leading-8">Soweit rechtlich erforderlich, haben wir zur vorstehend
                dargestellten Verarbeitung Ihrer Daten Ihre Einwilligung gemäß Art. 6 Abs. 1 lit. a DSGVO eingeholt. Sie
                können Ihre erteilte Einwilligung jederzeit mit Wirkung für die Zukunft widerrufen. Um Ihren Widerruf
                auszuüben, befolgen Sie bitte die vorstehend geschilderte Möglichkeit zur Vornahme eines Widerspruchs.</p>
        </article>
    </div>
@endsection
