#
# Table structure for table 'tx_formpincodes_domain_model_pincodes'
#
CREATE TABLE tx_formpincodes_domain_model_pincodes (
    uid int(11) unsigned DEFAULT 0 NOT NULL auto_increment,
    pid int(11) DEFAULT 0 NOT NULL,

    pincode varchar(25) DEFAULT '' NOT NULL,
	  is_active tinyint(4) unsigned DEFAULT 0 NOT NULL,
		is_used tinyint(4) unsigned DEFAULT 0 NOT NULL,


    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,


    PRIMARY KEY (uid),
    KEY parent (pid),
);
