import java.util.*;
public class ngulang{
  public static void main(String args[])
  {
    char nanya;
    double harga = 0;
    int pilihan;
    Scanner input = new Scanner(System.in);
      do{
        System.out.println(" _____________________________________");
        System.out.println("|            TOKO GRONGSAK            |");
        System.out.println("|_____________________________________|");
        System.out.println("|   Nama Produk     |     Harga       |");
        System.out.println("|1. Aqua  Galon     |   Rp 3000       |");
        System.out.println("|2. Roma Kelapa 1pcs|   Rp 1000       |");
        System.out.println("|3. Susu Kntl Manis |   Rp 2000       |");
        System.out.println("|4. Es Batu (1kg)   |   Rp 4000       |");
        System.out.println("|5. Indomie Goreng  |   Rp 2500       |");
        System.out.println("|6. Bir Bintang     |   Rp 22200      |");
        System.out.println("|7. Arak Bali       |   Rp 12000      |");
        System.out.println("|___________________|_________________|");
        System.out.println("");
        double p1 = 3000,
            p2 = 1000,
            p3 = 2000,
            p4 = 4000,
            p5 = 2500,
            p6 = 22200,
            p7 = 12000;
        // double jumlah;
        // int produk;
      for(String i = "Y"; i.equals("Y");.i.equals("Y");)
      {      
        System.out.print("Masukan Nomor Produk : ");
        int produk = input.nextInt();
        int jumlah;
        switch(produk)
        {
        case 1 :
        System.out.println("|___________________|_________________|");
        System.out.println("Anda Memilih Aqua ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p1 * jumlah;
        break;

        case 2 :
        System.out.println("Anda Memilih Roma ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p2 * jumlah;
        break;

        case 3 :
        System.out.println("Anda Memilih Susu ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p3 * jumlah;
        break;

        case 4 :
        System.out.println("Anda Memilih Es Batu ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p4 * jumlah;
        break;

        case 5 :
        System.out.println("Anda Memilih Indomie ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p5 * jumlah;
        break;

        case 6 :
        System.out.println("Anda Memilih Bir ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p6 * jumlah;
        break;

        case 7 :
        System.out.println("Anda Memilih Arak ");
        System.out.print("Masukan Jumlah Barang Ingin Dibeli : ");
        jumlah = input.nextInt();
        harga = p7 * jumlah;
        break;

        default :
        System.out.println("Salah Input");
        break;
        }
        System.out.println("Apakah Ada barang yang lain lagi utk di beli? Y/T");
        i = input.next();
        
      }
      System.out.println("Total pembayaran sebesar Rp. " +harga+".");
      System.out.println("Mau Melakukan Transkasi Lagi [Y / T] ??");
      nanya = input.next().charAt(0);
      }
      while(nanya == 'Y' || nanya == 'y');
      System.out.println("Sampai jumpa");
  }

}