<div id="flash_data">
    <?= $this->session->flashdata('pesan'); ?>
</div>
    <div style="margin-left:15%;padding:1px 16px;height:auto;">
        <p class="title-data">Ubah Data Event dan Kegiatan</p>
        <div>
            <form action="<?= base_url('backend/event/edit_event_aksi/'.$event_data->id)?>" method="post">
                <label for="event">ID Event</label>
                <input type="text" id="id" name="id" value="<?= $event_data->id; ?>" disabled>
                <label for="event">Nama Event</label>
                <input type="text" id="namaevent" name="namaevent" value="<?= $event_data->nama; ?>">
                <label for="event">Penyelenggara</label>
                <input type="text" id="penyelenggara" name="penyelenggara" value="<?= $event_data->penyelenggara; ?>">
                <button class="btn-simpan">SIMPAN DATA</button>
            </form>
        </div>
    </div>
</body>
</html>