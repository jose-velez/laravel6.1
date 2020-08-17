@extends('layouts.app')

@section('content')
    <div class="container">
        <form
            method="POST"
            action="/contact">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Email Me</button>
            @if(session('message'))
                <div class="text-success text-xs mt-2">
                    {{session('message')}}
                </div>
            @endif
        </form>
    </div>
@endsection
