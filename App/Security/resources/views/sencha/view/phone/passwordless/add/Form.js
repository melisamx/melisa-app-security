Ext.define('Melisa.security.view.phone.passwordless.add.Form', {
    extend: 'Ext.Container',
    alias: 'widget.securitypasswordlessform',
    
    padding: 15,
    items: [
        {
            xtype: 'textfield',
            name: 'name',
            placeHolder: 'Ingresa nombre',
            label: 'Nombre'
        },
        {
            xtype: 'togglefield',
            labelAlign: 'left',
            name: 'active',
            label: 'Activo'
        },
        {
            xtype: 'button',
            text: 'Seleccionar un usuario',
            width: '100%',
            listeners: {
                tap: 'moduleRun'
            },
            bind: {
                melisa: '{modules.selectUser}',
                hidden: '{!modules.selectUser.allowed}'
            }
        }
    ]
});
