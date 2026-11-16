<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2 align-items-center">
	            <div class="col-sm-6">
	                <h1 class="m-0 text-dark font-weight-bold">
	                    <i class="fas fa-tags mr-2 text-primary"></i> Kota2422500025
	                </h1>
	            </div><!-- /.col -->
	            <div class="col-sm-6">
	                <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
	                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/kota2422500025') ?>">Kota2422500025</a></li>
						<li class="breadcrumb-item active">Tambah Kota2422500025</li>
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
							<h3 class="card-title font-weight-bold" style="font-size: 1.5rem;"><i class="fas fa-plus-circle mr-2 text-primary"></i>Tambah Kota2422500025</h3>

							<p class="card-text">
								<form method="post">
									<div class="mb-3">
										<label for="nama_kota025" class="form-label">Nama kota</label>
										<input type="text" class="form-control" name="nama_kota025" id="nama_kota025" aria-describedby="nama_kota025">
									</div>
									<div class="mb-3">
										<label for="jenis_kota025" class="form-label">Jenis Kota</label>
										<textarea name="jenis_kota025" id="jenis_kota025" cols="30" rows="10" class="form-control"></textarea>
									</div>
									<div class="mb-3">
										<label for="provinsi025" class="form-label">Provinsi</label>
										<textarea name="provinsi025" id="provinsi025" cols="30" rows="10" class="form-control"></textarea>
									</div>
									<div class="mb-3">
										<label for="status025" class="form-label">Status Kota</label>
										<textarea name="status025" id="status025" cols="30" rows="10" class="form-control"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Tambah</button>
									<a href="<?= base_url('admin/kota2422500025') ?>" class="btn btn-danger">Kembali</a>
								</form>
							</p>
						</div>
					</div>

				</div>
				<!-- /.col-md-6 -->

			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->