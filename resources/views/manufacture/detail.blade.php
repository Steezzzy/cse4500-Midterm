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
            {{ $manufacture->manufacture }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $manufacture->manfac_email }}</dd>

            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $manufacture->manfac_phone }}</dd>
        </dl>
    </div>
@stop