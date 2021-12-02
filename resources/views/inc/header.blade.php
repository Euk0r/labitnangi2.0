<header class="main-header">
    <div class="container">
        <div class="row pt-2">
            <div class="col-auto">
                <a class="link-primary" href="tel:83499221357">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-telephone"
                         viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    8(34992)21357
                </a>
            </div>
            <div class="col-auto" style="border-left: 1px solid #CACACA">
                <a class="link-primary" href="mailto:library@lbt.yanao.ru">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    library@lbt.yanao.ru
                </a>
            </div>
        </div>
        <div class="row pb-3 pt-1">
            <div class="col-12 col-md-9">
                <p class="site-title mb-2 mt-3"><a href="/" rel="home">Библиотеки города
                        Лабытнанги</a></p>
                <p class="site-description mb-3 mb-md-0">Официальный сайт МАУК "ЦБС" г. Лабытнанги</p>
            </div>
            <div class="col-12 col-md-3 my-auto">
                <form role="search" method="get" class="search-form" action="">
                    <label class="w-100">
                        <span class="screen-reader-text">Искать:</span>
                        <input type="search" class="search-field" placeholder="Поиск…" value="" name="s"
                               title="Искать:">
                    </label>
                    <button type="submit" class="btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search mb-1" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="row pb-2">
        <?= $main_nav ?>
        <!--
            <div id="main-nav" class="clear-fix">
                <div class="container">
                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-expanded="false">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                            <i class="fa fa-close"></i>
                            Меню
                        </button>
                        <div class="wrap-menu-content">
                            <div class="menu-grafik-meropriyatij3-container">
                                <ul id="primary-menu" class="menu">
                                    <li id="menu-item-38371"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-38371"
                                        aria-haspopup="true"><a href="#">Посетителям</a>
                                        <button class="dropdown-toggle" aria-expanded="false"><span
                                                class="screen-reader-text"></span></button>
                                        <ul class="sub-menu">
                                            <li id="menu-item-40101"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40101">
                                                <a href="biblioteka-onlajn/">Библиотека
                                                    онлайн</a></li>
                                            <li id="menu-item-39761"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39761">
                                                <a href="rezhim-raboty-bibliotek/">Режим работы
                                                    библиотек</a></li>
                                            <li id="menu-item-31205"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31205">
                                                <a href="category/press-reliz/">Афиша</a></li>
                                            <li id="menu-item-34846"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-34846">
                                                <a href="category/51-8/">Важная информация</a>
                                            </li>
                                            <li id="menu-item-39759"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39759">
                                                <a href="chasto-zadavaemye-voprosy/">Часто
                                                    задаваемые вопросы</a></li>
                                            <li id="menu-item-44917"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44917">
                                                <a href="bibliotechnye-novinki-2/">Библиотечные
                                                    новинки</a></li>
                                            <li id="menu-item-36168"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36168">
                                                <a href="periodicheskie-izdaniya/">Периодические
                                                    издания</a></li>
                                            <li id="menu-item-39983"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-39983">
                                                <a href="category/vstrechi-u-knizhnoj-polki/">Встречи
                                                    у книжной полки</a></li>
                                            <li id="menu-item-44851"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44851">
                                                <a href="profilaktika-nasiliya/">Профилактика
                                                    насилия</a></li>
                                            <li id="menu-item-38540"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38540">
                                                <a href="protivodejstvie-korruptsii/">Противодействие
                                                    коррупции</a></li>
                                            <li id="menu-item-38523"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38523">
                                                <a href="profilaktika-grippa-koronavirusnoj-infektsii-i-orvi/">Профилактика
                                                    гриппа коронавирусной инфекции и ОРВИ</a></li>
                                            <li id="menu-item-35347"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-35347">
                                                <a href="category/51-76/">Пост-релизы</a></li>
                                            <li id="menu-item-37488"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37488">
                                                <a href="pamyatki-o-pravilah-bezopasnosti-dlya-detej/">Памятки
                                                    о правилах безопасности для детей</a></li>
                                            <li id="menu-item-37407"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37407">
                                                <a href="antiterroristicheskie-materialy/">Антитеррористические
                                                    материалы</a></li>
                                            <li id="menu-item-37409"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37409">
                                                <a href="vich-infektsiya-i-virusnye-gepatity-v-i-s/">ВИЧ-инфекция
                                                    и вирусные гепатиты В и С</a></li>
                                            <li id="menu-item-32804"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32804">
                                                <a href="2018/03/01/dekada-tolerantnosti/">Декада
                                                    толерантности</a></li>
                                            <li id="menu-item-33035"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33035">
                                                <a href="http:///telefon-doveria.ru">Детский телефон доверия</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-656"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-656"
                                        aria-haspopup="true"><a href="category/kluby/">Клубы</a>
                                        <button class="dropdown-toggle" aria-expanded="false"><span
                                                class="screen-reader-text"></span></button>
                                        <ul class="sub-menu">
                                            <li id="menu-item-39960"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39960">
                                                <a href="klub-dlya-lyudej-s-ogranichennymi-vozmozhnostyami-zdorovya-po-zreniyu-vozrozhdenie/">Клуб
                                                    для людей с ограниченными возможностями здоровья по зрению
                                                    «Возрождение»</a></li>
                                            <li id="menu-item-39954"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39954">
                                                <a href="kraevedcheskij-klub-yaha/">Краеведческий
                                                    клуб «Яха»</a></li>
                                            <li id="menu-item-39948"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39948">
                                                <a href="intellektualno-dosugovyj-tsentr-molodyozhnyj-forum/">Интеллектуально-досуговый
                                                    центр «Молодёжный форум»</a></li>
                                            <li id="menu-item-39942"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39942">
                                                <a href="informatsionnyj-tsentr-rost-po-voprosam-profilaktiki-narkomanii-i-alkogolizma-sredi-detej-i-podrostkov/">Информационный
                                                    центр «РОСТ» по вопросам профилактики наркомании и алкоголизма среди
                                                    детей и подростков</a></li>
                                            <li id="menu-item-39938"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39938">
                                                <a href="kukolnyj-kruzhok-petrushka/">Кукольный
                                                    кружок «Петрушка»</a></li>
                                            <li id="menu-item-39930"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39930">
                                                <a href="tsentr-pravovoj-informatsii-pravovoj-navigator/">Центр
                                                    правовой информации «Правовой навигатор»</a></li>
                                            <li id="menu-item-39921"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39921">
                                                <a href="klub-molodogo-izbiratelya-elektorat/">Клуб
                                                    молодого избирателя «Электорат»</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-31610"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-31610"
                                        aria-haspopup="true"><a
                                            href="category/resursy-i-uslugi/">Ресурсы и
                                            услуги</a>
                                        <button class="dropdown-toggle" aria-expanded="false"><span
                                                class="screen-reader-text"></span></button>
                                        <ul class="sub-menu">
                                            <li id="menu-item-20968"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20968">
                                                <a href="category/resursy-i-uslugi/elektronnaya-biblioteka/">Электронная
                                                    библиотека</a></li>
                                            <li id="menu-item-34901"
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-34901">
                                                <a href="2018/10/15/udalennyj-elektronnyj-chitalnyj-zal-prezidentskoj-biblioteki-im-b-n-eltsina/">Удаленный
                                                    электронный читальный зал Президентской библиотеки им. Б.Н.
                                                    Ельцина</a></li>
                                            <li id="menu-item-2218"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2218">
                                                <a href="http://catalog.liblbt.yanao.ru">Электронный каталог</a></li>
                                            <li id="menu-item-39820"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39820">
                                                <a href="uslugii/">Услуги</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-38370"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-38370"
                                        aria-haspopup="true"><a href="#">Учреждение</a>
                                        <button class="dropdown-toggle" aria-expanded="false"><span
                                                class="screen-reader-text"></span></button>
                                        <ul class="sub-menu">
                                            <li id="menu-item-812"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-812">
                                                <a href="2013/12/25/istoriya-tsbs/">История
                                                    ЦБС</a></li>
                                            <li id="menu-item-811"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-811">
                                                <a href="2013/12/25/kak-nas-najti/">Как нас
                                                    найти</a></li>
                                            <li id="menu-item-39981"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39981">
                                                <a href="uchr/">Учредительные документы и
                                                    устав</a></li>
                                            <li id="menu-item-35154"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35154">
                                                <a href="infdoc/">Плановые показатели и отчёты о
                                                    результатах деятельности</a></li>
                                            <li id="menu-item-38344"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38344">
                                                <a href="struktura/">Структура</a></li>
                                            <li id="menu-item-39729"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39729">
                                                <a href="rukovodyashhij-sostav/">Руководящий
                                                    состав</a></li>
                                            <li id="menu-item-38336"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38336">
                                                <a href="uchreditel/">Учредитель</a></li>
                                            <li id="menu-item-38369"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38369">
                                                <a href="itogi-nezavisimoj-otsenki-kachestva-uslug/">Итоги
                                                    независимой оценки качества услуг</a></li>
                                            <li id="menu-item-39886"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39886">
                                                <a href="39885-2/">Материально–техническая база
                                                    МАУК «ЦБС»</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-38338"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-38338"
                                        aria-haspopup="true"><a href="obratnaya-svyaz/">Обратная
                                            связь</a>
                                        <button class="dropdown-toggle" aria-expanded="false"><span
                                                class="screen-reader-text"></span></button>
                                        <ul class="sub-menu">
                                            <li id="menu-item-26221"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26221">
                                                <a href="forma_obrascheniya/">Обращения
                                                    граждан</a></li>
                                            <li id="menu-item-39751"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39751">
                                                <a href="predlozheniya-po-uluchsheniyu-kachestva-okazyvaemyh-uslug/">Предложения
                                                    по улучшению качества оказываемых услуг</a></li>
                                            <li id="menu-item-41898"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41898">
                                                <a href="anketa/">Оценка качества услуг</a></li>
                                            <li id="menu-item-41900"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41900">
                                                <a href="opros-o-rezhime-raboty-uchrezhdeniya/">Опрос
                                                    о режиме работы учреждения</a></li>
                                            <li id="menu-item-32703"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32703">
                                                <a href="2017/12/10/elektronnaya-kniga-pocheta/">Электронная
                                                    книга почёта</a></li>
                                            <li id="menu-item-32357"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32357">
                                                <a href="prodlenie-knigi-online/">Продление
                                                    книги Online</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-16108"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16108">
                                        <a href="karta-sajta/">Карта сайта</a></li>
                                    <li id="menu-item-44822"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44822">
                                        <a href="snezhinka/">Снежинка</a></li>
                                </ul>
                            </div>
                        </div>
            </nav>
        </div>
    </div>
    -->
        </div>
    </div>
</header>
