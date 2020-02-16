<!DOCTYPE html>
<html lang="vi">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="black/img/apple-icon.png">
  <link rel="icon" type="image/png" href="black/img/favicon.png">
  <title>
  Kiểm Tra Hotmail Live|Die  </title>
  <!--     Fonts and icons     -->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Nucleo Icons -->
   <link href="black/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="black/css/black-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="black/demo/demo.css" rel="stylesheet" />
  <link href="black/css/linhcoder.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script>
   let base_url  = "https://www.102tools.com";   
    function request(method,url,type,data){
      return jQuery.ajax({
      url: url,
      type: method,
      dataType: type,
      data: data
      });
    }
   function deduplicate(arr) {
   return arr.filter((value, index, arr) => arr.indexOf(value) === index);
   }
   function progress(live,die,error,total){
            var progress = Math.floor(100*(live+die+error)/total)+'%';
            $('#progress').attr('style','width: '+ progress);
            $('#value-progress').html(progress);                
    }
    function update(value,id){
        var arr = $(id).val().split("\n");
        arr.remove(value);
        $(id).val(arr.join("\n"));
    }
    Array.prototype.remove = function(value) {
        var index = this.indexOf(value);
        if (index != -1) {
            this.splice(index, 1);
        }
        return this;
    }
   function coppy(id){
        $(id).select();
        document.execCommand('copy');
        Toast.fire({icon: 'success',title: 'Sao Chép Thành Công'});
   }
     </script>
  </head><body>
                  <form id="logout-form" action="/" method="POST" style="display: none;">
              <input type="hidden" name="token" value="">         
           </form>
          <div class="wrapper">
  <div class="navbar-minimize-fixed">
  <button class="minimize-sidebar btn btn-link btn-just-icon">
    <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
    <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
  </button>
</div>
<div class="sidebar" data="orange">
  <div class="sidebar-wrapper">
    <div class="logo text-center">
        <a href="/" class="simple-text logo-normal">
          <i class="fas fa-star fa-spin"></i> LinhCoder.Net        </a>
    </div>
    <ul class="nav">
      <li>
        <a href="/">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Trang Chủ</p>
        </a>
      </li> 
       <li class=""> <a data-toggle="collapse" href="#pagesExamples">
        <i class="tim-icons icon-settings"></i> 
        <p> Email Tools<b class="caret"></b> </p> </a> 
       <div class="collapse " id="pagesExamples"> 
        <ul class="nav"> 
        <li>
        <a href="/scan-mail-cookie.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
         Scan Mail Cookie</span> </a>
          </li>   
         <li>
        <a href="/random-list-email-v1.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
         Random List Email v1</span> </a>
          </li>   
          <li>
        <a href="/random-list-email-v2.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
         Random List Email v2</span> </a>
          </li>   
         <li>
        <a href="/hotmail-live-die.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
         Lọc Hotmail Live|Die</span> </a>
          </li>  
         <li>
        <a href="/yahoo-live-die.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
          Lọc Yahoo Live|Die</span> </a>
          </li>    
          <li>
        <a href="/email-facebook.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
         Lọc Email Có Facebook</span> </a>
          </li>    
           <li>
        <a href="/scan-info-from-email.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
          Scan Info From Email</span> </a>
          </li>    
        </ul> 
       </div> </li> 
      <li>
      
      <li class=""> <a data-toggle="collapse" href="#pagesExamples1">
        <i class="tim-icons icon-settings"></i> 
        <p> Other Tools<b class="caret"></b> </p> </a> 
       <div class="collapse " id="pagesExamples1"> 
        <ul class="nav"> 
           <li>
        <a href="/check-login-garena.html"> <span class="sidebar-mini-icon">VIP</span>
         <span class="sidebar-normal"> 
          Check Login Garena</span> </a>
          </li>    
        </ul> 
       </div> </li> 
      <li>
        <a href="/dang-xuat.html">
          <i class="tim-icons icon-button-power"></i>
          <p>Đăng Xuất</p>
        </a>
      </li>
    </ul>
  </div>
</div> <div class="main-panel" data="orange">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize d-inline">
        <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
        </button>
      </div>
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="javascript:void(0)">Kiểm Tra Hotmail Live|Die</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="search-bar input-group">
          <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
            <span class="d-lg-none d-md-block">Search</span>
          </button>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src="https://graph.fb.me/100042123080414/picture?type=large" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            </a><ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">IP: </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-link">
              <a href="/dang-xuat.html" class="nav-item dropdown-item">Đăng Xuất</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar -->  
<div class="content"><div class="row">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Nhập Thông Tin</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
              <label>List Hotmail:</label>
              <textarea id="listhotmail" rows="22" class="form-control text-success"></textarea>
          </div>
           <div class="row">
       <div class="col-md-6 ml-auto mr-auto">
        <div class="form-group">
              <label>Thread:</label>
              <input type="number" id="thread" value="5" class="form-control">
            </div>
        </div>
         </div>
          <center>
            <button type="submit" id="start" onclick="start();" class="btn btn-success"><i class="fas fa-paper-plane"></i> Bắt Đầu</button>
            <button type="submit" disabled id="stop" onclick="stop();"class="btn btn-danger"><i class="fas fa-pause"></i> Dừng Lại</button>
        </center>
         <div class="form-group" style="display: none;" id="show-progress"><br>
              <div class="progress-container"> 
            <span class="progress-badge">Tiến Trình</span> 
            <div class="progress"> 
             <div id="progress" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 
              <span id="value-progress" class="progress-value">0%</span> 
             </div> 
            </div> 
           </div> 
        </div>  
    </div>
</div>
</div>
<div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kết Quả</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <center>
                <span class="badge mr-3 mb-0 badge-info"><span class="h6 text-white">Total: <span id="total">0</span></span></span>
                <span class="badge mr-3 mb-0 badge-success"><span class="h6 text-white">Live: <span id="live">0</span></span></span>
                <span class="badge mr-3 mb-0 badge-danger"><span class="h6 text-white">Die: <span id="die">0</span></span></span>
                <span class="badge mr-3 mb-0 badge-warning"><span class="h6 text-white">Error: <span id="error">0</span></span></span>
            </center>
        </div>  
        <div class="form-group">
          <label>Hotmail Đã Đăng Kí: </label>
          <textarea id="mail-live" readonly rows="10" class="form-control text-success"></textarea>
          <center><button class="btn" onclick="coppyLive();"><i class="fa fa-clone"></i> Sao Chép Hotmail Live</button></center>
      </div>  
      <div class="form-group">
          <label>Hotmail Chưa Đăng Kí:</label>
          <textarea id="mail-die" readonly rows="10" class="form-control text-success"></textarea>
          <center><button class="btn" onclick="coppyDie();"><i class="fa fa-clone"></i> Sao Chép Hotmail Die</button></center>
      </div>
  </div>
</div>
</div>    
</div>    
<script>
    var maillist;
    var thread;
    var delay;
    var live;
    var die;
    var flag;
    var load;
      function start(){
        maillist = deduplicate($('#listhotmail').val().split("\n"));
        $('#listhotmail').val(maillist.join("\n"));
        max_thread = $('#thread').val();
        total = maillist.length;
        thread = parseInt(total / max_thread);
        $("#total").text(total)
        live = 0;
        $('#live').html(0);
        die = 0;
        $('#die').html(0);
        error = 0;
        $('#error').html(0);
        flag = true;
        wait(true);
        progress(live,die,error,total);
        load = 0;
        run_thread(thread,total);
    }
    function run_thread(thread,total) {
    Toast.fire({icon: 'success',title: 'Ok' +thread});          
    if(thread != 0){
    for(var i=0; i<thread; i++){
    (function(i) {
    setTimeout(function() {
    for (var j = parseInt((i / thread) * total); j < parseInt(((i+1) / thread) * total); j++) {
    run(maillist[j]);
    }
    }, 1000 * i);
    })(i);  
    }
    }else{
    for (var i = 0; i < total; i++) {
    run(maillist[i]);
    }   
    }
    }
   async function run(email){
    if(!flag){
      return;
    }
   await $.ajax({
      type: "POST",
      contentType: 'application/json',
      url: 'http://35.184.21.172',		
      data: JSON.stringify{m1:'email1@gmail.com'},
      success: function (response){
          alert(response)
          if(response.status == true) {
          $('#live').html(++live);
          $('#mail-live').append(email + "\n");
          }else if(response.status == false){
          $('#die').html(++die);
          $('#mail-die').append(email + "\n");
          }else{
          $('#error').html(++error);    
          }
          update(email,"#listhotmail");
          progress(live,die,error,total);
      },
      error: function (xhr, textStatus, thrownError) {
                    if (xhr.status == 404) {
                        Toast.fire({icon: 'error',title: 'API Xảy Ra Lỗi'});                    
                        wait(false);
                        flag = false;
                        return;
                    }else if (xhr.status == 503) {
                        Toast.fire({icon: 'error',title: 'Server Quá Tải'}); 
                        wait(false);
                        flag = false;
                        return;
                    }else{
                    $('#error').html(++error);
                    progress(live,die,error,total);
                    }
      }
      })
      ++load;
      if(load == total){
      wait(false);
      flag = false;
      return;
      }
    }
    function stop() {
        wait(false);
        Toast.fire({icon: 'success',title: 'Đã Dừng Lọc'});  
        flag = false;
    }
    function wait(msg){
    if(msg){
        $('#start').html('<i class=\"fa fa-spinner fa-spin\"></i> Đang Xử Lý').prop('disabled', true);
        $('#stop').prop('disabled', false);
        $('#listhotmail').prop('disabled',true);
        $('#thread').prop('disabled',true);  
    }else{
        $('#start').html('<i class=\"fas fa-paper-plane\"></i> Bắt Đầu').prop('disabled', false);
        $('#stop').prop('disabled', true);
        $('#listhotmail').prop('disabled',false);
        $('#thread').prop('disabled',false);          
    }
    }
</script>
     </div>
     <footer class="footer">
     <div class="container-fluid">
     <div class="copyright">
     ©
     <script>
     document.write(new Date().getFullYear())
     </script> LinhCoder.Net <i class="tim-icons icon-heart-2"></i> Designer By
     <a href="/index.html" target="_blank">Hoàng Văn Lĩnh</a>.
     </div>
     </div>
     </footer> </div>
     </div>          <div class="fixed-plugin">
     <div class="dropdown show-dropdown">
     <a href="#" data-toggle="dropdown">
     <i class="fa fa-cog fa-2x"> </i>
     </a>
     <ul class="dropdown-menu">
     <li class="header-title"> Sidebar Background</li>
     <li class="adjustments-line">
     <a href="javascript:void(0)" class="switch-trigger background-color">
     <div class="badge-colors text-center">
     <span class="badge filter badge-primary" data-color="primary"></span>
     <span class="badge filter badge-info" data-color="blue"></span>
     <span class="badge filter badge-success" data-color="green"></span>
     <span class="badge filter badge-warning active" data-color="orange"></span>
     <span class="badge filter badge-danger" data-color="red"></span>
     </div>
     <div class="clearfix"></div>
     </a>
     </li>
     <li class="header-title">
     Sidebar Mini
     </li>
     <li class="adjustments-line">
     <div class="togglebutton switch-sidebar-mini">
     <span class="label-switch">OFF</span>
     <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="" data-off-label="" />
     <span class="label-switch label-right">ON</span>
     </div>
     </li>
     <li class="header-title">Liên Hệ Hỗ Trợ</li>
     <li class="button-container text-center">
     <a href="//facebok.com/100042123080414" target="blank" class="btn mr-1 btn-info btn-simple"><i class="fab fa-facebook-square"></i> Facebok</a>
     <a href="//zalo.me/0353257530" target="blank" class="btn mr-1 btn-success btn-simple"><i class="fas fa-comments"></i> Zalo</a>
     <br>
     <br>
     </li>
     </ul>
     </div>
     </div>
     <script>
     var Toast = Swal.mixin({
     toast: true,
     position: 'bottom-end',
     showConfirmButton: false,
     timer: 2000,
     timerProgressBar: true,
     onOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
     }
     })
     var hvl = Swal.mixin({
     toast: true,
     position: 'top-end',
     showConfirmButton: false,
     timer: 2000,
     timerProgressBar: true,
     onOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
     }
     })
     </script>
     <!--   Core JS Files   -->
     <script src="black/js/core/jquery.min.js"></script>
     <script src="black/js/core/popper.min.js"></script>
     <script src="black/js/core/bootstrap.min.js"></script>
     <script src="black/js/plugins/perfect-scrollbar.jquery.min.js"></script>
     <script src="black/js/plugins/moment.min.js"></script>
     <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
     <script src="black/js/plugins/bootstrap-switch.js"></script>
     <!--  Plugin for Sorting Tables -->
     <script src="black/js/plugins/jquery.tablesorter.js"></script>
     <!-- Forms Validations Plugin -->
     <script src="black/js/plugins/jquery.validate.min.js"></script>
     <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
     <script src="black/js/plugins/jquery.bootstrap-wizard.js"></script>
     <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
     <script src="black/js/plugins/bootstrap-selectpicker.js"></script>
     <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
     <script src="black/js/plugins/bootstrap-datetimepicker.js"></script>
     <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
     <script src="black/js/plugins/jquery.datatables.min.js"></script>
     <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
     <script src="black/js/plugins/bootstrap-tagsinput.js"></script>
     <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
     <script src="black/js/plugins/jasny-bootstrap.min.js"></script>
     <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
     <script src="black/js/plugins/fullcalendar.min.js"></script>
     <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
     <script src="black/js/plugins/jquery-jvectormap.js"></script>
     <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
     <script src="black/js/plugins/nouislider.min.js"></script>
     <!--  Google Maps Plugin    -->
     <!-- Place this tag in your head or just before your close body tag. -->
     <script src="maps/api/js_key_your_key_here.js"></script>
     <!-- Chart JS -->
     <script src="black/js/plugins/chartjs.min.js"></script>
     <!--  Notifications Plugin    -->
     <script src="black/js/plugins/bootstrap-notify.js"></script>
     <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="black/js/black-dashboard.min.js"></script>
     <!-- Black Dashboard DEMO methods, don't include it in your project! -->
     <script src="black/demo/demo.js"></script>
     <script src="black/js/settings.js"></script>
     <script src="black/js/hoangvanlinh.js"></script>
     <script src="black/demo/jquery.sharrre.js"></script>
     </body>
     </html>