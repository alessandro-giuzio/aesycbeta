@extends('layouts.app')

@section('content')
    <div class="container flex flex-col pt-12 px-4 lg:px-[120px] pb-24 gap-12">
        {{-- heading --}}
        @include('partials.heading', ['text' => 'Inpressum'])
        {{-- content --}}
        <div class="flex flex-col lg:flex-row items-start gap-24 p-0">
            {{-- left content --}}
            <div class="flex flex-col items-start gap-4">
                <p class="text-2xl text-txPri font-bold leading-8">Verantworlich im Sinne Von § 5 <br> Telemediengesetz (TMG)
                </p>
                <p class="text-base text-txPri font-normal leading-8">
                    <span class="text-primary-0">AESYC UG (haftungsbeschränkt)</span> <br>

                    Sprengerstraße 99
                    66773 Schwalbach <br>

                    +49 1577 4506929
                    je@aesyc.systems <br>

                    Geschäftsführer: Jan-Eric Schober <br>
                    Umsatzsteueridentifikationsnummer gemäß § 27 a <br>
                    Umsatzsteuergesetz: DE <br>
                    Gerichtsstand: Saarlouis <br>
                    Steuerliche Verhältnisse: folgt <br>
                    Amtsgericht: Saarbrücken folgt <br>
                    Sitz des Unternehmens: Schwalbach <br>
                </p>

            </div>
            {{-- right content --}}
            <div class="flex flex-col items-start gap-8">
                <h2 class="text-xl text-txPri font-bold leading-8">Haftungsausschluss (Disclaimer)</h2>
                {{-- text --}}
                <article class="prose lg:prose-xl flex flex-col items-start">
                    <h4 class="text-sm text-txPri font-bold leading-8">1. Inhalt des Onlineangebotes</h4>
                    <p class="text-base text-txPri font-normal leading-8">Der Autor übernimmt keinerlei Gewähr für die
                        Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen.
                        Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller oder ideeller Art beziehen,
                        die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung
                        fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen,
                        sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden
                        vorliegt. Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich
                        vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu
                        ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</p>

                    <h4 class="text-sm text-txPri font-bold leading-8">2. Verweise und Links</h4>
                    <p class="text-base text-txPri font-normal leading-8">Bei direkten oder indirekten Verweisen auf fremde
                        Internetseiten („Links“), die außerhalb des Verantwortungsbereiches des Autors liegen, würde eine
                        Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor von den Inhalten
                        Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger
                        Inhalte zu verhindern. Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung
                        keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und
                        zukünftige Gestaltung, die Inhalte oder die Urheberschaft der gelinkten/verknüpften Seiten hat der
                        Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdrücklich von allen Inhalten aller
                        gelinkten /verknüpften Seiten, die nach der Linksetzung verändert wurden. Diese Feststellung gilt
                        für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für
                        Fremdeinträge in vom Autor eingerichteten Gästebüchern, Diskussionsforen und Mailinglisten. Für
                        illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die aus der Nutzung
                        oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der
                        Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige
                        Veröffentlichung lediglich verweist.</p>

                    <h4 class="text-sm text-txPri font-bold leading-8">3. Urheber- und Kennzeichenrecht</h4>
                    <p class="text-base text-txPri font-normal leading-8">Der Autor ist bestrebt, in allen Publikationen die
                        Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm
                        selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie
                        Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des
                        Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen
                        uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der
                        jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluß zu
                        ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für
                        veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine
                        Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen
                        elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht
                        gestattet.</p>

                    <h4 class="text-sm text-txPri font-bold leading-8">4. Rechtswirksamkeit dieses Haftungsausschlusses</h4>
                    <p class="text-base text-txPri font-normal leading-8">Dieser Haftungsausschluss ist als Teil des
                        Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder
                        einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht
                        vollständig entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer
                        Gültigkeit davon unberührt.</p>
                </article>
            </div>
        </div>
    </div>
@endsection
