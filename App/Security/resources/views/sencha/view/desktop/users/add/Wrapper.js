Ext.define('Melisa.security.view.desktop.users.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    viewModel: {
        stores: {
            scopes: {
                autoLoad: false,
                remoteFilter: true,
                proxy: {
                    type: 'ajax',
                    url: '{modules.scopes}',
                    reader: {
                        type: 'json',
                        rootProperty: 'data'
                    }
                }
            }
        }
    },    
    items: [
        {
            xtype: 'textfield',
            name: 'nombre',
            fieldLabel: 'Nombre'
        },
        {
            xtype: 'textfield',
            name: 'patente',
            fieldLabel: 'Patente'
        },
        {
            xtype: 'combobox',
            name: 'idScope',
            fieldLabel: 'Ambito',
            displayField: 'name',
            allowBlank: false,
            bind: {
                store: '{scopes}'
            }
        },
        {
            xtype: 'htmleditor',
            name: 'data',
            fieldLabel: 'Firma',
            labelAlign: 'top',
            enableColors: false,
            enableFont: false,
            enableSourceEdit: false,
            enableLists: false,
            enableLinks: false,
            flex: 1
        }
    ],    
    bbar: [
        '->',
        {
            text: 'Guardar',
            scale: 'large',
            iconCls: 'x-fa fa-save',
            listeners: {
                click: 'save'
            }
        }
    ]
    
});
