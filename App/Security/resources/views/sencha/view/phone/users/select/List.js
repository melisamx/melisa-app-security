Ext.define('Melisa.security.view.phone.users.select.List', {
    extend: 'Ext.List',
    alias: 'widget.securityusersviewlist',
    
    reference: 'lisUsers',
    loadingText: 'Obteniendo usuarios',
    emptyText: 'No hay usuarios',
    hideAnimation: 'fadeOut',
    deferEmptyText: true,
    striped: true,
    onItemDisclosure: true,
    publishes: [
        'hidden'
    ],
    showAnimation: {
        type: 'slide',
        direction: 'right'
    },
    bind: {
        store: '{users}'
    },
    itemTpl: [
        '<div class="wrapper {[ values.active ? "active": "" ]}">',
            '<h3 class="name">{name}</h3>',
            '<p class="email">{email}</p>',
        '</div>'
    ],
    listeners: {
        disclose: 'onDisclose'
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
