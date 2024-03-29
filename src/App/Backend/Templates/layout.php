<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="frontend">
	<meta name="author" content="a.manteaux">

	<title>Alexandre Manteaux - Blog professionnel</title>

	<!-- Custom fonts for this theme -->
	<link href="css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">

	<!-- Theme CSS -->
	<link href="css/freelancer.min.css" rel="stylesheet">
	<link href="css/backend_custom.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="/admin">Administration</a>
			<button class="nav-butt navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin-news">News</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin-comments">Commentaires</a>
					</li>
					<?php
					if ($this->app->visitor()->isAdministrator() == true) {
					?>
						<li class="nav-item mx-0 mx-lg-1">
							<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin-users">Utilisateurs</a>
						</li>
					<?php
					}
					?>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin-disconnect">Déconnexion</a>
					</li>


				</ul>
			</div>
		</div>
	</nav>

	<!-- Views content -->

	<?= $title ?>
	<?= $content ?>


	<!-- Footer -->
	<footer class="footer text-center sticky-footer-wrapper" id="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Social Icons -->
				<div class="col-lg-4 mb-5 mb-lg-0 mx-auto">
					<h4 class="text-uppercase mb-4">Mes réseaux sociaux</h4>
					<a class="btn btn-outline-light btn-social mx-1" href="#">
						<i class="fab fa-fw fa-facebook-f"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="#">
						<i class="fab fa-fw fa-twitter"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="#">
						<i class="fab fa-fw fa-linkedin-in"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="#">
						<i class="fab fa-fw fa-dribbble"></i>
					</a>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright Section -->
	<section class="copyright py-4 text-center text-white">
		<div class="container">
			<small>Copyright &copy; blog.alexandremanteaux.fr 2019</small>
		</div>
	</section>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-to-top d-lg-none position-fixed ">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>


	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery-easing/jquery.easing.min.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/freelancer.min.js"></script>

	<!-- DataTables JQuery -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/datetime-moment.js"></script>

	<script>
		$(document).ready(function() {
			$.fn.dataTable.moment('DD/MM/YYYY HH[h]mm');
			$('#usetTable').DataTable({
				responsive: true
			});
		});
	</script>
</body>

</html>