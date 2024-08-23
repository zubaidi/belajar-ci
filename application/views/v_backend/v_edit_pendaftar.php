    <div style="margin-left:15%;padding:1px 16px;">
    <p class="title-data">Edit Data Peserta Event</p>
        <div>
            <form action="<?= base_url('backend/pendaftaran/edit_peserta_aksi/'.$peserta_data->id)?>" method="post">
                <label for="peserta">ID Peserta</label>
                <input type="text" id="idpeserta" name="idpeserta" value="<?= $peserta_data->id; ?>" disabled>
                <label for="peserta">Lomba yang akan diikuti </label>
                <select name="idlomba" id="">
                    <?php foreach($nama_event as $data) : ?>
                        <option value="<?php echo $data->id ?>"><?php echo $data->id ?> - <?php echo $data->nama ?></option>
                    <?php endforeach ?>
                <select>
                <label for="peserta">Nama Peserta</label>
                <input type="text" id="namapeserta" name="namapeserta" value="<?= $peserta_data->nama_pendaftar; ?>">
                <label for="peserta">Kelas</label>
                <select name="kelas" id="kelas">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                <label for="peserta">Nomor Telpon</label>
                <input type="number" id="notelp" name="notelp" value="<?= $peserta_data->no_hp; ?>">
                <label for="peserta">Tanggal Daftar</label>
                <input type="date" id="tanggal" name="tgldaftar" value="<?= $peserta_data->tgl_daftar; ?>">
                <button class="btn-simpan">UPDATE DATA</button>
            </form>
        </div>
        
    </div>
</body>
</html>