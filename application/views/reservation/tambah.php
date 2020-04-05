<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Reservation Form
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                        <div class="alert alert-danger" ole="alert">
                            <?= validation_errors() ?>;
                        </div>
                    <?php endif ?>
                    <form action="" method ="post">
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time">
                            08.00 - 20.00 
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" id="date" name="date">
                            day-month-year
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="tlpnumber">Phone Number</label>
                            <input type="number" class="form-control" id="tlpnumber" name="tlpnumber">
                        </div>     
                        <div class="form-group">
                        <label for="numberpeople">Number of people</label>
                        <select class="form-control" id="numberpeople" name="numberpeople">
                            <?php foreach ($numberpeople as $key):?>
                                <option
                                value="<?= $key ?>"
                                selected><?= $key ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <input type="text" class="form-control" id="comments" name="comments">
                        </div> 
                        <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
