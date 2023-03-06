@extends('layouts.mev')
@section('content')
    <div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-8 col-md-7 second p-0 ">
                    <div class="d-flex d-md-none px-3 py-3 feed-mobile-search neutral-bg fixed-top-m">
                        @include('partials.feed-mobile-search')
                    </div>
                    <div class="d-block d-md-none d-lg-none m-pt-70 feed-suggestions-wrapper">
                         @include('partials.feed-suggestions-wrapper')
                    </div>
                    <div class="">
                        <div class="feed-box mt-0 pt-4 posts-wrapper">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="col-10">
                                    <img src="https://watchmevip.com/img/no-content-available.svg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="text-center mb-2 mt-2">No posts available</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center posts-loading-indicator">
                            <div class="py-3 spinner d-none">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-sm-12 col-md-5 col-lg-4 first border-left order-0 pt-4 pb-5 min-vh-100 suggestions-wrapper d-none d-md-block">
                    @include('partials.feed-widgets')
                </div>
            </div>
        </div>
    </div>
@endsection
