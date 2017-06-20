Ext.define('Melisa.security.view.desktop.users.add.Wrapper', {
    extend: 'Ext.window.Window',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.controller.Create',
        'Melisa.security.view.desktop.users.add.Form'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    iconCls: 'x-fa fa-users',
    defaultFocus: 'txtName',
    controller: 'create',
    layout: 'fit',
    width: 400,
    modal: true,
    viewModel: {},    
    items: [
        {
            xtype: 'securityUsersAddForm'
        }
    ],
    bbar: {
        xtype: 'toolbardefault'
    },
    listeners: {
        successsubmit: function(e, response, action) {
            console.log(arguments);
            Ext.GlobalEvents.fireEvent('app.security.users.create.success', action.result);
        }
    }
    
});
