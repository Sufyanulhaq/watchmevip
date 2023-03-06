@extends('layouts.mev')
@section('content')
<div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
                    <div class="row">
        <div class="min-vh-100 col-12 col-md-8 border-right pr-md-0">

            <div class="">
                <div class="profile-cover-bg">
                    <img class="card-img-top centered-and-cropped" src="https://watchmevip.com/img/default-cover.png">
                </div>
            </div>

            <div class="container d-flex justify-content-between align-items-center">
                <div class="z-index-3 avatar-holder">
                    <img src="https://watchmevip.com/img/default-avatar.jpg" class="rounded-circle">
                </div>
                <div>
                                            <div class="d-flex flex-row">
                            <div class="mr-2">
                                <a href="https://watchmevip.com/my/settings" class="p-pill p-pill-text ml-2 pointer-cursor">
                                    <div class="ion-icon-wrapper mr-1 d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                                    <span class="d-none d-md-block">Edit profile</span>
                                    <span class="d-block d-md-none">Edit</span>
                                </a>
                            </div>
                                                        <div>
                                <span class="p-pill ml-2 pointer-cursor" data-toggle="tooltip" data-placement="top" title="" onclick="shareOrCopyLink()" data-original-title="Copy profile link">
                                    <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><circle cx="128" cy="256" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><circle cx="384" cy="112" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><circle cx="384" cy="400" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M169.83 279.53l172.34 96.94M342.17 135.53l-172.34 96.94"></path></svg>
            </div>
            </div>
                                </span>
                            </div>
                        </div>
                                    </div>
            </div>

            <div class="container pt-2 pl-0 pr-0">

                <div class="pt-2 pl-4 pr-4">
                    <h5 class="text-bold d-flex align-items-center">
                        <span>Admin</span>
                                                                    </h5>
                    <h6 class="text-muted"><span class="text-bold"><span>@</span>watchmevip</span> </h6>
                </div>

                <div class="pt-2 pb-2 pl-4 pr-4 profile-description-holder">
                    <div class="description-content line-clamp-1">
                        No description available.
                    </div>
                                    </div>

                <div class="d-flex flex-column flex-md-row justify-content-md-between pb-2 pl-4 pr-4 mb-3 mt-1">

                    <div class="d-flex align-items-center mr-2 text-truncate mb-0 mb-md-0">
                        <div class="ion-icon-wrapper mr-1">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"></rect><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32M464 160H48"></path></svg>
            </div>
            </div>
                        <div class="text-truncate ml-1">
                            January 19
                        </div>
                    </div>
                                                                                                        
                </div>

                <div class="bg-separator border-top border-bottom"></div>

                                                                                                <div class="mt-3 inline-border-tabs">
                    <nav class="nav nav-pills nav-justified text-bold">
                        <a class="nav-item nav-link active" href="https://watchmevip.com/watchmevip">1 post </a>

                                                    <a class="nav-item nav-link " href="https://watchmevip.com/watchmevip?filter=image">1 image</a>
                        
                        
                        
                        
                    </nav>
                </div>
                <div class="justify-content-center align-items-center mt-4">
                                                                    <div class="feed-box mt-0 posts-wrapper">
                            <div class="post-box" data-postid="3">
    <div class="post-header pl-3 pr-3">
        <div class="d-flex">
            <div class="avatar-wrapper">
                <img class="avatar rounded-circle" src="https://watchmevip.com/img/default-avatar.jpg">
            </div>
            <div class="post-details pl-2 w-100">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-bold"><a href="https://watchmevip.com/watchmevip" class="text-white">Admin</a></div>
                        <div><a href="https://watchmevip.com/watchmevip" class="text-white text-hover"><span>@</span>watchmevip</a></div>
                    </div>

                    <div class="d-flex">
                        <div class="pr-3 pr-md-3"><a class="text-white text-hover" onclick="PostsPaginator.goToPostPageKeepingNav(3,1,'https://watchmevip.com/posts/3/watchmevip')" href="javascript:void(0)">1mo ago</a></div>
                        <div class="dropdown dropleft">
                            <a class="btn btn-sm text-white text-hover btn-outline-dark dropdown-toggle px-2 py-1 m-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><circle cx="256" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><circle cx="416" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle><circle cx="96" cy="256" r="32" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></circle></svg>
            </div>
            </div>
                            </a>
                            <div class="dropdown-menu">
                                <!-- Dropdown menu links -->
                                <a class="dropdown-item" href="javascript:void(0)" onclick="shareOrCopyLink('https://watchmevip.com/posts/3/watchmevip')">Copy post link</a>
                                                                    <a class="dropdown-item bookmark-button " href="javascript:void(0);" onclick="Post.togglePostBookmark(3);">Bookmark this post </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="Lists.showListManagementConfirmation('unfollow', 1);">Unfollow</a>
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="Lists.showListManagementConfirmation('block', 1);">Block</a>
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="Lists.showReportBox(1,3);">Report</a>
                                                                            <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://watchmevip.com/posts/edit/3">Edit post</a>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="Post.confirmPostRemoval(3);">Delete post</a>
                                                                                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="post-content mt-3  pl-3 pr-3">
        <p class="text-break">Hy there .</p>
    </div>

            <div class="post-media">
                                                                        <a href="https://watchmevip.com/storage/posts/images/efe5365dd8ea41f9b33140857f76c092.jpg" rel="mswp" title="">

                                <img src="https://watchmevip.com/storage/posts/images/efe5365dd8ea41f9b33140857f76c092.jpg" draggable="false" alt="" class="img-fluid rounded-0 w-100">
                    
    </a>
                                                        </div>
        <div class="post-footer mt-3 pl-3 pr-3">
        <div class="footer-actions d-flex justify-content-between">
            <div class="d-flex">
                
                                    <div class="h-pill h-pill-primary mr-1 rounded react-button " data-toggle="tooltip" data-placement="top" title="" onclick="Post.reactTo('post',3)" data-original-title="Like">
                        <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
            </div>
            </div>
                    </div>
                                
                                                            <div class="h-pill h-pill-primary mr-1 rounded" data-toggle="tooltip" data-placement="top" title="" onclick="Post.showPostComments(3,6)" data-original-title="Show comments">
                            <div class="ion-icon-wrapper  icon-medium d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M87.49 380c1.19-4.38-1.44-10.47-3.95-14.86a44.86 44.86 0 00-2.54-3.8 199.81 199.81 0 01-33-110C47.65 139.09 140.73 48 255.83 48 356.21 48 440 117.54 459.58 209.85a199 199 0 014.42 41.64c0 112.41-89.49 204.93-204.59 204.93-18.3 0-43-4.6-56.47-8.37s-26.92-8.77-30.39-10.11a31.09 31.09 0 00-11.12-2.07 30.71 30.71 0 00-12.09 2.43l-67.83 24.48a16 16 0 01-4.67 1.22 9.6 9.6 0 01-9.57-9.74 15.85 15.85 0 01.6-3.29z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"></path></svg>
            </div>
            </div>
                        </div>
                                                    
                            </div>
            <div class="mt-0 d-flex align-items-center justify-content-center post-count-details">
                <span class="ml-2-h">
                    <strong class="text-bold post-reactions-label-count">0</strong>
                    <span class="post-reactions-label">likes</span>
                </span>
                                    <span class="ml-2-h d-none d-lg-block">
                    <a href="https://watchmevip.com/posts/3/watchmevip" class="text-white text-hover">
                        <strong class="post-comments-label-count">0</strong>
                       <span class="post-comments-label">
                        comments
                       </span>
                    </a>
                </span>
                                <span class="ml-2-h d-none d-lg-block">
                    <strong class="post-tips-label-count">0</strong>
                    <span class="post-tips-label">tips</span>
                </span>
            </div>
        </div>
    </div>

            <div class="post-comments d-none">
            <hr>

            <div class="px-3 post-comments-wrapper">
                <div class="comments-loading-box">
                    <div class="ph-item mt-0 mb-2">
        <div class="ph-col-2">
            <div class="ph-avatar"></div>
        </div>
        <div>
            <div class="ph-row">
                <div class="ph-col-12"></div>
                <div class="ph-col-6"></div>
                <div class="ph-col-6 empty"></div>
                <div class="ph-col-2"></div>
                <div class="ph-col-10 empty"></div>
                <div class="ph-col-6"></div>
                <div class="ph-col-6 empty"></div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <div class="show-all-comments-label pl-3 d-none">
                                    <a href="javascript:void(0)" onclick="PostsPaginator.goToPostPageKeepingNav(3,1,'https://watchmevip.com/posts/3/watchmevip')">Show more</a>
                            </div>
            <div class="no-comments-label pl-3 d-none">
                No comments yet.
            </div>
                            <hr>
                <div class="px-3 new-post-comment-area">
    <div class="d-flex justify-content-center align-items-center">
        <img class="rounded-circle" src="https://watchmevip.com/img/default-avatar.jpg">
        <div class="input-group">
            <textarea name="message" class="form-control comment-textarea mx-3 comment-text" placeholder="Write a message.." onkeyup="textAreaAdjust(this)"></textarea>
            <div class="input-group-append z-index-3 d-flex align-items-center justify-content-center">
                <span class="h-pill h-pill-primary rounded mr-3 trigger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like">😊</span>
            </div>
            <span class="invalid-feedback pl-4 text-bold" role="alert"></span>
        </div>
        <div class="pl-2">
            <button class="btn btn-outline-primary btn-rounded-icon" onclick="Post.addComment(3)">
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
        <hr>
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
        </div>
        <div class="col-12 col-md-4 d-none d-md-block pt-3">
            <div class="profile-widgets-area pb-3">

    <div class="card recent-media rounded-lg">
        <div class="card-body m-0 pb-0">
        </div>
        <h5 class="card-title pl-3 mb-0">Recent</h5>
        <div class="card-body [{&quot;id&quot;:&quot;efe5365dd8ea41f9b33140857f76c092&quot;,&quot;filename&quot;:&quot;posts\/images\/efe5365dd8ea41f9b33140857f76c092.jpg&quot;,&quot;driver&quot;:0,&quot;type&quot;:&quot;jpg&quot;,&quot;user_id&quot;:1,&quot;post_id&quot;:3,&quot;message_id&quot;:null,&quot;created_at&quot;:&quot;2023-02-01 12:48:00&quot;,&quot;updated_at&quot;:&quot;2023-02-01 12:48:03&quot;,&quot;payment_request_id&quot;:null,&quot;attachmentType&quot;:&quot;image&quot;,&quot;path&quot;:&quot;https:\/\/watchmevip.com\/storage\/posts\/images\/efe5365dd8ea41f9b33140857f76c092.jpg&quot;,&quot;thumbnail&quot;:&quot;https:\/\/watchmevip.com\/storage\/posts\/images\/150X150\/efe5365dd8ea41f9b33140857f76c092.jpg&quot;,&quot;post&quot;:{&quot;id&quot;:3,&quot;user_id&quot;:1,&quot;text&quot;:&quot;Hy there .&quot;,&quot;price&quot;:10,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-02-01 12:48:03&quot;,&quot;updated_at&quot;:&quot;2023-02-01 12:48:03&quot;}}]">
                                                <a href="https://watchmevip.com/storage/posts/images/efe5365dd8ea41f9b33140857f76c092.jpg" rel="mswp" title="">
                        <img src="https://watchmevip.com/storage/posts/images/150X150/efe5365dd8ea41f9b33140857f76c092.jpg" class="rounded mb-2 mb-md-2 mb-lg-2 mb-xl-0 img-fluid">
                    </a>
                            
        </div>
    </div>

                                                        
    
</div>
        </div>
    </div>

            <div class="modal fade" tabindex="-1" role="dialog" id="list-add-user-dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add user to list</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Chose the list you want to add the user into.</p>
                <div class="add-user-lists-wrapper">
                                            <div class="form-check d-flex mb-3">
                            <input class="form-check-input input-group-lg pointer-cursor" data-listid="1" type="checkbox" value="" id="list-1">
                            <label class="form-check-label ml-3 mt-0 pointer-cursor" for="list-1">
                                <h6 class="m-0 text-bold">Following</h6>
                                <span class="list-subtitle"> 0 members -  0 posts</span>
                            </label>
                        </div>
                                            <div class="form-check d-flex mb-3">
                            <input class="form-check-input input-group-lg pointer-cursor" data-listid="2" type="checkbox" value="" id="list-2">
                            <label class="form-check-label ml-3 mt-0 pointer-cursor" for="list-2">
                                <h6 class="m-0 text-bold">Blocked</h6>
                                <span class="list-subtitle"> 0 members -  0 posts</span>
                            </label>
                        </div>
                                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
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
        <div class="modal fade" tabindex="-1" role="dialog" id="messageModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-default">Send a new message to Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="userMessageForm" role="form" autocomplete="off">
                    <div class="mfv-errorBox"></div>
                    <input type="hidden" name="_token" value="cqceDqvv6F8ik8htOKoGgPUf59ZEPyMfubwsBTTJ">
                                            <input type="hidden" name="receiverID" value="1">
                                        <div class="form-group focused">
                        <div class="input-holder">
                            <textarea class="form-control" name="message" placeholder="Your message" id="messageText"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer pl-0 pr-0 pb-0">
                    <button type="submit" onclick="messenger.sendDMFromProfilePage()" class="btn-primary btn mr-0 new-conversation-label"> Send </button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <div class="modal fade" tabindex="-1" role="dialog" id="qr-code-dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">watchmevip's QR code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div id="qrcode"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="Profile.downloadQRCode()">Download</button>
            </div>
        </div>
    </div>
</div>

            </div>
@endsection
