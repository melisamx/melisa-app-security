Ext.define('Melisa.security.view.desktop.rbacIdentities.add.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.securityRbacIdentitiesAddForm',
    
    defaults: {
        anchor: '100%',
        allowBlank: false
    },
    items: [
        {
            xtype: 'combodefault',
            name: 'idIdentity',
            fieldLabel: 'Perfil',
            displayField: 'displayEspecific',
            bind: {
                store: '{identities}'
            }
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
