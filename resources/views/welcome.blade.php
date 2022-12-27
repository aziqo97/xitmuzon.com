
<x-header>
        @slot('title')
        Добро пожаловать в DarkSide!
    @endslot
                <main class="main stretch-free-width" id="wajax" style="height: auto !important;">


                    <div class="section d-flex" style="height: auto !important;">
                        <div class="section section--new stretch-free-width" style="height: auto !important;">

                            <div class="section__header d-flex jc-space-between ai-center">
                                <div class="section__title"><span>Новые</span> песни</div>
                            </div>
                            <div class="section__content section__items d-flex" style="height: auto !important;">

                                @foreach($musics as $musics)
                                <div class="short-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/bunyodbek-odilbekov-ortogimga-tegib-ketgan-qiz.mp3"
                                     data-title="{{ $musics->name }}"
                                     data-artist="{{ $musics->artist }}">
                                    <div class="short-item__inner d-flex js-flex-start ai-center">
                                        <a class="short-item__description item__description stretch-free-width d-flex wajax"
                                           href="/music/{{ $musics->id }}">
                                            <div class="item__title ws-nowrap" style="width: 50% !important;">
                                                {{ $musics->name }}
                                            </div>
                                            <div class="item__subtitle ws-nowrap" style="width: 30% !important;">
                                                {{ $musics->artist }}
                                            </div>
                                            <div class="item__meta ws-nowrap">{{ $musics->created_at }}</div>
                                        </a>

                                        <div class="short-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="{{ $musics->name }}">
                                        </div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>
                                    </div>
                                </div>

                                @endforeach
                                <div class="pagination ignore-select" id="pagination">


                                    <div class="pagination__pages d-flex jc-center"><span>1</span> <a
                                            href="https://xitmuzon.com/page/2/" class="wajax">2</a> <a
                                            href="https://xitmuzon.com/page/3/" class="wajax">3</a> <a
                                            href="https://xitmuzon.com/page/4/" class="wajax">4</a> <a
                                            href="https://xitmuzon.com/page/5/" class="wajax">5</a> <a
                                            href="https://xitmuzon.com/page/6/" class="wajax">6</a> <a
                                            href="https://xitmuzon.com/page/7/" class="wajax">7</a> <a
                                            href="https://xitmuzon.com/page/8/" class="wajax">8</a> <a
                                            href="https://xitmuzon.com/page/9/" class="wajax">9</a> <a
                                            href="https://xitmuzon.com/page/10/" class="wajax">10</a> <span
                                            class="nav_ext">...</span> <a href="https://xitmuzon.com/page/89/"
                                                                          class="wajax">89</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="section section--top">
                            <div class="section__header d-flex jc-space-between ai-center">
                                <div class="section__title"><span>Топ</span> за день</div>
                            </div>

                            <div class="section__content section__items d-flex">
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/bunyodbek-odilbekov-ortogimga-tegib-ketgan-qiz.mp3"
                                     data-title="Oʼrtogʼimga tegib ketgan qiz (Xitmuzon.Com)"
                                     data-artist="Bunyodbek Odilbekov"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1816-bunyodbek-odilbekov-ortogimga-tegib-ketgan-qiz.html">
                                            <div class="item__title ws-nowrap">Bunyodbek Odilbekov</div>
                                            <div class="item__subtitle ws-nowrap">Oʼrtogʼimga tegib ketgan qiz
                                                (Xitmuzon.Com)
                                            </div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="Bunyodbek Odilbekov - Oʼrtogʼimga tegib ketgan qiz (Xitmuzon.Com)">
                                        </div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/gavhar-dil.mp3"
                                     data-title="Dil (Xitmuzon.Com)" data-artist="Gavhar"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1815-gavhar-dil.html">
                                            <div class="item__title ws-nowrap">Gavhar</div>
                                            <div class="item__subtitle ws-nowrap">Dil (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg" alt="Gavhar - Dil (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/erkin-xudoyqulov-ozbek-qizlari.mp3"
                                     data-title="Oʼzbek qizlari (Xitmuzon.Com)" data-artist="Erkin Xudoyqulov"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1814-erkin-xudoyqulov-ozbek-qizlari.html">
                                            <div class="item__title ws-nowrap">Erkin Xudoyqulov</div>
                                            <div class="item__subtitle ws-nowrap">Oʼzbek qizlari (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="Erkin Xudoyqulov - Oʼzbek qizlari (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/kaniza-kuyov-joralar.mp3"
                                     data-title="Kuyov joʼralar (Xitmuzon.Com)" data-artist="Kaniza"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1813-kaniza-kuyov-joralar.html">
                                            <div class="item__title ws-nowrap">Kaniza</div>
                                            <div class="item__subtitle ws-nowrap">Kuyov joʼralar (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg" alt="Kaniza - Kuyov joʼralar (Xitmuzon.Com)">
                                        </div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/semicenk-reynmen-yana-yana-remix-.mp3"
                                     data-title="Yana Yana ( Remix ) (Xitmuzon.Com)"
                                     data-artist="Semicenk &amp; Reynmen"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/azerbajdzhanskie-pesni/1812-semicenk-reynmen-yana-yana-remix-.html">
                                            <div class="item__title ws-nowrap">Semicenk &amp; Reynmen</div>
                                            <div class="item__subtitle ws-nowrap">Yana Yana ( Remix ) (Xitmuzon.Com)
                                            </div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="Semicenk &amp; Reynmen - Yana Yana ( Remix ) (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/java-gaz-yoq.mp3"
                                     data-title="Gaz yoʼq (Xitmuzon.Com)" data-artist="JAVA"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1811-java-gaz-yoq.html">
                                            <div class="item__title ws-nowrap">JAVA</div>
                                            <div class="item__subtitle ws-nowrap">Gaz yoʼq (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg" alt="JAVA - Gaz yoʼq (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/ziyoda-ona-duosi.mp3"
                                     data-title="Ona duosi (Xitmuzon.Com)" data-artist="Ziyoda"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1810-ziyoda-ona-duosi.html">
                                            <div class="item__title ws-nowrap">Ziyoda</div>
                                            <div class="item__subtitle ws-nowrap">Ona duosi (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg" alt="Ziyoda - Ona duosi (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/funda-arar-boşver.mp3"
                                     data-title="Boşver (Xitmuzon.Com)" data-artist="Funda Arar"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/tureckij-pesni/1809-funda-arar-bo%C5%9Fver.html">
                                            <div class="item__title ws-nowrap">Funda Arar</div>
                                            <div class="item__subtitle ws-nowrap">Boşver (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg" alt="Funda Arar - Boşver (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/uzeyir-mehdizade-baxir-sene.mp3"
                                     data-title="Baxir Sene (Xitmuzon.Com)" data-artist="Uzeyir Mehdizade"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/azerbajdzhanskie-pesni/1808-uzeyir-mehdizade-baxir-sene.html">
                                            <div class="item__title ws-nowrap">Uzeyir Mehdizade</div>
                                            <div class="item__subtitle ws-nowrap">Baxir Sene (Xitmuzon.Com)</div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="Uzeyir Mehdizade - Baxir Sene (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                                <div class="top-item item js-item"
                                     data-track="https://xitmuzon.com/uploads/files/yusuf-eltoyev-betayin-qiz-live-2022.mp3"
                                     data-title="Betayin Qiz (Live 2022) (Xitmuzon.Com)" data-artist="Yusuf Eltoyev"
                                     data-img="/templates/MusicTrip/dleimages/no_image.jpg">
                                    <div class="top-item__inner d-flex js-flex-start ai-center">

                                        <a class="top-item__description item__description stretch-free-width wajax"
                                           href="https://xitmuzon.com/uzbekskij-pesni/1807-yusuf-eltoyev-betayin-qiz-live-2022.html">
                                            <div class="item__title ws-nowrap">Yusuf Eltoyev</div>
                                            <div class="item__subtitle ws-nowrap">Betayin Qiz (Live 2022)
                                                (Xitmuzon.Com)
                                            </div>
                                        </a>
                                        <div class="top-item__img img-fit-cover order-first animated-element"><img
                                                src="/src/no_image.jpg"
                                                alt="Yusuf Eltoyev - Betayin Qiz (Live 2022) (Xitmuzon.Com)"></div>
                                        <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                                class="fas fa-play"></span></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </main> <!-- END MAIN -->

</x-header>
