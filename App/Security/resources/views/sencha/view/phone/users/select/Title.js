Ext.define('Melisa.security.view.phone.users.select.Title', {
    extend: 'Ext.Toolbar',    
    alias: 'widget.securityusersselecttitle',
    
    docked: 'top',
    items: [
        {
            iconCls: 'x-fa fa fa-chevron-left',
            listeners: {
                tap: 'onDisclose'
            },
            bind: {
                text: '{i18n.title}'
            }
        }
    ]
    
});
