# Configuración de Netlify para Formularios de Contacto

## Pasos para configurar el envío de emails en Netlify

### 1. Configurar Netlify Forms en el Dashboard

1. Ve a tu sitio en [Netlify Dashboard](https://app.netlify.com)
2. Navega a **Site settings** > **Forms**
3. Asegúrate de que "Form notifications" esté habilitado

### 2. Configurar Notificaciones por Email

1. En **Site settings** > **Forms** > **Form notifications**
2. Haz clic en **Add notification**
3. Selecciona **Email notification**
4. Configura:
   - **To email**: `contacto@Sudamericanamaquinarias.com`
   - **From email**: (puede ser el mismo o un email de Netlify)
   - **Subject**: `Nuevo mensaje de contacto - Sudamericana Maquinarias`
   - **Email template**: Personaliza el mensaje si lo deseas

### 3. Template de Email Sugerido

```
Nuevo mensaje de contacto recibido:

Nombre: {{name}}
Email: {{email}}

Mensaje:
{{message}}

---
Este mensaje fue enviado desde el formulario de contacto de Sudamericana Maquinarias.
```

### 4. Verificar el Formulario

El formulario en `contact.html` ya está configurado con:
- `data-netlify="true"` - Habilita Netlify Forms
- `netlify-honeypot="bot-field"` - Protección anti-spam
- `action="/thank-you.html"` - Redirección después del envío
- Campo oculto `form-name="contact"` - Identifica el formulario

### 5. Probar el Formulario

1. Despliega tu sitio en Netlify
2. Envía un mensaje de prueba desde el formulario
3. Verifica que recibas el email en `contacto@Sudamericanamaquinarias.com`
4. Revisa los envíos en **Forms** > **Active forms** > **contact**

### Notas Importantes

- Netlify Forms es gratuito hasta 100 envíos por mes
- Los emails se envían automáticamente cuando alguien completa el formulario
- Puedes ver todos los envíos en el dashboard de Netlify
- El formulario funciona sin necesidad de código backend adicional

