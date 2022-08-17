@extends('../master')
@section('title')
    Set Appointment
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-offset-1">
                <h3>Site Location</h3>
                <ul class="pagination">
                    <li class="active"><a href="#" disabled>Site Location</a></li>
                    <li><a href="#" disabled>Date and Time</a></li>
                    <li><a href="#" disabled>Personal Information</a></li>
                    <li><a href="#" disabled>Family Location</a></li>
                    <li><a href="#" disabled>Applicant's Information</a></li>
                </ul>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="sel1">Select Site Location:</label>
                        <select class="form-control" id="selector" onchange="showUser(this.value)">
                            <option disabled selected value hidden> -- select site -- </option>
                            <?php
                            $branch = DB::table('branch')->get();
                            foreach ($branch as $branch_get) {
                                echo "<option>$branch_get->branchname</option>";
                            }
                            
                            ?>

                        </select>
                    </div>
                    <div class="col-sm-12" id="sitedetails">
                        <br>
                        <center><h3>Site Details</h3></center>
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" id="phone" disabled> <br>
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control" id="mobilenum" disabled><br>
                        <label for="">Adress</label>
                        <input type="text" class="form-control" id="address" disabled> <br>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1 col-md-offset-11">
                        <a href="/dateandtime"><button class="btn btn-primary">Next</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showUser(str) {
            var n = str;
            const brancharray = <?php echo json_encode($branch); ?>;
            for (let index = 0; index < brancharray.length; index++) {
                if (str === brancharray[index].branchname) {
                    var ex = document.getElementById("phone");
                    ex.setAttribute("value", brancharray[index].phonenum);
                    var ex1 = document.getElementById("mobilenum");
                    ex1.setAttribute("value", brancharray[index].mobilenum);
                    var ex2 = document.getElementById("address");
                    ex2.setAttribute("value", brancharray[index].address);
                }
            }
        }
    </script>
@endsection
