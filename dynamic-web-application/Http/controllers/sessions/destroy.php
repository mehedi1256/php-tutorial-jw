<?php

use core\Authenticator;

(new Authenticator)->logout();

header('location: /dynamic-web-application');
exit();