@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Buyers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $buyer->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $buyer->cell }}</dd>

            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $buyer->address }}</dd>
        </dl>
    </div>
@stop