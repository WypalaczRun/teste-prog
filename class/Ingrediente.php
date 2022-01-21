<?php

namespace Restaurante;

use DateTime;

class Ingrediente {

    public DateTime $expireDate;
    public string $name;

    public function __construct(string $name, DateTime $expireDate) {
        $this->setName($name);
        $this->setExpireDate($expireDate);
    }
    public function setExpireDate(DateTime $expireDate): void {
        $this->expireDate = $expireDate;
    }

    public function getExpireDate(): DateTime {
        return $this->expireDate;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

}

?>