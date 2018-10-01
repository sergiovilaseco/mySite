
        
        <?php

        $name = "Web form";
        $email = 'root@svilaseco.com';
        $message = $_POST['message'];
        $to = 'sergio.vilaseco@outlook.com';
        $subject = $_POST['subject'];
        $headers = "From: ".$name." < ".$email." >\r\n";
        $msjCorreo = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\n\nMessage:\n$message";

        $result=mail($to, $subject, $msjCorreo, $headers);

            if ($result) {
                echo $result;
            } else {
                echo 0;
            }
        
        ?>