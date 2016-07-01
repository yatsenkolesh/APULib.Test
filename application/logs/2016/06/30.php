<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-30 04:31:39 --- CRITICAL: ErrorException [ 1 ]: Class 'MangoDB' not found ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2016-06-30 04:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 04:41:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: MangoDB::$test ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php:8
2016-06-30 04:41:30 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php:8
2016-06-30 04:42:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method MangoDB::factory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2016-06-30 04:42:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 04:53:34 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_MangoDB::save() must be an array, none given, called in C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php on line 9 and defined ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 303 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:303
2016-06-30 04:53:34 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(303): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 303, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(9): Kohana_MangoDB->save('mango')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:303
2016-06-30 06:46:53 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:46:53 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:10 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:10 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:12 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:12 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:13 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:13 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:13 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:13 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:14 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:14 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:14 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:14 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:16 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:16 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(371): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(197): Kohana_MangoDB->_call('create_collecti...', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(8): Kohana_MangoDB->create_collection('mango')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:45 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:45 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:46 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:46 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:47 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:47 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- CRITICAL: MongoConnectionException [ 71 ]: Failed to connect to: localhost:27017: SASL Authentication failed on database 'trasher': Authentication failed. ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 116 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 06:47:48 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(116): MongoClient->connect()
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(97): Kohana_MangoDB->connect()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(56): Kohana_MangoDB->__construct('default', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\Welcome.php(7): Kohana_MangoDB::instance()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:116
2016-06-30 19:14:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Controller_Common::showTemplate() must be an array, none given, called in C:\OpenServer\domains\kohanatest\application\classes\Controller\Index.php on line 7 and defined ~ APPPATH\classes\Controller\Common.php [ 4 ] in C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php:4
2016-06-30 19:14:44 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(4): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 4, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\Index.php(7): Controller_Common->showTemplate('Index')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php:4
2016-06-30 20:14:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Tools' not found ~ APPPATH\views\Header.php [ 48 ] in file:line
2016-06-30 20:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 20:23:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Index::showTemplate() ~ APPPATH\classes\Controller\Index.php [ 7 ] in file:line
2016-06-30 20:23:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 21:01:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php on line 15 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php:43
2016-06-30 21:01:14 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\Common.php(15): Kohana_Controller->__construct()
#2 [internal function]: Controller_Common->__construct(Object(Request), Object(Response))
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php:43
2016-06-30 21:01:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\Common.php [ 24 ] in file:line
2016-06-30 21:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 21:59:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\User.php [ 15 ] in file:line
2016-06-30 21:59:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:01:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\User.php [ 15 ] in file:line
2016-06-30 22:01:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:10:10 --- CRITICAL: ErrorException [ 2 ]: MongoDB::selectCollection() expects parameter 1 to be string, array given ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 390 ] in file:line
2016-06-30 22:10:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'MongoDB::select...', 'C:\OpenServer\d...', 390, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(390): MongoDB->selectCollection(Array)
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(249): Kohana_MangoDB->_call('find', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(16): Kohana_MangoDB->find(Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-06-30 22:27:41 --- CRITICAL: ErrorException [ 2 ]: MongoDB::selectCollection() expects parameter 1 to be string, array given ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 390 ] in file:line
2016-06-30 22:27:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'MongoDB::select...', 'C:\OpenServer\d...', 390, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(390): MongoDB->selectCollection(Array)
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(249): Kohana_MangoDB->_call('find', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(16): Kohana_MangoDB->find(Array)
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2016-06-30 22:30:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method MangoDB::select_collection() ~ APPPATH\classes\Controller\User.php [ 16 ] in file:line
2016-06-30 22:30:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:41:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ MODPATH\mangodb\classes\Kohana\MangoDB.php [ 393 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:393
2016-06-30 22:41:53 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(393): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 393, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php(291): Kohana_MangoDB->_call('insert', Array, Array)
#2 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): Kohana_MangoDB->insert('users', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\Kohana\MangoDB.php:393
2016-06-30 22:46:33 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'AUTO_INCREMENT' ~ APPPATH\classes\Model\User.php [ 26 ] in file:line
2016-06-30 22:46:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:47:03 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'AUTO_INCREMENT' ~ APPPATH\classes\Model\User.php [ 26 ] in file:line
2016-06-30 22:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:47:04 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'AUTO_INCREMENT' ~ APPPATH\classes\Model\User.php [ 26 ] in file:line
2016-06-30 22:47:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:47:20 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'AUTO_INCREMENT' ~ APPPATH\classes\Model\User.php [ 26 ] in file:line
2016-06-30 22:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:49:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\mangodb\classes\MangoDB.php [ 22 ] in file:line
2016-06-30 22:49:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:51:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ MODPATH\mangodb\classes\MangoDB.php [ 22 ] in file:line
2016-06-30 22:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 22:54:17 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\mangodb\classes\MangoDB.php [ 23 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:23
2016-06-30 22:54:17 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(23): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:23
2016-06-30 22:54:19 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\mangodb\classes\MangoDB.php [ 23 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:23
2016-06-30 22:54:19 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(23): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#2 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#3 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:23
2016-06-30 23:04:40 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for MangoDB::getLastEntry(), called in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php on line 32 and defined ~ MODPATH\mangodb\classes\MangoDB.php [ 37 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:37
2016-06-30 23:04:40 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\OpenServer\d...', 37, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(32): MangoDB->getLastEntry()
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(21): MangoDB->getIncrement('users', 'id')
#3 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:37
2016-06-30 23:04:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: r ~ MODPATH\mangodb\classes\MangoDB.php [ 40 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:40
2016-06-30 23:04:58 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 40, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(32): MangoDB->getLastEntry('users')
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(21): MangoDB->getIncrement('users', 'id')
#3 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:40
2016-06-30 23:05:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: v ~ MODPATH\mangodb\classes\MangoDB.php [ 33 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:33
2016-06-30 23:05:33 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 33, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(21): MangoDB->getIncrement('users', 'id')
#2 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#3 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:33
2016-06-30 23:08:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: last_value ~ MODPATH\mangodb\classes\MangoDB.php [ 41 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:41
2016-06-30 23:08:09 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 41, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(32): MangoDB->getLastEntry('users')
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(21): MangoDB->getIncrement('users', 'id')
#3 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:41
2016-06-30 23:09:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\mangodb\classes\MangoDB.php [ 43 ] in file:line
2016-06-30 23:09:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:09:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: last_value ~ MODPATH\mangodb\classes\MangoDB.php [ 45 ] in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:45
2016-06-30 23:09:49 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 45, Array)
#1 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(32): MangoDB->getLastEntry('users')
#2 C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php(21): MangoDB->getIncrement('users', 'id')
#3 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(30): MangoDB->insert('users', Array)
#4 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\kohanatest\modules\mangodb\classes\MangoDB.php:45
2016-06-30 23:36:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\User.php [ 21 ] in file:line
2016-06-30 23:36:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:37:10 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\User.php [ 20 ] in file:line
2016-06-30 23:37:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:38:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$mangoDB ~ APPPATH\classes\Model\User.php [ 32 ] in C:\OpenServer\domains\kohanatest\application\classes\Model\User.php:32
2016-06-30 23:38:23 --- DEBUG: #0 C:\OpenServer\domains\kohanatest\application\classes\Model\User.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\kohanatest\application\classes\Controller\User.php(15): Model_User->add('webfay', '123456')
#2 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Controller.php(84): Controller_User->action_signup()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\kohanatest\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\kohanatest\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\kohanatest\application\classes\Model\User.php:32
2016-06-30 23:38:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\User.php [ 32 ] in file:line
2016-06-30 23:38:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Model\User.php [ 32 ] in file:line
2016-06-30 23:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:40:42 --- CRITICAL: ErrorException [ 1 ]: Call to private method Model_ORM::getDBField() from context 'Model_User' ~ APPPATH\classes\Model\User.php [ 34 ] in file:line
2016-06-30 23:40:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:40:57 --- CRITICAL: ErrorException [ 1 ]: Cannot access private property Model_User::$structureDB ~ APPPATH\classes\Model\ORM.php [ 20 ] in file:line
2016-06-30 23:40:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-06-30 23:57:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function insert() on a non-object ~ APPPATH\classes\Model\User.php [ 81 ] in file:line
2016-06-30 23:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line