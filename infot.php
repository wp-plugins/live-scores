<div class="wrap">
    <?php    echo "<h2>" . __( 'Live Scores - Settings', 'oscimp_trdom' ) . "</h2>"; ?>
     
  <h3>To add the Live Scores to your website please use one of the following shortcodes:</h3>
  
<p>For <strong>Football</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-red]</strong> - Red Layout</ul>
<ul><strong>[livescores-green]</strong> - Green Layout</ul>
<ul><strong>[livescores-white]</strong> - White Layout</ul>
<ul><strong>[livescores-black]</strong> - Black Layout</ul>
<ul><strong>[livescores-orange]</strong> - Orange Layout</ul>
<ul><strong>[livescores-blue]</strong> - Blue Layout</ul>
<ul><strong>[livescores-gray]</strong> - Gray Layout</ul>

<br />
<p>For <strong>Tennis</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-tennis]</strong> - Default White Layout</ul>

<br />
<p>For <strong>Basketball</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-basketball]</strong> - Default White Layout</ul>

<br />
<p>For <strong>Ice Hockey</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-icehockey]</strong> - Default White Layout</ul>

<br />
<p>For <strong>American Football</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>

<ul><strong>[livescores-americanfootball]</strong> - Default White Layout</ul>

<br />
<p>For <strong>Baseball</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-baseball]</strong> - Default White Layout</ul>

<br />
<p>For <strong>Handball</strong> Live Scores.
<ul>****** Available Shortcodes *********</ul>
<ul><strong>[livescores-handball]</strong> - Default White Layout</ul>
<br />
<h3>Support our plugin - Help us keep it free!</h3>
    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" onclick="wls_click_credit_link();" id="wls_author_linking" <?php echo WLS_Main::$settings['wls_author_linking'] == 1? 'checked':'';?>>
                Activate Author Credit Link.
            </label>
        </div>
    </div>
<p>Thank you for using our free Live Scores plugin.</p>
</div>

