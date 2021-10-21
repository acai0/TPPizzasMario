<?php 
require_once 'client.php';
require_once 'ingredient.php';
require_once 'order.php';
require_once 'payment.php';
require_once 'pizza.php';
require_once 'stock.php';

$client = new Client(1, 'Lea', 'Cai', '0636',1 );
$client2 = new Client(2, 'Anna', 'Lin', '0748',1 );
$order= new Order (1);
$order2= new Order (2);
$pizza= new Pizza (1, 'Americaine', 8.9,'chorizo', 1, 1);
$pizza2= new Pizza (2, 'BPM', 10,'merguez, sauce barbecue', 2, 1);
$ingredient = new Ingredient (1, 'oignon', 1.0, 1);
$ingredient2 = new Ingredient (2, 'poivron', 0.3, 1);
$payment = new Payment (1, 'CB', 1);
$payment2 = new Payment (2, 'Espece', 1);
$order = ($pizza->price + $ingredient->getPrice());

//var_dump ($client);
//echo "$order->FullPrice";

echo "Le dérouler du scénario";
echo "La premiere cliente,$client->firstName,  sélectionne une pizza $pizza->name. ". PHP_EOL;
echo "Cette pizza coute $pizza->price." . PHP_EOL;
echo "Léa sélectionne un extra: $ingredient->name." . PHP_EOL;
echo "Le prix total est de $order." .PHP_EOL;
?>