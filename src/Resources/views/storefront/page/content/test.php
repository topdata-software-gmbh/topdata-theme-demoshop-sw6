<div class="container-main">
    {% block page_content %}
    {% block cms_content %}
    {# @deprecated tag:v6.5.0 - keep if branch - page.cmsPage will be removed. Use page.landingPage.cmsPage instead #}
    {% if feature('v6.5.0.0') %}
    {% set cmsPageClasses = ('cms-page ' ~ page.landingPage.cmsPage.cssClass|striptags)|trim %}
    {% set cmsPage = page.landingPage ? page.landingPage.cmsPage : page.cmsPage %}
    {% else %}
    {% set cmsPageClasses = ('cms-page ' ~ page.cmsPage.cssClass|striptags)|trim %}
    {% set cmsPage = page.cmsPage %}
    {% endif %}
    {% set landingPage = page.landingPage ? page.landingPage : {} %}
    <div class="{{ cmsPageClasses }}">
        {% block page_content_blocks %}
        {% sw_include "@Storefront/storefront/page/content/detail.html.twig" with {'cmsPage': cmsPage, 'landingPage': landingPage} %}
        {% endblock %}
    </div>
    {% endblock %}
    {% endblock %}
</div>

<div class="container-main">
    {% block page_content %}
    {% block cms_content %}
    {# @deprecated tag:v6.5.0 - keep if branch - page.cmsPage will be removed. Use page.landingPage.cmsPage instead #}
    {% if feature('v6.5.0.0') %}
    {% set cmsPageClasses = ('cms-page ' ~ page.landingPage.cmsPage.cssClass|striptags)|trim %}
    {% set cmsPage = page.landingPage ? page.landingPage.cmsPage : page.cmsPage %}
    {% else %}
    {% set cmsPageClasses = ('cms-page ' ~ page.cmsPage.cssClass|striptags)|trim %}
    {% set cmsPage = page.cmsPage %}
    {% endif %}
    {% set landingPage = page.landingPage ? page.landingPage : {} %}
    <div class="{{ cmsPageClasses }}">
        {% block page_content_blocks %}
        {% sw_include "@Storefront/storefront/page/content/detail.html.twig" with {'cmsPage': cmsPage, 'landingPage': landingPage} %}
        {% endblock %}
    </div>
    {% endblock %}
    {% endblock %}
</div>
<div class="container-main">
    {% block page_content %}
    <div class="cms-page">
        {% block page_content_blocks %}
        {{ parent() }}
        {% endblock %}
        {% if page.header.navigation.active.translated.name == 'Lebensmittel' %}
        <div class="topdata_test">
            <h3>Nützlich und durchdacht - unsere Plugins</h3>
            <p>
                Mit den smarten Plugins von TopData kommen Sie entspannter durch Ihren Shopware-Alltag und bieten Ihren Kunden das perfekte Einkaufserlebnis.
            </p>
            <div class="row container" style="padding-left:0px !important;padding-right:0px !important;margin:auto;text-align:center;margin-top:70px">
                <div class="col-lg-4" style="text-align:left !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#">
                                <div id="overlayx">Kategorie Live-Suche
                                    <br/>
                                    <span style="font-size:14px">
                                            Erweitert die Produktsuche um eine Spalte mit Kategorievorschlägen und ermöglicht es dem Nutzer direkt in die Kategorie zu navigieren
                                        </span>
                                </div>
                            </a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/3d/78/79/1677490022/ico03.png">
                        </div>
                        <br/>
                        <p>
                            Kategorie Live-Suche
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;margin-left:10px;margin-right:10px;">
                        <div id="main1" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx1">Kategorie-Filter
                                    <br/>
                                    <span style="font-size:14px">
                                            Ermöglicht ein bequemes Filtern der Produkte in der Produktlistenansicht nach Kategorien.
                                        </span>
                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/2b/fc/1e/1674303372/ico01.png">
                        </div>
                        <br/>
                        <p>
                            Kategorie-Filter
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align:right !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main2" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx2">Produktvergleich
                                    <br/>
                                    <span style="font-size:14px">
                                            Erlaubt ein komfortables und übersichtliches Vergleichen von Artikeln anhand der Spezifikationen.
                                        </span>

                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/01/b7/19/1677489658/ico02.png">
                        </div>
                        <br/>
                        <p>
                            Produktvergleich
                        </p>
                    </div>
                </div>
            </div>
            <div class="row container" style="padding-left:0px !important;padding-right:0px !important;margin:auto;text-align:center;margin-top:70px">
                <div class="col-lg-4" style="text-align:left !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main3" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#">
                                <div id="overlayx3">TopFEED
                                    <br/>
                                    <span style="font-size:14px">
                                              veredelt Ihre Kerndaten mit wertvollen Zusatzinformationen und liefert erstklassige, konsistente Produktdaten wie Drucker, Warengruppen und Spezifikationen.
                                            </span>
                                </div>
                            </a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/99/81/75/1677492034/ico04.png
">
                        </div>
                        <br/>
                        <p>
                            TopFEED
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;margin-left:10px;margin-right:10px;">
                        <div id="main4" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx4">TopCONNECTOR
                                    <br/>
                                    <span style="font-size:14px">
                                             ist die bequeme Verbindung zu unserem Webservice und dient somit als Dreh und Angelpunkt für die Nutzung sämtlicher Plugins, auf Grundlage unserer Produktdaten.
                                            </span>

                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/72/af/e6/1677492023/ico05.png">
                        </div>
                        <br/>
                        <p>
                            TopCONNECTOR
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align:right !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main5" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx5">TopFINDER
                                    <br/>
                                    <span style="font-size:14px">
                                              ist eine intelligente Produktsuchmaschine für Drucker und deren Verbrauchsmaterialien, die sich kinderleicht in Ihre bestehende Shopware-Shoplösung integrieren lässt.
                                            </span>

                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/80/e8/35/1677492029/ico06.png">
                        </div>
                        <br/>
                        <p>
                            TopFINDER
                        </p>
                    </div>
                </div>
            </div>

            <div class="row container" style="padding-left:0px !important;padding-right:0px !important;margin:auto;text-align:center;margin-top:70px">
                <div class="col-lg-4" style="text-align:left !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main6" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#">
                                <div id="overlayx6">Farbvorschau
                                    <br/>
                                    <span style="font-size:14px">
                                              stellt mit Hilfe einer eigens hinterlegten Farbcode-Datenbank die erhältlichen Farben der Produkte dar.                                             </span>
                                </div>
                            </a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/7f/14/b9/1677508720/ico07.png">
                        </div>
                        <br/>
                        <p>
                            Farbvorschau
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;margin-left:10px;margin-right:10px;">
                        <div id="main7" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx7">PriceControl
                                    <br/>
                                    <span style="font-size:14px">
                                               erlaubt es dem Shopbetreiber die Preise für Gäste oder bestimmte Kundengruppen auszublenden.
                                            </span>
                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/46/0c/07/1677508819/ico08.png">
                        </div>
                        <br/>
                        <p>
                            PriceControl
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align:right !important;margin:0px !important">
                    <div style="margin:auto;text-align:center;border: solid 1px #909090;background-color:#fff;padding-top:30px;padding-left:30px;padding-right:30px;">
                        <div id="main8" class="rahmen col-md-12"  style="background-color:#eee;position:relative">
                            <a href="#"><div id="overlayx8">Elasticsearch-Konfigurator
                                    <br/>
                                    <span style="font-size:14px">
                                                Konfiguriert die shopwareeigene Suche, so dass ein besseres Auffinden der Artikel im Shop möglich wird.
                                            </span>
                                </div></a>
                            <img class="pic_ref" data-aos="zoom-in" src="http://localhost:81/media/7a/77/0b/1677508903/ico09.png">
                        </div>
                        <br/>
                        <p>
                            Elasticsearch-Konfigurator
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
    {% endblock %}
</div>