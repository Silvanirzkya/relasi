@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Author
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">kembali</a></div></div>

		<div class="panel-body">
			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="a" value="{{$author->nama}}" class="form-control" readonly="">
			</div>
			
			</form>
		</div>
	</div>
</div>
</div>
@endsection
