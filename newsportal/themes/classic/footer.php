<!-- Footer -->
<footer class="page-footer font-small indigo" style="background-color: #4d4d4d !important; color:#212529; !important">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">{$lang.294}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{$sitepath}/pageid.php?id=privacy">{$lang.247}</a>
                    </li>
                    <li>
                        <a href="{$sitepath}/pageid.php?id=aboutus">{$lang.248}</a>
                    </li>
                    <li>
                        <a href="{$sitepath}/pageid.php?id=terms">{$lang.249}</a>
                    </li>
                    <!-- <li>
                        <a href="{$sitepath}/rss.php" target="_blank"><i class="fa fa-rss"></i></a>
                    </li> -->
                </ul>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">News</h5>
                <ul class="list-unstyled">
                    {foreach from=$subcat item=inc}
                        {if $inc.cord neq 0 && $inc.parent eq 1 }
                        <li>
                            <a  href="{$sitepath}/categories.php?id={$inc.catid}">{$inc.name|stripslashes|replace:"
                                        ":"&nbsp;"}</a>
                        </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Lifestyle</h5>
                <ul class="list-unstyled">
                {foreach from=$subcat item=inc}
                    {if $inc.cord neq 0 && $inc.parent eq 17}
                    <li>
                        <a  href="{$sitepath}/categories.php?id={$inc.catid}">{$inc.name|stripslashes|replace:"
                                    ":"&nbsp;"}</a>
                    </li>
                    {/if}
                {/foreach}
                </ul>
            </div>

            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">{$lang.293}</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{$sitepath}">{$lang.110}</a>
                    </li>
                    <li>
                        <a href="{$homeurl}" target="_blank">USAC website</a>
                    </li>
                    <li>
                        <a href="{$homeurl}/community" target="_blank">USAC Community</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        &copy; <?=date("Y")?> Copyright:
        <a href="{$sitepath}"> {$sitetitle}</a>     
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>