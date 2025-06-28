<h2>Tambah Berita</h2>
<a href="list.php">Kembali kedaftar berita</a>

<form action="../proccess/create.php" method="Post" style="margin-top:20px;
max-width: 600px;">
    <label for="title"><strong>judul</strong></label><br>
    <input type="text" placeholder="judul buku" required style="width: 100%; padding:8px;"><br><br>

    <label for="thumbnail"><strong>thumbnail</strong></label><br>
    <textarea name="thumbnail" placeholder="masukkan URL atau base64 gambar" rows="3" style="width: 100%;  padding:8px;"></textarea><br><br>

    <label><strong>Isi konten:</strong></label><br>
    <textarea name="content[]" placeholder="paragraf 1" rows="4" style="width: 100%;  padding:8px;"></textarea><br><br>
    <label><strong>Isi konten:</strong></label><br>
    <textarea name="content[]" placeholder="paragraf 2" rows="4" style="width: 100%;  padding:8px;"></textarea><br><br>
    <label><strong>Isi konten:</strong></label><br>
    <textarea name="content[]" placeholder="paragraf 3" rows="4" style="width: 100%;  padding:8px;"></textarea><br><br>

    <button type="submit" style="padding: 10px 20px;">+ Simpan Buku</button>
</form>