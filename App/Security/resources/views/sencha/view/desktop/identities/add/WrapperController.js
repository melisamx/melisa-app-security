Ext.define('Melisa.security.view.desktop.identities.add.WrapperController', {
    extend: 'Melisa.controller.Create',
    alias: 'controller.securityIdentitiesAdd',
    
    requires: [
        'Melisa.controller.AppendFields',
        'Melisa.controller.LoadData',
        'Melisa.controller.Update'
    ],
    
    mixins: {
        appendfields: 'Melisa.controller.AppendFields',
        loaddata: 'Melisa.controller.LoadData',
        update: 'Melisa.controller.Update'
    },
    
    control: {
        '#': {
            loaddata: 'onLoadData',
            successloadremotedata: 'onSuccessLoadData',
            beforeloaddata: 'onBeforeLoadData'
        }
    },
    
    eventSuccess: 'app.security.identities.create.success',
    
    onBeforeLoadData: function(data) {
        var me = this;console.log(data);
        me.getViewModel().set('idUser', data.id);
        me.mixins.update.onSuccessLoadData.call(me, {
            idUser: data.id
        });
        return false;
    }
    
});
