    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
        <p class="title-data">Data Peserta Event</p>
        <div class="nav-event">
            <a href="<?= base_url('backend/pendaftaran/tambah_peserta')?>"><button class="btn-event">Tambah Peserta Baru</button></a>
            <input type="text" name="seacrh" id="search" placeholder="Cari Data Event">
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Id Peserta</th>
                <th>Nama Event</th>
                <th>Nama Pendaftar</th>
                <th>Kelas</th>
                <th>No. Telpon</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
            </tr>
            <?php $no=1; foreach($peserta as $row) :?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->nama_pendaftar; ?></td>
                    <td><?php echo $row->kelas; ?></td>
                    <td><?php echo $row->no_hp; ?></td>
                    <td><?php echo $row->tgl_daftar; ?></td>
                    <td class="tb-aksi">
                        <a href="<?= base_url('backend/event/edit_event/'.$row->id)?>"><button class="btn-edit">Edit</button>
                        <a href="<?= base_url('backend/event/hapus_event/'.$row->id)?>"><button class="btn-hapus">Hapus</button></a>
                    </td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>