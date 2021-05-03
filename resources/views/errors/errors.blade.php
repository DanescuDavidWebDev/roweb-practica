
@if (Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger">
    {{Session::get('error')}}
</div>
@endif
@if ($errors->any())
    <div class="notifications">
        @foreach ($errors->all() as $error)
            <h5 class="danger">{{$error}}</h5>
        @endforeach
    </div>
@endif