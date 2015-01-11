<div class="wrap">
    <?php    echo "<h2>" . __( 'Live Scores - Settings', 'oscimp_trdom' ) . "</h2>"; ?>
     
  <p>To add the Live Scores to your website use one of the following short codes:</p>
<ul>***************</ul>
<ul><strong>[livescores-red]</strong> - Red Layout</ul>
<ul><strong>[livescores-green]</strong> - Green Layout</ul>
<ul><strong>[livescores-white]</strong> - White Layout</ul>
<ul><strong>[livescores-black]</strong> - Black Layout</ul>
<ul><strong>[livescores-orange]</strong> - Orange Layout</ul>
<ul><strong>[livescores-blue]</strong> - Blue Layout</ul>
<ul><strong>[livescores-gray]</strong> - Gray Layout</ul>
<ul>***************</ul>


    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" onclick="wls_click_credit_link();" id="wls_author_linking" <?php echo WLS_Main::$settings['wls_author_linking'] == 1? 'checked':'';?>>
                Enable Author credit link.
            </label>
        </div>
    </div>
<p>Thank you for using our free Live Scores plugin.</p>
</div>

