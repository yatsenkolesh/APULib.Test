<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-01 00:42:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 30 ] in file:line
2016-07-01 00:42:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:43:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 30 ] in file:line
2016-07-01 00:43:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:43:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 30 ] in file:line
2016-07-01 00:43:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:43:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\Common.php [ 56 ] in file:line
2016-07-01 00:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:43:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getErrors() ~ APPPATH\classes\Controller\User.php [ 24 ] in file:line
2016-07-01 00:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:44:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getErrors() ~ APPPATH\classes\Controller\User.php [ 24 ] in file:line
2016-07-01 00:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:44:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getErrors() ~ APPPATH\classes\Controller\User.php [ 24 ] in file:line
2016-07-01 00:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:44:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: messageText ~ APPPATH\classes\Controller\Common.php [ 47 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php:47
2016-07-01 00:44:22 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 47, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(24): Controller_Common->addMessage(Array, 0, 1)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php:47
2016-07-01 00:45:19 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\Messages.php [ 3 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 00:45:19 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(3): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\OpenServer\d...', 3, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(93): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(31): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 00:45:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: message ~ APPPATH\views\Messages.php [ 3 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 00:45:35 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 3, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(93): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(31): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 00:45:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: message ~ APPPATH\views\Messages.php [ 4 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:4
2016-07-01 00:45:51 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(93): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(31): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:4
2016-07-01 00:51:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Tools' not found ~ APPPATH\views\Header.php [ 48 ] in file:line
2016-07-01 00:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 00:55:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: message ~ APPPATH\views\Messages.php [ 3 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 00:55:32 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 3, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(93): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(32): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:3
2016-07-01 02:05:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\Controller\User.php [ 7 ] in file:line
2016-07-01 02:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:05:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\Messages.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:2
2016-07-01 02:05:39 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(94): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(23): Controller_Common->showTemplate('User/Auth', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:2
2016-07-01 02:10:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\Cookie.php:67
2016-07-01 02:10:09 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\OpenServer\domains\kohanatest\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\Cookie.php:67
2016-07-01 02:30:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Sessin' not found ~ APPPATH\classes\Model\User.php [ 111 ] in file:line
2016-07-01 02:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:32:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:32:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:34:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:34:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:34:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:34:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:34:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:35:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:35:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:35:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:35:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 55 ] in file:line
2016-07-01 02:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 02:38:57 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:38:57 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('/', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('/')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:43 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:43 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:46 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:46 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:47 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:39:47 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:21 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:21 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:22 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:22 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:37 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohanatest. If you trust kohanatest, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 02:40:37 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, true)
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(55): Kohana_HTTP::redirect('index')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_logout()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\URL.php:144
2016-07-01 03:16:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\User.php [ 42 ] in file:line
2016-07-01 03:16:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 03:16:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\User.php [ 42 ] in file:line
2016-07-01 03:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 03:16:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\User.php [ 42 ] in file:line
2016-07-01 03:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 03:17:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\User.php [ 46 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:46
2016-07-01 03:17:23 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 46, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:46
2016-07-01 03:23:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\Controller\User.php [ 44 ] in file:line
2016-07-01 03:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 03:23:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\Controller\User.php [ 44 ] in file:line
2016-07-01 03:23:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:25:41 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Language::getCurrentLanguage() should not be called statically ~ APPPATH\views\Header.php [ 62 ] in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:25:41 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 62, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language::getCurrentLanguage()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(94): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:25:59 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Language::instance() should not be called statically ~ APPPATH\views\Header.php [ 62 ] in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:25:59 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 62, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language::instance()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(94): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:26:01 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Language::instance() should not be called statically ~ APPPATH\views\Header.php [ 62 ] in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:26:01 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 62, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language::instance()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(94): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\views\Header.php:62
2016-07-01 22:26:11 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\language.php [ 16 ] in file:line
2016-07-01 22:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:26:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Language::$request ~ APPPATH\classes\Model\language.php [ 24 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:24
2016-07-01 22:26:36 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\language.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 24, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language->getCurrentLanguage()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(94): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:24
2016-07-01 22:30:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function Model_Language() ~ APPPATH\classes\Controller\Common.php [ 30 ] in file:line
2016-07-01 22:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:30:44 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Language::$language ~ APPPATH\classes\Model\language.php [ 23 ] in file:line
2016-07-01 22:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:30:45 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Language::$language ~ APPPATH\classes\Model\language.php [ 23 ] in file:line
2016-07-01 22:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:32:23 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Language::$language ~ APPPATH\classes\Model\language.php [ 24 ] in file:line
2016-07-01 22:32:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:32:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languageId ~ APPPATH\classes\Model\language.php [ 26 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:26
2016-07-01 22:32:56 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\language.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 26, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(30): Model_Language::instance('ru')
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(20): Controller_Common->__init()
#3 [internal function]: Controller_Common->__construct(Object(Request), Object(Response))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:26
2016-07-01 22:33:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Language::instance(), called in C:\OpenServer\domains\kohanatest\application\views\Header.php on line 62 and defined ~ APPPATH\classes\Model\language.php [ 22 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:22
2016-07-01 22:33:03 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\language.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language::instance()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:22
2016-07-01 22:33:05 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Language::instance(), called in C:\OpenServer\domains\kohanatest\application\views\Header.php on line 62 and defined ~ APPPATH\classes\Model\language.php [ 22 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:22
2016-07-01 22:33:05 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\language.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language::instance()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:22
2016-07-01 22:33:38 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\language.php [ 25 ] in file:line
2016-07-01 22:33:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:33:47 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Model_Language::$language as non static ~ APPPATH\classes\Model\language.php [ 32 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:32
2016-07-01 22:33:47 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\language.php(32): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(62): Model_Language->getCurrentLanguage()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\language.php:32
2016-07-01 22:47:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Language::getUrlToSwitchLanguage() ~ APPPATH\views\Header.php [ 70 ] in file:line
2016-07-01 22:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 22:49:17 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH\views\Header.php [ 60 ] in C:\OpenServer\domains\kohanatest\application\views\Header.php:60
2016-07-01 22:49:17 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Header.php(60): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 60, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(60): Kohana_Request::uri()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\views\Header.php:60
2016-07-01 22:49:36 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH\views\Header.php [ 60 ] in C:\OpenServer\domains\kohanatest\application\views\Header.php:60
2016-07-01 22:49:36 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Header.php(60): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 60, Array)
#1 C:\OpenServer\domains\kohanatest\application\views\Header.php(60): Kohana_Request::uri()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(69): Controller_Common->showTemplate('User/SignUp', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\kohanatest\application\views\Header.php:60
2016-07-01 22:50:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\views\Header.php [ 60 ] in file:line
2016-07-01 22:50:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:08:53 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\User.php [ 45 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:45
2016-07-01 23:08:53 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(45): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 45, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:45
2016-07-01 23:09:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\Controller\User.php [ 49 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:49
2016-07-01 23:09:41 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 49, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php:49
2016-07-01 23:09:51 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\I18n.php [ 84 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php:84
2016-07-01 23:09:51 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php(84): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\OpenServer\d...', 84, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php(161): Kohana_I18n::get(Array)
#2 C:\OpenServer\domains\kohanatest\application\views\Messages.php(4): __(Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(97): Kohana_View->__toString()
#7 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(71): Controller_Common->showTemplate('User/SignUp', Array)
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php:84
2016-07-01 23:12:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: message ~ APPPATH\views\Messages.php [ 4 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:4
2016-07-01 23:12:20 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(105): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(71): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:4
2016-07-01 23:15:55 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\I18n.php [ 84 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php:84
2016-07-01 23:15:55 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php(84): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\OpenServer\d...', 84, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php(161): Kohana_I18n::get(Array)
#2 C:\OpenServer\domains\kohanatest\application\views\Messages.php(4): __(Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(107): Kohana_View->__toString()
#7 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(71): Controller_Common->showTemplate('User/SignUp', Array)
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\I18n.php:84
2016-07-01 23:20:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Langauge' not found ~ APPPATH\classes\Model\Tools.php [ 8 ] in file:line
2016-07-01 23:20:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:20:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Language::getCurrentLangauge() ~ APPPATH\classes\Model\Tools.php [ 8 ] in file:line
2016-07-01 23:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:20:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Language::getCurrentLangauge() ~ APPPATH\classes\Model\Tools.php [ 8 ] in file:line
2016-07-01 23:20:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:50:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function Tracks8() ~ APPPATH\classes\Controller\Tracks.php [ 6 ] in file:line
2016-07-01 23:50:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:54:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Tracks8::__construct(), called in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php on line 6 and defined ~ MODPATH\tracks8\classes\tracks8.php [ 6 ] in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:6
2016-07-01 23:54:57 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(6): Tracks8->__construct()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:6
2016-07-01 23:58:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ MODPATH\tracks8\classes\tracks8.php [ 13 ] in file:line
2016-07-01 23:58:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-01 23:59:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  tracks8 ~ MODPATH\tracks8\classes\tracks8.php [ 18 ] in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:18
2016-07-01 23:59:05 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php(10): Tracks8->getConfig()
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(6): Tracks8->__construct()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:18