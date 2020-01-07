<html>
<title>Contoh Form</title>
<form method="POST" action="/profile">
{{csrf_field()}} <!-- token yang wajib di sertakan bila menggunakan method post -->
Silahkan Masukkan Nama Yang Ingin Di Input :
<input type="text" placeholder="Masukkan teks" name="kata">
<button type="submit">kirim</button>
</form>
</html>