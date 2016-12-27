Ext.define('Melisa.security.view.phone.passwordless.view.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.securitypasswordlessview',
    
    stores: {
        passwordless: {
            autoLoad: true,
            proxy: {
                type: 'ajax',
                url: '{urls.passwordless}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        },
        emails: {
            autoLoad: true,
            remoteFilter: true,
            proxy: {
                type: 'ajax',
                url: '{urls.emails}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            filters: [
                {
                    property: 'idPasswordless',
                    value: '{idPasswordless}'
                }
            ]
        }
    }
    
});
