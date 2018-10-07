@extends('backend.layouts.master',['program'=>$program])

@section('title')
	<title>Dashboard | Radio Reksa Purwakarta</title>
@endsection


@section('page-header')
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Radio Reksa Purwakarta</span></h4>
				{{--  Deg Deg Seer Aach  --}}
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-component">
			<ul class="breadcrumb">
				<li class="active"><a href="index.html"><i class="icon-home2 position-left"></i> Dashboard</a></li>
			</ul>
		</div>
	</div>
	
@endsection


@section('content-area')
	<div class="content" >

		<!-- STATISTICS -->
    <div class="row" >
			
        <div class="col-sm-6 col-md-9" style="background:#fff">
			<div class="tabs-container" style="">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#chart_tab">Pages Visits Chart</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="chart_tab" class="tab-pane active">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 text-center">
									<label class="label label-success" style="font-weight: bold;font-size: 15px;">Pages Views Summary</label>
									<div id="chart1" style="margin-bottom: 30px;"></div>
								</div>
								<div class="col-sm-6 col-sm-offset-3 text-center">
									<label class="label label-success" style="font-weight: bold;font-size: 15px;">Pages Views by Country</label>
									<div id="plot1" style="width:100%;height:300px;margin-top: 30px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
		
			<div class="col-sm-12 col-md-12">
						<div class="panel panel-body panel-stats bg-blue-400 has-bg-image">
						<div class="media no-margin">
						<div class="media-body">
						<h3 class="no-margin">{{$berita}}</h3>
						<span class="text-uppercase text-size-mini">total berita</span>
						</div>

						<div class="media-right media-middle">
						<i class="fa fa-clone fa-3x opacity-75"></i>
						</div>
						</div>
						</div>
			</div>

			<div class="col-sm-12 col-md-12">
						<div class="panel panel-body panel-stats bg-violet-400 has-bg-image">
						<div class="media no-margin">
						<div class="media-body">
						<h3 class="no-margin">{{$program->count()}}</h3>
						<span class="text-uppercase text-size-mini">total Program</span>
						</div>

						<div class="media-right media-middle">
						<i class="fa fa-calendar fa-3x opacity-75"></i>
						</div>
						</div>
						</div>
			</div>

			<div class="col-sm-12 col-md-12">
						<div class="panel panel-body panel-stats bg-indigo-400 has-bg-image">
						<div class="media no-margin">
						<div class="media-body">
						<h3 class="no-margin"></h3>
						<span class="text-uppercase text-size-mini">total</span>
						</div>

						<div class="media-right media-middle">
						<i class="fa fa-tasks fa-3x opacity-75"></i>
						</div>
						</div>
						</div>
			</div>

			<div class="col-sm-12 col-md-12">
						<div class="panel panel-body panel-stats bg-orange-400 has-bg-image">
						<div class="media no-margin">
						<div class="media-body">
						<h3 class="no-margin"></h3>
						<span class="text-uppercase text-size-mini">total</span>
						</div>

						<div class="media-right media-middle">
						<i class="fa fa-info-circle fa-3x opacity-75"></i>
						</div>
						</div>
						</div>
			</div>
		</div>
    </div>
    <!-- END STATISTICS -->

		<div class="row">
			{{-- YOUR CONTENT HERE --}}
    </div>

		@include('backend.includes.footer')
	</div>
@endsection
@section('footscripts')
	<script src="{{asset('js/plugins/morris/morris.js')}}"></script>
    <script src="{{asset('js/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <link href="{{asset('css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
	<script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('js/plugins/flot/curvedLines.js')}}"></script>
    <script src="{{asset('js/plugins/flot/excanvas.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
	<script src="{{asset('js/plugins/flot/jquery.flot.symbol.js')}}"></script>
	<script>
	function renderPie(data)
	{
		var chartData = [];

		chartData.push(['Country', 'Requests']);

		$.each(data, function(index, value){
			console.log(value);
			chartData.push({label: value.label, data: value.value});
		});

		var options = {
			series: {
				pie: {
					offset: {
						left: 10
					},
					show: true
				}
			},
			grid: {
				hoverable: true,
			},
			tooltip: true,
			tooltipOpts: {
				content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
				shifts: {
					x: 20,
					y: 0
				},
				defaultTheme: false
			}
		};

		var chart = $.plot($("#plot1"), chartData, options);
		chart.draw();
	}
	$(document).ready(function(){
		

		Morris.Line({
			data: <?php echo json_encode($allData[0]); ?>, //put double exclamation marks
			element: 'chart1',
			xkey: 'date',
			ykeys: ['total'],
			resize: true,
			lineWidth: 2,
			labels: ['Pages Views'],
			lineColors: ['#1ab394'],
			pointSize:5,
			xLabels: "day"
		});

		renderPie(<?php echo json_encode($allData[1]); ?>); //put double exclamation marks
	});
	</script>
@endsection