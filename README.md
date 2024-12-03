# Aplikasi CRUD sederhana
![Thumbnail](https://github.com/user-attachments/assets/82ac2b1e-6289-4784-900e-17f9b9fe04ec)
![Thumbnai2](https://github.com/user-attachments/assets/035309eb-1b24-4536-b82d-05a703da156e)
![PHP](https://img.shields.io/badge/-PHP-777bb3?style=flat-square&logo=PHP&logoColor=white)
![HTML5](https://img.shields.io/badge/-HTML5-e34f26?style=flat-square&logo=HTML5&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-4479a1?style=flat-square&logo=mysql&logoColor=white)

## Tech stack
- Bootsrap Icon v1.11.3
- TailwindCSS v3.4.13

## How to use :
- Configure Connection koneksi.php
  ```koneksi.php
    <?php
    $server = "127.0.0.1";
    $user = "root";
    $pass = "";
    $database = "akademik";
    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
    ?>
    ```
- Create Database
  ``` Query
    CREATE DATABASE `akademik` /*!40100 COLLATE 'armscii8_bin' */;
    USE `akademik`;
    CREATE TABLE `mahasiswa` (
    	`id` INT(6) NOT NULL AUTO_INCREMENT,
    	`nama` TEXT(50) NOT NULL,
    	`nim` INT(6) NOT NULL DEFAULT 0,
    	`alamat` TEXT(255) NOT NULL,
    	PRIMARY KEY (`id`)
    )
    COLLATE='armscii8_bin';
  ```
