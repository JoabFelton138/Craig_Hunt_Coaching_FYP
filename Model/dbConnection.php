 <?php
 
$pdo = new PDO(
	"mysql:host=213.175.196.4:3306;dbname=joabfelt_CHC",
	"joabfelt_user",
	"r0astP0tat03s",
	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

session_start();

function userSignup($newUser)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO `User` (`First_Name`, `Last_Name`, `Email`, `Address`,
													 `City`, `PostCode`, `Contact`, `Username`, `Password`, 
													 `Gender`, `Height`, `Weight`, `About`, `Goals` ) 
													VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$statement->execute([

			$newUser->First_Name,
			$newUser->Last_Name,
			$newUser->Email,
			$newUser->Address,
			$newUser->City,
			$newUser->PostCode,
			$newUser->Contact,
			$newUser->Username,
			$newUser->Password,
			$newUser->Gender,
			$newUser->Height,
			$newUser->Weight,
			$newUser->About,
			$newUser->Goals
		]);
}

function userLogin($Username)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM User WHERE Username = ?");
	$statement->execute([$Username]);
	$User = $statement->fetchall(PDO::FETCH_CLASS, "User");
	return $User;
}

function adminLogin($Username)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `Admin` WHERE User_Name = ?");
	$statement->execute([$Username]);
	$User = $statement->fetchall(PDO::FETCH_CLASS, "Admin");
	return $User;
}

function getUser($getUser)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `User` WHERE User_ID = ?");
	$statement->execute([$getUser]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "User");
	return $result;
}



function getAllUsers()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `User`");
	$statement->execute();
	$result = $statement->fetchall(PDO::FETCH_CLASS, "User");
	return $result;
}

function updateUser($updatedInfo, $User_ID)
{
	global $pdo;
	$statement = $pdo->prepare("UPDATE User SET `First_Name` = ?, `Last_Name` = ?, `Email` = ?, `Address` = ?, `City` = ?, `PostCode` = ?, `Contact` = ?, `Gender` = ?, `Height` = ?, `Weight` = ?, `About` = ?, `Goals`= ? WHERE User_ID = ?"); 
	$statement->execute([
		$updatedInfo->First_Name,
		$updatedInfo->Last_Name,
		$updatedInfo->Email,
		$updatedInfo->Address,
		$updatedInfo->City,
		$updatedInfo->PostCode,
		$updatedInfo->Contact,
		$updatedInfo->Gender,
		$updatedInfo->Height,
		$updatedInfo->Weight,
		$updatedInfo->About,
		$updatedInfo->Goals,
		$User_ID
	]);
}

function createPlan ($newEntry, $userID)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO `Fitness_Plan` (`User_ID`, `Day`,`Exercise`, `Repetitions`, `Duration`, `Distance_In_Metres`, `Weight`) 
	VALUES (? , ?, ?, ?, ?, ?, ?)");

	$statement->execute([
		$userID,
		$newEntry->Day,
		$newEntry->Exercise,
		$newEntry->Repetitions,
		$newEntry->Duration,
		$newEntry->Distance_In_Metres,
		$newEntry->Weight
	]);
}

function getUsersExercisePlan($user)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `Fitness_Plan` WHERE User_ID = ?");
	$statement->execute([$user]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "Exercise");
	return $result;
}

function getCurrentExercise($currentExercise)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `Fitness_Plan` WHERE Exercise_ID = ?");
	$statement->execute([$currentExercise]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "Exercise");
	return $result;
}

function editPlanEntry ($editedEntry, $Exercise_ID)
{
	global $pdo;
	$statement = $pdo->prepare("UPDATE Fitness_Plan SET `Day` = ?, `Exercise` = ?, `Repetitions` = ?, `Duration` = ?,`Distance_In_Metres` = ?, `Weight` = ? WHERE Exercise_ID = ?");
	
	$statement->execute([
		$editedEntry->Day,
		$editedEntry->Exercise,
		$editedEntry->Repetitions,
		$editedEntry->Duration,
		$editedEntry->Distance_In_Metres,
		$editedEntry->Weight,
		$Exercise_ID
	]);
}

function deleteExercise ($Exercise_ID)
{
	global $pdo;
	$statement = $pdo->prepare("DELETE FROM `Fitness_Plan` WHERE Exercise_ID = ?");
	$statement->execute([$Exercise_ID]);
}


function newAppointment($newAppointment, $userID)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO `Booking` (`User_ID`, `Admin_ID`, `Time`, `Date`, `Location`) 
	VALUES (?, ?, ?, ?, ?)");

	$statement->execute([
			$userID,
			$newAppointment->Time,
			$newAppointment->Date,
			$newAppointment->Location
		]);
}

function getAppointment($getAppointment)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `Booking` WHERE User_ID = ?");
	$statement->execute([ $getAppointment]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "NewAppointment");
	return $result;
}

function getCurrentAppointment($currentAppointment)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM `Booking` WHERE Booking_ID = ?");
	$statement->execute([$currentAppointment]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "NewAppointment");
	return $result;
}
function getAllAppointments()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT User.First_Name, User.Last_Name, Booking.Time, Booking.Date, Booking.Location, Booking.Booking_ID FROM Booking JOIN User USING (User_ID)");
	$statement->execute();
	$result = $statement->fetchall(PDO::FETCH_CLASS, "NewAppointment");
	return $result;
}

function countAppointments($countAppointments)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT COUNT(*) FROM `Booking` WHERE User_ID = ?");
	$statement->execute([$countAppointments]);
	$number_of_rows = $statement->fetchColumn(); 
	return $number_of_rows;
}

function countAllAppointments()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT COUNT(*) FROM `Booking`");
	$statement->execute();
	$number_of_rows = $statement->fetchColumn(); 
	return $number_of_rows;
}

function deleteAppointment($Booking_ID)
{
	global $pdo;
	$statement = $pdo->prepare("DELETE FROM Booking WHERE Booking_ID = ?");
	$statement->execute([$Booking_ID]);
}

function updateAppointment($updatedAppointment, $Booking_ID)
{
	global $pdo;
	$statement = $pdo->prepare("UPDATE Booking SET `Time` = ?, `Date` = ?, `Location` = ? WHERE Booking_ID = ?"); 
	$statement->execute([
						 $updatedAppointment->Time,
						 $updatedAppointment->Date,
						 $updatedAppointment->Location,
						 $Booking_ID
	]);
}

function exLogEntry($newEntry, $userID)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO `Exercise_Log` (`User_ID`, `Exercise_Name`, `Day`, `Weight`, `Repetitions`, `Distance`, `Duration`) 
	VALUES (?, ?, ?, ?, ?, ?, ?)");

	$statement->execute([
			$userID,
			$newEntry->Exercise_Name,
			$newEntry->Day,
			$newEntry->Weight,
			$newEntry->Repetitions,
			$newEntry->Distance,
			$newEntry->Duration
		]);
}

function userGetexLog($getEntry)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM Exercise_Log WHERE User_ID = ?");
	$statement->execute([ $getEntry]);
	$exPlan = $statement->fetchall(PDO::FETCH_CLASS, "NewExLogEntry");
	return $exPlan;
}

function ClientsExerciseLog($User_ID)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM Exercise_Log WHERE User_ID = ?");
	$statement->execute([$User_ID]);
	$exLog = $statement->fetchall(PDO::FETCH_CLASS, "ClientsExerciseLog");
	return $exLog;
}

function getCurrentExerciseLog($Exercise_Log_ID)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM Exercise_Log WHERE Exercise_Log_ID = ?");
	$statement ->execute([$Exercise_Log_ID]);
	$currentExLog = $statement->fetchall(PDO::FETCH_CLASS, "ClientsExerciseLog");
	return $currentExLog;
}



function Comment($newComment, $Exercise_Log_ID)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO `Comment` ( `Admin_ID`, `Exercise_Log_ID`, `Comment`) 
	VALUES (?, ?, ?)");

	$statement->execute([
		$newComment->Admin_ID,
			$Exercise_Log_ID,
			$newComment->Comment
		]);
}

function getLastComment($ExLogID)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM Comment Where Exercise_Log_ID = ? ORDER BY Comment_ID DESC LIMIT 1");
	$statement->execute([$ExLogID]);
	$result = $statement->fetchall(PDO::FETCH_CLASS, "Comment");
	return $result;
}








