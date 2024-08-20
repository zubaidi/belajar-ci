    <div style="margin-left:15%;padding:1px 16px;height:auto;">
        <p class="title-data">Tambah Data Event dan Kegiatan</p>
        <div>
            <form action="<?= base_url('backend/event/tambah_event_aksi')?>" method="post">
                <label for="event">ID Event</label>
                <input type="text" id="id" name="id" placeholder="ID Event">
                <label for="event">Nama Event</label>
                <input type="text" id="namaevent" name="namaevent" placeholder="Nama Event">
                <label for="event">Penyelenggara</label>
                <input type="text" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara">
                <input type="submit" value="SIMPAN DATA" class="btn-simpan">
            </form>
        </div>
    </div>
</body>
</html>