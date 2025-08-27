<?php
include JOGADOR;

class Jogo implements Jogador {

    public function receber($a, $b, $c, $d, $e) {
        // normaliza e calcula
        return $this->adivinhar($a, $b, $c, $d, $e);
    }

    private function adivinhar($v1, $v2, $v3, $v4, $v5) {
        $total = 0;
        $resps = [$v1, $v2, $v3, $v4, $v5];
        $pesos = [1, 2, 4, 8, 16];

        foreach ($resps as $i => $r) {
            $val = is_string($r) ? strtolower($r) : '';
            if ($val === 'sim') {
                $total += $pesos[$i];
            }
        }
        return $total;
    }
}
