    <?php include(__DIR__.'/layout.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h6 mb-0 text-uppercase">JSON CREATE</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>PolicyNo</th>
                                <th>FUP</th>
                                <th>DOC</th>
                                <th>PayMode</th>
                                <th>PlanNo</th>
                                <th>Premium</th>
                                <th>SumAssured</th>
                                <th>Term</th>
                                <th>MaturityDate</th>
                                <th>Birthday</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                <?php foreach ($obj->show()->details as $id => $obj) : ?>
                                    <tr>

                                        <td><?php echo $obj->name; ?></td>
                                        <td><?php echo $obj->number; ?></td>
                                        <td><?php echo $obj->policyNo; ?></td>
                                        <td><?php echo $obj->fup; ?></td>
                                        <td><?php echo $obj->doc; ?></td>
                                        <td><?php echo $obj->payMode; ?></td>
                                        <td><?php echo $obj->planNo; ?></td>
                                        <td><?php echo $obj->premium; ?></td>
                                        <td><?php echo $obj->sumAssured; ?></td>
                                        <td><?php echo $obj->term; ?></td>
                                        <td><?php echo $obj->maturityDate; ?></td>
                                        <td><?php echo $obj->birthday; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $id; ?>">Edit</a>
                                            <a href="delete.php?id=<?php echo $id; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>