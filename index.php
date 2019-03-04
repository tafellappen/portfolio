<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Miranda Auriemma's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="fonts/VT323-Regular.ttf" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" media="screen" href="Skeleton-2.0.4/css/normalize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="Skeleton-2.0.4/css/skeleton.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/navigation.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>
<body>
    <header class="container myMenu">
        <nav class="row">
            <div class="six columns">
                <h2><a href="#top">Miranda Auriemma</a></h2>
            </div>
            <div class="six columns">
                <ul class="myNav">
                    <li><a href="#portfolioTop">Portfolio</a></li>
                    <li><a href="etc/Auriemma_Resume.pdf">Resume</a></li>
                    <li><a href="#aboutMe">About Me</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container main">
        <!--tagline/ "above the fold" -->
        <section class="row" id="top">
            <div class="twelve columns tagline">
                <h3>Interactive Developer & Gamemaker</h3>

            </div>
        </section>
        <br/>

        <!--portfolio-->
        <!--alt tab-->
        <section class="row portfolio" id="portfolioTop">
            <div class="twelve columns first">
                <h6>Work in Progress</h6>
                <h5>Alt+Tab</h5>
                <div class="imageHolder">
                    <img src="images/fontHack.PNG"/>
                    <img src="images/altTab.PNG"/>
                </div>
                <!--<button type="button" class="seeMore">See More &#9660;</button>-->
                <p>
                    Alt+Tab is a game started during the 2018 RIT Game Dev Club Game Jam, and was voted as the game with the best design by the judges. The objective of the game is 
                    to play as many games on your computer as you can without the teacher catching you - if you're caught three times 
                    before class ends, you lose!
                </p>
                <p>
                    For this project, I worked as the team leader, a programmer, and worked on ensuring that 
                    the art assets would be smoothly implemented into the game. The games that you play on your computer
                    within this game are currently Pong, Whack-A_Mole, and a messaging minigame. As a programmer, I worked on 
                    creating the Pong minigame, and worked on allowing all of the minigames to be integrated into the main game in the same manner.
                </p>
                <p>
                    Future development plans of this project include implementing more behaviors for the teacher, more minigames, and implementing a smoother way to integrate the minigames.
                </p>
            </div>
        </section>
        <!--amiibo searcher-->
        <section class="row portfolio">
            <div class="twelve columns first">
                <h5>Amiibo Searcher</h5>
                <div class="imageHolder">
                    <img src="images/amiibo.PNG"/>
                    <img src="images/petch.PNG"/>
                </div>
                <!--<button type="button" class="seeMore">See More &#9660;</button>-->
                <p>
                    The Amiibo Searcher project was a class project where I worked with one other person to create an interface for
                    a user to easily interact with an API. The API that we chose held information on all of the amiibos that have been
                    released thus far. We both worked together on most of the code for the project.
                </p>
                <p>
                    The user can search for amiibos by choosing the game series that they come from, or by searching for the character's name, or both. 
                    <a href="https://people.rit.edu/axf8278/230/project2/">Click here to visit the page!</a>
                </p>
            </div>
        </section>
        <!--tweety no like squirrels-->
        <section class="row portfolio">
            <div class="twelve columns first">
                <h5>Tweety no like Squirrels</h5>
                <div class="imageHolder">
                    <img src="images/tweety.PNG"/>
                    <img src="images/twwety2.PNG"/>
                    <img src="images/editor.PNG"/>
                </div>
                <!--<button type="button" class="seeMore">See More &#9660;</button>-->
                <p>
                    This game was a semester-long group project that was built with Monogame. It is a 2D platformer where
                    the player plays as a bird who is trying to get home, and avoid squirrels. The project also included a 
                    level editor to allow both developers and players to create a level easily. For this project, I suggested
                    the initial game concept and created the art assets, and was the primary developer of the level editor tool.
                </p>
            </div>
        </section>
        <br/>

        <!--About Me-->
        <section class="row about" id="aboutMe">
            <div class="four columns">
                <img src="images/me.jpg" alt="Me!">
            </div>
            <div class="eight columns">
                <h4>Hello, I'm Miranda Auriemma!</h4>
                <p>
                    I am a Game Design and Development student at RIT with a passion for learning and problem solving and making enjoyable user experiences and games.
                    In addition to my major, am also minoring in Japanese and supplementing that with independent self-study during breaks in the academic year.
                    During my spare time, I participate in RIT's Game Symphony Orchestra and enjoy playing music.
                </p>
                <a href="etc/Auriemma_Resume.pdf">My Resume</a>
            </div>
        </section>
        <br/>
        <!--Contact-->
        <section class="row contact" id=contact>
            <div class="twelve columns">
                <h4>Contact Me</h4>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">                
                    <label>Name</label>
                    <input name="name" placeholder="Type Here">
                    
                    <label>Email</label>
                    <input name="email" type="email" placeholder="person@sample.com">
                    
                    <label>Message</label>
                    <textarea name="message" placeholder="Type Here"></textarea>
                    
                    <label>*What is 2+2? (Anti-spam)</label>
                    <input name="human" placeholder="Type Here">
                            
                    <input id="submit" name="submit" type="submit" value="Submit">
                
                </form>
                <a href="notes.html">About this page</a>
            </div>

        </section>
    </main>
    
    <?php   
 	// ** Form validation code **
 	// We will use the $_POST "super global" associative array to extract the values of the form fields
	// #1 - was the submit button pressed?
    if (isset($_POST["submit"]))
    { 
    	$to = "msa4295@rit.edu";
    	
    	// #2 - if a value for the `email` form field is missing, give a default value
    	// else, use the value from the form field
			$from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);
			
			$subject = "Web Form";
			
			// #3 - same as above, except with the `message` form field
			$message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);
			
			// #4 - same as above, except with the `name` form field
			$name = empty(trim($_POST["name"])) ? "No name" : sanitize_string($_POST["name"]);
			
			// #5 - same as above, except with the `human` form field
			$human = empty(trim($_POST["human"])) ? "0" : sanitize_string($_POST["human"]);
            
            //$rating = empty(trim($_POST["rating"])) ?  "This person apparently does not like NieR..." : sanitize_string($_POST["rating"]);
            
			$headers = "From: $from" . "\r\n";
			
			// #6 - add the user's name to the end of the message
			$message .= "\n\n - $name";
			
			// #7 - if they know what 2+2 is, send the message
			if (intval($human) == 4){
			
				// #8 - mail returns false if the mail can't be sent
				$sent = mail($to,$subject."\n\n".$message,$headers);
                if ($sent)
                {
					echo "<p><b>You sent:</b> $message</p>";
                }
                else
                {
					echo "<p>Mail not sent!</p>";
				}
            }
            else
            {
				echo "<p>You are either a 'bot, or bad at arithmetic!</p>";
			}

    }
    
    // #9 - this handy helper function is very necessary whenever
    // we are going to put user input onto a web page or a database
    // For example, if the user entered a <script> tag, and we added that <script> tag to our HTML page
    // they could perform an XSS attack (Cross-site scripting)
    function sanitize_string($string)
    {
	    $string = trim($string);
	    $string = strip_tags($string);
	    return $string;
    }
?>
</body>
</html>