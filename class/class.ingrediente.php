<?php


class Ingrediente {

    public DateTime $expireDate;
    public string $name;

    public function setExpireDate(DateTime $expireDate) {
        $this->expireDate = $expireDate;
    }

    public function getExpireDate(): DateTime
    {
        return $this->expireDate;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

?>