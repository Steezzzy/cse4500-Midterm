@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Manufactures</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $invoice->date_purchase }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Buyers ID #</dt>
            <dd class="col-sm-9">{{ $invoice->buyers_id }}</dd>

            <dt class="col-sm-3">Equipment ID #</dt>
            <dd class="col-sm-9">{{ $invoice->equipment_id }}</dd>

        </dl>
    </div>
@stop