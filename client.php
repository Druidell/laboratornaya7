<?php
class Client {
    public $name;
    public $lastOrder;
    public $allMoney;

    public function about_client() {
        return "Имя: $this->name<br>
        Последняя покупка: $this->lastOrder<br>
        Деньги: $this->allMoney<br>";
    }

    public function last_order($lastOrder) {
        return $this->lastOrder = $lastOrder;
    }

    public function money($amount) {
        return $this->allMoney += $amount;
    }
}
?>
