Ext.define('Melisa.security.view.desktop.users.view.WrapperController', {
    extend: 'Melisa.controller.View',
    alias: 'controller.securityUsersView',
    
    requires: [
        'Melisa.controller.View'
    ],
    
    listen: {
        global: {
            'app.security.users.create.success': 'onUpdatedRecord',
            'app.security.users.update.success': 'onUpdatedRecord',
            'app.security.identities.create.success': 'onUpdatedProfiles',
            'app.security.identities.update.success': 'onUpdatedProfiles'
        }
    },
    
    storeReload: 'users',
    windowReportConfig: {
        title: 'Usuario'
    },
    
    onUpdatedProfiles: function() {
        this.getViewModel().getStore('identities').load();
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
    },
    
    onLoadedModuleAsociate: function(module, options) {
        var me = this,
            securityUsersViewGrid = me.getView().down('securityUsersViewGrid');
    
        module.fireEvent('loaddata', {
            id: securityUsersViewGrid.getSelection()[0].get('id')
        }, options.launcher);
    }
    
});