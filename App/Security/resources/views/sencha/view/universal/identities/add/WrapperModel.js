Ext.define('Melisa.security.view.universal.identities.add.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.securityIdentitiesAdd',
        
    data: {
        fieldsHidden: [
            'idUser'
        ]
    },
    stores: {
        profiles: {
            remoteFilter: true,
            proxy: {
                type: 'ajax',
                url: '{modules.profiles}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        }
    }
    
});
