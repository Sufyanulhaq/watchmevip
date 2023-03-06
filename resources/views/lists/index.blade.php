@extends('layouts.mev')
@section('content')


<div class="col-12 col-md-9 min-vh-100 border-left px-0 overflow-x-hidden-m content-wrapper ">
                    <div class="row">
        <div class="min-vh-100 border-right col-12 pr-md-0">
            <div class="pt-4 d-flex justify-content-between align-items-center px-3 pb-3 border-bottom">
                <div>
                    <h5 class="text-truncate text-bold mb-0 ">Lists</h5>
                </div>
                <button class="btn btn-outline-primary btn-sm px-3 mb-0" onclick="Lists.showListEditDialog()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add list">
                    <div class="ion-icon-wrapper  d-flex justify-content-center align-items-center">
            <div class="ion-icon-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"></path></svg>
            </div>
            </div>
                </button>
            </div>
            <div class="lists-wrapper mt-2">
                                                            <div class="px-2 list-item">
    <a href="https://watchmevip.com/my/lists/1" class="list-link d-flex flex-column pt-2 pb-2 pl-3 rounded">
        <div class="d-flex flex-row-no-rtl justify-content-between">
            <div>
                <h5 class="text-bold mb-1">Following</h5>
                <span class="text-muted text-bold"> 0 people -  0 posts</span>
            </div>
            <div class="d-flex justify-content-between align-items-center pr-3 list-box-avatars-wrapper">
                            </div>
        </div>
    </a>
</div>
    <hr class="my-2">
                                            <div class="px-2 list-item">
    <a href="https://watchmevip.com/my/lists/2" class="list-link d-flex flex-column pt-2 pb-2 pl-3 rounded">
        <div class="d-flex flex-row-no-rtl justify-content-between">
            <div>
                <h5 class="text-bold mb-1">Blocked</h5>
                <span class="text-muted text-bold"> 0 people -  0 posts</span>
            </div>
            <div class="d-flex justify-content-between align-items-center pr-3 list-box-avatars-wrapper">
                            </div>
        </div>
    </a>
</div>
                                                </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="list-update-dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create a new list</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <input id="list-name" type="text" class="form-control" name="text" required="" placeholder="List name">
                    <span class="invalid-feedback" role="alert">
                                        <strong>Please enter a list name.</strong>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="Lists.updateList('create');">Save</button>
            </div>
        </div>
    </div>
</div>
            </div>


            
@endsection
