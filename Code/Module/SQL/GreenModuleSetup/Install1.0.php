<?php
$installer=$this;
$installer->startSetup();

$installer->run(" DROP TABLE IF EXISTS {$this->getTable('Abandon_cart_licensekey')};
CREATE TABLE {$this->getTable('Abandon_cart_licensekey')} (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'user_email' varchar(255) NOT NULL,
  'license_key' varchar(255) NOT NULL,
  'start_date' date NOT NULL,
  'end_date' date NOT NULL,
  'duration_type' varchar(255) NOT NULL,
  'user_id' varchar(255) NOT NULL,
  'package_name' varchar(255) NOT NULL,
  'list_abandon_cart' varchar(255) NOT NULL,
  'invitation_link' varchar(255) NOT NULL,
  'user_details' varchar(255) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

    ");
$installer->endSetup();
?>
