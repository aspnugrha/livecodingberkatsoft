<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
   <meta charset="utf-8">
   <title>Movie</title>

   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
   <meta name="description" content="This is meta description">
   <meta name="author" content="Themefisher">

   <!-- plugins -->
   <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="/assets/2/plugins/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">

   <link rel="stylesheet" href="/assets/2/plugins/themify-icons/themify-icons.css">
   <link rel="stylesheet" href="/assets/2/plugins/slick/slick.css">

   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="/assets/2/css/style.css">

   <!--Favicon-->
   <link rel="shortcut icon" href="/assets/2/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="/assets/2/images/favicon.png" type="image/x-icon">
</head>

<body>
@include('partials.nav_home')

<section class="section">
	<div class="container">
		@yield('container')
	</div>
</section>

   @include('partials.footer_home')


   <!-- JS Plugins -->
   <script src="/assets/2/plugins/jQuery/jquery.min.js"></script>
   <script src="/assets/2/plugins/bootstrap/bootstrap.min.js" async></script>
   <script src="/assets/2/plugins/slick/slick.min.js"></script>

   <!-- Main Script -->
   <script src="/assets/2/js/script.js"></script>
</body>
</html>