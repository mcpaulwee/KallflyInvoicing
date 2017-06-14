

<div id="wrapper">

        <!-- Navigation -->
       <?php $this->load->view('admin/sidenav'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Service Preference</h1>
                    </div>
                </div>
                <table id="mytable" class="table table-bordered table-stripped">
                <thead>
                    <th>Service Name</th>
                     <th>Service Price</th>
                     <th>Delete</th>
                     <th>Edit</th>
                </thead>
                <tbody>
                    <?php foreach($services as $data) { ?>
                       <tr id="service_<?= $data['id']?>">
                           <td>
                             <span class="editable"><?= $data['service_name']?></span>
                             <input class="form-control editable hidden servicename" value="<?= $data['service_name']?>">   
                           </td>
                           <td>
                             <span class="editable"><?="$".$data['service_price']?></span>
                             <input class="form-control editable hidden serviceprice" value="<?= $data['service_price']?>">
                           </td>
                           <td><button type="submit" class="btn btn-danger btn-sm " onclick="deleteService('service_<?= $data['id']?>')"><li class="glyphicon glyphicon-remove"></li></button></td>
                           <td>
                           <button type="submit" class="btn btn-info btn-sm editable" onclick="showedit(<?= $data['id']?>)"><span class="glyphicon glyphicon-pencil"></span></button>
                           <button class="btn btn-success editable hidden" onclick="update(<?= $data['id']?>)"><i class="glyphicon glyphicon-check"></i></button>
                           <button class="btn btn-warning editable hidden cancel" onclick="cancel(<?= $data['id']?>)"><i class="glyphicon glyphicon-ban-circle"></i></button>
                           </td>
                       </tr> 
                    <?php } ?>
                </tbody>
                </table>  
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
<!--   <?php foreach($customers as $data) { ?>

   <input type="text" class="form-control" id="usr" name="roomPrice" value="<?= $data['first_name']; ?>">

  <?php } ?> -->