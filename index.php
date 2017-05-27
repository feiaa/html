<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">

    <?php htmlSidebar(); ?>
    
    <div class="content">
        <div class="contests">
           
            <?php
            $mysqli = connect2mysql();
            $res = $mysqli->query("select contest_id, abstract, title from contests;");
            for($row_no = 0; $row_no < $res->num_rows; $row_no++){
                $res->data_seek($row_no);
                $row = $res->fetch_assoc();
                $contest_link = "contest.php?id=".$row["contest_id"];
                printf("<h2>%s</h2>
                    <div class=\"contest\">
                        <div class=\"contest-abstract\">
                        %s
                        </div>
                    </div>
                    <div class=\"clearFloat\"></div>
                    <a href=\"%s\" class=\"contest-more\">详情>></a>
                    <div class=\"clearFloat\"></div>
                    ", $row["title"], $row["abstract"], $contest_link);
            }
            $mysqli->close();
            ?>

        </div>
    </div>
</div>

<?php htmlFooter(); ?>