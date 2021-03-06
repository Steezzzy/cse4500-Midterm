@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $note->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $note->notes }}</dd>

            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $note->services }}</dd>

            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $note->software }}</dd>

            <dt class="col-sm-3">Cell Phone</dt>
            <dd class="col-sm-9">{{ $note->equipment_id }}</dd>
        </dl>
    </div>
@stop