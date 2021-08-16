<?php require_once( '../admin/cms.php' ); ?>
<cms:template clonable='1' title='Committee Members' executable='0'>

    <cms:config_list_view orderby='weight' order='asc'>
        <cms:field 'k_selector_checkbox' />
        <cms:field 'k_page_title' sortable='0' />
        <cms:field 'k_up_down' header='Sort Order' />
        <cms:field 'k_actions' />
    </cms:config_list_view>

    <cms:editable name='member_image' label='Member image' desc='Upload member image here' crop='1' width='500'
        height='700' type='image' />
    <cms:editable name='member_name' label='Member Name' desc='Enter Member name here' type='text'>
        John Deo Mukaabya
    </cms:editable>
    <cms:editable name='member_position' label='Member Position' desc='Enter Position held here' type='text'>
        Committee Member
    </cms:editable>
</cms:template>
<?php COUCH::invoke(); ?>