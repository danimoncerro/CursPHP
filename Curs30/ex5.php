<?php 


// Traits - componente reutilizabile 
trait Message {
	public function hello() {
		echo "Hello ";
	}

	public function say($msg) {
		echo $msg;
	}
}


class A {
	use Message; // Utilizeaza traits :)

}


class B {
	use Message;
}	

$a = new A();
$a->say("Hello from class A using trait Message");

echo "<hr>";

$b = new B();
$b->say("Hello from class B using trait Message");