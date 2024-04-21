<?php

function query(string $query, array $data = [])
{   
    // Define database connection parameters
    $host = 'localhost';
    $port = '8888';
    $dbname = 'myblog_db';
    $username = 'root';
    $password = 'root';

    try {
        // Create a PDO instance
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
        $con = new PDO($dsn, $username, $password);
        
        // Set PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $con->prepare($query);
        $stm->execute($data);

         // Check if the query is a SELECT query
         if (stripos(trim($query), 'SELECT') === 0) {
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            // For non-SELECT queries, return true if the query executed successfully
            return true;
        }

    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        return false;
    }
}

function esc($str)
{
    return htmlspecialchars($str ?? '');
}

function authenticate($row)
{
    $_SESSION['USER'] = $row;
}

function logged_in()
{
    if(!empty ($_SESSION['USER']))
        return true; 

    return false; 
}

function redirect($page)
{
    header("Location: $page");
    die;
}

function old_value($key)
{
    if(!empty($_POST[$key]))
        return $_POST[$key];
    
    return "";
}

function str_to_url($url)
{
    $url = str_replace("'", "", $url);
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url);

    return $url;
}


//create_tables();
function create_tables()
{   
    // Define database connection parameters
    $host = 'localhost';
    $port = '8888';
    $dbname = 'myblog_db';
    $username = 'root';
    $password = 'root';

    try {
        // Create a PDO instance
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
        $con = new PDO($dsn, $username, $password);
        
        // Set PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the database if it doesn't exist
        $query = "CREATE DATABASE IF NOT EXISTS {$dbname}";
        $stm = $con->prepare($query);
        $stm->execute();

        $query = "USE {$dbname}";
        $stm = $con->prepare($query);
        $stm->execute();

        // Create the 'users' table
        $query = "CREATE TABLE IF NOT EXISTS users (
            id INT PRIMARY KEY AUTO_INCREMENT, 
            username VARCHAR(50) NOT NULL, 
            email VARCHAR(100) NOT NULL,
            password VARCHAR(255) NOT NULL,
            image VARCHAR(1024),
            date DATETIME DEFAULT CURRENT_TIMESTAMP,
            role VARCHAR(10) NOT NULL
        )";
        $stm = $con->prepare($query);
        $stm->execute();

        // Add keys to the 'users' table
        $query = "ALTER TABLE users
                  ADD UNIQUE KEY email (email)";
        $stm = $con->prepare($query);
        $stm->execute();

        // Create the 'categories' table
        $query = "CREATE TABLE IF NOT EXISTS categories (
            id INT PRIMARY KEY AUTO_INCREMENT, 
            category VARCHAR(50) NOT NULL, 
            slug VARCHAR(100) NOT NULL,
            disabled TINYINT DEFAULT 0
        )";
        $stm = $con->prepare($query);
        $stm->execute();

        // Create the 'posts' table
        $query = "CREATE TABLE IF NOT EXISTS posts (
            id INT PRIMARY KEY AUTO_INCREMENT, 
            user_id INT, 
            category_id INT,  
            title VARCHAR(100) NOT NULL,
            content TEXT NULL,
            image VARCHAR(1024),
            date DATETIME DEFAULT CURRENT_TIMESTAMP,
            slug VARCHAR(100) NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id),
            FOREIGN KEY (category_id) REFERENCES categories(id)
        )";
        $stm = $con->prepare($query);
        $stm->execute();

        // Add keys to the 'posts' table
        $query = "ALTER TABLE posts
                  ADD INDEX user_id_index (user_id),
                  ADD INDEX category_id_index (category_id)";
        $stm = $con->prepare($query);
        $stm->execute();

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


