    <div style="margin-left:15%;padding:1px 16px;height:auto;">
        <p class="title-data">Data Event dan Kegiatan</p>
        <div class="nav-event">
            <a href="<?= base_url('backend/event/tambah_event')?>"><button class="btn-event">Tambah Event</button></a>
            <input type="text" name="seacrh" id="search" placeholder="Cari Data Event">
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Id Event</th>
                <th>Nama Event</th>
                <th>Penyelenggara</th>
                <th>Aksi</th>
            </tr>
            <?php $no=1; foreach($event_data as $row) :?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->penyelenggara; ?></td>
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