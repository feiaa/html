<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">

    <?php htmlSidebar(); ?>
    
    <div class="content">
        <div class="contests">

            <h2 onclick="atest('myModal')">MNIST</h2>
            <div class="contest">
                <div class="contest-abstract">
                <p>
                You have some experience with R or Python and machine learning basics, but you’re new to computer vision. This competition is the perfect introduction to techniques like neural networks using a classic dataset including pre-extracted features.</p><p>
                MNIST ("Modified National Institute of Standards and Technology") is the de facto “hello world” dataset of computer vision. Since its release in 1999, this classic dataset of handwritten images has served as the basis for benchmarking classification algorithms. As new machine learning techniques emerge, MNIST remains a reliable resource for researchers and learners alike.</p><p>
                In this competition, your goal is to correctly identify digits from a dataset of tens of thousands of handwritten images. We’ve curated a set of tutorial-style kernels which cover everything from regression to neural networks. We encourage you to experiment with different algorithms to learn first-hand what works well and how techniques compare.</p>

                </div>
            </div>
            <div class="clearFloat"></div>
            <a href="#." onclick="atest('myModal')" class="contest-more">详情>></a>
            <div class="clearFloat"></div>
           
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