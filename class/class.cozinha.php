<?php

class Cozinha {

    private int $timeOpen;
    private int $timeClose;
    private string $kitchenName;
    private string $mainFood;
    public array $ingredients;

    public function setTimeOpen(int $time): void {
      $this->timeOpen = $time;
    }
  
    public function getTimeOpen(): int {
        return $this->timeOpen;
    }

    public function setTimeClose(int $time): void {
        $this->timeClose = $time;
    }
    
      public function getTimeClose(): int {
        return $this->timeClose;
    }

    public function setKitchenName(string $kitchenName): void {
        $this->kitchenName = $kitchenName;
    }
    
    public function getKitchenName(): string {
        return $this->kitchenName;
    }

    public function setMainFood(string $mainFood): void {
        $this->mainFood = $mainFood;
    }
    
    public function getMainFood(): string {
        return $this->mainFood;
    }
    public function getAllIngredients(): string {
        $ingredients = "";
        foreach ($this->ingredients as $ingredient) {
            $ingredients .= " - " . $ingredient->getName() . "<br> ";
        }
        return $ingredients;
    }
    public function createKitchen($kitchenName, $mainFood, $timeOpen, $timeClose): void {
        $this->kitchenName = $kitchenName;
        $this->mainFood = $mainFood;
        $this->timeOpen = $timeOpen;
        $this->timeClose = $timeClose;
    }
    public function addIngredient(Ingrediente $ingredient): void {
        $this->ingredients[] = $ingredient;
    }

    public function __toString(): string {
        return "Nome da Cozinha: " . $this->kitchenName . "<br>Horario de Abertura: " . $this->timeOpen . "<br> Horario de Fechamento: " . $this->timeClose . "<br>Prato Principal: " . $this->mainFood . "<br> Ingredientes: " . $this->getAllIngredients();
    }
    
}

?>