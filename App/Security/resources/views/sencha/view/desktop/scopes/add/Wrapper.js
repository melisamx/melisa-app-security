Ext.define('Melisa.security.view.desktop.scopes.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.core.Module',
        'Melisa.controller.Create'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: {
        type: 'create'
    },
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    viewModel: {},    
    items: [
        {
            xtype: 'textfield',
            name: 'id',
            fieldLabel: 'Id'
        },
        {
            xtype: 'textfield',
            name: 'name',
            fieldLabel: 'Nombre'
        },
        {
            xtype: 'checkbox',
            name: 'active',
            fieldLabel: 'Active'
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
