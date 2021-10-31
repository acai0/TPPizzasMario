<?php 
require_once 'Client.php';
require_once 'Ingredient.php';
require_once 'Order.php';
require_once 'Payment.php';
require_once 'Pizza.php';
//require_once 'stock.php';

$client = new Client(1, 'Lea', 'Cai', '0636',1 );
$client2 = new Client(2, 'Anna', 'Lin', '0748',1 );
$order= new Order (1);
$order2= new Order (2);
$pizza= new Pizza (1, 'Americaine', 8.9,'chorizo', 1,'oui', 1);
$pizza2= new Pizza (2, 'BPM', 10,'merguez, sauce barbecue', 2, 'oui', 1);
$ingredient = new Ingredient (1, 'oignon', 1.0, 'oui', 1);
$ingredient2 = new Ingredient (2, 'poivron', 0.3, 'oui', 1);
$payment = new Payment (1, 'CB', 1);
$payment2 = new Payment (2, 'Espece', 1);
$order = ($pizza->getPrice() + $ingredient->getPrice());
$order2 = ($pizza2->getPrice() - $ingredient->getPrice());

echo "1) Le dérouler du scénario:" . PHP_EOL;
echo "La premiere cliente, " . $client->getFirstName() .", sélectionne une pizza ".$pizza->getName() . PHP_EOL;
echo "Cette pizza coute " . $pizza->getPrice() . " euros". PHP_EOL;
echo "La cliente sélectionne un extra:" . $ingredient->getName() . PHP_EOL;
echo "Le prix total est de " . $order . " euros" . PHP_EOL;

echo "2) La deuxième cliente, " . $client2->getFirstName() .", sélectionne une pizza ". $pizza2->getName() . PHP_EOL;
echo "Cette pizza coute " . $pizza2->getPrice() . " euros". PHP_EOL; 
echo "La cliente décide d'enlever un ingrédient: " . $ingredient->getName() . PHP_EOL;
echo "Le prix total est de " . $order2 . " euros" . PHP_EOL;

?>