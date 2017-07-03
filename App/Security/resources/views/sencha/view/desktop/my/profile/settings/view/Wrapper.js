Ext.define('Melisa.security.view.desktop.my.profile.settings.view.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.window.View',
    
    requires: [
        'Melisa.view.desktop.wrapper.window.View',
        'Melisa.security.view.desktop.my.profile.settings.view.WrapperController',
        'Melisa.security.view.desktop.my.profile.settings.view.Access'
    ],
    
    cls: 'app-security-my-profile-settings-view',
    iconCls: 'x-fa fa fa-user-circle',
    layout: 'border',
    controller: 'securityMyProfileSettingsView',
    width: 860,
    bodyPadding: 0,
    viewModel: {},
    items: [
        {
            region: 'center',
            xtype: 'securityMyProfileSettingsViewAccess'
        },
        {
            region: 'north',
            height: 200,
            xtype: 'component',
            cls: 'wrapper-north',
            tpl: [
                '<div class="wrapper-avatar">',
                    '<tpl if="avatar">',
                        '',
                    '<tpl else>',
                        '<i class="fa fa-user-circle-o avatar"></i>',
                    '</tpl>',
                '</div>',
                '<div class="wrapper-identity">',
                    '<h1 class="display">{displayEspecific}</h1>',
                    '<p class="profile">{profile.name}</p>',
                '</div>'
            ],
            bind: {
                data: '{identity}'
            }
        }
    ]
});
