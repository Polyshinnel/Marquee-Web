@extends('Layers.layout')
@section('content')
<div class="main-page-block">
    <div class="main-page-logo">
        <img src="assets/img/logo.svg" alt="logo" />
    </div>

    <div class="main-page-title">
        <h1>
            Modern kitchens<br />
            in Dubai
        </h1>
        <div class="mensons-logo">
            <img src="assets/img/manufacturers/mensons.svg" alt="Mensons" />
        </div>
        <div class="mensons-info">
            <span>Made in Italy, since 1964</span>
        </div>
    </div>

    <div class="main-page-block-item main-page-block-left">
        <div class="main-page-left-content">
            <div class="main-page-phone-block">
                <img src="assets/img/icons/header/phone.svg" alt="phone" />
                <span>+971 50 613 2486</span>
            </div>

            <div class="main-page-lang-block">
                <a href="/" class="lang-switch main-page-lang-switch">
                    <span>ru</span>
                    <img src="assets/img/icons/header/planet.svg" alt="lang" />
                </a>
            </div>

            <div class="main-page-address-block">
                <img
                    src="assets/img/icons/header/location.svg"
                    alt="location"
                />
                <span
                    >39/1, 12nd Street, Al Quoz 3, Al Quoz, Hadaek Mohammed Bin
                    Rashid, Dubai Emirate</span
                >
            </div>
        </div>
    </div>

    <div class="main-page-block-item main-page-block-right">
        <picture>
            <source
                media="(max-width: 560px)"
                srcset="assets/img/main-page-mobile-cover.webp"
            />
            <img
                src="assets/img/main-page-cover.webp"
                alt="Modern kitchens in Dubai"
            />
        </picture>
    </div>
</div>

<div class="kitchens-variants">
    <div class="kitchens-variants-tabs">
        <div class="kitchens-variants-tab active" data-tab="light">
            <div class="kitchens-variants-tab-circle" style="background-color: #D7D8D3;"></div>
            <span>Light</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="dark">
            <div class="kitchens-variants-tab-circle" style="background-color: #3B3A3C;"></div>
            <span>Dark</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="bright">
            <div class="kitchens-variants-tab-circle" style="background-color: #A0563B;"></div>
            <span>Bright</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="wood">
            <div class="kitchens-variants-tab-circle" style="background-color: #B39F7E;"></div>
            <span>Wood</span>
        </div>
    </div>
    
    <div class="kitchens-variants-content">
        <!-- Light Kitchens -->
        <div class="kitchens-variants-panel active" data-panel="light">
            <div class="kitchens-variants-layout">
                <div class="kitchens-variants-slider">
                    <div class="kitchens-slider-container">
                        <div class="kitchens-slider-track">
                            <div class="kitchens-slider-slide" data-index="0">
                                <img src="assets/img/kitchens/kitchen-block/light/1.jpg" alt="Light Kitchen 1" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img src="assets/img/kitchens/kitchen-block/light/2.jpg" alt="Light Kitchen 2" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img src="assets/img/kitchens/kitchen-block/light/3.jpg" alt="Light Kitchen 3" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img src="assets/img/kitchens/kitchen-block/light/4.jpg" alt="Light Kitchen 4" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img src="assets/img/kitchens/kitchen-block/light/5.jpg" alt="Light Kitchen 5" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img src="assets/img/kitchens/kitchen-block/light/6.jpg" alt="Light Kitchen 6" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img src="assets/img/kitchens/kitchen-block/light/7.jpg" alt="Light Kitchen 7" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img src="assets/img/kitchens/kitchen-block/light/8.jpg" alt="Light Kitchen 8" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img src="assets/img/kitchens/kitchen-block/light/9.jpg" alt="Light Kitchen 9" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img src="assets/img/kitchens/kitchen-block/light/10.jpg" alt="Light Kitchen 10" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img src="assets/img/kitchens/kitchen-block/light/11.jpg" alt="Light Kitchen 11" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img src="assets/img/kitchens/kitchen-block/light/12.jpg" alt="Light Kitchen 12" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img src="assets/img/kitchens/kitchen-block/light/13.jpg" alt="Light Kitchen 13" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img src="assets/img/kitchens/kitchen-block/light/14.jpg" alt="Light Kitchen 14" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="14">
                                <img src="assets/img/kitchens/kitchen-block/light/15.jpg" alt="Light Kitchen 15" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="15">
                                <img src="assets/img/kitchens/kitchen-block/light/16.jpg" alt="Light Kitchen 16" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="16">
                                <img src="assets/img/kitchens/kitchen-block/light/17.jpg" alt="Light Kitchen 17" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="17">
                                <img src="assets/img/kitchens/kitchen-block/light/18.jpg" alt="Light Kitchen 18" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="18">
                                <img src="assets/img/kitchens/kitchen-block/light/19.jpg" alt="Light Kitchen 19" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="19">
                                <img src="assets/img/kitchens/kitchen-block/light/20.jpg" alt="Light Kitchen 20" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="20">
                                <img src="assets/img/kitchens/kitchen-block/light/21.jpg" alt="Light Kitchen 21" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="21">
                                <img src="assets/img/kitchens/kitchen-block/light/22.jpg" alt="Light Kitchen 22" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="22">
                                <img src="assets/img/kitchens/kitchen-block/light/23.jpg" alt="Light Kitchen 23" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="23">
                                <img src="assets/img/kitchens/kitchen-block/light/24.jpg" alt="Light Kitchen 24" />
                            </div>
                        </div>

                        <button class="kitchens-slider-arrow kitchens-slider-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <button class="kitchens-slider-arrow kitchens-slider-next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img src="assets/img/kitchens/kitchen-block/light/1.jpg" alt="Light Kitchen 1" />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img src="assets/img/kitchens/kitchen-block/light/2.jpg" alt="Light Kitchen 2" />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img src="assets/img/kitchens/kitchen-block/light/3.jpg" alt="Light Kitchen 3" />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img src="assets/img/kitchens/kitchen-block/light/4.jpg" alt="Light Kitchen 4" />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img src="assets/img/kitchens/kitchen-block/light/5.jpg" alt="Light Kitchen 5" />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img src="assets/img/kitchens/kitchen-block/light/6.jpg" alt="Light Kitchen 6" />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img src="assets/img/kitchens/kitchen-block/light/7.jpg" alt="Light Kitchen 7" />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img src="assets/img/kitchens/kitchen-block/light/8.jpg" alt="Light Kitchen 8" />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img src="assets/img/kitchens/kitchen-block/light/9.jpg" alt="Light Kitchen 9" />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img src="assets/img/kitchens/kitchen-block/light/10.jpg" alt="Light Kitchen 10" />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img src="assets/img/kitchens/kitchen-block/light/11.jpg" alt="Light Kitchen 11" />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img src="assets/img/kitchens/kitchen-block/light/12.jpg" alt="Light Kitchen 12" />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img src="assets/img/kitchens/kitchen-block/light/13.jpg" alt="Light Kitchen 13" />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img src="assets/img/kitchens/kitchen-block/light/14.jpg" alt="Light Kitchen 14" />
                    </div>
                    <div class="kitchens-grid-item" data-index="14">
                        <img src="assets/img/kitchens/kitchen-block/light/15.jpg" alt="Light Kitchen 15" />
                    </div>
                    <div class="kitchens-grid-item" data-index="15">
                        <img src="assets/img/kitchens/kitchen-block/light/16.jpg" alt="Light Kitchen 16" />
                    </div>
                    <div class="kitchens-grid-item" data-index="16">
                        <img src="assets/img/kitchens/kitchen-block/light/17.jpg" alt="Light Kitchen 17" />
                    </div>
                    <div class="kitchens-grid-item" data-index="17">
                        <img src="assets/img/kitchens/kitchen-block/light/18.jpg" alt="Light Kitchen 18" />
                    </div>
                    <div class="kitchens-grid-item" data-index="18">
                        <img src="assets/img/kitchens/kitchen-block/light/19.jpg" alt="Light Kitchen 19" />
                    </div>
                    <div class="kitchens-grid-item" data-index="19">
                        <img src="assets/img/kitchens/kitchen-block/light/20.jpg" alt="Light Kitchen 20" />
                    </div>
                    <div class="kitchens-grid-item" data-index="20">
                        <img src="assets/img/kitchens/kitchen-block/light/21.jpg" alt="Light Kitchen 21" />
                    </div>
                    <div class="kitchens-grid-item" data-index="21">
                        <img src="assets/img/kitchens/kitchen-block/light/22.jpg" alt="Light Kitchen 22" />
                    </div>
                    <div class="kitchens-grid-item" data-index="22">
                        <img src="assets/img/kitchens/kitchen-block/light/23.jpg" alt="Light Kitchen 23" />
                    </div>
                    <div class="kitchens-grid-item" data-index="23">
                        <img src="assets/img/kitchens/kitchen-block/light/24.jpg" alt="Light Kitchen 24" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark Kitchens -->
        <div class="kitchens-variants-panel" data-panel="dark">
            <div class="kitchens-variants-layout">
                <div class="kitchens-variants-slider">
                    <div class="kitchens-slider-container">
                        <div class="kitchens-slider-track">
                            <div class="kitchens-slider-slide" data-index="0">
                                <img src="assets/img/kitchens/kitchen-block/dark/1.jpg" alt="Dark Kitchen 1" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img src="assets/img/kitchens/kitchen-block/dark/2.jpg" alt="Dark Kitchen 2" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img src="assets/img/kitchens/kitchen-block/dark/3.jpg" alt="Dark Kitchen 3" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img src="assets/img/kitchens/kitchen-block/dark/4.jpg" alt="Dark Kitchen 4" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img src="assets/img/kitchens/kitchen-block/dark/5.jpg" alt="Dark Kitchen 5" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img src="assets/img/kitchens/kitchen-block/dark/6.jpg" alt="Dark Kitchen 6" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img src="assets/img/kitchens/kitchen-block/dark/7.jpg" alt="Dark Kitchen 7" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img src="assets/img/kitchens/kitchen-block/dark/8.jpg" alt="Dark Kitchen 8" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img src="assets/img/kitchens/kitchen-block/dark/9.jpg" alt="Dark Kitchen 9" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img src="assets/img/kitchens/kitchen-block/dark/10.jpg" alt="Dark Kitchen 10" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img src="assets/img/kitchens/kitchen-block/dark/11.jpg" alt="Dark Kitchen 11" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img src="assets/img/kitchens/kitchen-block/dark/12.jpg" alt="Dark Kitchen 12" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img src="assets/img/kitchens/kitchen-block/dark/13.jpg" alt="Dark Kitchen 13" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img src="assets/img/kitchens/kitchen-block/dark/14.jpg" alt="Dark Kitchen 14" />
                            </div>
                        </div>

                        <button class="kitchens-slider-arrow kitchens-slider-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <button class="kitchens-slider-arrow kitchens-slider-next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img src="assets/img/kitchens/kitchen-block/dark/1.jpg" alt="Dark Kitchen 1" />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img src="assets/img/kitchens/kitchen-block/dark/2.jpg" alt="Dark Kitchen 2" />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img src="assets/img/kitchens/kitchen-block/dark/3.jpg" alt="Dark Kitchen 3" />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img src="assets/img/kitchens/kitchen-block/dark/4.jpg" alt="Dark Kitchen 4" />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img src="assets/img/kitchens/kitchen-block/dark/5.jpg" alt="Dark Kitchen 5" />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img src="assets/img/kitchens/kitchen-block/dark/6.jpg" alt="Dark Kitchen 6" />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img src="assets/img/kitchens/kitchen-block/dark/7.jpg" alt="Dark Kitchen 7" />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img src="assets/img/kitchens/kitchen-block/dark/8.jpg" alt="Dark Kitchen 8" />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img src="assets/img/kitchens/kitchen-block/dark/9.jpg" alt="Dark Kitchen 9" />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img src="assets/img/kitchens/kitchen-block/dark/10.jpg" alt="Dark Kitchen 10" />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img src="assets/img/kitchens/kitchen-block/dark/11.jpg" alt="Dark Kitchen 11" />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img src="assets/img/kitchens/kitchen-block/dark/12.jpg" alt="Dark Kitchen 12" />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img src="assets/img/kitchens/kitchen-block/dark/13.jpg" alt="Dark Kitchen 13" />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img src="assets/img/kitchens/kitchen-block/dark/14.jpg" alt="Dark Kitchen 14" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Bright Kitchens -->
        <div class="kitchens-variants-panel" data-panel="bright">
            <div class="kitchens-variants-layout">
                <div class="kitchens-variants-slider">
                    <div class="kitchens-slider-container">
                        <div class="kitchens-slider-track">
                            <div class="kitchens-slider-slide" data-index="0">
                                <img src="assets/img/kitchens/kitchen-block/bright/1.jpg" alt="Bright Kitchen 1" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img src="assets/img/kitchens/kitchen-block/bright/2.jpg" alt="Bright Kitchen 2" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img src="assets/img/kitchens/kitchen-block/bright/3.jpg" alt="Bright Kitchen 3" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img src="assets/img/kitchens/kitchen-block/bright/4.jpg" alt="Bright Kitchen 4" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img src="assets/img/kitchens/kitchen-block/bright/5.jpg" alt="Bright Kitchen 5" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img src="assets/img/kitchens/kitchen-block/bright/6.jpg" alt="Bright Kitchen 6" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img src="assets/img/kitchens/kitchen-block/bright/7.jpg" alt="Bright Kitchen 7" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img src="assets/img/kitchens/kitchen-block/bright/8.jpg" alt="Bright Kitchen 8" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img src="assets/img/kitchens/kitchen-block/bright/9.jpg" alt="Bright Kitchen 9" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img src="assets/img/kitchens/kitchen-block/bright/10.jpg" alt="Bright Kitchen 10" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img src="assets/img/kitchens/kitchen-block/bright/11.jpg" alt="Bright Kitchen 11" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img src="assets/img/kitchens/kitchen-block/bright/12.jpg" alt="Bright Kitchen 12" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img src="assets/img/kitchens/kitchen-block/bright/13.jpg" alt="Bright Kitchen 13" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img src="assets/img/kitchens/kitchen-block/bright/14.jpg" alt="Bright Kitchen 14" />
                            </div>
                        </div>

                        <button class="kitchens-slider-arrow kitchens-slider-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <button class="kitchens-slider-arrow kitchens-slider-next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img src="assets/img/kitchens/kitchen-block/bright/1.jpg" alt="Bright Kitchen 1" />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img src="assets/img/kitchens/kitchen-block/bright/2.jpg" alt="Bright Kitchen 2" />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img src="assets/img/kitchens/kitchen-block/bright/3.jpg" alt="Bright Kitchen 3" />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img src="assets/img/kitchens/kitchen-block/bright/4.jpg" alt="Bright Kitchen 4" />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img src="assets/img/kitchens/kitchen-block/bright/5.jpg" alt="Bright Kitchen 5" />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img src="assets/img/kitchens/kitchen-block/bright/6.jpg" alt="Bright Kitchen 6" />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img src="assets/img/kitchens/kitchen-block/bright/7.jpg" alt="Bright Kitchen 7" />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img src="assets/img/kitchens/kitchen-block/bright/8.jpg" alt="Bright Kitchen 8" />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img src="assets/img/kitchens/kitchen-block/bright/9.jpg" alt="Bright Kitchen 9" />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img src="assets/img/kitchens/kitchen-block/bright/10.jpg" alt="Bright Kitchen 10" />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img src="assets/img/kitchens/kitchen-block/bright/11.jpg" alt="Bright Kitchen 11" />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img src="assets/img/kitchens/kitchen-block/bright/12.jpg" alt="Bright Kitchen 12" />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img src="assets/img/kitchens/kitchen-block/bright/13.jpg" alt="Bright Kitchen 13" />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img src="assets/img/kitchens/kitchen-block/bright/14.jpg" alt="Bright Kitchen 14" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Wood Kitchens -->
        <div class="kitchens-variants-panel" data-panel="wood">
            <div class="kitchens-variants-layout">
                <div class="kitchens-variants-slider">
                    <div class="kitchens-slider-container">
                        <div class="kitchens-slider-track">
                            <div class="kitchens-slider-slide" data-index="0">
                                <img src="assets/img/kitchens/kitchen-block/wood/1.jpg" alt="Wood Kitchen 1" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img src="assets/img/kitchens/kitchen-block/wood/2.jpg" alt="Wood Kitchen 2" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img src="assets/img/kitchens/kitchen-block/wood/3.jpg" alt="Wood Kitchen 3" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img src="assets/img/kitchens/kitchen-block/wood/4.jpg" alt="Wood Kitchen 4" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img src="assets/img/kitchens/kitchen-block/wood/5.jpg" alt="Wood Kitchen 5" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img src="assets/img/kitchens/kitchen-block/wood/6.jpg" alt="Wood Kitchen 6" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img src="assets/img/kitchens/kitchen-block/wood/7.jpg" alt="Wood Kitchen 7" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img src="assets/img/kitchens/kitchen-block/wood/8.jpg" alt="Wood Kitchen 8" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img src="assets/img/kitchens/kitchen-block/wood/9.jpg" alt="Wood Kitchen 9" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img src="assets/img/kitchens/kitchen-block/wood/10.jpg" alt="Wood Kitchen 10" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img src="assets/img/kitchens/kitchen-block/wood/11.jpg" alt="Wood Kitchen 11" />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img src="assets/img/kitchens/kitchen-block/wood/12.jpg" alt="Wood Kitchen 12" />
                            </div>
                        </div>

                        <button class="kitchens-slider-arrow kitchens-slider-prev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <button class="kitchens-slider-arrow kitchens-slider-next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img src="assets/img/kitchens/kitchen-block/wood/1.jpg" alt="Wood Kitchen 1" />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img src="assets/img/kitchens/kitchen-block/wood/2.jpg" alt="Wood Kitchen 2" />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img src="assets/img/kitchens/kitchen-block/wood/3.jpg" alt="Wood Kitchen 3" />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img src="assets/img/kitchens/kitchen-block/wood/4.jpg" alt="Wood Kitchen 4" />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img src="assets/img/kitchens/kitchen-block/wood/5.jpg" alt="Wood Kitchen 5" />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img src="assets/img/kitchens/kitchen-block/wood/6.jpg" alt="Wood Kitchen 6" />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img src="assets/img/kitchens/kitchen-block/wood/7.jpg" alt="Wood Kitchen 7" />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img src="assets/img/kitchens/kitchen-block/wood/8.jpg" alt="Wood Kitchen 8" />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img src="assets/img/kitchens/kitchen-block/wood/9.jpg" alt="Wood Kitchen 9" />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img src="assets/img/kitchens/kitchen-block/wood/10.jpg" alt="Wood Kitchen 10" />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img src="assets/img/kitchens/kitchen-block/wood/11.jpg" alt="Wood Kitchen 11" />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img src="assets/img/kitchens/kitchen-block/wood/12.jpg" alt="Wood Kitchen 12" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kitchen-mether-cost">
    <img src="assets/img/kitchens/kitchen-meter.jpg" class="kitchen-mether-cost__img" alt="Kitchen meter" />
    
    <div class="kitchen-mether-cost-block">
        <p class="aed-cost">10,000 - 12,000 <span>AED</span></p>
        <p class="euro-cost">2,500 - 3,000 €</p>
        <p class="measure-info">Per linear metre</p>
    </div>
</div>

<!-- Галерея для kitchens слайдера -->
<div class="kitchens-gallery-overlay">
    <div class="kitchens-gallery-container">
        <button class="kitchens-gallery-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="kitchens-gallery-track">
            <!-- Контент будет добавляться динамически -->
        </div>

        <button class="kitchens-gallery-arrow kitchens-gallery-prev">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <button class="kitchens-gallery-arrow kitchens-gallery-next">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="kitchens-gallery-counter">
            <span class="kitchens-gallery-current">1</span> /
            <span class="kitchens-gallery-total">1</span>
        </div>
    </div>
</div>
@endsection