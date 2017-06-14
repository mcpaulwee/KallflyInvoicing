    

    
    <!-- jQuery -->
    <script type="text/javascript" src="<?= base_url('assets/jquery-3.1.1.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/DataTables-1.10.15/media/js/jquery.dataTables.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/DataTables-1.10.15/media/js/dataTables.bootstrap.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/raphael/raphael.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/template/dist/js/sb-admin-2.js');?>"></script>
    <script src="<?= base_url('assets/dist/sweetalert.min.js')?>"></script>

    <script type="text/javascript">

        function update($id){
          
          var tr = $('tr#'+'service_'+$id)
          var name = tr.find('.servicename').val()
          var price = tr.find('.serviceprice').val()
         
          $.ajax({
              url: "<?= base_url('AdminController/updateService'); ?>",
              method: 'post',
              data: {
                name: name,
                price: price,
                id:  $id,
              },
              success: function(data) {
                location.reload(); 
              }
            })

        }

        function cancel($id){
          var tr = $('tr#'+'service_'+$id)
          tr.find('.editable').toggleClass('hidden')
          var name = tr.find('.servicename').val()
          var price = tr.find('.serviceprice').val()
        }

        function showedit($id){
                var tr = $('tr#'+'service_'+$id)
                tr.find('.editable').toggleClass('hidden')

             }

        function  deleteService(id){

          swal({
              title: "Are you sure?",
              text: "This Service will be deleted!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel please!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
        function(isConfirm){
              if (isConfirm) {
                swal("Deleted!", "Service has been deleted.", "success");
               $.ajax({
                url: "<?= base_url('AdminController/deleteService'); ?>",
                data: {serviceid:id},
                type: 'post',
                success: function(res){
                    $('#service_'+id).remove();
                }
            });
              } else {
                swal("Cancelled", "Service not deleted ", "error");
              }
            });

        }
        function deleteCustomer(id){

            swal({
              title: "Are you sure?",
              text: "This Customer will be deleted!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel please!",
              closeOnConfirm: false,
              closeOnCancel: false
            },
        function(isConfirm){
              if (isConfirm) {
                swal("Deleted!", "Customer has been deleted.", "success");
               $.ajax({
                url: "<?= base_url('AdminController/deleteCustomer'); ?>",
                data: {customerid:id},
                type: 'post',
                success: function(res){
                    $('#customer_'+id).remove();
                }
            });
              } else {
                swal("Cancelled", "Customer not deleted ", "error");
              }
            });
           
        }

        $(document).ready(function(){
          $('#mytable').DataTable()
        }); 
    </script>

    <script type="text/javascript">
      $(".selectService").on('change',function(){
        var price = $('.selectService option:selected').data('value');

        document.getElementById('Price').value = '$' + price;
      })
    </script>
</body>


</html>
