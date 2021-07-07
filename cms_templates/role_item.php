<?php require_once( '../admin/cms.php' ); ?>
<cms:template clonable='1' title='USAC Intro' executable='0'>
    
    <cms:config_list_view orderby='weight' order='asc'>
        <cms:field 'k_selector_checkbox' />
        <cms:field 'k_page_title' sortable='0' />
        <cms:field 'k_up_down' header='Sort Order' />
        <cms:field 'k_actions' />
    </cms:config_list_view>

    <cms:editable name='intro_image' label='Introduction Image' desc='Upload Introduction Image here' crop='1'
        width='1920' height='1280' type='image' />
    <cms:editable name='intro_title' label='Introduction title' desc='Enter Introduction title here' type='text'>
        We Are Proud
    </cms:editable>
    <cms:editable name='intro_details' label='Introduction details' desc='Enter Introduction details here'
        type='richtext'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be
        the need (academic, relocation, career, projects, mentorship, etc. you can ask the
        community and get responses in three.
    </cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>