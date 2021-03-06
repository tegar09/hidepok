@extends('sipp-kling-layouts.app')

@section('content')


@foreach($data as $key)
<div class="modal fade" id="delete-action-{{ $key->id }}">
	<div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header" style="background-color: #f56954">
        <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title font-white" align="center">Hapus</h4>
      </div>
      <div class="modal-body overflow-hidden">
      	Apakah anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
      	<form action="/sipp-kling/admin/{{ $key->id }}" method="post">
	        <input type="submit" class="btn btn-danger" name="submit" value="YA">
	        {{ csrf_field() }}
	        <input type="hidden" name="_method" value="DELETE">

        <button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
@endforeach

<section class="content-header overflow-hidden">
	<div class="col-xs-12 title-dashboard">
		<h2>Managemen Admin</h2> <a href="{{ url('sipp-kling/admin/create') }}" class="btn btn-flat green-main-color font-white">Tambah Admin</a>
		<div class="line-height"></div>
	</div>
</section>
<section class="content overflow-hidden">
	<div class="col-xs-12">
		<div class="box box-widget">
			<div class="box-header with-border" style="padding: 15px">
				<h3 class="box-title"><b>Data Admin</b></h3>
				<div class="line-height-box-body green-main-color"></div>
			</div>
			<div class="box-body">
			<div class="table-responsive">
						<table class="table table-bordered table-hover example2">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $key)
								<tr>
									<td>{{ ++$loop->index }}</td>
									<td>{{ $key->name }}</td>
									<td>{{ $key->email }}</td>
									<td>{{ $key->password }}</td>
									<td>
										<button type="button" class="btn btn-flat btn-danger" data-toggle="modal" data-target="#delete-action-{{ $key->id }}"><i class="ion-ios-trash"></i></button>

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
</section>
@endsection