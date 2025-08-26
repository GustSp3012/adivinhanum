<?php 
include_once "../config.php";
include JOGO;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $v1=$_GET['v1'];
   $v2=$_GET['v2'];
   $v3=$_GET['v3'];
   $v4=$_GET['v4'];
   $v5=$_GET['v5'];
   try{
        if(empty($v1)||empty($v2)||empty($v3)||empty($v4)||empty($v5)){
            throw new Exception("Você não preencheu todos os campos.Tente novamente"); 
        }
        else{
            $game= new Jogo;
            if($game->receber($v1,$v2,$v3,$v4,$v5)>0){
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['numero']=$game->receber($v1,$v2,$v3,$v4,$v5);
                header("Location:".RAIZ_PROJETO."adivinhei.php");
                exit();
            }else{
                throw new Exception("Voce não marcou todos os inputs");
            }

        }
   }catch (Exception $e) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['mensagem']=$e->getMessage();
   }

   
}else{
    echo "form na enviou";
}










?>