<?php

/*
Text where is patrick
Text what is patrick doing
Text how is patrick
Patricks jokes
Patricks panda facts
Facts about patrick

Receive text
See what they said
*/

include_once "clockwork-php-master/class-Clockwork.php";

$whatTheySaid = $_GET["content"];
$phoneNumber = $_GET["from"];
$phoneNumberFile = "numbers/$phoneNumber.txt";

$wherePatrickIs = "hackmcr";
$whatsPatrickDoing = "helping Lorna programme!";
$howIsPatrick = "a little confused!";
$doesntUnderstand = "I don't understand, I'm only a panda!";

function doesStringContain($needle, $stringToSearch){
	return strpos(strtolower($stringToSearch), $needle) !== false;
}


$jokes = array();
$jokes[] = "What goes black, white, black, white, black, white?\n\n\nA: A panda rolling down a hill.";
$jokes[] = "What's black and white and red all over?\n\n\nA sunburnt panda.";
$jokes[] = "Why do pandas have fur coats?\n\n\nBecause they'd look stupid in denim jackets.";
$jokes[] = "Why do pandas like old movies?\n\n\nBecause they're in black and white.";
$jokes[] = "What do chinese bears eat for breakfast?\n\n\nPanda-cakes!";
$jokes[] = "What's a Chinese bear's favorite expendable organ?\n\n\nThe panda-creas!";
$jokes[] = "Did you hear about the party at the Chinese zoo?\n\n\nIt was Panda-monium.";
$jokes[] = "What do Chinese bears wear around their face when they're robbing banks?\n\n\nPandana!";
$jokes[] = "How did the panda who lose his dinner?\n\n\nHe was 'Bamboozled'!";
$jokes[] = "Why did the panda date a Victoria Secret model?\n\n\nShe had really big bamboobs.";
$jokes[] = "What did the panda say when he was forced out of his natural habitat?\n\n\nThis is un-BEAR-able.";
$jokes[] = "What's black and white and as hard as a rock?\n\n\nA panda that's fallen in cement.";
$jokes[] = "What's black and white and goes round and round?\n\n\nA panda stuck in a revolving door.";
$jokes[] = "Did you hear about the Pandas that were in a food fight?\n\n\nThey all got Bambooboos.";
$jokes[] = "How many Pandas does it take to change a lightbulb?\n\n\nThe Pandas will get back to you on that, as soon as they can find a store that sells clothing in lightbulb sizes.";
$jokes[] = "A Panda bear walks into a restaurant. He orders a meal and eats it. After politely paying for his meal, he pulls out a gun and shoots it in the air. He immediately walks out the door. 'Why did you do that?' hollered the confused waitress. Looking back over his shoulder the panda says 'I'm a panda'. 'Look it up in the dictionary.' The waitress locates the dictionary on her bosses desk and searches for the definition of panda bear. Finding it she reads, 'Panda Bear - A large black and white bear like mammal native to the far east. Eats shoots and leaves.'";
$jokes[] = "A man in a movie theater notices what looks like a panda sitting next to him. 'Are you a panda?' asked the man, surprised. 'Yes.' 'What are you doing at the movies?'' The panda replied, 'Well, I liked the book.'";
$jokes[] = "A policeman in the big city stops a man in a car with a miniature panda in the front seat. 'What are you doing with that panda?' He exclaimed, 'You should take it to the zoo.' The following week, the same policeman sees the same man with the panda again in the front seat, with both of them wearing sunglasses. The policeman pulls him over. 'I thought you were going to take that panda to the zoo!'' The man replied, 'I did. We had such a good time we are going to the beach this weekend!'";


$pandaFacts = array();
$pandaFacts[] = "A Panda's diet consist of 99 percent bamboo.";
$pandaFacts[] = "When giving birth, a mother panda is 900 times larger than her cub.";
$pandaFacts[] = "Pandas have lived on Earth for two to three million years.";
$pandaFacts[] = "Female pandas ovulate only once a year, and are fertile only two or three days out of the year.";
$pandaFacts[] = "Female cubs become adults at about five years of age, whereas male cubs don't become adults until around seven-years-old.";
$pandaFacts[] = "A panda can spend 14-16 hours a day eating bamboo.";
$pandaFacts[] = "An adult giant panda can weigh anywhere between 200-300lbs.";
$pandaFacts[] = "A panda's hair is thick and wiry and can grow up to four inches.";
$pandaFacts[] = "Giant pandas do not hibernate because their bamboo diets do not allow them to store enough fat reserves for the winter.";
$pandaFacts[] = "Most of the food a panda eats is not digested. For this reason, they can produce up to 62lbs. of droppings a day.";
$pandaFacts[] = "In China, pandas are considered national treasures.";
$pandaFacts[] = "Because pandas are so large, they do not have natural predators.\nHowever, snow leopards will prey on vulnerable panda cubs :(";
$pandaFacts[] = "Pandas' paws have something very close to a thumb which they use to hold bamboo stalks.";
$pandaFacts[] = "Giant pandas have a great sense of smell. Even at night they can find the best bamboo stalks by scent.";
$pandaFacts[] = "Pandas eat sitting down.";


$patrickFacts = array();
$patrickFacts[] = "I was born in Sweden!";
$patrickFacts[] = "I live in Manchester!";
$patrickFacts[] = "My favourite food isn't bamboo anymore, I love sweets!";
$patrickFacts[] = "My best friend is a polar bear called Rosie!";
$patrickFacts[] = "I like to help my friends with programming in my spare time!";
$patrickFacts[] = "I've never met another panda :(";
$patrickFacts[] = "I have lots of friends who are all different types of animals!";

if(!file_exists($phoneNumberFile)) {
	sendMessage($phoneNumber, "Hi, I'm Patrick the panda!\nAsk me questions!\nYou can ask where I am, what I'm doing, or how I am!\nYou can also ask me for jokes, panda facts, or facts about me!");
} else {

	$sentMessage = false;
	if (doesStringContain("where", $whatTheySaid)) {
		sendMessage($phoneNumber, "I'm currently at $wherePatrickIs");
		$sentMessage = true;
	}

	if (doesStringContain("what", $whatTheySaid)) {
		sendMessage($phoneNumber, "At the minute, I'm $whatsPatrickDoing");
		$sentMessage = true;
	}

	if (doesStringContain("how", $whatTheySaid)) {
		sendMessage($phoneNumber, "I'm feeling $howIsPatrick");
		$sentMessage = true;
	}

	if (doesStringContain("joke", $whatTheySaid)) {
		$joke = $jokes[array_rand($jokes)];
		sendMessage($phoneNumber, "$joke");
		$sentMessage = true;
	}

	if (doesStringContain("fact", $whatTheySaid) && (doesStringContain("panda", $whatTheySaid))) {
		$pandaFact = $pandaFacts[array_rand($pandaFacts)];
		sendMessage($phoneNumber, "$pandaFact");
		$sentMessage = true;
	}

	if (doesStringContain("about", $whatTheySaid) && (doesStringContain("you", $whatTheySaid))) {
		$patrickFact = $patrickFacts[array_rand($patrickFacts)];
		sendMessage($phoneNumber, "$patrickFact");
		$sentMessage = true;
	}

	if ($sentMessage == false) {
		sendMessage($phoneNumber, $doesntUnderstand);
	}

}	

file_put_contents($phoneNumberFile, "first message");

function sendMessage($to, $myMessage) {

	$key = "bb90f967264b04a2c9700f4135fee8cdcbbba16e";

	// Create a Clockwork object using your API key
	$clockwork = new Clockwork( $key );
	  
	// Setup and send a message
	$message = array( "to" => $to, "message" => $myMessage, "from" => "447860033750" );
	$result = $clockwork->send( $message );
	
	// Check if the send was successful
	if( $result["success"] ) {
	    echo "Message sent - ID: " . $result["id"];
	} else {
	    echo "Message failed - Error: " . $result["error_message"];
	}
}

file_put_contents('log/log.txt', var_export($_GET, true));
