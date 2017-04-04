<?php

require 'User.php';

// extinderea unei clasei 
class Student extends User {

	protected $faculty = '';

	public function setFaculty($_faculty){
		$this->faculty = $_faculty;
	}

	public function getFaculty(){
		return $this->faculty;

	}

	// returneaza numele complet 
	public function getFullname() {
		return 'Student fullname: ' . $this->firstname . ' ' . $this->lastname;
	}


	public function getUserSecret() {
		return $this->getSecret(); // eroare
	}

}


