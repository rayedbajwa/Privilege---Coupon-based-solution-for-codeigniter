<?php
header('Content-Type: application/json');
class Fb extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
       
    }

    function getData()
    {

        $config=array( 
            'appId'  => '1442367142672909',
            'secret' => 'e319b03412776eaf9a496d4e94ef59b4');
        $this->load->library('facebook',$config);

  $access_token=$this->facebook->getAccessToken();
  

        $user = $this->facebook->getUser();
   
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me',array('access_token'=>$access_token));
              
            } catch (FacebookApiException $e) {
               
               echo $e;
              
               
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl();
            $this->session->sess_destroy();
        }

      $this->session->set_userdata($data);
      
     echo json_encode(array("fnam"=> $data['user_profile']['name'],"unam"=> $data['user_profile']['username'],"email"=> $data['user_profile']['email']));
          
    }
} 

?>