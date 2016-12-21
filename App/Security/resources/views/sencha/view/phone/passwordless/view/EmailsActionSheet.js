Ext.define('Melisa.security.view.phone.passwordless.view.EmailsActionSheet', {
    extend: 'Ext.ActionSheet',
    alias: 'widget.securitypasswordlessactsheemails',
    
    reference: 'asEmails',
    hideOnMaskTap: true,
    items: [
        {
            iconCls: 'x-fa fa fa-user-times',
            text: 'Desactivar'
        },
        {
            iconCls: 'x-fa fa fa-trash',
            text: 'Eliminar'
        }
    ]
});