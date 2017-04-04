<?php 

/**

	public: vizibil peste tot ( exteriorul clasei, in clasa extinsa si in interiorul clasei)
	protected: vizibil doar in interiorul clasei si in clasa extinsa
	private: vizibil doar in interiorul clasei; 

**/


class User {

	protected $firstname = '';
	protected $lastname = '';
	private $secret = '123456'; // vizibil doar in interiorul clasei

	public function __construct($_firstname, $_lastname) {
		$this->setFirstname($_firstname);
		$this->setLastname($_lastname);	
	}

	// Seteaza proprietatea $firstname 
	public function setFirstname($_firstname) {
		if (strlen($_firstname) < 3) {
			echo "Eroare setare firstname, minim 4 caractere";
		} else {
			$this->firstname = ucfirst($_firstname);
		}
	}

	// citirea proprietatii $firstname
	public function getFirstname() {
		return $this->firstname;
	}

	public function setLastname($_lastname) {
		$this->lastname = ucfirst($_lastname);
	}

	public function getLastname() {
		return $this->lastname;
	}

	// returneaza numele complet 
	public function getFullname() {
		return 'User fullname: '. $this->firstname . ' ' . $this->lastname;
	}

	public function getSecret() {
		return $this->secret;
	}


}