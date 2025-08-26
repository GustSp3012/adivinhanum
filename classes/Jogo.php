<?php    
include JOGADOR;

class Jogo implements Jogador {
    // atributos
    private $acertos;
    private $resp1;
    private $resp2;
    private $resp3;
    private $resp4;
    private $resp5;

    // interface
    public function receber($a, $b, $c, $d, $e) {
        $this->adivinhar($a, $b, $c, $d, $e);
        return $this->acertos;
    }

    // métodos internos
    private function adivinhar($v1, $v2, $v3, $v4, $v5) {
        if ($v1 === "sim") {
            $this->setResp1(true);
            $this->setAcertos(1);
        }
        if ($v2 === "sim") {
            $this->setResp2(true);
            $this->setAcertos($this->getAcertos() + 2);
        }
        if ($v3 === "sim") {
            $this->setResp3(true);
            $this->setAcertos($this->getAcertos() + 4);
        }
        if ($v4 === "sim") {
            $this->setResp4(true);
            $this->setAcertos($this->getAcertos() + 8);
        }
        if ($v5 === "sim") {
            $this->setResp5(true);
            $this->setAcertos($this->getAcertos() + 16);
        }
    }

    // construtor
    function __construct() {
        $this->acertos = 0;
        $this->resp1 = false;
        $this->resp2 = false;
        $this->resp3 = false;
        $this->resp4 = false;
        $this->resp5 = false;
    }

    // getters
    function getAcertos() { return $this->acertos; }
    function getResp1() { return $this->resp1; }
    function getResp2() { return $this->resp2; }
    function getResp3() { return $this->resp3; }
    function getResp4() { return $this->resp4; }
    function getResp5() { return $this->resp5; }

    // setters
    function setAcertos($r) { $this->acertos = $r; }
    function setResp1($r) { $this->resp1 = $r; }
    function setResp2($r) { $this->resp2 = $r; }
    function setResp3($r) { $this->resp3 = $r; }
    function setResp4($r) { $this->resp4 = $r; }
    function setResp5($r) { $this->resp5 = $r; }
}
?>
