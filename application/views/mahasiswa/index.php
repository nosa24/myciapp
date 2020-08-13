<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data mahasiswa <?= $this->session->flashdata('insertberhasil'); ?> <strong>berhasil</strong> <?= $this->session->flashdata('tipe'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/halamanTambah" class="btn btn-primary"> Tambah Mahasiswa</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>

						<a href="<?= base_url(); ?>mahasiswa/hapusMhs/<?= $mhs['id']; ?>/<?= $mhs['nama']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?')">hapus</a>

						<a href="<?= base_url(); ?>mahasiswa/detailMhs/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>