<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hana</title>
    <link href="public/templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/templates/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="public/templates/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="public/templates/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/templates/css/style.css" rel="stylesheet">
    <link href="public/templates/css/jquery-ui.min.css" rel="stylesheet">
    <link href="public/templates/css/jquery.datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 </head>
<body>
    <header class="clearfix">
            <div class="col-sm-1 ">
            <img src="<?php echo base_url()."/public/templates/images/1Logo.jpg" ?>"alt="hana1" with ="auto" height ="100px">
            </div>
            <div class="col-sm-10">
<!--                 <h2 style="background-color: red">hello</h2>
 -->            <?php   $this->load->view('common/header',isset($data) ? $data :null); ?>
            </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <?php   $this->load->view('common/sidebar',isset($data) ? $data :null); ?>
                </div>
             <div class="col-md-8">
                <?php   $this->load->view('common/modal',isset($data) ? $data :null); ?>
                </div>
                 
	<h1>hdshg;kasdh</h1>
            </div>
        
        
        </div>    
    
    
    </section>
</body>
<script src="public/templates/js/jquery.js"></script>
<script src="public/templates/js/jquery-ui.min.js"></script>
<script src="public/templates/js/html5shiv.min.js"></script>
<script src="public/templates/js/respond.min.js"></script>
<script src="public/templates/js/bootstrap.min.js"></script>
<script src="public/templates/js/jquery.datetimepicker.full.js"></script>
<script src="public/templates/js/bootstrap-datepicker.min.js"></script>
<script src="public/templates/js/bootstrap-datepicker.vi.min.js"></script>
<script src="public/templates/js/ckeditor.js"></script>
<script src="public/templates/js/editor.js"></script>
<script src="public/templates/js/ajax.js"></script>
</html>
