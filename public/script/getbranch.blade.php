<?php
use Illuminate\Support\Facades\DB;

$q = $_REQUEST["q"];
$branch = DB::table('branch')->where('branchname', $q)->first();

echo '<script>

 </script>';
?>
<html>
    <script>
        var elem = document.getElementById("phone");
        elem.setAttribute("value","hello");
    </script>
</html>