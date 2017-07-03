Ext.define('Melisa.security.view.desktop.my.profile.settings.view.Access', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.securityMyProfileSettingsViewAccess',
    
    items: [
        {
            title: 'Cómo acceder',
            layout: 'hbox',
            defaults: {
                xtype: 'panel',
                bodyPadding: 15,
                flex: 1
            },
            items: [
                {
                    items: [
                        {
                            xtype: 'component',
                            html: '<b>Asegúrate de elegir una contraseña segura</b><br><br>Una contraseña segura tiene una combinación de números, letras y símbolos. Es difícil de adivinar, no se parece a una palabra real y solo se utiliza para esta cuenta.'
                        }
                    ]
                },
                {
                    layout: 'anchor',
                    defaults: {
                        xtype: 'component',
                        anchor: '100%'
                    },
                    items: [
                        {
                            cls: 'title',
                            html: 'Método de acceso y contraseña'
                        },
                        {
                            html: 'La contraseña protege tu cuenta. También puedes agregar una segunda capa de protección con la verificación en dos pasos, que envía un código de uso único al teléfono para que lo ingreses cuando accedas a la cuenta. De esta forma, si alguien roba tu contraseña, no será suficiente para ingresar a la cuenta.'
                        },
                        {
                            html: '<br><b>Nota</b>: para modificar estas opciones de configuración, deberás confirmar la contraseña.'
                        },
                        {
                            xtype: 'button',
                            scale: 'large',
                            text: 'Cambiar contraseña',
                            margin: '10 0'
                        },
                        {
                            xtype: 'button',
                            scale: 'large',
                            text: 'Activar verficación en dos pasos',
                            margin: '10 0'
                        }
                    ]
                }
            ]
        }
    ]
});