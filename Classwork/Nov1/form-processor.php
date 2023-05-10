<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "______@rit.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "______@rit.edu";
$subject = "________________________";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$______ = Trim(stripslashes($_POST['______'])); 
$______ = Trim(stripslashes($_POST['______'])); 
$______ = Trim(stripslashes($_POST['______'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$______ = $_POST['______']; 
$______ = $_POST['______']; 
$______ = $_POST['______']; 
$______ = $_POST['______']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$______ = $_POST['______']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$______ = Trim(stripslashes($_POST['______'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "______: ";	//...a label
$body .= $______;			//...a variable
$body .= "<br>\n";		//...a new line

$body .= "______: ";	//...a label
$body .= $______;		//...a variable
$body .= "<br>\n";		//...a new line

$body .= "______: ";//...a label
$body .= $______;		//...a variable
$body .= "<br>\n<hr>";		//...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "______________________________: <br>\n";	// a heading for your checkbox section

if (isset($______)) {			// a checkbox variable
	$body .= "- " . $______ . "<br>\n";	// the same checkbox variable
}
if (isset($______)) {				// a checkbox variable
	$body .= "- " . $______ . "<br>\n";		// the same checkbox variable
}
if (isset($______)) {			// a checkbox variable
	$body .= "- " . $______ . "<br>\n";		// the same checkbox variable
}
if (isset($______)) {				// a checkbox variable
	$body .= "- " . $______ . "<br>\n";		// the same checkbox variable
}
$body .= "<br>\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "______________________________: <br>\n";	// a heading for your radio button section
$body .= "- " . $______ . "<br>\n";	// the (one) radio button variable

// This is for your TEXTAREA
$body .= "<hr>______________________________: <br>\n";	// a heading for your text area
$body .= $______;						// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank you ________________________</title>
</head>
<body>

	<h1>Thank you for contacting ________________________</h1>

	<h2>Thank You <?php echo $name; ?></h2>
	<p>Your infomation has been sent.</p>

	<code>
<?php echo $body; ?>
	</code>

	<p>________________________.  <a href=".">Back to the contact page</a>.</p>

</body>
</html>