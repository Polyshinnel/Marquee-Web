@extends('Layers.layout') @section('content')
<div class="main-page-block">
    <div class="main-page-logo">
        <img src="assets/img/logo.svg" alt="logo" />
    </div>

    <div class="main-page-title">
        <h1>
            European furniture<br />
            showroom in Dubai
        </h1>
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
                alt="European furniture showroom in Dubai"
            />
        </picture>
    </div>
</div>

<div class="showroom-blocks">
    <h2 class="showroom-blocks__title_mobile">The showroom features</h2>
    <div class="showroom-column">
        <div
            class="showroom-column__item showroom-column__item_s showroom-column__item_desktop"
        >
            <div class="showroom-column__item-text-wrapper">
                <h2>The showroom features</h2>
            </div>
        </div>

        <div class="showroom-column__item showroom-column__item_l">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__text">
                    <img
                        src="assets/img/manufacturers/marie_corner.svg"
                        alt=""
                        class="showroom-column__item-block__logo"
                    />
                    <ul>
                        <li>Sofas</li>
                        <li>Chairs</li>
                        <li>Poufs</li>
                        <li>Tables</li>
                        <li>Fabrics</li>
                    </ul>
                </div>
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="showroom-column">
        <div class="showroom-column__item showroom-column__item_l">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider"></div>
                </div>

                <div class="showroom-column__item-block__text">
                    <img
                        src="assets/img/manufacturers/mensons.svg"
                        alt=""
                        class="showroom-column__item-block__logo"
                    />
                    <ul>
                        <li>Kitchens</li>
                        <li>Storage solutions</li>
                        <li>Tables and bar counters</li>
                        <li>Sideboards and cabinets</li>
                        <li>Lighting systems</li>
                        <li>Hoods</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="showroom-column__item showroom-column__item_s">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__text">
                    <img
                        src="assets/img/manufacturers/olivery.svg"
                        alt=""
                        class="showroom-column__item-block__logo"
                    />
                    <ul>
                        <li>Living rooms</li>
                        <li>Bedrooms</li>
                        <li>Dining areas</li>
                        <li>Storage systems</li>
                    </ul>
                </div>
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="showroom-column">
        <div class="showroom-column__item showroom-column__item_s">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider"></div>
                </div>

                <div class="showroom-column__item-block__text">
                    <img
                        src="assets/img/manufacturers/fellis.svg"
                        alt=""
                        class="showroom-column__item-block__logo"
                    />
                    <ul>
                        <li>Sofas</li>
                        <li>Sofa beds</li>
                        <li>Beds</li>
                        <li>Accessories</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="showroom-column__item showroom-column__item_l">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__text">
                    <img
                        src="assets/img/manufacturers/midj.svg"
                        alt=""
                        class="showroom-column__item-block__logo"
                    />
                    <ul>
                        <li>Armchairs</li>
                        <li>Chairs</li>
                        <li>Tables</li>
                        <li>Storage</li>
                        <li>Lighting systems</li>
                        <li>Accessories</li>
                    </ul>
                </div>
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="showroom-blocks-mobile">
        <div class="showroom-mobile-slider-container">
            <div class="showroom-mobile-slider-track">
                <div class="showroom-column__item showroom-column__item_l" data-index="0">
                    <div class="showroom-column__item-block">
                        <div class="showroom-column__item-block__img">
                            <div class="showroom-column__item-block__slider"></div>
                        </div>

                        <div class="showroom-column__item-block__text">
                            <img
                                src="assets/img/manufacturers/mensons.svg"
                                alt=""
                                class="showroom-column__item-block__logo"
                            />
                            <ul>
                                <li>Kitchens</li>
                                <li>Storage solutions</li>
                                <li>Tables and bar counters</li>
                                <li>Sideboards and cabinets</li>
                                <li>Lighting systems</li>
                                <li>Hoods</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="showroom-column__item showroom-column__item_l" data-index="1">
                    <div class="showroom-column__item-block">
                        <div class="showroom-column__item-block__img">
                            <div class="showroom-column__item-block__slider"></div>
                        </div>
                        <div class="showroom-column__item-block__text">
                            <img
                                src="assets/img/manufacturers/marie_corner.svg"
                                alt=""
                                class="showroom-column__item-block__logo"
                            />
                            <ul>
                                <li>Sofas</li>
                                <li>Chairs</li>
                                <li>Poufs</li>
                                <li>Tables</li>
                                <li>Fabrics</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="showroom-column__item showroom-column__item_s" data-index="2">
                    <div class="showroom-column__item-block">
                        <div class="showroom-column__item-block__img">
                            <div class="showroom-column__item-block__slider"></div>
                        </div>
                        <div class="showroom-column__item-block__text">
                            <img
                                src="assets/img/manufacturers/olivery.svg"
                                alt=""
                                class="showroom-column__item-block__logo"
                            />
                            <ul>
                                <li>Living rooms</li>
                                <li>Bedrooms</li>
                                <li>Dining areas</li>
                                <li>Storage systems</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="showroom-column__item showroom-column__item_s" data-index="3">
                    <div class="showroom-column__item-block">
                        <div class="showroom-column__item-block__img">
                            <div class="showroom-column__item-block__slider"></div>
                        </div>

                        <div class="showroom-column__item-block__text">
                            <img
                                src="assets/img/manufacturers/fellis.svg"
                                alt=""
                                class="showroom-column__item-block__logo"
                            />
                            <ul>
                                <li>Sofas</li>
                                <li>Sofa beds</li>
                                <li>Beds</li>
                                <li>Accessories</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="showroom-column__item showroom-column__item_l" data-index="4">
                    <div class="showroom-column__item-block">
                        <div class="showroom-column__item-block__img">
                            <div class="showroom-column__item-block__slider"></div>
                        </div>
                        <div class="showroom-column__item-block__text">
                            <img
                                src="assets/img/manufacturers/midj.svg"
                                alt=""
                                class="showroom-column__item-block__logo"
                            />
                            <ul>
                                <li>Armchairs</li>
                                <li>Chairs</li>
                                <li>Tables</li>
                                <li>Storage</li>
                                <li>Lighting systems</li>
                                <li>Accessories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Индикаторы слайдера -->
            <div class="showroom-mobile-slider-indicators">
                <div class="showroom-mobile-slider-indicator active" data-index="0"></div>
                <div class="showroom-mobile-slider-indicator" data-index="1"></div>
                <div class="showroom-mobile-slider-indicator" data-index="2"></div>
                <div class="showroom-mobile-slider-indicator" data-index="3"></div>
                <div class="showroom-mobile-slider-indicator" data-index="4"></div>
            </div>
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

<div class="main-page-slider">
    <div class="main-slider-container">
        <div class="main-slider-track">
            <div class="main-slider-slide" data-index="0">
                <img src="assets/img/main-slider/1.webp" alt="" />
            </div>
            <div class="main-slider-slide" data-index="1">
                <img src="assets/img/main-slider/2.webp" alt="" />
            </div>
            <div class="main-slider-slide" data-index="2">
                <img src="assets/img/main-slider/3.webp" alt="" />
            </div>
            <div class="main-slider-slide" data-index="3">
                <img src="assets/img/main-slider/4.webp" alt="" />
            </div>
            <div class="main-slider-slide" data-index="4">
                <img src="assets/img/main-slider/5.webp" alt="" />
            </div>
            <div class="main-slider-slide" data-index="5">
                <img src="assets/img/main-slider/6.webp" alt="" />
            </div>
        </div>

        <button class="main-slider-arrow main-slider-prev">
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

        <button class="main-slider-arrow main-slider-next">
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

<div class="supply-main-block">
    <div class="supply-main-block-col">
        <div class="supply-main-block-col__slider">
            <img
                src="assets/img/small-slider/1.webp"
                alt=""
                class="supply-slider-image"
            />
        </div>
    </div>

    <div class="supply-main-block-col">
        <div class="supply-main-block-col__text">
            <p>
                In addition to what is presented in the showroom, I also supply:
            </p>

            <ul>
                <li>→ Finishing materials (tiles, stone, parquet)</li>
                <li>→ Art</li>
                <li>→ Decor</li>
                <li>→ Sanitary ware</li>
                <li>→ Decorative technical lighting</li>
                <li>→ Textiles</li>
            </ul>
        </div>
    </div>
</div>

<div class="visit_to_milan">
    <p>Every year I visit Salone del Mobile Milano,</p>
    <p>Maison & Objet Paris. Come by, and I'll tell</p>
    <p>you what interesting things I saw this year.</p>
</div>

<!-- Галерея для supply слайдера -->
<div class="supply-gallery-overlay">
    <div class="supply-gallery-container">
        <button class="supply-gallery-close">
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

        <div class="supply-gallery-track">
            <div class="supply-gallery-slide" data-index="0">
                <img src="assets/img/small-slider/1.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="1">
                <img src="assets/img/small-slider/2.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="2">
                <img src="assets/img/small-slider/3.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="3">
                <img src="assets/img/small-slider/4.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="4">
                <img src="assets/img/small-slider/5.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="5">
                <img src="assets/img/small-slider/6.webp" alt="" />
            </div>
            <div class="supply-gallery-slide" data-index="6">
                <img src="assets/img/small-slider/7.webp" alt="" />
            </div>
        </div>

        <button class="supply-gallery-arrow supply-gallery-prev">
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

        <button class="supply-gallery-arrow supply-gallery-next">
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

        <div class="supply-gallery-counter">
            <span class="supply-gallery-current">1</span> /
            <span class="supply-gallery-total">7</span>
        </div>
    </div>
</div>

<!-- Галерея -->
<div class="main-gallery-overlay">
    <div class="main-gallery-container">
        <button class="main-gallery-close">
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

        <div class="main-gallery-track">
            <div class="main-gallery-slide" data-index="0">
                <img src="assets/img/main-slider/1.webp" alt="" />
            </div>
            <div class="main-gallery-slide" data-index="1">
                <img src="assets/img/main-slider/2.webp" alt="" />
            </div>
            <div class="main-gallery-slide" data-index="2">
                <img src="assets/img/main-slider/3.webp" alt="" />
            </div>
            <div class="main-gallery-slide" data-index="3">
                <img src="assets/img/main-slider/4.webp" alt="" />
            </div>
            <div class="main-gallery-slide" data-index="4">
                <img src="assets/img/main-slider/5.webp" alt="" />
            </div>
            <div class="main-gallery-slide" data-index="5">
                <img src="assets/img/main-slider/6.webp" alt="" />
            </div>
        </div>

        <button class="main-gallery-arrow main-gallery-prev">
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

        <button class="main-gallery-arrow main-gallery-next">
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

        <div class="main-gallery-counter">
            <span class="main-gallery-current">1</span> /
            <span class="main-gallery-total">6</span>
        </div>
    </div>
</div>
@endsection
