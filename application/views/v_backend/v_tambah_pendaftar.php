    <div style="margin-left:15%;padding:1px 16px;">
    <p class="title-data">Tambah Data Peserta Event</p>
        <div>
            <form action="<?= base_url('backend/pendaftaran/tambah_peserta_aksi')?>" method="post">
                <label for="peserta">ID Peserta</label>
                <input type="text" id="id" name="idpeserta" placeholder="ID Peserta">
                <label for="peserta">Lomba yang akan diikuti </label>
                <select name="idlomba" id="">
                    <?php foreach($nama_event as $data) : ?>
                        <option value="<?php echo $data->id ?>"><?php echo $data->id ?> - <?php echo $data->nama ?></option>
                    <?php endforeach ?>
                </select>
                <label for="peserta">Nama Peserta</label>
                <input type="text" id="namapeserta" name="namapeserta" placeholder="Nama Peserta Lomba">
                <label for="peserta">Kelas</label>
                <select name="kelas" id="kelas">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                <label for="peserta">Nomor Telpon</label>
                <input type="number" id="notelp" name="notelp" placeholder="Nomor Telpon">
                <label for="peserta">Tanggal Daftar</label>
                <input type="date" id="tanggal" name="tgldaftar" value="<?php echo date('YYYY-mm-dd'); ?>">
                <button class="btn-simpan">SIMPAN DATA</button>
            </form>
        </div>

    </div>
</body>
</html>