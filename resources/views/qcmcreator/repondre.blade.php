@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <h1>{{$qcm->name}}</h1>
    </div>
    <div class="row justify-content-center mt-5">
        <form method="POST" action="{{url('qcmcreator/save/'.$qcm->id)}}">
            @csrf
            @foreach($qcm->questions as $question)
            <div class="form-group">
                <h5>{{$question->title}}</h5>
                @foreach($question->choices as $choice)
                <div class="custom-control custom-radio">
                    <input type="radio" required id="{{$choice->reponse}}" name="result[{{$question->id}}]" value="{{$choice->result == 1}}" class="custom-control-input">
                    <label class="custom-control-label" for="{{$choice->reponse}}">{{$choice->reponse}}</label>
                </div>

                @endforeach
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary mt-2">Valider</button>

        </form>
    </div>
</div>


@endsection