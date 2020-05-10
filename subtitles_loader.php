<?php 
/**
 * ====================================================================================
 *                           SUBTITLE MANAGER (c) KARAN KANKARIA
 * ----------------------------------------------------------------------------------
 * @copyright This software is exclusively sold at CodeCanyon.net. If you have downloaded this
 *  from another site or received it from someone else than me, then you are engaged
 *  in an illegal activity. You must delete this software immediately or buy a proper
 *  license from http://codecanyon.net/user/karankankaria/
 *
 *  Thank you for your cooperation and don't hesitate to contact me if anything :)
 * ====================================================================================
 *
 * @author KARAN KANKARIA (https://linkshrink.online/subtitle-manager/)
 * @link https://linkshrink.online/subtitle-manager/
 * @package SUBTITLE MANAGER
 */
  $mimes = array('application/octet-stream');
  sleep(1);
  if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];
    $replaceFilename = array(' ', '_.', '._', '-', '..');
    $fileName = str_replace($replaceFilename, '.', $fileName);
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileStatus = array(
      'status' => 0,
      'message' => '',
      'result' => ''
    );
    if ($_FILES['file']['size'] < 2048000) {
      if (!in_array($fileType, $mimes)) {
        $fileStatus['message'] = 'Only Sub file .srt are allowed!';
      } 
      else {
		$domainServer = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);		
        move_uploaded_file($_FILES["file"]["tmp_name"], 'sub/' . time() . '.' . $fileName);
        $imagePath = $domainServer . '/sub/' . time() . '.' . $fileName;
        $fileStatus['status'] = 1;
        $fileStatus['message'] = 'Successfully uploaded !';
        $fileStatus['result'] = '<input type="text" class="form-control" value="'.$imagePath.'" onclick="this.select();"/>';
      }
    } 
    else{
        $fileStatus['status'] = 0;
        $fileStatus['message'] = 'The maximum file size for uploads is 2MB.';
        $fileStatus['result'] = '';}    
    echo json_encode($fileStatus);
    exit();
  }
?>