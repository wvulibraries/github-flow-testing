<?php

include "foo.php";

?>
<html>

<head>
	<title>Github flow testing</title>
</head>

<body>

	<p>
		This file will outline changes that we want to test. A strike should be put through the list items that have been completed.
	</p>

	<ul>
		<li><strike>Add a PHP file to this project, include it, print the results below</strike></li>
		<li><strike>2 people make changes to both files, avoid conflicts</strike></li>
		<li>2 people make changes to included PHP file, intentionally create a conflict</li>
		<li>1 person adds a new feature, 1 person changes directory structure.</li>
	</ul>

	<hr />

	<p>David's new HTML</p>

	<h2>Testing Area</h2>

	<?php print $foo; ?>
	<br />
	<?php print $bar; ?>

</body>

</html>