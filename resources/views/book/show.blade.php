@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Book
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">kembali</a></div></div>

		<div class="panel-body">
			<div class="form-group">
				<label class="control-lable">Title</label>
				<input type="text" name="title" value="{{$book->title}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
					<label class="control-lable">Nama Author</label>
					<input type="text" name="author_id" value="{{$book->author->nama}}" class="form-control" readonly="">
				</div>
			<div class="form-group">
				<label class="control-lable">Amount</label>
					<input type="number" name="amount" value="{{$book->amount}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Cover</label><br>
				<img src="{{asset('/img/'.$book->cover.'')}}" width="100" height="100">
			</div>
			

			</form>
		</div>
	</div>
</div>
@endsection
