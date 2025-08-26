<?php 
    //CONSTANTES DO PROJETO E CAMINHOS IMPORTANTES
    if(!defined('ABSOLUTE_PATH')){
        define("ABSOLUTE_PATH",dirname(__FILE__).'/');
    }
    if(!defined('RAIZ_PROJETO')){
        define("RAIZ_PROJETO",'/adivinhanum/');
    }
	define('JOGO', ABSOLUTE_PATH . 'classes/Jogo.php');
	define('JOGADOR', ABSOLUTE_PATH . 'interface/Jogador.php');
?>