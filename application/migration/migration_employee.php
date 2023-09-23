<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_employee extends CI_Migration {

        public function up()
        {
    
                execute_script(APPPATH.'migration/sqlscripts/employeetable_web.sql');
             }  
        
    }

