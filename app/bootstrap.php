<?php
  // Load Config
  require_once 'config/config.php';
  require_once 'helpers/url_helpers.php';
  require_once 'helpers/session_helper.php';
  require_once 'libraries/phpseclibe/Net/SFTP/Stream.php';
  require_once 'libraries/phpseclibe/Net/SFTP.php';
  require_once 'libraries/phpseclibe/Net/SSH1.php';
  require_once 'libraries/phpseclibe/Net/SSH2.php';
  require_once 'libraries/phpseclibe/Crypt/RSA.php';
  require_once 'libraries/phpseclibe/Crypt/RC4.php';
  require_once 'libraries/phpseclibe/Crypt/Hash.php';
  require_once 'libraries/phpseclibe/Crypt/Base.php';
  require_once 'libraries/phpseclibe/Crypt/Blowfish.php';
  require_once 'libraries/phpseclibe/Crypt/Rijndael.php';
  require_once 'libraries/phpseclibe/Crypt/Random.php';
  require_once 'libraries/phpseclibe/Crypt/TripleDES.php';
  require_once 'libraries/phpseclibe/Crypt/Twofish.php';
  require_once 'libraries/phpseclibe/Crypt/AES.php';
  require_once 'libraries/phpseclibe/Math/BigInteger.php';
  // require_once '../vendor/autoload.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  