1. Tujuan Proyek
<Objektif>
Aplikasi ini dirancang untuk memudahkan pengelolaan data fakultas di institusi pendidikan, termasuk pengelolaan program studi, dosen, dan mahasiswa. Aplikasi ini bertujuan untuk meningkatkan efisiensi dalam pengelolaan informasi akademik dan administrasi.

<Latar Belakang>
Dengan meningkatnya jumlah mahasiswa dan kompleksitas program studi, institusi pendidikan memerlukan sistem manajemen yang efisien untuk mengelola data fakultas. Sistem ini memungkinkan pengelolaan informasi akademik secara terorganisir, memudahkan akses data, dan meningkatkan transparansi.

2. Fitur Utama
<Untuk Admin (Pengguna Utama)>
1. Pengelolaan Fakultas dan Program Studi

-Menambah, mengubah, atau menghapus fakultas dan program studi dengan informasi seperti:
  a.Nama fakultas
  b.Nama program studi
c.Dekan fakultas
-Data fakultas dan program studi disimpan secara lokal dan dapat disinkronkan ketika ada koneksi internet.
2.Pengelolaan Dosen

  a.Admin dapat mencatat dan mengelola data dosen, termasuk:
  b.Nama dosen
  c.Program studi yang diampu
  d.Kualifikasi pendidikan
3.Pengelolaan Mahasiswa

  a.Admin dapat mencatat dan mengelola data mahasiswa, termasuk:
  b.Nama mahasiswa
  c.Program studi yang diambil
  d.Status mahasiswa (aktif/tidak aktif)
<Untuk Dosen>
1.Melihat Data Mahasiswa

  a.Dosen dapat melihat daftar mahasiswa yang terdaftar di program studi yang diajarnya.
2.Mengelola Kelas

  a.Dosen dapat mencatat dan mengelola informasi kelas, termasuk:
  b.Nama kelas
  c.Jadwal kelas
  d.Mahasiswa yang terdaftar
<Untuk Mahasiswa>
1.Melihat Program Studi

  a.Mahasiswa dapat melihat daftar program studi yang tersedia, termasuk informasi tentang fakultas dan kualifikasi.
2.Mendaftar Program Studi

  a.Mahasiswa dapat mendaftar untuk program studi tertentu dan mengupdate informasi pribadi.
3. Persyaratan Fungsional
<Sistem Login>
  a.Akses Berdasarkan Peran:
  b.Admin: Dapat mengelola fakultas, program studi, dosen, dan mahasiswa.
  c.Dosen: Dapat melihat data mahasiswa dan mengelola kelas.
  d.Mahasiswa: Dapat melihat program studi dan mendaftar.
<Pengaturan & Tampilan Data>
  a.Admin:
  b.Dapat mengatur katalog fakultas dan program studi, serta mencatat dan mengelola informasi dosen dan mahasiswa.
  a.Dosen:
  b.Dapat melihat data mahasiswa dan mengelola kelas.
  a.Mahasiswa:
  b.Dapat melihat program studi dan melakukan pendaftaran.
4. Persyaratan Non-Fungsional
1.Kegunaan

  a.Antarmuka aplikasi harus sederhana dan intuitif, memudahkan pengguna dalam mengelola data dengan cepat.
  b.Pengguna dapat dengan mudah menavigasi antara menu fakultas, program studi, dosen, dan mahasiswa.
2.Keamanan

  a.Pengguna memiliki akses berdasarkan peran yang ditentukan.
  b.Semua data sensitif dilindungi dengan enkripsi untuk menjaga kerahasiaan.
3.Kinerja

  a.Aplikasi harus dapat memproses pengelolaan data dengan cepat, terutama pada jam-jam sibuk.
5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan
Model Data
1.Fakultas

  a.Menyimpan informasi tentang fakultas, termasuk nama dan dekan.
2.Program Studi

  a.Menyimpan informasi tentang program studi yang ditawarkan oleh fakultas.
3.Dosen

  a.Menyimpan data dosen, termasuk nama dan program studi yang diampu.
4.Mahasiswa

  a.Menyimpan data mahasiswa, termasuk nama dan program studi yang diambil.
<Struktur Tabel>
-Tabel Fakultas (Faculties Table)
  a.id: bigint UNSIGNED (Primary Key)
  b.name: varchar(255) - Nama fakultas
  c.dean: varchar(255) - Nama dekan
  d.created_at: timestamp
  e.updated_at: timestamp
<Tabel Program Studi (Programs Table)>
  a.id