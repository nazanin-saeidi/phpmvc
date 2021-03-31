<?php
    class Pages extends Controller {
        public function __construct() {
            
        }

        public function index() {
            $data = [
                'title' => 'Welcome to My phpmvc application!'
            ];

            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About Me!'
            ];

            $this->view('pages/about', $data);
        }

    }