<?php

	/*
		1. Odabir određene države
		2. Spremanje podataka u bazu
		3. Obavezno polje "država" i "e-mail"
	*/

	# Connect to MySQL database
	$MySQL = @mysql_connect("localhost", "root", "");
	@mysql_select_db("test", $MySQL) or die('<h1>Could not connect to the database at this time. Please try later.</h1>');

print '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mini Form</title>
	<link rel="stylesheet" href="style.css">
</head>
	<header>
		<h1>Forme</h1>
    </header>

    <div class="main-content">
        <div class="form-mini-container">
            <form class="form-mini" method="post" action="#">
                <div class="form-row">
                    <input type="text" name="name" placeholder="Your Name">
                </div>
                <div class="form-row">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-row">
                    <label>
                        <select name="country_id" required>';
							$query  = "SELECT * FROM country ORDER BY country_name ASC";
							$result = mysql_query($query);
							print '<option value="">Choose an option</option>';
                            while ($row = mysql_fetch_object($result)) {
								// 1. Odabir određene države
								print '<option value="' . $row->cc_fips . '"'; if ($row->cc_fips == 'HR') { print ' selected';  } print '>' . $row->country_name . '</option>';
							}
                        print '</select>
                    </label>
                </div>';
					// 2. Spremanje podataka u bazu
					if ($_POST['country_id'] != '') {
						$query  = "INSERT INTO vjezba (country_id)";
						$query .= " VALUES ('".$_POST['country_id']."')";
						$result = @mysql_query($query);
						print '<p class="message">Uspješno ste upisali podatke.</p>';
					}
				print '
                <div class="form-row">
                    <label class="form-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Checkbox</span>
                    </label>
                </div>

                <div class="form-row">
                    <div class="form-radio-buttons">

                        <div>
                            <label>
                                <input type="radio" name="radio">
                                <span>Radio option 1</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="radio">
                                <span>Radio option 2</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="radio" name="radio">
                                <span>Radio option 3</span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-row form-last-row">
                    <button type="submit">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>';
?>