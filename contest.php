<?php include 'lib.php';
    $mysqli = connect2mysql();
    $contest_id = $_GET["id"];
    $res = $mysqli->query("select result from contests where contest_id = ".$contest_id.";");
    if(!$res || $res->num_rows <= 0){
        not_found();
    }
    $res->data_seek(0);
    $contest_result = $res->fetch_assoc();
    // TODO: contest result table should be established once the 
    // contest is added. contest result is not a view, which the user is unique 
    // with highest rank;
    assert(defined("CONTEST_RESULT_TABLE_PREFIX"));
    $contest_result = CONTEST_RESULT_TABLE_PREFIX.$contest_result["result"];

    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">

    <?php htmlSidebar(); ?>
    
    <div class="content">

        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Specification</a></li>

            <li role="presentation"><a href="#results" aria-controls="results" role="tab" data-toggle="tab">Results</a></li>

            <li role="presentation"><a href="#submit" aria-controls="submit" role="tab" data-toggle="tab">Submit</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="specification">
<?php
$res = $mysqli->query("select title, abstract, description from contests where contest_id = ".$contest_id);
$row = $res->fetch_assoc();
printf("<div class='panel-body contest-specification'>
    <h2> %s </h2> <br />
    <p>%s</p>
    <br />
    <p>%s</p>
    </div>
    ", $row["title"], $row["abstract"], $row["description"]);

?>
                <br /><br /></div>

                <div role="tabpanel" class="tab-pane" id="results">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>User</th>
                                    <th>Score</th>
                                    <th>Last Submission</th>
                                </tr>
<?php
$res = $mysqli->query("select user_id, rank, date from ".$contest_result." ;");
for($row_no = 0; $row_no < $res->num_rows; $row_no++){
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    if($row_no % 2 == 0){
        $color = "active";
    } else {
        $color = "info";
    }
    $nickname = $mysqli->query("select nickname from users where user_id = ".$row["user_id"]." ;");
    $nickname = $nickname->fetch_assoc()["nickname"];
    printf("<tr class='%s'> 
        <td>%s </td>
        <td>%s </td>
        <td>%s </td>
        </tr>", $color, $nickname, $row["rank"], $row["date"]);
}
$mysqli->close();
?>
                            </table>
                        </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="submit">...</div>
            </div>

        </div>
            <div class="clearFloat"></div>

            
    </div>
</div>

<?php htmlFooter(); ?>