<?php
include("header.php");
?>
<h1 class="heading">Welcome <?php echo $_SESSION["name"]; ?> </h1>

<style type="text/css">

.blinking{
    animation:blinkingText 1s infinite;
}
@keyframes blinkingText{
    0%{     color: #FF0000;font-weight:bold;    }
    49%{    color: transparent; }
    50%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #FF0000;    }
}
.blink_me {
  animation: blinker 1s linear infinite;color: #FF0000;font-weight:bold;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>
<div style="text-align:center;">
						<li style="list-style:none;">
							<a href="../Home.php">
							<span class="blink_me">VEHICLE BOOKING</span>
							<span class="nav-badge-btm"></span></a>
						</li>
</div>
<?php
include("footer.php");
?>
