<?php

$note = [2,4,3,1,7,6,9,8,10,5];
$nr_elemente = count($note);

function ultimele($nr) {
	global $note, $nr_elemente;
	for ($i=$nr_elemente-$nr; $i<$nr_elemente; $i++) {
		echo $note[$i].", ";
		//return $note[$i];
	}
}

function primele($nr) {
	global $note, $nr_elemente;
	for ($i=0; $i<$nr; $i++) {
		echo $note[$i].", ";
		//return $note[$i];
	}
}

echo "Returneaza ultimele 3 elemente: ".ultimele(3);
//echo ultimele(3);
//echo "<br> Returneaza primele 2 elemente: ".primele(2);

echo "<br> Returneaza primele 2 elemente: ";
echo primele(2);

/********************************/
$nr = 10; // se obtine printr-o functie : get_price();
echo "Nr are valoare $nr";

function test_echo(){
   echo "Test mesaj";
   // return "Functia s-a executat";
}

function test_return() {
   return "Test mesaj";
}

echo "Functia test_echo(): " . test_echo(); // Intai se executa functia. 
// Output:  Test mesaj Functia test_echo()

echo "Functia test_return(): " . test_return(); // Intai se executa functia, care returneaza un string
// Output: Functia test_return(): Test mesaj;



/***************/
function test() {
	return true;
	echo "Hello world";
}
test(); //nu va afisa nimic pt ca dupa return se opreste executia