    <div style="margin-left:15%;padding:1px 16px;">
    <p class="title-data">Tambah Data Peserta Event</p>
        <div>
            <form action="<?= base_url('backend/user/tambah_user_aksi')?>" method="post">
                <label for="user">ID User</label>
                <input type="text" id="id" name="id" placeholder="ID User">
                <label for="user">Nama User</label>
                <input type="text" id="namauser" name="namauser" placeholder="Nama User">
                <label for="user">Username</label>
                <input type="text" id="username" name="username" placeholder="Username">
                <label for="user">Password</label>
                <input type="password" id="password" name="pass" placeholder="Password">
                <button class="btn-simpan">SIMPAN DATA</button>
            </form>
        </div>

    </div>
</body>
</html>