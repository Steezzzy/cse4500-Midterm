@extends('adminlte::page')

@section('title', 'manufactures')

@section('content_header')
    <h1>List of invoices</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Date of Purchase</th><th>Buyers ID #</th><th>Equipment ID #</th> <th>Manfucature ID</th> <th>Category</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoice AS $invoice)
        <tr>
          <td>{{ $invoice->date_purchase }}</td>
          <td>{{ $invoice->buyers_id }}</td>
          <td>{{ $invoice->equipment_id }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('invoice.show',['invoice'=>$invoice->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>