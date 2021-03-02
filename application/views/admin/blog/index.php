     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
         <div class="row">
             <div class="col-lg-6">
                 <?= form_error('menu', '<div class="alert alert-warning" role="alert">', '</div>'); ?>

                 <?= $this->session->flashdata('message'); ?>
                 <a href="<?= base_url('admin/blog/addblog') ?>" class="btn btn-primary mb-3">Add New Blog</a>

                 <table class="table table-hover">
                     <thead>
                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Judul</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($blog as $blog) : ?>
                             <tr>
                                 <th scope="row"><?= $i; ?></th>
                                 <td><?= $blog['judul']; ?></td>
                                 <td>
                                     <a href="" class="badge badge-pill badge-success">edit</a>
                                     <a href="" class="badge badge-pill badge-danger">delete</a>
                                 </td>
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