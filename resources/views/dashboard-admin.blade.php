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
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span id="param1cat0">0</span> <button class="btn btn-warning btn-xs" id="btn-param1cat0"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span id="param1cat1">0</span> <button class="btn btn-warning btn-xs" id="btn-param1cat1"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span id="param1cat2">0</span> <button class="btn btn-warning btn-xs" id="btn-param1cat2"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
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
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span id="param2cat0">0</span> <button class="btn btn-inverse btn-xs" id="btn-param2cat0"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span id="param2cat1">0</span> <button class="btn btn-inverse btn-xs" id="btn-param2cat1"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span id="param2cat2">0</span> <button class="btn btn-inverse btn-xs" id="btn-param2cat2"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
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
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Services : <span id="param3cat0">0</span> <button class="btn btn-danger btn-xs" id="btn-param3cat0"> <i class="fa fa-sign-in-alt"></i> Detail</button> </div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Goods & Equipments : <span id="param3cat1">0</span> <button class="btn btn-danger btn-xs" id="btn-param3cat1"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
					<div class="p-5" style="font-size: 15px; font-weight:bold;">Others : <span id="param3cat2">0</span> <button class="btn btn-danger btn-xs" id="btn-param3cat2"> <i class="fa fa-sign-in-alt"></i> Detail</button></div>
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
	<div class="row">

		<div class="col-md-12">

		<!-- begin panel -->
		<div class="panel panel-inverse">
			<!-- begin panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Detail Data Equipment </h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
						data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
			</div>
			<!-- end panel-heading -->
			<!-- begin panel-body -->
			<div class="panel-body">
                <div id="grid-equipment" style="height: 440px; width:100%;"></div>
			</div>
			<!-- end panel-body -->
		</div>
		<!-- end panel -->
	</div>

	</div>
@endsection

@push('scripts')
<script src="/assets/js/kap/dashboard.js?n=1"></script>

@endpush