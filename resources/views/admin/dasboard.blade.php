@extends('layout.app')

@section('content')
<div class="container">
    <h1> Welcome Ketuaa!</h1>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection