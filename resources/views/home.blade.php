@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
           <form-component></form-component>
        </div>
        <div class="col-md-8">
            <timeline-component></timeline-component>
        </div>
    </div>
</div>
@endsection