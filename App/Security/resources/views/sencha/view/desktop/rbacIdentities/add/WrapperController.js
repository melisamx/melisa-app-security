Ext.define('Melisa.security.view.desktop.rbacIdentities.add.WrapperController', {
    extend: 'Melisa.controller.Create',
    alias: 'controller.securityRbacIdentitiesAdd',
    
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
    
    eventSuccess: 'app.security.rbacIdentities.create.success',
    
    onBeforeLoadData: function(data) {
        var me = this;console.log(data);
        me.getViewModel().set('idRbacRol', data.id);
        me.mixins.update.onSuccessLoadData.call(me, {
            idRbacRol: data.id
        });
        return false;
    }
    
});
