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

// Overriding: Penggajian murni berdasarkan jumlah hari kehadiran
    public function hitungGajiBersih() {
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfesiKaryawan() {
        return "Karyawan Kontrak";
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