<?php

return [
    'global' => [
        'form'   => 'Formulir',
        'add'    => 'Tambah',
        'edit'   => 'Ubah',
        'save'   => 'Simpan',
        'close'  => 'Tutup',
        'delete' => 'Hapus',
        'action' => 'Aksi',
        'update' => 'Ubah',
        'logout' => 'Keluar',
        'back'   => 'Kembali',
        'reset'  => 'Ulang',
        'show'   => 'Tampil',
        'view'   => 'Lihat',
        'max'    => 'besar maksiman ukuran gambar',
        'image'  => 'Gambar',
        'print'  => 'Cetak',
        'printall'  => 'Cetak Semua',
        'setting' => 'Pengaturan',
        'sweet'  => [
            'title'          => 'Apakah kamu yakin?',
            'text'           => 'Anda tidak akan dapat mengembalikan ini!',
            'confirm_delete' => 'Ya, hapus!',
            'insert'         => 'Data berhasil ditambahkan.',
            'update'         => 'Data berhasil dirubah.',
            'delete'         => 'Data berhasil dihapus.',
            'error'          => 'Data gagal disimpan',
            'fail'           => 'Data tidak ditemukan atau sudah dihapus.',
            'get'            => 'Data berhasil didapatkan.'
        ],
        'msg' => [
            'msg_insert'   => 'Data berhasil ditambahkan.',
            'msg_update'   => 'Data id {0} berhasil dirubah.',
            'msg_delete'   => 'Data id {0} berhasil dihapus.',
            'msg_get'      => 'Data id {0} berhasil didapatkan.',
            'msg_get_fail' => 'Data id {0} tidak ditemukan atau sudah dihapus.',
        ],
    ],

    /**
     * Permission.
     */
    'permission' => [
        'add'      => 'Tambah izin',
        'edit'     => 'Ubah izin',
        'title'    => 'Pengelolan izin',
        'subtitle' => 'Daftar izin',
        'fields'   => [
            'name'            => 'Izin',
            'description'     => 'Deskripsi',
            'plc_name'        => 'Nama dari izin.',
            'plc_description' => 'Deskripsi untuk izin.',
        ],
        'msg' => [
            'msg_insert'   => 'Izin berhasil ditambahkan.',
            'msg_update'   => 'Izin id {0} berhasil dirubah.',
            'msg_delete'   => 'Izin id {0} berhasil dihapus.',
            'msg_get'      => 'Izin id {0} berhasil didapatkan.',
            'msg_get_fail' => 'Izin id {0} tidak ditemukan atau sudah dihapus.',
        ],
    ],

    /**
     * Role.
     */
    'role' => [
        'add'      => 'Tambah peran',
        'edit'     => 'Ubah peran',
        'title'    => 'Pengelolaan peran',
        'subtitle' => 'Daftar peran',
        'fields'   => [
            'name'            => 'Peran',
            'description'     => 'Deskripsi',
            'plc_name'        => 'Nama peran.',
            'plc_description' => 'Deskripsi untuk peran.',
        ],
        'msg' => [
            'msg_insert'   => 'Peran berhasil ditambahkan.',
            'msg_update'   => 'Peran id {0} berhasil dirubah.',
            'msg_delete'   => 'Peran id {0} berhasil dihapus.',
            'msg_get'      => 'Peran id {0} berhasil didapatkan.',
            'msg_get_fail' => 'Peran id {0} tidak ditemukan atau sudah dihapus.',
        ],
    ],

    /**
     * Menu.
     */
    'menu' => [
        'expand'   => 'Perlebar',
        'collapse' => 'Perkecil',
        'refresh'  => 'Perbaharui',
        'add'      => 'Tambah menu',
        'edit'     => 'Ubah menu',
        'title'    => 'Pengelolaan menu',
        'subtitle' => 'Daftar menu',
        'fields'   => [
            'parent'         => 'Induk',
            'warning_parent' => 'Tolong dicatat! menu hanya mendukung maksimal kedalaman 2.',
            'active'         => 'Aktif',
            'non_active'     => 'Tidak aktif',
            'icon'           => 'Ikon',
            'info_icon'      => 'Untuk ikon lainnya, silahkan lihat',
            'place_icon'     => 'Ikon dari fontawesome.',
            'name'           => 'Judul',
            'place_title'    => 'Nama untuk menu.',
            'route'          => 'Route',
            'place_route'    => 'Route untuk link menu.',
        ],
        'msg' => [
            'msg_insert'     => 'Menu berhasil ditambahkan.',
            'msg_update'     => 'Menu berhasil dirubah.',
            'msg_delete'     => 'Menu berhasil dihapus.',
            'msg_get'        => 'Menu berhasil didapatkan.',
            'msg_get_fail'   => 'Menu tidak ditemukan atau sudah dihapus.',
            'msg_fail_order' => 'Menu tidak berhasil di urutkan.',
        ],
    ],
    /**
     * Menu.
     */
    'navbar' => [
        'expand'   => 'Perlebar',
        'collapse' => 'Perkecil',
        'refresh'  => 'Perbaharui',
        'add'      => 'Tambah Navbar',
        'edit'     => 'Ubah Navbar',
        'title'    => 'Pengelolaan Navbar',
        'subtitle' => 'Daftar Navbar',
        'fields'   => [
            'parent'         => 'Induk',
            'warning_parent' => 'Tolong dicatat! Navbar hanya mendukung maksimal kedalaman 2.',
            'active'         => 'Aktif',
            'non_active'     => 'Tidak aktif',
            'icon'           => 'Ikon',
            'info_icon'      => 'Untuk ikon lainnya, silahkan lihat',
            'place_icon'     => 'Ikon dari fontawesome.',
            'name'           => 'Judul',
            'place_title'    => 'Nama untuk Navbar.',
            'route'          => 'Route',
            'place_route'    => 'Route untuk link Navbar.',
        ],
        'msg' => [
            'msg_insert'     => 'Navbar berhasil ditambahkan.',
            'msg_update'     => 'Navbar berhasil dirubah.',
            'msg_delete'     => 'Navbar berhasil dihapus.',
            'msg_get'        => 'Navbar berhasil didapatkan.',
            'msg_get_fail'   => 'Navbar tidak ditemukan atau sudah dihapus.',
            'msg_fail_order' => 'Navbar tidak berhasil di urutkan.',
        ],
    ],
    /**
     * user.
     */
    'user' => [
        'add'      => 'Tambah pengguna',
        'edit'     => 'Ubah pengguna',
        'title'    => 'Pengelolaan pengguna',
        'subtitle' => 'Daftar pengguna',
        'fields'   => [
            'active'          => 'Aktif',
            'profile'         => 'Profil',
            'join'            => 'Anggota sejak',
            'setting'         => 'Pengaturan',
            'non_active'      => 'Tidak aktif',
        ],
        'msg' => [
            'msg_insert'   => 'Pengguna berhasil ditambahkan.',
            'msg_ready'    => 'Pengguna sudah terdaftar.',
            'msg_update'   => 'pengguna berhasil dirubah.',
            'msg_delete'   => 'pengguna berhasil dihapus.',
            'msg_get'      => 'pengguna berhasil didapatkan.',
            'msg_get_fail' => 'pengguna tidak ditemukan atau sudah dihapus.',
        ],
    ],

    /**
     * Website.
     */
    'news' => [
        'add'      => 'Tambah Berita',
        'edit'     => 'Ubah Berita',
        'title'    => 'Pengelolaan Berita',
        'subtitle' => 'Daftar Berita',
        'summary' => 'Ringkasan Berita',
        'fields'   => [
            'title'          => 'Judul Berita',
            'status'         => 'Status',
            'create'         => 'Tanggal',
        ],
        'msg' => [
            'msg_insert'   => 'Berita berhasil ditambahkan.',
            'msg_update'   => 'Berita berhasil dirubah.',
            'msg_delete'   => 'Berita berhasil dihapus.',
            'msg_get'      => 'Berita berhasil didapatkan.',
            'msg_get_fail' => 'Berita tidak ditemukan atau sudah dihapus.',
        ],
    ],

    'article' => [
        'add'      => 'Tambah Artikel',
        'edit'     => 'Ubah Artikel',
        'title'    => 'Pengelolaan Artikel',
        'subtitle' => 'Daftar Artikel',
        'fields'   => [
            'title'          => 'Judul Artikel',
            'status'         => 'Status',
            'create'         => 'Tanggal',
        ],
        'msg' => [
            'msg_insert'   => 'Artikel berhasil ditambahkan.',
            'msg_update'   => 'Artikel berhasil dirubah.',
            'msg_delete'   => 'Artikel berhasil dihapus.',
            'msg_get'      => 'Artikel berhasil didapatkan.',
            'msg_get_fail' => 'Artikel tidak ditemukan atau sudah dihapus.',
        ],
    ],

    'report' => [
        'add'      => 'Tambah Laporan',
        'edit'     => 'Ubah Laporan',
        'title'    => 'Pengelolaan Laporan',
        'subtitle' => 'Daftar Laporan',
        'fields'   => [
            'title'          => 'Judul Laporan',
            'status'         => 'Status',
            'create'         => 'Tanggal',
        ],
        'msg' => [
            'msg_insert'        => 'Laporan berhasil ditambahkan.',
            'msg_fail_insert'   => 'Laporan berhasil gagal ditambahkan.',
            'msg_update'        => 'Laporan berhasil dirubah.',
            'msg_fail_update'   => 'Laporan berhasil gagal diubah.',
            'msg_delete'        => 'Laporan berhasil dihapus.',
            'msg_get'           => 'Laporan berhasil didapatkan.',
            'msg_get_fail'      => 'Laporan tidak ditemukan atau sudah dihapus.',
        ],
    ],
];
