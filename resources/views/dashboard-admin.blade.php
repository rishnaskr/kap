@extends('layouts.default', ['sidebarSearch' => true])

@section('title', 'Dashboard')

@section('content')
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-indigo">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-book"></i></div>
				<div class="stats-content">
					<div class="stats-number">Expired Last Month</div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span>0</span> <button class="btn btn-warning btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span>0</span> <button class="btn btn-warning btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span>0</span> <button class="btn btn-warning btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 100%;"></div>
					</div>
					<div class="stats-desc">
						{{-- isi content --}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-book"></i></div>
				<div class="stats-content">
					<div class="stats-number">Expired This Month</div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span>0</span> <button class="btn btn-inverse btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span>0</span> <button class="btn btn-inverse btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span>0</span> <button class="btn btn-inverse btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 100%;"></div>
					</div>
					<div class="stats-desc">
						{{-- isi content --}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-book"></i></div>
				<div class="stats-content">
					<div class="stats-number">Expired Next Month</div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span>0</span> <button class="btn btn-danger btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span>0</span> <button class="btn btn-danger btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span>0</span> <button class="btn btn-danger btn-xs"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 100%;"></div>
					</div>
					<div class="stats-desc">
						{{-- isi content --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
@endsection