<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
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
								<a href="#" class="btn btn-success" id="unduhExcel"><i class="ki-duo-tone fs-2x ki-file"></i>Unduh Data ISBN</a>
								<a href="tambah-isbn.php" class="btn btn-primary">Tambah Permohonan ISBN</a>
								<!--end::Add product-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Table-->
							<div class ="table-responsive">
							<table class="table table-striped table-bordered table-hover no-wrap fs-7 gy-5" id="example" style="width:100%">
								<thead>
									<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
										<th class="text-start min-w-60px pe-2">No</th>
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
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<!--script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<!--<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>-->
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
				RandomTitle(),
				populateKepengarangan(),
				Intl.DateTimeFormat('id', { month: 'short' }).format(new Date(getRandom(1,12).toString())) + " " + getRandom(2022,2024).toString(),
				'<select class="form-select fs-7 select-costum><option value"">--Pilih status--</option><option value="belum terbit">Belum Terbit</option><option value="terbit">Sudah Terbit</option><option value="batal">Batal Terbit</option></select>', 
				randomDate(new Date(2020, 0, 1), new Date(2022, 12, 31)),
				randomDate(new Date(2023, 0, 1), new Date(2024, 2, 20)),
				'<a class="badge badge-info h-30px m-1" onclick="cetakBarcode()">Barcode</a><a class="badge badge-primary h-30px m-1" onClick="cetakKDT()">KDT</a>',
				randomPenyerahan(),
				randomPenyerahanProv(),
			]);
		}
		return dataSetPop;
	};
	
	const dataSet = populateDataSet(getRandom(500,1000));

	var t = new DataTable('#example', {
		data: dataSet,
		scrollX: true,
		"searching": true,
		filter:true,
		fixedColumns: {
            start: 3,
            end: 0
        },
	});
	document.querySelector('[data-example-filter="search"]').addEventListener("keyup", (function(e) {
                t.search(e.target.value).draw()
            }))
	$('#unduhExcel').on('click', function(){
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
		
	})
	
</script>

</html>