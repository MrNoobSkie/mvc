	<div class="container mt-4">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<!-- Modal Button -->
			<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
			Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
					<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>

			<?php foreach($data['mhs'] as $mhs) : ?>
				<ul class="list-group">
				  <li class="list-group-item ">
				  	<?= $mhs['nama']; ?>
				  	<a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="badge bg-danger float-end text-decoration-none ms-1" onclick="return confirm('yakin?');">delete</a>
				  	<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end text-decoration-none ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
				  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end text-decoration-none">detail</a>
				  </li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>

	</div>

		<!-- Modal -->
	<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
				<input type="hidden" name="id" id="id">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>

				<div class="mb-3">
					<label for="nrp" class="form-label">Nrp</label>
					<input type="number" class="form-control" id="nrp" name="nrp">
				</div>

				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="Email" class="form-control" id="email" name="email">
				</div>

				<div class="mb-3">
				<label for="jurusan">Jurusan</label>
				<select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
					<option selected>Open this select menu</option>
					<option value="Teknik Mesin">Teknik Mesin</option>
					<option value="Teknik Industri">Teknik Industri</option>
					<option value="Teknik Komputer">Teknik Komputer</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
				</select>
				</div>


			
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Tambah Data</button>
			</form>
		</div>
		</div>
	</div>
	</div>