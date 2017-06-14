<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css');?>">
    
    
</head>
<body>
<div class="container center">
    <div class="row" >
        <div class="col-md-offset-6 col-md-3">
            <div class="form-login">
                <form action="<?php echo base_url('LoginController/loginAttempt')?>" method="post">
                <h4>Welcome to Kallfly</h4>
                <input type="text" class="form-control input-sm chat-input" placeholder="username" name="username"/>
                <?php if(form_error('username')): ?>
                    <span style="color: #B22222"><?= form_error('username')?></span>
                <?php endif; ?>
                </br>
                <input type="password" class="form-control input-sm chat-input" placeholder="password" name="password" />
                <?php if(form_error('password')): ?>
                    <span style="color: #B22222"><?= form_error('password')?></span>
                <?php endif; ?>
                </br>
                <div class="wrapper">
                <span class="group-btn">   
                    <button type="submit" class="btn btn-primary btn-md">Login <i class="glyphicon glyphicon-log-in"></i></button>
                </span>
                </div>
                </form>
            </div>
             <?php if($this->session->flashdata('error')){  ?>
                    <br><div class="alert alert-danger">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <strong>Failed!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
            <?php } ?>   
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/jquery-3.1.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
</html>