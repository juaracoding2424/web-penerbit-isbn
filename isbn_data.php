<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<link rel="stylesheet" href="assets/css/swal-forms.css">
<style>
	.select-costum {
		padding-top: 3px;
		padding-bottom: 3px;
	}
	.ajax-loader {
		visibility: hidden;
		background-color: rgba(255,255,255,0.7);
		position: absolute;
		z-index: +100 !important;
		width: 100%;
		height:100%;
	}

	.ajax-loader img {
		position: relative;
		top:50%;
		left:50%;
	}
</style>
<!--begin::Wrapper-->
<div class="ajax-loader">
  <img src="assets/media/misc/Spinner@1x-1.0s-200px-200px.gif" class="img-responsive" />
</div>
<div class="app-wrapper d-flex" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<?php include 'sidebar.php';?>
	<!--end::Sidebar-->
	<!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content">
			<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
					<!--begin::Toolbar wrapper-->
					<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
								Data ISBN</h1>
							<!--end::Title-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">
									<a href="index.php" class="text-muted text-hover-primary">Home</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<span class="bullet bg-gray-500 w-5px h-2px"></span>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">Data ISBN</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<span class="bullet bg-gray-500 w-5px h-2px"></span>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">Sudah verifikasi</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->
					</div>
					<!--end::Toolbar wrapper-->
				</div>
				<!--end::Toolbar container-->
			</div>
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Products-->
					<div class="card card-flush">
						<!--begin::Card header-->
						<div class="card-header align-items-center py-5 gap-2 gap-md-5">
							<!--begin::Card title-->
							<div class="card-title">
								<!--begin::Search-->
								<div class="d-flex align-items-center position-relative my-1">
									<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
									<input type="text" data-example-filter="search" class="form-control form-control-solid w-400px ps-12" 
									placeholder="Search Judul, ISBN, Pengarang, etc" />
								</div>
												<!--end::Search-->
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
								<!--begin::Add product-->
								<span id="unduhExcel"></span>
								<a href="tambah_isbn.php" class="btn btn-primary">Tambah Permohonan ISBN</a>
								<!--end::Add product-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Table-->
							<div class ="table-responsive">
							<table class="table table-row-dashed table-hover no-wrap fs-8 gy-5" id="example" style="width:100%">
								<thead>
									<tr class="text-start text-gray-500 fw-bold fs-8 text-uppercase gs-0">
										<th class="text-start min-w-60px pe-2">ID</th>
										<th class="min-w-100px">ISBN</th>
										<th class="min-w-200px">Judul</th>
										<th class="min-w-200px">Kepengarangan</th>
										<th class="min-w-200px">Bulan/Tahun Terbit</th>
										<th class="min-w-200px">Status Penerbitan</th>
										<th class="min-w-200px">Tanggal Permohonan</th>
										<th class="min-w-200px">Tanggal Verifikasi</th>
										<th class="text-inline min-w-150px">Actions</th>
										<th class="min-w-200px">Penyerahan Perpusnas</th>
										<th class="min-w-200px">Penyerahan Provinsi</th>
										
									</tr>
								</thead>

							</table>
							</div>
							<!--end::Table-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Products-->
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
		<!--begin::Footer-->
		<div id="kt_app_footer" class="app-footer">
			<!--begin::Footer container-->
			<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
				<!--begin::Copyright-->
				<div class="text-gray-900 order-2 order-md-1">
					<span class="text-muted fw-semibold me-1">2024&copy;</span>
					<a href="https://perpusnas.go.id" target="_blank"
						class="text-gray-800 text-hover-primary">Perpustakaan Nasional RI</a>
				</div>
				<!--end::Copyright-->
				<!--begin::Menu-->
				<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
					<li class="menu-item">
						<a href="faq.php" target="_blank" class="menu-link px-2">FAQ</a>
					</li>
					<li class="menu-item">
						<a href="template.php" target="_blank" class="menu-link px-2">Template Surat</a>
					</li>
					<li class="menu-item">
						<a href="berita.php" target="_blank" class="menu-link px-2">Berita</a>
					</li>
				</ul>
				<!--end::Menu-->
			</div>
			<!--end::Footer container-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end:::Main-->
	<?php include 'sidebar_aside.php';?>
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->
<?php include 'log_aktifitas.php';?>
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
<script src="assets/js/swal-forms.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/randomtitle.js"></script>
<script src="assets/js/custom/randomname.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
<script>
	var generateISBN13 = function() {
		// Generate the first 9 digits of the ISBN randomly.
		var digits = Array(9).fill(0).map(function () {
			return Math.floor(Math.random() * 10);
		});

		// Calculate the checksum for the ISBN.
		var checksum = 0;
		for (var i = 0; i < 9; i++) {
			checksum += digits[i] * (10 - i);
		}
		checksum = 10 - (checksum % 10);

		// Add the checksum to the end of the digits array.
		digits.push(checksum);

		// Return the ISBN as a string.
		return digits.join("");
	};
	var getRandom = function (min, max) {
		return Math.floor(Math.random() * (max - min) + min);
	};
	var randomDate = function(start, end) {
		return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime())).toLocaleString();
	}
	var images = [
		'https://m.media-amazon.com/images/I/81jRqrKKObL._AC_UL800_FMwebp_QL65_.jpg',
		'https://m.media-amazon.com/images/I/81JgX8VgZiL._AC_UL800_FMwebp_QL65_.jpg',
		'https://m.media-amazon.com/images/I/71CBWHK035L._AC_UL800_FMwebp_QL65_.jpg',
		'https://m.media-amazon.com/images/I/91pXKpUfGgL._AC_UL800_FMwebp_QL65_.jpg',
		'https://m.media-amazon.com/images/I/41On-kU2qfL._AC_SF480,480_.jpg',
		'https://m.media-amazon.com/images/I/51J+Tc3E1eL._AC_SF480,480_.jpg',
		'https://m.media-amazon.com/images/I/51XBtKdStML._AC_SF480,480_.jpg',
		'https://m.media-amazon.com/images/I/41CSLTOp7LL._AC_SF480,480_.jpg',
		'https://m.media-amazon.com/images/I/51l-BqdoMsL._UX300undefined_.jpg',
		'https://m.media-amazon.com/images/I/510GvscKODL._AC_SF480,480_.jpg',
		'https://m.media-amazon.com/images/I/41PUsvw0kuL._AC_SF480,480_.jpg'
	];
	var cetakBarcode = function(){
		Swal.fire({
                    text: "Kami sudah mengirimkan barcode melalui email Anda!",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                    	confirmButton: "btn fw-bold btn-primary"
                        }
                })
	};
	var cetakKDT = function(){
		Swal.fire({
                    text: "Kami sudah mengirimkan KDT melalui email Anda!",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                    	confirmButton: "btn fw-bold btn-primary"
                        }
                })
	}
	var randomPenyerahan = function(){
		const penyerahan = getRandom(0,2);
		if(penyerahan == 0){
			return '<a class="badge badge-danger wrap" href="https://edeposit.perpusnas.go.id/login" target="_blank">Serahkan ke Perpusnas</a>';
		} else {
			return randomDate(new Date(2024, 5, 1), new Date())
		}
	}
	var randomPenyerahanProv = function(){
		const penyerahan = getRandom(0,2);
		if(penyerahan == 0){
			return '<a class="badge badge-danger wrap" href="https://edeposit.perpusnas.go.id/login" target="_blank">Serahkan ke Provinsi</a>';
		} else {
			return randomDate(new Date(2024, 5, 1), new Date())
		}
	}
	var rolePengarang = [
		'penulis', 'penyunting', 'penyusun', 'ilustrator', 'alih bahasa', 'editor'
	]
	var populateKepengarangan = function(){
		var jmlPengarang = getRandom(1,7);
		var pengarang = '';
		for( var i = 0; i < jmlPengarang; i++){
			const name = RandomName();
			pengarang += rolePengarang[getRandom(0,6)] + ", " + name + "; ";
		}
		return pengarang.slice(0, -2);
	}
	var populateDataSet = function(numb){
		var dataSetPop = [];
		for( var i = 1; i<=numb; i++ ){
			dataSetPop.push([
				i.toString(),
				generateISBN13(),
				'<div class="d-flex align-items-center"><img src='+images[getRandom(0,11)]+' class=" symbol h-50px"></img><span class="ms-5"> ' + RandomTitle() + '</span></div>',
				populateKepengarangan(),
				Intl.DateTimeFormat('id', { month: 'short' }).format(new Date(getRandom(1,12).toString())) + " " + getRandom(2022,2024).toString(),
				'<select class="form-select fs-7 select-costum" id="changeStatus_'+(i-1)+'" onChange="changeStatus('+(i-1)+')"><option value"">--Pilih status--</option><option value="belum terbit">Belum Terbit</option><option value="terbit">Sudah Terbit</option><option value="batal">Batal Terbit</option></select>', 
				randomDate(new Date(2020, 0, 1), new Date(2022, 12, 31)),
				randomDate(new Date(2023, 0, 1), new Date(2024, 2, 20)),
				'<a class="badge badge-info h-30px m-1" onclick="cetakBarcode()">Barcode</a><a class="badge badge-primary h-30px m-1" onClick="cetakKDT()">KDT</a>',
				randomPenyerahan(),
				randomPenyerahanProv(),
			]);
		}
		return dataSetPop;
	}	
	var extractColumn = function(arr, column) {
		return arr.map(x => x[column]);
	}

	var changeStatus = function(selectId){
		if($('#changeStatus_' + selectId).val() == 'batal'){
			let arrNomor = extractColumn(dataSet, 0);
			let position = arrNomor.indexOf((selectId+1).toString());
			r = dataSet[position][2];
			r = r.replace("d-flex ", "");
			Swal.fire({
                    html: "Anda yakin akan membatalkan ISBN berikut? "+r,
					icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Ya, batalkan!",
                    cancelButtonText: "Tidak",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
				}).then(function(e){
					if(e.isConfirmed == true) {
						Swal.fire({
							title: 'Konfirmasi alasan pembatalan',
							html: '<textarea id="alasan" cols="40" class="swal2-input" placeholder="Masukan alasan pembatalan ISBN" style="height:150px"></textarea>',
							width:600,
							showCancelButton: true,
							confirmButtonColor: '#DD6B55',
							confirmButtonText: 'Simpan Alasan Pembatalan ISBN',
							preConfirm: () => {
								const alasan = $('#alasan').val();
								if (alasan.length < 150) {
									Swal.showValidationMessage('Alasan pembatalan ISBN harus lebih dari 150 karakter!');
								}
								return { alasan }
							},
						}).then(
							function(e){
								if(e.isConfirmed == true){
									dataSet[selectId][5] = '<span class="badge badge-danger fs-5" tooltip="true" title="'+$('#alasan').val()+'">ISBN DIBATALKAN</span>';
									t.destroy();
									loadDataTable();
									Swal.fire({
										html: r + " <h1>TELAH DIBATALKAN</h1> <br/> <b>Alasan</b>: <span class='text-grey-400'>" + $('#alasan').val() + "</span>",
										width: 600,
										icon: "success",
										buttonsStyling: !1,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn fw-bold btn-primary"
										}
									});
								} else {
									Swal.fire({
										html: r + " tidak jadi dibatalkan.",
										icon: "error",
										buttonsStyling: !1,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn fw-bold btn-primary"
										}
									});
								}
							}
						)
					} else {
						Swal.fire({
                            html: r + " tidak jadi dibatalkan.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        });
					}
				});
		} else {
			Swal.fire({
				html: "Berhasil mengubah status penerbitan",
				icon: "success",
				timer: 1000,
				customClass: {
					confirmButton: "btn fw-bold btn-primary"
				},
				showCancelButton: false,
				showConfirmButton: false
			})	
		}		
	};
	
	const dataSet = populateDataSet(getRandom(500,1000));
	var t;
	var loadDataTable = function(){
		t = new DataTable('#example', {
			data: dataSet,
			scrollX: true,
			"searching": true,
			filter:true,
			fixedColumns: {
				start: 3,
				end: 0
			},
		});
	};
	loadDataTable();
	document.querySelector('[data-example-filter="search"]').addEventListener("keyup", (function(e) {
                t.search(e.target.value).draw()
            }));
	/*$('#unduhExcel').on('click', function(){
		$('.ajax-loader').css('visibility', 'visible');
		t.page.len( -1 ).draw();
		var myInt = Number(new Date());
		filename = "data_isbn_" + myInt.toString();
		var a = document.createElement('a');
		var data_type = 'data:application/vnd.ms-excel';
		a.href = data_type + ', ' + encodeURIComponent($('#example').parent().html());
		a.download = filename + '.xls';
		setTimeout(function(){
			a.click();
			t.page.len(10).draw();
			$('.ajax-loader').css('visibility', 'hidden');
		}, 2000)
	});*/
	var exportButtons = () => {
		var myInt = Number(new Date()).toString();
        const documentTitle = 'ISBN Report ' + myInt;
        var buttons = new $.fn.dataTable.Buttons(t, {
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: documentTitle,
					text:'<i class="ki-outline ki-exit-up fs-2"></i>Export Data',
                },
            ]
        }).container().appendTo($('#unduhExcel'));
		const target = document.querySelector('#unduhExcel');
        target.click();
    }
	exportButtons();

</script>

</html>