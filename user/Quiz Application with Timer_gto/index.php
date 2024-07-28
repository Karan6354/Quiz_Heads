<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess The Object</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link href="../assets/img/logo.jpg" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body style="background-image: url('gto.jpg');">
    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
            <div class="info">6. The quiz might misbehave if browser javascript is disabled</div>
            <div class="info">7. You will not be able to print the pdf without having an existing account</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Guess The Object</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <script src="js/jquery.min.js"></script>
            <?php
            if (isset($_SESSION["uname"])) {
                $action = "../../fpdf184/New_certificate.php";
            } else {
                $action = "../../temp/temp.php?pdf=true";
                $_SESSION["uname"] = "";
            }
            ?>
            <script src="js/jquery.session.js"></script>
            <form action=<?php echo $action;?> method="POST" id="result_frm">
                <input type="hidden" name="hf_username" id="hf_username">
                <input type="hidden" name="hf_quiz" id="hf_quiz">
                <input type="hidden" name="hf_marks" id="hf_marks">
            </form>
            <script>
                $(document).on("click", "#print_link", (e) => {
                    var session = "<?php echo $_SESSION["uname"]; ?>";
                    var marks = document.getElementById("hf_marks").getAttribute("value");
                    e.preventDefault();
                    document.getElementById("hf_username").setAttribute("value", session);
                    document.getElementById("hf_quiz").setAttribute("value", "Guess The Object");
                    $("#result_frm").submit();

                });
            </script>
            <a href="" id="print_link"><button class="print" id="print">Print Result</button></a>
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qh_db2";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $total = 0;
    $sql = "SELECT * FROM guess_obj_master";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $total++;
        }
    }
    $random = range(1, $total);
    shuffle($random);
    $random = array_slice($random, 0, 10);
    $string = implode(",",$random);
    $store = array();$i=0;
    $store_ans = array();
    $sql = "SELECT * FROM guess_obj_master where gto_id in ($string);";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $rows = $row;
            $store[$i] = $row;
            $i++;
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
    
    <script>
        console.log(<?php echo json_encode($store[0]['gto_answer']); ?>);
        let questions = [{
                numb: 1,
                question1: <?php echo json_encode($store[0]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[0]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[0]['gto_answer']); ?>,
                options: [
                ]
            },
            {
                numb: 2,
                question1: <?php echo json_encode($store[1]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[1]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[1]['gto_answer']); ?>,
                options: [
                ]
            },
            {
                numb: 3,
                question1: <?php echo json_encode($store[2]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[2]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[2]['gto_answer']); ?>,
                options: [
                ]
            },
            {
                numb: 4,
                question1: <?php echo json_encode($store[3]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[3]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[3]['gto_answer']); ?>,
                options: [
                ]
            },
            {
                numb: 5,
                question1: <?php echo json_encode($store[4]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[4]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[4]['gto_answer']); ?>,
                options: [
                ]
            },
            // you can uncogtoent the below codes and make duplicate as more as you want to add question
            // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

            {
                numb: 6,
                question1: <?php echo json_encode($store[5]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[5]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[5]['gto_answer']); ?>,
                options: [
                ]
            },

            {
                numb: 7,
                question1: <?php echo json_encode($store[6]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[6]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[6]['gto_answer']); ?>,
                options: [
                ]
            },

            {
                numb: 8,
                question1: <?php echo json_encode($store[7]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[7]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[7]['gto_answer']); ?>,
                options: [
                ]
            },

            {
                numb: 9,
                question1: <?php echo json_encode($store[8]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[8]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[8]['gto_answer']); ?>,
                options: [
                ]
            },

            {
                numb: 10,
                question1: <?php echo json_encode($store[9]['gto_image1']); ?>,
                question2: <?php echo json_encode($store[9]['gto_image2']); ?>,
                answer: <?php echo json_encode($store[9]['gto_answer']); ?>,
                options: [
                ]
            },
        ];
    </script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

</body>

</html>