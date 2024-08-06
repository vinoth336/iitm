## Requirements

- PHP > 8.2
- SQLite3 extension for PHP

## Installation

### Prerequisites

Ensure the following extensions are installed on your system:
- `php-sqlite3`
- `php8.2-sqlite3`

### Steps

1. **Clone the Repository**

   Clone the master branch of the repository:
   ```sh
   git clone -b master <repository_url>

2. **Move to Project Folder**

   ```
   cd iitm

3. **Set Folder Permissions**
   ``` 
   sudo chown -R www-data:www-data storage
   sudo chown -R www-data:www-data bootstrap/cache
   sudo chmod -R 775 storage
   sudo chmod -R 775 bootstrap/cache
   
5. **Install Dependencies**
   ```
   composer install

6. **Serve the Application**
   ```
   php artisan serve
