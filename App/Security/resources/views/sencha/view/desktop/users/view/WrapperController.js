Ext.define('Melisa.security.view.desktop.users.view.WrapperController', {
    extend: 'Melisa.controller.View',
    alias: 'controller.securityUsersView',
    
    requires: [
        'Melisa.controller.View'
    ],
    
    listen: {
        global: {
            'app.security.users.create.success': 'onUpdatedRecord',
            'app.security.users.update.success': 'onUpdatedRecord'
        }
    },
    
    storeReload: 'users',
    windowReportConfig: {
        title: 'Cliente',
        neverCache: true
    },
});