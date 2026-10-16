 <?php

  class produk {


   public string $kode;
   public string $nama;
   public int $harga;
   public int $stok;

   public const PAJAK = 0.11;

   public function pajak()
      return self::PAJAK * 100;
}
  public function total() {
    return $this->harga + {$this-> * self::PAJAK};
  }

  $produk = new Produk();
  $produk->kode = "p0001";
  $produk->nama = "laptop";
  $produk->harga = "1000000";
  $produk->stok = 5;

  $pajak = produk::PAJAK * 100:
  $jumlahpajak = $produk->harga * produk::PAJAK;



 //hasil
 echo "produk: ".$produk->nama;
 echo "<br/>";

 echo "harga: ".$produk->harga;
echo "<br/>";

 echo "pajak: ".$produk->pajak() . "%";
 echo "<br/>";
 
 
 echo "total harga setalah pajak: Rp".$produk->total();
 echo "<br/>"; 