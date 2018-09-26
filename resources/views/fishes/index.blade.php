@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fishes</div>

                <div class="card-body">
                  @foreach ($fishes as $fish)
                  <p>{{$fish->name}}</p>
                  @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
