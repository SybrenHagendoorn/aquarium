@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aquariums</div>

                <div class="card-body">
                  @foreach ($aquariums as $aquarium)
                  <li><a href="{{ url($aquarium->name) }}">{{$aquarium->name}}</a></li>
                  @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
