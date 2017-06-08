Ext.define('Melisa.security.view.desktop.users.add.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.securityUsersAddForm',
    
    requires: [
        'Melisa.override.form.field.vtypes.Pass'
    ],
    
    defaults: {
        anchor: '100%',
        allowBlank: false
    },
    items: [
        {
            xtype: 'textfield',
            name: 'name',
            fieldLabel: 'Nombre',
            itemId: 'txtName'
        },
        {
            xtype: 'textfield',
            name: 'email',
            vtype: 'email',
            fieldLabel: 'Correo electronico'
        },
        {
            xtype: 'textfield',
            name: 'password',
            vtype: 'pass',
            inputType: 'password',
            fieldCheck: 'txtRepeatPass',
            fieldLabel: 'Contraseña'
        },
        {
            xtype: 'textfield',
            name: 'password-confirm',
            vtype: 'pass',
            itemId: 'txtRepeatPass',
            inputType: 'password',
            fieldLabel: 'Repetir contraseña'
        },
        {
            xtype: 'checkbox',
            name: 'active',
            fieldLabel: 'Activo'
        }
    ]    
});
