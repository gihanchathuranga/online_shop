<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

session_start(); //Step 0: Don't forget to start the session
define('INCLUDED',true); //Step 1: define INCLUDED as true
require 'simple_chat/init_chat.php'; //Step 2: require the init_chat.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simple Chat | Embedded Version Demo</title>
		
		<!-- Note: the charset must be UTF-8 -->
		<meta charset="UTF-8">
		
		<style type="text/css">
			body , div, img, p, h1{
				font-family: arial;
				margin: 0;
				padding: 0;
				font-weight: normal;
			}

			#wrapper {
				width: 100%;
				min-height: 2000px;
				margin: 15px auto;
				position: relative;
			}

			#title {
				margin: 5px auto;
				width: 380px;
				text-align: center;
			}

			#title h1 {
				white-space: nowrap;
				font-size: 60px;
			}
			#back_link {
				width: 100%;
				height: 20px;
			}
			#back_link a{
				float: right;
				margin-right: 25px;
				text-decoration: none;
				color: slategray;
			}
			#back_link a:hover{
				text-decoration: underline;
				color: slategray;
			}
			#back_link a:visited{
				color: slategray;
			}
		</style>
		
		<!-- //Step 3: link chat_emb.css for the embedded chat-->
		<link type="text/css" rel="stylesheet" href="simple_chat/css/chat_emb.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="title"><h1>Simple Chat ;)</h1></div>
			<div id="back_link"><a href=".">Return Back</a></div>
			
			<!-- The format of one message:
				<div id="message_[message_id]">
					<a href="#">[username] </a>says:
					<p>[message_content]</p>
				</div>
			-->
			

			<?php do_html_chat(true, false); //Step 4: Generate the chat window in any place you want inside your page (embedded version = true, warn if not logged in = false) ?>
			
		</div>
	</body>
</html>