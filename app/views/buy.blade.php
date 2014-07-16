@extends('layouts.default')

@section('content')

<h1>Buy for $10</h1>

{{ Form::open() }}

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" data-stripe="number">
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" data-stripe="cvc">
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration:</span>
      {{ Form::selectMonth(null, null, ['data-stripe' => 'exp-month']) }}
      {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['data-stripe' => 'exp-year']) }}
    </label>
  </div>

  <div>
    {{ Form::submit('Buy now!') }}
  </div>


{{ Form::close() }}

@stop