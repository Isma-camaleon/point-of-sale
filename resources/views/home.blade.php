@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h4 class="mb-0">Hola {{Auth::user()->name}}</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
