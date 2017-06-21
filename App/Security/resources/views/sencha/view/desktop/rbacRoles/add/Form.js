Ext.define('Melisa.security.view.desktop.rbacRoles.add.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.securityRbacRolesAddForm',
    
    defaults: {
        anchor: '100%',
        allowBlank: false
    },
    items: [
        {
            xtype: 'textfield',
            name: 'role',
            fieldLabel: 'Rol',
            itemId: 'txtName'
        },
        {
            xtype: 'textarea',
            name: 'description',
            fieldLabel: 'Descripcion'
        },
        {
            xtype: 'checkbox',
            name: 'active',
            fieldLabel: 'Activo',
            checked: true
        },
        {
            xtype: 'checkbox',
            name: 'isSystem',
            fieldLabel: 'De sistema'
        }
    ]    
});
