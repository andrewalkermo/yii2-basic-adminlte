#!/bin/bash
{
  sudo cp -f test.yii2-basic-adminlte.conf /etc/apache2/sites-available/;
  sudo a2dissite test.yii2-basic-adminlte.conf;
  sudo a2ensite test.yii2-basic-adminlte.conf;
  sudo sed -i '/test\.yii2\-basic\-adminlte/d' /etc/hosts;
  sudo sh -c 'echo "127.0.0.1    test.yii2-basic-adminlte" >> /etc/hosts';
  sudo service apache2 reload;
  ./yii migrate --migrationPath=vendor/webvimark/module-user-management/migrations/

} >log.txt
echo "vhost foi configurado";
echo "acesse: http://test.yii2-basic-adminlte";