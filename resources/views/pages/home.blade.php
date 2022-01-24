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
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_ActionComics_5bd21706e069c3.48220974.jpg?itok=Hi822DTl" alt="action comics">
                        <span>ACTION COMICS</span>
                    </a>
                </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=1h3ZwJ5q" alt="american vampire 1976">
                        <span>AMERICAN VAMPIRE 1976</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="aquaman">
                        <span>AQUAMAN</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="batgirl">
                        <span>BATGIRL</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg?itok=DRQko-YJ"  alt="batman">
                        <span>BATMAN</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/series-covers/2018/10/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg?itok=DRQko-YJ"  alt="batman beyond">
                        <span>BATMAN BEYOND</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="batman/superman">
                        <span>BATMAN/SUPERMAN</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=SjKlcyXo" alt="batman/superman annual">
                        <span>BATMAN/SUPERMAN ANNUAL</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=KS4D" alt="batman: the joker war zone">
                        <span>BATMAN: THE JOKER WAR ZONE</span>
                    </a>
                </div> 
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=_Xkspirw" alt="batman: three jokers">
                        <span>BATMAN: THREE JOKERS</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=vOVVYIxQ"  alt="batman white knight presents">
                        <span>BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN</span>
                    </a>
                    </div>
                <div class="card">
                    <a href="{{ route('actionComics') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq"  alt="catwoman">
                        <span>CATWOMAN</span>
                    </a>
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
                            <img src="{{ asset('storage/asset/buy-comics-digital-comics.png') }}" alt="digital-comics icon">
                            <span>
                                DIGITAL COMICS
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/asset/buy-comics-merchandise.png') }}" alt="merchandise icon">
                            <span>
                                DC MERCHANDISE
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/asset/buy-comics-subscriptions.png') }}" alt="subscription icon">
                            <span>
                                SUBSCRIPTION
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/asset/buy-comics-shop-locator.png') }}" alt="shop locator icon">
                            <span>
                                COMIC SHOP LOCATOR
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/asset/buy-dc-power-visa.svg') }}" alt="power visa icon">
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