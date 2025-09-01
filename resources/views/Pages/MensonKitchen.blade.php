@extends('Layers.layout') @section('content')
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
            <div
                class="kitchens-variants-tab-circle"
                style="background-color: #d7d8d3"
            ></div>
            <span>Light</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="dark">
            <div
                class="kitchens-variants-tab-circle"
                style="background-color: #3b3a3c"
            ></div>
            <span>Dark</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="bright">
            <div
                class="kitchens-variants-tab-circle"
                style="background-color: #a0563b"
            ></div>
            <span>Bright</span>
        </div>
        <div class="kitchens-variants-tab" data-tab="wood">
            <div
                class="kitchens-variants-tab-circle"
                style="background-color: #b39f7e"
            ></div>
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
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/1.jpg"
                                    alt="Light Kitchen 1"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/2.jpg"
                                    alt="Light Kitchen 2"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/3.jpg"
                                    alt="Light Kitchen 3"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/4.jpg"
                                    alt="Light Kitchen 4"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/5.jpg"
                                    alt="Light Kitchen 5"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/6.jpg"
                                    alt="Light Kitchen 6"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/7.jpg"
                                    alt="Light Kitchen 7"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/8.jpg"
                                    alt="Light Kitchen 8"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/9.jpg"
                                    alt="Light Kitchen 9"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/10.jpg"
                                    alt="Light Kitchen 10"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/11.jpg"
                                    alt="Light Kitchen 11"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/12.jpg"
                                    alt="Light Kitchen 12"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/13.jpg"
                                    alt="Light Kitchen 13"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/14.jpg"
                                    alt="Light Kitchen 14"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="14">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/15.jpg"
                                    alt="Light Kitchen 15"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="15">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/16.jpg"
                                    alt="Light Kitchen 16"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="16">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/17.jpg"
                                    alt="Light Kitchen 17"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="17">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/18.jpg"
                                    alt="Light Kitchen 18"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="18">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/19.jpg"
                                    alt="Light Kitchen 19"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="19">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/20.jpg"
                                    alt="Light Kitchen 20"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="20">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/21.jpg"
                                    alt="Light Kitchen 21"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="21">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/22.jpg"
                                    alt="Light Kitchen 22"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="22">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/23.jpg"
                                    alt="Light Kitchen 23"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="23">
                                <img
                                    src="assets/img/kitchens/kitchen-block/light/24.jpg"
                                    alt="Light Kitchen 24"
                                />
                            </div>
                        </div>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-prev"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15 18L9 12L15 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-next"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 18L15 12L9 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/1.jpg"
                            alt="Light Kitchen 1"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/2.jpg"
                            alt="Light Kitchen 2"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/3.jpg"
                            alt="Light Kitchen 3"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/4.jpg"
                            alt="Light Kitchen 4"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/5.jpg"
                            alt="Light Kitchen 5"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/6.jpg"
                            alt="Light Kitchen 6"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/7.jpg"
                            alt="Light Kitchen 7"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/8.jpg"
                            alt="Light Kitchen 8"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/9.jpg"
                            alt="Light Kitchen 9"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/10.jpg"
                            alt="Light Kitchen 10"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/11.jpg"
                            alt="Light Kitchen 11"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/12.jpg"
                            alt="Light Kitchen 12"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/13.jpg"
                            alt="Light Kitchen 13"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/14.jpg"
                            alt="Light Kitchen 14"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="14">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/15.jpg"
                            alt="Light Kitchen 15"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="15">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/16.jpg"
                            alt="Light Kitchen 16"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="16">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/17.jpg"
                            alt="Light Kitchen 17"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="17">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/18.jpg"
                            alt="Light Kitchen 18"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="18">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/19.jpg"
                            alt="Light Kitchen 19"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="19">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/20.jpg"
                            alt="Light Kitchen 20"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="20">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/21.jpg"
                            alt="Light Kitchen 21"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="21">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/22.jpg"
                            alt="Light Kitchen 22"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="22">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/23.jpg"
                            alt="Light Kitchen 23"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="23">
                        <img
                            src="assets/img/kitchens/kitchen-block/light/24.jpg"
                            alt="Light Kitchen 24"
                        />
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
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/1.jpg"
                                    alt="Dark Kitchen 1"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/2.jpg"
                                    alt="Dark Kitchen 2"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/3.jpg"
                                    alt="Dark Kitchen 3"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/4.jpg"
                                    alt="Dark Kitchen 4"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/5.jpg"
                                    alt="Dark Kitchen 5"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/6.jpg"
                                    alt="Dark Kitchen 6"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/7.jpg"
                                    alt="Dark Kitchen 7"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/8.jpg"
                                    alt="Dark Kitchen 8"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/9.jpg"
                                    alt="Dark Kitchen 9"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/10.jpg"
                                    alt="Dark Kitchen 10"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/11.jpg"
                                    alt="Dark Kitchen 11"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/12.jpg"
                                    alt="Dark Kitchen 12"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/13.jpg"
                                    alt="Dark Kitchen 13"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img
                                    src="assets/img/kitchens/kitchen-block/dark/14.jpg"
                                    alt="Dark Kitchen 14"
                                />
                            </div>
                        </div>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-prev"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15 18L9 12L15 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-next"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 18L15 12L9 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/1.jpg"
                            alt="Dark Kitchen 1"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/2.jpg"
                            alt="Dark Kitchen 2"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/3.jpg"
                            alt="Dark Kitchen 3"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/4.jpg"
                            alt="Dark Kitchen 4"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/5.jpg"
                            alt="Dark Kitchen 5"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/6.jpg"
                            alt="Dark Kitchen 6"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/7.jpg"
                            alt="Dark Kitchen 7"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/8.jpg"
                            alt="Dark Kitchen 8"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/9.jpg"
                            alt="Dark Kitchen 9"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/10.jpg"
                            alt="Dark Kitchen 10"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/11.jpg"
                            alt="Dark Kitchen 11"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/12.jpg"
                            alt="Dark Kitchen 12"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/13.jpg"
                            alt="Dark Kitchen 13"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img
                            src="assets/img/kitchens/kitchen-block/dark/14.jpg"
                            alt="Dark Kitchen 14"
                        />
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
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/1.jpg"
                                    alt="Bright Kitchen 1"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/2.jpg"
                                    alt="Bright Kitchen 2"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/3.jpg"
                                    alt="Bright Kitchen 3"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/4.jpg"
                                    alt="Bright Kitchen 4"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/5.jpg"
                                    alt="Bright Kitchen 5"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/6.jpg"
                                    alt="Bright Kitchen 6"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/7.jpg"
                                    alt="Bright Kitchen 7"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/8.jpg"
                                    alt="Bright Kitchen 8"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/9.jpg"
                                    alt="Bright Kitchen 9"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/10.jpg"
                                    alt="Bright Kitchen 10"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/11.jpg"
                                    alt="Bright Kitchen 11"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/12.jpg"
                                    alt="Bright Kitchen 12"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="12">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/13.jpg"
                                    alt="Bright Kitchen 13"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="13">
                                <img
                                    src="assets/img/kitchens/kitchen-block/bright/14.jpg"
                                    alt="Bright Kitchen 14"
                                />
                            </div>
                        </div>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-prev"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15 18L9 12L15 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-next"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 18L15 12L9 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/1.jpg"
                            alt="Bright Kitchen 1"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/2.jpg"
                            alt="Bright Kitchen 2"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/3.jpg"
                            alt="Bright Kitchen 3"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/4.jpg"
                            alt="Bright Kitchen 4"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/5.jpg"
                            alt="Bright Kitchen 5"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/6.jpg"
                            alt="Bright Kitchen 6"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/7.jpg"
                            alt="Bright Kitchen 7"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/8.jpg"
                            alt="Bright Kitchen 8"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/9.jpg"
                            alt="Bright Kitchen 9"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/10.jpg"
                            alt="Bright Kitchen 10"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/11.jpg"
                            alt="Bright Kitchen 11"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/12.jpg"
                            alt="Bright Kitchen 12"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="12">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/13.jpg"
                            alt="Bright Kitchen 13"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="13">
                        <img
                            src="assets/img/kitchens/kitchen-block/bright/14.jpg"
                            alt="Bright Kitchen 14"
                        />
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
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/1.jpg"
                                    alt="Wood Kitchen 1"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="1">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/2.jpg"
                                    alt="Wood Kitchen 2"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="2">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/3.jpg"
                                    alt="Wood Kitchen 3"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="3">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/4.jpg"
                                    alt="Wood Kitchen 4"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="4">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/5.jpg"
                                    alt="Wood Kitchen 5"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="5">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/6.jpg"
                                    alt="Wood Kitchen 6"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="6">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/7.jpg"
                                    alt="Wood Kitchen 7"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="7">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/8.jpg"
                                    alt="Wood Kitchen 8"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="8">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/9.jpg"
                                    alt="Wood Kitchen 9"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="9">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/10.jpg"
                                    alt="Wood Kitchen 10"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="10">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/11.jpg"
                                    alt="Wood Kitchen 11"
                                />
                            </div>
                            <div class="kitchens-slider-slide" data-index="11">
                                <img
                                    src="assets/img/kitchens/kitchen-block/wood/12.jpg"
                                    alt="Wood Kitchen 12"
                                />
                            </div>
                        </div>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-prev"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15 18L9 12L15 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>

                        <button
                            class="kitchens-slider-arrow kitchens-slider-next"
                        >
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 18L15 12L9 6"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="kitchens-variants-grid">
                    <div class="kitchens-grid-item active" data-index="0">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/1.jpg"
                            alt="Wood Kitchen 1"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="1">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/2.jpg"
                            alt="Wood Kitchen 2"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="2">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/3.jpg"
                            alt="Wood Kitchen 3"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="3">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/4.jpg"
                            alt="Wood Kitchen 4"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="4">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/5.jpg"
                            alt="Wood Kitchen 5"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="5">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/6.jpg"
                            alt="Wood Kitchen 6"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="6">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/7.jpg"
                            alt="Wood Kitchen 7"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="7">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/8.jpg"
                            alt="Wood Kitchen 8"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="8">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/9.jpg"
                            alt="Wood Kitchen 9"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="9">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/10.jpg"
                            alt="Wood Kitchen 10"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="10">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/11.jpg"
                            alt="Wood Kitchen 11"
                        />
                    </div>
                    <div class="kitchens-grid-item" data-index="11">
                        <img
                            src="assets/img/kitchens/kitchen-block/wood/12.jpg"
                            alt="Wood Kitchen 12"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kitchen-mether-cost">
    <img
        src="assets/img/kitchens/kitchen-meter.jpg"
        class="kitchen-mether-cost__img"
        alt="Kitchen meter"
    />

    <div class="kitchen-mether-cost-block">
        <p class="aed-cost">10,000 - 12,000 <span>AED</span></p>
        <p class="euro-cost">2,500 - 3,000 €</p>
        <p class="measure-info">Per linear metre</p>
    </div>
</div>

<div class="kitchen-islands">
    <div class="kitchen-islands-col">
        <h2>Kitchen project 20 m²<br />with island</h2>

        <div class="kitchen-islands-col-content">
            <img
                src="assets/img/kitchens/project/1.png"
                class="kitchen-islands__img"
                alt="Kitchen islands"
            />

            <div class="kitchen-islands-col-price">
                <h3>80,000 <span>AED</span></h3>
                <p class="euro-cost">20,000 €</p>
            </div>
        </div>
    </div>

    <div class="kitchen-islands-col">
        <div class="kitchen-islands-col-content">
            <img
                src="assets/img/kitchens/project/2.png"
                class="kitchen-islands__img"
                alt="Kitchen islands"
            />

            <div class="kitchen-islands-col-price">
                <p class="kitchen-islands-col-price-title">Island separately</p>
                <p class="euro-cost">20,000 AED / 5,000 €</p>
            </div>
        </div>
    </div>

    <div class="kitchen-islands-col">
        <div class="kitchen-islands-col-content-filler"></div>
        <div class="kitchen-islands-col-content">
            <img
                src="assets/img/kitchens/project/3.png"
                class="kitchen-islands__img"
                alt="Kitchen islands"
            />

            <div class="kitchen-islands-col-price">
                <p class="kitchen-islands-col-price-title">
                    Kitchen without island
                </p>
                <p class="euro-cost">20,000 AED / 5,000 €</p>
            </div>
        </div>
    </div>
</div>

<div class="handles-selection">
    <div class="handles-selection-container">
        <div class="handles-selection-left">
            <div class="handles-category">
                <h3 class="handles-category-title">Invisible handles</h3>
                <div class="handles-buttons-grid">
                    <button class="handles-btn" data-handle="Memo" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/1.jpg" alt="Memo">
                        <span>Memo</span>
                    </button>
                    <button class="handles-btn" data-handle="Goccia" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/2.jpg" alt="Goccia">
                        <span>Goccia</span>
                    </button>
                    <button class="handles-btn" data-handle="Linea" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/3.jpg" alt="Linea">
                        <span>Linea</span>
                    </button>
                    <button class="handles-btn" data-handle="Monoliti" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/4.jpg" alt="Monoliti">
                        <span>Monoliti</span>
                    </button>
                    <button class="handles-btn" data-handle="Tecna" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/5.jpg" alt="Tecna">
                        <span>Tecna</span>
                    </button>
                    <button class="handles-btn" data-handle="Petra" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/6.jpg" alt="Petra">
                        <span>Petra</span>
                    </button>
                    <button class="handles-btn" data-handle="Presa" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/7.jpg" alt="Presa">
                        <span>Presa</span>
                    </button>
                    <button class="handles-btn" data-handle="Profili" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/8.jpg" alt="Profili">
                        <span>Profili</span>
                    </button>
                    <button class="handles-btn" data-handle="Vela" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/9.jpg" alt="Vela">
                        <span>Vela</span>
                    </button>
                    <button class="handles-btn" data-handle="Materia" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/10.jpg" alt="Materia">
                        <span>Materia</span>
                    </button>
                    <button class="handles-btn" data-handle="Murano" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/11.jpg" alt="Murano">
                        <span>Murano</span>
                    </button>
                    <button class="handles-btn" data-handle="Slim" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/12.jpg" alt="Slim">
                        <span>Slim</span>
                    </button>
                    <button class="handles-btn" data-handle="Trim" data-category="Invisible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/13.jpg" alt="Trim">
                        <span>Trim</span>
                    </button>
                </div>
            </div>
            
            <div class="handles-category">
                <h3 class="handles-category-title">Visible handles</h3>
                <div class="handles-buttons-grid">
                    <button class="handles-btn" data-handle="Crea" data-category="Visible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/14.jpg" alt="Crea">
                        <span>Crea</span>
                    </button>
                    <button class="handles-btn" data-handle="Amica" data-category="Visible">
                        <img src="assets/img/kitchens/kitchen-handles/btns/15.jpg" alt="Amica">
                        <span>Amica</span>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="handles-selection-right">
            <div class="handles-slider-container">
                <div class="handles-slider-track">
                    <!-- Слайды будут добавляться динамически -->
                </div>
                
                <button class="handles-slider-arrow handles-slider-prev">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <button class="handles-slider-arrow handles-slider-next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div class="handles-slider-counter">
                    <span class="handles-slider-current">1</span> /
                    <span class="handles-slider-total">1</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="moving-images-block">
    <div class="moving-images-container">
        <div class="moving-images-track">
            <div class="moving-image-item" data-index="0">
                <img src="{{ asset('assets/img/kitchens/slider/1.png') }}" alt="Lighting system">
                <div class="moving-image-caption">Lighting system</div>
            </div>
            <div class="moving-image-item" data-index="1">
                <img src="{{ asset('assets/img/kitchens/slider/2.png') }}" alt="Open modules">
                <div class="moving-image-caption">Open modules</div>
            </div>
            <div class="moving-image-item" data-index="2">
                <img src="{{ asset('assets/img/kitchens/slider/3.png') }}" alt="Kitchen storage organization">
                <div class="moving-image-caption">Kitchen storage organization</div>
            </div>
            <div class="moving-image-item" data-index="3">
                <img src="{{ asset('assets/img/kitchens/slider/4.png') }}" alt="Pantries">
                <div class="moving-image-caption">Pantries</div>
            </div>
            <div class="moving-image-item" data-index="4">
                <img src="{{ asset('assets/img/kitchens/slider/5.png') }}" alt="Tables and bar counters">
                <div class="moving-image-caption">Tables and bar counters</div>
            </div>
            <div class="moving-image-item" data-index="5">
                <img src="{{ asset('assets/img/kitchens/slider/6.png') }}" alt="Hoods">
                <div class="moving-image-caption">Hoods</div>
            </div>
            <div class="moving-image-item" data-index="6">
                <img src="{{ asset('assets/img/kitchens/slider/7.png') }}" alt="Cabinets, sideboards, display cases">
                <div class="moving-image-caption">Cabinets, sideboards, display cases</div>
            </div>
        </div>
    </div>
</div>

<div class="calculator-block">
    <div class="calculator-container">
        <h2 class="calculator-title">Calculate kitchen cost</h2>
        
        <!-- Step 1: Kitchen Type -->
        <div class="calculator-step" data-step="1">
            <h3 class="calculator-step-title">Step 1:</h3>
            <h4 class="calculator-step-subtitle">Select kitchen type</h4>
            
            <div class="calculator-options-grid">
                <div class="calculator-option" data-value="corner">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/1.webp') }}" alt="Corner kitchen">
                    <span class="calculator-option-label">Corner</span>
                </div>
                <div class="calculator-option" data-value="peninsular">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/2.webp') }}" alt="Peninsular kitchen">
                    <span class="calculator-option-label">Peninsular</span>
                </div>
                <div class="calculator-option" data-value="u-shaped">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/3.webp') }}" alt="U-shaped kitchen">
                    <span class="calculator-option-label">U-shaped</span>
                </div>
                <div class="calculator-option" data-value="linear">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/4.webp') }}" alt="Linear kitchen">
                    <span class="calculator-option-label">Linear</span>
                </div>
                <div class="calculator-option" data-value="island">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/5.webp') }}" alt="Island kitchen">
                    <span class="calculator-option-label">Island</span>
                </div>
                <div class="calculator-option" data-value="double-linear">
                    <img src="{{ asset('assets/img/kitchens/calculator/step1/6.webp') }}" alt="Double linear kitchen">
                    <span class="calculator-option-label">Double linear</span>
                </div>
            </div>
        </div>
        
        <!-- Step 2: Kitchen Area -->
        <div class="calculator-step" data-step="2" style="display: none;">
            <h3 class="calculator-step-title">Step 2:</h3>
            <h4 class="calculator-step-subtitle">Select the kitchen area</h4>
            
            <div class="calculator-radio-group">
                <label class="calculator-radio-option">
                    <input type="radio" name="area" value="up-to-20" class="calculator-radio">
                    <span class="calculator-radio-custom"></span>
                    <span class="calculator-radio-label">Up to 20 m²</span>
                </label>
                <label class="calculator-radio-option">
                    <input type="radio" name="area" value="30" class="calculator-radio">
                    <span class="calculator-radio-custom"></span>
                    <span class="calculator-radio-label">30 m²</span>
                </label>
                <label class="calculator-radio-option">
                    <input type="radio" name="area" value="40" class="calculator-radio">
                    <span class="calculator-radio-custom"></span>
                    <span class="calculator-radio-label">40 m²</span>
                </label>
                <label class="calculator-radio-option">
                    <input type="radio" name="area" value="50-or-more" class="calculator-radio">
                    <span class="calculator-radio-custom"></span>
                    <span class="calculator-radio-label">50 m² or more</span>
                </label>
            </div>
        </div>
        
        <!-- Step 3: Facade Type -->
        <div class="calculator-step" data-step="3" style="display: none;">
            <h3 class="calculator-step-title">Step 3:</h3>
            <h4 class="calculator-step-subtitle">Select the type of facade</h4>
            
            <div class="calculator-options-grid">
                <div class="calculator-option" data-value="laminate">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/1.webp') }}" alt="Laminate facade">
                    <span class="calculator-option-label">Laminate</span>
                </div>
                <div class="calculator-option" data-value="lacquer">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/2.webp') }}" alt="Lacquer facade">
                    <span class="calculator-option-label">Lacquer</span>
                </div>
                <div class="calculator-option" data-value="veneer">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/3.webp') }}" alt="Veneer facade">
                    <span class="calculator-option-label">Veneer</span>
                </div>
                <div class="calculator-option" data-value="glass">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/4.webp') }}" alt="Glass facade">
                    <span class="calculator-option-label">Glass</span>
                </div>
                <div class="calculator-option" data-value="tile">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/5.webp') }}" alt="Tile facade">
                    <span class="calculator-option-label">Tile</span>
                </div>
                <div class="calculator-option" data-value="metal">
                    <img src="{{ asset('assets/img/kitchens/calculator/step3/6.webp') }}" alt="Metal facade">
                    <span class="calculator-option-label">Metal</span>
                </div>
            </div>
        </div>
        
        <!-- Step 4: Contact Form -->
        <div class="calculator-step" data-step="4" style="display: none;">
            <h3 class="calculator-step-title">Step 4:</h3>
            <h4 class="calculator-step-subtitle">Please leave your phone number</h4>
            
            <form class="calculator-form" id="calculator-form">
                <div class="calculator-form-group">
                    <label for="calculator-phone" class="calculator-form-label">Phone number</label>
                    <div class="calculator-form-phone-wrapper">
                        <div class="calculator-form-phone-flag">
                            <img src="{{ asset('assets/img/icons/header/emirates.svg') }}" alt="UAE flag">
                        </div>
                        <input type="tel" id="calculator-phone" class="calculator-form-input calculator-form-phone-input" placeholder="+971 99 999 9999" required>
                    </div>
                </div>
                
                <div class="calculator-form-group">
                    <label for="calculator-name" class="calculator-form-label">Name</label>
                    <input type="text" id="calculator-name" class="calculator-form-input" placeholder="Alex" required>
                </div>
                
                <div class="calculator-form-group">
                    <label class="calculator-form-label">Contact method</label>
                    <div class="calculator-radio-group">
                        <label class="calculator-radio-option">
                            <input type="radio" name="contact-method" value="phone" class="calculator-radio" checked>
                            <span class="calculator-radio-custom"></span>
                            <span class="calculator-radio-label">Phone</span>
                        </label>
                        <label class="calculator-radio-option">
                            <input type="radio" name="contact-method" value="whatsapp" class="calculator-radio">
                            <span class="calculator-radio-custom"></span>
                            <span class="calculator-radio-label">WhatsApp</span>
                        </label>
                        <label class="calculator-radio-option">
                            <input type="radio" name="contact-method" value="telegram" class="calculator-radio">
                            <span class="calculator-radio-custom"></span>
                            <span class="calculator-radio-label">Telegram</span>
                        </label>
                        <label class="calculator-radio-option">
                            <input type="radio" name="contact-method" value="botim" class="calculator-radio">
                            <span class="calculator-radio-custom"></span>
                            <span class="calculator-radio-label">Botim</span>
                        </label>
                    </div>
                </div>
                
                <div class="calculator-form-group">
                    <label class="calculator-checkbox-option">
                        <input type="checkbox" id="calculator-privacy" class="calculator-checkbox" required>
                        <span class="calculator-checkbox-custom"></span>
                        <span class="calculator-checkbox-label">
                            I agree to the <a href="/policy" class="calculator-privacy-link">privacy policy</a>
                        </span>
                    </label>
                </div>
                
                <div class="calculator-form-note">
                    We will send you the cost estimate and a catalogue with all the finishing options and configurations.
                </div>
                
                <button type="submit" class="calculator-form-submit">Get calculation</button>
            </form>
        </div>
        
        <!-- Navigation buttons -->
        <div class="calculator-navigation">
            <button class="calculator-nav-btn calculator-prev" style="display: none;">Previous</button>
            <button class="calculator-nav-btn calculator-next">Next</button>
        </div>
    </div>
</div>

<div class="marat-block">
    <div class="marat-photos">
        <div class="marat-photo marat-photo-m">
            <img src="assets/img/marat/1.png" alt="" />
        </div>

        <div class="marat-photo marat-photo-l">
            <img src="assets/img/marat/2.png" alt="" />
        </div>

        <div class="marat-photo marat-photo-s">
            <img src="assets/img/marat/3.png" alt="" />
        </div>
    </div>

    <div class="marat-text">
        <div class="marat-text-col marat-text-col-left">
            <div class="marat-text-col-item">
                <h2>My name is<br />Marat Baybekov</h2>
            </div>

            <div class="marat-text-col-item">
                <span>14 years</span>
                <p>
                    I supply designers' and architects' projects with Italian
                    furniture.
                </p>
            </div>
        </div>

        <div class="marat-text-col">
            <div class="marat-text-col-item">
                <span>at 20% less than public price</span>
                <p>
                    I bring European brands to Dubai thanks to connections and
                    understanding of the distribution network.
                </p>
            </div>

            <div class="marat-text-col-item">
                <span>Showroom in AL QUOZ</span>
                <p>
                    I opened it to present several European brands with a good
                    price-quality ratio in Dubai that were not available here.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="marat-block__mobile">
    <div class="marat-block__mobile-item">
        <img src="assets/img/marat/2.png" alt="" />
        <h2>My name is<br />Marat Baybekov</h2>

        <div class="marat-block__mobile-item_text">
            <span>14 years</span>
            <p>
                I supply designers' and architects' projects with Italian
                furniture.
            </p>
        </div>
    </div>

    <div class="marat-block__mobile-item">
        <img src="assets/img/marat/1.png" alt="" />

        <div class="marat-block__mobile-item_text">
            <span>at 20% less than public price</span>
            <p>
                I bring European brands to Dubai thanks to connections and
                understanding of the distribution network.
            </p>
        </div>

        <div class="marat-block__mobile-item_text">
            <span>Showroom in AL QUOZ</span>
            <p>
                I opened it to present several European brands with a good
                price-quality ratio in Dubai that were not available here.
            </p>
        </div>
    </div>
</div>

<div class="assemblers-block">
    <div class="assemblers-block__item">
        <div class="assemblers-block__item-text">
            <span>In Dubai, I have assemblers</span>
            <p>
                who have been professionally<br />installing Italian
                furniture<br />for over 10 years
            </p>
        </div>
    </div>

    <div class="assemblers-block__item">
        <div class="assemblers-block__item-img">
            <img src="assets/img/assemblers/1.png" alt="" />
        </div>
    </div>

    <div class="assemblers-block__item assemblers-block__item_desktop">
        <div class="assemblers-block__item-img">
            <img src="assets/img/assemblers/2.png" alt="" />
        </div>
    </div>
</div>

<div class="also-featured">
    <h2 class="also-featured-title">Also featured in the showroom</h2>
    
    <div class="also-featured-container">
        <a href="https://www.olivierimobili.com/en/home-page/" class="also-featured-item" target="_blank" rel="noopener">
            <div class="also-featured-item-logo">
                <img src="assets/img/manufacturers/olivery.svg" alt="Oliveri" />
            </div>
            <div class="also-featured-item-content">
                <h3>Oliveri</h3>
                <p>Living rooms, Bedrooms, Dining areas, Storage systems</p>
            </div>
        </a>
        
        <a href="https://mariescorner.com/en/" class="also-featured-item" target="_blank" rel="noopener">
            <div class="also-featured-item-logo">
                <img src="assets/img/manufacturers/marie_corner.svg" alt="Marie's Corner" />
            </div>
            <div class="also-featured-item-content">
                <h3>Marie's Corner</h3>
                <p>Sofas, Chairs, Poufs, Tables, Fabrics</p>
            </div>
        </a>
        
        <a href="https://www.midj.com/" class="also-featured-item" target="_blank" rel="noopener">
            <div class="also-featured-item-logo">
                <img src="assets/img/manufacturers/midj.svg" alt="Midj" />
            </div>
            <div class="also-featured-item-content">
                <h3>Midj</h3>
                <p>Armchairs, Chairs, Tables, Storage, Lighting systems, Accessories</p>
            </div>
        </a>
        
        <a href="https://www.felis.it/" class="also-featured-item" target="_blank" rel="noopener">
            <div class="also-featured-item-logo">
                <img src="assets/img/manufacturers/fellis.svg" alt="Felis" />
            </div>
            <div class="also-featured-item-content">
                <h3>Felis</h3>
                <p>Sofas, Sofa beds, Beds, Accessories</p>
            </div>
        </a>
    </div>
</div>

<!-- Галерея для kitchens слайдера -->
<div class="kitchens-gallery-overlay">
    <div class="kitchens-gallery-container">
        <button class="kitchens-gallery-close">
            <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M18 6L6 18M6 6L18 18"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>

        <div class="kitchens-gallery-track">
            <!-- Контент будет добавляться динамически -->
        </div>

        <button class="kitchens-gallery-arrow kitchens-gallery-prev">
            <svg
                width="32"
                height="32"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M15 18L9 12L15 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>

        <button class="kitchens-gallery-arrow kitchens-gallery-next">
            <svg
                width="32"
                height="32"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M9 18L15 12L9 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>

        <div class="kitchens-gallery-counter">
            <span class="kitchens-gallery-current">1</span> /
            <span class="kitchens-gallery-total">1</span>
        </div>
    </div>
</div>

<!-- Блок с движущимися изображениями -->


<!-- Галерея для moving images -->
<div class="moving-images-gallery-overlay">
    <div class="moving-images-gallery-container">
        <button class="moving-images-gallery-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="moving-images-gallery-track">
            <!-- Контент будет добавляться динамически -->
        </div>

        <button class="moving-images-gallery-arrow moving-images-gallery-prev">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <button class="moving-images-gallery-arrow moving-images-gallery-next">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="moving-images-gallery-counter">
            <span class="moving-images-gallery-current">1</span> /
            <span class="moving-images-gallery-total">7</span>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('assets/js/handles.js') }}"></script>
<script src="{{ asset('assets/js/moving-images.js') }}"></script>
@endpush
@endsection
