namespace interno;

$sessionStart = false;
$_SESSION = null;

function session_start() {
  global $_SESSION;
  global $sessionStart; 
  
  
  $sessionStart = true;
  
  var_dump($sessionStart);exit;
  $_SESSION = [];
  
}