<!DOCTYPE html>
<html>
<head>
	<title>Report Table</title>
	<style>
table {
  border-collapse: collapse;
  border: 1px solid black;
} 

th,td {
  border: 2px solid black;
}

table.a {
  table-layout: auto;
  width: 2000px;  
}

table.b {
  table-layout: fixed;
  width: 180px;  
}

table.c {
  table-layout: auto;
  width: 100%;  
}

table.d {
  table-layout: fixed;
  width: 100%;  
}
</style>
</head>
<body>
    <h1> Reservation List </h1>

	<div id="outtable">
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
	</div>
</body>
</html>