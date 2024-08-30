#!/bin/bash

# Run Laravel setup commands

# Install PHP dependencies using Composer
composer install

# Copy the example environment file to .env
cp .env.example .env

# Generate the application key
php artisan key:generate

# Create symbolic link for storage directory
php artisan storage:link

# Install Node.js dependencies
npm install

# Start the Laravel development server on port 8000, accessible to all IPs
php artisan serve --host=0.0.0.0 --port=8000
