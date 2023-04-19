@extends('layouts.welcome')
@section('content')
@if($status == 200)
<div class="alert alert-success my-5">
    <h4>{{$msg}}</h4>
    <p>Redirecting to another page in 5 seconds...</p>
    <script>
        setTimeout(function() {
            window.location.href = "{{route('books')}}";
        }, 5000);
    </script>
</div>
@elseif($status == 404)
<div class="alert alert-danger my-5">
    <h4>404 - Page Not Found</h4>
    <p>{{$msg}}</p>
</div>
@elseif($status == 500)
<div class="alert alert-danger my-5">
    <h4>500 - Internal Server Error</h4>
    <p>{{$msg}}</p>
</div>
@endif
@endsection