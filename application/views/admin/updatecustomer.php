

<div id="wrapper">

        <!-- Navigation -->
       <?php $this->load->view('admin/sidenav'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update Customer</h1>
                    </div>
                </div>
                <?php foreach($customers as $data) { ?>
                <form action="<?php echo base_url('AdminController/updateCustomer/'.$data["id"].'')?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" value="<?= $data['first_name']; ?>">
                                <?php if(form_error('firstname')): ?>
                                    <span style="color:red"><?= form_error('firstname') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $data['email']; ?>">
                                <?php if(form_error('email')): ?>
                                    <span style="color:red"><?= form_error('email') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="company" class="form-control" value="<?= $data['company']?>">
                                <?php if(form_error('company')): ?>
                                    <span style="color:red"><?= form_error('company') ?></p>
                                <?php endif ?>
                            </div>  
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" value="<?= $data['last_name']; ?>">
                                <?php if(form_error('lastname')): ?>
                                    <span style="color:red"><?= form_error('lastname') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="<?= $data['address']; ?>">
                                <?php if(form_error('address')): ?>
                                    <span style="color:red"><?= form_error('address') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Status</label><br>
                                <select class="form-control" name="status" value="<?= $data['status']?>">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact" value="<?= $data['contact']; ?>">
                                <?php if(form_error('contact')): ?>
                                    <span style="color:red"><?= form_error('contact') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" value="<?= $data['country']; ?>">
                                <?php if(form_error('country')): ?>
                                    <span style="color:red"><?= form_error('country') ?></p>
                                <?php endif; ?>
                            </div>
                            
                        </div> 
                    </div>
                        <div class="row">
                            <div class="form-group  col-md-4">
                                <label for="exampleTextarea">Note</label>
                                <textarea class="form-control" name="note"></textarea>
                            </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                        </div>
                </form>
                <?php } ?> 
                <!-- <div class="row">
                    <div class="col-md-5">
                        <?php if($this->session->flashdata('success')){  ?>
                            <br><div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div> -->
               
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
<!--   <?php foreach($customers as $data) { ?>

   <input type="text" class="form-control" id="usr" name="roomPrice" value="<?= $data['first_name']; ?>">

  <?php } ?> -->