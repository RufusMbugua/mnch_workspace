<?php

class Global_Model extends MY_Model {
	function __construct() {
		parent::__construct();

	}

	public function getSubPrograms() {
		$subPrograms = $this -> getAllSubPrograms();

		return $subPrograms;
	}

	public function getActivities($subprogram) {
		$activities = $this -> getActivitiesPerProgram($subprogram);
		return $activities;
	}

}