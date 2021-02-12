<?php

namespace Doviz;

class Doviz{

    public $json;
    public $moneys;

    public function __construct()
    {
        $this->json = file_get_contents("https://api.genelpara.com/embed/doviz.json");
        $json = json_decode($this->json, true);
        $json_keys = array_keys($json);
        $this->moneys = $json_keys;
        return $this;
    }

    public function get($string)
    {
        $json = json_decode($this->json, true);
        $json_keys = array_keys($json);
        $this->moneys = $json_keys;
        if ($string == "all") {
            $result = $json;
        }else{
            $upper = mb_strtoupper($string, 'UTF-8');
            if (in_array($upper, $json_keys)) {
                $result = $json[$upper];
            }else {
                return false;
            }
        }
        
        return json_decode(json_encode($result));
    }

    public function convert($money = 0, $doviz = "usd")
    {
        $get_doviz = $this->get($doviz);
        $upper = mb_strtoupper($doviz, 'UTF-8');
        if ($get_doviz) {
            $array = [
                "money" => $money,
                $upper => number_format($get_doviz->satis, 2, ',', '.'),
                "TRYto$upper" => (number_format($money / $get_doviz->satis, 2, ',', '.')),
                $upper."toTRY" => (number_format($money * $get_doviz->satis, 2, ',', '.')),
            ];
            return json_decode(json_encode($array));
        }else {
            return false;
        }
    }
}