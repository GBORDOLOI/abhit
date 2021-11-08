@extends('layout.website.website')

@section('title', 'Knowledge Forum')

@section('head')
    <style>
        #header {
            display: none;
        }

        .sidebar {
            position: sticky;
            top: 150px;
        }

    </style>
@endsection

@section('content')

    <section class="time-table">
        @guest
            <div class="text-center">
                <h4>Must Login To View Time Table</h4>    
            </div>
        @endguest
    </section>
    @include('layout.website.include.modals')

@endsection

@section('scripts')
    @include('layout.website.include.modal_scripts')
@endsection
