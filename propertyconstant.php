 <?php

  class produk {


   public string $kode;
   public string $nama;
   public int $harga;
   public int $stok;

   public const PAJAK = 0.11;

}

  $produk = new Produk();
  $produk->kode = "p0001";
  $produk->nama = "laptop";
  $produk->harga = "1000000";
  $produk->stok = 5;

  $pajak = produk::PAJAK * 100:
  $jumlahpajak = $produk->harga * produk::PAJAK;

  //total
  $total = $produk->harga + $jumlahpajak;


 //hasil
 echo "produk: ".$produk->nama;
 echo "<br/>";

 echo "harga: ".$produk->harga;
echo "<br/>";

 echo "pajak: ".$pajak;
 echo "<br/>";
 
 
 echo "total harga setalah pajak: Rp".$total;
 echo "<br/>"; 