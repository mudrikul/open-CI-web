###Tutorial video youtube 
1. https://youtu.be/Mc-PBV-ymqk : Cara melaukan clone, fork, commit, dan pull request dengan Github Desktop.
2. https://youtu.be/z7jPY5OFdkU : Cara setup custom .htaccess.

###Tutorial artikel
1. ..

###Tutorial Screenshot
1. Saat akan melakukan PR dari repo hasil fork kita, ke base-repo, pastikan dahulu repo kita, posisinya "ahead" atau "behind" base-repo. Contohnya sebagai berikut bila posisi repo hasil fork kita statusnya "behind" base-repo :
<img src="https://raw.githubusercontent.com/mudrikul/open-CI-web/master/img/behind.JPG">

Maka lakukan dulu pull dari "base-repo" ke repo kita. Kenapa?? Karena posisi repo kita, posisi updatenya berada "behind" (di belakang) base-repo. Jadi harus meminta update dulu dari base-repo, agar repo kita up2date (kekinian), baru kita bisa melakukan PR dari yang akan kita kontribusikan.

<img src="https://raw.githubusercontent.com/mudrikul/open-CI-web/master/img/prku.JPG">

Perhatikan baik-baik gambar di atas. Merah adalah repo yang diupdate (hasil fork), dan biru adalah repo pemberi update. Artinya posisi repo yang kekinian harus ada di sebelah kanan. Semua repo, baik base-repo, maupun siapa pun yang melakukan fork, akan muncul repo nya di menu dropdown merah dan biru.

OK, setelah repo fork kita terupdate, selanjutnya, saat kita ingin melakukan PR pada base-repo, agar bisa berkontribusi. Lakukan permintaan PR dengan cara sebaliknya, sebagai berikut. *Jangan lupa posisi repo fork kita harus "ahead" (di depan / lebih kekinian) dari base-repo.

<img src="https://raw.githubusercontent.com/mudrikul/open-CI-web/master/img/pr.JPG">

2. Screenshot app bila dijalankan pada localhost. *web server yang digunakan adalah Apache dengan aplikasi Laragon

<img src="https://raw.githubusercontent.com/mudrikul/open-CI-web/master/img/ss.JPG">
