<?php
function take_user_to_codechef_permissions_page ($config)
{

    $params = array('response_type'=>'code', 'client_id'=> $config['client_id'], 'redirect_uri'=> $config['redirect_uri'], 'state'=> 'xyz');
    header('Location: ' . $config['authorization_code_endpoint'] . '?' . http_build_query($params));
    die();
}
#main funtion defiantion
function main(){

    $config = array('client_id'=> '95551f185d0d03111febb64269143405',
        'client_secret' => 'ffc81d6e5341f30ce5dc5f57aac8ffdf',
        'api_endpoint'=> 'https://api.codechef.com/',
        'authorization_code_endpoint'=> 'https://api.codechef.com/oauth/authorize',
        'access_token_endpoint'=> 'https://api.codechef.com/oauth/token',
        'redirect_uri'=> 'http://localhost/code/re.php',
        'website_base_url' => 'http://localhost/code/lo.html');

    take_user_to_codechef_permissions_page($config);
    }
#main function calling
main();
?>