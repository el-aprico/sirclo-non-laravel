<?php

/**
 * Author : Elka
*/

class Cart
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function tambahProduk(string $name, int $qty): self
    {
        if (!isset($this->products[$name])) {
            $this->products[$name] = 0;
        }
        $this->products[$name] += $qty;
        return $this;
    }

    public function hapusProduk(string $name): self
    {
        if (isset($this->products[$name])) {
            unset($this->products[$name]);
        }
        return $this;
    }

    public function tampilkanCart()
    {
        if ($this->products) {
            echo '<pre>';
            foreach ($this->products as $key => $value) {
                echo $key.' ('.$value.')<br/>';
            }
        }
    }
}
$keranjang = new Cart();
$keranjang->tambahProduk("Pisang Hijau", 2);
$keranjang->tambahProduk("Semangka Kuning", 3);
$keranjang->tambahProduk("Apel Merah", 1);
$keranjang->tambahProduk("Apel Merah", 4);
$keranjang->tambahProduk("Apel Merah", 2);
$keranjang->hapusProduk("Semangka Kuning");
$keranjang->hapusProduk("Semangka Merah");
$keranjang->tampilkanCart();
