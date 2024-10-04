<?php
class Product {
    public $name;
    public $description;
    public $cost;
    public $country;

    public function about_product() {
        return "Имя: $this->name<br>
        Описание: $this->description<br>
        Цена: $this->cost<br>
        Страна производиетля: $this->country<br>";
    }

    public function new_information($name, $description, $cost, $country) {
        $this->name = $name;
        $this->description = $description;
        $this->cost = $cost;
        $this->country = $country;
        return $this;
    }

    public function new_cost($cost) {
        return $this->cost = $cost;  
    }
}
?>
