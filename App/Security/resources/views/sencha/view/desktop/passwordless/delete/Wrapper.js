Ext.define('Melisa.security.view.desktop.users.delete.Wrapper', {
    extend: 'Melisa.view.desktop.window.delete.WithIframe',
    
    requires: [
        'Melisa.view.desktop.window.delete.WithIframe'
    ],
    
    bind: {
        title: '{wrapper.title} de la patente {patente}'
    },
    
    listeners: {
        
        errorsubmit: function() {
            
            Ext.Msg.alert('Atención', 'Imposible eliminar firma, intentelo nuevamente');
            
        },
        successloadremotedata: function(data) {
            
            this.getViewModel().set({
                patente: data.patente
            });
            
        }
        
    }
    
});
