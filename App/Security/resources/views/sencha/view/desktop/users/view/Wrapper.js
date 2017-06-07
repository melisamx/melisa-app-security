Ext.define('Melisa.security.view.desktop.users.view.Wrapper', {
    extend: 'Ext.grid.Panel',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.core.Module',
        'Melisa.ux.FloatingButton',
        'Melisa.ux.confirmation.Button'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    cls: 'app-security-users-view',
    emptyText: 'No hay usuarios registrados',
    iconCls: 'x-fa fa fa-users',
    deferEmptyText: true,
    bind: {
        store: '{users}'
    },
    viewModel: {
        stores: {
            users: {
                autoLoad: true,
                remoteFilter: true,
                remoteSort: true,
                proxy: {
                    type: 'ajax',
                    url: '{modules.users}',
                    reader: {
                        type: 'json',
                        rootProperty: 'data'
                    }
                }
            }
        }
    },
    columns: [
        {
            text: 'Usuario',
            dataIndex: 'name',
            flex: 1
        },
        {
            xtype: 'booleancolumn',
            text: 'Activo',
            dataIndex: 'active',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 90
        },
        {
            xtype: 'booleancolumn',
            text: 'Cambiar contraseña',
            dataIndex: 'changePassword',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 180
        },
        {
            xtype: 'booleancolumn',
            text: 'Primer inicio',
            dataIndex: 'firstLogin',
            align: 'center',
            width: 140
        },
        {
            xtype: 'booleancolumn',
            text: 'De sistema?',
            dataIndex: 'isSystem',
            align: 'center',
            width: 125
        },
        {
            xtype: 'datecolumn',
            dataIndex: 'createdAt',
            text: 'Fecha creación',
            format:'d/m/Y h:i:s a',
            width: 180
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
                tooltip: 'Modificar usuario',
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
                tooltip: 'Eliminar usuario',
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
                    ptype: 'buttonconfirmation'
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
                name: {
                    operator: 'like'
                },
                email: {
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
                bind: {
                    melisa: '{modules.add}',
                    hidden: '{!modules.add.allowed}'
                }
            }
        }
    ]
    
});
