# Laporan Analisis Sistem Manajemen Transportasi dan Navigasi Kereta

## 1. Latar Belakang

Transportasi kereta api merupakan salah satu moda transportasi utama yang digunakan oleh masyarakat untuk mobilitas harian maupun perjalanan jarak jauh. Dengan meningkatnya jumlah pengguna, diperlukan sistem yang lebih modern dan efisien dalam mengelola jadwal, navigasi, serta pemantauan perjalanan kereta.

Saat ini, masih banyak sistem transportasi yang kurang terintegrasi dengan baik, menyebabkan kendala seperti keterlambatan informasi, kurangnya transparansi jadwal, serta minimnya sistem pemantauan real-time. Oleh karena itu, pengembangan sistem manajemen transportasi berbasis teknologi menjadi solusi yang sangat dibutuhkan.

## 2. Identifikasi Masalah

Beberapa permasalahan utama dalam transportasi dan navigasi kereta adalah:

1. Kurangnya sistem pemantauan jadwal dan posisi kereta secara real-time.
2. Sulitnya akses informasi bagi pengguna terkait rute, jadwal, dan keterlambatan kereta.
3. Tidak adanya sistem yang mengelompokkan jadwal berdasarkan kepadatan dan efektivitas perjalanan.
4. Manajemen operasional kereta yang masih menggunakan sistem manual.
5. Kurangnya sistem yang dapat memberikan rekomendasi perjalanan terbaik bagi pengguna.

## 3. Rumusan Masalah

1. Bagaimana membangun sistem berbasis teknologi yang mencakup informasi jadwal, navigasi, dan pemantauan kereta?
2. Bagaimana merancang sistem yang dapat menampilkan posisi kereta secara real-time?
3. Bagaimana sistem ini dapat mengoptimalkan rute perjalanan berdasarkan kepadatan dan waktu tempuh?
4. Bagaimana mengelola data perjalanan agar lebih transparan dan mudah diakses oleh pengguna?
5. Bagaimana menyusun sistem yang memungkinkan pengguna mendapatkan rekomendasi perjalanan terbaik?

## 4. Tujuan Penelitian

1. Mengembangkan sistem yang memberikan informasi jadwal dan navigasi kereta secara real-time.
2. Merancang dashboard untuk manajemen operasional dan pemantauan kereta.
3. Menentukan algoritma terbaik untuk rekomendasi rute perjalanan.
4. Membangun sistem yang dapat mengelompokkan jadwal berdasarkan kepadatan lalu lintas.
5. Merancang sistem yang memungkinkan pengguna melakukan perencanaan perjalanan dengan efisien.

## 5. Metode Analisis

### 5.1. What (Apa)
- Sistem ini bertujuan untuk meningkatkan efektivitas manajemen transportasi dan navigasi kereta.
- Masalah utama yang ingin diselesaikan adalah kurangnya sistem pemantauan real-time dan rekomendasi rute yang optimal.

### 5.2. Why (Mengapa)
- Sistem ini diperlukan untuk meningkatkan efisiensi transportasi kereta dan memberikan pengalaman perjalanan yang lebih baik bagi pengguna.
- Laravel dipilih karena fleksibilitasnya dalam pengembangan web, Docker untuk memastikan lingkungan pengembangan konsisten, dan MySQL untuk penyimpanan data terstruktur.

### 5.3. Who (Siapa)
- Sistem ini melibatkan operator kereta, penumpang, dan manajer transportasi.
- Pengguna utama adalah operator untuk pemantauan dan manajer untuk analisis data perjalanan.

### 5.4. When (Kapan)
- Implementasi sistem direncanakan dalam waktu enam bulan setelah tahap pengembangan dan pengujian.
- Evaluasi performa sistem dilakukan secara berkala untuk peningkatan kualitas layanan.

### 5.5. Where (Di Mana)
- Sistem ini akan digunakan di stasiun dan pusat pengendalian transportasi.
- Data disimpan dalam database MySQL yang dapat diakses secara cloud atau lokal.

### 5.6. How (Bagaimana)
- Sistem dikembangkan menggunakan Laravel untuk backend dan frontend, Docker untuk containerisasi, serta MySQL untuk penyimpanan data.
- Data jadwal, posisi, dan navigasi kereta diinput dan diproses untuk memberikan informasi yang akurat bagi pengguna.

## 6. Perancangan Sistem

### 6.1. Entity Relationship Diagram (ERD)

```
entity "Kereta" as Kereta {
    + ID_Kereta : INT (PK)
    + Nama : VARCHAR(100)
    + Kapasitas : INT
}

entity "Stasiun" as Stasiun {
    + ID_Stasiun : INT (PK)
    + Nama : VARCHAR(100)
    + Lokasi : VARCHAR(100)
}

entity "Jadwal" as Jadwal {
    + ID_Jadwal : INT (PK)
    + ID_Kereta : INT (FK)
    + ID_Stasiun : INT (FK)
    + Waktu_Berangkat : TIME
    + Waktu_Tiba : TIME
}

entity "Navigasi" as Navigasi {
    + ID_Navigasi : INT (PK)
    + ID_Kereta : INT (FK)
    + Posisi : VARCHAR(100)
    + Status : VARCHAR(50)
}

entity "Pengguna" as Pengguna {
    + ID_Pengguna : INT (PK)
    + Nama : VARCHAR(100)
    + Jenis : ENUM('Penumpang', 'Operator')
}
```

### 6.2. Implementasi Database (SQL)

```sql
CREATE TABLE Kereta (
    ID_Kereta INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Kapasitas INT
);

CREATE TABLE Stasiun (
    ID_Stasiun INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Lokasi VARCHAR(100)
);

CREATE TABLE Jadwal (
    ID_Jadwal INT PRIMARY KEY AUTO_INCREMENT,
    ID_Kereta INT,
    ID_Stasiun INT,
    Waktu_Berangkat TIME,
    Waktu_Tiba TIME,
    FOREIGN KEY (ID_Kereta) REFERENCES Kereta(ID_Kereta),
    FOREIGN KEY (ID_Stasiun) REFERENCES Stasiun(ID_Stasiun)
);
```

### 6.3. Use Case Diagram

```
actor "Penumpang" as Passenger
actor "Operator" as Operator
actor "Manajer" as Manager

rectangle System {
    usecase "Melihat Jadwal Kereta" as U1
    usecase "Melihat Posisi Kereta" as U2
    usecase "Mengatur Jadwal" as U3
    usecase "Melakukan Navigasi" as U4
}

Passenger --> U1
Passenger --> U2
Operator --> U3
Manager --> U4
```

### 6.4. Flowchart

```
start
:Penumpang mencari jadwal;
if (Jadwal tersedia?) then (Ya)
    :Tampilkan informasi jadwal;
    :Berikan rekomendasi rute terbaik;
else (Tidak)
    :Tampilkan pesan tidak ada jadwal;
endif

:Operator memperbarui status navigasi;
stop
```

### 6.5. Konfigurasi Docker

```yaml
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    environment:
      MYSQL_DATABASE: transportasi
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

## 7. Kesimpulan

Sistem manajemen transportasi dan navigasi kereta berbasis Laravel, Docker, dan MySQL ini bertujuan untuk meningkatkan efisiensi perjalanan dan memberikan informasi yang lebih transparan bagi pengguna.

