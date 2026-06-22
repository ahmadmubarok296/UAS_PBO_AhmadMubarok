<?php

// --- 1. Subclass KaryawanKontrak ---
class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id, $nama, $dept, $hariMasuk, $gaji, $durasi, $agensi) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gaji);
        $this->durasiKontrakBulan = $durasi;
        $this->agensiPenyalur = $agensi;
    }

    public function hitungGajiBersih() {
        return $this->gajiDasarPerHari * 22; // Asumsi 22 hari kerja
    }

    public function tampilkanProfesiKaryawan() {
        return "Karyawan Kontrak dari " . $this->agensiPenyalur;
    }

    public static function getDataById($conn, $id) {
        $query = "SELECT * FROM tabel_karyawan WHERE id_karyawan = ? AND jenis_karyawan = 'kontrak'";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>