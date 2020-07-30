@extends('layouts.app')

@section('content')
                        @include('_publish_tweek_panel')
                        <div class="border border-gray-300 rounded-lg">
                            @foreach ($tweeks as $tweek)
                            @include('_tweek')
                            @endforeach
                        </div>
@endsection