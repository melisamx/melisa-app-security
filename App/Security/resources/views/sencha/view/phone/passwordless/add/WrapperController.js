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
        selectuser: 'onSelectUser'
    },
    
    onBtnTapSelectUser: function() {
        
        var me = this,
            view = me.getView(),
            usersSelect = view.down('securityusersselectwrapper');
        
        usersSelect.fireEvent('display', me, 'selectuser');
        view.setActiveItem(usersSelect);
        
    },
    
    onSelectUser: function() {
        
        var me = this,
            view = me.getView();
        
        console.log('onSelectUser', arguments);
        view.setActiveItem(0);
        
    }
    
});
