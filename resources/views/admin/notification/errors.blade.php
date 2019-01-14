@if($errors->any())
    <div class="bg-warning" id="errors">
        <ul>
            <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Form Submitted Fail</span>
            @foreach($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif