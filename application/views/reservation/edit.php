<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Reservation Editing Form
                </div>
                <div class="card-body">
                    <?php if (validation_errors()):?>
                        <div class="alert alert-danger" ole="alert">
                            <?= validation_errors() ?>;
                        </div>
                    <?php endif ?>
                    <form action="" method ="post">
                    <input type="hidden" name="id" value="<?= $reservation['id'];?>">
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time">
                            value="<?= $reservation['time'];?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" id="date" name="date">
                            value="<?= $reservation['date'];?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="nema">
                            value="<?= $reservation['name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tlpnumber">Phone Number</label>
                            <input type="number" class="form-control" id="tlpnumber" name="tlpnumber">
                            value="<?= $reservation['tlpnumber'];?>">
                        </div>
                        <div class="form-group">
                        <label for="numberpeople">Number of people</label>
                        <select class="form-control" id="numberpeople" name="numberpeople">
                            <?php foreach ($numberpeople as $key):?>
                                <?php if($key == $reservation['numberpeople']) : ?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                <?php else :?>
                                    <option value="<?= $key ?>"><?= $key ?></option>
                                <?php endif ;?>
                                <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <input type="text" class="form-control" id="comments" name="comments">
                            value="<?= $reservation['comments'];?>">
                        </div>     
                        <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
