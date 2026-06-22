<?php

class Database {
    // Properti untuk koneksi
    private $host = "localhost";
    private $user = "root";       // Sesuaikan dengan username database Anda
    private $pass = "";           // Sesuaikan dengan password database Anda
    private $db   = "DB_UAS_PBO_TI1C_AhmadMubarok";
    public $conn;

    // Constructor: Dijalankan otomatis saat objek dibuat
    public function __construct() {
        $this->connect();
    }

    // Metode untuk melakukan koneksi
    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        // Cek koneksi
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        } else {
            echo "Berhasil terhubung ke database";
        }
    }
}

// Inisialisasi objek (memicu constructor)
$db = new Database();

?>