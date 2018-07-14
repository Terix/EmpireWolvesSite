<?php
session_start();
$message='';

require_once '../parts/functions.php';

  if(isset($_POST['delete']))
  {
      $file = $_POST['id'];
      unlink('../cmdrs/'.$file);
      $_SESSION['message'] = 'il file '.$file.' è stato eliminato';
      header("Location: ".$_SERVER["PHP_SELF"]);
  }

  if(isset($_POST['load']))
  {
      $file = $_POST['url'];
      $filename = basename($file); // Getting the base name of the file.

      file_put_contents('../cmdrs/'.$filename,file_get_contents($file));
      $_SESSION['message'] = 'il file '.$file.' è stato caricato';
      header("Location: ".$_SERVER["PHP_SELF"]);
  }

$cmdrs = getAvatars('../cmdrs');

if(!empty($_SESSION['message'])) 
{
   $message = $_SESSION['message'];
}
if(isset($_GET["pass"])) 
{
  if($_GET["pass"]=='yourpass') 
  {
    
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Empire Wolves - Elite Dangerous Faction</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/custom.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        <div id="wrapper">
          <div>
    <?php 
            echo $message; 
            $message='';
            $_SESSION['message']='';
    ?>
          </div>
            <div>
            <?php include 'body.php'; ?>
            </div>
        </div>    

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
<?php
  } else 
  {
    echo 'Accesso negato';
  }
} else 
  {
    echo 'Accesso negato';
  }
?>