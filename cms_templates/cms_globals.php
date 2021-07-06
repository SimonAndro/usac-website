<?php require_once( '../admin/cms.php' ); ?>
<cms:template title='Global Settings' executable='0'>
    <cms:editable name='site_name' label='Website name' type='text'>USAC</cms:editable>
    <cms:editable name='site_foot_mark' label='Website\' s foot mark' type='richtext'>
        <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod
            tempor incidunt ut et do maga aliqua enim ad minim.</p>
        <a href="#">Phone: +8745 44 5444</a> <a href="#">Fax: +88474 156 362</a> <br> <a href="#">Email:
            demoemail@demo.com</a>
    </cms:editable>
    <cms:editable name='fb_page' label='Facebook page link' type='text' >https://www.facebook.com/usac/</cms:editable>
    <cms:editable name='twitter_page' label='Twitter page link' type='text' >https://www.twitter.com/usac/</cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>