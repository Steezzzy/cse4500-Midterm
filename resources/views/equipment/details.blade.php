@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipment->manufacture }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $equipment->manfac_email }}</dd>

            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $equipment->manfac_phone }}</dd>
        </dl>
    </div>
@stop