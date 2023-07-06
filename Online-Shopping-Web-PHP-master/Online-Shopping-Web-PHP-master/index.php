<?php
require('db/conn.php');
require "header.php";
require('db/product.php');

$db = new conn();
$pdo = $db->getConnnn();

$dt = product::getAllProductts($pdo);

?>

<div style="height: 700px;">
    <div class="background-wrap" style=" background-color: #488aff !important;">
        <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
            <source src=".mp4" type="video/mp4">

            Sorry That The Amazing video Background Is Not Supported Please Contact us and tell us which operating system or which browser you use Sorry!
        </video>
    </div>


    <div class="content ">
        <h1 class="bounceInDown animated" style="text-transform: capitalize;">NGOCHUYSHOP.COM</h1>
        <p class="slideInLeft animated">Welcome to our online shopping in HỒ CHÍ MINH</p>
    </div>

</div>


<div style="height: 2px;background-color: orange;width: 100%;"></div><br>
<div class="m-5">
    <?php if (isset($_SESSION['log_detail1'])) {
        echo ' <button style="width: 15rem;border-radius:0%;" type=" button" class="btn btn-danger">
          
           <a href="create_watch.php"> Tạo mới một sản phẩm</a>
       </button>';
    } else {
        echo '';
    }
    ?>
</div>
<div class="container-fluid my-5">
    <h2 style="color:black;padding-bottom: 20px; font-weight:bold;">SHOP MÁY ẢNH<span style="color:black"></h2>
</div>

<div class="">
    <div style="text-decoration: none;" class="owl-carousel">
        <?php foreach ($dt as $product) : ?>
            <div class="item">
                <div style="max-width: 18rem;" class="card-item">
                    <div class="card-header p-0 mx-2">
                        <a href="product.php?id=<?= $product->Id ?>">
                            <img style="height: 15rem;" class="card-img-top" src="images/<?= $product->img ?> " alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="color:white;font-weight:100;letter-spacing:2px" class="card-title my-2">G-SHOCK</h5>
                        <h4 style="color:black;font-weight:100" class="card-title"><?= $product->Name ?></h4></br>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>
</div> -->

</div>


<div class="container-fluid" style="margin-top: 30px">
</div>

<?php include 'footer.php';
?>

</body>

</html>
<script>
    $(function() {
        $(".hover").hover(function() {

            $(".hover").popover({
                title: fetchData,
                html: true,
                placement: 'bottom'
            });

            function fetchData() {
                var fetch_Data = '';
                var element = $(this);
                var id = element.attr("id");
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    async: false,
                    data: {
                        id: id
                    },
                    success: function(data) {
                        fetch_Data = data;
                    }
                });
                return fetch_Data;

            }
        });
    });
</script>
<script>
    $(function() {
        $(".x").click(function() {
            $(" .drop").fadeOut("400");
        });
    });
</script>
<script>
    function fill(Value) {

        //Assigning value to "search" div in "search.php" file.

        $('#search').val(Value);

        //Hiding "display" div in "search.php" file.

        $('#display').hide();

    }

    $(document).ready(function() {

        //On pressing a key on "Search box" in "search.php" file. This function will be called.

        $("#search").keyup(function() {

            //Assigning search box value to javascript variable named as "name".

            var name = $('#search').val();

            //Validating, if "name" is empty.

            if (name == "") {

                //Assigning empty value to "display" div in "search.php" file.

                $("#display").html("");

            }

            //If name is not empty.
            else {

                //AJAX is called.

                $.ajax({

                    //AJAX type is "Post".

                    type: "POST",

                    //Data will be sent to "ajax.php".

                    url: "search.php",

                    //Data, that will be sent to "ajax.php".

                    data: {

                        //Assigning value of "name" into "search" variable.

                        search: name

                    },

                    //If result found, this funtion will be called.

                    success: function(html) {

                        //Assigning result to "display" div in "search.php" file.

                        $("#display").html(html).show();

                    }

                });

            }

        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        stagePadding: 50,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>