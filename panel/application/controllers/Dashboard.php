<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->library("session");
        $this->load->helper('url');
        $this->viewFolder="dashboard_v";
    }

    public function index()
	{
        $viewData = new stdClass();
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder= "list";

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

}
