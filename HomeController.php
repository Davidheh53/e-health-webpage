<?php

class HomeController {
    public function index() {
        try {
            // Load the header view
            $this->loadView('header');
            
            // Load the home view
            $this->loadView('home');
            
            // Load the footer view
            $this->loadView('footer');
        } catch (Exception $e) {
            echo 'Error loading view: ',  $e->getMessage(), "\n";
        }
    }

    private function loadView($viewName) {
        $filePath = "../src/views/{$viewName}.php";
        if (file_exists($filePath)) {
            include $filePath;
        } else {
            throw new Exception("View file not found: {$filePath}");
        }
    }
}