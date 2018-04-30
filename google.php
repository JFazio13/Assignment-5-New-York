<?php

$page = "Google";

include "includes/html-top.php";

?>

	<body>
		<?php

			include "includes/nav.php";
			include "includes/header.php";

		?>

			<h1>Google</h1>

			<div class="logoRow">
				<div>
					<img id = "google" src="images/google_head.jpg" alt="Google">
				</div>
			</div>

			<div class="container">

				<hr>

				<div class="history">

					<h2>History</h2>

					<h3>Early Years</h3>

					<p>Google began in January 1996 as a research project by Larry Page and Sergey Brin when they were both PhD students at Stanford University in Stanford, California. While conventional search engines ranked results by counting how many times the search terms appeared on the page, the two theorized about a better system that analyzed the relationships among websites.[10] They called this new technology PageRank; it determined a website's relevance by the number of pages, and the importance of those pages that linked back to the original site.</p>

					<p>Page and Brin originally nicknamed their new search engine "BackRub", because the system checked backlinks to estimate the importance of a site.[13][14][15] Eventually, they changed the name to Google; the name of the search engine originated from a misspelling of the word "googol",[16][17] the number 1 followed by 100 zeros, which was picked to signify that the search engine was intended to provide large quantities of information.[18] Originally, Google ran under Stanford University's website, with the domains google.stanford.edu[19] and z.stanford.edu.</p>

					<p>The domain name for Google was registered on September 15, 1997,[21] and the company was incorporated on September 4, 1998. It was based in the garage of a friend (Susan Wojcicki[9]) in Menlo Park, California. Craig Silverstein, a fellow PhD student at Stanford, was hired as the first employee.</p>

					<h3>Recent Years</h3>

					<p>Google announced the launch of a new company, called Calico, on September 19, 2013, to be led by Apple, Inc. chairman Arthur Levinson. In the official public statement, Page explained that the "health and well-being" company would focus on "the challenge of ageing and associated diseases".[71] Google celebrated its 15-year anniversary on September 27, 2013, and in 2016 it celebrated its 18th birthday with an animated Doodle shown on web browsers around the world.[72] although it has used other dates for its official birthday.[73] The reason for the choice of September 27 remains unclear, and a dispute with rival search engine Yahoo! Search in 2005 has been suggested as the cause.</p>

					<p>In September 2015, Google engineering manager Rachel Potvin revealed details about Google's software code at an engineering conference. She revealed that the entire Google codebase, which spans every single service it develops, consists of over 2 billion lines of code. All that code is stored in a code repository available to all 25,000 Google engineers, and the code is regularly copied and updated on 10 Google data centers. To keep control, Potvin said Google has built its own "version control system", called "Piper", and that "when you start a new project, you have a wealth of libraries already available to you. Almost everything has already been done." Engineers can make a single code change and deploy it on all services at the same time. The only major exceptions are that the PageRank search results algorithm is stored separately with only specific employee access, and the code for the Android operating system and the Google Chrome browser are also stored separately, as they don't run on the Internet. The "Piper" system spans 85 TB of data. Google engineers make 25,000 changes to the code each day and on a weekly basis change approximately 15 million lines of code across 250,000 files. With that much code, automated bots have to help. Potvin reported, "You need to make a concerted effort to maintain code health. And this is not just humans maintaining code health, but robots too.” Bots aren't writing code, but generating a lot of the data and configuration files needed to run the company's software. "Not only is the size of the repository increasing," Potvin explained, "but the rate of change is also increasing. This is an exponential curve."[83][84] As of October 2016, Google operates 70 offices in more than 40 countries.[85] Alexa, a company that monitors commercial web traffic, lists Google.com as the most visited website in the world.[86] Several other Google services also figure in the top 100 most visited websites, including YouTube[87] and Blogger.</p>

				</div>

				<hr>

					<h2>Iconic Products</h2>

					<div class="googleProductsRowOne">

					<div class="googleProductOne">
						<h3>Search Engine</h3>

						<div class="googleImage">
							<img class = "image" src="images/search.png" alt="Search">
						</div>

						<p>Google Search, commonly referred to as Google Web Search or simply Google, is a web search engine developed by Google. It is the most-used search engine on the World Wide Web,[5] handling more than three billion searches each day.[6][7] As of February 2016, it is the most used search engine in the US with 64.0% market share.[8] The order of search results returned by Google is based, in part, on a priority rank system called "PageRank". Google Search also provides many different options for customized search, using symbols to include, exclude, specify or require certain search behavior, and offers specialized interactive experiences, such as flight status and package tracking, weather forecasts, currency, unit and time conversions, word definitions, and more.</p>
					</div>

					<div class="googleProductTwo">
						<h3>G Suite Enterprise</h3>

						<div class="googleImage">
							<img class = "image" src="images/gsuite.jpg" alt="GSuite">
						</div>

						<p>G Suite is a monthly subscription offering for organizations and businesses to get access to a collection of Google's services, including Gmail, Google Drive and Docs, Sheets, and Slides, with additional administrative tools, unique domain names, and 24/7 support. Google Search Appliance was launched in February 2002, targeted toward providing search technology for larger organizations.[9] Google launched the Mini three years later, which was targeted at smaller organizations. Late in 2006, Google began to sell Custom Search Business Edition, providing customers with an advertising-free window into Google.com's index. The service was renamed Google Site Search in 2008.[188]</p>
					</div>
				</diV>

				<div class="googleProductsRowTwo">
					<div class="googleProductThree">
						<h3>Hardware</h3>

						<div class="googleImage">
							<img class = "image" src="images/chrome.jpeg" alt="Chromecast">
						</div>

						<p>In January 2010, Google released Nexus One, the first Android phone under its own, "Nexus", brand.[214] It spawned a number of phones and tablets under the "Nexus" branding[215] until its eventual discontinuation in 2016, replaced by a new brand called, Pixel.[216] In 2011, the Chromebook was introduced, described as a "new kind of computer" running Chrome OS.[217] In July 2013, Google introduced the Chromecast dongle, that allows users to stream content from their smartphones to televisions.[218][219] In June 2014, Google announced Google Cardboard, a simple cardboard viewer that lets user place their smartphone in a special front compartment to view virtual reality (VR) media.</p>
					</div>
				</div>

			</div>

			<?php include "includes/footer.php"; ?>

	</body>

	</html>
