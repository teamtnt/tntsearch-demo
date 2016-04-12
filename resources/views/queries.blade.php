@extends('app')

@section('content')

<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th>Query</th>
      <th>Hits</th>
    </tr>
  </thead>
  <tbody>
  @foreach($queries as $q)
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{{$q->query}}</td>
      <td>{{$q->hits}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection