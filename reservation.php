<?php include 'header.php' ?>

<div class = "reservation">
    <div class = "container">
        <h2> Table Reservation </h2>
        <form method="post" action="reservation-posting.php">
            <div class="row">
                <div class = "col-lg-3">
                    <label>Fill in your name</label>
                    <input type="text" class="form-control" required name="userName" placeholder="Your name">
                </div>
                <div class = "col-lg-3">
                    <label>Select the reservation date</label>
                    <input type="date" class="form-control" name="userDate" id="txtDate" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class = "col-lg-3">
                    <label>Select the reservation time</label>
                    <input class="form-control" name="userTime" type="time" value="" id="example-datetime-local-input" step="1800" min="09:00" max="22:00">
                </div>
                <div class = "col-lg-3">
                    <label>Select between 2 and 30 persons</label>
                    <input class="form-control" name="userPersons" type="number" min="2" max="30" step="1" value="2">
                </div>
               
            </div>
            <div class = "row">
                <div class = "col-lg-6">
                    <label>Fill in your email</label>
                    <input type="email" class="form-control" required name="userMail" placeholder="Your email">
                </div>
                <div class = "col-lg-6">
                    <label>Fill in your telephone</label>
                    <input type="tel" class="form-control" required name="userPhone" placeholder="Your phone" >
                    <span class="validity"></span>
                </div>
                <div class = "col-md-12 mb-3">
                    <label>Extra notes & preferences</label>
                    <input type="text" class="form-control" name="userNotes" placeholder="Your preferences" >
                    <span class="validity"></span>
                </div>
                <input class="btn btn-dark" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
