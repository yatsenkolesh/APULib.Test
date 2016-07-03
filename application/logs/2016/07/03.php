<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-03 00:57:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\Tracks\SingleTrack.php [ 13 ] in file:line
2016-07-03 00:57:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 01:46:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Comments.php [ 27 ] in file:line
2016-07-03 01:46:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 01:47:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function insert() on a non-object ~ APPPATH\classes\Model\Comments.php [ 32 ] in file:line
2016-07-03 01:47:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 01:54:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getComments() on a non-object ~ APPPATH\classes\Controller\Tracks.php [ 71 ] in file:line
2016-07-03 01:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 02:14:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: MongoId::$user_id ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:10 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Comment.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:11 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:2
2016-07-03 02:14:39 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH\views\Comment.php [ 2 ] in file:line
2016-07-03 02:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 02:27:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: time ~ APPPATH\views\Comment.php [ 3 ] in C:\OpenServer\domains\kohanatest\application\views\Comment.php:3
2016-07-03 02:27:16 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Comment.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 3, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(33): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#8 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#9 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#13 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\kohanatest\application\views\Comment.php:3
2016-07-03 02:43:20 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Model\Tools.php [ 14 ] in file:line
2016-07-03 02:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Tools.php(14): date('d.m.Y H:i', '03.07.2016 02:2...')
#2 C:\OpenServer\domains\kohanatest\application\views\Comment.php(3): Model_Tools::getDate('03.07.2016 02:2...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(33): Kohana_View->__toString()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#10 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#11 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#15 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2016-07-03 02:43:46 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Model\Tools.php [ 14 ] in file:line
2016-07-03 02:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\OpenServer\d...', 14, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Tools.php(14): date('d.m.Y H:i', '03.07.2016 02:4...')
#2 C:\OpenServer\domains\kohanatest\application\views\Comment.php(3): Model_Tools::getDate('03.07.2016 02:4...')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(33): Kohana_View->__toString()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#10 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#11 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#12 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#15 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#18 {main} in file:line
2016-07-03 02:47:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\Messages.php [ 1 ] in C:\OpenServer\domains\kohanatest\application\views\Messages.php:1
2016-07-03 02:47:37 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Messages.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(73): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Messages.php:1
2016-07-03 03:43:06 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Bookmarks::instance() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Tracks.php [ 88 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:43:06 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 88, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:43:58 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Bookmarks::instance() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Tracks.php [ 88 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:43:58 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 88, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:44:15 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Bookmarks::instance() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Tracks.php [ 88 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:44:15 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 88, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:44:46 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Bookmarks::instance() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Tracks.php [ 88 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:44:46 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 88, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:45:43 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Bookmarks::instance() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Tracks.php [ 88 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:45:43 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 88, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php:88
2016-07-03 03:45:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\Model\Bookmarks.php [ 17 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 03:45:57 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(29): Model_Bookmarks->__construct()
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Model_Bookmarks::instance()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 03:46:28 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_User::getCurrentUserId() should not be called statically ~ APPPATH\classes\Model\Bookmarks.php [ 29 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:29
2016-07-03 03:46:28 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(29): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\OpenServer\d...', 29, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(29): Model_User::getCurrentUserId()
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Model_Bookmarks::instance()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:29
2016-07-03 03:46:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\Model\Bookmarks.php [ 17 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 03:46:48 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(29): Model_Bookmarks->__construct(0)
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Model_Bookmarks::instance()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 03:47:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\Model\Bookmarks.php [ 17 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 03:47:01 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(29): Model_Bookmarks->__construct(0)
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(88): Model_Bookmarks::instance()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_add_to_bookmarks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:17
2016-07-03 04:03:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\Bookmarks.php [ 48 ] in file:line
2016-07-03 04:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:06:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\Bookmarks.php [ 48 ] in file:line
2016-07-03 04:06:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:06:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\Bookmarks.php [ 48 ] in file:line
2016-07-03 04:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:12:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\Bookmarks.php [ 48 ] in file:line
2016-07-03 04:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:14:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\Bookmarks.php [ 48 ] in file:line
2016-07-03 04:14:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:16:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Tools::getUrl(), called in C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php on line 16 and defined ~ APPPATH\classes\Model\Tools.php [ 6 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Tools.php:6
2016-07-03 04:16:03 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Tools.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(16): Model_Tools::getUrl('tracks')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Tools.php:6
2016-07-03 04:17:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\Tracks.php [ 39 ] in file:line
2016-07-03 04:17:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:26:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Bookmarks::fetchArray() ~ APPPATH\classes\Model\Bookmarks.php [ 51 ] in file:line
2016-07-03 04:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 04:29:23 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\Tracks\SingleTrack.php [ 2 ] in C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php:2
2016-07-03 04:29:23 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php(2): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\OpenServer\d...', 2, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\Tracks.php(81): Controller_Common->showTemplate('Tracks/SingleTr...', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Tracks->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tracks))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\Tracks\SingleTrack.php:2
2016-07-03 05:13:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: isSuccessfull ~ APPPATH\views\User\SignUp.php [ 1 ] in C:\OpenServer\domains\kohanatest\application\views\User\SignUp.php:1
2016-07-03 05:13:33 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\views\User\SignUp.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 1, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(108): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(86): Controller_Common->showTemplate('User/SignUp', Array)
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_bookmarks()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\kohanatest\application\views\User\SignUp.php:1
2016-07-03 05:16:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$mix ~ MODPATH\tracks8\classes\tracks8.php [ 81 ] in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:81
2016-07-03 05:16:45 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php(81): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 81, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(72): Tracks8->getTrack(Array)
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(85): Model_Bookmarks->get()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_bookmarks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\modules\tracks8\classes\tracks8.php:81
2016-07-03 05:17:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\Model\Bookmarks.php [ 63 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:63
2016-07-03 05:17:45 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 63, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(85): Model_Bookmarks->get()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_bookmarks()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:63
2016-07-03 05:17:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\Model\Bookmarks.php [ 63 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:63
2016-07-03 05:17:47 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 63, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(85): Model_Bookmarks->get()
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_bookmarks()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\Bookmarks.php:63
2016-07-03 05:17:53 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH\classes\Model\Bookmarks.php [ 72 ] in file:line
2016-07-03 05:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-03 05:18:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH\classes\Model\Bookmarks.php [ 73 ] in file:line
2016-07-03 05:18:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line