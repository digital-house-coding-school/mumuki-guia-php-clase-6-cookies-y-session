public function testSession(): void {
  global $sessionStart;
  global $_SESSION;
  
  guardarEnSession();
  
  $this->assertTrue($sessionStart, "¿Llamaste a session_start?");
  
  $this->assertTrue(array_key_exists("usuarioLogueado", $_SESSION), "No existe la posición 'id' en SESSION");
  
  $this->assertTrue($_SESSION["usuarioLogueado"] === "jonsnow", "La posición 'usuarioLogueado' de SESSION no tiene el valor 'jonsnow'");
}