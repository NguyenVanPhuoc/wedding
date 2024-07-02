@extends('layouts.main')

@section('content')
    <!-- BEGIN HERO SECTION -->
    @include('body.hero')
    <!-- END HERO SECTION -->
    <!-- BEGIN ABOUT US SECTION -->
    @include('body.about')
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    @include('body.story')
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN THE WEDDING SECTION -->
    @include('body.invitation')
    <!-- END THE WEDDING SECTION -->

    <!-- BEGIN GALLERY SECTION -->
    @include('body.gallery')
    <!-- END GALLERY SECTION -->

    <!-- BEGIN VIDEO SECTION -->
    @include('body.video')
    <!-- END VIDEO SECTION -->

    <!-- BEGIN WEDDING GIFTS SECTION -->
    <div id="events"></div>
    @include('body.gifts')
    <!-- END WEDDING GIFTS SECTION -->

    <!-- BEGIN BRIDESMAIDS SECTION -->
    @include('body.bridesmaids')
    <!-- END BRIDESMAIDS SECTION -->


    <!-- BEGIN TESTIMONIALS SECTION -->
    @include('body.testimonials')
    <!-- END TESTIMONIALS SECTION -->

    <!-- BEGIN GROOMSMEN SECTION -->
    @include('body.groomsmen')
    <!-- END GROOMSMEN SECTION -->

    <!-- BEGIN CONTACTS SECTION -->
    @include('body.book', ['contents' => $contents])
    <!-- END CONTACTS SECTION -->

    <!-- BEGIN DONATE SECTION -->
    @include('body.donate')
    <!-- END DONATE SECTION -->

    <!-- BEGIN MAP SECTION -->
    @include('body.map')
    <!-- END MAP SECTION -->

    <div id="menu-access" class="">
        <div class="btn-menu-open">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>
        <div class="btn-menu-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
        </div>
        <ul class="p-0 m-0 list-menu-icon">
            <li class="text-center">
                <a href="#rsvp" class="text-white">
                    <span class="content-button tooltipBtn">
                        <span class="tooltiptext">Gửi lời chúc</span>
                        <img class="access-icon" src="{{ asset('images/wishes.png') }}" alt="">
                    </span>
                </a>
            </li>
            <li class="text-center buttonDonate">
                <a href="#donate" class="text-white">
                    <span class="content-button tooltipBtn">
                        <span class="tooltiptext">Mừng cưới</span>
                        <img class="access-icon" src="{{ asset('images/money_bag.png') }}" alt="">
                    </span>
                </a>
            </li>
            <li class="text-center">
                <a href="#map" class="text-white">
                    <span class="content-button tooltipBtn">
                        <span class="tooltiptext">Google map</span>
                        <img class="access-icon" src="{{ asset('images/location.png') }}" alt="">
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div id="data_loading" class="lds-dual-ring hidden overlay"></div>

@endsection
