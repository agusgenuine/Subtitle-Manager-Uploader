<?php
/**
 * ====================================================================================
 *                           SUBTITLE MANAGER (c) KARAN KANKARIA
 * ====================================================================================
 *
 *  Thank you for your cooperation and don't hesitate to contact me if anything :)
 * @author KARAN KANKARIA (https://subtitle-manager.herokuapp.com/index.php)
 * @link https://subtitle-manager.herokuapp.com/index.php
 * @package SUBTITLE MANAGER
 */
session_start();
/* DECLARE VARIABLES */
$username = 'admin';
$password = 'admin123';
$random1 = 'secret_key1';
$random2 = 'secret_key2';
$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];
/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
/* USER IS LOGGED IN */
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}
/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOGIN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
	}
	else
	{
		// DISPLAY FORM WITH ERROR
		display_login_form();
		display_error_msg();
	}
}
/* SHOW THE LOGIN FORM */
else
{
	display_login_form();
}
/* TEMPLATES */
function display_login_form()
{
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/assets/img/favicon.png"> 
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="">
    <title>Subtitle Manager</title>    
     <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/@fortawesome/fontawesome-free/css/all.min.css" defer="defer" rel="stylesheet">
    <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/ionicons/css/ionicons.min.css" defer="defer" rel="stylesheet">
    <script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/jquery/jquery.min.js" defer="defer"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" defer="defer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js" defer="defer"></script>
	<link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/datatables.net-dt/css/jquery.dataTables.min.css" defer="defer" rel="stylesheet">
    <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" defer="defer" rel="stylesheet">	
    <link rel="stylesheet" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/css/bracket.css" defer="defer">
    <link rel="stylesheet" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/css/bracket.simple-white.css" defer="defer">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" defer="defer" type="text/css" />
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
      </head>
 <body>
	 <!-- Delete this code -->
	  <!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <div class='form-group'>
<textarea style="background:#000;color:#fff" class='form-control' id='textArea' readonly='readonly' rows='7'>
Subtitle Manager & Uploader :
Login Details:
user: admin 
password: admin123
</textarea>
</div>
    </div>
  </div>
</div>
	 <!-- Delete till here -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js" defer="defer"></script>
<div class="d-flex align-items-center justify-content-center bg-gray-200 ht-100v">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Subtitle <span class="tx-info">Manager</span> <span class="tx-normal">]</span></div><br />
<?php echo '<form action="' . isset($self) . '" method="post">' .
             '<div class="form-group">'.
			 '<input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>' .
			 '</div>'.
			 '<div class="form-group">'.
			 '<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>' .
			 '</div>'.
			 '<button type="submit" name="submit" class="btn btn-info btn-block">Sign In</button><br>' .
	                 '<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Login Detail</button>'.
		 '</form>';
}
function logged_in_msg($username)
{
?>
<?php
/**
 * ====================================================================================
 *                           SUBTITLE MANAGER (c) KARAN KANKARIA
 * ====================================================================================
 *
 *  Thank you for your cooperation and don't hesitate to contact me if anything :)
 * @author KARAN KANKARIA (https://subtitle-manager.herokuapp.com/index.php)
 * @link https://subtitle-manager.herokuapp.com/index.php
 * @package SUBTITLE MANAGER
 */
			$domainServer = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
			$domainServer = str_replace('index.php', '', $domainServer);
		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/assets/img/favicon.png">    
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="">
    <title>Subtitle Manager</title>    
     <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/@fortawesome/fontawesome-free/css/all.min.css" defer="defer" rel="stylesheet">
    <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/ionicons/css/ionicons.min.css" rel="stylesheet" defer="defer">
    <script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/jquery/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js" defer="defer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js" defer="defer"></script>
    <script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/assets/js/ancoksub.js" defer="defer"></script>
	<link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/datatables.net-dt/css/jquery.dataTables.min.css" defer="defer" rel="stylesheet">
    <link href="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" defer="defer" rel="stylesheet">	
    <link rel="stylesheet" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/css/bracket.css" defer="defer">
    <link rel="stylesheet" href="https://cdn.staticaly.com/gh/domkiddie/drive/master/css/bracket.simple-white.css" defer="defer">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" defer="defer">
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
    <style>#progress-group{display:none;}.progress{height:30px;}.progress-bar{font-size:17px;line-height:25px;}</style>  
      </head>
 <body>
    <div class="br-logo"><a href="<?php echo $domainServer;?>"><span>[</span>Subtitle <i>Manager</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="<?php echo $domainServer;?>" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
            <span class="menu-item-label">Subtitle Manager</span>
          </a>
        </li>
        <br />
        <li class="br-menu-item">
          <a href="#" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-flame-outline tx-24"></i>
            <span class="menu-item-label">Popular Subtitle Sites</span>
          </a><!-- br-menu-link -->
        </li>
        <br />
        <div class="info-list">
        <p>1. <a href="https://www.opensubtitles.org/" target="_blank">OpenSubtitles</a></p>
        <p>2. <a href="https://www.addic7ed.com/" target="_blank">Addic7ed</a></p>
        <p>3. <a href="https://www.podnapisi.net/" target="_blank">Podnapisi</a></p>
        <p>4. <a href="https://yts-subs.com/" target="_blank">YIFY Subtitles</a></p>
        <p>5. <a href="http://www.divxsubtitles.net/" target="_blank">DIVX Subtitles</a></p>
        <p>6. <a href="https://subscene.com/" target="_blank">Subscene </a></p>
        </div>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Contact</span>
          </a><!-- br-menu-link -->
        </li>
        <br>
      <div class="info-list">
          <p>If any error occurs or you have any query then contact us through following link: <b><a href="https://github.com/KaranJain29/Subtitle-Manage-Uploader/">Contact Us</a></b></p>
      </div>
          <li class="br-menu-item">
          <a href="#" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-information-outline tx-24"></i>
            <span class="menu-item-label">Note:</span>
          </a><!-- br-menu-link -->
        </li>
        <br />
        <div class="info-list">
            <p>Do not delete index.html file from <b>"Sub"</b> Folder</p>
            </div>
      </ul>
    </div>
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>		
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo '<p>Welcome: <b>' . $username . '</b></p>';?></span>
              <img src="https://cdn.statically.io/img/raw.githubusercontent.com/KaranJain29/Subtitle-Manager-Uploader/master/assets/user.png?f=auto" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">          
              <ul class="list-unstyled user-profile-nav">               
                <li><a href="<?php echo $domainServer;?>?logout=true"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-time-outline"></i>
            <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
     <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-timer-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar active" id="calendar" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
          <div class="pd-x-25">
            <h2 id="brTime" class="br-time"></h2>
            <h6 id="brDate" class="br-date"></h6>
          </div>		  
</div>
 </div><!-- tab-content -->
    </div><!-- br-sideright -->
     <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="<?php echo $domainServer;?>">Home</a>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-cloud-upload-outline"></i>
        <div class="pd-sm-l-20">
          <h4 class="tx-gray-800 mg-b-5">Subtitle Manager</h4>
          <p class="mg-b-0">And Uploader.</p>
        </div>
      </div><!-- d-flex -->      
	  <div class="br-pagebody">	  
                         <form role="form" method="post" enctype="multipart/form-data" onsubmit="return doUpload();">                                        
                                  <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-info">
                                            Choose File <input type="file" name="file" id="file" style="display: none;" multiple/>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                  </div>                               
                               <input type="submit" class="btn btn-primary mg-b-20" value="Upload" />
                            </form>
                              <div id="progress-group" class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-success" aria-valuemax="100">
			<div class="progress progress-bar-striped bg-success">                           
            <div class="progress-text bg-succes"></div>
            </div>
			</div>
            </div>
		                    <div class="mg-b-20">
                            <div id="result"></div>
							</div>                        
          <div class="table-wrapper" style="width:90%">
            <table id="subtitles" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th>NO</th>    
                  <th>Subtitle Name</th>
                  <th>Subtitle Url</th>
                </tr>
              </thead>
              <tbody>
               <?php 								
				$domainServer = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);								
                $dir = 'sub';
                $counter = 1;
                $file = scandir($dir, 1);
                foreach ($file as $key => $value)                                 { 
                preg_match('/([0-9]*)\..*/', $value, $match);
                if (!in_array($value, array(".", ".."))) 
                { 
                echo '<tr>
                      <td>'.$counter.'</td>
                      <td>'.$domainServer.'/sub/' . $value . '</td>
                      <td><input type="text" class="form-control" value="'.$domainServer.'/sub/' . $value . '" onclick="this.select();"/></td>
                      </tr>';$counter++;}} 
                ?>
                </tbody>
                </table>
<script type="text/javascript">$(document).ready(function(){$('#subtitles').DataTable({"order":[[1,"desc"]]});});</script>                        
                    </div><!-- /.panel-primary -->  
      <footer class="br-footer">
        <div class="footer-left">
          <div class="tx-center">Copyright &copy; 2020. <a href="https://github.com/KaranJain29/">Karan Kankaria.</a> All Rights Reserved.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Socials:</span>
          <a target="_blank" class="pd-x-5" href="https://github.com/KaranJain29/"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://github.com/KaranJain29/"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
   </div><!-- /.page body -->	
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/jquery-ui/ui/widgets/datepicker.js" defer="defer"></script>
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/bootstrap/js/bootstrap.bundle.min.js" defer="defer"></script>
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/perfect-scrollbar/perfect-scrollbar.min.js" defer="defer"></script>
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/moment/min/moment.min.js" defer="defer"></script>
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/lib/jquery/bracket.js" defer="defer"></script>
<script src="https://cdn.staticaly.com/gh/domkiddie/drive/master/assets/js/ancokplayer_upload.js" defer="defer"></script>	
</body>
</html>
<?php
	}
function display_error_msg()
{
	echo '<center><p class="error"><span class="tx-danger tx-13 tx-bold">Username or Password is Invalid!</span></p></center>';
}
?>
</div>
</body>
</html>
