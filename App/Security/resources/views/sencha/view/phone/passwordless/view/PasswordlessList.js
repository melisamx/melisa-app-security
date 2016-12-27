Ext.define('Melisa.security.view.phone.passwordless.view.PasswordlessList', {
    extend: 'Ext.List',
    alias: 'widget.securitypasswordlesslist',    
    reference: 'lisPasswordless',
    
    loadingText: 'Obteniendo lista de passwordless',
    emptyText: 'No hay passwordless registrados',
    hideAnimation: 'fadeOut',
    cls: 'passwordlesss-list',
    deferEmptyText: true,
    striped: true,
    onItemDisclosure: true,
    publishes: [
        'hidden'
    ],
    bind: {
        store: '{passwordless}'
    },
    showAnimation: {
        type: 'slide',
        direction: 'right'
    },
    itemTpl: [
        '<div class="wrapper {[ values.active ? "active": "" ]}">',
            '<h3 class="name">{name}</h3>',
            '<p>{userName}</p>',
        '</div>'
    ],
    listeners: {
        disclose: 'onDiscloseLisPasswordless',
        itemtaphold: 'onItemtapholdLisPasswordless'
    },
    plugins: [
        {
            xclass: 'Ext.plugin.ListPaging',
            autoPaging: true
        },
        {
            xclass: 'Ext.plugin.PullRefresh'
        }
    ]
    
});