<?php require_once( '../admin/cms.php' ); ?>
<cms:template clonable='1' title='About Us Events' executable='0' order='2'>
    <cms:editable name='about_image' label='About image' desc='Upload about image here' crop='1' width='1920'
        height='1280' type='image' />
    <cms:editable name='about_year' label='About Title' desc='Enter about year here' type='text'>
        2021
    </cms:editable>
    <cms:editable name='about_title' label='About Title' desc='Enter about title here' type='text'>
        Our First Achivement in History
    </cms:editable>
    <cms:editable name='about_detail' label='About item details' desc='Enter about detail her' type='richtext'>
        <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit
            quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed
            fringilla mauris sit amet nibh.</p>
        <p>Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo
            nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce
            fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare
            lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
            turpis. Quisque id mi.Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non,
            auctor endrerit quis, nisi.
            Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed fringilla mauris sit amet
            nibh.Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
            Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
            rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus
            ipsum, faucibus ut, ullamcorper id, varius ac, leo.</p>
    </cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>