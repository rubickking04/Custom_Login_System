@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card shadow">
                    <div class="card-header" style="font-family: 'Roboto', sans-serif;">Dashboard</div>
                    <div class="card-body">
                        <p style="font-family: 'Roboto', sans-serif;">Welcome  {{ Auth::user()->name }}!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
