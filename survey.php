<?php

$page = "Survey";

include "includes/html-top.php";


//Questions: Name / Which is your fav? / What type of computer do you use?

?>

	<body>
		<?php

			include "includes/nav.php";
			include "includes/header.php";

		?>

			<h1>Survey</h1>


			<form class="surveyForm" action="insert.php" method="post">
			<fieldset>
			<label for="name">Name</label>
			<br/>
			<input type="text" id="name" name="name" placeholder="Your name..">

			<br/>
			<br/>
			<label for="country">Pick One</label>

			<br/>
			<select id="brand" name="brand">
				<option value="apple">Apple</option>
				<option value="mircosoft">Mircosoft</option>
				<option value="google">Google</option>
			</select>

			<br/>
			<br/>
			<label for="computer">What type of computer do you use?</label>
			<br/>
			<input type="text" id="computer" name="computer">

			<br/>
			<br/>
			<input type="submit" value="Submit">
			</fieldset>
			</form>


			<hr>
			<div class="logoRow">
				<div class="logo">
					<img src="images/apple.png" alt="Apple logo">
				</div>

				<div class="logo">
					<img src="images/google.png" alt="Google logo">
				</div>

				<div class="logo">
					<img src="images/microsoft.png" alt="Microsoft logo">
				</div>
			</div>

			<hr>

			</div>

			<?php include "includes/footer.php"; ?>

	</body>

	</html>
