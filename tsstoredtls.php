<?php
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>qobon-details</title>
	<link rel="icon" href="./tsimg/qobon-logo-mob.svg" type="image/png">
	<link rel="stylesheet" href="./tscss/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="./tscss/all.min.css">
	<link rel="stylesheet" href="./tscss/owl.carousel.min.css">
	<link rel="stylesheet" href="./tscss/owl.theme.default.min.css">
	<link rel="stylesheet" href="./tscss/tsfldr/tscss0.min.css">
	<link rel="stylesheet" href="./tscss/tsfldr/tscss1.min.css">
	<link rel="stylesheet" href="./tscss/tsfldr/tscss2.min.css">
	<link rel="stylesheet" href="./tscss/tsfldr/tscss3.min.css">

	<style>
		.Qobn_bg {
			background-image: url('tsimg/qobon-home-qbncard-bg.svg') !important;

			max-height: 224.33px;
			aspect-ratio: 491.69/224.33;
		}


		.qbnCard_frst_prt {
			flex: 0 1 37.5% !important;
			/* (184.59 / 491.69) * 100 */


		}

		.qbnCard_scnd_prt {
			flex: 0 1 62.4% !important;
			/* (307.1 / 491.69) * 100 */

		}
	</style>
</head>

<body class="tsstoredtls TSWView tsrtl  position-relative">

	<div id="tssection-tsajxbg" class=""></div>
	<div id="tssection-tssection-tspgtop"></div>


	<!-- ****************qobon Modal************ -->
	<div class="modal fade p-0" id="staticBackdrop" aria-labelledby="exampleModalToggleLabel" tabindex="-1"
		aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<!-- all styles in modal -->
				<style>
					.modal-content {
						background-image: url(./tsimg/qobon-modal-box.png);
						max-height: 728.57px;
						aspect-ratio: 995.71/728.57;
					}
				</style>
				<!-- script for share icone -->

				<div class="modal-header p-0">
					<!-- exit-icon Here  -->
					<div class="d-flex justify-content-between px-md-5 px-3 pt-md-5 pt-2   w-100 h-100">
						<div></div>
						<i class="tsc-cursorpointer modalExtIcn fas fa-xmark  fa-2x" data-bs-dismiss="modal"
							aria-label="Close"></i>
					</div>
				</div>
				<div class="modal-body p-0 px-md-5 px-4">
					<!-- first part >>> logo and discount -->
					<div class="row  px-2">
						<div class="col-7 p-0 ">
							<div class="row ">
								<div class="col-4">
									<div class="bdg_container  px-md-3 px-1 py-md-3 py-1">
										<img class="col-md-11 col-10 " src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
									</div>
								</div>
								<div class="col-8">
									<div
										class="d-flex flex-column justify-content-center align-items-start gap-md-3 gap-0 ">
										<span class="TSFntBold tsfs-34 tscl-0 ">تيمو</span>
										<p class="col-md-9 col-12 TSFntLight tsfs-15 tscl-0    ">
											متجر إلكتروني عالمي يقدم تشكيلة واسعة من المنتجات بأسعار منافسة
										</p>
									</div>
								</div>

							</div>
						</div>
						<div class="qbnCard_frst_prt p-0">
							<div class="d-flex align-items-center w-100 h-100 ">
								<div
									class="discnt_sec w-100 h-auto py-md-3 py-1  d-flex justify-content-center align-items-center gap-3">
									<div
										class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center   py-md-3 py-2 px-md-3 px-2 ">
										<div class="d-flex justify-content-between gap-2 align-items-center w-100  ">
											<img class="col-5" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
											<span class="TSFntRegular tsfs-21 tscl-0 text-nowrap ">خصم</span>
										</div>
									</div>
									<span class="TSFntBold tsfs-50 tscl-0 text-nowrap">50 ريال</span>
								</div>
							</div>

						</div>
					</div>
					<!-- second part all 3 texts -->
					<div class="d-flex flex-column align-items-start gap-md-3 gap-sm-2 gap-2 px-5 mt-md-4 mt-1">
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">التفاصيل</span>
							<span class="TSFntRegular tsfs-20 tscl-0">كاش باك 80% بحد اقصى 50 ريال - باستثناء العروض -
								(استخدام مره واحده)</span>
						</div>
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">آخر استخدام للكوبون</span>
							<span class="TSFntSemiBold tsfs-20 tscl-text4">منذ ساعة تقريبا</span>
						</div>
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">عدد الاستخدامات</span>
							<span class="TSFntSemiBold tsfs-20 tscl-text4">21039</span>
						</div>
						<hr class="w-100 tsbg-bg4 mt-md-4 mt-1">
					</div>
					<!-- third part all 9 icons -->

					<div class="row  row-cols-md-9 mt-md-5 mt-0 px-md-4 px-2 gy-md-2 gy-1 gx-md-2 gx-3">
						<div class="col p-md-2 p-1">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-telegram.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-whatsapp.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-x.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-pinterest.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-instagram.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-facebook.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qonon-modal-box-share-icon.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center">
								<a href="" class="d-flex justify-content-center tsc-cursorpointer tsc-tr06s tsc-tr-top">
									<img class=" w-100" src="./tsimg/qonon-modal-box-like-icon.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1">
							<div class=" d-flex justify-content-center tsc-tr06s tsc-tr-down">
								<a href="" class="d-flex justify-content-center tsc-cursorpointer">
									<img class="w-100" src="./tsimg/qonon-modal-box-dislike-icon.svg" alt="">
								</a>
							</div>

						</div>
					</div>


					<div class=" row  w-100 mt-md-5  mt-1">
						<div
							class=" d-flex justify-content-center  align-items-center py-md-3 py-2 px-md-3 px-1 bordr60 tsbg-bg5 position-relative ms-3 ms-3  ">
							<div class="d-flex justify-content-around gap-2 align-items-center w-100  ">
								<span class="TSFntBold tsfs-50 tscl-0 ">T0SM</span>
								<span></span>
							</div>
							<a href=""
								class="d-flex justify-content-center align-items-center position-absolute end-0 h-100 w-50 bordr60 tsbg-bg1 tsc-cursorpointer">
								<span class="TSFntRegular tsfs-34 tscl-F tsc-tr06s tsc-scale">نسخ الكوبون</span>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>




	<!-- Languages offcanvas -->
	<div class="offcanvas offcanvas-bottom " tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header pt-5">
		</div>
		<div class="offcanvas-body position-relative h-100 p-0">
	
			
				<div class="bg-container  d-flex justify-content-between pt-5 px-5">
				<ul class="d-flex flex-column gap-4">
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">السعوديه
								<img class="ms-1" src="./tsimg/qobon-sa-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الإمارات
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">البحرين
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">قطر
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">عمان
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الكويت
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">مصر
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الأردن
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">أمريكا
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">بريطانيا
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">كندا
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					<li><a  href="#"> <span class="TSFntMedium tsfs-18 tscl-0">ألمانيا
								<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>

				</ul>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				
			

		</div>
		
	</div>

	<!-- Header -->
	<header id="tssection-tstophdr" class="h-auto  ts-tophdr ">
		<div class="hdr_super_container h-100 w-100">
			<div class="notCollps-menu mt-3 pt-3 container d-flex w-100  px-md-0 px-4">
				<!-- **** Logo here *****-->
				<a href="#" class=" border-0">
					<!-- Embed SVG with <object> to use it inside javascript -->
					<img class="tsc-logo-h d-md-block d-none" src="./tsimg/qobon-logo.svg" alt="">
					<img class="tsc-logo-h d-md-none d-block" src="./tsimg/qobon-logo-mob.svg" alt="">
				</a>

				<!-- ****** Search input ****** -->
				<div class="position-relative w-100 h-auto hdr_search flex-grow-1 mx-md-4 mx-2 ">
					<input class=" w-100 py-md-3 py-3" type="text" placeholder="ابحث عن متجر ">
					<a href=""
						class="search_btn d-flex justify-content-center align-items-center position-absolute top-50 end-0  tsc-cursorpointer bordr90 tsbg-main border-0 px-md-2 px-2 py-md-2  py-2">
						<img class="qobon-searchIcon p-2" src="./tsimg/qobon-search-icon.svg" alt="">
					</a>
				</div>

				<!-- ***** English button***** -->
				<a href="" class=" hdr_btn1   py-3 px-md-4 px-2  tsc-cursorpointer tsbg-0 h-100">
					<div class="px-2 d-flex align-items-center gap-2 w-100">
						<img class="hdr_flag" src="./tsimg/qobon-gb-icon.png" alt="">
						<span class="d-md-block d-none TSFntMedium tsfs-18 tscl-F">الانجليزية</span>
					</div>

				</a>


				<!-- ***** Language selection dropdown***** -->
				<div class="dropdown ms-3 d-md-block d-none">
					<div class="hdr_btn1 d-flex align-items-center py-3 px-md-4 px-3 gap-1 dropdown-toggle tsc-cursorpointer " id="dropdownMenuButton1"
						data-bs-toggle="dropdown" aria-expanded="false">

						<img class="hdr_flag" src="./tsimg/qobon-sa-icon.png" alt="">
						<span class="TSFntMedium tsfs-18 tscl-F">السعوديه</span>
						<img class="hdr_arrow_down ms-1" src="./tsimg/qobon-header-arrowdown.svg" alt="">

					</div>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">السعوديه
									<img class="ms-1" src="./tsimg/qobon-sa-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الإمارات
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">البحرين
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">قطر
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">عمان
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الكويت
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">مصر
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">الأردن
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">أمريكا
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">بريطانيا
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">كندا
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
						<li><a class="dropdown-item" href="#"> <span class="TSFntMedium tsfs-18 tscl-0">ألمانيا
									<img class="ms-1" src="./tsimg/qobon-gb-icon.png" alt=""> </span></a></li>
					</ul>
				</div>

				<!-- *****Menu toggeler button******* -->
				<button class="togglerMnubtn d-md-none d-block navbar-toggler  border-0 p-0 ms-2" type="button"
					data-bs-toggle="collapse" data-bs-target="#TopMenuModal" aria-controls="TopMenuModal"
					aria-expanded="false" aria-label="Toggle navigation">
					<img class="togglerMnuIcn" src="./tsimg/qobon-menu-hamborger.svg" alt="">
				</button>
			</div>
			<!--************ Menu ***************-->

			<div class="   topMenu w-100 tsbg-F mt-md-3 mt-0 z-2 " id="topMenu">
				<div class=" nav_cntnr w-100 h-auto">
					<nav class=" px-md-0 px-4 container main-nav w-100 ">
						<div class="navbar  navbar-expand-md ">
							<div id="TopMenuModal" class=" tsc-top-mnu  collapse navbar-collapse ">
								<!--******** logo and exit icon in mobile ******** -->
								<div class="d-md-none d-block d-flex justify-content-between align align-items-center">
									<img class="tsc-logo-h2" src="./tsimg/qobon-logo.svg" alt="">
									<i class="exit-icon fas fa-xmark exit-icon fa-2x "></i>
								</div>
								<!--********* menu **********  -->
								<ul
									class="tsc-mnu-blk menu-header-menu-ar navbar-nav navbar-nav m-md-auto m-0 d-flex gap-md-5 gap-1 mt-md-0 mt-5">
									<li class=" nav-item  py-md-3 py-1"><a
											class=" tsc-mnu-lnk TSFntRegular tsfs-18 tscl-hdr-mnulnk nav-link "
											href="./index.php">الرئيسية</a></li>
									<li class=" nav-item  py-md-3 py-1"><a
											class="tsc-mnu-lnk TSFntRegular tsfs-18 tscl-hdr-mnulnk nav-link"
											href="./tsstores.php">
											المتاجر</a></li>
									<li class=" nav-item  py-md-3 py-1"><a
											class="tsc-mnu-lnk TSFntRegular tsfs-18 tscl-hdr-mnulnk nav-link"
											href="./tsaboutus.php">
											عن قوبون</a></li>
									<li class=" nav-item  py-md-3 py-1"><a
											class="tsc-mnu-lnk TSFntRegular tsfs-18 tscl-hdr-mnulnk nav-link"
											href="./tsblog.php">المدونه</a>
									</li>
									<li class=" nav-item  py-md-3 py-1"><a
											class="tsc-mnu-lnk TSFntRegular tsfs-18 tscl-hdr-mnulnk nav-link"
											href="./tsfaqs.php">الاسئلة الشائعه</a>
									</li>

								</ul>
								<hr class="d-md-none d-block tsbg-bg3">
								<div class="d-md-none d-block d-flex justify-content-md-center justify-content-start align-items-end gap-4 mt-md-0 mt-4 mb-md-0 mb-2 pb-md-0 pb-4">
									<ul class="footer-menu d-flex flex-column gap-2">
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#"> العروض
												الحالية</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">الشروط
												والاحكام</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">سياسة
												الخصوصيه</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">اتصل
												بنا</a></li>
									</ul>
									<ul class="footer-menu d-flex flex-column gap-2">
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#"> العروض
												الحالية</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">الشروط
												والاحكام</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">سياسة
												الخصوصيه</a></li>
										<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
												href="#">اتصل
												بنا</a></li>
									</ul>
								</div>
								<div class="d-md-none d-block  d-flex gap-4 ">
									<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
										<i class="fab fa-facebook fa-2x tscl-0"></i>
									</a>
									<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
										<i class="fab fa-snapchat fa-2x tscl-0"></i>
									</a>
									<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
										<i class="fab fa-tiktok fa-2x tscl-0"></i>
									</a>
									<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
										<i class="fab fa-x-twitter fa-2x tscl-0"></i>
									</a>
									<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
										<i class="fab fa-instagram fa-2x tscl-0"></i>
									</a>

								</div>
								<div class="lang_btns d-flex gap-2 d-md-none d-block mt-4">
									<!-- ***** English button***** -->
									<a href="" class=" hdr_btn1   py-3 px-md-4 px-2  tsc-cursorpointer tsbg-0 h-100">
										<div class="px-2 d-flex align-items-center gap-2 w-100">
											<img class="hdr_flag" src="./tsimg/qobon-gb-icon.png" alt="">
											<span class=" TSFntMedium tsfs-18 tscl-F">الانجليزية</span>
										</div>

									</a>

									<!-- ***** Language selection dropdown***** -->
									<div class="dropdown ms-3 ">
										<div class="hdr_btn1 d-flex align-items-center py-3 px-md-4 px-3 gap-1 dropdown-toggle tsc-cursorpointer " data-bs-toggle="offcanvas"
											data-bs-target="#offcanvasBottom"
											aria-controls="offcanvasRight">

											<img class="hdr_flag" src="./tsimg/qobon-sa-icon.png" alt="">
											<span class="TSFntMedium tsfs-18 tscl-F">السعوديه</span>
											<img class="hdr_arrow_down ms-1" src="./tsimg/qobon-header-arrowdown.svg" alt="">

										</div>

									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>

			</div>


		</div>
	</header>

	<!-- Topbnr -->
	<br>
	<section id="tssection-tstopbnr" class="tsc-sec-tstopbnr tsbg-0 w-100 h-auto mt-5 py-md-5">
		<div class="container  py-md-4 px-md-0 px-4">
			<div class="row ">
				<div class="col-md-2 col-3 d-flex justify-content-start align-items-center p-0">
					<img class="col-9" src="./tsimg/qobon-qbndtls-temo.svg" alt="">
				</div>
				<div
					class="col-md-10 col-9 d-flex flex-column justify-content-center align-items-start p-0 py-md-0 py-3 gap-md-2 gap-0 ">
					<h1 class="tscl-text1">تيمو</h1>
					<p class="col-md-10 col-11 p1 tscl-F pe-md-5 pe-0 m-0  ">يقدم أحدث الملابس ومستلزمات المنزل والمزيد،
						مع مجموعة
						واسعة من الخيارات التي تناسب جميع الأذواق وتوفر جودة عالية بتصاميم عصرية تلبي احتياجات العائلة
						والمنزل.</p>
				</div>
			</div>
		</div>

	</section>
	<!-- all qobon-details codes  -->
	<section id="tssection-tsqbnslist" class="tsc-sec-tsqbnslist w-100 h-auto pt-md-5 pt-2 mt-md-3 mt-1">
		<div class="container  position-relative p-0 pt-2 px-md-0 px-4 ">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">كل أكواد تيمو</h3>
			</div>
		</div>
		<div class="container  position-relative p-0 pt-4  px-md-0 px-4 mt-md-5 mt-2">
			<div class="row row-cols-md-3 row-cols-1 pt-2 ">
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- pagination -->
			<div class="tspgngBlk text-center my-5 paginate">
				<nav>
					<ul id="tssection-ts_pagination" class="pagination d-flex w-100 h-auto justify-content-center align-items-center gap-2 mt-5" data-tsoutid="tssection-tspstslist_ajx" data-tscurpg="1">
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  active_bg_black ">
							<a class="TSFntMedium tsfs-18" data-tspage="1" href="#">1</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">2</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">3</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">4</a>
						</li>
						<li class="nxt_pgsNms bordrRds50 tsbg-main tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2 ">
							<a class="next TSFntMedium tsfs-18" data-tspage="2" href=""><i class="fas position-relative tsfs-15 fa-chevron-left fa-1x"></i></a>
						</li>
					</ul>
				</nav>
			</div>


	</section>

	<!-- related posts  -->
	<section id="tssection-tsrelpsts" class="tsc-sec-tsrelpsts w-100 h-auto mt-md-5 pt-md-5 pt-2">
		<div class="container px-md-0 px-4 mt-md-5 mt-2">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">مقالات ذات صلة</h3>
			</div>
		</div>
		<div class="container p-0 px-md-0 px-4">

			<div class="owl-carousel owl-theme SliderX  mt-md-5 mt-4 text-nowrap ">
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQS  -->
	<section id="tssection-tsfaqs" class="tsc-sec-tsfa	qs w-100 h-auto mt-md-5 pt-md-5 pt-2">
		<div class="container px-md-0 px-4 mt-md-5 mt-2">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">الاسئلة الشائعة</h3>
			</div>
		</div>

		<div class="container my-md-5 my-3 py-md-4 py-2">
			<!-- !!! Note that each question when clicked on button it target defrent collapsed area -->
			<!-- first question -->
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- second question -->
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseTwo">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- third question -->
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapsefoure">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapsefoure" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>

						</div>
					</div>
				</div>
			</div>
			<!-- fourth question -->
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapsethree">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapsethree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>




	</section>
	<!-- Footer -->
	<footer class=" w-100 h-auto tsbg-ftr-bg position-relative pt-md-5 pt-4 pb-md-5 pb-5 mt-5 ">
		<div class="container p-0 pt-md-5 pt-5 pb-md-5 pb-5 px-md-0 px-4 ">
			<div class="row py-md-3 py-0">
				<div class="col-md-3 col-12 d-flex flex-column justify-content-center gap-4">
					<img class="tsc-logo-f" src="./tsimg/qobon-logo.svg" alt="">
					<p class="text1 col-md-12 col-7 TSFntLight tsfs-18 tscl-0 pe-md-4 pe-1">
						منصة توفر أفضل العروض والخصومات على المنتجات والخدمات. نحن هنا لمساعدتك في توفير المال أثناء
						التسوق عبر الإنترنت.
					</p>
				</div>
				<div
					class="col-md-6 col-12 d-flex justify-content-md-center justify-content-start align-items-end gap-5 mt-md-0 mt-4 mb-md-0 mb-5 pb-md-0 pb-5">
					<ul class="footer-menu d-flex flex-column gap-md-3 gap-2">
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0" href="#">عروض
								الشهر</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="#">المتاجر</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="./tsaboutus.php">عن
								قوبون</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="./tsblog.php">المدونه</a></li>
					</ul>
					<ul class="footer-menu d-flex flex-column gap-md-3 gap-2">
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="#tsnewoffers"> العروض
								الحالية</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="./tsterms.php">الشروط
								والاحكام</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0"
								href="./tsprivacy.php">سياسة
								الخصوصيه</a></li>
						<li class="tsc-tr06s tsc-tr-end"><a class="TSFntLight mnu_link tsfs-18 tscl-0" href="#">اتصل
								بنا</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-12 d-flex flex-column justify-content-end align-items-start gap-3">
					<span class="d-md-block d-none TSFntLight tsfs-18 tscl-0">ابقَ على اطلاع بالعروض الحصرية</span>
					<div class="position-relative w-100 h-auto ">
						<input class="bordr90  bg-transparent tscl-ftr-plc-hdr w-100 py-md-2 py-3 ps-3" type="text"
							placeholder="أدخل بريدك الإلكتروني">
						<a href=""
							class="mail-btn d-flex justify-content-center align-items-center position-absolute top-50 end-0  tsc-cursorpointer bordr90 tsbg-main border-0 p-md-1 p-0">
							<i class="fa fa-arrow-left tsfs-22 px-md-2 px-3 py-md-2 py-3 tscl-0"></i>
						</a>
					</div>
					<div class="d-flex gap-md-2 gap-3 mt-md-1 mt-3">
						<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
							<i class="fab fa-facebook  tsfs-28 tscl-0"></i>
						</a>
						<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
							<i class="fab fa-snapchat  tsfs-28 tscl-0"></i>
						</a>
						<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
							<i class="fab fa-tiktok tsfs-28 tscl-0"></i>
						</a>
						<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
							<i class="fab fa-x-twitter tsfs-28 tscl-0"></i>
						</a>
						<a href="" target="_blank" class="tsc-tr06s tsc-tr-top">
							<i class="fab fa-instagram tsfs-28 tscl-0"></i>
						</a>

					</div>
				</div>
			</div>

		</div>
		<div class="w-100 tscl-cpyRight-bg text-center  py-4 position-absolute bottom-0">
			<span class="TSFntLight tsfs-18 tscl-0 ">جميع الحقوق محفوظة لـ Qobon - 2024</span>
		</div>
	</footer>








	<script src="./tsjs/jquery-3.5.1.min.js"></script>
	<script src="./tsjs/owl.carousel.min.js"></script>
	<script src="./tsjs/bootstrap.bundle.min.js"></script>
	<script src="./tsjs/tsfldr/tsjs0.min.js"></script>
	<script>
		(function($) {
			$(document).ready(function() {
				$._tsslsp_tsrelpsts = 9000;
				$._tsslof_tsrelpsts = true;
			});
		})(jQuery);
	</script>
	<script src="./tsjs/tsfldr/tsjs_main.min.js"></script>

	<script src="./tsjs/tsfldr/tsjsz.min.js"></script>
	<script src="./exclude/Test.min.js"></script>


</body>

</html>