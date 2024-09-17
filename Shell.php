<?php
if (isset($_POST['submit']) && $_POST['jenis'] && $_POST['liter']) {
    $jenis = $_POST['jenis'];
    $liter = $_POST['liter'];

    class shell
    {
        public
            $uang,
            $jenis,
            $liter,
            $harga,
            $ppn = 10/100;
        public function __construct($liter, $jenis)
        {
            $this->jenis = $jenis;
            $this->liter = $liter;
            switch ($this->jenis) {
                case "Super":
                    $this->harga = 15000;
                    break;
                case "V-Power":
                    $this->harga = 16000;
                    break;
                case "Diesel":
                    $this->harga = 18000;
                    break;
                case "Nitro":
                    $this->harga = 17000;
                    break;
            }
        }
    }
    class beli extends shell
    {

        public function beli()
        {
            $total =($this->liter * $this->harga) + (($this->harga * $this->liter) * $this->ppn);
            $pajak = $this->harga * $this->liter* $this->ppn;
            $all = "<div class='card mt-3'>
                    <div class='card-body'>
                        <h4 class='card-title text-center '>Rincian Pembayaran</h4>
                        <p class='card-text'>Anda Membeli Bahan Bakar Tipe $this->jenis</p>
                        <p class='card-text'>Anda Membeli Bahan Bakar Sebanyak $this->liter liter</p>
                        <p class='card-text'>Harga per liter : Rp. ". number_format($this->harga ,2,",","."). "</p>
                        <p class='card-text'>PPN(10%) : Rp. ". number_format($pajak ,0,",","."). " </p>
                        <h5 class='card-text'>Total Yang Harus Anda Bayar Adalah : Rp. ". number_format($total ,2,",","."). "</h5>
                    </div>
                </div>";
                echo $all;
        }
    }
}