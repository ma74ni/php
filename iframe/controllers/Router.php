<?php
class Router{
    public $route;
    public function __construct($route){
        
        if (!isset($_SESSION)) session_start();
        if(!isset($_SESSION['ok'])) $_SESSION['ok'] = false;


        if($_SESSION['ok']){
            //Aquí va la programación de la webapp;
            $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';

            $controller = new ViewController();
            
            switch($this->route){
                case 'home':
                    $controller->load_view('home');
                    break;
                case 'movieseries':
                    $controller->load_view('movieseries');
                    break;
                case 'usuarios':
                    $controller->load_view('users');
                    break;
                case 'status':
                    if( !isset( $_POST['r'] ) )  $controller->load_view('status');
                    else if( $_POST['r'] == 'status-edit' )  $controller->load_view('status-edit');
                    else if( $_POST['r'] == 'status-delete' )  $controller->load_view('status-delete');
                    else if( $_POST['r'] == 'status-add' )  $controller->load_view('status-add');
                    break;
                
                case 'salir':
                    $user_session = new SessionController();
                    $user_session->logout();
                    break;
                default:
                    $controller->load_view('error404');
                    break;
            }

        }else{
            if (!isset($_POST['user']) && !isset($_POST['pass'])) {
                //Entra al formulario de autenticación
                $login_form = new ViewController();
                $login_form->load_view('login');
            } else {
                $user_session = new SessionController();
                $session = $user_session->login($_POST['user'], $_POST['pass']);

                if(empty($session)){
                    //El usuario y el password son incorrectos
                    $login_form = new ViewController();
                    $login_form->load_view('login');
                    header('Location: ./?error=El usuario ' . $_SESSION['ok'] . ' y el password proporcionado no coinciden');
                }
                else{
                    //El usuario y el password son correctos';
                    $_SESSION['ok'] = true;
                    foreach ($session as $row) {
                        $_SESSION['user'] = $row['user'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['birthday'] = $row['birthday'];
                        $_SESSION['pass'] = $row['pass'];
                        $_SESSION['role'] = $row['role'];
                    }
                    header('Location: ./');
                }
            }
        }
    }
}