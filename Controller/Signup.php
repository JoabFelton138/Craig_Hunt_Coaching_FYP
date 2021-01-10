<?php
	require_once '../Model/dbConnection.php';
	require_once '../Model/User.php';

	if (isset($_SESSION['id'])):
		header('Location: /Login.php');
		exit();
    
    else:
        
        if(isset($_REQUEST['submit'])):
			$First_Name = htmlspecialchars($_REQUEST['First_Name']);
			$Last_Name = htmlspecialchars($_REQUEST['Last_Name']);
			$Email = htmlspecialchars($_REQUEST['Email']);
			$Address = htmlspecialchars($_REQUEST['Address']);
			$City = htmlspecialchars($_REQUEST['City']);
            $PostCode = htmlspecialchars($_REQUEST['PostCode']); 
            $Contact = htmlspecialchars($_REQUEST['Contact']);
            $Username = htmlspecialchars($_REQUEST['Username']);
			$Password = htmlspecialchars($_REQUEST['Password']);
			$Gender = htmlspecialchars($_REQUEST['Gender']);
            $Height = htmlspecialchars($_REQUEST['Height']);
            $Weight = htmlspecialchars($_REQUEST['Weight']);
            $About = htmlspecialchars($_REQUEST['About']);
			$Goals = htmlspecialchars($_REQUEST['Goals']);
			echo("isset");

            if (empty($First_Name) || empty($Last_Name) || empty($Email) || empty($Address) || empty($City) 
			|| empty($PostCode) || empty($Contact) || empty($Username) || empty($Password) || empty($Gender) 
            || empty($Height) || empty($Weight) || empty($About) || empty($Goals)):
				
			echo("empty");
            header('Location: Signup.php?Signup=empty');
			exit();
            
        else:
				if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
					header('Location: Signup.php?Signup=Invalid_Email');
					exit();
                
                else:
					$clientUsers = userLogin($Username);
                    
                    if (sizeof($clientUsers) > 0):
						header('Location: Signup.php?Signup=username_taken');
						exit();
                    
                    else:
						$Password = password_hash($Password, PASSWORD_DEFAULT);

						$newUser = new User();
						$newUser->First_Name = $First_Name;
						$newUser->Last_Name = $Last_Name;
						$newUser->Email = $Email;
						$newUser->Address = $Address;
                        $newUser->City = $City;
                        $newUser->PostCode = $PostCode;
                        $newUser->Contact = $Contact;
						$newUser->Username = $Username;
						$newUser->Password = $Password;   
						$newUser->Gender = $Gender;
                        $newUser->Height = $Height;
                        $newUser->Weight = $Weight;
						$newUser->About = $About;
                        $newUser->Goals = $Goals;                

						userSignup($newUser);
						echo("Done");

						header('Location: Signup.php?Signup=success');
						exit();

					endif;
				endif;
			endif;
		endif;
	endif;

	require_once '../View/Signup.php';