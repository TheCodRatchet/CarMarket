<?php

class CarList
{
    private array $carList;

    public function __construct(array $carList)
    {
        $this->carList = $carList;
    }

    public function getCarList(): array
    {
        return $this->carList;
    }

    public function carChoice(CarList $list)
    {
        echo "Welcome to Car dealer, Here You can find our car selection:" . PHP_EOL;
        foreach ($list->carList as $id => $car) {
            echo "[$id] - {$car->getCar()->getName()} ({$car->getCar()->getYear()})" . PHP_EOL .
                "Body Type: {$car->getCar()->getType()}" . PHP_EOL .
                "Fuel type: {$car->getCar()->getFuel()}" . PHP_EOL .
                "Gearbox type: {$car->getCar()->getGearbox()}" . PHP_EOL .
                "Asking Price: " . $car->getPrice() / 100 . "$" . PHP_EOL;
            echo "_______________________________________" . PHP_EOL;

        }
    }

    public function purchase(CarList $list, Buyer $buyer)
    {
        $purchase = true;

        while ($purchase) {

            $choice = (int)readline("Choose the car You want to buy: ");

            while (!isset($list->getCarList()[$choice])) {
                echo "Invalid selection!" . PHP_EOL;
                $choice = ((int)readline("Enter Your Choice:"));
            }

            if ($list->getCarList()[$choice]->getPrice() > $buyer->getWallet()) {
                echo "You don't have enough money to buy this car!" . PHP_EOL;
            } else {
                echo "Congratulations!!! You have successfully bought " .
                    $list->getCarList()[$choice]->getCar()->getName() . PHP_EOL;
                $buyer->setWallet(($buyer->getWallet() - $list->getCarList()[$choice]->getPrice()));
            }

            $continue = strtolower(readline("Do you want to purchase another car? [y/n]: "));
            while ($continue !== "y" && $continue !== "n") {
                echo "Invalid input!!!" . PHP_EOL;
                $continue = strtolower(readline("Do you want to purchase another car? [y/n]: "));
            }

            if ($continue == "y") {
                $purchase = true;
            } else {
                $purchase = false;
            }
        }
    }
}