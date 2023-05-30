<?php
  include "./includes/connection.php";
  if(!isset($_SESSION))
    {
        session_start();
    }

  $id = $_SESSION["MEMBER_ID"];

    // SCHEDULE DATA
    $rtSql = "SELECT
            schedule.id,
            departureDate,
            departureTime,
            price,
            start,
            finish,
            duration
            from schedule
            join route ON route.id=routeId
            join bus ON bus.id=busId
            ORDER BY departureDate DESC";
    $resultrtSql = mysqli_query($connection, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
    $scheduleJson = json_encode($arr);

  // ROUTES DATA
  $routSql = 'SELECT * FROM route;';
  $resultrouteSql = mysqli_query($connection,$routSql);
  $arrRoutes = array();
  if(mysqli_num_rows($resultrouteSql))
       while($row=mysqli_fetch_assoc($resultrouteSql))
            $arrRoutes[] = $row;
  $routeJson = json_encode($arrRoutes);

  // USERDATA
  $usersSql = 'SELECT * FROM users;';
  $resultrouteSql = mysqli_query($connection,$usersSql);
  $arrUsers = array();
  if(mysqli_num_rows($resultrouteSql))
       while($row=mysqli_fetch_assoc($resultrouteSql))
            $arrUsers[] = $row;
  $usersJson = json_encode($arrUsers);

  // DRIVER DATA
  $driverSql = 'SELECT * FROM driver';
  $resultdriverSql = mysqli_query($connection,$driverSql);
  $arrDriver = array();
  if(mysqli_num_rows( $resultdriverSql ))
       while($row=mysqli_fetch_assoc( $resultdriverSql ))
            $arrDriver[] = $row;
  $driverJson = json_encode($arrDriver);

  // BUS DATA
  $busSql = 'SELECT bus.id,
                    busno,
                    driverId,
                    driverName,
                    employDate
                    FROM bus JOIN driver ON bus.driverId = driver.id GROUP BY bus.id';
  $resultbusSql = mysqli_query($connection,$busSql);
  $arrBuses = array();
  if(mysqli_num_rows($resultbusSql))
       while($row=mysqli_fetch_assoc($resultbusSql))
            $arrBuses[] = $row;
  $busJson = json_encode($arrBuses);

  // BOOKING DATA
  $bookingSql = "SELECT * from bookings";
  $resultBookingSql = mysqli_query($connection,$bookingSql);
  $arrBooking = array();
  if(mysqli_num_rows($resultBookingSql))
       while($row=mysqli_fetch_assoc($resultBookingSql))
            $arrBooking[] = $row;
  $bookingJson = json_encode($arrBooking);

 $mytickets = "select
                     bookings.id,
                     scheduleId,
                     start,
                     finish,
                     price,
                     duration,
                     bookedSeat,
                     departureTime,
                     departureDate
                    from bookings join schedule on schedule.id = scheduleId join route on routeId = route.id where userId = '".$id."'";

$ticket =  mysqli_query($connection,$mytickets);
 $ticketarr = array();
 if(mysqli_num_rows($ticket))
        while($row = mysqli_fetch_assoc($ticket))
            $ticketarr[] = $row;
        $ticketJson = json_encode($ticketarr);


//DASHBOARD SUMMERY NUMBER OF THE TABLE LIST
  $counting = "SELECT * from schedule";
  $scheduleCountResult = mysqli_query($connection,$counting);
  $schedulecount=mysqli_num_rows($scheduleCountResult);

  $book = "SELECT * from bookings";
  $bookCountResult = mysqli_query($connection,$book);
  $bookcount=mysqli_num_rows($bookCountResult );

  $user = "SELECT * from users";
  $userCountResult = mysqli_query($connection,$user);
  $usercount=mysqli_num_rows($userCountResult);

  $bus = "SELECT * from bus";
  $busCountResult = mysqli_query($connection,$bus);
  $buscount=mysqli_num_rows($busCountResult);



?>