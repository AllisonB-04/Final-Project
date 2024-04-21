<?php

if($_SERVER['SERVER_NAME']== "localhost:8888")
{
    define('$DBUSER', "root");
    define('$DBPASS', "root");
    define('$DBNAME', "myblog_db");
    define('$DBHOST', "localhost:8888");
}else
{
    define('$DBUSER', "root");
    define('$DBPASS', "");
    define('$DBNAME', "myblog_db");
    define('$DBHOST', "localhost:8888");
}