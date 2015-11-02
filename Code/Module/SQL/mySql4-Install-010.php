<?php
  $installer = $this;
  $installer->startSetup();

  $installer->run("
    DROP TABLE IF EXISTS {$this->getTable('notes')};

    CREATE TABLE {$this->getTable('notes')} (
      `ppr_id` int(11) NOT NULL AUTO_INCREMENT,
      `notesku` bigint(20) NOT NULL,
      `notestatus`  smallint(16),
      PRIMARY KEY (`notes`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8
  ");

  $installer->endSetup();
