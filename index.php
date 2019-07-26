<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>EDU</title>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	<script type="text/javascript" src="base.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css"/>
	<?php include 'database.php'; ?>
</head>
<body>
	<div id="page-wrapper">
	  <h1 id="heading">Kontaktforma</h1>
		<div id="errors"></div>
		<h2>Lūdzu, ievadiet savus datus</h2>
		<form action="index.php" method="post" id="contactForm">
			<div class="row">
				<label for="name">Vārds, Uzvārds: <span>*</span></label>
				<input type="text" name="name" value="" id="name" data-label="Vārds, Uzvārds"/>
			</div>
			<div class="row">
				<label for="phone">Telefona numurs: <span>*</span></label>
				<input type="text" name="phone" value="" id="phone" data-label="Telefona numurs"/>
			</div>
			<div class="row">
				<label for="address">Adrese:</label>
				<input type="text" name="address" value="" id="address" data-label="Adrese"/>
			</div>
			<div class="row">
				<label for="message">Ziņojums: <span>*</span></label>
				<textarea name="message" value="" id="message" data-label="Ziņojums"></textarea>
			</div>
			<div class="row">
				<a class="large" href="#" id="submit">Sūtīt</a>
			</div>
		</form>
	</div>
	<div id="page-wrapper">
		<table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Message</th>
                </tr>
            </thead>
	    	<tbody>
				<?php
					$pdo = Database::connect();
					$sql = 'SELECT * FROM localdata ORDER BY id DESC';
					foreach ($pdo->query($sql) as $row) {
				        echo '<tr>';
				        echo '<td>'. $row['name'] . '</td>';
				        echo '<td>'. $row['phone'] . '</td>';
				        echo '<td>'. $row['address'] . '</td>';
				        echo '<td>'. $row['message'] . '</td>';
				        echo '</tr>';
					}
					Database::disconnect();
				?>
	        </tbody>
        </table>
	</div>
	<?php
	    if ( !empty($_POST)) {
	        $name = $_POST['name'];
	        $phone = $_POST['phone'];
	        $address = $_POST['address'];
	        $message = $_POST['message'];
	        
	        if (!empty($_POST)) {
	            $pdo = Database::connect();
	            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $sql = "INSERT INTO localdata (name, phone, address, message) values(?, ?, ?, ?)";
	            $q = $pdo->prepare($sql);
	            $q->execute(array($name,$phone,$address,$message));
	            Database::disconnect();
	            header("Location: index.php");
	        }
	    }
	?>
</body>
</html>