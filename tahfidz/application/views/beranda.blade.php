@extends('layout.default')

@section('isi')
	<div class="row">
		<div class="col-sm-4 theia">
			<div class="theiaStickySidebar">
				<div class="panel panel-success">
					<div class="panel-heading">Di Atas Target</div>
					<div class="panel-body">
						<p>Ali</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 70%">70%</div>
						</div>
						<p>Zen</p>
						<div class="progress">
							<div class="progress-bar progress-bar-info" style="width: 80%">80%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4 theia">
			<div class="theiaStickySidebar">
				<div class="panel panel-warning">
					<div class="panel-heading">Di Bawah Target</div>
					<div class="panel-body">
						<p>Ari</p>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 2%">2%</div>
						</div>
						<p>Rey</p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 26%">26%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4 theia">
			<div class="theiaStickySidebar">
				<div class="panel panel-default">
					<div class="panel-heading">Admin</div>
					<div class="list-group">
						<div class="list-group-item">Tambahkan Santri</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Blog</div>
					<div class="list-group">
						<div class="list-group-item">Target</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Angkatan</div>
					<div class="list-group">
						<div class="list-group-item">2018</div>
						<div class="list-group-item">2017</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection