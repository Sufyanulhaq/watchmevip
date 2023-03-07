<!doctype html>
<html class="h-100" dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Your feed - WatchMeVIP </title>
    <meta name="theme-color" content="#505050">
    <meta name="color-scheme" content="dark light">
    <meta property="og:url"           content="" />
    <meta property="og:type"          content="" />
    <meta property="og:title"         content="" />
    <meta property="og:description"   content="" />
    <meta property="og:image"         content="" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="csrf-token" content="ukJm0v0xFIfnJYSriVUzY1tZCFl3QBVlybHYZxM8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://watchmevip.com/libs/pusher-js/dist/web/pusher.min.js"></script>
    <link rel="shortcut icon" href="https://watchmevip.com/storage/settings/January2023/2PLDFC2PCrImYFD0eB5i.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300" rel="preload" as="style">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,500,600,700" rel="preload" as="style">
    <link href="https://watchmevip.com/dist/cssBuilds/d7dc5c26d52e55d6dd38dc257a9adcc99973451138.css" rel="stylesheet">
    <link href="https://watchmevip.com/dist/cssBuilds/d69143d2cc933fde6429e345c11b847411635692512.css" rel="stylesheet">

    <style>
        .user-side-menu .h-pill.active {
   
            background: #6c6437 !important;
                color: white !important;
        }
        .user-side-menu .h-pill:hover {
            background: #6c6437 !important;
                color: white !important
        }
        .toast-success{
            background: green;
        }
        .toast-info{
            background: blue;
        }
        .toast-warning{
            background: orange;
        }
        .toast-error{
            background: red;
        }
    </style>

</head>
<body class="d-flex flex-column">
<div class="flex-fill">
@include('partials.sidebar')
    <!-- Dark overlay -->
    <div class="overlay"></div>
    <div class="container-xl overflow-x-hidden-m">
        <div class="row main-wrapper">
            @include('partials.navbar')
             @yield('content')
        </div>
        @include('partials.mobileNav')
    </div>
</div>
@include('partials.footer')
<script>window.app = {"debug":false,"baseUrl":"https:\/\/watchmevip.com","theme":"dark","ppMode":"live","showCookiesBox":null,"feedDisableRightClickOnMedia":null,"currency":"USD","currencySymbol":"$","withdrawalsMinAmount":"20","withdrawalsMaxAmount":"500","depositMinAmount":"5","depositMaxAmount":"500","tipMinAmount":1,"tipMaxAmount":500,"stripeRecurringDisabled":null,"paypalRecurringDisabled":null,"ccBillRecurringDisabled":null,"enable_age_verification_dialog":null};</script><script>window.app = {"debug":false,"baseUrl":"https:\/\/watchmevip.com","theme":"dark","ppMode":"live","showCookiesBox":null,"feedDisableRightClickOnMedia":null,"currency":"USD","currencySymbol":"$","withdrawalsMinAmount":"20","withdrawalsMaxAmount":"500","depositMinAmount":"5","depositMaxAmount":"500","tipMinAmount":1,"tipMaxAmount":500,"stripeRecurringDisabled":null,"paypalRecurringDisabled":null,"ccBillRecurringDisabled":null,"enable_age_verification_dialog":null};</script><script>window.user = {"username":"u1677771575","user_id":7};window.pusher = {"cluster":null,"key":null,"logging":false};window.appSettings = {"feed":{"allow_gallery_zoom":false}};</script><script>window.paginatorConfig = {"next_page_url":"","prev_page_url":"","current_page":1,"total":0,"per_page":"3","hasMore":false};window.initialPostIDs = [];window.sliderConfig = {"autoslide":false};window.user = {"username":"u1677771575","user_id":7,"lists":{"blocked":14,"following":13}};</script><script src="https://watchmevip.com/dist/jsBuilds/5f398599d37c7cc999c46cdb97dea38a16622418658.js"></script>
<script src="https://watchmevip.com/dist/jsBuilds/84021cc8d002174f95da5a43c8cae22b21609142456.js"></script>
<script type="module" src="https://watchmevip.com/libs/ionicons/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://watchmevip.com/libs/ionicons/dist/ionicons/ionicons.js"></script>
<script>
    window.translations = {
        "Account": "Account",
        "Add funds": "Add funds",
        "Add to your lists": "Add to your lists",
        "Add your card?": "Add your card?",
        "All": "All",
        "All rights reserved.": "All rights reserved.",
        "Already got an account?": "Already got an account?",
        "Amount": "Amount",
        "Amount ($5 min, $500 max)": "Amount (:currency:min min, :currency:max max)",
        "Are you sure you want to clear all members out of current list?": "Are you sure you want to clear all members out of current list?",
        "Are you sure you want to delete this list?": "Are you sure you want to delete this list?",
        "Are you sure you want to delete this post?": "Are you sure you want to delete this post?",
        "Audio": "Audio",
        "Available funds. You can deposit more money or become a creator to earn more.": "Available funds. You can deposit more money or become a creator to earn more.",
        "Before proceeding, please check your email for a verification link.": "Before proceeding, please check your email for a verification link.",
        "Bio": "Bio",
        "Blog": "Blog",
        "Edit": "Edit",
        "Set post price" : "Set post price",
        "Price": "Price",
        "Bookmark this post": "Bookmark this post",
        "Bookmarks": "Bookmarks",
        "Contacts": "Contacts",
        "Checkout": "Checkout",
        "Clear": "Clear",
        "Clear list": "Clear list",
        "Manual payouts": "Manual payouts",
        "Request withdrawal": "Request withdrawal",
        "Pending balance": "Pending balance",
        "Payment account" : "Payment account",
        "Bank account" : "Bank account",
        "PayPal email" : "PayPal email",
        "Wallet address" : "Wallet address",
        "Bank account, notes, etc": "Bank account, notes, etc",
        "Full access to this user's content": "Full access to this user's content",
        "Direct message with this user": "Direct message with this user",
        "Cancel your subscription at any time": "Cancel your subscription at any time",
        "Click the text bubble to send a new message.": "Click the icon above to send a new message.",
        "Close": "Close",
        "Write a new post, drag and drop files to add attachments.": "Write a new post, drag and drop files to add attachments.",
        "Confirm Password": "Confirm Password",
        "Confirm password": "Confirm password",
        "Confirm your email address.": "Confirm your email address.",
        "Contact page": "Contact",
        "Terms & conditions": "Terms & conditions",
        "Copy post link": "Copy post link",
        "Copy profile link": "Copy profile link",
        "Create a new list": "Create a new list",
        "Credit card": "Credit card",
        "Dark mode": "Dark mode",
        "Delete": "Delete",
        "Delete account": "Delete account",
        "Delete list": "Delete list",
        "Delete post": "Delete post",
        "Deposit": "Deposit",
        "Documentation": "Documentation",
        "Don't have an account?": "Don't have an account?",
        "E-Mail Address": "E-Mail Address",
        "Edit post": "Edit post",
        "Edit profile": "Edit profile",
        "Explore": "Explore",
        "Find a creator": "Find a creator",
        "Forgot Your Password?": "Forgot Your Password?",
        "Free account only": "Free account only",
        "From": "From",
        "Full name": "Full name",
        "Get verified and start to earning now": "Get verified and start to earning now",
        "Help and support": "Help and support",
        "Hide bundles": "Hide bundles",
        "Unfollow": "Unfollow",
        "Home": "Home",
        "I agree to the": "I agree to the",
        "If you did not receive the email": "If you did not receive the email",
        "In order to get verified and receive your badge, please take care of the following steps:": "In order to get verified and receive your badge, please take care of the following steps:",
        "Is public account": "Is public account",
        "Language": "Language",
        "Light mode": "Light mode",
        "Like": "Like",
        "Likes": "Likes",
        "List name": "List name",
        "Lists": "Lists",
        "Loading...": "Loading...",
        "Location": "Location",
        "Locked": "Locked",
        "Log out": "Log out",
        "Login": "Login",
        "Make more money": "Make more money",
        "become a creator long" : "Become a creator and post your premium content securely on our platform. Earn up to 85% out of your sales and enjoy a stable base of fans.",
        "Manage": "Manage",
        "Manage your account": "Manage your account",
        "Manage your account settings": "Manage your account settings",
        "No suggestions available" : "No suggestions available",
        "Become a creator": "Become a creator",
        "Featured creators": "Featured creators",
        "Here's list of currated content creators to start exploring now!": "Here's list of currated content creators to start exploring now!",
        "Got questions?" : "Got questions?",
        "Don't hesitate to send us a message at" : "Don't hesitate to send us a message at",
        "Send a tip to this user": "Send a tip to this user",
        "Your payment have been successfully initiated but needs to await for approval": "Your payment have been successfully initiated but needs to await for approval",

        "Main features" : "Main features",
        "Here's a glimpse at the main features our script offers" : "Here's a glimpse at the main features our script offers",

        "Mobile Ready": "Mobile Ready",
        "Cross compatible & mobile first design.": "Cross compatible & mobile first design.",

        "Advanced Admin panel": "Advanced Admin panel",
        "Easy to use, fully featured admin panel.": "Easy to use, fully featured admin panel.",

        "User subscriptions": "User subscriptions",
        "Easy to use and reliable subscriptions system.": "Easy to use and reliable subscriptions system.",

        "User feed & Locked posts": "User feed & Locked posts",
        "Advanced feed system, pay to unlock posts.": "Advanced feed system, pay to unlock posts.",

        "Light & Dark themes": "Light & Dark themes",
        "Eazy to customize themes, dark & light mode.": "Eazy to customize themes, dark & light mode.",

        "RTL & Locales": "RTL & Locales",
        "Fully localize your site with languages & RTL.": "Fully localize your site with languages & RTL.",

        "Live chat & Notifications": "Live chat & Notifications",
        "Live user messenger & User notifications.": "Live user messenger & User notifications.",

        "Post Bookmarks & User lists": "Post Bookmarks & User lists",
        "Stay updated with list users and bookmarks.": "Stay updated with list users and bookmarks.",

        "Content flagging and User reports": "Content flagging and User reports",
        "Stay safe with user and content reporting.": "Stay safe with user and content reporting.",

        "Technologies used": "Technologies used",
        "Built on secure, scalable and reliable techs": "Built on secure, scalable and reliable techs",

        "Contact us" : "Contact us",
        "Don't hesitate to contact us for any matter. We will get back to you asap." : "Don't hesitate to contact us for any matter. We will get back to you asap.",

        "Message sent.": "Message sent",
        "Email address": "Email address",
        "Subject": "Subject",
        "Message": "Message",
        "Submit": "Submit",
        "Feed" : "Feed",
        "Create" : "Create",
        "Profile" : "Profile",
        "account" : "account",
        "wallet" :  "wallet",
        "payments" : "payments",
        "rates" :  "rates",
        "subscriptions" : "subscriptions",
        "notifications" :  "notifications",
        "privacy" : "privacy",
        "verify" :  "verify",
        "comments": "comment|comments",
        "Messages": "Messages",
        "Messenger": "Messenger",
        "Missing notifications": "No notifications yet.",
        "More": "More",
        "My profile": "My profile",
        "Name": "Name",
        "New message received": "New message received",
        "New password": "New password",
        "New post": "New post",
        "New posts from subscribed accounts": "New posts from subscribed accounts",
        "New subscription registered": "New subscription registered",
        "Next page": "Next page",
        "No comments yet.": "No comments yet.",
        "No description available.": "No description available.",
        "No lists available": "No lists available",
        "No posts available": "No posts available",
        "No profiles available": "No profiles available",
        "Notifications": "Notifications",
        "Limited offer main label": "Limited offer - :discount% off for :days_remaining days!",
        "Offer ends label": "Offer ends :date",
        "One month subscription of": "One month subscription of",
        "Cancel": "Cancel",
        "Continue": "Continue",
        "Other": "Other",
        "Paid with": "Paid with",
        "Password": "Password",
        "Payments": "Payments",
        "Photos": "Photos",
        "Please enter a list name.": "Please enter a list name.",
        "Please enter a valid amount.": "Please enter a valid amount.",
        "Please select your payment method": "Please select your payment method",
        "Previous page": "Previous page",
        "Pricing": "Pricing",
        "Privacy": "Privacy",
        "Privacy Policy": "Privacy Policy",
        "Privacy policy": "Privacy policy",
        "Proceed with payment": "Proceed with payment",
        "Promos": "Promos",
        "Ready to go, easy to develop and debug boilerplate for multi page, server side rendered apps.": "Ready to go, easy to develop and debug boilerplate for multi page, server side rendered apps.",
        "Recent": "Recent",
        "Refresh suggestions": "Refresh suggestions",
        "Register": "Register",
        "Or use social" : "Or use social",
        "Regular price label": "Regular price :amount :currency / month",
        "Remember Me": "Remember Me",
        "Remove the bookmark": "Remove the bookmark",
        "Rename list": "Rename list",
        "Renews": "Renews",
        "Report": "Report",
        "Suggestions": "Suggestions",
        "Save": "Save",
        "Say 'Hi!' to someone!": "Say 'Hi!' to someone!",
        "Send Password Reset Link": "Send Password Reset Link",
        "Enjoy high quality content, made for you and the ones like you.": "Enjoy high quality content, made for you and the ones like you.",
        "Enjoy private conversations and get tipped for your content.": "Enjoy private conversations and get tipped for your content.",
        "Your content get's safely upload in the cloud and full controll to your account.": "Your content get's safely upload in the cloud and full controll to your account.",
        "Premium & Private content": "Premium & Private content",
        "Private chat & Tips": "Private chat & Tips",
        "Secured assets & Privacy focus": "Secured assets & Privacy focus",
        "Send a message": "Send a message",
        "Send a new message": "Send a new message",
        "Send a new message to": "Send a new message to :user",
        "Send a tip": "Send a tip",
        "Set your birthdate.": "Set your birthdate.",
        "Settings": "Settings",
        "Sign in": "Sign in",
        "Sign up": "Sign up",
        "Start your own journey now!": "Start your own journey now!",
        "Status": "Status",
        "Subscribe": "Subscribe",
        "Subscription": "Subscription",
        "Subscriptions": "Subscriptions",
        "Subscriptions bundles": "Subscriptions bundles",
        "Successfully canceled subscription": "The subscription has been successfully canceled.",
        "Support": "Support",
        "Terms of Use": "Terms of Use",
        "Terms of use": "Terms of use",
        "There are no active or cancelled subscriptions at the moment.": "There are no active or cancelled subscriptions at the moment.",
        "There are no payments on this account.": "There are no payments on this account.",
        "Tips": "Tips",
        "To": "To",
        "Try for free": "Try for free",
        "Start your own premium creators platform with our ready to go solution.": "Start your own premium creators platform with our ready to go solution.",
        "Payment canceled": "Payment canceled",
        "Your deposit request of :amount has been approved.": "Your deposit request of :amount has been approved.",
        "Check your wallet": "Check your wallet",
        "Your deposit request has been approved": "Your deposit request has been approved",
        "Partially paid payment": "Partially paid order",
        "There is a partially paid payment done with NowPayments that requires your attention. (:paymentId)": "There is a partially paid payment done with NowPayments that requires your attention. (:paymentId)",
        "Check payment": "Check payment",


        "Type": "Type",
        "Update your bio, cover and avatar": "Update your bio, cover and avatar",
        "Upload a Goverment issued ID card.": "Upload a Goverment issued ID card.",
        "Username": "Username",
        "Verify": "Verify",
        "Verify Your Email Address": "Verify Your Email Address",
        "Videos": "Videos",
        "Website URL": "Website URL",
        "Write a message..": "Write a message..",
        "You got no messages yet.": "You got no messages yet.",

        "Attachment removed." : "Attachment removed.",
        "Failed to remove the attachment." : "Failed to remove the attachment.",

        "You need to login first": "You need to login first",
        "Your active subscriptions": "Your active subscriptions",
        "Subscribe to": "Subscribe to :username for :currency:amount for each :subscription_interval",
        "Your notifications settings": "Your notifications settings",
        "Your payments & wallet": "Your payments & wallet",
        "Your post must contain more than 10 characters.": "Your post must contain more than :num character.|Your post must contain more than :num characters.",
        "Your privacy and safety matters": "Your privacy and safety matters",
        "and": "and",
        "click here to request another": "click here to request another",
        "days": ":number day|[2,*] :number days",
        "months": ":number month| :number months",
        "Following": "Following",
        "Followers": "Following",
        "Blocked": "Blocked",
        "for": "for",
        "likes": "like|likes",
        "profile": "profile",
        "tips": "tip|tips",
        "Your profile subscription price": "Monthly subscription price",
        "6 months subscription price": "Monthly price for 6 months subscriptions",
        "3 months subscription price": "Monthly price for 3 months subscriptions",
        "12 months subscription price": "Monthly price for yearly subscriptions",
        "Is offer until" : "Is offer until",
        "In order to start a promotion, reduce your monthly prices and select a future promotion end date.": "In order to start a promotion, reduce your monthly prices and select a future promotion end date.",
        "members": ":number member|[2,*] :number members",
        "posts": ":number post|[2,*] :number posts",
        "people": ":number person|[2,*] :number people",
        "images": ":number image|[2,*] :number images",
        "videos": ":number video|[2,*] :number videos",
        "audio": ":number audio|[2,*] :number audio",
        "fans": ":number fan|[2,*] :number fans",
        "following": ":number following|:number following",
        "to access": "to access",
        "with your content": "with your content",
        "DMs unavailable without subscription" : "Chat is available for subs/followers only",

        "Success": "Success",
        "Error": "Error",

        "Payment done. You have been credited $:amount Happy spending!": "Payment done. You have been credited $:amount Happy spending!",
        "Payment done. You successfully sent a tip of $:amount.": "Payment done. You successfully sent a tip of $:amount.",
        "Payment summary": "Payment summary",
        "Comment added" : "Comment added.",

        "List added" : "List added",
        "List renamed" : "List renamed",

        "New comment received" : "New comment received",
        "Upcoming renewals" :"Upcoming renewals",
        "Received a tip" : "Received a tip",
        "Unlock post for" : "Unlock post for",
        "Unlock post": "Unlock post",
        "Join streaming": "Join streaming",
        "Join streaming now for": "Join streaming now for",
        "You already paid for this streaming": "You already paid for this streaming",
        "You successfully paid for this streaming.": "You successfully paid for this streaming.",
        "Your live stream is about to end": "Your live stream is about to end",
        "Your live stream is about to end in 30 minutes. You can start another one afterwards.": "Your live stream is about to end in 30 minutes. You can start another one afterwards.",
        "Go to stream": "Go to stream",
        "Stream url can not be generated. Please enter at least one alphanumeric character in the stream title.": "Stream url can not be generated. Please enter at least one alphanumeric character in the stream title.",

        "Cancel subscription" : "Cancel subscription",
        "Are you sure you want to cancel this subscription?" : "Are you sure you want to cancel this subscription?",
        "Confirm" : "Confirm",

        "Due": "Due",
        "Number": "Number",
        "Date": "Date",
        "Invoiced To": "Invoiced",
        "Invoice From": "Invoice From",
        "Generated on": "Generated on",
        "Print": "Print",
        "Subtotal": "Subtotal",
        "Taxes": "Taxes",
        "Subscribed": "Subscribed",
        "Total": "Total",
        "View invoice": "View invoice",
        "Description": "Description",
        "Total taxes" : "Total taxes",

        "pending": "pending",
        "completed": "completed",
        "suspended":  "suspended",
        "update-needed": "update needed",
        "canceled": "canceled",
        "expired":  "expired",

        "approved":  "approved",
        "declined": "declined",
        "refunded":  "refunded",
        "initiated": "initiated",


        "tip": "Tip",
        "deposit": "Deposit",
        "one-month-subscription":  "One month subscription",
        "stream-access" : "Stream unlock",
        "three-months-subscription": "Three months subscription",
        "six-months-subscription":  "Six months subscription",
        "yearly-subscription": "Yearly subscription",
        "subscription-renewal":  "Subscription Renewal",

        "post notification" : "post notification",
        ":name added a new comment on your" : ":name added a new comment on your",
        "Send you a message: `:message`": "Sent you a message `:message`",
        "Hello, :name,":  "Hello, :name,",
        "You've received a new comment on one of your posts at :siteName." : "You've received a new comment on one of your posts at :siteName.",
        "Your notifications": "Your notifications",
        "New subscription from :name" : "New subscription from :name.",
        "A new user subscribed to your profile": "A new user subscribed to your profile.",
        "You got a new subscriber!" : "You got a new subscriber!",
        "You got a new subscriber! You can see more details over your subscriptions tab.": "You got a new subscriber! You can see more details over your subscriptions tab.",
        "Manage your subs": "Manage your subs",
        "sent you a tip of": "sent you a tip of",
        "You got a new tip!" : "You got a new tip!",
        ":name liked your": ":name liked your",
        ":name liked your comment":":name liked your comment.",
        "Withdrawal processed": "Your withdrawal of :currencySymbol:amount has been :status.",
        "successfully renewed": "successfully renewed",
        "failed renewing" : "failed renewing",
        "Check out his profile for more content" : "Check out his profile for more content",
        "Go back to the website": "Go back to the website",
        "Your subscription renewal": "Your subscription renewal",
        "Email subscription updated" : "Your subscription for :name profile :message",
        "Back" : "Back",

        "Please add your withdrawal notes: EG: Paypal or Bank account." : "Please add your withdrawal notes: EG: Paypal or Bank account.",
        "Your withdrawal request has been denied.": "Your withdrawal request has been denied.",
        "Your withdrawal request has been approved." : "Your withdrawal request has been approved.",
        "Try again" : "Try again",
        "My payments" : "My payments",
        "Email withdrawal processed" : "Your withdrawal request at :siteName got :status",
        "Email payment request processed" : "Your payment request at :siteName got :status",
        "has been sent to your account.": "has been sent to your account.",

        "requested": "requested",
        "rejected": "rejected",
        "verified": "verificata",
        "post-unlock": "post unlock",

        "Email identity checked" : "'Your identity check at :siteName got :status.",

        "Your identity check failed." : "Your identity check failed.",
        "Your identity check passed." : "Your identity check passed.",
        "Create a post" : "Create a post",
        "Confirm post save" : "Confirm post save",
        "Some attachments are still being uploaded." : "Some attachments are still being uploaded.",
        "Are you sure you want to continue?" : "Are you sure you want to continue?",

        "Email new message title" : "You got a new message on :siteName!",
        "View your messages" : "View your messages",

        "Upcoming renewal" : "Upcoming renewal",
        "Thanks" :  "Thanks",

        "Platform statistics": "Platform statistics",
        "Users registered":"Users registered",
        "New posts": "New posts",
        "New subscriptions":"New subscriptions",
        "Total earned": "Total earned",
        "Active subscriptions":"Active subscriptions",
        "Subscriptions revenue": "Subscriptions revenue",
        "Total transactions":"Total transactions",
        "Total amount earned": "Total amount earned",
        "Total posts":"Total posts",
        "Post attachments": "Post attachments",
        "Post comments":"Post comments",
        "Total reactions": "Total reactions",
        "Go to users": "Go to users",
        "Go to payments": "Go to payments",
        "Go to content": "Go to content",

        "New users": "New users",
        "No prior data": "No prior data",
        "thousands_separator": ".",
        "Users roles": "Users roles",
        "Not Confirmed": "Not Confirmed",
        "Registered users": "Registered users",
        "Increase": "Increase",
        "Decrease":"Decrease",
        "Constant": "Constant",
        "No current data":"No current data",
        "Day": "Day",
        "Days":"Days",
        "Month": "Month",
        "Months":"Months",
        "Website": "Website",
        "Visit the official product page": "Visit the official product page",
        "Visit the official product docs": "Visit the official product docs",
        "Changelog": "Changelog",
        "Visit the official product changelog": "Visit the official product changelog",

        "Complete your verification": "Complete your verification",
        "Please attach clear photos of your ID card back and front side.": "Please attach clear photos of your ID card back and front side.",
        "Your info looks good, you're all set to post new content!": "Your info looks good, you're all set to post new content!",

        "The payouts are manually and it usually take up to 24 hours for a withdrawal to be processed, we will notify you as soon as your request is processed": "The payouts are manually and it usually take up to 24 hours for a withdrawal to be processed, we will notify you as soon as your request is processed",

        "Admin & Site" : "Admin & Site",
        "Domain url or full installation path": "Domain url or full installation path",
        "Install script": "Install script",
        "Next": "Next",
        "Mandatory requirements": "Mandatory requirements",
        "PHP Version": "PHP Version",
        "Optional requirements": "Optional requirements",
        "FFMpeg paths are configured in admin panel. If not available, videos formats will fallback to mp4, uncompressed videos.": "FFMpeg paths are configured in admin panel. If not available, videos formats will fallback to mp4, uncompressed videos.",
        "Update the platform": "Update the platform",
        "Looks like there are no available updates on the current installation": "Looks like there are no available updates on the current installation",

        "You've backed up your files.": "You've backed up your files.",
        "You've backed up your database.": "You've backed up your database.",
        "You've copied the updated files onto your public directory.": "You've copied the updated files onto your public directory.",
        "Go home": "Go home",
        "Update":"Update",

        "Before being able to publish an item, you need to complete your": "Before being able to publish an item, you need to complete your",
        "profile verification": "profile verification",
        "Contact": "Contact",
        "Credit": "Credit",
        "Copyright": "Copyright",

        "Verify email": "Verify email",
        "Page not found": "Page not found",

        "Install the script": "Install the script",
        "Update the script": "Update the script",

        "Your feed": "Your feed",
        "Invoice": "Invoice",
        "Your lists": "Your lists",
        "Post": "Post",

        "Please select an user first": "Please select an user first",
        "Please enter your message": "Please enter your message",
        "These credentials do not match our records.": "These credentials do not match our records.",

        "Suggestions list refreshed" : "Suggestions list refreshed",
        "Error fetching suggestions" : "Error fetching suggestions",
        "Attachments removed successfully": "Attachments removed successfully",
        "List deleted successfully.": "List deleted successfully.",
        "Not authorized": "Not authorized",

        "List not found.": "List not found.",
        "List cleared.":"List cleared.",
        "Report sent.": "Report sent.",
        "Looks like the payment process has been cancelled.": "Looks like the payment process has been cancelled.",

        "User not verified. Can not post content.": "User not verified. Can not post content.",
        "Not found": "Not found",
        "Post not found": "Post not found",
        "Post deleted successfully.": "Post deleted successfully.",
        "Settings not saved": "Settings not saved",
        "Settings saved" : "Settings saved",
        "removed successfully": "removed successfully",
        "Invalid setting key": "Invalid setting key",
        "This subscription is already canceled.": "This subscription is already canceled.",

        "Reaction added.": "Reaction added.",
        "Reaction removed.":"Reaction removed.",

        "Database username": "Database username",
        "Database password": "Database password",

        "Uploaded videos can not longer than :length seconds.": "Uploaded videos can not longer than :length seconds.",

        "Warning": "Warning",
        "Confirmation email sent. Please check your inbox and spam folder.": "Confirmation email sent. Please check your inbox and spam folder.",
        "You have not confirmed your email address yet": "You have not confirmed your email address yet",
        "Click on": "Click on",
        "this link": "this link",
        "to resend the confirmation email": "to resend the confirmation email",

        "The locked post value must be higher than": "The locked post value must be higher than",
        "Add attachments" : "Add attachments",

        "Top" : "Top",
        "Latest" : "Latest",
        "View": "View",
        "No users were found" : "No users were found",

        ":username post": ":username's post",
        "Get profile QR code": "Get profile QR code",
        "Username QR Code": ":username's QR code",

        "Filters": "Filters",
        "Gender": "Gender",
        "Gender pronoun": "Gender pronoun",
        "Male": "Male",
        "Female": "Female",
        "Couple": "Couple",
        "Min age": "Min age",
        "Max age": "Max age",

        "This user is not authorized to go live": "This user is not authorized to go live",
        "Email address successfully verified" : "Email address successfully verified",

        "Verify your email": "Verify your email",
        "Verify your email address": "Verify your email address",

        "Verify your new device": "Verify your new device",
        "A fresh verification code has been sent to your email address.": "A fresh verification code has been sent to your email address.",
        "For security reasons, we’ve sent you a code to your email to validate your account.": "For security reasons, we’ve sent you a code to your email to validate your account.",
        "Resend Code": "Resend Code",
        "Enable email 2FA": "Enable email 2FA",
        "If enabled, access from new devices will be restricted until verified.": "If enabled, access from new devices will be restricted until verified.",
        "Your verification code is:" : "Your verification code is:",
        "The code you entered is invalid.": "The code you entered is invalid.",
        "We sent you a new code over your email address.": "We sent you a new code over your email address.",
        "Forget device": "Forget device",
        "Allowed devices": "Allowed devices",
        "Un-verified devices": "Un-verified devices",
        "on" : "on",
        "Created at": "Created at",
        "Desktop" : "Desktop",
        "Mobile" : "Mobile",
        "Tablet" :  "Tablet",
        "Delete device" :  "Delete device",
        "Are you sure you want to delete this device?" : "Are you sure you want to delete this device?",
        "Device deleted.": "Device deleted.",

        "Paypal" : "Paypal",
        "Stripe" : "Stripe",
        "Coinbase" :  "Coinbase",
        "NowPayments Crypto" : "NowPayments Crypto",
        "Manual" :  "Bank transfer",

        "minute": "minute|minutes",

        "streams": "stream|streams",

        "User" : "User",
        "Stream" : "Stream",

        "Streams": "Streams",
        "Active streams": "Active streams",
        "Previous streams": "Previous streams",
        "Length" : "Length",
        "Stream ended :time time ago": "Stream ended :time time ago",
        ":user's stream" : ":user's stream",
        "Streaming" : "Streaming",
        "Started streaming" : "Started streaming",
        "Watching": "Watching",
        "Requires a subscription" : "Requires a subscription",
        "Is public stream" : "Is public stream",
        "On air": "On air",
        "Go live": "Go live",
        "There are no active streams. Click the button above to start a new one.": "There are no active streams. Click the button above to start a new one.",
        "There are no previous streams.": "There are no previous streams.",
        "New stream": "New stream",

        "Stream updated successfully.": "Stream updated successfully.",
        "No active streams available.": "No active streams available.",
        "The stream has been queued to be stopped": "The stream has been queued to be stopped",
        "Stream could not be found.": "Stream could not be found.",
        "The stream has been deleted successfully.": "The stream has been deleted successfully.",
        "Invalid stream": "Invalid stream",
        "Stream access denied": "Stream access denied",
        "Access denied": "Access interzis",
        "Start a new stream": "Start a new stream",
        "Edit stream details": "Edit stream details",
        "Stream name": "Stream name",
        "Access price": "Access price",
        "Stream poster": "Stream poster",
        "Upload stream poster": "Upload stream poster",
        "Delete stream": "Delete stream",
        "Are you sure you want to delete this stream?": "Are you sure you want to delete this stream?",
        "How to stream": "How to stream",
        "Your stream server is online. In order to get going, follow the steps bellow:": "Your stream server is online. In order to get going, follow the steps bellow:",
        "Got it": "Got it",
        "Download": "Download",
        "for desktop or mobile alternatives.": "for desktop or mobile alternatives.",
        "Go to": "Go to",
        "For": "For",
        "select": "select",
        "then for the": "then for the",
        "use the values below.": "use the values below.",
        "Stream url": "Stream url",
        "Stream key": "Stream key",
        "Stream VOD unavailable": "Stream VOD unavailable",
        "End stream": "End stream",
        "Are you sure you want to end this stream?": "Are you sure you want to end this stream?",
        "Stop stream": "Stop stream",
        "Stream started": "Stream started",
        "Link copied to clipboard": "Link copied to clipboard",
        "There are no messages yet." : "There are no messages yet.",
        "Stream ended, can't add comments." : "Stream ended, can't add comments.",
        "Before being able to start a new stream, you need to complete your": "Before being able to start a new stream, you need to complete your",
        "Please confirm your ID first." : "Please confirm your ID first.",
        "Drop files here to upload" : "Drop files here to upload",

        "Expiring subscriptions": "Expiring subscriptions",
        "Hello, :subscriberName": "Hello, :subscriberName",
        "Your subscription to :creatorName is about to expire in the next 24h hours. Please top up your credit in order to keep your subscription going.": "Your subscription to :creatorName is about to expire in the next 24h hours. Please top up your credit in order to keep your subscription going.",

        "Add payment details": "Manual bank transfer",
        "Please attach clear photos with one the following: check, money order or bank transfer.": "Please attach clear photos with one the following: check, money order or bank transfer.",
        "Your payment have been successfully initiated but needs to await for processing": "Your payment have been successfully initiated but needs to await for processing",
        "Please upload at least one file": "Please upload at least one file",
        "have been credited to your account.": "have been credited to your account.",
        "Once confirmed, your credit will be available and you will be notified via email.": "Once the transfer is confirmed, will be notified via email and the credit will be available.",
        "IBAN":  "IBAN",
        "BIC/SWIFT": "BIC/SWIFT",
        "Bank name":  "Bank name",
        "Account owner": "Account owner",
        "Account number":  "Account number",
        "Routing number": "Routing number",

        "Search": "Search",
        "First name": "First name",
        "Last name": "Last name",
        "Country": "Country",
        "Select a country": "Select a country",
        "City": "City",
        "State": "State",
        "Postcode": "Postcode",
        "Address": "Address",
        "Street address, apartment, suite, unit": "Street address, apartment, suite, unit",
        "Please complete all billing details": "Please complete all billing details",

        "Member added to list.": "Member added to list.",
        "The field is required.": "The field is required.",

        "Enter only if you are over 18": "Enter only if you are over 18",
        "The website contains content of adult nature and is only available to adults. If you are under the age of 18 (or 21 in some countries), if it is illegal to view such material in your jurisdiction or if it offends you, please do not continue.": "The website contains content of adult nature and is only available to adults. If you are under the age of 18 (or 21 in some countries), if it is illegal to view such material in your jurisdiction or if it offends you, please do not continue.",
        "Yes": "Yes",
        "No":"No",
        "You can read more about our": "You can read more about our",
        "terms of usage": "terms of usage",
        "over this page": "over this page",
        "post": "post",
        "Latest media not available.": "Latest media not available.",

        "Having your profile set to private means:": "Having your profile set to private means:",
        "It will be hidden for search engines and unregistered users entirely.": "It will be hidden for search engines and unregistered users entirely.",
        "It will also be generally hidden from suggestions and user searches on our platform.": "It will also be generally hidden from suggestions and user searches on our platform.",

        "Payment method": "Payment method",
        "Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website.": "Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website.",
        "Billing agreement details": "Billing agreement details",
        "Add user to list": "Add user to list",
        "Chose the list you want to add the user into": "Chose the list you want to add the user into.",

        "Follow": "Follow",
        "Add list": "Add list",
        "Withdraw": "Withdraw",
        "Prices & Bundles": "Prices & Bundles",
        "Your email notifications settings" : "Your email notifications settings",
        "Follow this creator": "Follow this creator",

        "Hello!": "Hello!",
        "Regards": "Regards",
        "A fresh verification link has been sent to your email address.": "A fresh verification link has been sent to your email address.",
        "Verify Email Address": "Verify Email Address",
        "Please click the button below to verify your email address.": "Please click the button below to verify your email address.",
        "If you did not create an account, no further action is required.": "If you did not create an account, no further action is required.",
        "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser:": "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser:",
        "Something went wrong when cancelling this subscription": "Something went wrong when cancelling this subscription",


        "Open profile": "Open profile",
        "Having your profile set to open means:": "Having your profile set to open means:",
        "Both registered and unregistered users will be able to see your posts.": "Both registered and unregistered users will be able to see your posts.",
        "If account is private, the content will only be available for registered used.": "If account is private, the content will only be available for registered used.",
        "Paid posts will still be locked for open profiles.": "Paid posts will still be locked for open profiles."

    }
    ;
</script>
  <!-- toaster js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- toaster script -->
  <script>
    @if(Session::has('message'))
    var type = "{{ Session ::get('alert_type','danger') }}"
    switch(type){
        case 'info':
        toastr.info("{{ Session ::get('message') }}");
        break;
        case 'success':
        toastr.success("{{ Session ::get('message') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session ::get('message') }}");
        break;
        case 'error':
        toastr.error("{{ Session ::get('message') }}");
        break;
    }
    @endif
  </script>
  <!-- toaster script end --> 
</body>
</html>
