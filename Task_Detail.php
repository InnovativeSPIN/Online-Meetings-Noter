<?php
include('connect.php');

if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM iSPIN WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    $task = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Detail</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous" />
    <link rel="icon" href="./favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container single-p">
        <?php if ($task) : ?>
        <h4><?php echo $task['meet_title']; ?></h4>
        <div class="single-date-time-date">
            <p><?php echo date($task['date']); ?></p>
            <p><?php echo $task['time']; ?></p>
            <p><?php echo $task['day']; ?></p>
        </div>
        <div class="meeting-agenda-div">
            <h5>Meeting Agenda</h5>
            <p><?php echo $task['meet_agenda']; ?></p>
        </div>

        <div class="meeting-platform">
            <h5>Meeting Platform</h5>
            <p><?php echo $task['meet_platform']; ?></p>
        </div>

        <div class="word-planned-div">
            <h5>Work Planned</h5>
            <p><?php echo $task['work_planned']; ?></p>
        </div>

        <div class="word-planned-pre-div">
            <h5>Work on Previous Meet</h5>
            <p><?php echo $task['work_complected']; ?></p>
        </div>

        <div class="work-done-div">
            <h5>Work dony by</h5>
            <div class="row complected-list">
                <?php foreach (explode(',', $task['work_complected_by']) as $ing) : ?>
                <div class="col-md-3"><?php echo htmlspecialchars($ing); ?></div>
                <?php endforeach; ?>
                </ul>
            </div>

            <?php else : ?>
            <h5>No such Task exists.</h5>
            <?php endif ?>
        </div>
        <div class="back-btn">
            <a href="/iSPIN_Tasks.php"><i class="fas fa-arrow-alt-circle-left fa-2x"></i></a>
        </div>

        <div class="organizez-by">
            <p>Organizrd by <?php echo $task['meet_organized']; ?></p>
        </div>

</body>

</html>