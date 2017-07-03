Ext.define('Melisa.security.view.desktop.rbacRoles.add.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.window.Add',
    
    requires: [
        'Melisa.controller.Create',
        'Melisa.security.view.desktop.rbacRoles.add.Form'
    ],
    
    iconCls: 'x-fa fa-lock',
    defaultFocus: 'txtName',
    controller: {
        type: 'create',
        eventSuccess: 'app.security.rbacRoles.create.success'
    },
    width: 400,
    height: 540,
    viewModel: {},    
    items: [
        {
            xtype: 'securityRbacRolesAddForm'
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
