Ext.define('Melisa.security.view.universal.rbacIdentities.add.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.securityRbacIdentitiesAdd',
        
    data: {
        fieldsHidden: [
            'idRbacRol'
        ]
    },
    stores: {
        identities: {
            remoteFilter: true,
            remoteSort: true,
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
