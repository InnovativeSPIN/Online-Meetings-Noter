<?php
include('connect.php');
$sql = "SELECT id,date, time, day, meet_title, meet_organized FROM iSPIN ORDER BY date";
$result = mysqli_query($conn, $sql);
$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSPIN_Tasks</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container main-div">
        <h1>iSPIN ACTIVITIES</h1>
        <div class="row">

            <?php foreach ($tasks as $task) { ?>
            <a href="Task_Detail.php?id=<?php echo htmlspecialchars($task['id']); ?>">
                <div class="col s12 m6 task-div">

                    <div class="task-card">
                        <div class="task-content">
                            <h4><?php echo htmlspecialchars($task['meet_title']); ?></h4>
                            <div class="date-time-div">
                                <p>Date : <?php echo date($task['date']); ?></p>
                                <p>Time : <?php echo $task['time']; ?></p>
                                <p>Day : <?php echo $task['day']; ?></p>
                            </div>
                        </div>
                        <div class="view-more">
                            <h5>Planned By : <?php echo htmlspecialchars($task['meet_organized']); ?></h5>
                            <a href="Task_Detail.php?id=<?php echo htmlspecialchars($task['id']); ?>">View Details</a>
                        </div>
                    </div>

                </div>
            </a>

            <?php } ?>

        </div>
    </div>
</body>

</html>