<?php include 'header.php';?>
<!--begin::Wrapper-->
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
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Products-->
					<div class="card card-flush">
						<!--begin::Card header-->
						<div class="card-header align-items-center py-5 gap-2 gap-md-5">
							<!--begin::Card title-->
							<div class="card-title">
								Data ISBN Penerbit Gramedia Pustaka Utama
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
								<!--begin::Add product-->
								<a href="tambah-isbn.php" class="btn btn-primary">Tambah Permohonan ISBN</a>
								<!--end::Add product-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Table-->
							<table class="table align-middle table-row-dashed fs-6 gy-5" id="example">
								<thead>
									<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
										<th class="text-start w-10px pe-2">
											<div
												class="form-check form-check-sm form-check-custom form-check-solid me-3">
												<input class="form-check-input" type="checkbox" data-kt-check="true"
													data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
													value="1" />
											</div>
										</th>
										<th class="min-w-100px">ISBN</th>
										<th class="min-w-175px">Judul</th>
										<th class="text-end min-w-70px">Pengarang</th>
										<th class="text-end min-w-100px">Bulan/Tahun Terbit</th>
										<th class="text-end min-w-100px">Date Added</th>
										<th class="text-end min-w-100px">Date Modified</th>
										<th class="text-end min-w-100px">Actions</th>
									</tr>
								</thead>

							</table>
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
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
<script>
	const dataSet = [
		['1', '978-2356-709-23-1', 'Gagal Jantung: Perawatan Mandiri dan Multidisiplin', 'Edin Nata Rumayan', 'Mei, 2024', '2024/02/25', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['2', '978-2356-65693-X', 'Mengenal Teknologi: Teknologi Informasi', 'Bonita Pickard', 'Januari, 2023', '2023/01/05', '2024/02/07', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['3', '978-4456-709-70-8', 'Sejarah Perkembangan Teknologi Informasi dan Komunikasi', 'John Francisco', 'Februari, 2023', '2023/01/12', '2024/04/27', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['4', '978-5656-710-52-5', 'Prinsip Sukses Orang Tionghoa', 'Doe Doe', 'April, 2023', '2023/03/29', '2023/03/30', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['5', '978-2466-524-98-7', 'Pengantar Ilmu Pertanian Berkelanjutan', 'Rahmawati Sukanti', 'Maret, 2024', '2008/11/28', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['6', '978-1356-709-23-1', 'Memahami Interpretasi Pemeriksaan Laboratorium Penyakit Ginjal Kronis', 'Edin Nata Rumayan', 'Mei, 2024', '2024/02/25', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['7', '978-2356-65693-X', 'Ayo Mengenal Indonesia : Kalimantan 2', 'Bonita Pickard', 'Januari, 2023', '2023/01/05', '2024/02/07', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['8', '978-23567-09-70-8', 'Les Musik untuk Anak Anda', 'John Francisco', 'Februari, 2023', '2023/01/12', '2024/04/27', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['9', '978-235-671-052-5', 'Masyarakat dan hukum adat Batak Toba', 'Doe Doe', 'April, 2023', '2023/03/29', '2023/08/30', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['10', '978-2466-524-98-7', 'Orang Sakai di Riau: masyarakat terasing dalam masyarakat Indonesia', 'Rahmawati Sukanti', 'Maret, 2024', '2008/11/28', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['11', '978-5656-710-52-5', 'Seksualitas di Indonesia: Politik Seksual, Kesehatan, Keragaman, dan Representasi', 'Doe Doe', 'April, 2023', '2023/03/29', '2023/03/30', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['12', '978-2466-524-98-7', 'Dari Diabetes Menuju Ginjal', 'Rahmawati Sukanti', 'Maret, 2024', '2008/11/28', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['13', '978-1356-709-23-1', 'Penataan demokrasi dan pemilu di Indonesia pasca-reformasi', 'M. Imam Nasef', 'Mei, 2024', '2024/02/25', '2024/04/26', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['14', '978-2356-65693-X', 'Terapi musik: teori dan aplikasi', 'Bonita Pickard', 'Januari, 2023', '2023/01/05', '2024/02/07', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
		['15', '978-23567-09-70-8', 'Soekarno & Tan Malaka: Negarawan Sejati yang Pernah Diasingkan', 'John Francisco', 'Februari, 2023', '2023/01/12', '2024/04/27', '<a class="badge badge-success">View</a> <a class="badge badge-danger">Delete</a>'],
	];

	/*dataSet.forEach(r => {
		var div1 = document.createElement('div');
		div1.innerHTML = r[1];
		r[1] = div1;
	 
		var div3 = document.createElement('div');
		div3.innerHTML = r[3];
		r[3] = div3;
	})*/

	new DataTable('#example', {
		data: dataSet
	});
</script>

</html>