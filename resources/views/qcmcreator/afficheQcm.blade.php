@extends('layouts.app')


@section('content')

<div class="container">
    <table class="table table-striped table-dark text-center">
  <thead>
    <tr>
      <th scope="col">Titre du QCM</th>
      <th scope="col">Note / 20</th>
      <th scope="col">Date d'évaluation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $li)
  <tr>
      <td>{{$li->name}}</td>
      <td>{{$li->moyenne}}</td>
      <td>{{$li->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection