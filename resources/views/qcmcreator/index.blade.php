@extends('layouts.app')


@section('content')
<div class="row justify-content-center mt-5">

    <form class="form" method="POST" action="{{route('answer')}}">
        @csrf

        <div class="form-group mx-sm-3 mt-2">
            <label for="codeQCM" class="mr-2">Identifiant QCM</label>
            <input type="text" name="qcmKey" class="form-control " id="codeQCM" placeholder="fournie par l'enseignant">
            <button type="submit" class="btn btn-secondary mt-2  btn-block">Confirmer</button>
        </div>
        
    </form>
</div>
<div class="row justify-content-center mt-5">
    @if(isset($alert))
    <div class="alert alert-danger" role="alert">
        Identifiant éroné! vérifiez bien l'orthographe!!!
    </div>
    @endif
</div>
@endsection