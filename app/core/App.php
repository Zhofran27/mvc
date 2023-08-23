<?php 

class App {
    protected $controller = 'Home'; 
    protected $method = 'index'; 
    protected $params = []; 

    public function __construct()
    {
        $alamat=$this->alamatURL();
        // var_dump($alamat);
        if(!empty($alamat[0])&&file_exists('../app/controllers/'.$alamat[0].'.php')) {
            $this -> controller = $alamat [0];
            unset($alamat[0]);
        }

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if(!empty($alamat)) {
            $this->params = array_values($alamat);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);

        if(isset($alamat[1])) {
            if(method_exists($this->controller, $alamat[1])){
                $this->method=$alamat[1];
                unset($alamat[1]);
            }
        }
    }

    public function alamatURL()
    {
        if(isset($_GET['url'])&& !empty($_GET['url'])) {
            $alamat = rtrim($_GET['url'],'/');
            $alamat = filter_var($alamat, FILTER_SANITIZE_URL);
            $alamat = explode('/', $alamat);
            return $alamat;
        } else {
            return [];
        }
    }
}

?>