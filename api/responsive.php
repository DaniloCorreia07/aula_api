<?php   
    class Response{
        public static function resposta($status=200, $mensage='sucess',$data=null){
            //Corpo das resp
            header('Content-Type: application/json');

            return json_encode([
                'status' => $status,
                'mensagem' => $mensage,
                'dados' => $data,
            ]);
        }
    }
?>