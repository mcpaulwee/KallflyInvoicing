

<div id="wrapper">
        <!-- Navigation -->
        <?php $this->load->view('admin/sidenav'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Customers</h1>
                    </div>
                </div>
                <form action="<?php echo base_url('AdminController/addCustomer')?>" method="post">
                    <div class="row">
                   
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname">
                                <?php if(form_error('firstname')): ?>
                                    <span style="color:red"><?= form_error('firstname') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                                <?php if(form_error('email')): ?>
                                    <span style="color:red"><?= form_error('email') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="company" class="form-control">
                                <?php if(form_error('company')): ?>
                                    <span style="color:red"><?= form_error('company') ?></p>
                                <?php endif ?>
                            </div>  
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                                <?php if(form_error('lastname')): ?>
                                    <span style="color:red"><?= form_error('lastname') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address">
                                <?php if(form_error('address')): ?>
                                    <span style="color:red"><?= form_error('address') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Status</label><br>
                                <select class="form-control" name="status">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact">
                                <?php if(form_error('contact')): ?>
                                    <span style="color:red"><?= form_error('contact') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country">
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
                            <button type="submit" class="btn btn-success">Add Customer</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-5">
                        <?php if($this->session->flashdata('success')){  ?>
                            <br><div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('updated') ){  ?>
                            <br><div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('updated'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <br><h3>Customer Details</h3>
                            <div class="table-responsive">
                                <!-- this is table  -->             
                                <table id="mytable" class="table table-bordered table-striped">                
                                    <thead>  
                                        <th>Company</th>           
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>  
                                    <?php foreach($customers as $row){?> 
                                        <tr id="customer_<?= $row['id']?>">
                                           <td><?= $row['company']?></td>
                                           <td><?= $row['first_name']." ".$row['last_name']?></td>
                                           <td><?= $row['address']?></td>
                                           <td><?= $row['contact']?></td>
                                           <td><?= $row['email']?></td>
                                           <td><?= $row['country']?></td>
                                           <td><?= $row['status']?></td>
                                           <td><?= $row['note']?></td>
                                           <td><a class="btn btn-info btn-sm" href="<?= site_url('AdminController/selectUpdateCustomer/'.$row["id"].''); ?>" name="room_id" value="<?= $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                           <td>
                                                <button type="submit" class="btn btn-danger btn-sm " onclick="deleteCustomer('<?= $row['id']?>')"><li class="glyphicon glyphicon-remove"></li></button>
                                           </td>
                                        </tr> 
                                        <?php } ?> 
                                    </tbody> 
                                    
                                </table>
                                <!-- end of table -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>

