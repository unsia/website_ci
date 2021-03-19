     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
         <div class="row">
             <div class="col-lg-6">
                 <?= form_error('menu', '<div class="alert alert-warning" role="alert">', '</div>'); ?>

                 <?= $this->session->flashdata('message'); ?>
                 <a href="<?= base_url('admin/event/export_htc') ?>" class="btn btn-success mb-3">Export Excel</a>

                 <table class="table table-hover">
                     <thead>
                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Nama</th>
                             <th scope="col">NIM</th>
                             <th scope="col">Program Studi</th>
                             <th scope="col">Email</th>
                             <th scope="col">No. Handphone</th>
                             <th scope="col">Kehadiran</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($htc as $htc) : ?>
                             <tr>
                                 <th scope="row"><?= $i; ?></th>
                                 <td><?= $htc['nama']; ?></td>
                                 <td><?= $htc['nim']; ?></td>
                                 <td><?= $htc['prodi']; ?></td>
                                 <td><?= $htc['email']; ?></td>
                                 <td><?= $htc['phone']; ?></td>
                                 <td><?= $htc['kehadiran']; ?></td>
                             </tr>
                             <?php $i++; ?>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>

     </div>
     <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->