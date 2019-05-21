@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bonjour {{$name}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Vous ètes connecté!
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">               
                <div class="card">
                    <img src="icons/check.svg" class="card-img-top" alt="repondre">
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#">Créer</a></h5>
                        <p class="card-text text-center">Créer un QCM.</p>
                    </div>
                </div>
                <div class="card ">
                <img src="icons/resultat.svg" class="card-img-top" alt="resultat">
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#">Résultats</a></h5>
                        <p class="card-text text-center">Consulter les résultats.</p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection