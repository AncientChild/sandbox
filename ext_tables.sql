CREATE TABLE tx_sandbox_domain_model_product (
   uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
   pid int(11) DEFAULT '0' NOT NULL,

   name varchar(255) DEFAULT '' NOT NULL,
   description text NOT NULL,
   quantity int(11) DEFAULT '0' NOT NULL,

   PRIMARY KEY (uid),
   KEY parent (pid)
);

CREATE TABLE tx_sandbox_domain_model_lab (
    uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);