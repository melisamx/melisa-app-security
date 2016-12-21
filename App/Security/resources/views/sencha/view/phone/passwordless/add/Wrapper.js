Ext.define('Melisa.security.view.phone.passwordless.add.Wrapper', {
    extend: 'Ext.form.Panel',
    
    requires: [
        'Melisa.security.view.phone.passwordless.add.Title',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    bodyPadding: 15,
    viewModel: {},
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
            xtype: 'checkboxfield',
            name: 'active',
            label: 'Activo'
        }
    ]
    
});
