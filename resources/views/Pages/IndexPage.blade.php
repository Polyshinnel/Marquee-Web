@extends('Layers.layout')

@section('content')
<div class="main-page-block">
    <div class="main-page-logo">
        <img src="assets/img/logo.svg" alt="logo">
    </div>

    <div class="main-page-title">
        <h1>European furniture<br> showroom in Dubai</h1>
    </div>

    <div class="main-page-block-item main-page-block-left">
        <div class="main-page-left-content">
            <div class="main-page-phone-block">
                <img src="assets/img/icons/header/phone.svg" alt="phone">
                <span>+971 50 613 2486</span>
            </div>

            <div class="main-page-lang-block">
                <a href="/" class="lang-switch main-page-lang-switch">
                    <span>ru</span>
                    <img src="assets/img/icons/header/planet.svg" alt="lang">
                </a>
            </div>

            <div class="main-page-address-block">
                <img src="assets/img/icons/header/location.svg" alt="location">
                <span>39/1, 12nd Street, Al Quoz 3, Al Quoz, Hadaek Mohammed Bin Rashid, Dubai Emirate</span>
            </div>
        </div>
    </div>

    <div class="main-page-block-item main-page-block-right">
        <img src="assets/img/main-page-cover.webp" alt="">
    </div>
</div>

<div class="showroom-blocks">
    <div class="showroom-column">
        <div class="showroom-column__item showroom-column__item_s">
            <div class="showroom-column__item-text-wrapper">
                <h2>The showroom features</h2>
            </div>
        </div>

        <div class="showroom-column__item showroom-column__item_l">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__text">
                    <img src="assets/img/manufacturers/marie_corner.svg" alt="" class="showroom-column__item-block__logo">
                    <ul>
                        <li>Sofas</li>
                        <li>Chairs</li>
                        <li>Poufs</li>
                        <li>Tables</li>
                        <li>Fabrics</li>
                    </ul>
                </div>
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider">
                        <img src="assets/img/manufacturers/3/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="showroom-column">
        <div class="showroom-column__item showroom-column__item_l">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider">
                        <img src="assets/img/manufacturers/1/1.png" alt="">
                    </div>
                </div>

                <div class="showroom-column__item-block__text">
                    <img src="assets/img/manufacturers/mensons.svg" alt="" class="showroom-column__item-block__logo">
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
                    <img src="assets/img/manufacturers/olivery.svg" alt="" class="showroom-column__item-block__logo">
                    <ul>
                        <li>Living rooms</li>
                        <li>Bedrooms</li>
                        <li>Dining areas</li>
                        <li>Storage systems</li>
                    </ul>
                </div>
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider">
                        <img src="assets/img/manufacturers/4/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="showroom-column">
        <div class="showroom-column__item showroom-column__item_s">
            <div class="showroom-column__item-block">
                <div class="showroom-column__item-block__img">
                    <div class="showroom-column__item-block__slider">
                        <img src="assets/img/manufacturers/2/1.png" alt="">
                    </div>
                </div>

                <div class="showroom-column__item-block__text">
                    <img src="assets/img/manufacturers/fellis.svg" alt="" class="showroom-column__item-block__logo">
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
                    <img src="assets/img/manufacturers/midj.svg" alt="" class="showroom-column__item-block__logo">
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
                    <div class="showroom-column__item-block__slider">
                        <img src="assets/img/manufacturers/5/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection