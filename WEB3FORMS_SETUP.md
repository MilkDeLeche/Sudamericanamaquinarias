# Configuración de Web3Forms para el Formulario de Contacto

## ✅ Ventajas de Web3Forms

- ✅ **Gratis** - 250 envíos por mes gratis
- ✅ **Sin configuración en dashboard** - Funciona inmediatamente
- ✅ **Fácil de usar** - Solo necesitas un access_key
- ✅ **Envío directo a email** - Los mensajes van directamente a tu email
- ✅ **Sin spam** - Protección anti-spam incluida

## 🚀 Pasos para Configurar (2 minutos)

### Paso 1: Obtener tu Access Key

1. Ve a [https://web3forms.com](https://web3forms.com)
2. Ingresa tu email: `contacto@Sudamericanamaquinarias.com`
3. Haz clic en **"Get your Access Key"**
4. Revisa tu email en `contacto@Sudamericanamaquinarias.com`
5. Copia el **Access Key** que recibes por email

### Paso 2: Actualizar el Formulario

1. Abre el archivo `contact.html`
2. Busca esta línea:
   ```html
   <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
   ```
3. Reemplaza `YOUR_ACCESS_KEY_HERE` con el Access Key que recibiste
4. Guarda el archivo

### Paso 3: Probar el Formulario

1. Sube los cambios a GitHub y despliega en Netlify
2. Envía un mensaje de prueba desde el formulario
3. Deberías recibir el email inmediatamente en `contacto@Sudamericanamaquinarias.com`

## 📧 Configuración del Email

El formulario ya está configurado para:
- **Email destino**: Se configura automáticamente con el email que usaste para obtener el Access Key
- **Asunto**: "Nuevo mensaje de contacto - Sudamericana Maquinarias"
- **Redirección**: Después de enviar, redirige a `/thank-you.html`

## 🔒 Seguridad

- ✅ Protección anti-spam incluida (botcheck)
- ✅ Validación de formulario en el cliente
- ✅ HTTPS por defecto
- ✅ Sin necesidad de exponer credenciales

## 📊 Límites

- **Plan Gratuito**: 250 envíos por mes
- **Plan Pro**: 10,000 envíos por mes ($5/mes)
- **Plan Business**: Ilimitado ($20/mes)

## ❓ Solución de Problemas

### No recibes emails

1. ✅ Verifica que el Access Key esté correcto
2. ✅ Revisa la carpeta de spam
3. ✅ Verifica que el email en Web3Forms sea `contacto@Sudamericanamaquinarias.com`
4. ✅ Revisa la consola del navegador para errores

### El formulario no envía

1. ✅ Verifica que el Access Key esté en el código
2. ✅ Revisa la consola del navegador (F12)
3. ✅ Asegúrate de que todos los campos requeridos estén llenos

## 🔗 Enlaces Útiles

- **Web3Forms**: [https://web3forms.com](https://web3forms.com)
- **Documentación**: [https://docs.web3forms.com](https://docs.web3forms.com)
- **Dashboard**: [https://dashboard.web3forms.com](https://dashboard.web3forms.com)

## ✅ Checklist

- [ ] Obtuviste el Access Key de Web3Forms
- [ ] Actualizaste `YOUR_ACCESS_KEY_HERE` en `contact.html`
- [ ] Probaste enviar un mensaje
- [ ] Recibiste el email en `contacto@Sudamericanamaquinarias.com`

