@extends('layout.MyCustomLayout')
@section('link')
  <a href="{{ route('plc.create') }}">Create New Places</a>
@endsection
@section('content')
  @foreach ($values as $value)
    <div class="box-{{$type}}">
      <p>Name: {{$value -> name}}</p>
      <p>Address: {{$value -> address}}</p>
      <p>City: {{$value -> city}}</p>
      <p>Nation: {{$value -> nation}}</p>
    </div>
  @endforeach

@endsection
