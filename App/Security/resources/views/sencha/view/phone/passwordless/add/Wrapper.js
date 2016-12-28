Ext.define('Melisa.security.view.phone.passwordless.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.security.view.phone.passwordless.add.Title',
        'Melisa.security.view.phone.passwordless.add.WrapperController',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: 'securitypassworlessadd',
    bodyPadding: 15,
    viewModel: {},
    bind: {
        url: '{modules.create}'
    },
    items: [
        {
            xtype: 'securitypasswordlessaddtitle'
        },
        {
            xtype: 'textfield',
            name: 'name',
            placeHolder: 'Ingresa nombre',
            label: 'Nombre'
        },
        {
            xtype: 'togglefield',
            labelAlign: 'left',
            name: 'active',
            label: 'Activo'
        }
    ]
    
});
