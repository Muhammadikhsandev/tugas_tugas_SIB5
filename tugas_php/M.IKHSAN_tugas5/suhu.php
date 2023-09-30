<?php
class KonversiSuhu
{
    private $SatuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;
    //konstruktor untuk menghantarkan variabel atau parameter ke dalam file lain
    public function __construct($SatuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->SatuanSuhuAwal = $SatuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }
    public function CelciusToFahrenheit()
    {
        if ($this->SatuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit') {
            return ($this->besaranSuhu * 9 / 5) + 32;
        }

        return null;
    }

    
    public function FahrenheitToCelcius()
    {
        if ($this->SatuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius') {
            return ($this->besaranSuhu - 32) * 5/9;
        }
        return null;
    }
    public function CelciusToRheamur()
    {
        if ($this->SatuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Rheamur') {
            return $this->besaranSuhu * 4/5;
        }
        return null;
    }
    public function RheamurToCelcius()
    {
        if ($this->SatuanSuhuAwal == 'Rheamur' && $this->satuanSuhuTujuan == 'Celcius') {
            return $this->besaranSuhu * 5/4;
        }
        return null;
    }
    public function cetak()
    {
        $hasilKonversi = null;
        if ($this->SatuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit') {
            $hasilKonversi = $this->CelciusToFahrenheit();
        } elseif ($this->SatuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius') {
            $hasilKonversi = $this->FahrenheitToCelcius();
        } elseif ($this->SatuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Rheamur') {
            $hasilKonversi = $this->CelciusToRheamur();
        } elseif ($this->SatuanSuhuAwal == 'Rheamur' && $this->satuanSuhuTujuan == 'Celcius') {
            $hasilKonversi = $this->RheamurToCelcius();
        }

        if ($hasilKonversi !== null) {
            echo "<table border='1'>
                    <tr>
                        <th>Satuan Suhu Awal</th>
                        <th>Besaran Suhu</th>
                        <th>Satuan Suhu Tujuan</th>
                        <th>Hasil Konversi Suhu</th>
                    </tr>
                    <tr>
                        <td>{$this->SatuanSuhuAwal}</td>
                        <td>{$this->besaranSuhu}</td>
                        <td>{$this->satuanSuhuTujuan}</td>
                        <td>{$hasilKonversi}</td>
                    </tr>
                </table>";
        } else {
            echo "Konversi suhu tidak valid.";
        }
    }
}
