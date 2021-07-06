<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Album Photo' clonable='1'>
    <cms:editable name='photo_date' type='text'>
        <cms:date /> 
    </cms:editable>
    <cms:editable name='photo_caption' type='text'>
        Graduation moments    
    </cms:editable>
    <cms:editable name='album_image' crop='1' width='800' height='800' type='image' />

    <cms:folder name="graduation" title="Graduation" />
    <cms:folder name="cultural" title="Cultural Activities" />
    <cms:folder name="random" title="Random" />
</cms:template>
<?php COUCH::invoke(); ?>