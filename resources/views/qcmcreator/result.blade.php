@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <h1>{{$qcm->name}}</h1>
    </div>
    <div class="row justify-content-center mt-5">
    @if($moyenne>10)
        <h5 style="color:green">Résultat : {{$moyenne}} / 20</h5>
        @else
        <h5 style="color:red">Résultat : {{$moyenne}} / 20</h5>
        
        @endif
    </div>
    
</div>
@endsection