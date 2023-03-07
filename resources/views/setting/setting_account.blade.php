@extends('layouts.mev')
@section('content')
<div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
                    <div class="">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 mb-3 pr-0 settings-menu">
                <div class="settings-menu-wrapper">
                    <div class="d-none d-md-block">
                        <div class="mt-3 ml-3">
        <h5 class="text-bold ">Settings</h5>
        <h6 class="mt-2 text-muted">Manage your account</h6>
    </div>
                    </div>
                    <div class="d-block d-md-none mt-3">
                        <div class="ml-3">
        <h5 class="text-bold mt-0 mt-md-3 mb-0 ">Account</h5>
        <h6 class="mt-2 text-muted">Manage your account settings</h6>
    </div>
                    </div>
                    <hr class="mb-0">
                    <div class="d-none d-md-block">
                        <div class="d-lg-block settings-nav" id="">
    <div class="card-settings border-bottom">
        <div class="list-group list-group-sm list-group-flush">
                            <a href="{{url('setting')}}" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Profile</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="{{url('setting/account')}}" class="active list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Account</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/wallet" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="144" width="416" height="288" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><path d="M368 320a32 32 0 1132-32 32 32 0 01-32 32z"></path></svg>
            </div>
            </div>
                        <span>Wallet</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/payments" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="56" ry="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></rect><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="60" d="M48 192h416M128 300h48v20h-48z"></path></svg>
            </div>
            </div>
                        <span>Payments</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/rates" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M434.8 137.65l-149.36-68.1c-16.19-7.4-42.69-7.4-58.88 0L77.3 137.65c-17.6 8-17.6 21.09 0 29.09l148 67.5c16.89 7.7 44.69 7.7 61.58 0l148-67.5c17.52-8 17.52-21.1-.08-29.09zM160 308.52l-82.7 37.11c-17.6 8-17.6 21.1 0 29.1l148 67.5c16.89 7.69 44.69 7.69 61.58 0l148-67.5c17.6-8 17.6-21.1 0-29.1l-79.94-38.47" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M160 204.48l-82.8 37.16c-17.6 8-17.6 21.1 0 29.1l148 67.49c16.89 7.7 44.69 7.7 61.58 0l148-67.49c17.7-8 17.7-21.1.1-29.1L352 204.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Rates</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/subscriptions" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Subscriptions</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/notifications" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Notifications</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/privacy" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M463.1 112.37C373.68 96.33 336.71 84.45 256 48c-80.71 36.45-117.68 48.33-207.1 64.37C32.7 369.13 240.58 457.79 256 464c15.42-6.21 223.3-94.87 207.1-351.63z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                        <span>Privacy</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                            <a href="https://watchmevip.com/my/settings/verify" class=" list-group-item list-group-item-action d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper mr-3 icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"></path></svg>
            </div>
            </div>
                        <span>Verify</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
            </div>
            </div>
                    </div>
                </a>
                    </div>
    </div>
</div>
                    </div>
                    <div class="setting-menu-mobile d-block d-md-none mt-3">
                        <div class="mt-3 inline-border-tabs text-bold">
    <nav class="nav nav-pills nav-justified mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_horizontal mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/profile">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link active" href="https://watchmevip.com/my/settings/account">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/wallet">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="144" width="416" height="288" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M411.36 144v-30A50 50 0 00352 64.9L88.64 109.85A50 50 0 0048 159v49" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><path d="M368 320a32 32 0 1132-32 32 32 0 01-32 32z"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/payments">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="56" ry="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></rect><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="60" d="M48 192h416M128 300h48v20h-48z"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/rates">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M434.8 137.65l-149.36-68.1c-16.19-7.4-42.69-7.4-58.88 0L77.3 137.65c-17.6 8-17.6 21.09 0 29.09l148 67.5c16.89 7.7 44.69 7.7 61.58 0l148-67.5c17.52-8 17.52-21.1-.08-29.09zM160 308.52l-82.7 37.11c-17.6 8-17.6 21.1 0 29.1l148 67.5c16.89 7.69 44.69 7.69 61.58 0l148-67.5c17.6-8 17.6-21.1 0-29.1l-79.94-38.47" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M160 204.48l-82.8 37.16c-17.6 8-17.6 21.1 0 29.1l148 67.49c16.89 7.7 44.69 7.7 61.58 0l148-67.49c17.7-8 17.7-21.1.1-29.1L352 204.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/subscriptions">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/notifications">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/privacy">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M463.1 112.37C373.68 96.33 336.71 84.45 256 48c-80.71 36.45-117.68 48.33-207.1 64.37C32.7 369.13 240.58 457.79 256 464c15.42-6.21 223.3-94.87 207.1-351.63z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                </div>
            </a>
                    <a class="nav-item nav-link " href="https://watchmevip.com/my/settings/verify">
                <div class="d-flex justify-content-center">
                    <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M416 128L192 384l-96-96"></path></svg>
            </div>
            </div>
                </div>
            </a>
            </div></div><div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; left: 0px;"><div class="mCSB_dragger_bar"></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mb-5 mb-lg-0 min-vh-100 border-left border-right settings-content mt-1 mt-md-0 pl-md-0 pr-md-0">
                <div class="ml-3 d-none d-md-block">
                    <h5 class="text-bold mt-0 mt-md-3 mb-0 ">Account</h5>
                    <h6 class="mt-2 text-muted">Manage your account settings</h6>
                </div>
                <hr class=" d-none d-md-block">
                <div class="px-4 px-md-3">
                <form action="{{url('profile/update/password')}}/{{auth()->user()->id}}" method="POST"  >
                {{ csrf_field() }}

    <div class="form-group">
        <label for="username">Password</label>
        <input class="form-control " id="password" name="password" type="password">
        <p id="p1" class="text-danger"></p>

            </div>

    <div class="form-group">
        <label for="username">New password</label>
        <input class="form-control " id="new_password" name="new_password" type="password">
        <p id="p2" class="text-danger"></p>

            </div>

    <div class="form-group">
        <label for="username">Confirm password</label>
        <input class="form-control " id="confirm_password" name="confirm_password" type="password">
        <p id="p3" class="text-danger"></p>

            </div>
    <button class="btn btn-primary btn-block rounded mr-0" id="submitdsa" type="submit">Save</button>

</form>
                </div>
            </div>
        </div>
    </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



<script>
    $("#submitdsa").click(function() {
        var password = $("#password").val();
        var new_password = $("#new_password").val();
        var confirm_password = $("#confirm_password").val();
     

      if(password.length == "")
          {
            $("#p1").text("Current password required" );
            $("#password").focus();
            return false;
          }
          else if(new_password.length == "")
          {
            $("#p2").text("New Password");
            $("#new_password").focus();
            return false;
          }

          else if(confirm_password != new_password)
          {
            $("#p3").text("Password does not match");
            $("#confirm_password").focus();
            return false;
          }

        else
          {
                return true;
              }
          
      });

  
 

</script>
@endsection
