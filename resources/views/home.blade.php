@extends('layout.app')

@section('content')
<div class="container">
    <h1>Welcome home, user!</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">pergi dari zona nyaman</button>
    </form>
</div>
@endsection