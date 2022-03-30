@extends('adminlte::page')

@section('error', 'Error Page')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="error-page">
<h2 class="headline text-warning"> 404</h2>
<div class="error-content">
<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
<p>
 We could not find the page you were looking for.
Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
</p>
<form class="search-form">
<div class="input-group">
<input type="text" name="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
</button>
</div>
</div>

</form>
</div>

</div>
        </div>
    </div>
@stop

@section('js')
    <script> console.log('Error'); </script>
@stop
