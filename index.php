
<?php
        // in production saving to a database will also be added

        $text=$_GET['USSD_STRING'];
        $phonenumber=$_GET['MSISDN'];
        $text=$_GET['serviceCode'];

        $level = explode("*", $text);
        if (isset($text)) {
            $response="CON Welcome to our eccomerce portal.\nPlease choose a service \n1. register for account\n2. login\n3. take survey";
            if(!empty($level[2]) && empty($level[3])) { // after first menu
                if($level[2] == "1")
                    $response = "CON Please enter your Full name.";
                else if ($level[2]=="2")
                    $response = "CON Please enter your passcode";
                else if ($level[2] == "3")
                    $response = "CON Over all how satisfied are you with this service \n1. very satisfied\n2. Somewhat satisfied \n3. Neither satisfied nor dissatisfied \n4. Dissatisfied";
                 
            } else if(!empty($level[2]) && !empty($level[3])) { // after second menu
                if($level[2] == "1") {
                    if(!empty($level[3]))
                        $response = "END Hi ".$level[3].", You have been registered";
                        // add name and phone number to database
                    else
                        $response = "CON please enter a valid name.";

                }
                else if ($level[2]=="2") {
                    if(!empty($level[3]) && $level[3] == "1234")// check password with number from database
                        $response = "CON you are logged in \nOptions \n1. enter itemcode\n2. browse catalog\n 3. ...";
                    else
                        $response = "CON Wrong passcode, retry inputing passcode.";

                } else if ($level[2] == "3")
                    $response = "CON How well do our products Meet your needs \n1. Extremely well \n2. Very well \n3. Somewhat Well \n4. Not at all well";
                    // save responce to database
            }
            header('Content-type: text/plain');
            echo $response;
    }
?>