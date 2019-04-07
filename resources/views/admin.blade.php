@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="content">
			<div class="box">
				<div class="box-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Tanggal Lahir</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allsiswa as $siswa)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$siswa->nama}}</td>
								<td>{{$siswa->kelas}}</td>
								<td>{{$siswa->tgllahir}}</td>
								<td>
									<a href="{{route('admin.edit', $siswa->id)}}" class="btn btn-warning btn-circle fa fa-pencil"></a>
									<form action="{{route('admin.destroy', $siswa->id)}}" method="post">
										{{method_field('DELETE')}}
										@csrf
										<button type="submit" class="btn btn-danger btn-circle fa fa-trash"></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('foot-content')
@endsection