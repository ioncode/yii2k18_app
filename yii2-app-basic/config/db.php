<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=fcm_bizontravel',
    'username' => '77737773',
    'password' => '77737773',
    'charset' => 'utf8',
	'attributes'=>array(

            PDO::MYSQL_ATTR_SSL_CIPHER=>'DHE-RSA-AES256-SHA:AES128-SHA',
			//enable back verification on production environment
			PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT=>0,

        ),

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
