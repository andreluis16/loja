<?php

class Config{

    //BASIC SITE INFO
    
    const SITE_URL = "http://localhost";
    const SITE_FOLDER = "store";
    const SITE_NAME = "The first store - PHP 7 and Mysql";
    const SITE_EMAIL_ADM = "nobloko80@gmail.com";
    const DB_LIMIT_PER_PAGE = 3;

    //DATABASE INFO
    
    const DB_HOST = "mysql";
    const DB_USER = "root";
    const DB_SENHA = "12345";
    const DB_BANCO = "loja";
    const DB_PREFIX = "fs_";
    
    //PHP MAILER INFO
    
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "nobloko80@gmail.com";
    const EMAIL_NAME = "My store contact";
    const EMAIL_PASS = "headshot";
    const EMAIL_PORT = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPY = "nobloko80@gmail.com";

}