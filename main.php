<?php 
require_once 'Client.php';
require_once 'Ingredient.php';
require_once 'Order.php';
require_once 'Payment.php';
require_once 'Pizza.php';

$client1 = new Client(1, 'Léa', 'Girard', '0636',1 );
$client2 = new Client(2, 'Anna', 'Einglirichter', '0748',3 );
$client3 = new Client(1, 'Luc', 'Pinson', '0879',2 );
$order1= new Order (1);
$order2= new Order (2);
$order3= new Order (3);
$pizza1= new Pizza (1, 'Américaine', 8.9,'chorizo', 12, 'oui');
$pizza2= new Pizza (2, 'BPM', 10,'merguez, sauce barbecue', 9, 'non');
$pizza3= new Pizza (2, 'pizza custom', 7.5,'', 19, 'non');
$ingredient1 = new Ingredient (1, 'oignons', 1.0, 'oui', 1);
$ingredient2 = new Ingredient (2, 'poivrons verts', 0.3, 'oui', 1);
$ingredient3 = new Ingredient (3, 'pommes de terres', 0.4, 'oui', 1);
$ingredient4 = new Ingredient (4, 'jambons cru', 0.4, 'oui', 1);
$ingredient5 = new Ingredient (5, 'merguez', 0.4, 'oui', 1);
$ingredient6 = new Ingredient (6, 'saumon fumé', 0.7, 'oui', 1);
$ingredient7 = new Ingredient (7, 'olives', 0.3, 'oui', 1);
$ingredient8 = new Ingredient (8, 'tomates fraîches', 0.3, 'oui', 1);
$payment1 = new Payment (1, 'CB', 1);
$payment2 = new Payment (2, 'Espece', 1);
$order1 = ($pizza1->getPrice() + $pizza2->getPrice());
$order2 = ($pizza2->getPrice() + $ingredient1->getPrice());
$order3 = ($pizza3->getPrice() + $ingredient8->getPrice() + $ingredient6->getPrice() + $ingredient7->getPrice() + $ingredient2->getPrice());

//scénario 1
echo "1) Le déroulé du scénario:" . PHP_EOL;
echo "La première cliente, " . $client1->getFirstName() .", sélectionne une pizza ".$pizza1->getName() . ", ainsi qu'une pizza ".$pizza2->getName() . PHP_EOL;
echo "Le prix total est de " . $order1 . " euros." . PHP_EOL;

echo "2) La deuxième cliente, " . $client2->getFirstName() .", sélectionne une pizza ". $pizza2->getName() . PHP_EOL;
echo "Cette pizza coûte " . $pizza2->getPrice() . " euros". PHP_EOL; 
echo "La cliente décide d'ajouter un ingrédient: " . $ingredient1->getName() . PHP_EOL;
echo "Le prix total est de " . $order2 . " euros." . PHP_EOL;

echo "3) Le troisième client, " . $client3->getFirstName() .", sélectionne une ". $pizza3->getName() . PHP_EOL;
echo "Il l'a customise en sélectionnant les ingrédients suivants: " . $ingredient8->getName() .", ". $ingredient6->getName() .", ". $ingredient7->getName() . ", ".$ingredient2->getName(). PHP_EOL; 
echo "La pâte coûte " . $pizza3->getPrice() . " euros". PHP_EOL; 
echo "Plus les ingrédients, le prix total est de " . $order3 . " euros." . PHP_EOL;

?>