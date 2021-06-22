
# lab11web


Praktikum 11: PHP Framework (Codeigniter)

Buatlah folder baru dengan nama “lab11_php_ci”

![image](https://user-images.githubusercontent.com/56473376/122892687-cda67180-d36f-11eb-819c-a6f0827b7c3d.png)


Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/56473376/122903260-6c839b80-d379-11eb-9f7e-d0c73449739a.png)


Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/56398506/122625808-39b77a00-d0d1-11eb-8e99-5ac2c95dff16.png)

Instalasi Codeigniter 4

Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

![image](https://user-images.githubusercontent.com/56398506/122625833-64093780-d0d1-11eb-8109-cf7abd10ed6b.png)

Menjalankan CLI (Command Line Interface)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: ( php spark )

![image](https://user-images.githubusercontent.com/56398506/122625864-9024b880-d0d1-11eb-8512-d3c734d5eca2.png)

Mengaktifkan Mode Debugging

Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![image](https://user-images.githubusercontent.com/56398506/122625881-a763a600-d0d1-11eb-96cd-a29b21a1141f.png)

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development

![image](https://user-images.githubusercontent.com/56398506/122625896-bea29380-d0d1-11eb-8d5c-832cc610c338.png)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.

![image](https://user-images.githubusercontent.com/56398506/122625930-ce21dc80-d0d1-11eb-9b74-e8d7a8cdca21.png)

Routing dan Controller

Router terletak pada file app/config/Routes.php

![image](https://user-images.githubusercontent.com/56398506/122625940-ded25280-d0d1-11eb-86ba-0124cd030c06.png)

buka CLI dan jalankan perintah berikut.
yaitu php spark

![image](https://user-images.githubusercontent.com/56398506/122625947-edb90500-d0d1-11eb-953d-66718b4aaf0b.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about 

![image](https://user-images.githubusercontent.com/56398506/122625957-fc072100-d0d1-11eb-9ed2-c7017a65da62.png)

Membuat Controller

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/56398506/122625967-09241000-d0d2-11eb-986e-77593ff03797.png)

Selanjutnya refresh Kembali browser,

![image](https://user-images.githubusercontent.com/56398506/122625975-15a86880-d0d2-11eb-829d-fcab3a47bfce.png)

Tambahkan method baru pada Controller Page seperti berikut.

![image](https://user-images.githubusercontent.com/56398506/122625986-26f17500-d0d2-11eb-9c3e-d0fa535c5dbe.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/56398506/122626001-353f9100-d0d2-11eb-97fe-b133feafa3f9.png)

Buat file css pada direktori public dengan nama style.css

![image](https://user-images.githubusercontent.com/56398506/122626019-45577080-d0d2-11eb-9e6c-85384e0232bf.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

![image](https://user-images.githubusercontent.com/56398506/122626033-53a58c80-d0d2-11eb-9001-7c46057bdc0f.png)

footer.php

![image](https://user-images.githubusercontent.com/56398506/122626040-5e602180-d0d2-11eb-9fe5-65572d3418f9.png)

Kemudian ubah file app/view/about.php seperti berikut

![image](https://user-images.githubusercontent.com/56398506/122626047-68822000-d0d2-11eb-84d7-5832fcc90dd1.png)

selanjutnya refresh tampilan tersebut:

![image](https://user-images.githubusercontent.com/56398506/122626054-75067880-d0d2-11eb-9d59-9e00a0701c6b.png)

PRAKTIKUM 12 ( FRAMEWORK - LANJUTAN CRUD)

Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![image](https://user-images.githubusercontent.com/56473376/122893039-24ac4680-d370-11eb-9497-514f0ea431f3.png)

Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/56473376/122893624-b1ef9b00-d370-11eb-8c1a-48f175c18716.png)

Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://user-images.githubusercontent.com/56473376/122895283-2b3bbd80-d372-11eb-897e-adf7215656ba.png)

Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.

![image](https://user-images.githubusercontent.com/56473376/122895658-87064680-d372-11eb-80f2-00cf2559db4f.png)


Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![image](https://user-images.githubusercontent.com/56473376/122896256-1875b880-d373-11eb-8488-71914331c314.png)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![image](https://user-images.githubusercontent.com/56473376/122896636-75716e80-d373-11eb-8749-3334d430b76c.png)


Refresh kembali browser, sehingga akan ditampilkan hasilnya.


![image](https://user-images.githubusercontent.com/56473376/122896903-bc5f6400-d373-11eb-8a85-cc8cc0a4832b.png)

Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://user-images.githubusercontent.com/56473376/122897612-5b845b80-d374-11eb-9662-775ad96c41d9.png)

Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![image](https://user-images.githubusercontent.com/56473376/122898370-039a2480-d375-11eb-849b-7762594e36f0.png)

Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![image](https://user-images.githubusercontent.com/56473376/122898985-95a22d00-d375-11eb-94f9-460aa5af3c9f.png)


Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![image](https://user-images.githubusercontent.com/56473376/122899203-d0a46080-d375-11eb-8a45-2f7cd32c3d77.png)

Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![image](https://user-images.githubusercontent.com/56473376/122899668-37c21500-d376-11eb-9603-8c7ae2b069e4.png)

Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![image](https://user-images.githubusercontent.com/56473376/122900061-8f608080-d376-11eb-80b2-743d434adbde.png)

Tambahkan routing untuk menu admin seperti berikut:

![image](https://user-images.githubusercontent.com/56473376/122900439-e5352880-d376-11eb-901f-31a82c81a19f.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel


![image](https://user-images.githubusercontent.com/56473376/122900706-1f062f00-d377-11eb-8b1a-43e2bedd9495.png)

Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![image](https://user-images.githubusercontent.com/56473376/122901399-b4a1be80-d377-11eb-971f-8192c1d72aef.png)

Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://user-images.githubusercontent.com/56473376/122901669-f03c8880-d377-11eb-9ca8-c18793692f4f.png)

Berikut tampilan form untuk menambah data artikel :

![image](https://user-images.githubusercontent.com/56473376/122901837-1feb9080-d378-11eb-8fda-b98a5492e205.png)

Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://user-images.githubusercontent.com/56473376/122902114-693be000-d378-11eb-8b82-e87c9cbdee4c.png)

Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/56473376/122902468-a86a3100-d378-11eb-808f-92b0d689c927.png)

kemudian refresh dan lihat hasilnya.

![image](https://user-images.githubusercontent.com/56473376/122902625-d6e80c00-d378-11eb-9521-d27a49bcf09d.png)

Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![image](https://user-images.githubusercontent.com/56473376/122902939-1dd60180-d379-11eb-9222-c07d2e4366ed.png)











