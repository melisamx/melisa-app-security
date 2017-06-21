Ext.define('Melisa.security.view.desktop.rbacRoles.view.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.securityRbacRolesViewGrid',
    
    emptyText: 'No hay roles',
    deferEmptyText: true,
    bind: {
        store: '{roles}'
    },
    columns: [
        {
            text: 'Rol',
            dataIndex: 'role',
            flex: 1
        },
        {
            xtype: 'booleancolumn',
            text: 'Activo',
            dataIndex: 'active',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 90,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'booleancolumn',
            text: 'De sistema?',
            dataIndex: 'isSystem',
            align: 'center',
            width: 125,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'datecolumn',
            dataIndex: 'createdAt',
            text: 'Fecha creación',
            format:'d/m/Y h:i:s a',
            width: 180,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'datecolumn',
            dataIndex: 'updatedAt',
            text: 'Fecha modificación',
            format:'d/m/Y h:i:s a',
            width: 180,
            hidden: true,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                iconCls: 'x-fa fa-pencil',
                tooltip: 'Modificar rol',
                bind: {
                    melisa: '{modules.update}',
                    hidden: '{!modules.update.allowed}'
                },
                listeners: {
                    click: 'moduleRun',
                    loaded: 'onLoadedModuleUpdate'
                }
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                iconCls: 'x-fa fa-trash',
                tooltip: 'Eliminar rol',
                bind: {
                    melisa: '{modules.delete}',
                    hidden: '{!modules.delete.allowed}'
                },
                plugins: {
                    ptype: 'buttonconfirmation'
                }
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                bind: {
                    melisa: '{record.active ? modules.deactivate : modules.activate}',
                    hidden: '{record.active ? !modules.deactivate.allowed : !modules.activate.allowed}',
                    iconCls: '{record.active ? "x-fa fa-thumbs-down" : "x-fa fa-thumbs-up" }',
                    tooltip: '{record.active ? "Desactivar" : "Activar"}'
                },
                plugins: {
                    ptype: 'buttonconfirmation',
                    getMessageConfirmation: function() {
                        var me = this,
                            button = me.getCmp(),
                            record = button.getViewModel().get('record'),
                            message = '¿Realmente desea ';
                        
                        return message + (
                            record.get('active') ? 'desactivar' : 'activar'
                        ) + ' el rol?';
                    }
                }
            }
        }
    ],
    selModel: {
        selType: 'checkboxmodel'
    },
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
    plugins: [
        {
            ptype: 'autofilters',
            filters: {
                role: {
                    operator: 'like'
                }
            },
            filtersIgnore: [
                'createdAt',
                'updatedAt'
            ]
        },
        {
            ptype: 'floatingbutton',
            configButton: {
                handler: 'moduleRun',
                iconCls: 'x-fa fa-plus',
                scale: 'large',
                tooltip: 'Agregar rol',
                bind: {
                    melisa: '{modules.add}',
                    hidden: '{!modules.add.allowed}'
                }
            }
        }
    ]
});
