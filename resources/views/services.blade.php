@extends('layouts.base')

@section('title','Services')

@section('content')
    @component('_components.card')
        @slot('title','Service 1')
        @slot('content','Lorem ipsum dolor set aimet.')
    @endcomponent

    @component('_components.card')
        @slot('title','Service 2')
        @slot('content')
            <h3>Example</h3>
            <p>Lorem Ipsum</p>
        @endslot
    @endcomponent

    @component('_components.card')
        @slot('title','Service 3')
        @slot('content','Lorem ipsum dolor set aimet.')
    @endcomponent

@endsection
