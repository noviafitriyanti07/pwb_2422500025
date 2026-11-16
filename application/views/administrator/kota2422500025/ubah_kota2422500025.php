<div class="row mb-3">
    <?php foreach ($list_kota2422500025 as $kota2422500025) : ?>
        <div class="col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <!-- Tampilan kota2422500025 -->
                <img src="<?= base_url('uploads/kota2422500025/') . $kota2422500025['nama_kota025'] ?>" class="card-img-top" style="height: 250px; object-fit: cover; border-bottom: 1px solid #ddd;">
                
                <div class="card-body p-3 d-flex flex-column justify-content-end">
                    
                    <!-- Form Khusus Tombol Ubah kota2422500025 Spesifik -->
                    <form action="<?= base_url('admin/kota2422500025/ubah_satu_kota2422500025/' . $kota2422500025['id_kota025']) ?>" method="post" enctype="multipart/form-data" class="mb-2">
                        <input type="hidden" name="kota2422500025_id" value="<?= $kota2422500025['id_kota025'] ?>">
                        
                        <!-- Input file untuk memilih kota2422500025 pengganti -->
                        <input type="file" name="kota2422500025_baru" class="form-control mb-2" style="font-size: 13px; padding: 5px; height: auto;" required>
                        
                        <!-- Tombol Ubah -->
                        <button type="submit" class="btn btn-warning btn-sm w-100 font-weight-bold">
                            <i class="fas fa-edit"></i> Ubah kota2422500025
                        </button>
                    </form>

                    <!-- Tombol Hapus -->
                    <a href="<?= base_url('admin/kota2422500025/hapus_kota2422500025/' . $kota2422500025['id_kota025']) ?>" class="btn btn-danger btn-sm w-100 font-weight-bold" onclick="return confirm('Apakah Anda yakin ingin menghapus kota2422500025 ini?')?>">
                        <i class="fas fa-trash"></i> Hapus
                    </a>
                    
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>