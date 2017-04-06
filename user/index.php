<?php session_start();
$_SESSION["nama_karyawan"]="TESTING";
$_SESSION["nik"]="12345";
$_SESSION["nama_unit"]="BIRO 3";
$_SESSION["unit_base"]="12345";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>SIMBA</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Google Web Font -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

  <!-- Custom CSS-->
  <link href="css/general.css" rel="stylesheet">

 <!-- Owl-Carousel -->
  <link href="css/custom.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="css/magnific-popup.css">

<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->

  <!-- Magnific Popup core CSS file-->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <script src="js/modernizr-2.8.3.min.js"></script> <!-- Modernizr /-->

  <link rel="stylesheet" href="../_jquery-ui-1.11.1/jquery-ui.css">
  <!--<link rel="stylesheet" href="../_bootstrap-3.3.4/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../_css/style.css" type="text/css" media="all" />-->
  <script src="../_bootstrap-3.3.4/js/tests/vendor/jquery.min.js"></script>
  <script src="../_bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../_tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">

  tinymce.init({
    selector: "textarea",
    height: 110,
      plugins: [
          "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
      ],

      toolbar1: "bold italic underline strikethrough | subscript superscript | alignleft aligncenter alignright alignjustify | bullist numlist ",
      menubar: false,
      toolbar_items_size: 'small',

      style_formats: [
          {title: 'Bold text', inline: 'b'},
          {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
          {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
          {title: 'Example 1', inline: 'span', classes: 'example1'},
          {title: 'Example 2', inline: 'span', classes: 'example2'},
          {title: 'Table styles'},
          {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
      ],

      templates: [
          {title: 'Test template 1', content: 'Test 1'},
          {title: 'Test template 2', content: 'Test 2'}
      ]
  });
  </script>
 </head>

 <body>
	<?php
	if (empty($_GET["pg"])) {
		$_GET["pg"]=1;
	} else {
		$_GET["pg"]=$_GET["pg"];
	}

	// include function & css
	include_once("../_function_i/cConnect.php");
	include_once("../_function_i/inc_f_object.php");
	include_once("../_function_i/inc_f_datepicker.php");
	include_once("../_function_i/cinsert.php");
	include_once("../_function_i/cupdate.php");
	include_once("../_function_i/cdelete.php");
	include_once("../_function_i/cview.php");
	include_once("../_function_i/createWindow.php");

	date_default_timezone_set('Asia/Jakarta');

	// connection
	$conn = new cConnect();
	$conn->goConnect();

	//$conn2 = new cConnect();
	//$conn2->goConnect2();

	?>

<nav class="navbar-default stuckMenu" role="navigation" style="position:fixed;top:0px">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?l=0">SIMBA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
		    <li class="menuItem"><a href="?l=1">Info Beasiswa</a></li>
		    <li class="menuItem"><a href="?l=2">Hasil Seleksi</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["nama_karyawan"]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Logout</a></li>
              </ul>
        </li>
      </ul>
      <!--  <li><a href="#"><?php echo $_SESSION["nik"];?></a></li>
        <li><a href="#"><?php echo $_SESSION["nama_unit"]."/".$_SESSION["unit_base"];?></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">LOGOUT</a></li>-->

		<!--<li><a href="?l=3">MENU 3</a></li>
		<li><a href="?l=4">MENU 4</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU 5<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?l=5">SUB MENU 5 - 1</a></li>
            <li><a href="?l=6">SUB MENU 5 - 2</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <!--
	  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
		-->

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<br><br><br>

<?php
		if (empty($_GET["l"])) {
			$pilihlink = 0;
		} else {
			$pilihlink = $_GET["l"];
		}
		switch ($pilihlink) {
			case 0:
				echo "HOME";
				include("incText.php");
			break;
			case 1:
				echo '<blockquote> <p>Info Beasiswa</p> </blockquote>';
				include("incDaftarBeasiswa.php");
			break;
			case 2:
				echo '<blockquote> <p>Hasil Seleksi</p> </blockquote>';
				include("incHasilSeleksi.php");
			break;
			case 3:
				echo '<blockquote> <p>KHS</p> </blockquote>';
				include("");
			break;
		}
?>

 </body>
</html>
