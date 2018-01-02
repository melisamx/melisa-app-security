Ext.define('Melisa.security.view.desktop.profiles.Combo', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.securityProfilesCombo',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    name: 'idProfile',
    fieldLabel: 'Perfil',
    bind: {
        store: '{profiles}'
    },
    tpl: Ext.create('Ext.XTemplate',
        '<ul class="x-list-plain"><tpl for=".">',
            '<li role="option" class="x-boundlist-item" style="font-size: 16px; padding: 10px;">',
                '<i class="{icon}" style="margin-right: 15px"></i> {name}',
            '</li>',
        '</tpl></ul>'
    )
});