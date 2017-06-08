Ext.define('Melisa.security.view.desktop.users.view.Wrapper', {
    extend: 'Ext.panel.Panel',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.core.Module',
        'Melisa.ux.FloatingButton',
        'Melisa.ux.confirmation.Button',
        'Melisa.security.view.universal.users.view.WrapperModel',
        'Melisa.security.view.desktop.users.view.WrapperController',
        'Melisa.security.view.desktop.users.view.Grid'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    cls: 'app-security-users-view',
    iconCls: 'x-fa fa fa-users',
    layout: 'border',
    controller: 'securityUsersView',
    viewModel: {
        type: 'securityUsersView'
    },
    items: [
        {
            region: 'center',
            xtype: 'securityUsersViewGrid'
        }
    ]
    
    
});
