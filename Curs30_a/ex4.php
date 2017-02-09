<?php 


// Traits - componente reutilizabile 

class A {
	public function hello() {
		echo "Hello ";
	}
}


class B {
	public function hello() {
		echo "Hello ";
	}
}

$a = new A();
$a->hello();

echo "<hr>";

$b = new B();
$b->hello();