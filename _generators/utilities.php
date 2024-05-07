<?php

class ProvisionedUser{
    public string $apiUser;
    public string $apiKey;
}
function generateBasicToken(): string {
   $user = new ProvisionedUser();
   $user->apiUser = '';
    $user->apiKey = '';
    return base64_encode($user->apiUser.':'.$user->apiKey);
}

function generateUUIDV4(): string {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
echo generateUUIDV4();