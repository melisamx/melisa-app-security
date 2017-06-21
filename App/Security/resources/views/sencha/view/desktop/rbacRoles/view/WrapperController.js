Ext.define('Melisa.security.view.desktop.rbacRoles.view.WrapperController', {
    extend: 'Melisa.controller.View',
    alias: 'controller.securityRbacRolesView',
    
    requires: [
        'Melisa.controller.View'
    ],
    
    listen: {
        global: {
            'app.security.rbacRoles.create.success': 'onUpdatedRecord',
            'app.security.rbacRoles.update.success': 'onUpdatedRecord',
            'app.security.rbacIdentities.create.success': 'onUpdatedIdentities',
            'app.security.rbacTasks.create.success': 'onUpdatedTasks'
        }
    },
    
    storeReload: 'roles',
    windowReportConfig: {
        title: 'Rol'
    },
    
    onUpdatedTasks: function() {
        this.getViewModel().getStore('tasks').load();
    },
    
    onUpdatedIdentities: function() {
        this.getViewModel().getStore('identities').load();
    },
    
    onSelectionchangeGrid: function(sm, selection) {
        var me = this,
            vm = me.getViewModel(),
            view = me.getView();
    
        if( Ext.isEmpty(selection)) {
            vm.set('hiddenColumns', false);
            view.down('#panDetails').collapse();
            return;
        }
        
        vm.set('hiddenColumns', true);
        view.down('#panDetails').expand();
        vm.set('idRbacRol', selection[0].get('id'));
        vm.notify();
        
        Ext.defer(function() {        
            vm.getStore('identities').load();
            vm.getStore('tasks').load();
        }, 500);
    },
    
    onAfterRenderDetails: function(cmp) {
        cmp.collapse();
    },
    
    onLoadedModuleAsociate: function(module, options) {
        var me = this,
            securityRbacRolesViewGrid = me.getView().down('securityRbacRolesViewGrid');
    
        module.fireEvent('loaddata', {
            id: securityRbacRolesViewGrid.getSelection()[0].get('id')
        }, options.launcher);
    }
    
});