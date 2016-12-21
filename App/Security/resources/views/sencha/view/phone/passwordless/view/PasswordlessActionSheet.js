Ext.define('Melisa.security.view.phone.passwordless.view.PasswordlessActionSheet', {
    extend: 'Ext.ActionSheet',
    alias: 'widget.securitypasswordlessactshemain',
    
    reference: 'asPasswordless',
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