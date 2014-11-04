<?php

    /**
     * Kernel
     *
     * @copyright   
     * @author      Adnan Özsarigöl
     * @version     0.1
     * @package     
     * @module      all
     *
     */
    class Kernel {
        
        /**
         * Run
         *
         * @copyright
         * @author          Adnan Özsarigöl
         *
         * @access          public
         * @param                                     
         * @return          bool                         
         */
        public function run() {   
            try {                
                $action = (isset($_GET['action'])) ? $_GET['action'] : FALSE;                
                if ($action === 'test') $this->view = 'test.phtml';
                else if (empty($action)) $this->view = 'home.phtml';
                else throw new Exception('UNKNOWN ACTION');
                
                $this->includeContent = APPLICATION_PATH . $this->view;            
                if (file_exists($this->includeContent)) throw new Exception('VIEW NOT FOUND');
                include (APPLICATION_PATH . 'layout.phtml');
            }
            catch(Exception $e)
                var_dump($e->getMessage());
                return FALSE;
            }            
            return TRUE;
        } // End of Function run
        
    } // End of Class Kernel