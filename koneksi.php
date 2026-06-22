<?php

// 1. Bagian Koneksi Database
class Koneksi {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "DB_UAS_PBO_TI1C_AhmadMubarok";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}

// 2. Bagian Abstract Class Karyawan
abstract class Karyawan {
    // Properti terenkapsulasi (protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hariKerjaMasuk;
    protected $gajiDasarPerHari;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiDasar) {
        $this->id_karyawan = $id;
        $this->nama_karyawan = $nama;
        $this->departemen = $dept;
        $this->hariKerjaMasuk = $hariMasuk;
        $this->gajiDasarPerHari = $gajiDasar;
    }

    // Metode Abstrak (Wajib diimplementasikan di kelas anak)
    abstract public function hitungGajiBersih();
    abstract public function tampilkanProfesiKaryawan();
}

/**
 * Contoh cara penggunaan:
 * $db = new Koneksi();
 * $conn = $db->conn;
 */
?>