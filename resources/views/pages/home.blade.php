@extends('layouts.main-layout')
@section('content')

<div class="comics">
    {{-- Sezione card comics --}}
    <section id="content-main">
        <div class="ms-container">
            <div class="title-comics">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="cards-comics">
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_ActionComics_5bd21706e069c3.48220974.jpg?itok=Hi822DTl" alt="action comics">
                    <span>ACTION COMICS</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=1h3ZwJ5q" alt="american vampire 1976">
                    <span>AMERICAN VAMPIRE 1976</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2021/10/SeriesThumb10_AquamanBecoming_61773552a805e2.22319377.jpg?itok=CjCTZRhW" alt="aquaman">
                    <span>AQUAMAN</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v3_9_5b15cce22e6390.72593260.jpg?itok=zNkSastC" alt="batgirl">
                    <span>BATGIRL</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg?itok=DRQko-YJ"  alt="batman">
                    <span>BATMAN</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg?itok=DRQko-YJ"  alt="batman beyond">
                    <span>BATMAN BEYOND</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2018/06/bmsm_17_5b19be3b8d7325.97961527.jpg?itok=GkIyt_tt" alt="batman/superman">
                    <span>BATMAN/SUPERMAN</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=SjKlcyXo" alt="batman/superman annual">
                    <span>BATMAN/SUPERMAN ANNUAL</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=KS4D" alt="batman: the joker war zone">
                    <span>BATMAN: THE JOKER WAR ZONE</span>
                </div> 
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=_Xkspirw" alt="batman: three jokers">
                    <span>BATMAN: THREE JOKERS</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=vOVVYIxQ"  alt="batman white knight presents">
                    <span>BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN</span>
                </div>
                <div class="card">
                    <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2018/06/catwoman_v4_21_5b17050d96d8c9.21673603.jpg?itok=2S4hFP2q"  alt="catwoman">
                    <span>CATWOMAN</span>
                </div>
            </div>
            <div class="more-cards">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </section>

    {{-- Sezione icon-information --}}
    <section id="icons-main">
        <div class="ms-container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg" alt="digital-comics icon">
                            <span>
                                DIGITAL COMICS
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCshop.svg" alt="merchandise icon">
                            <span>
                                DC MERCHANDISE
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg" alt="subscription icon">
                            <span>
                                SUBSCRIPTION
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-locator.svg" alt="shop locator icon">
                            <span>
                                COMIC SHOP LOCATOR
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg" alt="power visa icon">
                            <span>
                                DC POWER VISA
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</div>

@endsection