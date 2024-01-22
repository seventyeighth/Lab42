<?php
	function customAutoloader($class_name) {
	    $file_path = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
	    if (file_exists($file_path)) {
	        include $file_path;
	    }
	}

	spl_autoload_register('customAutoloader');

	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	    // Get the selected platform and URL from the form
		$platform = $_POST["platform"];
		$url      = $_POST["url"];

	    // Create instances of models
	    $urlModel = new \Models\UrlModel(); // Use full namespace
	    $platformModel = new \Models\PlatformModel(); // Use full namespace

	    // Get platform-specific parameters
	    $params = $platformModel->getPlatformParams($platform);

	    // Apply the parameters to the URL
	    foreach ($params as $key => $value) {
	        $url = $urlModel->addOrUpdateUrlParam($url, $key, $value);
	    }

	    // Create an instance of the view controller
	    $viewController = new \Controllers\ViewController(); // Use full namespace

	    // Display the result
	    $viewController->displayResult($url);
	} else {
	    // Display the form if not submitted
	    $viewController = new \Controllers\ViewController(); // Use full namespace
	    $viewController->displayForm();
	}
?>