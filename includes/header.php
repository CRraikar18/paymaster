<div class="navbar navbar-default navbar-fixed-top" style="background-color: #007bff;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php" style="color: rgba(255, 255, 255, 0.8); font-weight: bold;">
                Payroll
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['user_name'])) { ?>
                    <li><a href="past_record.php" style="color: rgba(255, 255, 255, 0.8);">Past Records</a></li>
                    <li><a href="settings.php" style="color: rgba(255, 255, 255, 0.8);">Settings</a></li>
                    <li><a href="logout.php" style="color: rgba(255, 255, 255, 0.8);">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php" style="color: rgba(255, 255, 255, 0.8);">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
               