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
        title: 'Usuario'
    },
    
    onSelectionchangeGrid: function(sm, selection) {
        var me = this,
            vm = me.getViewModel(),
            view = me.getView();
    
        if( Ext.isEmpty(selection)) {
            vm.set('hiddenColumns', false);
            view.down('securityUsersViewIdentities').collapse();
        } else {
            vm.set('hiddenColumns', true);
            view.down('securityUsersViewIdentities').expand();
            vm.set('idUser', selection[0].get('id'));
            vm.notify();
            vm.getStore('identities').load();
        }
    },
    
    onAfterRenderIdentities: function(cmp) {
        cmp.collapse();
    }
    
});