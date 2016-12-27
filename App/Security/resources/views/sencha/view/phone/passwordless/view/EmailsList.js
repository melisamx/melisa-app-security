Ext.define('Melisa.security.view.phone.passwordless.view.EmailsList', {
    extend: 'Ext.List',
    alias: 'widget.securitypasswordlessemailslist',
    
    reference: 'lisEmails',
    loadingText: 'Obteniendo emails permitidos',
    emptyText: 'No hay emails permitidos',
    hideAnimation: 'fadeOut',
    cls: 'emails-list',
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
        store: '{emails}'
    },
    itemTpl: [
        '<div class="wrapper {[ values.active ? "active": "" ]}">',
            '<h3 class="name">{email}</h3>',
            '<p class="date-expiry">{dateExpiry}</p>',
        '</div>'
    ],
    listeners: {
        itemtaphold: 'onItemtapholdLisEmails'
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
