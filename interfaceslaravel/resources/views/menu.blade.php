
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>biblioteca unsaac</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">



	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('backend/css1/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('backend/css1/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('backend/css1/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('backend/css1/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('backend/css1/magnific-popup.css')}}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{asset('backend/css1/bootstrap-datetimepicker.min.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('backend/css1/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css1/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('backend/css1/style_1.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('backend/js1/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js1/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
     
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar" background-dark>
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CONSULTAS</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>TESIS <span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> BÚSQUEDA</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>MOSTRAR</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>AUTORES <span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> BÚSQUEDA</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>MOSTRAR</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>ASESORES <span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> BÚSQUEDA</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>MOSTRAR</a></li>
          </ul>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo">
						<img src="images/2.jpg" alt="Image" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.html">OBJETIVOS</a></li>
						<li><a href="index.html">VISIÓN</a></li>
						<li><a href="index.html">MISIÓN</a></li>
						<li class="has-dropdown">
							<a href="#">¿QUIÉNES SOMOS?</a>
							<ul class="dropdown">
								<li><a href="reglamento.html">reglamento </a></li>
								<li><a href="requisitos.html">requisitos para obtener carnet lector</a></li>
							</ul>
						</li>

						<li class="has-dropdown">
							<a href="#">INFORMACIÓN</a>
							<ul class="dropdown">¿Como incribir una tesis?</a></li>
								<li><a href="procesoInformatico.html">'¿Como prestarse una tesis?'</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row row-mt-15em" align="center">
						<div class="col-md-10s mt-text animate-box" data-animate-effect="fadeInUp" align="pull-right"> 
							<h1 class="cursive-font" >TESITECA</h1>
							<h1 class="cursive-font">UNSAAC</h1>
						</div>

						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Iniciar Sesion</h3>
											<form method="post" action="login_authentication.jsp" onsubmit="login_authentication.jsp">
												<div class="row form-group">
													<div class="col-md-12">

													</div>
												</div>
												<div class="tab-content-inner active" data-content="login">
												<form method="get" action="autenticacion.jsp" onsubmit="login_authentication.jsp">
                                                                                                        <div class="row form-group">
                                                                                                                <div class="col-md-12">
                                                                                                                        <label for="username">Username or Email</label>
                                                                                                                        <input class="form-control" name="username" type="text">
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="row form-group">
                                                                                                                <div class="col-md-12">
                                                                                                                        <label for="password">Password</label>
                                                                                                                        <input class="form-control" name="password" type="password">
                                                                                                                </div>
                                                                                                        </div>

                                                                                                        <div class="row form-group">
                                                                                                                <div class="col-md-12">
                                                                                                                        <input class="btn btn-primary" type="submit" value="Login">
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </form>
											       </div>
											</form>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</header>


	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Noticias</h2>

				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/a.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/a.jpg" alt="Image" class="img-responsive">

						</figure>
						<div class="fh5co-text">
							<h2>SEGURIDAD EN EXAMEN DE ADMISIÓN</h2>
							<p>A puertas del próximo examen Ordinario a la UNSAAC a llevarse a cabo el domingo 19 de agosto, la Comisión Permanente de Admisión de la UNSAAC</p>
							<p><span class="price cursive-font" >
								<input class="btn btn-primary" type="submit" value="Leer Más">
							</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/b.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/b.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>UNSAAC LLEVARÁ AYUDA DE LA CAMPAÑA “AYNILLAN LLAQTAMASI” A LOS HERMANOS DE ACCHA Y OMACHA</h2>
							<p>La Universidad Nacional de San Antonio Abad del Cusco, después de la gran acogida que tuvo la Campaña de Solidaridad ..</p>
							<p><span class="price cursive-font">
							<input class="btn btn-primary" type="submit" value="Leer Más">
						</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/d.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/d.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>EXPOSICIÓN FOTOGRAFÍA SOBRE LOS  “30 AÑOS DE LA PRESENCIA DEL PERÚ EN LA ANTÁRTIDA”</h2>
							<p>Con la participación de un importante número de asistentes como  autoridades y funcionarios de la UNSAAC..</p>
							<p><span class="price cursive-font">
								<input class="btn btn-primary" type="submit" value="Leer Más">
							</span></p>

						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/f.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/f.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>PARTICIPA DEL PROGRAMA “BECARIOS 2019” DE LA EMPRESA CERRO VERDE</h2>
							<p>La Sociedad Minera Cerro Verde S.A.A, invita a los egresados y bachilleres de los periodos 2017-II y 2018-I, así como a quienes concluirán sus estudios en el periodo 2018-II de las Escuelas..</p>
							<p><span class="price cursive-font">
							<input class="btn btn-primary" type="submit" value="Leer Más">
						</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/g.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/g.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>EXAMEN DE ADMISIÓN ORDINARIO Y ESPECIAL A LA UNSAAC</h2>
							<p>El Rector de la UNSAAC Dr. Nicolás Cáceres Huambo, resaltó la importancia que adquiere la postulación al primer centro de formación de la región, por las menciones y rankings internacionales y nacionales..</p>
							<p><span class="price cursive-font">
							<input class="btn btn-primary" type="submit" value="Leer Más">
						</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/h.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/h.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>UNSAAC PROMUEVE CONCURSO DE JUEGO DE MESA</h2>
							<p>La Dirección de Gestión y Emprendimiento del Vicerrectorado de Investigación organiza el “Primer Concurso de Juegos de Mesa: El Emprendedor 2018” cuyo propósito es enseñar sobre educación financiera..</p>
							<p><span class="price cursive-font">
							<input class="btn btn-primary" type="submit" value="Leer Más">
						</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Otros Servicios</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>Happy People</h3>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>Creative Culinary</h3>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>Food Delivery</h3>
						<p</p>
					</div>
				</div>


			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; ”Que otros se jacten de las páginas que han escrito;
a mí me enorgullecen las que he leído”.!&rdquo;</h1>
					<p>&mdash; Jorge Luis Borges</p>
				</div>
			</div>
		</div>
	</div>



	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font">Ubicacion</h2>
					<p>Av. de la Cultura, Nro. 733</p>
					<center>
					<img src="images/i.jpg" alt="Image" class="img-responsive">
				</center>
				</div>
		</div>

		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">




				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Contacto</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>  51.84.604100 - 51.84.604160</a></li>
							<li><a href="#"><i classs="icon-mail2"></i> webmaster@unsaac.edu.pe</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Redes Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://www.youtube.com/channel/UCUciZgc1RYS55ki7FgMQ0Bw"><i class="icon-youtube"></i></a></li>
							<li><a href="https://www.facebook.com/UNSAACPag.Oficial/"><i class="icon-facebook"></i></a></li>
							<li><a href="https://plus.google.com/+VideosInstitucionalesUNSAAC-CUSCO"><i class="icon-google"></i></a></li>

						</ul>
					</div>

				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; Universidad Nacional de San Antonio Abad del Cusco
Av. de la Cultura, Nro. 733, Cusco - Perú - América Latina ::: Telf. 51.84.604100 - 51.84.604160 - Fax 51.84.238156 ::: Apartado Postal Nro 921 - Cusco, Perú
UNSAAC © 2017 - webmaster@unsaac.edu.pe</small>
						<small class="block">Biblioteca central <a href="http://biblioteca.unsaac.edu.pe/" target="_blank">http://biblioteca.unsaac.edu.pe/</a>
							 </small></p>
				</div>

			</div>



		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{asset('backend/js1/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('backend/js1/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('backend/js1/bootstrap.min_1.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('backend/js1/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('backend/js1/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('backend/js1/jquery.countTo.js')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('backend/js1/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('backend/js1/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('backend/js1/magnific-popup-options.js')}}"></script>

	<script src="{{asset('backend/js1/moment.min.js')}}"></script>
	<script src="{{asset('backend/js1/bootstrap-datetimepicker.min.js')}}"></script>


	<!-- Main -->
	<script src="{{asset('backend/js1/main_1.js')}}"></script>


<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('backend/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>

	</body>
</html>
