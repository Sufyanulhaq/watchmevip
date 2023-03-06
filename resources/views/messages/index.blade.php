@extends('layouts.mev')
@section('content')



<div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
                    <div id="tpl" class="d-none bg-dark">
    <div class="dz-preview ml-1 mr-2 dz-file-preview">
        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
        <div class="dz-success-mark">
            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Check</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF"></path>
                </g>
            </svg>
        </div>
        <div class="dz-error-mark">
            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Error</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                        <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
    </div>
</div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <div class="pswp__top-bar d-none">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
    <div class="modal fade" tabindex="-1" role="dialog" id="report-user-post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Report user or post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="control-group">
                    <label for="reasonExamples">Reason</label>
                    <select id="reasonExamples" class="form-control">
                                                    <option value="I don't like this post">I don't like this post</option>
                                                    <option value="Content is offensive or violates Terms of Service.">Content is offensive or violates Terms of Service.</option>
                                                    <option value="Content contains stolen material (DMCA)">Content contains stolen material (DMCA)</option>
                                                    <option value="Content is spam">Content is spam</option>
                                                    <option value="Report abuse">Report abuse</option>
                                            </select>
                </div>

                <div class="control-group mt-2">
                    <label for="exampleTextarea">Details</label>
                    <textarea class="form-control" id="post_report_details" rows="2"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning submit-report-button">Report</button>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" tabindex="-1" role="dialog" id="post-delete-dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this post?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" onclick="Post.removePost();">Delete</button>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" tabindex="-1" role="dialog" id="post-lists-management-dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <span class="block-user-label">Block user</span>
                    <span class="unfollow-user-label">Unfollow user</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="block-user-label">Are you sure you want to block this user? Your posts will be mutually hidden and chats disabled.</p>
                <p class="unfollow-user-label">Are you sure you want to unfollow this user? His posts will be hidden from your feed.</p>
                <p class="unfollow-user-label">You can follow back any time later from the lists module.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning post-list-management-btn">Confirm</button>
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
    <div class="row">
        <div class="min-vh-100 col-12">
            <div class="container messenger min-vh-100">
                <div class="row min-vh-100">
                    <div class="col-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2 border border-right-0 border-left-0 rounded-left conversations-wrapper min-vh-100 overflow-hidden border-top ">
                        <div class="d-flex justify-content-center justify-content-md-between pt-3 pr-1 pb-2">
                            <h5 class="d-none d-md-block text-truncate pl-3 pl-md-0 text-bold ">Contacts</h5>
                            <span data-toggle="tooltip" title="" class="pointer-cursor " data-original-title="Send a new message">
                                <a data-toggle="modal" data-target="#messageModal" title="" class="pointer-cursor" data-original-title="Send a new message">  <div class="mt-0 h5"><div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z"></path></svg>
            </div>
            </div>
 </div> </a>
                            </span>
                        </div>
                        <div class="conversations-list">
                                                            <div class="d-flex mt-3 mt-md-2 pl-3 pl-md-0 mb-3 pl-md-0"><span>Click the icon above to send a new message.</span></div>
                                                    </div>
                    </div>
                    <div class="col-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-10 border conversation-wrapper rounded-right p-0 d-flex flex-column min-vh-100">
                                                <div class="conversation-header d-none">
    <div class="details-holder border-bottom">
        <div class="d-flex px-1">
            <div class="col-10 pl-0 d-flex">
                <div class="">
                    <img class="conversation-header-avatar" src="https://watchmevip.com/img/no-avatar.png">
                </div>
                <div class="mt-2 ml-3 conversation-header-user text-truncate">

                </div>
            </div>
            <div class="col-2 pt-2 pr-0 d-flex justify-content-end">
                <div class="dropdown dropleft">
                    <a class="btn btn-sm btn-outline-primary dropdown-toggle px-2 py-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><circle cx="256" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><circle cx="416" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><circle cx="96" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle></svg>
            </div>
            </div>
                    </a>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                        <a class="dropdown-item d-flex align-items-center tip-btn" data-toggle="modal" data-target="#checkout-center" data-type="chat-tip" data-first-name="" data-last-name="" data-billing-address="" data-country="" data-city="" data-state="" data-postcode="" data-available-credit="0">Send a tip</a>
                        <a class="dropdown-item d-flex align-items-center conversation-profile-link" href="#" target="_blank">Go to profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item unfollow-btn" href="javascript:void(0);">Unfollow</a>
                        <a class="dropdown-item block-btn" href="javascript:void(0);">Block</a>
                        <a class="dropdown-item report-btn" href="javascript:void(0);">Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                        <div class="ph-item border-top-0 border-right-0 border-left-0 mb-0 d-none conversation-header-loading-box">
    <div class="ph-col-2">
        <div class="ph-avatar"></div>
    </div>
    <div>
        <div class="ph-row">
            <div class="ph-col-8 empty"></div>
            <div class="ph-col-4"></div>
            <div class="ph-col-6 empty"></div>
            <div class="ph-col-6"></div>
            <div class="ph-col-10 empty"></div>
            <div class="ph-col-2"></div>
        </div>
    </div>
</div>
                        <div class="ph-item border-0 conversation-loading-box d-none">
    <div class="ph-col-12">
        <div class="ph-row">
            <div class="ph-col-6 big"></div>
            <div class="ph-col-4 empty big"></div>
            <div class="ph-col-2 empty big"></div>

            <div class="ph-col-4 big"></div>
            <div class="ph-col-6 empty big"></div>
            <div class="ph-col-2 empty big"></div>

            <div class="ph-col-6 empty big"></div>
            <div class="ph-col-4 empty big"></div>
            <div class="ph-col-2 big"></div>

            <div class="ph-col-6 empty big"></div>
            <div class="ph-col-2 empty big"></div>
            <div class="ph-col-4 big"></div>

            <div class="ph-col-6 empty big"></div>
            <div class="ph-col-4 empty big"></div>
            <div class="ph-col-2 big"></div>

            <div class="ph-col-2 big"></div>
            <div class="ph-col-4 empty big"></div>
            <div class="ph-col-6 empty big"></div>

            <div class="ph-col-4 big"></div>
            <div class="ph-col-6 empty big"></div>
            <div class="ph-col-2 empty big"></div>

        </div>
    </div>
</div>
                        <div class="conversation-content pt-4 pb-1 px-3 flex-fill">
                                                            <div class="d-flex h-100 align-items-center justify-content-center">
                                    <div class="d-flex"><span>👋 You got no messages yet. </span><span class="d-none d-md-block d-lg-block d-xl-block">&nbsp;Say 'Hi!' to someone!</span></div>
                                </div>
                                                    </div>
                        <div class="dropzone-previews dropzone w-100 ppl-0 pr-0 pt-1 pb-1"></div>
                        <div class="conversation-writeup pt-1 pb-1 d-flex align-items-center mb-1 hidden">
                            <form class="message-form w-100 pl-3">
                                <input type="hidden" name="_token" value="cqceDqvv6F8ik8htOKoGgPUf59ZEPyMfubwsBTTJ">
                                <input type="hidden" name="receiverID" id="receiverID" value="">
                                <textarea name="message" class="form-control messageBoxInput dropzone" placeholder="Write a message.." onkeyup="messenger.textAreaAdjust(this)"></textarea>
                                
                            </form>
                            <div class="messenger-buttons-wrapper d-flex">
                                <button class="btn btn-outline-primary btn-rounded-icon messenger-button attach-file mx-2 file-upload-button">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M428 224H288a48 48 0 01-48-48V36a4 4 0 00-4-4h-92a64 64 0 00-64 64v320a64 64 0 0064 64h224a64 64 0 0064-64V228a4 4 0 00-4-4z"></path><path d="M419.22 188.59L275.41 44.78a2 2 0 00-3.41 1.41V176a16 16 0 0016 16h129.81a2 2 0 001.41-3.41z"></path></svg>
            </div>
            </div>
                                    </div>
                                </button>
                                <button class="btn btn-outline-primary btn-rounded-icon messenger-button send-message mr-2" onclick="messenger.sendMessage()">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M473 39.05a24 24 0 00-25.5-5.46L47.47 185h-.08a24 24 0 001 45.16l.41.13 137.3 58.63a16 16 0 0015.54-3.59L422 80a7.07 7.07 0 0110 10L226.66 310.26a16 16 0 00-3.59 15.54l58.65 137.38c.06.2.12.38.19.57 3.2 9.27 11.3 15.81 21.09 16.25h1a24.63 24.63 0 0023-15.46L478.39 64.62A24 24 0 00473 39.05z"></path></svg>
            </div>
            </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="messageModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-default">Send a new message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="userMessageForm" role="form" autocomplete="off">
                    <div class="mfv-errorBox"></div>
                    <input type="hidden" name="_token" value="cqceDqvv6F8ik8htOKoGgPUf59ZEPyMfubwsBTTJ">
                                            <div class="input-holder">
                            <select id="select-repo" name="receiverID" class="repositories form-control input-sm" placeholder="To..."></select>
                        </div>
                        <br>
                                        <div class="form-group focused">
                        <div class="input-holder">
                            <textarea class="form-control" name="message" placeholder="Your message" id="messageText"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer pl-0 pr-0 ">
                    <button type="submit" onclick="messenger.createConversation()" class="btn-primary btn mr-0 new-conversation-label"> Send </button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
            </div>


            
@endsection
