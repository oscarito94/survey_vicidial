<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Reporte Encuesta SAC">
    <meta name="author" content="Oscar Pérez">
    <title>Reporte Encuesta SAC</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GRUPO NOVUS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://192.168.1.112/vicidial/reporte_survey_sac/index.php">Reporte</a></li>
            <li><a href="https://192.168.1.112/vicidial/welcome.php">Vicidial GUI</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
		<h2>
			Reporte Encuesta SAC
		</h2>
			<form method="post" action="index.php"  class="form-inline">
			  <div class="form-group">
				<label for="Date_From">Fecha Desde</label>
				<input type="date" name="date_from" value="<?php echo (isset ($_POST['date_from'])) ? $_POST['date_from']: ''; ?>" class="form-control" />
			  </div>
			  <div class="form-group">
				<label for="Date_to">Fecha Hasta</label>
				<input type="date" name="date_to" value="<?php echo (isset ($_POST['date_to'])) ? $_POST['date_to']: ''; ?>" class="form-control" />
			  </div>
			  <button type="submit" name="search" class="btn btn-primary">SEARCH</button>
			</form>
			
			<br />
			  <a href="index.php" style="text-decoration:none;">
			  <button type="submit" class="btn btn-warning">Back</button>
			  </a>
			<br />
			<br />
			
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>FECHA</th>
						<th>CLIENTE_TEF</th>
						<th>UNIQUEID</th>
						<th>R1</th>
						<th>R2</th>
						<th>R3</th>
						<th>GRABACION</th>
					</tr>
				<?php
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM survey_log where (survey_log.date BETWEEN '".$_POST['date_from']." 00:00:01' and '".$_POST['date_to']." 23:59:59') order by date DESC");
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['date'];
				?>
					<tr>
						<td><?php echo $row_member['date']; ?></td>
						<td><?php echo $row_member['callerid']; ?></td>
						<td><?php echo $row_member['uniqueid']; ?></td>
						<td><?php echo $row_member['Answer1']; ?></td>
						<td><?php echo $row_member['Answer2']; ?></td>
						<td><?php echo $row_member['Answer3']; ?></td>
						<td><?php echo $row_member['Recording']; ?></td>
					</tr>
					<?php	}	?>
				</table>
			</div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Vicidial Reporte SAC 2023</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
