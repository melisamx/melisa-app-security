Ext.define('Melisa.security.view.desktop.identities.add.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.securityIdentitiesAddForm',
    
    defaults: {
        anchor: '100%',
        allowBlank: false
    },
    items: [
        {
            xtype: 'textfield',
            name: 'display',
            fieldLabel: 'Nombre general',
            hidden: true,
            bind: {
                value: '{txtDisplayEspecific.value}'
            }
        },
        {
            xtype: 'textfield',
            name: 'displayEspecific',
            itemId: 'txtDisplayEspecific',
            fieldLabel: 'Nombre a mostrar',
            reference: 'txtDisplayEspecific',
            publishes: [
                'value'
            ]
        },
        {
            xtype: 'combodefault',
            name: 'idProfile',
            fieldLabel: 'Perfil',
            bind: {
                store: '{profiles}'
            },
            tpl: Ext.create('Ext.XTemplate',
                '<ul class="x-list-plain"><tpl for=".">',
                    '<li role="option" class="x-boundlist-item" style="font-size: 16px; padding: 10px;">',
                        '<i class="{icon}" style="margin-right: 15px"></i> {name}',
                    '</li>',
                '</tpl></ul>'
            )
        },
        {
            xtype: 'checkbox',
            name: 'active',
            fieldLabel: 'Activo',
            checked: true
        },
        {
            xtype: 'checkbox',
            name: 'isDefault',
            fieldLabel: 'Perfil por default',
            checked: true
        }
    ]    
});
