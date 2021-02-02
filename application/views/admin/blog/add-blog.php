     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

         <div class="row">
             <div class="col-lg-8">
                 <?= form_open_multipart('admin/blog/addblog'); ?>
                 <div class="form-group row">
                     <label for="user" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="user" name="user" value="<?= $user['name'] ?>" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>">
                         <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="isi" class="col-sm-2 col-form-label">Short Content</label>
                     <div class="col-sm-10">
                         <textarea class="form-control" id="isi1" name="isi1"><?= set_value('isi1'); ?></textarea>
                         <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="isi" class="col-sm-2 col-form-label">Content</label>
                     <div class="col-sm-10">
                         <textarea class="form-control" id="isi" name="isi"><?= set_value('isi'); ?></textarea>
                         <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-2">Picture</div>
                     <div class="col-sm-10">
                         <div class="custom-file">
                             <input type="file" class="custom-file-input" id="image" name="image">
                             <label class="custom-file-label" for="image">Choose file</label>
                         </div>
                         <small>Max 2mb</small><small class="text-danger"><?= $this->session->flashdata('error'); ?> </small>
                     </div>
                 </div>
                 <div class="form-group row justify-content-end">
                     <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                 </div>
                 </form>
             </div>
         </div>

     </div>
     <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->

     <script>
         CKEDITOR.replace('isi1');
         CKEDITOR.replace('isi');
     </script>