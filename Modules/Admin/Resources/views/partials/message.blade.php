@if(Session::get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <strong>Success!</strong> <span>{{ Session::get('success') }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(Session::get('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <strong>Warning!</strong> <span>{{ Session::get('warning') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::get('error'))
    <div class="alert alert-error alert-dismissible" role="alert">
        <strong>Error!</strong> <span>{{ Session::get('error') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif