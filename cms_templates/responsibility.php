<?php require_once( '../admin/cms.php' ); ?>
<cms:template clonable='1' title='USAC Responsbilities' executable='0'>
    <cms:editable name='resp_image' label='Responsibility Image' desc='Upload Responsibility Icon Image here' crop='1'
        width='100' height='100' type='image' />
    <cms:editable name='resp_title' label='Responsibility title' desc='Enter Responsibility title here' type='text'>
    Help Current Students
    </cms:editable>
    <cms:editable name='resp_details' label='Responsibility details' desc='Enter Responsibility details here'
        type='richtext'>
        De create building thinking about your requirment and latest treand on our marketplace area
    </cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>