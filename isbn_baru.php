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
					<!--begin::Row-->
					<div class="row g-5 gx-xl-10">

					</div>
					<!--end::Row-->

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
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
<script>

	var chart_isbn_month = function () {
		var e = document.getElementById("chart_isbn_month");

		if (e) {
			var t, a = function () {
				var dataChart = generateData();
				(t = am5.Root.new(e)).setThemes([am5themes_Animated.new(t)]);
				var a = t.container.children.push(am5xy.XYChart.new(t, {
					panX: !1,
					panY: !1,
					layout: t.verticalLayout
				})),
					l = (a.get("colors"), dataChart),
					r = a.xAxes.push(am5xy.CategoryAxis.new(t, {
						categoryField: "month",
						renderer: am5xy.AxisRendererX.new(t, {
							minGridDistance: 30
						}),
						bullet: function (e, t, a) {
							return am5xy.AxisBullet.new(e, {
								location: .5,
								sprite: am5.Picture.new(e, {
									width: 24,
									height: 24,
									centerY: am5.p50,
									centerX: am5.p50,
								})
							})
						}
					}));
				r.get("renderer").labels.template.setAll({
					paddingTop: 20,
					fontWeight: "400",
					fontSize: 10,
					fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-500"))
				}), r.get("renderer").grid.template.setAll({
					disabled: !0,
					strokeOpacity: 0
				}), r.data.setAll(l);
				var o = a.yAxes.push(am5xy.ValueAxis.new(t, {
					renderer: am5xy.AxisRendererY.new(t, {})
				}));
				o.get("renderer").grid.template.setAll({
					stroke: am5.color(KTUtil.getCssVariableValue("--bs-gray-300")),
					strokeWidth: 1,
					strokeOpacity: 1,
					strokeDasharray: [3]
				}), o.get("renderer").labels.template.setAll({
					fontWeight: "400",
					fontSize: 10,
					fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-500"))
				});
				var i = a.series.push(am5xy.ColumnSeries.new(t, {
					xAxis: r,
					yAxis: o,
					valueYField: "counts",
					categoryXField: "month"
				}));
				i.columns.template.setAll({
					tooltipText: "{categoryX}: {valueY}",
					tooltipY: 0,
					strokeOpacity: 0,
					templateField: "columnSettings"
				}), i.columns.template.setAll({
					strokeOpacity: 0,
					cornerRadiusBR: 0,
					cornerRadiusTR: 6,
					cornerRadiusBL: 0,
					cornerRadiusTL: 6
				}), i.data.setAll(l), i.appear(), a.appear(1e3, 100)
			};
			am5.ready((function () {
				a()
			})), KTThemeMode.on("kt.thememode.change", (function () {
				t.dispose(), a()
			}))
		}
	}
	chart_isbn_month();

	var getRandom = function (min, max) {
		return Math.floor(Math.random() * (max - min) + min);
	};
	var changeChart = function (year) {
		$('#title_chart').html("Data ISBN " + year + " Penerbit Gramedia");
		var dataChart = generateData();
		am5.array.each(am5.registry.rootElements,
			function (root) {
				if (root.dom.id == "chart_isbn_month") {
					root.dispose();
					chart_isbn_month()
				}
			}
		);

	};
	var generateData = function () {
		var dataChart = [];
		for (var d = 0; d < 12; d++) {
			var d_ = d + 1;
			dataChart = dataChart.concat({
				month: Intl.DateTimeFormat('en', { month: 'short' }).format(new Date(d_.toString())),
				counts: getRandom(0, 20),
				columnSettings: {
					fill: am5.color(KTUtil.getCssVariableValue("--bs-primary"))
				}
			});
		}
		return dataChart;
	};
	var includeHTML = function () {
		var z, i, elmnt, file, xhttp;
		/*loop through a collection of all HTML elements:*/
		z = document.getElementsByTagName("*");
		for (i = 0; i < z.length; i++) {
			elmnt = z[i];
			/*search for elements with a certain attribute:*/
			file = elmnt.getAttribute("include-html");
			if (file) {
				/*make an HTTP request using the attribute value as the file name:*/
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4) {
						if (this.status == 200) { elmnt.innerHTML = this.responseText; }
						if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
						/*remove the attribute, and call this function once more:*/
						elmnt.removeAttribute("include-html");
						includeHTML();
					}
				}
				xhttp.open("GET", file, true);
				xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
				xhttp.send();
				/*exit the function:*/
				return;
			}
		}
	};
	includeHTML();
</script>

</html>