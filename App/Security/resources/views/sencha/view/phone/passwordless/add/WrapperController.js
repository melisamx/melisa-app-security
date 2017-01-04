Ext.define('Melisa.security.view.phone.passwordless.add.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.securitypassworlessadd',
    
    requires: [
        'Melisa.core.module.Create'
    ],
    
    mixins: [
        'Melisa.core.module.Create'
    ],
    
    listeners: {
        userselect: 'onSelectUser'
    },
    
    onSelectUser: function(record) {
        
        var me = this,
            view = me.getView();
        
        me.activateModule(view);
        me.lookup('conUserSelected').setData(record.data);
        
    },
    
    onPitcherUserReady: function(module) {
        
        var me = this;
        
        module.fireEvent('display', me, 'userselect');
        me.activateModule(module);
        
    }
    
});
