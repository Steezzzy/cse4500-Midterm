@extends('adminlte::page')

@section('title', 'manufactures')

@section('content_header')
    <h1>List of Users who bought items</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th>Email</th><th>Phone</th> <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacture AS $manufacture)
        <tr>
          <td>{{ $manufacture->id }}</td>
          <td>{{ $manufacture->manufacture }}</td>
          <td>{{ $manufacture->manfac_email }}</td>
          <td>{{ $manufacture->manfac_phone }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacture.show',['manufacture'=>$manufacture->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacture.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop