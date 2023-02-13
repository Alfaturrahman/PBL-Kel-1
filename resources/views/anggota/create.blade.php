<h1>Create</h1>

<form action="/anggota/store" method="POST">
    @csrf
    <input type="text" name="no_anggota" placeholder="No Anggota"> <br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="total_simpanan"placeholder="Total Pinjaman"><br>
    <select name="Status">
        <option value="">Pilih Status</option>
        <option value="Aktif">Aktif</option>
        <option value="Tidak Aktif">Tidak Aktif</option>
    </select> <br>
    <input type="submit" name="submit" value="save">
</form>