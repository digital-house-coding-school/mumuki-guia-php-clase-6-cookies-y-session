namespace interno;

$sessionStart = false;
$_SESSION = null;

function session_start() {
  global $_SESSION;
  global $sessionStart; 
  var_dump(1);exit;
  
  $sessionStart = true;
  $_SESSION = [];
  
}