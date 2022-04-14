<?php
include "./phpseclib3/Crypt/AES.php";

$aes = new Crypt_AES();
$aes->setKey('20220001');
$enc = base64_encode($aes->encrypt("암호화할 내용"));
echo 'encrypted: '.$enc;

$cipher = new Crypt_AES();
$cipher->setKey('20220001');
echo 'decrypted: '. $cipher->decrypt(base64_decode($enc));

?>
