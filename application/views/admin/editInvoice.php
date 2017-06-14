

<div id="wrapper">

        <!-- Navigation -->
       <?php $this->load->view('admin/sidenav'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Invoice</h1>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php foreach($client as $data){?>
                                <!-- <input type="" name="" value="<?= $data['company']?>">  -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">INVOICED TO</div>
                                    <div class="panel-body">
                                        <strong><?= $data['company'];?></strong><br>
                                        <?= $data['address'];?><br>
                                        <?= $data['email'];?>
                                    </div>
                                </div>
                            <?php } ?>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive">
                                <thead>
                                  <tr>
                                    <th><h4>Item</h4></th>
                                    <th><h4>Price</h4></th>
                                    <th><h4>Quantity</h4></th>
                                    <th><h4>Total</h4></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>VOIP minutes</td>
                                    <td>$20.00</td>
                                    <td>1</td>
                                    <td>$20.00</td>
                                  </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                            <table class="table table-responsive">
                                <tr>    
                                    <td>Sub Total: </td>
                                    <td>20.00</td>
                                </tr>
                                <tr>
                                    <td>Tax: </td>
                                    <td>10.00</td>
                                </tr>
                                <tr>
                                    <td>Grand Total: </td>
                                    <td>30.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Add Item</div> 
                                <table class="table table-bordered"> 
                                    <div class="row">  
                                        <tr>
                                            <td><form method="post" action="<?= base_url('AdminController/addService/'.$data['id'].'')?>">     
                                                <div class="form-group">
                                                    
                                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Service Name" name="servicename"><?php if(form_error('servicename')): ?>
                                                    <span style="color:red"><?= form_error('servicename') ?></p>
                                                    <?php endif; ?></div>  
                                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Service Price" name="serviceprice"><?php if(form_error('serviceprice')): ?>
                                                    <span style="color:red"><?= form_error('serviceprice') ?></p>
                                                    <?php endif; ?></div> 
                                                    <div> <button class="btn btn-success col-md-2" type="submit">Add Service</button></div>  
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <?php if($this->session->flashdata('addedService')){  ?>
                                                        <br><div class="alert alert-success">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong>Success!</strong> <?php echo $this->session->flashdata('addedService'); ?>
                                                        </div>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </form></td>
                                            <td></td>
                                        </tr>
                                        <form>
                                            <tr>
                                                <td>
                                                Service 
                                                </td>
                                                <td><div class="col-md-6" style="margin-bottom: 0px;">
                                                    <label>Services</label>
                                                    <select class="form-control selectService" name="service">
                                                    <option data-value="">--Select Service--</option>
                                                    <?php foreach ($service as $data) : ?>
                                                        <option value="<?= $data['id'] ?>" data-value="<?= $data['service_price']?>"><?= $data['service_name'] ?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Service Price</label>
                                                    <input id="Price" readonly ="" value="" type="text" class="form-control">
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quantity</td>
                                                <td><div class="col-md-4" style="margin-bottom: 0px;"><input type="text" class="form-control"></div></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td><button type="submit" class="btn btn-primary">Add</button></td>
                                            </tr>
                                        </form>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
