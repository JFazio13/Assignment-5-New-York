<?php

$page = "Home";

include "includes/html-top.php";

?>

	<body>
		<?php

			include "includes/nav.php";
			include "includes/header.php";

		?>

			<h1>Tech Giants</h1>

			<div class="logoRowIndex">
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

			<div class="containerIndex">

				<hr>

				<div class="mainPage">
					<div class="apple">

						<h2>Apple</h2>

						<p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. The company's hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, and the HomePod smart speaker. Apple's software includes the macOS and iOS operating systems, the iTunes media player, the Safari web browser, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store and Mac App Store, Apple Music, and iCloud.</p>

						<a href="apple.php">Learn more about Apple</a>

					</div>

					<div class="google">

						<h2>Google</h2>

						<p>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. Google was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, California. Together, they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a privately held company on September 4, 1998. An Initial public offering (IPO) took place on August 19, 2004, and Google moved to its new headquarters in Mountain View, California, nicknamed the Googleplex.</p>

						<a href="google.php">Learn more about Google</a>

					</div>

					<div class="microsoft">

						<h2>Microsoft</h2>

						<p>Microsoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer electronics, personal computers, and services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. As of 2016, it is the world's largest software maker by revenue,[4] and one of the world's most valuable companies.[5] The word "Microsoft" is a portmanteau of "microcomputer" and "software".</p>

						<a href="google.php">Learn more about Microsoft</a>

					</div>
				</div>

			</div>

			<?php include "includes/footer.php"; ?>

	</body>

	</html>
