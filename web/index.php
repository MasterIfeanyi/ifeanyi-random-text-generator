<?php

$quotes = [

	[	"author" => "Anthony",
		"text" => "A whole 'nother world"
	],


	[	"author" => "Michael",
		"text" => "An investment in knowledge is wise"
	],

	[	"author" => "Ifeanyi",
		"text" => "World peace is attainable"
	],

	[	"author" => "DeShaun",
		"text" => "Black Men are strong"
	],

	[	"author" => "Ezekiel",
		"text" => "God spoke to Me"
	],

	[	"author" => "Chris",
		"text" => "Why make a billion dollars when you can make 3"
	],

	[	"author" => "David",
		"text" => "If I can make 20 dollars in 2 minutes, why not go for 100 dollars in 4 minutes"
	],
];


// $quote = $quotes[rand(0, count($quotes) - 1)];
$quote = $quotes[array_rand($quotes)];
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Random Text Generator</title>
</head>
<body>

	<h1>Random Text Generator </h1>
	<h5>Refresh to see changes </h5>
	
<blockquote>
	<h2>&ldquo; <?=$quoteText ?>&rdquo;</h2>
	<strong>- <?php echo $quoteAuthor; ?></strong>
</blockquote>



</body>
</html>
