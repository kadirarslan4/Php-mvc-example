<?php
App::getAction('/','/',false);
//App::getAction('/index','/default/index');


//Nedmin
App::getAction('/nedmin','/nedmin/index',true,"backend");
App::getAction("/nedmin/login",'/nedmin/login');
App::getAction("/nedmin/logout",'/nedmin/logout');
App::postAction("/nedmin/login","/nedmin/loginControl");



