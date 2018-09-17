public function testSession1(): void {
  global $sessionStart;
  global $_SESSION;
  
  $_SESSION = [
    "usuarioLogueado" => "jonsnow"
  ];
  
  $resul = leerSession();
  
  $this->assertTrue($sessionStart, "¿Llamaste a session_start?");
  
  $this->assertTrue(is_string($resul), "La función debe retornar un string");
  
  $this->assertTrue($resul === "jonsnow", "La función no retorna lo esperado. Debería retornar 'jonsnow' pero retorna '$resul');
}

public function testSession2(): void {
  global $sessionStart;
  global $_SESSION;
  
  $_SESSION = [
    "usuarioLogueado" => "aryastark"
  ];
  
  $resul = leerSession();
  
  $this->assertTrue($sessionStart, "¿Llamaste a session_start?");
  
  $this->assertTrue(is_string($resul), "La función debe retornar un string");
  
  $this->assertTrue($resul === "aryastark", "La función no retorna lo esperado. Debería retornar 'aryastark' pero retorna '$resul');
}