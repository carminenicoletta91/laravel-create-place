@extends('layout.MyCustomLayout')
@section('link')
  <a href="{{ route('plc.index') }}">Back</a>
@endsection
@section('content')
  @section('content')

  <div class="Add-Place">
    <form method="post" action="{{ route('plc.store') }}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" value="">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" value="">
      </div>
      <div class="form-group">
        <label for="nation">Nation</label>
        <input type="text" name="nation" value="">
      </div>

      <button id="sv-button"type="submit">Save</button>
    </form>
  </div>
@endsection

@endsection
