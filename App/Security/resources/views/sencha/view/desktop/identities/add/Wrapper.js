Ext.define('Melisa.security.view.desktop.identities.add.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.window.Add',
    
    requires: [
        'Melisa.controller.Create',
        'Melisa.security.view.desktop.identities.add.Form',
        'Melisa.security.view.universal.identities.add.WrapperModel',
        'Melisa.security.view.desktop.identities.add.WrapperController'
    ],
    
    iconCls: 'x-fa fa-users',
    defaultFocus: 'txtDisplayEspecific',
    width: 300,
    height: 400,
    controller: 'securityIdentitiesAdd',
    viewModel: {
        type: 'securityIdentitiesAdd'
    },    
    items: [
        {
            xtype: 'securityIdentitiesAddForm'
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    }    
});
