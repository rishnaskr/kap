@extends('layouts.default', ['sidebarSearch' => true])

@section('title', 'Dashboard')

@section('content')
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-teal">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-book"></i></div>
				<div class="stats-content">
					<div class="stats-title">A</div>
					<div class="stats-number">0</div>
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
					<div class="stats-title">B</div>
					<div class="stats-number">0</div>
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
					<div class="stats-title">C</div>
					<div class="stats-number">0</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 100%;"></div>
					</div>
					<div class="stats-desc">
						{{-- isi content  --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
@endsection