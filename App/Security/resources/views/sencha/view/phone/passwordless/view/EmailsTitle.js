Ext.define('Melisa.security.view.phone.passwordless.view.EmailsTitle', {
    extend: 'Ext.TitleBar',
    alias: 'widget.securitypasswordlessemailstitle',
    
    docked: 'top',
    items: [
        {
            iconCls: 'x-fa fa fa-chevron-left',
            bind: {
                text: '{i18n.lisEmails.title}'
            },
            listeners: {
                tap: 'onTapBtnEmailsPermit'
            }
        },
        {
            align: 'right',
            iconCls: 'x-fa fa fa-plus'
        }
    ]
    
});
