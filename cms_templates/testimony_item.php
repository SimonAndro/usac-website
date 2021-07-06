<?php require_once( '../admin/cms.php' ); ?>
<cms:template clonable='1' title='Testimonials' executable='0'>
    <cms:editable name='member_image' label='Member image' desc='Upload member image here' crop='1' width='500'
        height='500' type='image' />
    <cms:editable name='member_test' label='Testimonial' desc='Enter Testimonial here' type='text'>
        Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
        inciidunt ut
        labore et dolorgna aliqua. Ut enim ad minim ostrud.
    </cms:editable>
    <cms:editable name='member_name' label='Member Name' desc='Enter Member name here' type='text'>
        John Deo Mukaabya
    </cms:editable>
    <cms:editable name='member_position' label='Member Position' desc='Enter Position held here' type='text'>
        Committee Member
    </cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>