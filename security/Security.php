<?php

class Security {

    function PassVerify($pass, $hashpass){
        if(password_verify($pass, $hashpass)){
            return true;
        }else{
            return false;
        }
        return false;
    }
}

// $hash = password_hash( "admin", PASSWORD_ARGON2I);
// $argon2i$v=19$m=65536,t=4,p=1$MXBJOVFUWFBjTWZQaXo4VA$pe/0aNW4G1tNk9z+SmoFgRKCWAOss2U4cZ6L7QENqUg
