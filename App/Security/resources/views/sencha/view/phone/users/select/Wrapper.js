Ext.define('Melisa.security.view.phone.users.select.Wrapper', {
    extend: 'Ext.Container',
    alias: 'widget.securityusersselectwrapper',
    
    requires: [
        'Melisa.security.view.phone.users.select.List',
        'Melisa.security.view.phone.users.select.Title',
        'Melisa.core.Module',
        'Melisa.core.SelectViewController'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    layout: 'fit',
    hideAnimation: 'fadeOut',
    viewModel: {
        stores: {
            users: {
                autoLoad: true,
                proxy: {
                    type: 'ajax',
                    url: '{modules.list.url}',
                    reader: {
                        type: 'json',
                        rootProperty: 'data'
                    }
                }
            }
        }
    },
    controller: {
        type: 'selectcontroller'
    },
    showAnimation: {
        type: 'slide',
        direction: 'right'
    },
    items: [
        {
            xtype: 'securityusersselecttitle'
        },
        {
            xtype: 'securityusersviewlist'
        }
    ]
    
});
