# MySQL dump 7.1
#
# Host: localhost    Database: trilug
#--------------------------------------------------------
# Server version     3.22.32

#
# Table structure for table 'member_list'
#
CREATE TABLE member_list (
  member_id bigint(20) unsigned DEFAULT '0' NOT NULL,
  first_name varchar(30) DEFAULT '' NOT NULL,
  last_name varchar(30) DEFAULT '' NOT NULL,
  email varchar(254) DEFAULT '' NOT NULL,
  occupation varchar(30) DEFAULT '' NOT NULL,
  employer varchar(30) DEFAULT '' NOT NULL,
  birth_year int(4) DEFAULT '0' NOT NULL,
  city varchar(30) DEFAULT '' NOT NULL,
  member_password varchar(30) DEFAULT 'password' NOT NULL,
  member_group varchar(30) DEFAULT 'member' NOT NULL,
  address_1 varchar(255) DEFAULT '' NOT NULL,
  address_2 varchar(255) DEFAULT '' NOT NULL,
  state char(2) DEFAULT 'NC' NOT NULL,
  zip_code varchar(10) DEFAULT '' NOT NULL,
  telephone varchar(15) DEFAULT '' NOT NULL,
  PRIMARY KEY (member_id),
  KEY member_id (member_id),
  UNIQUE member_id_2 (member_id)
);

