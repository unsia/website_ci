     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

         <div class="row">
             <div class="col-lg-8">
                 <?= form_open_multipart('admin/user/edit'); ?>
                 <div class="form-group row">
                     <label for="email" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                         <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">Phone Number</label>
                     <div class="col-sm-10">
                         <input type="number" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>">
                         <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">Position</label>
                     <div class="col-sm-10">
                         <select class="form-control" aria-label="Default select example" id="position" name="position">
                             <option value="<?= $user['position']; ?>"><?= $user['position']; ?></option>
                             <option value="Dosen">Dosen</option>
                             <option value="KaProdi">KaProdi</option>
                             <option value="Tutor">Tutor</option>
                             <option value="Rektor">Rektor</option>
                             <option value="WaRek">WaRek</option>
                         </select>
                         <?= form_error('position', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">Address</label>
                     <div class="col-sm-10">
                         <textarea class="form-control" id="address" name="address" rows="3"><?= $user['address'] ?></textarea>
                         <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-2">Picture</div>
                     <div class="col-sm-10">
                         <div class="row">
                             <div class="col-sm-3">
                                 <img src="<?= base_url('assets/admin/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                             </div>
                             <div class="col-sm-9">
                                 <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="image" name="image">
                                     <label class="custom-file-label" for="image">Choose file</label>
                                 </div>
                                 <small>Max 2mb</small>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="form-group row justify-content-end">
                     <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Edit</button>
                     </div>
                 </div>
                 </form>
             </div>
         </div>

     </div>
     <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->