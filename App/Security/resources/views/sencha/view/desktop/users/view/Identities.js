Ext.define('Melisa.security.view.desktop.users.view.Identities', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.securityUsersViewIdentities',
    
    emptyText: 'Usuario sin perfiles',
    deferEmptyText: true,
    bind: {
        store: '{identities}'
    },
    columns: [
        {
            text: 'Perfil',
            dataIndex: 'profile',
            flex: 1
        },
        {
            text: 'Nombre',
            dataIndex: 'displayEspecific',
            flex: 1
        },
        {
            text: 'Nombregeneral',
            dataIndex: 'display',
            flex: 1,
            hidden: true
        },
        {
            xtype: 'booleancolumn',
            text: 'Activa',
            dataIndex: 'active'
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
                tooltip: 'Modificar identidad',
                bind: {
                    melisa: '{modules.identitiesUpdate}',
                    hidden: '{!modules.identitiesUpdate.allowed}'
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
                tooltip: 'Eliminar perfil',
                bind: {
                    melisa: '{modules.identitiesDelete}',
                    hidden: '{!modules.identitiesDelete.allowed}'
                },
                plugins: {
                    ptype: 'buttonconfirmation',
                    messageSuccess: 'Perfil eliminado'
                }
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                bind: {
                    melisa: '{record.active ? modules.identitiesDeactive : modules.identitiesActive}',
                    hidden: '{record.active ? !modules.identitiesDeactive.allowed : !modules.identitiesActive.allowed}',
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
                displayEspecific: {
                    operator: 'like'
                },
                profile: {
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
                iconCls: 'x-fa fa-plus',
                scale: 'large',
                tooltip: 'Agregar identidad',
                bind: {
                    melisa: '{modules.identitiesAdd}',
                    hidden: '{!modules.identitiesAdd.allowed}'
                },
                listeners: {
                    click: 'moduleRun',
                    loaded: 'onLoadedModuleAsociate'
                }
            }
        }
    ]
});