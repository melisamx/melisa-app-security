Ext.define('Melisa.security.view.desktop.rbacRoles.view.Wrapper', {
    extend: 'Ext.panel.Panel',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.core.Module',
        'Melisa.ux.FloatingButton',
        'Melisa.ux.confirmation.Button',
        'Melisa.security.view.universal.rbacRoles.view.WrapperModel',
        'Melisa.security.view.desktop.rbacRoles.view.WrapperController',
        'Melisa.security.view.desktop.rbacRoles.view.Grid',
        'Melisa.security.view.desktop.rbacRoles.view.Identities',
        'Melisa.security.view.desktop.rbacRoles.view.Tasks'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    cls: 'app-security-rbacRoles-view',
    iconCls: 'x-fa fa fa-lock',
    layout: 'border',
    controller: 'securityRbacRolesView',
    viewModel: {
        type: 'securityRbacRolesView'
    },
    items: [
        {
            region: 'center',
            xtype: 'securityRbacRolesViewGrid',
            listeners: {
                selectionchange: 'onSelectionchangeGrid'
            }
        },
        {
            xtype: 'tabpanel',
            region: 'east',
            width: '70%',
            itemId: 'panDetails',
            split: true,
            listeners: {
                afterrender: 'onAfterRenderDetails'
            },
            items: [
                {
                    xtype: 'securityRbacRolesViewIdentities',
                    title: 'Perfiles privilegiados',
                    iconCls: 'x-fa fa-users'
                },
                {
                    xtype: 'securityRbacRolesViewTasks',
                    title: 'Tareas privilegiadas',
                    iconCls: 'x-fa fa-tasks'
                }
            ]
        }
    ]
});
