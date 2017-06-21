Ext.define('Melisa.security.view.universal.rbacRoles.view.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.securityRbacRolesView',
        
    stores: {
        roles: {
            autoLoad: true,
            remoteFilter: true,
            remoteSort: true,
            proxy: {
                type: 'ajax',
                url: '{modules.roles}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        identities: {
            remoteFilter: true,
            remoteSort: true,
            filters: [
                {
                    property: 'idRbacRol',
                    value: '{idRbacRol}'
                }
            ],
            proxy: {
                type: 'ajax',
                url: '{modules.identities}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        tasks: {
            remoteFilter: true,
            remoteSort: true,
            filters: [
                {
                    property: 'idRbacRol',
                    value: '{idRbacRol}'
                }
            ],
            proxy: {
                type: 'ajax',
                url: '{modules.tasks}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        }
    }
    
});
