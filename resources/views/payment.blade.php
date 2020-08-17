@extends('layouts.app')

@section('content')
    <div class="container">
        <form
            method="POST"
            action="/payments">
            @csrf

            <button type="submit" class="btn btn-primary">Make Payment</button>
            @if(session('message'))
                <div class="text-success text-xs mt-2">
                    {{session('message')}}
                </div>
            @endif
        </form>
    </div>
@endsection
