<?php

class Cozinha {

    private int $timeOpen;
    private int $timeClose;
    private string $kitchenName;
    private string $mainFood;
    public array $ingredients;

    public function setTimeOpen(int $time) {
      $this->timeOpen = $time;
    }
  
    public function getTimeOpen(): int {
        return $this->timeOpen;
    }

    public function setTimeClose(int $time) {
        $this->timeClose = $time;
    }
    
      public function getTimeClose(): int {
        return $this->timeClose;
    }

    public function setKitchenName(string $kitchenName) {
        $this->kitchenName = $kitchenName;
    }
    
    public function getKitchenName(): string {
        return $this->kitchenName;
    }

    public function setMainFood(string $mainFood) {
        $this->mainFood = $mainFood;
    }
    
    public function getMainFood(): string {
        return $this->mainFood;
    }

    public function addIngredient(Ingrediente $ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function __toString() {
        $ingredients = "";
        foreach ($this->ingredients as $ingredient) {
            $ingredients .= " - " . $ingredient->getName() . "<br> ";
        }
        return "Nome da Cozinha: " . $this->kitchenName . "<br>Horario de Abertura: " . $this->timeOpen . "<br> Horario de Fechamento: " . $this->timeClose . "<br>Prato Principal: " . $this->mainFood . "<br> Ingredientes: " . $ingredients;
    }
    
}

?>