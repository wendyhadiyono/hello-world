<?php

namespace WendyHadiyono\Belajar;

class Welcome {
    private $name;

    public function sayHello(string $name = "Guest"): string {
        return "Hello world! My name is $this->name!";
    }
}