<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Amazon question and answer</title>
	</head>
	<body>
		<!-- What does this portion of the website need  -->

		<!-- Need a place at the top of the form for users to search for answers already in the database of questions or ask a new question if there question doesn't already exist in the database. -->
		<!-- Need to post questions with the ability for other users to answer the question -->
		<!-- Need to post answers -->
		<!-- Need to have option for up or down votes -->
		<h1>Customer Questions & Answers </h1>
		<!-- Create a persona -->
		<h2>Persona</h2>
		<img src="images/robertspic.jpg" alt="Picture of Robert Engelbert" />
		<p><strong>Name:</strong> Robert Engelbert</p>
		<p><strong>Age:</strong> 32</p>
		<p><strong>Profession:</strong> Web developer and Student at deep dive coders bootcamp.</p>
		<p><strong>Technology:</strong> Robert uses an HP Notebook at school and at home. Robert has a 5 dollar pre-paid flip phone from the dollar store.</p>
		<p><strong>Needs:</strong> Robert needs a data phone to help test the mobile sites he creates.</p>
		<p><strong> Goals:</strong>By looking at the questions and answers, Roberts goal is to weed through the problem phones and find a good phone at a good price.</p>
		<!-- Document a use case -->
		<h2>Use case</h2>
		<p> Roberts main goal in visiting <a href="https://www.amazon.com/?ie=UTF8&hvadid=3480083188&hvbmt=be&hvdev=c&hvqmt=e&ref=pd_sl_7j18redljw_e&tag=hymsabk-20" target="_blank">Amazon.com</a> is to research data phones.
		Robert needs to research data phones for his new career as a web developer.
		Robert will need to pick a phone and purchase the phone before his first interview with a potential employer.		Robert will search Amazon from home on his HP Notebook.</p>
		<!-- State the interaction flow -->

		<h2> Interaction Flow</h2>
		<ol>
			<li>Robert has got on to <a href="https://www.amazon.com/?ie=UTF8&hvadid=3480083188&hvbmt=be&hvdev=c&hvqmt=e&ref=pd_sl_7j18redljw_e&tag=hymsabk-20" target="_blank">Amazon.com</a></li>
			<li> Robert navigated to the data phones and clicked on the link for a<a href="https://www.amazon.com/Huawei-Nexus-6P-Unlocked-Smartphone/dp/B015YCRZ0G/ref=sr_1_9?s=wireless&ie=UTF8&qid=1468757622&sr=1-9&keywords=nexus+6" target="_blank"> Nexus 6 </a>.</li>
			<li> Robert is interested, but the phone is a little pricey. Robert scrolls down the page, and stops on the customer question and answer section.</li>
			<li>Robert searches the post to answer the questions he has about the phone.</li>
		</ol>

		<!-- State the conceptual model -->
		<h2>Conceptual Model</h2>
		<ol>
			<li><strong>One</strong> product can have <strong>many</strong> questions.</li>
			<li><strong>One</strong> question can have <strong>many</strong> answers</li>
			<li><strong>One</strong> user can ask <strong>many</strong> questions <strong>many</strong> times.</li>
			<li><strong>One</strong> user can answer <strong>many</strong> questions many times.</li>
			<li><strong>One</strong> user can vote on <strong>many</strong> questions.</li>
		</ol>
		<h2>Entity Relationship Diagram</h2>
		<img src="images/erddiagram-3.svg" alt="Entity relationship diagram" />
	</body>
</html>
