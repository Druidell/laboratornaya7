<?php
class Product {
    public $name;
    public $description;
    public $price;
    public $country;

    public function about_product() {
        return "Имя: $this->name<br>
        Описание: $this->description<br>
        Цена: $this->price<br>
        Страна производиетля: $this->country<br>";
    }

    public function new_information($name) {
        $this->name = $name;
    }

    public function new_cost($price) {
        $this->price = $price;  
    }
}
?>