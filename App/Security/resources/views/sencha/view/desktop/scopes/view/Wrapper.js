Ext.define('Melisa.security.view.desktop.scopes.view.Wrapper', {
    extend: 'Ext.grid.Panel',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.ux.confirmation.Button',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    cls: 'app-security-scopes-view',
    emptyText: 'No hay ámbitos registrados',
    reference: 'grid',
    iconCls: 'x-fa fa-sitemap',
    deferEmptyText: true,
    bind: {
        store: '{scopes}'
    },
    viewModel: {
        stores: {
            scopes: {
                autoLoad: true,
                remoteFilter: true,
                remoteSort: true,
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
    columns: [
        {
            dataIndex: 'id',
            text: 'Id',
            hidden: true
        },
        {
            dataIndex: 'name',
            text: 'Nombre',
            flex: 1
        },
        {
            xtype: 'booleancolumn',
            text: 'Activo',
            dataIndex: 'active',
            trueText: 'Si',
            falseText: 'No',
            align: 'center',
            width: 180
        },
        {
            dataIndex: 'cratedAt',
            text: 'Fecha creación',
            flex: 1
        },
        {
            dataIndex: 'updatedAt',
            text: 'Fecha modificación',
            flex: 1,
            hidden: true
        }
    ],
    selModel: {
        selType: 'checkboxmodel'
    },
    tbar: [
        {
            text: 'Agregar',
            iconCls: 'x-fa fa-plus',
            bind: {
                melisa: '{modules.add}',
                hidden: '{!modules.add.allowed}'
            },
            listeners: {
                click: 'moduleRun'
            }
        },
        {
            text: 'Eliminar',
            iconCls: 'x-fa fa-trash',
            bind: {
                melisa: '{modules.delete}',
                hidden: '{!modules.delete.allowed}',
                disabled: '{!grid.selection}'
            },
            plugins: {
                ptype: 'buttonconfirmation'
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
                nombre: {
                    operator: 'like'
                }
            },
            filtersIgnore: [
                'id',
                'fechaCreacion',
                'fechaModificacion'
            ]
        }
    ]
    
});
