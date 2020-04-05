<?php 
include(__DIR__.'/layout.php'); 
if ($_SERVER['REQUEST_METHOD'] === "POST") { $obj->add($_POST); }
?>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h6 mb-0 text-uppercase">json object</h4>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Policy holder name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy holder number</label>
                                        <input type="text" name="number" class="form-control" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy number</label>
                                        <input type="text" name="policyNo" class="form-control" placeholder="Policy number">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy FUP</label>
                                        <input type="date" name="fup" class="form-control" placeholder="FUP">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy DOC</label>
                                        <input type="date" name="doc" class="form-control" placeholder="DOC">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy Pay Mode</label>
                                        <input type="text" name="payMode" class="form-control" placeholder="Pay Mode">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Policy Plan no</label>
                                        <input type="text" name="planNo" class="form-control" placeholder="Plan Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy premium</label>
                                        <input type="text" name="premium" class="form-control" placeholder="Premium">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy SA</label>
                                        <input type="text" name="sumAssured" class="form-control" placeholder="SA">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy T</label>
                                        <input type="text" name="term" class="form-control" placeholder="Term">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy Maturity Date</label>
                                        <input type="date" name="maturityDate" class="form-control" placeholder="Maturity Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Policy holder DOB</label>
                                        <input type="date" name="birthday" class="form-control" placeholder="Birthday">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mt-3">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>