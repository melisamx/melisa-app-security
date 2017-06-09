Ext.define('Melisa.security.view.universal.users.view.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.securityUsersView',
        
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
        },
        identities: {
            remoteFilter: true,
            remoteSort: true,
            filters: [
                {
                    property: 'idUser',
                    value: '{idUser}'
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
        }
    }
    
});
