Ext.define('Melisa.security.view.phone.passwordless.add.Title', {
    extend: 'Ext.TitleBar',
    alias: 'widget.securitypasswordlessaddtitle',
    
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
            iconCls: 'x-fa fa fa-floppy-o',
            listeners: {
                tap: 'save'
            }
        }
    ]
    
});
