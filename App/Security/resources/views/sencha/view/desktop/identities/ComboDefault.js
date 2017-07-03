Ext.define('Melisa.security.view.desktop.identities.ComboDefault', {
    extend: 'Melisa.view.desktop.ComboDefault',
    alias: 'widget.securityIdentitiesComboDefault',
    
    requires: [
        'Melisa.view.desktop.ComboDefault'
    ],
    
    pageSize: 25,
    displayField: 'displayEspecific',
    tpl: Ext.create('Ext.XTemplate',
        '<ul class="x-list-plain"><tpl for=".">',
            '<li role="option" class="x-boundlist-item" style="font-size: 16px; padding: 10px;">',
                '<i class="{profileCls}" style="margin-right: 15px"></i> {displayEspecific}',
            '</li>',
        '</tpl></ul>'
    )
});