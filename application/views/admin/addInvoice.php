

<div id="wrapper">

        <!-- Navigation -->
       <?php $this->load->view('admin/sidenav'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Clients</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                                <!-- this is table  -->
                                <table id="mytable" class="table table-bordered table-striped">
                                    <thead>
                                        <th>Company</th>
                                        <th>Receivable</th>
                                        <th>Add Invoice</th>
                                    </thead>      
                                    <tbody>
                                    <?php foreach($customers as $row){?>
                                        <tr>
                                           <td><?= $row['company']?></td>
                                           <td>0</td>
                                           <td><a href="<?= base_url('AdminController/selectClient/'.$row['id'].'')?>" class="btn btn-success">+</a></td>
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
