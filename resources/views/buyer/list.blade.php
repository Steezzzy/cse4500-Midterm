@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>List of Users who bought items</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($buyer AS $buyer)
        <tr>
          <td>{{ $buyer->id }}</td>
          <td>{{ $buyer->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('buyer.show',['buyer'=>$buyer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('buyer.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop