@extends('backend.layouts.master')

@section('title')
	<title>Konfirmasi Zakat | Radio Reksa Purwakarta</title>
@stop


@section('page-header')
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Radio Reksa Purwakarta</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-component">
			<ul class="breadcrumb">
				<li class=""><a href="{{URL::to('/dashboard')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
				<li class="active">Konfirmasi Zakat</li>
			</ul>
		</div>
	</div>
@stop


@section('content-area')
	<div class="content">

		<!-- STATISTICS -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
					<div class="panel panel-flat">
            <div id="data-loader">
              <center>
                <img src="{{asset('images/logo/loading-bl-blue.gif')}}">
              </center>
            </div>
            <div id="data" style="padding:0 15px"></div>
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
<script>
$(document).ready(function(){
  // alert(APP_URL);
	var pesan='{{(session('pesan') ? session('pesan') : '' )}}';
	if(pesan!='')
	{
		new PNotify({
				title: 'Informasi',
				text: pesan,
				addclass: 'alert bg-success alert-styled-right',
				type: 'success'
		});
	}
  loadData(-1);
});
function loadData(id)
{
	$('div#data-loader').show();
  $('div#data').load(APP_URL+'/konfirmasizakat-data/'+id,function(){
    $('div#data-loader').hide();
    $('table#data-berita').DataTable({
			autoWidth: false,
			dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
			language: {
					search: '<span>Cari Kategori:</span> _INPUT_',
					searchPlaceholder: 'Ketik Keyword...',
					lengthMenu: '<span>Tampilkan:</span> _MENU_',
					paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
			},
		});
		$(".switch").bootstrapSwitch();
		$('.switch').on('switchChange.bootstrapSwitch', function (event, state) {
			// alert($(this).val());
			if(state)
				var st=1;
			else {
				var st=0;
			}
			var iduser=$(this).val();
			$.ajax({
					dataType: 'json',
					type:'POST',
					url: APP_URL+'/konfirmasizakat-status/'+iduser,
					data:{validasi : st},
					success : function(data){

					}
			}).done(function(data){
					// getPageData();
					var txt = "Status Konfirmasi Zakat Berhasil Di Edit";
					$('#modal-confirm').modal('hide');
							new PNotify({
									title: 'Berhasil',
									text: txt,
									addclass: 'alert bg-success alert-styled-right',
									type: 'success'
							});
							//loadData(-1);
					// alert('Data User Berhasil Di Tabah');
					// toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
			}).fail(function(){
				$('#modal-confirm').modal('hide');
				new PNotify({
						title: 'Informasi',
						text: 'Edit Status Konfirmasi Zakat Gagal',
						addclass: 'alert alert-warning alert-styled-right',
						type: 'error'
				});
			});
		});
  });
}
function hapus(id)
{
	$('div#modal-hapus').modal('show');
	$('#hapusbutton').click(function(){
		// alert(id);
		$.ajax({
        url: APP_URL+'/konfirmasizakat/'+id,
				type : 'delete'
    }).done(function(data){
        // getPageData();
        $('#modal-hapus').modal('hide');
				    new PNotify({
		            title: 'Berhasil',
		            text: 'Data Konfirmasi Zakat Berhasil Di Hapus',
		            addclass: 'alert bg-success alert-styled-right',
		            type: 'success'
		        });
						loadData(-1);
		    // alert('Category Berhasil Di Tabah');
        // toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
    }).fail(function(){
			$('#modal-hapus').modal('hide');
			new PNotify({
					title: 'Informasi',
					text: 'Hapus Data Konfirmasi Zakat Gagal',
					addclass: 'alert alert-warning alert-styled-right',
					type: 'error'
			});
		});
	});
}
</script>
@endsection
{{-- <ul class="fab-menu fab-menu-fixed fab-menu-bottom-right" data-fab-toggle="hover">
    <li>
      <a class="fab-menu-btn btn bg-teal-400 btn-float btn-rounded btn-icon">
        <i class="fab-icon-open icon-paragraph-justify3"></i>
        <i class="fab-icon-close icon-cross2"></i>
      </a>
      <ul class="fab-menu-inner">
				<li>
					<div data-fab-label="Tambah Berita">
						<a href="{{URL::to('/konfirmasizakat-form/-1')}}" class="btn btn-default btn-rounded btn-icon btn-float">
							<i class=" icon-diff-added"></i>
						</a>
					</div>
				</li>
			</ul>
    </li>
  </ul> --}}
