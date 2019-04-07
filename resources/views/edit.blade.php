@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header"></div>
	<div class="content">
		<div class="box">
			<div class="box-body">
				<form action="{{route('admin.update', $siswa->id)}}" method="post">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}">
					</div>
					<div class="form-group">
						<label>TL</label>
						<input type="date" class="form-control" name="tgllahir" value="{{$siswa->tgllahir}}">
					</div>
					<button class="btn btn-success pull-right"><i class="fa fa-edit"></i> Edit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection