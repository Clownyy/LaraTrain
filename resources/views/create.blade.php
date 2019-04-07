@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header"></div>
	<div class="content">
		<div class="box">
			<div class="box-body">
				<form action="{{route('admin.store')}}" method="post">
					@csrf
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="kelas">
					</div>
					<div class="form-group">
						<label>TL</label>
						<input type="date" class="form-control" name="tgllahir">
					</div>
					<button class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection