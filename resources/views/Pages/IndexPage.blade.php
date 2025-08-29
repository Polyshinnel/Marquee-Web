@extends('Layers.layout')

@section('content')
<div class="main-page-block">
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
@endsection