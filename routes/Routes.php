<?php
    namespace routes;
    class Routes{
        private $routes = [];

        public function add($method, $path, $action){
            $this->routes[]=[
                'method'=>$method,
                'path'=>$path,
                'action'=>$action
            ];
            error_log("Rota registrada" . json_encode(end($this->routes)));
        }

        public function handleRequest(){
            $method = $_SERVER['REQUEST_METHOD'];

            $basePath = dirname($_SERVER['SCRIPT_NAME']);
            $path = str_replace($basePath, '',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)) ;

            error_log("Método recebido: $method");
            error_log("Caminho recebido: $path");

            //VERIFICAR AS ROTAS
            foreach($this->routes as $r){
                if($r['method']==$method && $r['path']==$path){
                    // é metodo ou função dinâmica que permite invocar funções ou métodos de uma classe

                    //action é atributo que menciona "Qual a classe"
                    call_user_func($r['action']);
                    return;
                }
            }
            http_response_code(404);
            echo json_encode(['error'=>'Rota não encontrada'.$path.$method]);
        }
    }
?>