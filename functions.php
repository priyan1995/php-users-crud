<?php



// function url(){
//   return sprintf(
//     "%s://%s%s",
//     isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
//     $_SERVER['SERVER_NAME'],
//     $_SERVER['REQUEST_URI']
//   );
// }

function homeurl()
{

    return "//" . $_SERVER['HTTP_HOST'] . "/php-users-crud";
}
