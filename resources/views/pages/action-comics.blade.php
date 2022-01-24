@extends('layouts.main-layout')
@section('content')
    
<div class="container-comic">

    {{-- Sezione barra blue con la relativa immagine --}}
    <section class="blue-bar">
        <div class="ms-container-comic">
            <div class="container-img">
                <img src="{{ asset('storage/asset/action-comics-1000.jpg') }}" alt="action comic">
                <div>
                    COMIC BOOK
                </div>
                <div>
                    VIEW GALLERY
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione description comic --}}
    <section class="description-comic">
        <div class="ms-container-comic">
            <div class="container-description"> 
                <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
                <div class="price-availability">
                    <div>
                        <span>
                            U.S. Price: <span>$19.99</span>
                        </span>
                        <span>
                            AVAILABLE
                        </span>
                    </div>
                    <div>
                        <span>
                            Check Availability ▾
                        </span>
                    </div>
                </div>
                <div class="text-description">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well ad all the variant covers, design sketches by Jim Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories: that stared it all---the Superman stories Action Comics #1 and 2 from 1938!
                </div>
            </div>
            <div class="container-advertisement">
                <h3>ADVERTISEMENT</h3>
                <img src="{{ asset("storage/asset/adv.png") }}" alt="adv">
            </div>
        </div>
    </section>

    {{-- Sezione info comic --}}
    <section class="info-comic">
        <div class="ms-container-comic">
            <div class="talent">
                <h4>Talent</h4>
                <div class="art">
                    <div>
                        Art by:
                    </div>
                    <div>
                        <span>
                            Josè Luis Garcìa-Lopez, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shister, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                        </span>
                    </div>
                </div>
                <div class="written">
                    <div>
                        Written by:
                    </div>
                    <div>
                        <span>
                            Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Micheal Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfaman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
                        </span>
                    </div>
                </div>
            </div>
            <div class="specs">
                <h4>Specs</h4>
                <div class="series">
                    <div>
                        Series:
                    </div>
                    <div>
                        <span>
                            ACTION COMICS
                        </span>
                    </div>
                </div>
                <div class="price">
                    <div>
                        U.S. Price:
                    </div>
                    <div>
                        $19.99
                    </div>
                </div>
                <div class="sale-date">
                    <div>
                        On Sale Date:
                    </div>
                    <div>
                        Oct 02 2018
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione info dc-comic --}}
    <section id="info-dc-comic">
        <div class="ms-container-comic">
            <div>
                <span>
                    DIGITAL COMICS
                </span>
                <span>

                </span>
            </div>
            <div>
                <span>
                    SHOP DC
                </span>
                <span>

                </span>
            </div>
            <div>
                <span>
                    COMIC SHOP LOCATOR
                </span>
                <span>

                </span>
            </div>
            <div>
                <span>
                    SUBSCRIPTION
                </span>
                <span>

                </span>
            </div>
        </div>
    </section>
</div>

@endsection