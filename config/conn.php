<?php
class Condb
{
     const db_name   = "localhost";
     const db_schema = "blog";
     const db_user   = "Dreyko";
     const db_pass   = "Icelyna1625x010";

    public function enabledCon()
    {
        $con = mysql_connect(self::db_name,self::db_user,self::db_pass);
            if(mysql_select_db(self::db_schema) or die (mysql_error($con))){

            }
            else
            {
                echo "no se puede encontrar el esquema";
            }
        }
    }

?>
