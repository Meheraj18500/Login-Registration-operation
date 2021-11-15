<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: login.php');
    die();
}
include('include/header.php');
include('include/sidebar.php');

?>

    
    <!-- Main content -->
    <main>
        <header>
            <label class="las la-bars"></label>
            <div class="search">
                <span class="las la-search"></span>
                <input type="search" placeholder="Enter keyword">
            </div>
            <div class="options">
                <!-- <span class="las la-bell"></span>
                <span class="las la-bookmark"></span>
                <span class="las la-comment"></span> -->
                <a href="<?php echo $link ?>function/logout.php">Log out</a>
            </div>
        </header>

        <div class="card-view">
            <div class="card">
                <div class="card-top">
                    <h3 class="count">1250</h3>
                    <div class="title">Total Like</div>
                    <span class="lar la-thumbs-up"></span>
                </div>
                <div class="card-bottom"><a href="#0">More info <span class="las la-arrow-circle-right"></span> </a></div>
            </div>
            <div class="card">
                <div class="card-top">
                    <h3 class="count">1250</h3>
                    <div class="title">Total Comment</div>
                    <span class="lar la-comment"></span>
                </div>
                <div class="card-bottom"><a href="#0">More info <span class="las la-arrow-circle-right"></span> </a></div>
            </div>
            <div class="card">
                <div class="card-top">
                    <h3 class="count">1250</h3>
                    <div class="title">Total Follow</div>
                    <span class="las la-tree"></span>
                </div>
                <div class="card-bottom"><a href="#0">More info <span class="las la-arrow-circle-right"></span> </a></div>
            </div>

            <div class="card">
                <div class="card-top">
                    <h3 class="count">1250</h3>
                    <div class="title">Total Share</div>
                    <span class="las la-share"></span>
                </div>
                <div class="card-bottom"><a href="#0">More info <span class="las la-arrow-circle-right"></span> </a></div>
            </div>
        </div>

        <div class="chart-grid">
            <div class="follow-chart">
                <h4 class="title">Followers</h4>
                <div id="myfirstchart" style="height: 300px;"></div>
            </div>
            <div class="overview-chart">
                <h4 class="title">Overview</h4>
                <div id="donut-example" style="height: 300px;"></div>
            </div>
        </div>

    </main>

<?php include('include/footer.php'); ?>

    