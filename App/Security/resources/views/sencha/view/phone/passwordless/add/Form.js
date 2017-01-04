Ext.define('Melisa.security.view.phone.passwordless.add.Form', {
    extend: 'Ext.Container',
    alias: 'widget.securitypasswordlessform',
    
    requires: [
        'Melisa.view.phone.pitcher.Button'
    ],
    
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
            xtype: 'pitcherbutton',
            name: 'idUser',
            text: 'Seleccionar usuario',
            bind: {
                melisa: '{modules.selectUser}',
                hidden: '{!modules.selectUser.allowed}'
            },
            listeners: {
                readymodule: 'onPitcherUserReady'
            }
        },
        {
            xtype: 'container',
            reference: 'conUserSelected',
            tpl: '<h2>{name}</h2><p>{email}</p>'
        }
    ]
});
