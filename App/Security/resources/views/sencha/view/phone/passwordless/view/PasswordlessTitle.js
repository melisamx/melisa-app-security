Ext.define('Melisa.security.view.phone.passwordless.view.PasswordlessTitle', {
    extend: 'Ext.TitleBar',
    alias: 'widget.securitypasswordlesstitle',
    
    docked: 'top',
    items: [
        {
            iconCls: 'x-fa fa fa-chevron-left',
            bind: {
                text: '{wrapper.title}'
            },
            listeners: {
                tap: 'activateMainModule'
            }
        },
        {
            align: 'right',
            iconCls: 'x-fa fa fa-plus',
            listeners: {
                tap: 'onTapBtnAddPasswordless'
            }
        }
    ]
    
});