<?php

namespace WendyHadiyono\Belajar;

class Welcome {
    private string $name;

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return "Hello world! My name is $this->name!";
    }
}