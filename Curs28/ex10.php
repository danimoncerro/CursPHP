<?php 


abstract class BasePayment {


	abstract public function connect();
	abstract public function setAmount();
	abstract public function setCurrency();
	abstract public function hasAmount(); 
	abstract public function transfer();

}

class BTPayment extends BasePayment(){

};


class Paypal extends BasePayment() {

}

//Logica de plata 
$bt = new BTPayment();

// seteaza suma  / valoarea 
$bt->setAmount(100);
$bt->setCurrency('LEI');

// verifica daca are bani suficienti pe cont
// daca da atunci fa transferul 
if ($bt->hasAmount(100)) {
	$bt->transfer();
} else {
	echo 'Nu ai bani suficienti.';
}
