Ext.define('Melisa.security.view.phone.passwordless.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.security.view.phone.passwordless.add.Title',
        'Melisa.security.view.phone.passwordless.add.WrapperController',
        'Melisa.security.view.phone.passwordless.add.Form',
        'Melisa.security.view.phone.users.select.Wrapper',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: 'securitypassworlessadd',
    layout: 'card',
    viewModel: {},
    bind: {
        url: '{modules.create}'
    },
    items: [
        {
            xtype: 'securitypasswordlessaddtitle',
            bind: {
                hidden: '{frmPasswordless.hidden}'
            }
        },
        {
            xtype: 'securitypasswordlessform',
            reference: 'frmPasswordless',
            publishes: [
                'hidden'
            ]
        },
        {
            xtype: 'securityusersselectwrapper'
        }
    ]
    
});
