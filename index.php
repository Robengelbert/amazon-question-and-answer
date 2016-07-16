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
		<p>Robert has got on to <a href="https://www.amazon.com/?ie=UTF8&hvadid=3480083188&hvbmt=be&hvdev=c&hvqmt=e&ref=pd_sl_7j18redljw_e&tag=hymsabk-20">Amazon.com</a>, navigated to the data phones and clicked on the link for a<a href="https://www.amazon.com/Huawei-Nexus-6P-unlocked-smartphone/dp/B019TWO6WM/ref=sr_1_14?s=wireless&ie=UTF8&qid=1468535132&sr=1-14&keywords=nexus+6"> Nexus 6 </a>. Robert is interested, but the phone is a little pricey. Robert scrolls down the page, and stops on the customer question and answer section. There's a search bar at the top of the Q&A section of the page to search the existing questions or ask new questions if your question doesn't exist. There are 4 questions with answers displayed. There are up and down votes to vote on how helpful the answer to the question is. finally at the bottom of the page there's a button to view all previous posts. Robert searches the post to answer the questions he has about the phone.</p>
		<!-- State the interaction flow -->

		<h2> Interaction Flow</h2>
		<ol>
			<li>Roberts main goal in visiting <a href="https://www.amazon.com/?ie=UTF8&hvadid=3480083188&hvbmt=be&hvdev=c&hvqmt=e&ref=pd_sl_7j18redljw_e&tag=hymsabk-20">Amazon.com</a> is to research data phones</li>
			<li>Robert needs to research data phones for his new career as a web developer.</li>
			<li>Robert will need to pick a phone and purchase the phone before his first interview with a potential employer.</li>
			<li>Robert will search Amazon from home on his HP Notebook.</li>
		</ol>

		<!-- State the conceptual model -->
		<h2>Conceptual Model</h2>
		<ol>
			<li>Each user can post 1 post <strong>many</strong> times with different questions in each post.</li>
			<li><strong>Many</strong> users can respond to each post many times</li>
			<li>Each user can view <strong> many</strong> questions <strong>many</strong> times.</li>
			<li>Each user can search and vote up or down on <strong>many</strong>questions <strong>many</strong> times.</li>
		</ol>
	</body>
</html>
