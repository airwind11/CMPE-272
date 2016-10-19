
        <?php
          extract($_POST);
         // check if user has left USERNAME or PASSWORD field blank
           if ( !$adminid || !$password ) {
               fieldsBlank();
               die();
            }


              if ( !( $file = fopen( "admindetails.txt",
                 "r" ) ) ) {
                print( "<title>Error</title></head>
                   <body>Could not open password file
                   </body></html>" );
                 die();
              }


             $userVerified = 0;

              // read each line in file and check username
              // and password
              while ( !feof( $file ) && !$userVerified ) {

                // read line from file
                $line = fgets( $file, 255 );

                // remove newline character from end of line
                $line = chop( $line );

                // split username and password
                $field = explode( ",", $line, 2 );

                 // verify username
               if ( $adminid == $field[ 0 ] ) {
                 $userVerified = 1;

                 // call function checkPassword to verify
                 // user’s password
                 if ( checkPassword( $password, $field )
                     == true )
                        accessGranted( $adminid );
                     else
                        wrongPassword();
                  }
               }

               // close text file
               fclose( $file );

               // call function accessDenied if username has
               // not been verified
               if ( !$userVerified )
                  accessDenied();

            // verify user password and return a boolean
           function checkPassword( $userpassword, $filedata )
           {
              if ( $userpassword == $filedata[ 1 ] )
                 return true;
              else
                 return false;
           }


            // print a message indicating permission
           // has been granted
           function accessGranted( $name )
          {
              print( "<title>Thank You</title></head>
                <body style = \"font-family: arial;
                font-size: 1em; color: blue\">
                <strong>Permission has been
                granted, $name. <br />
                 This is Secure Area.</strong>" );
           }
            // print a message indicating password is invalid
          function wrongPassword()
           {
            print( "<title>Access Denied</title></head>
               <body style = \"font-family: arial;
               font-size: 1em; color: red\">
              <strong>You entered an invalid
              password.<br />Access has
               been denied.</strong>" );
          }

           // print a message indicating access has been denied
          function accessDenied()
          {
             print( "<title>Access Denied</title></head>
               <body style = \"font-family: arial;
                font-size: 1em; color: red\">
                <strong>
                You were denied access to the secure area.
                 <br /></strong>" );
          }

           // print a message indicating that fields
           // have been left blank
          function fieldsBlank()
           {
             print( "<title>Access Denied</title></head>
                 <body style = \"font-family: arial;
                 font-size: 1em; color: red\">
                <strong>
                 Please fill in all form fields.
                 <br /></strong>" );
           }
       ?>


