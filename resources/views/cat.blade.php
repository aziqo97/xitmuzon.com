<x-header>
    @slot('title')
        Панел добавит музику!
    @endslot
    <main class="main stretch-free-width" id="wajax">


        <div class="section">
            <div class="section__header d-flex jc-flex-start ai-center">
                <div class="section__title">Узбекский песни</div>
            </div>

            <div class="section__content section__items">
                <div id="dle-content">

                    @foreach($musics as $musics)
                    <div class="short-item item js-item"
                         data-track="/storage/{{ $musics->file }}"
                         data-title="{{ $musics->name }}" data-artist="{{ $musics->artist }}"
                         data-img="/public/src/no_image.jpg">
                        <div class="short-item__inner d-flex js-flex-start ai-center">
                            <a class="short-item__description item__description stretch-free-width d-flex wajax"
                               href="/music/{{ $musics->file }}">
                                <div class="item__title ws-nowrap" style="width: 50% !important;">{{ $musics->name }} </div>
                                <div class="item__subtitle ws-nowrap" style="width: 30% !important;">{{ $musics->artist }}
                                </div>
                                <div class="item__meta ws-nowrap">03:32</div>
                            </a>

                            <div class="short-item__img img-fit-cover order-first animated-element"><img
                                    src="/src/no_image.jpg"
                                    alt="{{ $musics->nomi }}"></div>
                            <div class="item__btn d-flex jc-center ai-center animated-element js-play"><span
                                    class="fas fa-play"></span></div>
                        </div>
                    </div>
                    @endforeach

                    <div class="pagination ignore-select" id="pagination">

                        <div class="pagination__btn-loader d-flex jc-center ai-center"><a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/2/" class="wajax">Загрузить еще</a>
                        </div>

                        <div class="pagination__pages d-flex jc-center"><span>1</span> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/2/" class="wajax">2</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/3/" class="wajax">3</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/4/" class="wajax">4</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/5/" class="wajax">5</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/6/" class="wajax">6</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/7/" class="wajax">7</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/8/" class="wajax">8</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/9/" class="wajax">9</a> <a
                                href="https://xitmuzon.com/uzbekskij-pesni/page/10/" class="wajax">10</a> <span
                                class="nav_ext">...</span> <a href="https://xitmuzon.com/uzbekskij-pesni/page/42/"
                                                              class="wajax">42</a></div>
                    </div>
                </div>
            </div>

        </div>


    </main>
</x-header>
