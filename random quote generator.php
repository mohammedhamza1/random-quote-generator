<?php 

$quotes = [

	[
	'text' => 'A rose by any other name would smell as sweet.',
	'author' => 'William Shakespeare'
	],

	[
	'text' => 'Ask not what your country can do for you; ask what you can do for your country.',
	'author' => 'John Kennedy'
	],

	[
	'text' => 'Ask, and it shall be given you; seek, and you shall find.',
	'author' => 'the Bible'
	],

	[
	'text' => 'Genius is one percent inspiration and ninety-nine percent perspiration.',
	'author' => 'Thomas Edison'
	],

	[
	'text' => 'He travels the fastest who travels alone.',
	'author' => 'Rudyard Kipling'
	]
];

$quote = $quotes[array_rand($quotes)];

$quote_text = $quote['text'];

$quote_author = $quote['author'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RANDOME QUOTE GENERATOR</title>
</head>
<body>
	<h2>&ldquo; <?php echo $quote_text ?> &rdquo; </h2>
	<aside> ~ <?php echo $quote_author ?></aside>
</body>
</html>