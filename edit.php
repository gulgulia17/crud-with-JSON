<?php 
    include(__DIR__.'/layout.php'); 
    $jsonfile = null;
if ($_SERVER['REQUEST_METHOD'] === "GET") { $jsonfile = $obj->edit($_GET); }
if ($_SERVER['REQUEST_METHOD'] === "POST") { $obj->edit($_POST); }
?>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h6 mb-0 text-uppercase">json object</h4>
                    </div>
                    <div class="card-body">
                        <form action="edit.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                                    <div class="form-group">
                                        <label>Policy holder name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $jsonfile['name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy holder number</label>
                                        <input type="text" name="number" class="form-control" placeholder="Mobile Number" value="<?php echo $jsonfile['number'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy number</label>
                                        <input type="text" name="policyNo" class="form-control" placeholder="Policy number" value="<?php echo $jsonfile['policyNo'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy FUP</label>
                                        <input type="date" name="fup" class="form-control" placeholder="FUP" value="<?php echo $jsonfile['fup'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy DOC</label>
                                        <input type="date" name="doc" class="form-control" placeholder="DOC" value="<?php echo $jsonfile['doc'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy Pay Mode</label>
                                        <input type="text" name="payMode" class="form-control" placeholder="Pay Mode" value="<?php echo $jsonfile['payMode'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Policy Plan no</label>
                                        <input type="text" name="planNo" class="form-control" placeholder="Plan Number" value="<?php echo $jsonfile['planNo'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy premium</label>
                                        <input type="text" name="premium" class="form-control" placeholder="Premium" value="<?php echo $jsonfile['premium'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy SA</label>
                                        <input type="text" name="sumAssured" class="form-control" placeholder="SA" value="<?php echo $jsonfile['sumAssured'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy T</label>
                                        <input type="text" name="term" class="form-control" placeholder="Term" value="<?php echo $jsonfile['term'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy Maturity Date</label>
                                        <input type="date" name="maturityDate" class="form-control" placeholder="Maturity Date" value="<?php echo $jsonfile['maturityDate'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy holder DOB</label>
                                        <input type="date" name="birthday" class="form-control" placeholder="Birthday" value="<?php echo $jsonfile['birthday'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mt-3">
                                <button class="btn btn-primary">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>