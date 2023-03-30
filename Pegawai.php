<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    private $tunjab;
    private $tunkel = 0;
    private $gaji_kotor;
    private $ket;
    private $gaji_bersih;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        }
        $this->tunjab = $gapok / 100 * 20;
            if ($this->status == 'Menikah') $this->tunkel = $gapok / 100 * 10;
            else $this->tunkel = 0;

        $this->gaji_kotor = $gapok + $this->tunjab + $this->tunkel;

        $this->ket = ($this->gaji_kotor >= 6000000) ? $gapok / 100 * 2.5 : 0;
            if ($this->agama == 'Islam') $this->ket;
            else $this->ket = 0;

        $this->gaji_bersih = $this->gaji_kotor - $this->ket;

        return $gapok;
    }
    public function cetak(){
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '. $this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok Rp. : '.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan : '.$this->tunjab;
        echo '<br>Tunjangan Keluarga : '.$this->tunkel;
        echo '<br>Gaji Kotor : '.$this->gaji_kotor;
        echo '<br>Zakat Profesi : '.$this->ket;
        echo '<br>Gaji Bersih : '.$this->gaji_bersih;
        echo '<hr>';

    }

}



?>