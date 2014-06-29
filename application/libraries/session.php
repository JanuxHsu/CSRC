<?php

class session 

{

	function session(){

        $this->_set_session();

    }



    function _set_session()

	{

        session_start();

    }

    function set_userdata($session_name,$session_value)

	{

        $_SESSION[$session_name] = $session_value;

		$_SESSION['start'] = time(); // taking now logged in time

		$_SESSION['expire'] = $_SESSION['start'] + (60 * 360) ; 

    }

    function userdata($session_name)

	{

        if(isset($_SESSION[$session_name]))

            return $_SESSION[$session_name];

        return false;

    }

    function unset_userdata($session_name)

	{

        if(isset($_SESSION[$session_name]))

            unset($_SESSION[$session_name]);

    }


}

?>