<?php
$model = new jenis_produk();
$data_jenis_produk = $model->dataJenis();
?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jenis Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Jenis Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach ($data_jenis_produk as $row){
                                        ?>
                                        <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama'] ?></td>                
                                        </tr>
                                        <?php
}
?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>