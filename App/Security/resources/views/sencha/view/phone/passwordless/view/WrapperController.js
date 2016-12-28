Ext.define('Melisa.security.view.phone.passwordless.view.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.securitypasswordlessview',
    
    onDiscloseLisPasswordless: function(lis, record) {
        
        var me = this,
            model = me.getViewModel();
        
        model.set('idPasswordless', record.get('id'));
        me.navigateTo('lisEmails');       
        
    },
    
    onItemtapholdLisPasswordless: function() {
        
        this.lookup('asPasswordless').show();
        
    },
    
    onItemtapholdLisEmails: function() {
        
        this.lookup('asEmails').show();
        
    },
    
    onTapBtnEmailsPermit: function() {
        
        this.navigateTo('lisPasswordless');
        
    }
    
});
