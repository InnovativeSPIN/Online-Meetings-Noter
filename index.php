<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iSPIN</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/styles.css" />
</head>

<body>
    <div class="top-navig">
        <div class="main-nav">
            <h1>iSPIN</h1>
            <a href="/iSPIN_Tasks.php">All Tasks</a>
        </div>
    </div>

    <div class="container main">
        <h1>NEW TASK/MEETING REPORT</h1>
        <div class="new-task">
            <form autocomplete="off" action="add2db.php" method="post">
                <div class="new-task-form">
                    <div class="row">
                        <div class="col-md-4 fdate date-time-day">
                            <input type="date" name="fdate" id="fdate" required />
                            <span>Date</span>
                        </div>
                        <div class="col-md-4 ftime date-time-day">
                            <input type="time" name="ftime" id="ftime" required />
                            <span>Time</span>
                        </div>
                        <div class="col-md-4 fday date-time-day">
                            <select name="fday" id="fday" required>
                                <option hidden> </option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                            <span>Day</span>
                        </div>

                        <div class="col-md-4 form-input">
                            <input type="text" name="title" required />
                            <span>Meeting Title</span>
                        </div>
                        <div class="links col-md-4 form-input">
                            <input type="text" name="link" id="link" required />
                            <span>Meeting Platform</span>
                        </div>
                        <div class="links col-md-4 form-input">
                            <input type="text" name="organizers" id="link" value="iSPIN team" />
                            <span>Meeting Organizers</span>
                        </div>
                        <div class="description col-md-12 form-input">
                            <textarea name="desc" id="desc" rows="4" required></textarea>
                            <span>Meeting Agenda</span>
                        </div>
                        <div class="col-md-12 form-input">
                            <textarea name="work_plan" rows="4" required></textarea>
                            <span>Work Planned</span>
                        </div>
                        <div class="col-md-6 form-input">
                            <textarea name="work_plan_prev" rows="2" required></textarea>
                            <span>Work Done planned on previous meeting</span>
                        </div>
                        <div class="col-md-6 form-input">
                            <input name="prev_work_done" type="text" required />
                            <span>Work Done by</span>
                        </div>
                    </div>
                    <div class="sub-btn">
                        <button type="submit">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>