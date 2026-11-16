<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2 align-items-center">
	            <div class="col-sm-6">
	                <h1 class="m-0 text-dark font-weight-bold">
	                    <i class="fas fa-tags mr-2 text-primary"></i> kota2422500025
	                </h1>
	            </div><!-- /.col -->
	            <div class="col-sm-6">
	                <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
	                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"> Home</a></li>
	                    <li class="breadcrumb-item active">kota2422500025</li>
	                </ol>
	            </div><!-- /.col -->
	        </div><!-- /.row -->
	    </div><!-- /.container-fluid -->
	</div><!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title" style="font-size: 1.5rem;"><b>Data kota2422500025</b></h5>
							<div class="clearfix"></div>
							<br>
							
							<!-- Tombol Tambah -->
							<a href="<?= base_url('admin/kota2422500025/tambah') ?>" class="btn btn-labeled btn-primary mb-3">
								<span class="btn-label"><i class="fas fa-plus-circle"></i></span> Tambah kota2422500025
							</a>

							<!-- Flashdata Message -->
							<?php if ($this->session->flashdata('message')) : ?>
								<?= $this->session->flashdata('message') ?>
							<?php endif ?>

							<!-- Tabel Data -->
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 45px;" class="text-center">No.</th>
										<th>Nama kota</th>
										<th>Jenis Kota</th>
										<th>Provinsi</th>
										<th>Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($list_kota2422500025 as $kota2422500025) : 
									?>
										<tr data-widget="expandable-table" aria-expanded="false">
											<td class="text-center"><?= $no ?></td>
											<td><?= $kota2422500025['nama_kota025'] ?></td>
											<td><?= $kota2422500025['jenis_kota025'] ?></td>
											<td><?= $kota2422500025['provinsi025'] ?></td>
											<td><?= $kota2422500025['status025'] ?></td>

											<td class="text-center">
											   <a href="<?= base_url('admin/kota2422500025/ubah/') ?><?= $kota2422500025['id_kota025'] ?>">
											        <span class="badge bg-success"><i class="fas fa-edit"></i> Ubah</span>
											   </a>
											   &nbsp;&nbsp;
											   <a href="<?= base_url('admin/kota2422500025/hapus/') ?><?= $kota2422500025['id_kota025'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
											        <span class="badge bg-danger"><i class="fas fa-trash"></i> Hapus</span>
											   </a>
											</td>
										</tr>
									<?php 
										$no++; 
									endforeach 
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
</div>