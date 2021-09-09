 
<?php

/**
 * simple method to encrypt or decrypt a plain text string
 * initialization vector(IV) has to be the same when encrypting and decrypting
 * 
 * @param string $action: can be 'encrypt' or 'decrypt'
 * @param string $string: string to encrypt or decrypt
 *
 * @return string
 */
function enc_dec($action, $string) 
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == '1' ) 
	{
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
	else if( $action == '0' ) 
	{
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


global $home;
$home=enc_dec("1","home");

global $transactions;
$transactions=enc_dec("1","transactions");

global $debitcard;
$debitcard=enc_dec("1","debitcard");

global $moneytransfer;
$moneytransfer=enc_dec("1","moneytransfer");

global $transactions;
$transactions=enc_dec("1","transactions");

global $signout;
$signout=enc_dec("1","signout");


//$plain_txt = "This is my plain text";
//echo "Plain Text =" .$plain_txt. "\n";
//$encrypted_txt = enc_dec('1', $plain_txt);
//echo "Encrypted Text = " .$encrypted_txt. "\n";
//$_SESSION["vl"]=$encrypted_txt;
//$decrypted_txt = enc_dec('0', $encrypted_txt);
//echo "Decrypted Text =" .$decrypted_txt. "\n";
//if ( $plain_txt === $decrypted_txt ) echo "SUCCESS";
//else echo "FAILED";
//echo "\n";


//<a href="str.php?str=<?php echo $_SESSION["vl"];


?>



</body>
</html>
