# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=GBA-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the GBA library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=GBA-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=GBA-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=GBA-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=GBA-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=GBA-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=GBA-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=GBA-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=GBA-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=GBA-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=GBA-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=GBA-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=GBA-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following.

```php
$oAuthAccessToken = 'oAuthAccessToken'; // OAuth 2.0 Access Token

$client = new GBALib\GBAClient($oAuthAccessToken);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [MApiMobileCommentsController](#m_api_mobile_comments_controller)
* [MApiMobileController](#m_api_mobile_controller)
* [MApiAuthController](#m_api_auth_controller)
* [MApiMobileTasksIdCommentsController](#m_api_mobile_tasks_id_comments_controller)
* [MApiMobileTasksController](#m_api_mobile_tasks_controller)
* [MApiMobileClientsController](#m_api_mobile_clients_controller)
* [MApiMobileAttachmentsController](#m_api_mobile_attachments_controller)
* [MApiMobileChatsMessagesController](#m_api_mobile_chats_messages_controller)

## <a name="m_api_mobile_comments_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileCommentsController") MApiMobileCommentsController

### Get singleton instance

The singleton instance of the ``` MApiMobileCommentsController ``` class can be accessed from the API Client.

```php
$mApiMobileComments = $client->getMApiMobileComments();
```

### <a name="m"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileCommentsController.m") m

> TODO: Add a method description


```php
function m($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new MRequest();

$mApiMobileComments->m($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileController") MApiMobileController

### Get singleton instance

The singleton instance of the ``` MApiMobileController ``` class can be accessed from the API Client.

```php
$mApiMobile = $client->getMApiMobile();
```

### <a name="refresh"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileController.refresh") refresh

> TODO: Add a method description


```php
function refresh(
        $grantType,
        $refreshToken,
        $clientId,
        $clientSecret)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| grantType |  ``` Required ```  | TODO: Add a parameter description |
| refreshToken |  ``` Required ```  | TODO: Add a parameter description |
| clientId |  ``` Required ```  | TODO: Add a parameter description |
| clientSecret |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$grantType = 'refresh_token';
$refreshToken = 'def50200333b6e0fa407ac011ffa5cc4cf8edaef338a0600aa94ed690ca15b22ab384b9b6e5ee80c97381998d586b605afad8d345eac859667f9f2a8fd0656105a9150b5f754e62bc0ecc443f4b3781ccaf758f628824f1a6212b665ed00e6f794fa9868bab78ce64d13b6d63f04f536614e49c7797773ca9ed4d1fe414616141023b70e408ae022bdecb419cf39698ff7dfcbdedda7e289e39bb100d21333221da5a1a7477815d1d21c00c6883a4162ae2de6cc2e2da20ae271a050c443ae0af91ef8db5c4132dbc653ae26cb1d5855cd95efb96ab3d53834ce7d41dcae25229eaaf02f24a679eb12b5ccf3b3b502412c92d286a0ea4998087ac5a8410ebc7a2ecbb8558e888706680434346fcf3520212043cd5b32cc2af9e702a641e70a470d990d82bd5dc2c09293c647361d2d1d99f4ca2179cadc522940be7c60a024e50071fe267720204f2c87a256479030c8a1d49c58727c9f54b768a0ded1b0965a822';
$clientId = 3;
$clientSecret = 'rUXwMfPsNIfj05Luf5GmDz1Uij7wqgzOmqap08a5';

$mApiMobile->refresh($grantType, $refreshToken, $clientId, $clientSecret);

```


### <a name="login"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileController.login") login

> TODO: Add a method description


```php
function login(
        $grantType,
        $clientId,
        $clientSecret,
        $username,
        $password,
        $appid,
        $sig)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| grantType |  ``` Required ```  | TODO: Add a parameter description |
| clientId |  ``` Required ```  | TODO: Add a parameter description |
| clientSecret |  ``` Required ```  | TODO: Add a parameter description |
| username |  ``` Required ```  | TODO: Add a parameter description |
| password |  ``` Required ```  | TODO: Add a parameter description |
| appid |  ``` Required ```  | TODO: Add a parameter description |
| sig |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$grantType = 'password';
$clientId = 3;
$clientSecret = 'rUXwMfPsNIfj05Luf5GmDz1Uij7wqgzOmqap08a5';
$username = 'pasha.klyuchnikov@gmail.com';
$password = 30031990;
$appid = 10729;
$sig = '4a147a5328208feffa308e777c0d596e046fcc025db7b9fa1cc8577d6b8b183e';

$mApiMobile->login($grantType, $clientId, $clientSecret, $username, $password, $appid, $sig);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_auth_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiAuthController") MApiAuthController

### Get singleton instance

The singleton instance of the ``` MApiAuthController ``` class can be accessed from the API Client.

```php
$mApiAuth = $client->getMApiAuth();
```

### <a name="login"></a>![Method: ](https://apidocs.io/img/method.png ".MApiAuthController.login") login

> Получить JWT токен, через авторизацию подпользователем системы


```php
function login(
        $appid,
        $deviceid,
        $login,
        $pass,
        $useragent,
        $sig)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| appid |  ``` Required ```  | TODO: Add a parameter description |
| deviceid |  ``` Required ```  | TODO: Add a parameter description |
| login |  ``` Required ```  | TODO: Add a parameter description |
| pass |  ``` Required ```  | TODO: Add a parameter description |
| useragent |  ``` Required ```  | TODO: Add a parameter description |
| sig |  ``` Required ```  | $sig = md5(strtolower($paramStr.$appid).$secret);

$paramStr = 'appid'.$appid . 'deviceid'.$deviceid . 'format'.$format . 'login'.$login . 'method'.$method . 'pass'.$pass; |



#### Example Usage

```php
$appid = 10729;
$deviceid = '12356789n';
$login = 'pasha.klyuchnikov@gmail.com';
$pass = 30031990;
$useragent = 'androidphone.com.ut.android.action1.0';
$sig = 'bf78bd564331ff847731c6f24321b9f6';

$mApiAuth->login($appid, $deviceid, $login, $pass, $useragent, $sig);

```


### <a name="register"></a>![Method: ](https://apidocs.io/img/method.png ".MApiAuthController.register") register

> Получить JWT токен, через авторизацию подпользователем системы


```php
function register(
        $name,
        $email,
        $password,
        $departmentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Required ```  | TODO: Add a parameter description |
| email |  ``` Required ```  | TODO: Add a parameter description |
| password |  ``` Required ```  | TODO: Add a parameter description |
| departmentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$name = 'Паша Ключников';
$email = 'pasha.klyuchnikov@gmail.com';
$password = 30031990;
$departmentId = 1;

$mApiAuth->register($name, $email, $password, $departmentId);

```


### <a name="refresh"></a>![Method: ](https://apidocs.io/img/method.png ".MApiAuthController.refresh") refresh

> Обновление токена


```php
function refresh(
        $contentType,
        $accept,
        $id2ClientToken,
        $appid,
        $deviceid,
        $useragent)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| accept |  ``` Required ```  | TODO: Add a parameter description |
| id2ClientToken |  ``` Required ```  | TODO: Add a parameter description |
| appid |  ``` Required ```  | TODO: Add a parameter description |
| deviceid |  ``` Required ```  | TODO: Add a parameter description |
| useragent |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/x-www-form-urlencoded';
$accept = 'application/json';
$id2ClientToken = '2b0bd623-bcaa-11a0-947c-2d01c96a8417';
$appid = 10729;
$deviceid = '12356789n';
$useragent = 'androidphone.com.ut.android.action1.0';

$mApiAuth->refresh($contentType, $accept, $id2ClientToken, $appid, $deviceid, $useragent);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_tasks_id_comments_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileTasksIdCommentsController") MApiMobileTasksIdCommentsController

### Get singleton instance

The singleton instance of the ``` MApiMobileTasksIdCommentsController ``` class can be accessed from the API Client.

```php
$mApiMobileTasksIdComments = $client->getMApiMobileTasksIdComments();
```

### <a name="m"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksIdCommentsController.m") m

> TODO: Add a method description


```php
function m($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\r\n  \"text\": \"Message text\",\r\n  \"attachments\": [\r\n    603\r\n  ]\r\n}";
$body = APIHelper::deserialize($bodyValue);

$mApiMobileTasksIdComments->m($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_tasks_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileTasksController") MApiMobileTasksController

### Get singleton instance

The singleton instance of the ``` MApiMobileTasksController ``` class can be accessed from the API Client.

```php
$mApiMobileTasks = $client->getMApiMobileTasks();
```

### <a name="m"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksController.m") m

> TODO: Add a method description


```php
function m($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new MRequest1();

$mApiMobileTasks->m($body);

```


### <a name="m1"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksController.m1") m1

> TODO: Add a method description


```php
function m1($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new MRequest2();

$mApiMobileTasks->m1($body);

```


### <a name="m11"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksController.m11") m11

> TODO: Add a method description


```php
function m11()
```

#### Example Usage

```php

$mApiMobileTasks->m11();

```


### <a name="m11"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksController.m11") m11

> TODO: Add a method description


```php
function m11()
```

#### Example Usage

```php

$mApiMobileTasks->m11();

```


### <a name="m2"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileTasksController.m2") m2

> TODO: Add a method description


```php
function m2()
```

#### Example Usage

```php

$mApiMobileTasks->m2();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_clients_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileClientsController") MApiMobileClientsController

### Get singleton instance

The singleton instance of the ``` MApiMobileClientsController ``` class can be accessed from the API Client.

```php
$mApiMobileClients = $client->getMApiMobileClients();
```

### <a name="get_profile"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileClientsController.getProfile") getProfile

> TODO: Add a method description


```php
function getProfile()
```

#### Example Usage

```php

$mApiMobileClients->getProfile();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_attachments_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileAttachmentsController") MApiMobileAttachmentsController

### Get singleton instance

The singleton instance of the ``` MApiMobileAttachmentsController ``` class can be accessed from the API Client.

```php
$mApiMobileAttachments = $client->getMApiMobileAttachments();
```

### <a name="m"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileAttachmentsController.m") m

> TODO: Add a method description


```php
function m($file)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| file |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$file = 'file';

$mApiMobileAttachments->m($file);

```


### <a name="m1"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileAttachmentsController.m1") m1

> TODO: Add a method description


```php
function m1()
```

#### Example Usage

```php

$mApiMobileAttachments->m1();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="m_api_mobile_chats_messages_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MApiMobileChatsMessagesController") MApiMobileChatsMessagesController

### Get singleton instance

The singleton instance of the ``` MApiMobileChatsMessagesController ``` class can be accessed from the API Client.

```php
$mApiMobileChatsMessages = $client->getMApiMobileChatsMessages();
```

### <a name="m"></a>![Method: ](https://apidocs.io/img/method.png ".MApiMobileChatsMessagesController.m") m

> TODO: Add a method description


```php
function m($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new MRequest3();

$mApiMobileChatsMessages->m($body);

```


[Back to List of Controllers](#list_of_controllers)



