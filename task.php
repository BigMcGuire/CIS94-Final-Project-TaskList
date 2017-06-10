<?php

class Task {
  
	private $description;
	private $completed;
	private $date_created;
	private $date_completed;
	private $txt;
	private $myfile;
	
	public function getDescription() {
		return $this->description;
	}
	public function setDescription($desc) {
		$this->description = $desc;
	}
	
	public function getCompleted() {
		return $this->completed;
	}
	public function setCompleted($comp) {
		$this->completed = $comp;
	}
	
	public function getDateCreated() {
		return $this->date_created;
	}
	public function setDateCreated($datec) {
		$this->date_created = $datec;
	}
	
	public function getDateCompleted() {
		return $this->date_completed;
	}
	public function setDateCompleted($datecompl) {
		$this->date_completed = $datecompl;
	}
		
}