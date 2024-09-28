<?php
if(isset($_POST['esubmit'])) {
// Store a string into the variable which
// need to be Encrypted
$date = $_POST["ekey"];
$simple_string = $date;

// Display the original string


// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '3103560120003214';

// Store the encryption key
$encryption_key = "@$-|$-";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);

// Display the encrypted string


// Non-NULL Initialization Vector for decryption
$decryption_iv = '3103560120003214';

// Store the decryption key
$decryption_key = "@$-|$-";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
		$decryption_key, $options, $decryption_iv);

// Display the decrypted string
echo "<h1>Original String: " . $simple_string . "</h1><br>";
echo "<h1>Encryption String: " . $encryption . "</h1><br>";

echo "<h1>Decryption String: " . $decryption . "</h1>";




}






if(isset($_POST['dsubmit'])) {
    // Store a string into the variable which
    // need to be Encrypted
    $data = $_POST["dkey"];
    $simple_string = $data;
    
    // Display the original string
  
    
    // Store the cipher method
    $ciphering = "AES-128-CTR";
    
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    
    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '3103560120003214';
    
    // Store the encryption key
    $encryption_key = "@$-|$-";
    
    // Use openssl_encrypt() function to encrypt the data
    $encryption = $data;
    
    // Display the encrypted string
   
    // Non-NULL Initialization Vector for decryption
    $decryption_iv = '3103560120003214';
    
    // Store the decryption key
    $decryption_key = "@$-|$-";
    
    // Use openssl_decrypt() function to decrypt the data
    $decryption=openssl_decrypt ($encryption, $ciphering, 
            $decryption_key, $options, $decryption_iv);
    
    // Display the decrypted string


echo "<h1>Original String: " . $simple_string . "</h1><br>";
echo "<h1>Encryption String: " . $encryption . "</h1><br>";

echo "<h1>Decryption String: " . $decryption . "</h1>";




    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>Encryption / Decryption</h1>
<form method="post" action="">
<label>for Encryption</label>
<textarea name="ekey" >
</textarea>
<input type="submit" name='esubmit' value='submit'>
</form>
<form method="post" action="">
<label>for Decryption</label>
<textarea name="dkey" >
</textarea>
<input type="submit" name='dsubmit' value='submit'>
</form>

</body>
</html>