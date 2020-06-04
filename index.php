<?php 
//chatbot
//https://young-waters-26137.herokuapp.com/bot.php?msg=%E0%B9%84%E0%B8%81%E0%B9%88%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B9%84%E0%B8%82%E0%B9%88
    if(isset($_GET['job_no'])) {
        $job_no = $_GET['job_no'];
    } else {
        $job_no = "11111";
    }
    include('../stat/2013/_db.php');
    include("../stat/2013/ajax/_fn_detail.php");
    $o = get_job_detail( $job_no . "");
    $v = $o[0];
    //print_r($v);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Samuiaksorn File Uploads</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">

<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/sweetalert.css">

<link href="css/kanit.css" rel="stylesheet">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>

<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<script>
  // Initialize Firebase
  // TODO: Replace with your project's customized code snippet
  var config = {
    apiKey: "AIzaSyA2O8tSqTh6rRoIHStx5AtKD9NbqNEONWY",
    authDomain: "samuiaksorn-f0b31.firebaseapp.com",
    databaseURL: "https://samuiaksorn-f0b31.firebaseio.com",
    projectId: "samuiaksorn-f0b31",
    storageBucket: "samuiaksorn-f0b31.appspot.com",
    messagingSenderId: "214772868899"
  };
  firebase.initializeApp(config);
</script>

</head>
<body>
<div class="container">
     <div class="row fileupload-buttonbar header no-print">
            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <br/>
                <!-- <img src="http://128.199.174.196/img/logo.png" width="100%"  />
                 -->
                 
                 <!-- <img src="http://erp.samuiaksorn.com/img/logo.png" width="100%" style="    margin-bottom: 20px;" /> -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-3"></div>
            <div class="col-lg-3 col-md-6 col-sm-3"></div>
            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6" style="text-align: right;display: none;">
                 <h2 class="title bold">"สมุยอักษร"</h3>
                <h4 class="title">ยินดีให้บริการค่ะ</h4>
            </div>
    </div>

    <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . 
    "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>


 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

    <div class="row">
        <div class="col-xs-6">   
                <span class="btn btn-success btn-back">
                    <a href="http://erpsamuiaksorn.com" style="color:#fff">
                        <i class="fa fa-arrow-left"></i>
                        <span>กลับไปหน้าค้นหา</span>
                    </a>
                </span>    
         </div>
         <div class="col-xs-6"> 
            <span class="btn btn-primary btn-next pull-right">
                    <a href="http://erpsamuiaksorn.com" style="color:#fff">
                        
                        <span>งานอื่นๆของลูกค้า</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </span>  
         </div>
    </div>
    <div class="row">     
         <div class="col-xs-12">                
            <h2 class="progress-type-title"></h2> 
            <h3 class="title">สถานะงาน <div class="line-it-button" data-lang="en" data-type="share-a" data-url="<?php echo $actual_link ?>" style="display: none;"></div></h3>           
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                    <span class="sr-only"><span class="progress-percent"></span></span>
                </div>
                <span class="progress-type"></span>
                <span class="progress-completed"></span>
            </div>
        </div>
    </div>

    <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge job_no"></div>
                                    <div>JOB NO.</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge cus_no"></div>
                                    <div>CUSTOMER NO</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge start_date"><?php echo $v[0]; ?></div>
                                    <div>วันรับงาน</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge end_date"><?php echo $v[17]; ?></div>
                                    <div>วันนัดส่งงาน</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

    <div class="row">
     
            <div class="col-xs-12 col-sm-3">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">ลูกค้า</span>
                                            <input type="text" class="form-control print_coop" 
                                            value="<?php echo $v[1]; ?>" placeholder="">
                                        </div>
        </div>                  
        <div class="col-xs-12 col-sm-3">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">ผู้รับงาน</span>
                                            <input type="text" class="form-control print_coop" 
                                            value="<?php echo $v[15]; ?>" placeholder="">
                                        </div>
        </div>
         <div class="col-xs-12 col-sm-3">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">การตรวจสอบ</span>
                                            <input type="text" class="form-control state" placeholder="Open">
                                        </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 quotation-container">
                                            <div class="form-group input-group">
                                            <span class="input-group-addon">ราคา</span>
                                            <input type="password" class="form-control quotation" placeholder="คลิกเพื่อดูข้อมูล">
                                        </div>
                                        </div>

<!-- PAPER   COLOR   งานหลังพิมพ์    จำนวนเที่ยววิ่ง ช่างอาร์ต   เครื่องพิมพ์    printer COOR    
    NEW/OLD -->    

        <div class="col-xs-12 col-sm-3" style="display: none">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">NEW/OLD</span>
                                            <input type="text" class="form-control new_old" value="<?php echo $v[16]; ?>">
                                        </div>
                                        </div>

                 <div class="col-xs-12 col-sm-3" style="display: none">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">เครื่องพิมพ์</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[13]; ?>">
                                        </div>
                                        </div>

            <div class="col-xs-12 col-sm-3">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">งานหลังพิมพ์</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[10]; ?>">
                                        </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3" style="display: none">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">จำนวนเที่ยววิ่ง</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[11]; ?>">
                                        </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">ช่างอาร์ต</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[12]; ?>">
                                        </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3" style="display: none">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">ช่างพิมพ์</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[14]; ?>">
                                        </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-3">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">กระดาษ</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[8]; ?>">
                                        </div>
                                        </div>

<div class="col-xs-12 col-sm-3">
                                       <div class="form-group input-group">
                                            <span class="input-group-addon">สี</span>
                                            <input type="text" class="form-control printer" value="<?php echo $v[9]; ?>">
                                        </div>
                                        </div>

    </div>



    <style type="text/css">
        .panel-footer {
            display: none;
        }
    </style>

    
    
   

<!--     <br>
    <br> -->

<div class="row">
    <div class="col-md-6 no-print">
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="#" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        
            <ul class="nav nav-tabs">
        <li class="active"><a href="index.html">รายการไฟล์ที่อัพโหลด</a></li>
    </ul>
    <div class="row fileupload-buttonbar btn-row">
            <div class="col-xs-12">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel" style="display: none">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped">
        <thead><th>Thumb</th><th>Name</th><th>Size</th><th>Delete</th></thead>
        <tbody class="files"></tbody>

        </table>
    </form>


    
    </div>
    <style type="text/css">
        .embed-responsive-16by9 {
            height: 100vh;
        }
    </style>
    <div class="col-md-6" >
                        <ul class="nav nav-tabs" style="margin-bottom: 20px">
        <li class="active"><a href="index.html">บันทึกการทำงาน</a></li>
    </ul>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" frameborder="0" src="../stat/2013/check/ochat.php?job_no=<?php echo $job_no;?>"></iframe>

    </div>
    

    </div>
</div>
<div class="row no-print analysis">
<div class="col-xs-12">
                        <ul class="nav nav-tabs" style="margin-bottom: 20px">
        <li class="active"><a href="index.html">ระยะเวลาเปลี่ยนสถานะ</a></li>
    </ul>

    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" frameborder="0" src="../stat/2013/check/vchat.php?job_no=<?php echo $job_no;?>"></iframe>
    
    </div>
</div>
</div>




</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script src="js/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/sweetalert.js"></script>
<!-- <script src="js/main.js"></script> -->
<script type="text/javascript">
    function call(j,s,st,h,p){
        $.ajax({
                url:'../stat/2013/check/_ocheck.php',
                type: 'GET',
                data: {
                    job_no: j,
                    state: s,
                    stage: st,
                    holder: h,
            partner: p
                },
                dataType: 'jsonp',
                dataCharset: 'jsonp',
                success: function(data) {
                    console.log(data.items);
                    var c = 0;
                    var table='<table class="stbl" cellspacing="0">';
                    /* loop over each object in the array to create rows*/
                    table += "<tr><th class='first'>Job No.</th><th class='second'>ลูกค้า</th><th>วันรับงาน</th><th>นัดรับงาน</th><th>ผู้รับงานปัจจุบัน</th><th>การตรวจสอบ</th><th>สถานะงาน</th><th class='last'>ความคืบหน้า</th></tr>";
                    $.each(data.items, function(index, item){
                        var myjobno;
                        if(item.fax == null) {
                            job_name = item.job_no;
                        
                        } else {
                            job_name = item.fax;
                        
                        }
                        myjobno = item.job_no;

                        $(".progress-type-title").html(job_name);

                        $(".quotation").val(item.planned_revenue);

                        console.log("phone: " + item.phone);

                          $('.quotation-container').click(function(e) {
    swal({
      title: "ขอทราบ Password สำหรับดูราคา", 
      text: "โดยปกติแล้ว Password จะเป็นเบอร์โทรศัพท์แบบไม่ต้องมีขีดค่ะ เช่น 077420192 หรือ 0818956611", 
      type: "input",
      inputType: "password",
      showCancelButton: true,
      closeOnConfirm: false,
    }, function(typedPassword) {
        if(item.phone)
            var password = (item.phone).replace(/-/g, "");
        else
            var password = "077420192";
        console.log(password);
        if(typedPassword == password || typedPassword == "077420192") {
            $(".quotation-container .quotation").attr("type","text");
            swal.close();
        } else {
            swal("รหัสผ่านผิด!", "กรุณากรอกใหม่ หรือติดต่อขอรหัสผ่านได้ที่ LINE: @samuiaksorn", "warning");
        }
        console.log(typedPassword);
    });
  });

                        $(".job_no").html(myjobno);

                        $(".cus_no").html("<a style='color:#fff;text-decoration:underline' href='http://erpsamuiaksorn.com/stat/2013/check/new.php?customer=" + item.customer_no + "'>"+item.customer_no+"</a>");

                        $(".btn-next a").attr("href","http://erpsamuiaksorn.com/stat/2013/check/new.php?customer=" + item.customer_no);

    date_open = item.date_open;
    if(date_open != null)
    date_open = date_open.substr(0,10);

    date_closed = item.date_closed;
    if(date_closed != null)
    date_closed = date_closed.substr(0,10);

    date_deadline = item.date_deadline;

    $(".start_date").html(date_open);
    $(".end_date").html(date_deadline);

    var percent = item.probability;

    $(".progress-bar").attr("aria-valuenow",percent);
    $(".progress-bar").attr("style","width:" + percent + "%");

    $(".progress-completed").html(percent + "%");

    if(typeof item.date_deadline !== 'undefined' && item.date_deadline !== null) {

        var oneDay = 86400000;


        var today = new Date();
        var dead = new Date(item.date_deadline);
console.log((dead - today)/oneDay );
if((dead - today) <= (oneDay)) {
    late_str = '<br><span class="label label-success">due</span>';
} else if((dead - today) < (oneDay * 3)) {
    late_str = '<br><span class="label label-warning">warn</span>';
} else {
    late_str = '';
}

    date_deadline = item.date_deadline;
    date_deadline = date_deadline.substr(0,10);
    late = (today > dead) ? "late" : "";
    late_str = (today > dead) ? '<br><span class="label label-danger">late !</span>' : late_str;
} else {
    date_deadline = "-";
    late = "";
    late_str = "";
}

                        table+='<tr><td><a class="fancybox" href="cchat.php?job_no=' + myjobno + '">'+item.job_no + " " + job_name + 
                        '</a></td><td class="partner second">'+item.p_name+'</td><td style="width:100px">'+date_open+'</td><td style="width:100px" class="'+late+'">'+date_deadline+late_str+'</td><td class="stakeholder">'+item.login+'</td><td class="state">'+
                        item.state+'</td><td>'+item.s_name+'</td><td>'+
                        '<div class="progress progress-striped active"> <div class="progress-bar"  role="progressbar" aria-valuenow="'+item.probability+'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.probability+'%">' +
   '<span class="sr-only">'+item.probability+'%</span></div></div>'+item.probability+'%</td></tr>';   
                        c++;    

                    });
                    table+='</table>';
                
                }
        });
    }

    $(function(){
        call("<?php echo $job_no;?>","","","","");
    });
</script>

<script type="text/javascript">
    $(function() {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'upload.php?job_no=' + '<?php echo $_GET["job_no"]; ?>'
    });

    // Load existing files:
    $('#fileupload').addClass('fileupload-processing');
    $.ajax({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: $('#fileupload').fileupload('option', 'url'),
        dataType: 'json',
        context: $('#fileupload')[0]
    }).always(function() {
        $(this).removeClass('fileupload-processing');
    }).done(function(result) {
        $(this).fileupload('option', 'done')
            .call(this, $.Event('done'), { result: result });
    });


});
</script>

<style type="text/css">
@media (min-width: 768px) {
    .header {
        //display: none;
    }

}
//@media (max-width: 768px) {
    .analysis {
        display: none;
    }
//}

    body {
        font-family: 'Kanit', sans-serif;
        padding-top: 0px;
        background: #fff;
    }
    .btn.delete,.toggle {
        //display: none;
    }
    .btn {
            padding: 6px 10px;
    }
    .title {
        color: #0073bc;
    }
    .btn-row {
        max-height: 50px;
        margin-top: 20px;
    }
    .bold {
        font-weight: 700;
    }

    .progress {
    position: relative;
    height: 48px;
}
.progress > .progress-type {
    font-size: 24px;
    position: absolute;
    left: 0px;
    font-weight: 800;
    padding: 3px 30px 2px 10px;
    color: rgb(255, 255, 255);
    background-color: rgba(25, 25, 25, 0.2);
        //width: 100%;
    height: 100%;
    line-height: 42px;
}
.progress > .progress-completed {
    position: absolute;
    right: 0px;
    font-weight: 800;
    padding: 3px 10px 2px;
    font-size: 32px;
}

.one, .two, .three{
    position:absolute;
    margin-top:-10px;
    z-index:1;
    height:40px;
    width:40px;
    border-radius:25px;
    
}
.one{
    left:25%;
}
.two{
    left:50%;
}
.three{
    left:75%;
}
.
.primary-color{
    background-color:#4989bd;
}
.success-color{
    background-color:#5cb85c;
}
.danger-color{
    background-color:#d9534f;
}
.warning-color{
    background-color:#f0ad4e;
}
.info-color{
    background-color:#5bc0de;
}
.no-color{
    background-color:inherit;
}

.input-group-addon {
    width: 30%;
}

.input-group {
    width: 100%;
}

.panel-body {
        padding: 20px 0px;
}

@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

.huge {
    font-size: 18px;
}
.fileupload-progress {
    display: none;
}
.quotation-container {
    cursor: pointer;
}
.quotation {
    color:blue;
}
.quotation::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: blue;
}
.quotation::-moz-placeholder { /* Firefox 19+ */
  color: blue;
}
.quotation:-ms-input-placeholder { /* IE 10+ */
  color: blue;
}
.quotation:-moz-placeholder { /* Firefox 18- */
  color: blue;
}

</style>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>
</html>
