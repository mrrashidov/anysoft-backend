<?php

namespace App\Http\Controllers;

class HomeController
{
    public function test(){
        return "H";
    }
    public function pull(){
        $secret = '2001Asadbek';

        // Verify the authenticity of the webhook request
        if ($_SERVER['HTTP_X_HUB_SIGNATURE'] !== 'sha1=' . hash_hmac('sha1', file_get_contents('php://input'), $secret)) {
            header('HTTP/1.1 403 Forbidden');
            echo "Invalid webhook request";
            exit;
        }

        // Pull the latest changes from the GitHub repository
        exec('git fetch');
        exec('git reset --hard origin/main');

        // Install any new dependencies
        exec('composer install');

        // Run database migrations
        exec('php artisan migrate');

        // Restart any services as needed
        exec('systemctl restart httpd');

        // Output a success message
        echo "Deployment successful";
    }
}
