                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <?php
/**
 * i-MSCP CronJobs plugin
 * Copyright (C) 2014-2015 Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @translator Damian Axel Xavier (DAX) <dax@ispdot.com.ar>
 */

return array(
	'Cron job permissions' => 'Permisos tareas Programadas',
	'Cron jobs' => 'Tareas Programadas',
	'Cron job has been scheduled for addition.' => 'La tarea de Cron ha sido programada para ser añadida.',
	'Cron job has been scheduled for update.' => 'La tarea de cron ha sido programada para ser actualizada.',
	'Cron job has been scheduled for activation.' => 'La tarea de Cron ha sido programada para ser activación.',
	'Cron job has been scheduled for deactivation.' => 'La tarea de Cron ha sido programada para ser desactivación.',
	'Cron job has been scheduled for deletion.' => 'La tarea de Cron ha sido programada para ser eliminada.',
	'Your cron jobs limit is reached.' => 'Tu límite de tareas programadas ha sido alcanzado.',
	'An unexpected error occurred: %s' => 'Ha ocurrido un error inesperado: %s',
	'Bad request.' => 'Petición incorrecta.',
	'Edit' => 'Editar',
	'Deactivate' => 'Desactivar',
	'Activate' => 'Activar',
	'Delete' => 'Eliminar',
	'Url' => 'Url',
	'Shell' => 'Shell',
	'n/a' => 'n/a',
	'Admin / System tools / Cron Jobs' => 'Administrador / Herramientas del Sistema / Tareas Programadas',
	'Interface from which you can add your cron jobs. This interface is for administrators only. Customers have their own interface which is more restricted.' => 'Interface desde la cual podés añadir tus propias tareas programadas. Esta pantalla es solo para Administradores. Los clientes tienen su propia interface, la cual es mas restringida.',
	'Configuring cron jobs requires distinct knowledge of the crontab syntax on Unix based systems. More information about this topic can be obtained on the following webpage:' => 'Configurar tareas programas requiere de conocimiento de la sintaxis del crontab de los sistemas Unix. Mas información acerca de este tema puede ser obtenida en la siguiente página:',
	'Newbie: Intro to cron' => 'Novato: Introducción al cron',
	'Type' => 'Tipo',
	'User' => 'Usuario',
	'Command' => 'Comando',
	'Status' => 'Estado',
	'Actions' => 'Acciones',
	'Loading data...' => 'Cargando datos...',
	'Add cron job' => 'Añadir Tares Programada',
	'Email' => 'Correo',
	'Email to which cron notifications must be sent if any. Leave blank to disable notifications.' => 'Dirección de correo a la cual serán enviadas las notificaciones del cron, si las hubiera. Dejarlo en blanco para deshabilitar las notificaciones.',
	'Minute' => 'Minuto',
	'Minute at which the cron job must be executed.' => 'Minuto en el que se ejecutará la tarea programada.',
	'Hour' => 'Hora',
	'Hour at which the cron job must be executed.' => 'Hora en la que se ejecutará la tarea programada.',
	'Day of month' => 'Día del mes',
	'Day of the month at which the cron job must be executed.' => 'Día del mes en que se ejecutará la tarea programada.',
	'Month' => 'Mes',
	'Month at which the cron job must be executed.' => 'Mes en el que se ejecutará la tarea programada.',
	'Day of week' => 'Día de la Semana',
	'Day of the week at which the cron job must be executed.' => 'Día de la semana en que se ejecutará la tarea programada.',
	'User under which the cron job must be executed.' => 'Usuario bajo el cual se ejecutará la tarea programada.',
	'Command to execute...' => 'Comando a ejecutar...',
	'Command type' => 'Tipo de Comando',
	'Url commands are run via GNU Wget while shell commands are run via shell command interpreter (eg. Dash, Bash...).' => 'Un comando Url se ejecuta a través de Wget mientras que un comando shell se ejecuta a través de un interprete de consola (por ej.. Dash, Bash...).',
	'You can learn more about the syntax by reading:' => 'Podés aprender mas sobre la sintaxis leyendo:',
	'When using a shortcut in the minute time field, all other time/date fields are ignored.' => 'Usando un atajo en el campo Minuto, los demas campos, hora/día, serán ignorados.',
	'The available shortcuts are: @reboot, @yearly, @annually, @monthly, @weekly, @daily, @midnight and @hourly' => 'Los atajos disponibles son: @reboot, @yearly, @annually, @monthly, @weekly, @daily, @midnight and @hourly',
	'Minimum time interval between each cron job execution: %s' => 'Intérvalo de tiempo mínimo entre cada ejecución de tareas programadas: %s',
	'Add / Edit Cron job' => 'Añadir / Editar Tarea Programada',
	'Save' => 'Guardar',
	'Cancel' => 'Cancelar',
	'Are you sure you want to delete this cron job?' => '¿Estás seguro que querés eliminar esta tarea programada?',
	'Unknown action.' => 'Acción desconocida.',
	'Request Timeout: The server took too long to send the data.' => 'Tiempo de espera de petición agotado: El servidor ha tardado demasiado en enviar datos.',
	'An unexpected error occurred.' => 'Ha ocurrido un error inexperado.',
	'An unexpected error occurred. Please contact your reseller.' => 'Ha ocurrido un error inexperado. Por favor, contactá con tu revendedor.',
	'Client / Web Tools / Cron Jobs' => 'Cliente / Herramientas Web / Tareas Programadas',
	'This is the interface from which you can add your cron jobs.' => 'Desde esta pantalla podés añadir tareas programadas.',
	"Wrong value for the 'Max. cron jobs' field. Please, enter a number." => "Valor incorrecto para el campo 'Máximo de tareas programas'. Por favor, ingresa un número.",
	"Wrong value for the 'Cron jobs frequency' field. Please, enter a number." => "Valor incorrecto para el campo 'Frecuencia de tareas programadas'. Por favor, ingresá un número.",
	'The cron jobs frequency is lower than your own limit which is currently set to %s minute.' => array(
		"La frecuencia de las tareas programadas es inferior a tu límite, el cual está definido en %s minuto.",
		"La frecuencia de las tareas programadas es inferior a tu límite, el cual está definido en %s minutos." // Plural form
	),
	'Cron job permissions were added.' => 'Permisos de Tarea Programada añadidos.',
	'Cron job permissions were updated.' => 'Permisos de Tarea Programada actualizados.',
	'Nothing has been changed.' => 'Nada ha sido modificado.',
	"One or many cron jobs which belongs to the reseller's customers are currently processed. Please retry in few minutes." => "Una o varias tareas programadas que pertencen a clientes del revendedor están siendo procesadas actualmente. Por favor, reintentalo en unos minutos.",
	'Cron job permissions were revoked.' => 'Permisos de tareas programadas revocados.',
	'Edit permissions' => 'Editar permisos',
	'Revoke permissions' => 'Revocar permisos',
	'%d minute' => array(
		'%d minuto',
		'%d minutos' // Plural form
	),
	'Unlimited' => 'Ilimitado',
	'Admin / Settings / Cron Job Permissions' => 'Administrador / Configuraciones / Permisos de Tareas Programadas',
	'List of resellers which are allowed to give cron job permissions to their customers.' => 'Listado de revendedores que tienen permitido dar permisos de tareas programadas a sus clientes.',
	'Reseller name' => 'Nombre del Revendedor',
	'Cron jobs type' => 'Tipo de tarea programada',
	'Cron jobs frequency' => 'Frecuencia de la tarea programada',
	'Add / Edit cron job permissions' => 'Añadir / Editar permisos tareas programadas',
	'Enter a reseller name' => 'Ingresá un nombre de revendedor',
	'Type of allowed cron jobs. Note that the Url cron jobs are always available, whatever the selected type.' => 'Tipo de tarea programada permitida. Tener presente que el tipo de tarea Url está siempre disponible, cualquiera sea el tipo seleccionado.',
	'Jailed' => 'Jaula',
	'Full' => 'Completa',
	'Minimum time interval between each cron job execution.' => 'Intérvalo mínimo de tiempo entre cada ejecución de tarea programada.',
	'In minutes' => 'en minutos',
	'Unknown reseller. Please enter a valid reseller name.' => 'Revendedor desconocido. Por favor, ingresá un nombre válido de revendedor.',
	'Please enter a reseller name.' => 'Por favor, ingresá un nombre de revendedor.',
	'Are you sure you want to revoke the cron job permissions for this reseller?' => '¿Estás seguro que querés revocar los permisos de tareas programadas a este revendedor?',
	'List of customers which are allowed to add cron jobs.' => 'Listado de clientes que tienen permitido añadir tareas programadas.',
	'Max. cron jobs' => 'Máx. Tareas Programadas',
	'Customer name' => 'Nombre del Cliente',
	'Enter a customer name' => 'Ingresá un nombre de cliente',
	'0 for unlimited' => '0 para ilimitado',
	'Unknown customer. Please enter a valid customer name.' => 'Cliente desconocido. Por favor, ingresá un nombre válido de cliente.',
	'Please enter a customer name.' => 'Por favor, ingresá un nombre de cliente.',
	'Are you sure you want to revoke the cron job permissions for this customer?' => '¿Estás seguro que querés revocar los permisos de tareas programadas a este cliente?',
	'Invalid cron job type: %s' => 'Tipo de tarea programada inválido: %s.',
	'Invalid notification email.' => 'Correo de notificación inválido.',
	"Value for the '%s' field cannot be empty." => "El valor del campo '%s'  no puede estar vacío.",
	"Invalid value for the '%s' field." => "Valor inválido para el campo '%s'.",
	'Unable to parse time entry.' => 'No se puede analizar la hora ingresada.',
	"You're exceeding the allowed limit of %s minutes, which is the minimum interval time between each cron job execution." => "Estás excediendo el límite de %s minutos, el cual es el intérvalo mínimo de tiempo entre cada ejecución de tarea programada.",
	'User must be a valid UNIX user.' => 'Tiene que ser un usuario UNIX válido.',
	'Url must not contain any username/password for security reasons.' => 'Por razones de seguridad, la Url no puede contener ningún nombre de usuario/contraseña.',
	'Command must be a valid HTTP URL.' => 'El comando tiene que ser una URL HTTP válida.'
);
