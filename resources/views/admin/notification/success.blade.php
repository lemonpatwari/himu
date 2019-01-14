@if (session('message'))
    <div class="alert alert-success" id="lmn">
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ session('message') }}
    </div>
@endif