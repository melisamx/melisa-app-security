Ext.define('Melisa.security.view.phone.passwordless.view.Wrapper', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.security.view.phone.passwordless.view.WrapperController',
        'Melisa.security.view.phone.passwordless.view.WrapperModel',
        'Melisa.security.view.phone.passwordless.view.PasswordlessList',
        'Melisa.security.view.phone.passwordless.view.EmailsList',
        'Melisa.security.view.phone.passwordless.view.PasswordlessTitle',
        'Melisa.security.view.phone.passwordless.view.EmailsTitle',
        'Melisa.security.view.phone.passwordless.view.PasswordlessActionSheet',
        'Melisa.security.view.phone.passwordless.view.EmailsActionSheet'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: 'securitypasswordlessview',
    layout: 'card',
    cls: 'passwordlesss-view',
    viewModel: {
        type: 'securitypasswordlessview'
    },
    items: [
        {
            xtype: 'securitypasswordlesstitle',
            bind: {
                hidden: '{lisPasswordless.hidden}'
            }
        },
        {
            xtype: 'securitypasswordlessemailstitle',
            bind: {
                hidden: '{lisEmails.hidden}'
            }
        },
        {
            xtype: 'securitypasswordlesslist'
        },
        {
            xtype: 'securitypasswordlessemailslist'
        },
        {
            xtype: 'securitypasswordlessactshemain'
        },
        {
            xtype: 'securitypasswordlessactsheemails'
        }
    ]
    
});
