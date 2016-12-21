Ext.define('Melisa.security.view.phone.passwordless.view.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.securitypasswordlessview',
    
    requires: [
        'Melisa.util.faker.Faker'
    ],
    
    onRender: function() {
        
        var me = this,
            model = me.getViewModel();
        
        model.getStore('passwordless').setData(jsf(model.get('faker.passwordless')));
        model.getStore('emails').setData(jsf(model.get('faker.emails')));
        
    },
    
    onTapBtnAddPasswordless: function() {
        
        var me = this,
            view = me.getView();
        
        Melisa.core.module.Manager.launch({
            nameSpace: 'Melisa.security.view.phone.passwordless.add.Wrapper'
        }, function(instance) {
            
            view.add(instance)
            view.setActiveItem(instance);
            
        });
        
    },
    
    onDiscloseLisPasswordless: function() {
        
        this.navigateTo('lisEmails');
        
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
