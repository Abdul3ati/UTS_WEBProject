<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Reservation Data Details
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $reservation['name'];  ?></h5>
                <p class="card-text">
                    <label for=""><b> Time:</b></label>
                    <?= $reservation['time'];  ?></p>
                <p class="card-text">
                    <label for=""><b> Date:</b></label>
                    <?= $reservation['date'];  ?></p>
                <p class="card-text">
                    <label for=""><b> Phone Number:</b></label>
                    <?= $reservation['tlpnumber'];  ?></p>
                <p class="card-text">
                    <label for=""><b> Number of people:</b></label>
                    <?= $reservation['numberpeople'];  ?></p>
                <p class="card-text">
                    <label for=""><b> Comments:</b></label>
                    <?= $reservation['comments'];  ?></p> 

                <a href="<?= base_url();;?>reservation" class="btn btn-primary">Back</a>
            </div>
        </div>
        </div>
    </div>    
</div>

