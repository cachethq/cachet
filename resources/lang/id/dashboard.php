<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Ada masalah dengan komponen ini.',
			'message'              => 'Anda perlu menambahkan komponen.',
			'success'              => 'Komponen sudah dibuat.',
			'title'                => 'Tambahkan Komponen',
		),
		'component_statuses'   => 'Status Komponen',
		'components'           => 'Komponen',
		'edit'                 =>  array(
			'failure'              => 'Ada masalah dengan komponen ini.',
			'success'              => 'Komponen sudah diperbarui.',
			'title'                => 'Edit komponen',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Ada masalah dengan grup komponen ini.',
				'success'              => 'Grup komponen sudah ditambahkan.',
				'title'                => 'Tambahkan grup komponen',
			),
			'edit'                 =>  array(
				'failure'              => 'Ada masalah dengan grup komponen ini.',
				'success'              => 'Grup komponen sudah diperbarui.',
				'title'                => 'Edit grup komponen',
			),
			'groups'               => 'Grup komponen|Grup komponen',
			'no_components'        => 'Anda perlu menambahkan grup komponen.',
		),
		'listed_group'         => 'Dikelompokkan dalam :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Panduan',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Ada masalah dengan insiden ini.',
			'success'                    => 'Insiden sudah ditambahkan.',
			'title'                      => 'Tambahkan Insiden',
		),
		'edit'                       =>  array(
			'failure'                    => 'Ada masalah dengan insiden ini.',
			'success'                    => 'Insiden sudah diperbarui.',
			'title'                      => 'Edit insiden',
		),
		'incident-create-template'   => 'Buat Template',
		'incident-templates'         => 'Template Insiden',
		'incidents'                  => 'Insiden',
		'logged'                     => '{0} Tidak ada insiden, bagus.|Anda mencatat satu insiden.|Anda sudah melaporkan <strong>:count</strong> insiden.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Ada masalah dengan template insiden ini.',
				'success'                    => 'Template sudah dibuat.',
				'title'                      => 'Buat template insiden',
			),
			'edit'                       =>  array(
				'failure'                    => 'Ada masalah dengan template insiden ini',
				'success'                    => 'Template sudah diperbarui!',
				'title'                      => 'Edit Template',
			),
			'title'                      => 'Template Insiden',
		),
		'title'                      => 'Insiden &amp; Penjadwalan',
	),
	'login'           =>  array(
		'logged_in'       => 'Anda sudah login.',
		'login'           => 'Masuk',
		'two-factor'      => 'Silakan masukkan token anda.',
		'welcome'         => 'Halo!',
	),
	'logout'          => 'Keluar',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Ada masalah dengan metrik ini.',
			'success'         => 'Metrik sudah dibuat.',
			'title'           => 'Buat metrik',
		),
		'edit'            =>  array(
			'failure'         => 'Ada masalah dengan metrik ini.',
			'success'         => 'Metrik sudah diperbarui.',
			'title'           => 'Edit metrik',
		),
		'metrics'         => 'Metrik',
	),
	'notifications'   =>  array(
		'awesome'         => 'Keren.',
		'notifications'   => 'Notifikasi',
		'whoops'          => 'Waduh.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Ada masalah saat membuat jadwal.',
			'success'         => 'Jadwal sudah ditambahkan.',
			'title'           => 'Tambahkan Jadwal Pemeliharaan',
		),
		'delete'          =>  array(
			'failure'         => 'Jadwal tidak bisa dihapus. Silakan coba lagi.',
			'success'         => 'Jadwal ini sudah dihapus dan tidak akan ditampilkan di halaman status anda.',
		),
		'edit'            =>  array(
			'failure'         => 'Ada masalah saat mengedit jadwal.',
			'success'         => 'Jadwal sudah diperbarui!',
			'title'           => 'Edit Jadwal Pemeliharaan',
		),
		'schedule'        => 'Jadwal Pemeliharaan',
		'scheduled_at'    => 'Dijadwalkan pada :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Pengaturan Aplikasi',
			'images-only'     => 'Hanya gambar yang bisa diunggah.',
			'too-big'         => 'Berkas yang anda unggah terlalu besar. Mohon unggah gambar dengan ukuran tidak lebih dari :size',
		),
		'edit'            =>  array(
			'failure'         => 'Pengaturan tidak bisa disimpan.',
			'success'         => 'Pengaturan sudah disimpan.',
		),
		'security'        =>  array(
			'security'        => 'Keamanan',
			'two-factor'      => 'User tanpa otentikasi dua-faktor',
		),
		'settings'        => 'Pengaturan',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Stylesheet',
		),
		'theme'           =>  array(
			'theme'           => 'Theme',
		),
	),
	'status_page'     => 'Halaman Status',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => '',
			'success'         => '',
			'title'           => '',
		),
		'description'     => '',
		'edit'            =>  array(
			'failure'         => '',
			'success'         => '',
			'title'           => '',
		),
		'not_verified'    => '',
		'subscribers'     => '',
		'verified'        => '',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Ada masalah dengan komponen ini.',
			'success'         => 'Anggota Tim sudah ditambahkan.',
			'title'           => 'Tambahkan Anggota Tim',
		),
		'delete'          =>  array(
			'failure'         => '',
			'success'         => '',
		),
		'description'     => 'Anggota Tim akan bisa menambahkan, mengubah &amp; mengedit komponen dan insiden.',
		'edit'            =>  array(
			'failure'         => 'Ada masalah saat memperbarui.',
			'success'         => 'Profil sudah diperbarui.',
			'title'           => 'Perbarui profil',
		),
		'member'          => 'Anggota',
		'profile'         => 'Profil',
		'team'            => 'Tim',
	),
	'welcome'         =>  array(
		'close'           => 'Langsung ke dashboard saja',
		'message'         => 'Halaman status anda hampir siap! Anda masih perlu mengkonfigurasi beberapa pengaturan',
		'steps'           =>  array(
			'api'             => 'Buat token API',
			'component'       => 'Buat komponen',
			'customize'       => 'Kustomisasi',
			'incident'        => 'Buat insiden',
			'team'            => 'Tambah user',
			'two-factor'      => 'Otentikasi Dua Faktor',
		),
		'welcome'         => 'Selamat Datang di Cachet',
	),
);
