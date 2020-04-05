<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px">Reservation List</h1>
    </div>


        <table class="table table-striped table-bordered" id="list_rsr">
        <thead>
            <tr>
            <th>ID</th>
            <th>Time</th>
            <th>Date</th>
            <th>Name</th>
            <th>Telephone Number</th>
            <th>Number of People</th>
            <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($reservation as $rsr){?>
                <tr>
                    <th><?= $no++; ?></th>
                    <th><?= $rsr->time; ?></th>
                    <th><?= $rsr->date; ?></th>
                    <th><?= $rsr->name; ?></th>
                    <th><?= $rsr->tlpnumber; ?></th>
                    <th><?= $rsr->numberpeople; ?></th>
                    <th><?= $rsr->comments; ?></th>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    
    
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>customer/tambah" class="btn btn-primary"> Add Reservation</a>
        </div>
    </div>

</div>