@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <div class="card-body">
                    <h2>Welcome, {{ Auth::user()->name }}</h2>
                    <p>You are logged in as an administrator.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection