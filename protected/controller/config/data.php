<?php
$debug = false;
if(@$_SERVER["SERVER_NAME"]=="localhost"){
    $debug = true;
}
if($debug){ 
    return array(
        'title'=>'Not Framework DIXI',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'db_dixi', 
        'username' => 'root',
        'password' => '',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/',
        'folderVistas' => 'protected/views/',
        'pathSite' => 'http://'.$_SERVER["SERVER_NAME"].'/dixi/',
        'pathCMSSite' => 'http://'.$_SERVER["SERVER_NAME"].'/dixi/',
        'design' => '1',   
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By Dixi Project'
    );
} else {
    return array(

        'title'=>'Not Framework DIXI',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'dixiproj_framework',
        'username' => 'dixiproj_usrFra',
        'password' => '{0ziJHCWb-fk',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/',
        'folderVistas' => 'protected/views/',
        'pathSite' =>    'https://framework.dixi-project.com/',
        'pathCMSSite' => 'https://framework.dixi-project.com/admin/',
        'design' => '1',
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By Dixi Project'
    );
}
?>