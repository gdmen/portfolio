<?php include_once('includes/generators.php'); ?>
<? generate_header(); ?>
<? generate_container("Restaurants"); ?>
<?php header('Access-Control-Allow-Origin: *'); ?>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/category.js"></script>
    <script src="https://oauth.googlecode.com/svn/code/javascript/oauth.js"></script>
    <script src="https://oauth.googlecode.com/svn/code/javascript/sha1.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/restaurants.js"></script>

  </body>
</html>
