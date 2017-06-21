Ext.define('Melisa.security.view.desktop.rbacRoles.view.Tasks', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.securityRbacRolesViewTasks',
    
    emptyText: 'Sin tareas privilegiadas',
    deferEmptyText: true,
    bind: {
        store: '{tasks}'
    },
    columns: [
        {
            text: 'Nombre',
            dataIndex: 'task',
            flex: 1
        },
        {
            text: 'Clave',
            dataIndex: 'taskKey',
            flex: 1,
            hidden: true
        },
        {
            xtype: 'booleancolumn',
            text: 'Activo',
            dataIndex: 'active'
        },
        {
            xtype: 'booleancolumn',
            text: 'De sistema',
            dataIndex: 'isSystem'
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
                iconCls: 'x-fa fa-trash',
                tooltip: 'Eliminar tarea privilegiada',
                bind: {
                    melisa: '{modules.tasksDelete}',
                    hidden: '{!modules.tasksDelete.allowed}'
                },
                plugins: {
                    ptype: 'buttonconfirmation',
                    messageSuccess: 'Tarea privilegiada eliminada'
                }
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                bind: {
                    melisa: '{record.active ? modules.tasksDeactive : modules.tasksActive}',
                    hidden: '{record.active ? !modules.tasksDeactive.allowed : !modules.tasksActive.allowed}',
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
                        ) + ' la tarea privilegiada?';
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
                task: {
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
                iconCls: 'x-fa fa-tasks',
                scale: 'large',
                tooltip: 'Agregar tarea privilegiada',
                bind: {
                    melisa: '{modules.tasksAdd}',
                    hidden: '{!modules.tasksAdd.allowed}'
                },
                listeners: {
                    click: 'moduleRun',
                    loaded: 'onLoadedModuleAsociate'
                }
            }
        }
    ]
});