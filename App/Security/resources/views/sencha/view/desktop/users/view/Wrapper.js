Ext.define('Melisa.security.view.desktop.users.view.Wrapper', {
    extend: 'Ext.grid.Panel',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    cls: 'app-security-users-view',
    emptyText: 'No hay usuarios registrados',
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
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 140
        },
        {
            xtype: 'booleancolumn',
            text: 'De sistema?',
            dataIndex: 'isSystem',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 125
        }
    ],
    selModel: {
        selType: 'checkboxmodel'
    },
    tbar: [
        {
            text: 'Agregar usuario',
            iconCls: 'x-fa fa-plus',
            bind: {
                melisa: '{modules.add}',
                hidden: '{!modules.add.allowed}',
            },
            listeners: {
                click: 'moduleRun'
            }
        },
        {
            text: 'Eliminar usuario',
            iconCls: 'x-fa fa-trash',
            bind: {
                melisa: '{modules.delete}',
                hidden: '{!modules.delete.allowed}',
            },
            listeners: {
                click: 'moduleRun',
                loaded: 'onUsuarioDeleteLoaded'
            }
        }
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
    plugins: [
        {
            ptype: 'autofilters',
            filters: {
                scope: {
                    operator: 'like'
                },
                nombre: {
                    operator: 'like'
                },
                patente: {
                    operator: 'like'
                },
                referencia: {
                    operator: 'like'
                }
            },
            filtersIgnore: [
                'fechaCreacion',
                'fechaModificacion'
            ]
        }
    ]
    
});
