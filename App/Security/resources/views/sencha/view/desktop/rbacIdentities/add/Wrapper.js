Ext.define('Melisa.security.view.desktop.rbacIdentities.add.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.window.Add',
    
    requires: [
        'Melisa.controller.Create',
        'Melisa.security.view.desktop.rbacIdentities.add.Form',
        'Melisa.security.view.universal.rbacIdentities.add.WrapperModel',
        'Melisa.security.view.desktop.rbacIdentities.add.WrapperController'
    ],
    
    iconCls: 'x-fa fa-lock',
    defaultFocus: 'txtName',
    controller: 'securityRbacIdentitiesAdd',
    width: 400,
    height: 400,
    viewModel: {
        type: 'securityRbacIdentitiesAdd'
    },    
    items: [
        {
            xtype: 'securityRbacIdentitiesAddForm'
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }
    
});
