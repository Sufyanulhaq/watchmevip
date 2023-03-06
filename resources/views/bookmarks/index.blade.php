@extends('layouts.mev')
@section('content')


<div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
                    <div class="">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-3 mb-3 settings-menu pr-0">
                <div class="bookmarks-menu-wrapper">
                    <div class="mt-3 ml-3">
                        <h5 class="text-bold ">Bookmarks</h5>
                    </div>
                    <hr class="mb-0">
                    <div class="d-lg-block bookmarks-nav">
                        <div class="d-none d-md-block">
                            <div class="card-settings border-bottom">
        <div class="list-group list-group-sm list-group-flush">
                            <a href="https://watchmevip.com/my/bookmarks/all" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M128 80V64a48.14 48.14 0 0148-48h224a48.14 48.14 0 0148 48v368l-80-64" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><path d="M320 96H112a48.14 48.14 0 00-48 48v352l152-128 152 128V144a48.14 48.14 0 00-48-48z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>All</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/bookmarks/photos" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="80" width="416" height="352" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><circle cx="336" cy="176" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><path d="M304 335.79l-90.66-90.49a32 32 0 00-43.87-1.3L48 352M224 432l123.34-123.34a32 32 0 0143.11-2L464 368" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Photos</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/bookmarks/videos" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M374.79 308.78L457.5 367a16 16 0 0022.5-14.62V159.62A16 16 0 00457.5 145l-82.71 58.22A16 16 0 00368 216.3v79.4a16 16 0 006.79 13.08z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M268 384H84a52.15 52.15 0 01-52-52V180a52.15 52.15 0 0152-52h184.48A51.68 51.68 0 01320 179.52V332a52.15 52.15 0 01-52 52z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Videos</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/bookmarks/audio" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M192 218v-6c0-14.84 10-27 24.24-30.59l174.59-46.68A20 20 0 01416 154v22" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M416 295.94v80c0 13.91-8.93 25.59-22 30l-22 8c-25.9 8.72-52-10.42-52-38h0a33.37 33.37 0 0123-32l51-18.15c13.07-4.4 22-15.94 22-29.85V58a10 10 0 00-12.6-9.61L204 102a16.48 16.48 0 00-12 16v226c0 13.91-8.93 25.6-22 30l-52 18c-13.88 4.68-22 17.22-22 32h0c0 27.58 26.52 46.55 52 38l22-8c13.07-4.4 22-16.08 22-30v-80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Audio</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/bookmarks/other" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Other</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/bookmarks/locked" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></rect></svg>
            </div>
            </div>
                        <span>Locked</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  icon-desktop d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                    </div>
    </div>
                        </div>
                        <div class="bookmarks-menu-mobile d-block d-md-none mt-3">
                            <div class="mt-3 inline-border-tabs text-bold">
        <nav class="nav nav-pills nav-justified mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_horizontal mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/all">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M128 80V64a48.14 48.14 0 0148-48h224a48.14 48.14 0 0148 48v368l-80-64" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><path d="M320 96H112a48.14 48.14 0 00-48 48v352l152-128 152 128V144a48.14 48.14 0 00-48-48z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/photos">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="80" width="416" height="352" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><circle cx="336" cy="176" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><path d="M304 335.79l-90.66-90.49a32 32 0 00-43.87-1.3L48 352M224 432l123.34-123.34a32 32 0 0143.11-2L464 368" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/videos">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M374.79 308.78L457.5 367a16 16 0 0022.5-14.62V159.62A16 16 0 00457.5 145l-82.71 58.22A16 16 0 00368 216.3v79.4a16 16 0 006.79 13.08z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M268 384H84a52.15 52.15 0 01-52-52V180a52.15 52.15 0 0152-52h184.48A51.68 51.68 0 01320 179.52V332a52.15 52.15 0 01-52 52z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/audio">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M192 218v-6c0-14.84 10-27 24.24-30.59l174.59-46.68A20 20 0 01416 154v22" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M416 295.94v80c0 13.91-8.93 25.59-22 30l-22 8c-25.9 8.72-52-10.42-52-38h0a33.37 33.37 0 0123-32l51-18.15c13.07-4.4 22-15.94 22-29.85V58a10 10 0 00-12.6-9.61L204 102a16.48 16.48 0 00-12 16v226c0 13.91-8.93 25.6-22 30l-52 18c-13.88 4.68-22 17.22-22 32h0c0 27.58 26.52 46.55 52 38l22-8c13.07-4.4 22-16.08 22-30v-80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/other">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a class="nav-item nav-link " href="https://watchmevip.com/my/bookmarks/locked">
                    <div class="d-flex justify-content-center">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></rect></svg>
            </div>
            </div>
                    </div>
                </a>
                    </div></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; left: 0px;"><div class="mCSB_dragger_bar"></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
    </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-9 mb-5 mb-lg-0 min-vh-100 border-left border-right settings-content pl-md-0 pr-md-0">
                <div class="px-2 px-md-3">
                                    </div>
                                <div class="feed-box mt-0  pt-4 posts-wrapper">
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
            <div class="row checkout-dialog">
    <div class="col-lg-6 mx-auto">
        
        <div class="paymentOption paymentPP d-none">
            <form id="pp-buyItem" method="post" action="https://watchmevip.com/payment/initiate">
                <input type="hidden" name="_token" value="cqceDqvv6F8ik8htOKoGgPUf59ZEPyMfubwsBTTJ">                <input type="hidden" name="amount" id="payment-deposit-amount" value="">
                <input type="hidden" name="transaction_type" id="payment-type" value="">
                <input type="hidden" name="post_id" id="post" value="">
                <input type="hidden" name="recipient_user_id" id="recipient" value="">
                <input type="hidden" name="provider" id="provider" value="">
                <input type="hidden" name="first_name" id="paymentFirstName" value="">
                <input type="hidden" name="last_name" id="paymentLastName" value="">
                <input type="hidden" name="billing_address" id="paymentBillingAddress" value="">
                <input type="hidden" name="city" id="paymentCity" value="">
                <input type="hidden" name="state" id="paymentState" value="">
                <input type="hidden" name="postcode" id="paymentPostcode" value="">
                <input type="hidden" name="country" id="paymentCountry" value="">
                <input type="hidden" name="taxes" id="paymentTaxes" value="">
                <input type="hidden" name="stream" id="stream" value="">
                <button class="payment-button" type="submit"></button>
            </form>
        </div>

        <div class="paymentOption ml-2 paymentStripe d-none">
            <button id="stripe-checkout-button">Checkout</button>
        </div>

        <!-- Modal -->
        <div class="checkout-popup modal fade" id="checkout-center" tabindex="-1" role="dialog" aria-labelledby="checkout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="payment-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="payment-body">
                            <div class="d-flex flex-row">
                                <div class="ml-0 ml-md-2 mb-2">
                                    <img src="" class="rounded-circle user-avatar">
                                </div>
                                <div class="d-lg-block">
                                    <div class="pl-2 d-flex justify-content-center flex-column">
                                        <div class="ml-2 ">
                                            <div class="text-bold  name"></div>
                                            <div class="text-muted username"><span>@</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-description mb-3 d-none"></div>
                            <div class="input-group mb-3 checkout-amount-input d-none">
                                <div class="input-group-prepend">
                            <span class="input-group-text" id="amount-label">
                                <div class="ion-icon-wrapper  icon-medium">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="32" y="80" width="448" height="256" rx="16" ry="16" transform="rotate(180 256 208)" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M64 384h384M96 432h320"></path><circle cx="256" cy="208" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><path d="M480 160a80 80 0 01-80-80M32 160a80 80 0 0080-80M480 256a80 80 0 00-80 80M32 256a80 80 0 0180 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                            </span>
                                </div>
                                <input class="form-control uifield-amount" placeholder="Amount ($1 min, $500 max)" aria-label="Username" aria-describedby="amount-label" id="checkout-amount" type="number" min="0" step="1" max="500">
                                <div class="invalid-feedback">Please enter a valid amount.</div>
                            </div>
                        </div>

                        <div id="accordion" class="mb-3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between" id="headingOne" data-toggle="collapse" data-target="#billingInformation" aria-expanded="true" aria-controls="billingInformation">
                                    <h6 class="mb-0">
                                        Billing agreement details
                                    </h6>
                                    <div class="ml-1 label-icon">
                                        <div class="ion-icon-wrapper ">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 184l144 144 144-144"></path></svg>
            </div>
            </div>
                                    </div>
                                </div>
                                <div id="billingInformation" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <form id="billing-agreement-form">
                                            <div class="tab-content">
                                                <!-- credit card info-->
                                                <div id="individual" class="tab-pane fade show active pt-1">
                                                    <div class="row form-group">
                                                        <div class="col-sm-6 col-6">
                                                            <div class="form-group">
                                                                <label for="firstName">
                                                                    <span>First name</span>
                                                                </label>
                                                                <input type="text" name="firstName" placeholder="First name" onchange="checkout.validateFirstNameField();" required="" class="form-control uifield-first_name">
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6 col-6">
                                                            <div class="form-group">
                                                                <label for="lastName">
                                                                    <span>Last name</span>
                                                                </label>
                                                                <input type="text" name="lastName" placeholder="Last name" onblur="checkout.validateLastNameField()" required="" class="form-control uifield-last_name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="countrySelect">
                                                            <span>Country</span>
                                                        </label>
                                                        <select class="country-select form-control input-sm uifield-country" id="countrySelect" required="" onchange="checkout.validateCountryField()"></select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="billingCity">
                                                            <span>City</span>
                                                        </label>
                                                        <input type="text" name="billingCity" placeholder="City" onblur="checkout.validateCityField()" required="" class="form-control uifield-city">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-6">
                                                            <div class="form-group">
                                                                <label for="billingState">
                                                                    <span>State</span>
                                                                </label>
                                                                <input type="text" name="billingState" placeholder="State" onblur="checkout.validateStateField()" required="" class="form-control uifield-state">
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6 col-6">
                                                            <div class="form-group">
                                                                <label for="billingPostcode">
                                                                    <span>Postcode</span>
                                                                </label>
                                                                <input type="text" name="billingPostcode" placeholder="Postcode" onblur="checkout.validatePostcodeField()" required="" class="form-control uifield-postcode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cardNumber">
                                                            <span>Address</span>
                                                        </label>
                                                        <textarea rows="2" type="text" name="billingAddress" onblur="checkout.validateBillingAddressField()" placeholder="Street address, apartment, suite, unit" class="form-control w-100 uifield-billing_address" required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="billing-agreement-error error text-danger d-none">Please complete all billing details</div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6>Payment summary</h6>
                            <div class="subtotal row">
                                <span class="col-sm left"><b>Subtotal:</b></span>
                                <span class="subtotal-amount col-sm right text-right">
                                        <b>$0.00</b>
                                    </span>
                            </div>
                            <div class="taxes row">
                                <span class="col-sm left"><b>Taxes:</b></span>
                                <span class="country-taxes col-sm right text-right">
                                        <b>$0.00</b>
                                    </span>
                            </div>
                            <div class="taxes-details"></div>
                            <div class="total row">
                                <span class="col-sm left"><b>Total:</b></span>
                                <span class="total-amount col-sm right text-right">
                                        <b>$0.00</b>
                                    </span>
                            </div>
                        </div>

                        <div>
                            <h6>Payment method</h6>
                            <div class="d-flex text-left radio-group row">
                                                                    <div class="p-0 col-6 col-md-3 stripe-payment-method">
                                        <div class="radio mx-auto stripe-payment-provider d-flex align-items-center justify-content-center" data-value="stripe">
                                            <img src="https://watchmevip.com/img/logos/stripe.svg">
                                        </div>
                                    </div>
                                                                                                    <div class="p-0 col-6 col-md-3 paypal-payment-method">
                                        <div class="radio mx-auto paypal-payment-provider d-flex align-items-center justify-content-center" data-value="paypal">
                                            <img src="https://watchmevip.com/img/logos/paypal.svg">
                                        </div>
                                    </div>
                                                                                                                                                                <div class="p-0 col-6 col-md-3">
                                    <div class="radio mx-auto credit-payment-provider d-flex align-items-center justify-content-center" data-value="credit">
                                        <div class="credit-provider-text">
                                            <b>Credit</b>
                                            <div class="available-credit">(0$)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-error error text-danger text-bold d-none mb-1">Please select your payment method</div>
                        <p class="text-muted mt-1"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary checkout-continue-btn">Continue
                            <div class="spinner-border spinner-border-sm ml-2 d-none" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
            </div>

            
@endsection
