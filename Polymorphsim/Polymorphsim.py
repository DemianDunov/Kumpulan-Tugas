class Produk:
    def __init__(self, merek, stok):
        self.merek = merek
        self.stok = stok

    def cek_stok(self):
        return f"Stok saat ini: {self.stok}"

class Televisi(Produk):
    def __init__(self, merek, stok, jenis):
        super().__init__(merek, stok)
        self.jenis = jenis

    def cek_stok_televisi(self):
        return f"Jenis: {self.jenis}, {super().cek_stok()}"

# Contoh penggunaan
produk01 = Televisi("LG", 40, "LED")
print(produk01.cek_stok_televisi())

#2
class Kendaraan:
    def __init__(self, merk, tahun_produksi):
        self.merk = merk
        self.tahun_produksi = tahun_produksi

    def info_kendaraan(self):
        return f"Merk: {self.merk}, Tahun Produksi: {self.tahun_produksi}"

class Mobil(Kendaraan):
    def __init__(self, merk, tahun_produksi, jenis):
        super().__init__(merk, tahun_produksi)
        self.jenis = jenis

    def info_mobil(self):
        return f"Jenis: {self.jenis}, {super().info_kendaraan()}"

# Contoh penggunaan
mobil1 = Mobil("Nissan", 2021, "Hatchback")
print(mobil1.info_mobil())
    

#3
class Hewan:
    def __init__(self, nama, jenis):
        self.nama = nama
        self.jenis = jenis

    def info_hewan(self):
        return f"Nama: {self.nama}, Jenis: {self.jenis}"

class Kelinci(Hewan):
    def __init__(self, nama, jenis, warna_bulu):
        super().__init__(nama, jenis)
        self.warna_bulu = warna_bulu

    def info_kelinci(self):
        return f"Warna Bulu: {self.warna_bulu}, {super().info_hewan()}"

# Contoh penggunaan
kelinci1 = Kelinci("Fluffy", "Angora", "Putih");
print(kelinci1.info_kelinci())
